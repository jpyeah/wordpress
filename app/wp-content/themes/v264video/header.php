<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <!--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styl/Style.css">
    <link rel="stylesheet" href="styl/home.css">
    -->
    <?php wp_enqueue_scripts('bootstrap-min-css'); ?>
    <?php wp_enqueue_scripts('style'); ?>
    <?php wp_enqueue_scripts('home'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-default" role="navigation" style="min-height: 70px;margin: 0;border: 0">
        <div class="container-fluid" style="padding-left: 15px;padding-right: 15px;background: #000">
            <!--header section -->
            <div class="navbar-header" style="min-height: 70px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">  
                    <span class="sr-only">Toggle navigation</span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon/logo.png">
                </a>
            </div>
            <!-- menu section -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav" style="margin-top: 10px;margin-left: 250px">
                    <li><a href="# ">首页</a></li>
                    <li><a href="# ">找团队</a></li>
                    <li><a href="#">下单</a></li>
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">合作流程</a></li>
                    <li><a href="#">资讯</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="margin-top: 10px">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/search.png" alt="" style="padding: 20px">
                    </li>
                    <li><a href="# ">注册</a></li>
                    <li><a href=" <?php echo wp_login_url(get_permalink());?>">登录</a></li>
                </ul>
            </div>
        </div>
    </nav>
