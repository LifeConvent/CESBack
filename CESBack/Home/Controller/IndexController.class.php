<?php
namespace Home\Controller;

use Think\Controller;
use Think\Log;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function login()
    {
        $user = I('post.user');
        $pass = I('post.pass');
        if ($user == null || $pass == null) {
            $result['status'] = 'failed';
            $result['hint'] = '登录失败！';
        } else {
            $res = $this->searchUser($user, $pass);
            $method = new MethodController();
            if ($res) {
                $temp = $user . '-' . time() . '-' . 'success';
                $token = $method->encode($temp);
                $_SESSION["token"] = $token;
                $result['status'] = 'success';
                $result['hint'] = '登录成功！';
                Log::record('登录信息：' . '时间：' . date('Y-m-d h:i:sa') . ' IP地址：' . $this->get_client_ip(), Log::INFO);
                Log::save();
            } else {
                $temp = $user . '-' . time() . '-' . 'failed';
                $token = $method->encode($temp);
                $_SESSION["token"] = $token;
                $result['status'] = 'failed';
                $result['hint'] = '用户名或密码错误！';
            }
        }
        exit(json_encode($result));
    }

    public function get_client_ip()
    {
        $ip = 'unknow';
        foreach (array(
                     'HTTP_CLIENT_IP',
                     'HTTP_X_FORWARDED_FOR',
                     'HTTP_X_FORWARDED',
                     'HTTP_X_CLUSTER_CLIENT_IP',
                     'HTTP_FORWARDED_FOR',
                     'HTTP_FORWARDED',
                     'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER)) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip);
                    //会过滤掉保留地址和私有地址段的IP，例如 127.0.0.1会被过滤
                    //也可以修改成正则验证IP
                    if ((bool)filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                        return $ip;
                    }
                }
            }
        }
        return $ip;
    }

    public function searchUser($user, $pass)
    {
        $userTb = M('admin');
        $condition['user'] = "$user";
        $condition['password'] = "$pass";
        $result = $userTb->where($condition)->select();
        if (!$result) {
            return false;
        } else {
            if ($result[0]['user'] == $user && $result[0]['password'] == $pass) {
                return true;
            } else {
                return false;
            }
        }
    }

}