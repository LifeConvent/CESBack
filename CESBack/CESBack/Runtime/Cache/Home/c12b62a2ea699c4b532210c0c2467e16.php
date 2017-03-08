<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->

    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/CESBack/Public/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        CES - 课程评价管理系统
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="/CESBack/Public/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/CESBack/Public/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/CESBack/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- 字体 -->
    <link href="/CESBack/Public/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/CESBack/Public/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link rel="stylesheet" type="text/css" href="/CESBack/Public/assets/nestable/jquery.nestable.css"><!-- NESTABLE CSS -->
    <link href="/CESBack/Public/css/sco.message.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/CESBack/Public/css/bootstrap-table.min.css">
    <link rel="stylesheet" type="text/css" href="/CESBack/Public/css/userManage/modify-user.css">

    <!--[if lt IE 9]>
    <script src="/CESBack/Public/js/html5shiv.js">
    </script>
    <script src="/CESBack/Public/js/respond.min.js">
    </script>
    <![endif]-->
    <!-- END STYLESHEET-->
</head>
<script type="text/javascript">
    var HOST = "http://localhost/";
</script>
<body id="body">
<!-- SECTION -->
<section id="container">

    
<!-- 头栏 -->
<header class="header white-bg">

    <!-- SIDEBAR TOGGLE BUTTON -->
    <div class="sidebar-toggle-box">
        <div data-placement="right" class="fa fa-bars tooltips">
        </div>
    </div>
    <!-- SIDEBAR TOGGLE BUTTON  END-->

    <a href="" class="logo">
        CES
          <span>
            课程评价管理系统
          </span>
    </a>

    <!-- 头栏通知 -->
    <nav class="nav notify-row dis-none" id="top_menu">

        <ul class="nav top-menu">

            <!-- 待办事项／任务栏 -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-success">5</span>
                </a>

                <ul class="dropdown-menu extended tasks-bar">
                    <li class="notify-arrow notify-arrow-blue">
                    </li>
                    <li>
                        <p class="blue">
                            您有5项任务待完成
                        </p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">
                                    第一项
                                </div>
                                <div class="percent">
                                    40%
                                </div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success set-40" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">
                                          40% Complete (success)
                                        </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">
                                    第二项
                                </div>
                                <div class="percent">
                                    60%
                                </div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-warning set-60" role="progressbar"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">
                                          60% Complete (warning)
                                        </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">
                                    第三项
                                </div>
                                <div class="percent">
                                    87%
                                </div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-info set-87" role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">
                                          87% 完成
                                        </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">
                                    第四项
                                </div>
                                <div class="percent">
                                    33%
                                </div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-danger set-33" role="progressbar"
                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">
                                          33% 完成 (danger)
                                        </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info">
                                <div class="desc">
                                    第五项
                                </div>
                                <div class="percent">
                                    45%
                                </div>
                            </div>
                            <div class="progress progress-striped active">
                                <div class="progress-bar set-45" role="progressbar" aria-valuenow="45"
                                     aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">
                                          45% 完成
                                        </span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="external">
                        <a href="#">
                            查看所有任务
                        </a>
                    </li>
                </ul>

            </li>
            <!-- 待办事项／任务栏 -->

            <!-- 系统提示 -->
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-bell-o">
                    </i>
                <span class="badge bg-warning">
                  5
                </span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li class="notify-arrow notify-arrow-blue">
                    </li>
                    <li>
                        <p class="blue">
                            您有5项新提示
                        </p>
                    </li>
                    <li>
                        <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                            首要
                    <span class="small italic">
                      34 mins
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                    <span class="label label-warning">
                      <i class="fa fa-bell">
                      </i>
                    </span>
                            第一项
                    <span class="small italic">
                      1 小时
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                            第二项
                    <span class="small italic">
                      4 小时
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                    <span class="label label-success">
                      <i class="fa fa-plus">
                      </i>
                    </span>
                            第三项
                    <span class="small italic">
                      现在
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                    <span class="label label-primary">
                      <i class="fa fa-bullhorn">
                      </i>
                    </span>
                            第四项
                    <span class="small italic">
                      10 分钟
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            查看所有事项
                        </a>
                    </li>
                </ul>
            </li>
            <!-- 系统提示 -->

        </ul>

    </nav>
    <!-- 头栏通知 -->


    <!-- 登录状态下拉表  -->
    <div class="top-nav ">
        <ul class="nav pull-right top-menu">

            <li>
                <input type="text" class="form-control search" placeholder="查找">
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="margin-top:4px">
                            <span class="username" style="padding-left:6px">
                              <?php echo ($username); ?>
                            </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li class="log-arrow-up">
                    </li>
                    <li>
                        <a href="#">
                            <i class=" fa fa-suitcase">
                            </i>
                            文件中心
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cog">
                            </i>
                            设置
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bell-o">
                            </i>
                            通知
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/Method/back');?>">
                            <i class="fa fa-key"></i>
                            退出
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- 登录状态下拉表  -->

