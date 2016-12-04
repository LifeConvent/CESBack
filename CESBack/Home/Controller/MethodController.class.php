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
        $_SESSION['token'] = '';
        $this->redirect('Index/index');
    }

    public function getSysResponse()
    {
        $sysResponse = M('auto_response');
        $result = $sysResponse->select();
//        echo (json_encode($result));
        exit(json_encode($result));
    }

    public function searchUserInput()
    {
        $user_input = I('get.u_i');
        $sysResponse = M();
        $result = $sysResponse->query('SELECT * FROM tb_auto_response WHERE user_input LIKE \'' . $user_input . '%\'', true);
        if ($result) {
            exit(json_encode($result));
        } else {
            exit('');
        }
    }

    public function deleteRes()
    {
        $id = I('post.id');
        $condition['id'] = "$id";
        $sysResponse = M('auto_response');
        $res = $sysResponse->where($condition)->delete();
        if ($res) {
            $result['status'] = 'success';
            $result['message'] = '删除成功！';
        } else {
            $result['status'] = 'failed';
            $result['message'] = '删除失败！';
        }
        exit(json_encode($result));
    }

    public function modifyRes()
    {
        $id = I('post.id');
        $user_input = I('post.user_input');
        $sys_response = I('post.sys_response');
        $sys_response_type = I('post.sys_response_type');
        $temp['id'] = "$id";
        $condition['user_input'] = "$user_input";
        $condition['sys_response'] = "$sys_response";
        $condition['sys_response_type'] = "$sys_response_type";
        $sysResponse = M('auto_response');
        $res = $sysResponse->where($temp)->save($condition);
        if ($res) {
            $result['status'] = 'success';
            $result['message'] = '修改成功！';
        } else {
            $result['status'] = 'failed';
            $result['message'] = '修改失败！';
        }
        exit(json_encode($result));
    }

    public function getSurvey()
    {
        $survey = M('survey');
        $result = $survey->field('g.group_name,name,level,owner')
            ->query("SELECT %FIELD% FROM tb_survey AS s,tb_survey_group AS g  WHERE g.group_id=s.survey_group", true);
//        dump($result);
        for ($i = 0; $i < sizeof($result); $i++) {
            switch($result[$i]['level']){
                case '1':
                    $result[$i]['level']='系级';
                    break;
                case '2':
                    $result[$i]['level']='院级';
                    break;
                case '3':
                    $result[$i]['level']='校级';
                    break;
            }
        }
        if ($result) {
            exit(json_encode($result));
        } else {
            exit(json_encode(''));
        }
    }

    public function searchSurvey()
    {
        $name = I('get.name');
        $survey = M();
        //模糊查询
        $result = $survey->field('g.group_name,name,level,owner')
            ->query("SELECT %FIELD% FROM tb_survey AS s,tb_survey_group AS g  WHERE name LIKE '" . $name . "%' AND g.group_id=s.survey_group", true);
        if ($result) {
            for ($i = 0; $i < sizeof($result); $i++) {
                switch($result[$i]['level']){
                    case '1':
                        $result[$i]['level']='系级';
                        break;
                    case '2':
                        $result[$i]['level']='院级';
                        break;
                    case '3':
                        $result[$i]['level']='校级';
                        break;
                }
            }
            exit(json_encode($result));
        } else {
            exit(json_encode(''));
        }
    }

//    Excel导出函数
    public function exportExcel($expTitle, $expCellName, $expTableData)
    {
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $_SESSION['account'] . date('_YmdHis');//文件输出的文件名
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);

        vendor("PHPExcel.PHPExcel");
//        $objPHPExcel = new PHPExcel();//ThinkPHP3.1的写法

        $objPHPExcel = new  \PHPExcel();//ThinkPHP3.2的写法，有命名空间的概念
        $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');
        $objPHPExcel->getActiveSheet()->setTitle(iconv('utf-8', 'utf-8', '用户信息'));
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:' . $cellName[$cellNum - 1] . '1');//合并单元格
        // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));
        for ($i = 0; $i < $cellNum; $i++) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i] . '2', $expCellName[$i][1]);
        }
        // Miscellaneous glyphs, UTF-8
        for ($i = 0; $i < $dataNum; $i++) {
            for ($j = 0; $j < $cellNum; $j++) {
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j] . ($i + 3), $expTableData[$i][$expCellName[$j][0]]);
            }
        }


        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
