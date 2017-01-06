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
        $survey_id = I('get.s_i');
//        $survey_id = '1480946991';
        $username = '';
        $method = new MethodController();
        $result = $method->checkIn($username);
        if ($result) {


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
                $count = 0;
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
                //问卷信息
                $output[$one]['name'] = $result_question[$i]['name'];
                $output[$one]['id'] = $result_question[$i]['question_id'];
                if ($result_question[$i]['type'] == '1') {//当前问题的类型
                    //单选题的数据统计结果
                    $output[$one]['type'] = '1';
                    $content = $result_question[$i]['content'];
                    //解析content转换为数组
                    $content = str_replace('[', '', $content);
                    $content = str_replace(']', '', $content);
                    $content = str_replace('"', '', $content);
                    $content = explode(',', $content);
//                dump($content);

                    $question_list = null;
                    $question_list = $content;
                    $count = sizeof($question_list);
                    //问题数量的多少不一定与答案查询结果中group的多少相匹配,目前为按顺序匹配比率，应比对问题序号后匹配
                    $answer_count = 0;
                    for ($j = 0; $j < sizeof($question_list); $j++) {
                        $output[$one][$j]['name'] = $question_list[$j];

//                    echo $result_answer[$answer_count]['content'] . '----' . ($j + 1) . '|';

                        if ((int)$result_answer[$answer_count]['content'] != ($j + 1)) {
                            $output[$one][$j]['num'] = (float)0;
                        } else {
//                        $output[$one][$j]['num'] = (float)$result_answer[$answer_count]['total'] / $total;//百分比
                            $output[$one][$j]['num'] = $result_answer[$answer_count]['total'];//总数
                            $answer_count++;

                        }
                    }
                    $one++;
                } else if ($result_question[$i]['type'] == '2') {
                    //单选题的数据统计结果
                    $output[$one]['type'] = '2';
                    $content = $result_question[$i]['content'];
                    //解析content转换为数组
                    $content = str_replace('[', '', $content);
                    $content = str_replace(']', '', $content);
                    $content = str_replace('"', '', $content);
                    $content = explode(',', $content);
//                dump($content);

                    $question_list = null;
                    $question_list = $content;
                    $count = null;
                    $answer_content_list = null;
                    $count = sizeof($question_list);
//                根据问题总数生成结果存储数组
                    for ($c = 0; $c < $count; $c++) {
                        $answer_content_list[$c] = 0;
                    }
//                dump($question_list);
//                dump($result_answer);
                    for ($m = 0; $m < sizeof($result_answer); $m++) {
                        $answer_content = $result_answer[$m]['content'];
                        if (strlen($answer_content) <= 1 && $answer_content != '') {
                            //多选题中只选择了一个选项
                            for ($c = 0; $c < $count; $c++) {
                                if (($c + 1) == $answer_content) {
                                    ++$answer_content_list[$c];
//                                echo ($c + 1) . '--' . $answer_content_list[$c] . '---&';
                                }
                            }
                        } else {
                            //多选题中选择了多个选项
                            $answer_content_count = 0;
                            $answer_content = explode(',', $answer_content);
                            for ($c = 0; $c < $count; $c++) {
//                            dump($answer_content);
                                if (($c + 1) == $answer_content[$answer_content_count]) {
                                    ++$answer_content_list[$c];
                                    $answer_content_count++;
//                                echo ($c + 1) . '--' . $answer_content_list[$c] . '---&';
                                }
                            }
                        }
                    }
                    $total_mutiply = 0;
                    foreach ($answer_content_list as $k => $v) {
                        $total_mutiply += $v;
                    }
                    $answer_count = 0;
                    for ($j = 0; $j < sizeof($question_list); $j++) {
                        $output[$one][$j]['name'] = $question_list[$j];
//                    $output[$one][$j]['num'] = (float)$answer_content_list[$j] / $total_mutiply;//百分比
                        $output[$one][$j]['num'] = $answer_content_list[$j];//总数
                        $answer_count++;
                    }
                    $one++;
//                dump($answer_content_list);
                } else if ($result_question[$i]['type'] == '3') {
                    //单选题的数据统计结果
                    $output[$one]['type'] = '3';
                    $output[$one]['content'] = $result_answer[$i]['content'];

                }
//            dump($total);
            }
//        dump($result_answer);
//        dump($output);

//        $html_charts_temp = '<div style="float: left;margin-top: 20px;text-align: center;" class="col-sm-6"><span id="surveyHint'+ +'" style="font-size:16px;">' + +'</span><div id="surveyAnswer' + +'" style="width: 300px;height: 300px;margin:0 auto;"></div></div>';
            $html_charts_temp = '';
            $content_count = 0;
            $content = null;
            foreach ($output as $k => $v) {
                if (is_array($v)) {
                    $html_charts_temp .= '<div style="float: left;margin-top: 20px;text-align: center;" class="col-sm-6"><span id="surveyHint' . ($k + 1) . '" style="font-size:16px;">' . $v['name'] . '</span><div id="surveyAnswer' . ($k + 1) . '" style="width: 300px;height: 300px;margin:0 auto;"></div></div>';
                    if ($v['type'] == '1' || $v['type'] == '2') {
                        $data = '[';
                        foreach ($v as $key => $val) {
                            if (is_array($val)) {
                                $data .= '{"label":"' . $val['name'] . '","value":"' . $val['num'] . '"},';
                            }
                        }
                        $data = substr($data, 0, -1);
                        $data .= ']';
                    }
                    $content[$content_count++] = '{"element": "surveyAnswer' . $content_count . '","data": ' . $data . ',"colors": ["#1AA9B3", "#7CBCA5", "#AAD774", "#8177C5", "#E0E4CC", "#69D2E7", "#45BFBD", "#F38630"]}';
//                $content[$content_count++] = $data;
                }
            }
//        echo(json_encode($content));
            $this->assign('name', $output['name']);
            $this->assign('content', json_encode($content));
            $this->assign('html_charts', $html_charts_temp);
            $this->assign('username', $username);
            $this->display('surveyCharts');
        } else {
            $this->redirect('Index/index');
        }
    }
}