</header>
<!-- 头栏 -->
    <!-- 边栏 -->
<aside>
    <div id="sidebar" class="nav-collapse">
        <ul class="sidebar-menu" id="nav-accordion">

            <!--主菜单-->
            <li>
                <a href="<?php echo U('Home/Home/home');?>" id="home">
                    <i class="fa fa-dashboard"></i>
                        <span style="font-size: 14px;">
                          统计分析
                        </span>
                </a>
            </li>

            <!--菜单一-->
            <li class="sub-menu">
                <a href="javascript:;" id="weChat">
                    <i class="fa fa-laptop"></i>
                            <span style="font-size: 14px;">
                              微信服务
                            </span>
                            <span class="label label-success span-sidebar">
                              3
                            </span>
                </a>
                <ul class="sub" id="weChat_sub">
                    <li id="weChat_menu">
                        <a href="<?php echo U('Home/WeChat/setWeChatMenu');?>" style="font-size: 12px;">
                            公众号菜单设置
                        </a>
                    </li>
                    <li id="weChat_groupSend">
                        <a href="<?php echo U('Home/WeChat/messageGroupSend');?>" style="font-size: 12px;">
                            公众号消息群发
                        </a>
                    </li>
                    <li id="weChat_autoSend">
                        <a href="<?php echo U('Home/WeChat/setAutoRes');?>" style="font-size: 12px;">
                            用户消息回复设置
                        </a>
                    </li>
                    <li class="dis-none">
                        <a href="" target="_blank" style="font-size: 12px;">
                            用户标签管理
                        </a>
                    </li>
                </ul>
            </li>

            <!--菜单二-->
            <li class="sub-menu">
                <a href="javascript:;" id="user">
                    <i class="fa fa-book">
                    </i>
                            <span style="font-size: 14px;">
                              用户管理
                            </span>
                            <span class="label label-info span-sidebar">
                              1
                            </span>
                </a>
                <ul class="sub" id="user_sub">
                    <li id="user_manager">
                        <a href="<?php echo U('Home/UserManage/userManage');?>" style="font-size: 12px;">
                            用户信息管理
                        </a>
                    </li>
                    <li class="dis-none">
                        <a href="">
                            子菜单
                        </a>
                    </li>
                    <li class="dis-none">
                        <a href="">
                            子菜单
                        </a>
                    </li>
                </ul>
            </li>

            <!--菜单三-->
            <li class="sub-menu">
                <a href="javascript:;" id="course">
                    <i class="fa fa-cogs">
                    </i>
                            <span style="font-size: 14px;">
                              课程管理
                            </span>
                            <span class="label label-primary span-sidebar">
                              5
                            </span>
                </a>

                <ul class="sub" id="course_sub">
                    <li id="course_info">
                        <a href="<?php echo U('Home/CourseManage/courseManage');?>" style="font-size: 12px;">
                            课程信息管理
                        </a>
                    </li>
                    <li id="course_survey">
                        <a href="<?php echo U('Home/CourseManage/surveyManage');?>" style="font-size: 12px;">
                            课程问卷管理
                        </a>
                    </li>
                    <li id="course_survey_publish">
                        <a href="<?php echo U('Home/CourseManage/surveyPublish');?>" style="font-size: 12px;">
                            课程问卷发布
                        </a>
                    </li>
                    <li id="course_count">
                        <a href="<?php echo U('Home/CourseManage/surveyCondition');?>" style="font-size: 12px;">
                            问卷完成情况
                        </a>
                    </li>
                    <li id="course_survey_demo_publish">
                        <a href="<?php echo U('Home/CourseManage/coursePublish');?>" style="font-size: 12px;">
                            按课程发布模版问卷
                        </a>
                    </li>
                </ul>
            </li>

            <!--菜单四-->
            <li class="sub-menu">
                <a href="javascript:;" id="data">
                    <i class="fa fa-tasks">
                    </i>
                            <span style="font-size: 14px;">
                              数据管理
                            </span>
                            <span class="label label-info span-sidebar">
                              4
                            </span>
                </a>

                <ul class="sub" id="data_sub">
                    <li id="data_course">
                        <a href="<?php echo U('Home/DataManage/userCourse');?>" style="font-size: 12px;">
                            用户课程维护
                        </a>
                    </li>
                    <li id="data_sys_course">
                        <a href="<?php echo U('Home/DataManage/sysCourse');?>" style="font-size: 12px;">
                            系统课程维护
                        </a>
                    </li>
                    <li id="data_user_info">
                        <a href="<?php echo U('Home/DataManage/userInfo');?>" style="font-size: 12px;">
                            用户信息维护
                        </a>
                    </li>
                    <li id="data_count">
                        <a href="<?php echo U('Home/DataManage/surveyCount');?>" style="font-size: 12px;">
                            评价结果统计
                        </a>
                    </li>
                    <li class="dis-none">
                        <a href="">
                            子菜单
                        </a>
                    </li>
                    <li class="dis-none">
                        <a href="">
                            子菜单
                        </a>
                    </li>
                </ul>
            </li>

            <!--登陆界面-->
            <li>
                <a href="<?php echo U('Home/Method/back');?>">
                    <i class="fa fa-user">
                    </i>
                        <span style="font-size: 14px;">
                           登录页面
                        </span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- 边栏 -->

    <!-- 主窗体 -->
    <section id="main-content">

        <!-- 主容器1  -->
        <section class="wrapper" id="section_demo">

            <!--微信菜单设置注意事项-->
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h1 class="panel-title-red">
                        课程模版问卷发布注意事项：
                    </h1>
                </div>
                <div class="panel-body" rows="8">
                    1、本页面的课程信息为学工系统中的课程信息，而非个人课程信息。<br>
                    2、可通过表格对课程进行选择，并选择相应的模版进行发布，课程信息及模版的修改请在相关模块下进行。<br>
                    3、应先选择问卷模版后再选择将要匹配的课程进行课程评价任务的发布。<br><br>
                </div>
            </div>

            <!--评价问卷管理-->
            <div class="row">
                <div class="panel-body" style="padding-bottom:0px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading color-hui">查询条件</div>
                        <div class="panel-body">
                            <form id="formSearch_survey" class="form-horizontal">
                                <div class="form-group" style="margin-top:15px">
                                    <!--问卷等级-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label pad-left">选择类型:</label>

                                        <div class="col-sm-9">
                                            <select id="survey_search_level" class="form-control">
                                                <option value="0"> 无</option>
                                                <option value="3"> 校级</option>
                                                <option value="2"> 院级</option>
                                                <option value="1"> 系级</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--问卷等级-->

                                    <!--问卷分组-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label pad-left">选择分组:
                                        </label>

                                        <div class="col-sm-9">
                                            <select id="survey_search_group" class="form-control">
                                                <option disabled="" value="0">问卷分组</option>
                                                <?php echo ($groupSelectList); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--问卷分组-->


                                    <div class="form-group">
                                        <label class="control-label col-sm-2 pad-left"
                                               for="txt_search_condition_input">问卷名称：</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="txt_search_condition_input"
                                                   placeholder="请输入问卷名称">
                                        </div>
                                    </div>


                                    <div class="form-group" style="margin-left:20%;margin-top: 20px;">
                                        <div class="col-sm-12">
                                            <button type="button" onclick="searchSurvey();"
                                                    class="btn btn-primary col-sm-8">查询
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div id="toolbar_survey" class="btn-group">
                            <div>
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon" aria-hidden="true"></span>单击选择问卷模版
                                </button>
                                <button type="button" class="btn btn-info" onclick="publishRecord();">
                                    <span class="glyphicon" aria-hidden="true"></span>发布记录管理
                                </button>
                            </div>
                        </div>
                        <table class="panel" id="table_survey" data-page-list="[10, 25, 50, 100, ALL]"></table>
                    </div>
                </div>
            </div>

            <!--查询条件设置-->
            <div class="row">
                <div class="panel-body" style="padding-bottom:0px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading color-hui">查询条件</div>
                        <div class="panel-body">
                            <form id="formSearch_course" class="form-horizontal">
                                <div class="form-group" style="margin-top:15px">

                                    <label class="control-label left-f" for="search_course_num"
                                           style="margin-left:30px;">课程号：</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="search_course_num">
                                    </div>

                                    <label class="control-label left-f" for="search_course_name"
                                           style="margin-left:10px;">课程名：</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="search_course_name">
                                    </div>

                                    <label class="control-label left-f" for="search_course_semester"
                                           style="margin-left:10px;">学期：</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="search_course_semester">
                                    </div>

                                    <div style="margin-left:22%;">
                                        <button type="button" onclick="course_show();" style="margin-top:20px;"
                                                class="btn btn-primary col-sm-8">查询
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div id="toolbar_course" class="btn-group">
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon" aria-hidden="true"></span>单击选择课程
                            </button>
                        </div>
                        <table class="panel" id="table_course" data-page-list="[10, 25, 50, 100, ALL]"></table>
                    </div>

                    <!--提交-->
                    <div class="form-group" id="submit_new" style="margin-top: 20px;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-success col-sm-10"
                                    onclick="publishCourseDemoSurvey();">发布模版问卷
                            </button>
                        </div>
                    </div>
                    <!--提交-->
                </div>
            </div>

            <!--测试用文本框-->
            <textarea id="list_output" rows="3" class="form-control" style="visibility:hidden"></textarea>

        </section>
        <!-- 主容器1 -->

        <!-- 主容器2  -->
        <section class="wrapper" id="section_record" style="display:none">

            <!--查询条件设置-->
            <div class="row">
                <div class="panel-body" style="padding-bottom:0px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading color-hui">查询条件</div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group" style="margin-top:15px">

                                    <label class="control-label left-f" for="search_survey_name"
                                           style="margin-left:30px;">问卷名称：</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="search_survey_name">
                                    </div>

                                    <label class="control-label left-f" for="search_record_course_name"
                                           style="margin-left:10px;">课程名：</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="search_record_course_name">
                                    </div>

                                        <button type="button" onclick="record_show();"
                                                class="btn btn-primary col-sm-2">查询
                                        </button>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div id="toolbar_record" class="btn-group">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon" aria-hidden="true"></span>课程问卷发布记录
                            </button>
                        </div>
                        <table class="panel" id="table_record" data-page-list="[10, 25, 50, 100, ALL]"></table>
                    </div>

                </div>
            </div>

            <!--测试用文本框-->
            <textarea id="list_output2" rows="5" class="form-control" style="visibility:hidden"></textarea>

        </section>
        <!-- 主容器2  -->

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">删除记录提示</h4>
                    </div>
                    <div class="modal-body text-center">
                        <span class="left-30 red size-16">删除后将撤回发布的问卷！确认要删除发布记录吗？</span>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                        <button class="btn btn-warning" type="button" onclick="deleteRecord();">确认</button>
                    </div>
                </div>
            </div>
            <span style="display:none" id="survey_id_list"></span>
            <span style="display:none" id="course_id_list"></span>
            <span style="display:none" id="id"></span>
        </div>

        <div class="modal fade" id="lookCourse">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title center">查看课程信息</h4>
                    </div>
                    <div class="panel-body" style="margin-top:20px;">

                        <div class="col-lg-12" style="margin-top:10px;">
                            <section class="panel">
                                <form class="form-horizontal tasi-form" method="get">
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">课程号：</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_course_id" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">课程名：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_course_name"
                                                   disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">教师名：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_tea_name" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">学 期：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_semester" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div1">
                                            <label class="order-label modify-user-label1">课程性质：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_type" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div1">
                                            <label class="order-label modify-user-label1">是否必修：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_is_must" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div1">
                                            <label class="order-label modify-user-label1">上课人数：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="look_take_num" disabled="">
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loading">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="panel-body" style="margin-top:20px;">
                        <span id="hint">正在处理请稍后...</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 主窗体 -->

    <!-- 尾 -->
