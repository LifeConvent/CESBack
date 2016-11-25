<?php
/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2016/11/8
 * Time: 下午5:02
 */

namespace Home\Controller;

use Think\Controller;

class WeChatController extends Controller
{
    public function setWeChatMenu()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $this->display();
        } else {
//            $this->error('登录已过期，请登录后再操作','Home/Index/index',3);
            $this->redirect('Index/index');
        }
    }

    public function messageGroupSend()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $this->display();
        } else {
//            $this->error('登录已过期，请登录后再操作','Home/Index/index',3);
            $this->redirect('Index/index');
        }
    }

    public function setAutoRes()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $this->display();
        } else {
//            $this->error('登录已过期，请登录后再操作','Home/Index/index',3);
            $this->redirect('Index/index');
        }
    }

    public function getInfo()
    {
        $user = M('user', 'tb_', 'mysql://root:123456@localhost:3306/CES');
        $result = $user->field('stu_num,stu_name,stu_pro,stu_graclass,stu_class,stu_sex,is_match,openid')->select();
        echo json_encode($result);
    }

    public function searchInfo()
    {
        $user = M('user', 'tb_', 'mysql://root:123456@localhost:3306/CES');
        $class = $_GET['class'];
        $pro = $_GET['pro'];
        $gra = $_GET['gra'];
        $condition = null;
        if ($class != null) {
            $condition['stu_class'] = "$class";
        }
        if ($pro != null) {
            $condition['stu_pro'] = "$pro";
        }
        if ($gra != null) {
            $condition['stu_graclass'] = "$gra";
        }
        $result = $user->where($condition)->field('stu_num,stu_name,stu_pro,stu_graclass,stu_class,stu_sex,is_match,openid')->select();
        echo json_encode($result);
    }
}

//php生成guid
//function create_guid() {
//    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
//    $hyphen = chr(45);// "-"
//    $uuid = chr(123)// "{"
//        .substr($charid, 0, 8).$hyphen
//        .substr($charid, 8, 4).$hyphen
//        .substr($charid,12, 4).$hyphen
//        .substr($charid,16, 4).$hyphen
//        .substr($charid,20,12)
//        .chr(125);// "}"
//    return $uuid;
//}