<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/CESBack/Public/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>CES-课程评价问卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link href="/CESBack/Public/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/CESBack/Public/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/CESBack/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- 字体 -->
    <link href="/CESBack/Public/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/CESBack/Public/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/CESBack/Public/css/sco.message.css" rel="stylesheet">
</head>
<script type="text/javascript">
    var HOST = "http://x9v8ac.natappfree.cc/";
</script>
<body>
<!-- SECTION -->
<section id="container">

    <!-- 主窗体 -->
    <section id="main-content" class="wrapper">


        <!--微信菜单设置注意事项-->
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h1 class="panel-title-red">
                    课程评价问卷填写注意事项：
                </h1>
            </div>
            <div class="panel-body" style="color: red" rows="8">
                1、您所有的问卷评价结果都会被记录到系统当中，请务必谨慎填写。<br>
                2、所有的问卷评价均为匿名评价，不记录评价者信息。<br>
            </div>
        </div>

        <!--评价问卷管理-->
        <div class="row">
            <div class="panel-body">
                <div class="panel panel-primary">
                    <div class="panel-heading color-hui" style="text-align:center;"><span id="s_name">问卷信息列表</span>
                    </div>
                    <div class="panel-body">
                        <div id="SurveyList">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--测试用文本框-->
        <textarea rows="14" id="SList" class="form-control" style="visibility: hidden"><?php echo ($SList); ?></textarea>
        <textarea id="openid" class="form-control" style="visibility: hidden"><?php echo ($openid); ?></textarea>

    </section>
    <!-- 主窗体 -->

    <!-- 尾 -->
    <footer class="site-footer">
        <div class="text-center">
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
</body>

<script src="/CESBack/Public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="/CESBack/Public/js/bootstrap.min.js"></script><!-- BOOTSTRAP JS -->
<script src="/CESBack/Public/js/sco.message.js" type="text/javascript"></script>
<script src="/CESBack/Public/js/surveyManage/surveyPreview.js" type="text/javascript"></script>
</html>