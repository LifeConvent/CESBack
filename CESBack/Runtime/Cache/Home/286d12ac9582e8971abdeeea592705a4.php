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
    <link rel="stylesheet" type="text/css" href="/CESBack/Public/css/setAutoRes/set-auto-list.css">
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
        <section class="wrapper" id="wrapper1">

            <!--问卷发布流程步骤-->
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h1 class="panel-title-red">
                        问卷发布流程步骤：
                    </h1>
                </div>
                <div class="panel-body mar-left-20" rows="8">
                    <div class="row">
                        <div class="order-left-10">
                            <label class="order-label">1</label>
                        </div>
                        <span class="mar-left-20" style="line-height:25px;vertical-align:text-bottom;">
                             在问卷数据列表中通过查询条件搜索出指定问卷，选择要发布的问卷。
                        </span>
                    </div>
                    <div class="row mar-top-10">
                        <div class="order-left-10">
                            <label class="order-label">2</label>
                        </div>
                        <span class="mar-left-20" style="line-height:25px;vertical-align:text-bottom;">
                             在用户数据列表中通过查询条件搜索出特定用户，选择要发布问卷的用户<span
                                class="red">（在不需要条件筛选时务必点击按问卷筛选用户按钮，否则将无法正常发布,多问卷同时匹配时，所筛选到的人员为多个问卷都未匹配的，即该用户在多问卷中有一个问卷已经匹配，则该用户会被过滤）</span>。
                        </span>
                    </div>
                    <div class="row mar-top-10">
                        <div class="order-left-10">
                            <label class="order-label">3</label>
                        </div>
                        <span class="mar-left-20" style="line-height:25px;vertical-align:text-bottom;">
                             提交问卷和用户信息，确认发布。可选择自动推送问卷填写消息或不发送。
                        </span>
                    </div>
                </div>
            </div>

            <!--评价问卷管理-->
            <div class="row">
                <div class="panel-body" style="padding-bottom:0px;">

                    <div class="panel panel-primary">
                        <div class="panel-heading color-hui">查询条件</div>
                        <div class="panel-body">
                            <form class="form-horizontal">
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
                                <button id="btn_add_survey" type="button" class="btn btn-primary">
                                    <span class="glyphicon" aria-hidden="true"></span>单击问卷选择
                                </button>
                            </div>
                        </div>
                        <table class="panel" id="table_survey" data-page-list="[10, 25, 50, 100, ALL]"></table>
                    </div>
                </div>
            </div>

            <!--用户信息管理-->
            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading color-hui">用户信息查询条件</div>
                        <div class="panel-body">
                            <form id="formSearch" class="form-horizontal">
                                <div class="form-group" style="margin-top:15px">

                                    <label class="control-label mar-left-10 left-f"
                                           for="txt_search_graclass">年级：</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="txt_search_graclass">
                                    </div>

                                    <label class="control-label left-f" for="txt_search_pro">专业：</label>

                                    <select class="dd3-content-et m-bot15 order-select col-lg-2" id="txt_search_pro"
                                            style="margin-top:3px">
                                        <option value="">无</option>
                                        <option value="1">计算机科学与技术</option>
                                        <option value="2">信息安全</option>
                                        <option value="3">信息与计算科学</option>
                                        <option value="4">计算机科学与技术（中加方向）</option>
                                        <option value="5">网络工程</option>
                                        <option value="6">物联网工程</option>
                                        <option value="7">通信工程</option>
                                    </select>

                                    <label class="control-label mar-left-10 left-f"
                                           for="txt_search_class">班级：</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="txt_search_class">
                                    </div>

                                    <label class="control-label mar-left-10 left-f"
                                           for="txt_search_class">姓名：</label>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="txt_search_name">
                                    </div>

                                    <div class="col-sm-1" style="text-align:left;">
                                        <button type="button" style="margin-left:20px" onclick="show_user();"
                                                id="btn_query"
                                                class="btn btn-primary">查询
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div id="toolbar_user" class="btn-group">
                            <div>
                                <button id="btn_add_user" type="button" class="btn btn-primary">
                                    <span class="glyphicon" aria-hidden="true"></span>单击用户选择
                                </button>
                                <button id="btn_select_user" onclick="chooseNoUser();" type="button"
                                        class="btn btn-danger">
                                    <span class="glyphicon" aria-hidden="true"></span>按问卷筛选用户
                                </button>
                            </div>
                        </div>
                        <table class="panel" id="table_user" data-page-list="[10, 25, 50, 100, ALL]"></table>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-left:10%;">
                <input type="button" class="btn btn-success col-lg-10" value="发布问卷" onclick="surveyPublish();">
            </div>

            <!--测试用文本框-->
            <textarea id="list_output" rows="3" class="form-control" style="visibility:hidden"></textarea>

        </section>
        <!-- 主容器1  -->

        <!-- 主容器2  -->
        <section class="wrapper" id="wrapper2" style="display:none">

            <!--问卷添加-->
            <div class="row">
                <div class="panel-body" style="padding-bottom:0px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading color-hui">
                            <span>添加课程评价问卷</span>
                        </div>

                        <div class="panel-body">
                            <form id="formSearch_" class="form-horizontal">
                                <div class="form-group" style="margin-top:15px">

                                    <div class="panel-body">
                                        <form class="form-horizontal">
                                            <!--标题栏-->
                                            <div class="form-group" style="text-align:center">
                                                <button type="button" class="btn btn-info" style="width:60%">
                                                    添加课程评价问卷
                                                </button>
                                                <button type="button" class="btn btn-primary"
                                                        style="margin-left: 20px;"
                                                        onclick="goBack()">返回
                                                </button>
                                            </div>
                                            <!--标题栏-->

                                            <!--问卷等级-->
                                            <div class="form-group" id="survey_level">
                                                <label class="col-sm-2 control-label pad-left">
                                                    <span class="star-red">*</span>选择类型:</label>
                                                <label class="checkbox-inline">
                                                    <input type="radio" id="optionsRadios3" value="3"
                                                           name="survey_type" checked="" disabled> 校级
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="radio" id="optionsRadios2" value="2"
                                                           name="survey_type" disabled> 院级
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="radio" id="optionsRadios1" value="1"
                                                           name="survey_type" disabled> 系级
                                                </label>
                                            </div>
                                            <!--问卷等级-->

                                            <!--问卷分组-->
                                            <div class="form-group" id="survey_group">
                                                <label class="col-sm-2 control-label pad-left">
                                                    <span class="star-red">*</span>选择分组:
                                                </label>

                                                <div class="col-sm-9">
                                                    <select id="survey_sub_group" class="form-control" disabled>
                                                        <option disabled="" value="0">问卷分组</option>
                                                        <?php echo ($groupSelectList_search); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--问卷分组-->

                                            <!--问卷名称-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label pad-left"><span
                                                        class="star-red">*</span>问卷名称:</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="new_survey_name"
                                                           placeholder="问卷名称" disabled>
                                                </div>
                                            </div>
                                            <!--问卷名称-->

                                            <!--问卷简介-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label pad-left">问卷简介:</label>

                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="3" placeholder="请输入问卷简介，可不填"
                                                              id="new_survey_detail" disabled></textarea>
                                                </div>
                                            </div>
                                            <!--问卷简介-->

                                            <!--问题列表及按钮-->
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label pad-left"><span
                                                        class="star-red">*</span>创建问题:</label>

                                                <div class="col-sm-6">
                                                    <li class="list-group-item color-hui text-white"
                                                        style="text-align:center;">
                                                        问卷列表信息
                                                    </li>
                                                    <ul class="list-group" id="QuestionList">
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--问题列表及按钮-->

                                            <!--隐藏排序及数量-->
                                            <div class="form-group" style="display:none;">
                                                <label class="col-sm-2 control-label">问卷排序:</label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="new_survey_sort"
                                                           placeholder="分组排序" value="1">
                                                    <input type="text" class="form-control" id="q_count"
                                                           placeholder="问题数量" value="0">
                                                </div>
                                            </div>
                                            <!--隐藏排序及数量-->

                                        </form>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <!--测试用文本框-->
            <textarea rows="10" class="form-control" style="visibility:hidden"></textarea>
        </section>
        <!-- 主容器2  -->

        <div class="modal fade" id="modifyUser">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title center">查看用户信息</h4>
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
                                            <label class="order-label modify-user-label">学 号：</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="modify_stu_num" disabled="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">姓 名：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="modify_stu_name" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">性 别：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="modify_stu_sex" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">年 级：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="modify_stu_graclass" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">专 业：</label>
                                        </div>
                                        <select class="dd3-content-et m-bot15 order-select col-lg-9"
                                                style="margin-left:20px;"
                                                id="modify_stu_pro" disabled>
                                            <option value="">无</option>
                                            <option value="1">计算机科学与技术</option>
                                            <option value="2">信息安全</option>
                                            <option value="3">信息与计算科学</option>
                                            <option value="4">计算机科学与技术（中加方向）</option>
                                            <option value="5">网络工程</option>
                                            <option value="6">物联网工程</option>
                                            <option value="7">通信工程</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">班 级：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="modify_stu_class" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <span class="star-red">*</span>
                                        </div>
                                        <div class="order-left-10 modify-user-div">
                                            <label class="order-label modify-user-label">匹 配：</label>
                                        </div>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="modify_is_match" disabled>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                        <button class="btn btn-warning" type="button" data-dismiss="modal">确认</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">删除自动回复提示</h4>
                    </div>
                    <div class="modal-body text-center">
                        <span class="left-30 red size-16">删除后将无法恢复！确认要删除自动回复吗？</span>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                        <button class="btn btn-warning" type="button" onclick="deleteSub();">确认</button>
                    </div>
                </div>
            </div>
            <span style="display:none" id="myModalHide"></span>
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

<script src="/CESBack/Public/js/jquery-3.1.1.min.js"></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="/CESBack/Public/js/bootstrap.min.js"></script><!-- BOOTSTRAP JS -->
<script src="/CESBack/Public/js/courseManage/surveyPublishStart.js"></script>
<script src="/CESBack/Public/js/jquery.dcjqaccordion.2.7.js"></script><!-- 左侧子菜单栏显示 -->
<script src="/CESBack/Public/js/jquery.scrollTo.min.js"></script><!-- SCROLLTO JS -->
<script src="/CESBack/Public/js/jquery.nicescroll.js"></script><!-- NICESCROLL JS -->
<script src="/CESBack/Public/js/respond.min.js"></script><!-- RESPOND JS -->
<script src="/CESBack/Public/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="/CESBack/Public/js/common-scripts.js"></script><!-- BASIC COMMON JS -->
<script src="/CESBack/Public/js/sco.message.js" type="text/javascript"></script>
<script src="/CESBack/Public/js/bootstrap-table.min.js"></script>
<script src="/CESBack/Public/js/bootstrap-table-zh-CN.min.js"></script>
<script src="/CESBack/Public/js/courseManage/surveyPublish.js"></script>


<script>

</script>
<!-- JS -->

</body>
</html>