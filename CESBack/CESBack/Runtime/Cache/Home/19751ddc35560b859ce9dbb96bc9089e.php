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
    <title>错误提示</title>

    <!-- BEGIN STYLESHEET -->
    <link href="/CESBack/Public/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/CESBack/Public/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/CESBack/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- FONT AWESOME ICON STYLESHEET -->
    <link href="/CESBack/Public/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/CESBack/Public/css/style-responsive.css" rel="stylesheet"><!-- THEME BASIC RESPONSIVE  CSS -->
    <!-- END STYLESHEET -->
</head>
<body class="body-404">
<div class="container">
    <!-- BEGIN MAIN CONTENT -->
    <section class="error-wrapper">
        <h2 style="margin-top: 50%;"><?php echo ($title); ?></h2>

        <h3 style="margin-top: 2%;"><?php echo ($head); ?></h3>

        <p class="page-404" style="margin-top: 10%;"><?php echo ($body); ?></p>
    </section>
    <!-- END MAIN CONTENT -->
</div>
</body>
</html>