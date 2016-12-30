<?php
/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2016/11/30
 * Time: 上午9:54
 */

namespace Home\Controller;

use Think\Controller;

class DataManageController extends Controller
{
    public function userCourse()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $this->display();
        } else {
            $this->redirect('Index/index');
        }
    }

    public function sysCourse()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $this->display();
        } else {
            $this->redirect('Index/index');
        }
    }

    public function userInfo()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $this->display();
        } else {
            $this->redirect('Index/index');
        }
    }

    /**
     * 问卷结果统计
     */
    public function surveyCount()
    {
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {
            $this->assign('username', $username);
            $group = M('survey_group');
            $select = $group->select();
            $content = '<option value="-1">|---- 无</option>';
            for ($i = 0; $i < sizeof($select); $i++) {
                $content .= '<option value="' . $select[$i]['group_id'] . '">' . '|----' . $select[$i]['group_name'] . '</option>';
            }
            $this->assign('groupSelectList', $content);
            $this->display();
        } else {
            $this->redirect('Index/index');
        }
    }

    /**
     * 后台处理获取问卷图形显示数据
     */
    public function getSurveyImageCount()
    {
        $survey_id = I('post.s_i');
        $survey = M('survey');
        $condition_survey['survey_id'] = "$survey_id";
        $result = $survey->where($condition_survey)->select();
    }
}