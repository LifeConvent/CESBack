<?php
/**
 * Created by PhpStorm.
 * User: lawrance
 * Date: 2016/12/3
 * Time: 上午10:57
 */

namespace Home\Controller;

use Think\Controller;

class SurveyPublishController extends Controller
{
    public function surveyPublish()
    {
        $survey_id = I('get.si');
        $open_id = I('get.oi');

//        测试用数据
        $survey_id = '1480748407';
        $open_id = 'ocoIvxLTumwc3gpi6SPvKWrzYlt0';

        $condition['survey_id'] = $survey_id;
        $survey = M();
        $res = $survey->field('name,description,question,count')
            ->where($condition)
            ->query(' SELECT %FIELD% FROM tb_survey %WHERE% ', true);
//        dump($res);

        $count = (int)$res[0]['count'];
        $question = $res[0]['question'];
        $name = $res[0]['name'];
        $description = $res[0]['description'];
        $surveyList['count'] = $count;
        $surveyList['name'] = $name;
        $surveyList['description'] = $description;
        $surveyList['survey_id'] = $survey_id;

        $list = explode(",", $question);
        $tb = M('survey_question');
        for ($i = 0; $i < sizeof($list); $i++) {
            $condition = array();
            $condition['question_id'] = $list[$i];
            $question = $tb->field('name,before_des,after_des,type,hint,question_id,sort,is_must,content')
                ->where($condition)
                ->select();
            $questionList[$i] = $question[0];
        }
//        dump($questionList);
        $this->assign('QList', json_encode($questionList));
        $this->assign('SList', json_encode($surveyList));
        $this->assign('openid', $open_id);
        $this->display();
    }

    public function surveyAnswer()
    {
        $ans = I('post.ans');
        $openid = I('post.openid');
//        $ans = '[{"survey_id":"1480748407"},{"question_id":"1480748343","question_ans":"1,2,3"},{"question_id":"1480748356","question_ans":"1,2,3,4"},{"question_id":"1480748364","question_ans":"1,2,4"},{"question_id":"1480748372","question_ans":"3"},{"question_id":"1480748377","question_ans":"1,2,3"},{"question_id":"1480748382","question_ans":"1,3"},{"question_id":"1480748400","question_ans":"1"}]';
//        $openid = 'ocoIvxLTumwc3gpi6SPvKWrzYlt0';
        $ans = htmlspecialchars_decode($ans);
        $s_a = json_decode($ans);
        $errorinfo = json_last_error();
        $survey_id = $s_a[0]->survey_id;
        $obj = new \stdClass();

        for ($i = 1; $i < sizeof($s_a); $i++) {
            $obj = $s_a[$i];
            $temp = array();
            $temp['question_id'] = $obj->question_id;
            $temp['content'] = $obj->question_ans;
            $temp['survey_id'] = $survey_id;
            $temp['openid'] = $openid;
            $condtion[] = $temp;
        }
        $survey_ans = M('survey_answer');
        $res = $survey_ans->addAll($condtion);
        if ($res) {
            $result['status'] = 'success';
        } else {
            $result['status'] = 'failed';
            $result['message'] = $survey_id.'-----'.$errorinfo;
        }
//        dump($condtion);
//        dump($result);
        exit(json_encode($result));

    }
}