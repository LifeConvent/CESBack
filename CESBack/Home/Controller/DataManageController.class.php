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
        $survey_id = '1480946991';
        $survey = M('survey');
        $condition_survey['survey_id'] = "$survey_id";
        $result = $survey->where($condition_survey)->select();
        $string = $result[0]['question'];
        $survey_name = $result[0]['name'];
        $que_list = M('survey_question');
        /**
         * 当前问卷的所有问题
         */
        $result_question = $que_list->where('question_id IN (' . $string . ')')->select();
        $string = explode(',', $string);

//        dump($result_question);
        /**
         * 针对每个问题获取答案
         */
        $answer = M('');
        //二维解析结果坐标
        $one = $two = 0;

        for ($i = 0; $i < sizeof($result_question); $i++) {

            $condition_answer = null;
            $question_id = $result_question[$i]['question_id'];
            $condition_answer['survey_id'] = "$survey_id";
            $condition_answer['question_id'] = "$question_id";
            /**
             * result_answer查询结束后，应当补充不包含的选项比例调节为零
             */
            $result_answer = $answer->table('tb_survey_answer')
                ->field('content,COUNT(*) AS total')
                ->where($condition_answer)
                ->query('SELECT %FIELD% FROM %TABLE% %WHERE% GROUP BY content', true);
            $result_total = $answer->table('tb_survey_answer')
                ->field('COUNT(*) AS total')
                ->where($condition_answer)
                ->query('SELECT %FIELD% FROM %TABLE% %WHERE% GROUP BY question_id', true);
            $total = (int)$result_total[0]['total'];

            /**
             * 解析封装处理结果
             */
            $output['name'] = $survey_name;
            $output['id'] = $survey_id;
            if ($result_question[$i]['type'] == '1') {//当前问题的类型
                $output[$one]['name'] = $result_question[$i]['name'];
                $output[$one]['id'] = $result_question[$i]['question_id'];
                $content = $result_question[$i]['content'];
                //解析content转换为数组
                $content = str_replace('[', '', $content);
                $content = str_replace(']', '', $content);
                $content = str_replace('"', '', $content);
                $content = explode(',', $content);
//                dump($content);

                $question_list = null;
                $question_list = $content;
                //问题数量的多少不一定与答案查询结果中group的多少相匹配,目前为按顺序匹配比率，应比对问题序号后匹配
                for ($j = 0; $j < sizeof($question_list); $j++) {
                    $output[$one][$j]['name'] = $question_list[$j];
                    $output[$one][$j]['num'] = (float)$result_answer[$j]['total'] / $total;
                }
                $one++;
            }

            dump($total);
            dump($result_answer);
            dump($output);
        }
    }
}