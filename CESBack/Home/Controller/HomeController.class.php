<?php
/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2016/11/6
 * Time: 下午11:04
 */

namespace Home\Controller;

use Think\Controller;

class HomeController extends Controller
{
    public function home()
    {

        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);

        if ($result) {
            //发出微信端数据统计请求，访问数据库获取近来评价数据四数组大小为7，过7不与
            $this->assign('count', 400);//微信匹配用户总量
            $this->assign('count1', 456);//课程评价总数
            $this->assign('count2', 555);//微信关注量
            $this->assign('count3', 567);//新增用户
            $this->assign('username', $username);
            $this->display();
        } else {
            //避免url直接跳转进入主页
//            $this->error('登录已过期，请登录后再操作','/Index/index',3);
            $this->redirect('Index/index');
        }
    }

    public function login($user, $pass)
    {
        if ($user == null || $pass == null) {
            return false;
        } else {
            $index = new IndexController();
            $res = $index->searchUser($user, $pass);
            if ($res) {
                return true;
            } else {
                return false;
            }
        }
    }
}