//        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');//ThinkPHP3.1的写法

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');//ThinkPHP3.2的写法，有命名空间的概念
        $objWriter->save('php://output');
        exit;
    }

    //导出用户表
    function expUser()
    {//导出Excel
        $xlsName = "User";
        $xlsCell = array( //设置字段名和列名的映射
            array('stu_name', '姓名'),
            array('stu_num', '学号'),
            array('stu_sex', '性别'),
            array('stu_pro', '专业'),
            array('stu_graclass', '年级'),
            array('stu_class', '班级'),
            array('is_base', '是否在校'),
            array('is_onset', '是否在读'),
            array('stu_type', '学生类型'),
            array('stu_phone', '手机号'),
            array('stu_qq', 'QQ'),
            array('is_match', '是否匹配')
        );
        $xlsModel = M('user');

        $xlsData = $xlsModel->field('stu_name,stu_num,stu_sex,stu_pro,stu_graclass,stu_class,is_base,is_onset,stu_type,stu_phone,stu_qq,is_match')->select();
        $pro = '';
        //替换字段
        foreach ($xlsData as $k => $v) {
            switch ($v['stu_pro']) {
                case '1':
                    $pro = '计算机科学与技术';
                    break;
                case '2':
                    $pro = '信息安全';
                    break;
                case '3':
                    $pro = '信息与计算科学';
                    break;
                case '4':
                    $pro = '计算机科学与技术（中加方向）';
                    break;
                case '5':
                    $pro = '网络工程';
                    break;
                case '6':
                    $pro = '物联网工程';
                    break;
                case '7':
                    $pro = '通信工程';
                    break;
            }
            $xlsData[$k]['stu_pro'] = $v['stu_pro'] = $pro;

            $is_base = '';
            switch ($v['is_base']) {
                case '1':
                    $is_base = '在校';
                    break;
                case '0':
                    $is_base = '不在校';
                    break;
            }
            $xlsData[$k]['is_base'] = $v['is_base'] = $is_base;

            $is_onset = '';
            switch ($v['is_onset']) {
                case '1':
                    $is_onset = '在读';
                    break;
                case '0':
                    $is_onset = '不在读';
                    break;
            }
            $xlsData[$k]['is_onset'] = $v['is_onset'] = $is_onset;

            $type = '';
            switch ($v['stu_type']) {
                case '1':
                    $type = '本科生';
                    break;
                case '2':
                    $type = '研究生';
                    break;
                case '3':
                    $type = '博士生';
                    break;
            }
            $xlsData[$k]['stu_type'] = $v['stu_type'] = $type;
        }
        $this->exportExcel($xlsName, $xlsCell, $xlsData);

    }

    //到处课程表，评价结果表

    /**
     * 导入excel文件
     * @param  string $file excel文件路径
     * @return array        excel文件内容数组
     */
    function import_excel($file)
    {
        // 判断文件是什么格式
        $type = pathinfo($file);
        $type = strtolower($type["extension"]);
        $type = $type === 'csv' ? $type : 'Excel5';
        ini_set('max_execution_time', '0');
        Vendor('PHPExcel.PHPExcel');
        // 判断使用哪种格式
        $objReader = \PHPExcel_IOFactory::createReader($type);
        $objPHPExcel = $objReader->load($file);
        $sheet = $objPHPExcel->getSheet(0);
        // 取得总行数
        $highestRow = $sheet->getHighestRow();
        // 取得总列数
        $highestColumn = $sheet->getHighestColumn();
        //循环读取excel文件,读取一条,插入一条
        $data = array();
        //从第一行开始读取数据
        for ($j = 1; $j <= $highestRow; $j++) {
            //从A列读取数据
            for ($k = 'A'; $k <= $highestColumn; $k++) {
                // 读取单元格
                $data[$j][] = $objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue();
            }
        }
        return $data;
    }

    public function replace($content)
    {
        $content = str_replace("&gt;", ">", $content);
        $content = str_replace("&lt;", "<", $content);
        $content = str_replace("&nbsp;", " ", $content);
        $content = str_replace("&quot;", "\"", $content);
        $content = str_replace("&#39;", "'", $content);
        $content = str_replace("\\\\", "\\", $content);
        $content = str_replace("\\n", "\n", $content);
        $content = str_replace("\\r", "\r", $content);
        return $content;
    }
}