<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="Custom Theme">
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
    <link rel="stylesheet" type="text/css" href="/CESBack/Public/assets/morris.js-0.4.3/morris.css">

    <!--[if lt IE 9]>
    <script src="/CESBack/Public/js/html5shiv.js">
    </script>
    <script src="/CESBack/Public/js/respond.min.js">
    </script>
    <![endif]-->
    <!-- END STYLESHEET-->
</head>
<script type="text/javascript">
    var HOST = "http://95vdnd.natappfree.cc/";
</script>
<body id="body">
<!-- SECTION -->
<section id="container">


    <!--问卷选择-->
    <div class="row">
        <div class="panel-body" style="padding-bottom:0px;">
            <div class="panel panel-primary">

                <div class="panel-heading color-hui">统计分析——<span id="title"></span></div>

                <div class="panel-body">
                    <?php echo ($html_charts); ?>
                </div>

                <div class="panel-body" style="margin: 0 auto;">
                    <?php echo ($append_html); ?>
                </div>

                <!--测试用文本框-->
                <textarea id="survey_content" rows="3" class="form-control" style="visibility:hidden"><?php echo ($content); ?></textarea>
                <textarea id="survey_name" rows="3" class="form-control" style="display:none"><?php echo ($name); ?></textarea>
            </div>
        </div>
    </div>


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
<script src="/CESBack/Public/js/bootstrap-table.min.js"></script>
<script src="/CESBack/Public/js/bootstrap-table-zh-CN.min.js"></script>
<script src="/CESBack/Public/js/dataManage/surveyCount.js" type="text/javascript"></script>
<script src="/CESBack/Public/assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
<script src="/CESBack/Public/assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>


<script>

</script>
<!-- JS -->

</body>
</html>