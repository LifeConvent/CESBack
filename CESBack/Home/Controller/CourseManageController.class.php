<?php
/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2016/11/30
 * Time: 上午9:52
 */

namespace Home\Controller;

use Think\Controller;

class CourseManageController extends Controller
{
    public function courseManage()
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

    public function surveyManage()
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

    public function surveyPublish()
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

    public function getCourse()
    {
        $course = M('course_list');
        $result = $course->field('course_id,name,teacher_name,semester,take_num')->select();
        if ($result) {
            exit(json_encode($result));
        } else {
            exit(json_encode(''));
        }
    }

//    课程信息的模糊查询，数据库没有信息，未测试通过
    public function searchCourse()
    {
        $course_num = I('get.c_n');
        $course_name = I('get.c_a');
        $teacher_name = I('get.t_n');
        $count = 0;
        $sql = '';
        if ($course_num != null) {
            if ($count == 0) {
                $sql .= " course_id LIKE '" . $course_num . "%' ";
                $count++;
            }
        }
        if ($course_name != null) {
            if ($count == 0) {
                $sql .= " name LIKE '" . $course_name . "%' ";
                $count++;
            } else {
                $sql .= " AND name LIKE '" . $course_name . "%' ";
                $count++;
            }
        }
        if ($teacher_name != null) {
            if ($count == 0) {
                $sql .= " teacher_name LIKE '" . $teacher_name . "%' ";
                $count++;
            } else {
                $sql .= " AND teacher_name LIKE '" . $teacher_name . "%' ";
                $count++;
            }
        }
//        dump($sql);
        $course = M();
        //模糊查询
        $result = $course->field('course_id,name,teacher_name,semester,take_num')
            ->query("SELECT %FIELD% FROM tb_course_list WHERE " . $sql, true);
        if ($result) {
            exit(json_encode($result));
        } else {
            exit(json_encode(''));
        }
    }

    public function addNewQuestion()
    {
//        必填项
        $level = I('post.q_level');
        $is_must = I('post.q_ismust');
        $type = I('post.q_qtype');
        $name = I('post.q_name');
        $question_group = I('post.group');
//        问题在问卷中的顺序
        $sort = I('post.q_surveyorder');

//        单选多选选项
        $option = I('post.option');
        //填空输入框大小
        $q_input_size = I('post.q_level');
        if ($type == '1' || $type == '2') {
            $content = $option;
        } else {
            $content = $q_input_size;
        }
        $method = new MethodController();
        $content = $method->replace($content);

//        非必填
        $hint = I('post.q_hint');
        $before_des = I('post.q_beforehint');
        $after_des = I('post.q_afterhint');
        $question_id = time();

        $condition['level'] = $level;
        $condition['is_must'] = $is_must;
        $condition['type'] = $type;
        $condition['level'] = $level;
        $condition['name'] = $name;
        $condition['question_group'] = $question_group;
        $condition['sort'] = $sort;
        $condition['q_input_size'] = $q_input_size;
        $condition['content'] = $content;
        $condition['hint'] = $hint;
        $condition['before_des'] = $before_des;
        $condition['after_des'] = $after_des;
        $condition['question_id'] = $question_id;

        $question = M('survey_question');
        $res = $question->add($condition);
        if ($res) {
            $result['status'] = 'success';
            $result['id'] = $question_id;
        } else {
            $result['status'] = 'failed';
            $result['message'] = '数据库读写失败';
        }
        exit(json_encode($result));
    }

    public function addNewSurvey()
    {
//        必填项
        $count = I('post.count');
        $name = I('post.name');
        $survey_group = I('post.group');
        $level = I('post.level');
        $question = I('post.question');

//        选填项
        $description = I('post.detail');

        $method = new MethodController();
        $method->checkIn($username);

        $survey_id = time();
        $condition['level'] = $level;
        $condition['count'] = $count;
        $condition['question'] = $question;
        $condition['description'] = $description;
        $condition['name'] = $name;
        $condition['survey_group'] = $survey_group;
        $condition['survey_id'] = $survey_id;
        $condition['owner'] = $username;

        $survey = M('survey');
        $res = $survey->add($condition);
        if ($res) {
            $result['status'] = 'success';
        } else {
            $result['status'] = 'failed';
            $result['message'] = '数据库读写失败';
        }
        exit(json_encode($result));
    }

    public function surveyMatch()
    {
        $survey = I('post.s');
        $user = I('post.u');
        $survey = htmlspecialchars_decode($survey);
        $user = htmlspecialchars_decode($user);

        $survey = json_decode($survey);
        $user = json_decode($user);

        $errorinfo = json_last_error();

        for ($i = 0; $i < sizeof($survey); $i++) {
            $survey_id = $survey[$i];
            for ($j = 0; $j < sizeof($user); $j++) {
                $openid = $user[$j];
                $temp['survey_id'] = $survey_id;
                $temp['openid'] = $openid;
                $condition[] = $temp;
            }
        }
        $survey_plan = M('survey_plan');
//        dump($condition);
        $res = $survey_plan->addAll($condition);
        if ($res) {
            $result['status'] = 'success';
        } else {
            $result['status'] = 'failed';
            $result['message'] = '数据库读写失败'.$errorinfo;
        }
        exit(json_encode($result));
    }
}