<footer class="site-footer">
    <div class="text-center" style="margin-left:20%">
        2016 &copy; CES by
        <a href="" target="_blank">
            高彪
        </a>
        <a href="#" class="go-top">
            <i class="fa fa-angle-up">
            </i>
        </a>
    </div>
</footer>
<!-- 尾 -->

</section>
<!-- SECTION -->
<!-- JS -->

<!--<script src="/CESBack/Public/js/jquery.js"></script>&lt;!&ndash; BASIC JQUERY LIB. JS &ndash;&gt;-->
<script src="/CESBack/Public/js/jquery-3.1.1.min.js"></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="/CESBack/Public/js/bootstrap.min.js"></script><!-- BOOTSTRAP JS -->
<script src="/CESBack/Public/js/jquery.dcjqaccordion.2.7.js"></script><!-- 左侧子菜单栏显示 -->
<script src="/CESBack/Public/js/jquery.scrollTo.min.js"></script><!-- SCROLLTO JS -->
<script src="/CESBack/Public/js/jquery.nicescroll.js"></script><!-- NICESCROLL JS -->
<script src="/CESBack/Public/js/respond.min.js"></script><!-- RESPOND JS -->
<script src="/CESBack/Public/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="/CESBack/Public/js/common-scripts.js"></script><!-- BASIC COMMON JS -->
<script src="/CESBack/Public/js/sco.message.js" type="text/javascript"></script>
<script src="/CESBack/Public/js/bootstrap-table.min.js"></script>
<script src="/CESBack/Public/js/bootstrap-table-zh-CN.min.js"></script>
<script src="/CESBack/Public/js/courseManage/coursePublishDemo.js" type="text/javascript"></script>

</body>
</html>