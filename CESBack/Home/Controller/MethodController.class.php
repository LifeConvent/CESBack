<?php
/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2016/11/24
 * Time: 下午1:32
 */

namespace Home\Controller;

use Think\Controller;

class MethodController extends Controller
{

    /**
     * 简单对称加密算法之加密
     * @param String $string 需要加密的字串
     * @param String $skey 加密EKY
     * @author Anyon Zou <zoujingli@qq.com>
     * @date 2013-08-13 19:30
     * @update 2014-10-10 10:10
     * @return String
     */
    public function encode($string = '', $skey = 'CESBackSYStem')
    {
        $strArr = str_split(base64_encode($string));
        $strCount = count($strArr);
        foreach (str_split($skey) as $key => $value)
            $key < $strCount && $strArr[$key] .= $value;
        return str_replace(array('=', '+', '/'), array('O0O0O', 'o000o', 'oo00o'), join('', $strArr));
    }

    /**
     * 简单对称加密算法之解密
     * @param String $string 需要解密的字串
     * @param String $skey 解密KEY
     * @author Anyon Zou <zoujingli@qq.com>
     * @date 2013-08-13 19:30
     * @update 2014-10-10 10:10
     * @return String
     */
    public function decode($string = '', $skey = 'CESBackSYStem')
    {
        $strArr = str_split(str_replace(array('O0O0O', 'o000o', 'oo00o'), array('=', '+', '/'), $string), 2);
        $strCount = count($strArr);
        foreach (str_split($skey) as $key => $value)
            $key <= $strCount && isset($strArr[$key]) && $strArr[$key][1] === $value && $strArr[$key] = $strArr[$key][0];
        return base64_decode(join('', $strArr));
    }

    public function checkIn(&$admin)
    {
        $token = $_SESSION['token'];
        $token = $this->decode($token);
        $info = explode('-', $token);
        if ($info[2] == 'success') {
            $admin = $info[0];
            if ($info[1] - time() <= 7) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function back()
    {
        $_SESSION['token']='';
        $this->redirect('Index/index');
    }

    public function getSysResponse(){
        $sysResponse = M('auto_response');
        $result = $sysResponse->select();
//        echo (json_encode($result));
        exit(json_encode($result));
    }

    public function searchUserInput(){
        $user_input = I('get.u_i');
        $condition['user_input'] = $user_input;
        $sysResponse = M('auto_response');
        $result = $sysResponse->where($condition)->select();
        if($result){
            exit(json_encode($result));
        }else{
            exit('');
        }
    }

    public function deleteRes(){
        $id = I('post.id');
        $condition['id'] = "$id";
        $sysResponse = M('auto_response');
        $res= $sysResponse->where($condition)->delete();
        if($res){
            $result['status'] = 'success';
            $result['message'] = '删除成功！';
        }else{
            $result['status'] = 'failed';
            $result['message'] = '删除失败！';
        }
        exit(json_encode($result));
    }

    public function modifyRes(){
        $id = I('post.id');
        $user_input = I('post.user_input');
        $sys_response = I('post.sys_response');
        $sys_response_type = I('post.sys_response_type');
        $temp['id'] = "$id";
        $condition['user_input'] = "$user_input";
        $condition['sys_response'] = "$sys_response";
        $condition['sys_response_type'] = "$sys_response_type";
        $sysResponse = M('auto_response');
        $res= $sysResponse->where($temp)->save($condition);
        if($res){
            $result['status'] = 'success';
            $result['message'] = '修改成功！';
        }else{
            $result['status'] = 'failed';
            $result['message'] = '修改失败！';
        }
        exit(json_encode($result));
    }
}