<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styl/Style.css">
    <link rel="stylesheet" href="styl/home.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <img src="images/icon/logo.png">
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
                        <img src="images/icon/search.png" alt="" style="padding: 20px">
                    </li>
                    <li><a href="# ">注册</a></li>
                    <li><a href="#">登录</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid hidden-md hidden-sm hidden-lg">
        <div class="row">
            <div id="mainCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousel" data-slide-to="1"></li>
                    <li data-target="#mainCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/11.jpg" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="images/12.jpg" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="images/13.jpg" alt="Third slide">
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <!--<a class="carousel-control left" href="#mainCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#mainCarousel" data-slide="next">&rsaquo;</a>-->
            </div>
        </div>
    </div>

    <section id="gallery" class="hidden-xs">

        <div class="container_image">

            <ul id="myRoundabout">

                <li>
                    <a href="#" target="_blank" title="图片"><img src="images/11.jpg" alt='图片' style="border: 0"></a>
                </li>

                <li>
                    <a href="#" target="_blank" title="图片"><img src="images/12.jpg" alt='图片' style="border: 0"></a>
                </li>

                <li>
                    <a href="#" target="_blank" title="图片"><img src="images/14.jpg" alt='图片' style="border: 0"></a>
                </li>

                <li>
                    <a href="#" target="_blank" title="图片"><img src="images/13.jpg" alt='图片' style="border: 0"></a>
                </li>

                <li>
                    <a href="#" target="_blank" title="图片"><img src="images/12.jpg" alt='图片' style="border: 0"></a>
                </li>

            </ul>

        </div>

    </section>

    <!-- 影视广告片 -->
    <div class="container-fluid hidden-xs">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="content-title">
                            <h4>影视广告片</h4>
                            <span>TV COMMERCIALS</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div id="carousel_1" class="carousel slide">
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/4.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/8.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/9.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/4.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/2.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/1.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/3.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/6.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/3.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/2.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/3.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/7.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 轮播（Carousel）导航 -->
                            <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>-->
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="item-slider-line">
                            <div class="row">
                                <div class="col-md-3 col-xs-3 col-md-offset-3 col-xs-offset-3">
                                    <div class="item-slider-active"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 移动端影视广告 -->
    <div class="container-fluid hidden-md hidden-sm hidden-lg">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="content-title">
                            <h4>影视广告片</h4>
                            <span>TV COMMERCIALS</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div id="carousel_1_m" class="carousel slide">
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 轮播（Carousel）导航 -->
                            <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>-->
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="item-slider-line">
                            <div class="row">
                                <div class="col-md-3 col-xs-3 col-md-offset-3 col-xs-offset-3">
                                    <div class="item-slider-active"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- 宣传片 -->
    <div class="container-fluid hidden-xs">
        <div class="row" style="background: #fafafa;margin-top: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="content-title">
                            <h4>宣传片</h4>
                            <span>CORPORATE VIDEOS</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div id="carousel_2" class="carousel slide">
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 轮播（Carousel）导航 -->
                            <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                             <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>-->
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="item-slider-line">
                            <div class="row">
                                <div class="col-md-3 col-xs-3 col-md-offset-6 col-xs-offset-6">
                                    <div class="item-slider-active"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 宣传片移动端 -->
    <div class="container-fluid hidden-md hidden-sm hidden-lg">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="content-title">
                            <h4>宣传片</h4>
                            <span>CORPORATE VIDEOS</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div id="carousel_2_m" class="carousel slide">
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/1.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/2.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/3.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/4.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row item-box">
                                        <div class="col-md-3 col-xs-12">
                                            <div class="item-cover">
                                                <img src="images/5.jpg" alt="">
                                            </div>
                                            <div class="item-avatar">
                                                <img src="images/3.jpg" alt="">
                                                <label>团队名</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 轮播（Carousel）导航 -->
                            <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>-->
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="item-slider-line">
                            <div class="row">
                                <div class="col-md-3 col-xs-3 col-md-offset-3 col-xs-offset-3">
                                    <div class="item-slider-active"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 分类 -->
    <div class="container-fluid">
        <div class="row category-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="content-title">
                            <h4 style="margin: 0;padding: 10px;">所有行业分类</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/yunshu.png" alt="">
                            <label>交通运输</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/shuma.png" alt="">
                            <label>电器数码</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/keji.png" alt="">
                            <label>网络科技</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/meizhuang.png" alt="">
                            <label>日用美妆</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/fushi.png" alt="">
                            <label>服饰搭配</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/baoxian.png" alt="">
                            <label>金融保险</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/dichan.png" alt="">
                            <label>家居地产</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/lvxing.png" alt="">
                            <label>购物旅行</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/yiliao.png" alt="">
                            <label>医疗保健</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/yule.png" alt="">
                            <label>文教娱乐</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/yiliao.png" alt="">
                            <label>医疗保健</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="cate-item">
                            <img src="images/icon/yule.png" alt="">
                            <label>文教娱乐</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 资讯 -->
    <div class="container-fluid">
        <div class="row news-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="content-title">
                            <h4 style="margin: 0;padding:10px;">新闻资讯</h4>
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="news-item">
                                    <span>案例</span>
                                    <h4>标题文字|ZZZZZZZZZZZZZ</h4>
                                    <p>文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</p>
                                    <a href="#">了解更多</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="news-item">
                                    <span>案例</span>
                                    <h4>标题文字|ZZZZZZZZZZZZZ</h4>
                                    <p>文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</p>
                                    <a href="#">了解更多</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="news-item">
                                    <span>案例</span>
                                    <h4>标题文字|ZZZZZZZZZZZZZ</h4>
                                    <p>文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</p>
                                    <a href="#">了解更多</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="news-item">
                                    <span>案例</span>
                                    <h4>标题文字|ZZZZZZZZZZZZZ</h4>
                                    <p>文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</p>
                                    <a href="#">了解更多</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="news-item">
                                    <span>案例</span>
                                    <h4>标题文字|ZZZZZZZZZZZZZ</h4>
                                    <p>文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</p>
                                    <a href="#">了解更多</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="news-item">
                                    <span>案例</span>
                                    <h4>标题文字|ZZZZZZZZZZZZZ</h4>
                                    <p>文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</p>
                                    <a href="#">了解更多</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="qrcode">
                            <span>
                                优秀制作人&制作团队 微信推广平台
                            </span>
                            <img src="images/qrcode.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid">
        <div class="row footer">
            <div class="col-md-4 col-xs-12">
                <h3>广告创意</h3>
            </div>
            <div class="col-md-4 col-xs-12">
                <h3>团队制作</h3>
            </div>
            <div class="col-md-4 col-xs-12">
                <h3>关于我们</h3>
            </div>
        </div>
    </div>
</body>
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/hammer.min.js"></script>
<script src="js/jquery.hammer.js"></script>
<script>
    var $jq = $.noConflict(true);

</script>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/roundabout.js"></script>
<script type="text/javascript" src="js/roundabout_shapes.js"></script>
<script type="text/javascript" src="js/gallery_init.js"></script>

<script>
    // 广告创意
    $jq('#carousel_1').carousel({
        interval: 4200
    });
    $jq('#carousel_1_m').carousel({
        interval: 4200
    });
    $jq('#carousel_1_m').hammer().on('swipeleft', function () {
        $jq(this).carousel('next');
    });
    $jq('#carousel_1_m').hammer().on('swiperight', function () {
        $jq(this).carousel('prev');
    });

    // 宣传片
    $jq('#carousel_2').carousel({
        interval: 8600
    });
    $jq('#carousel_2_m').carousel({
        interval: 8600
    });
    $jq('#carousel_2_m').hammer().on('swipeleft', function () {
        $jq(this).carousel('next');
    });
    $jq('#carousel_2_m').hammer().on('swiperight', function () {
        $jq(this).carousel('prev');
    });


    // 顶部轮播
    $jq('#mainCarousel').carousel();
    $jq('#mainCarousel').hammer().on('swipeleft', function () {
        $jq(this).carousel('next');
    });
    $jq('#mainCarousel').hammer().on('swiperight', function () {
        $jq(this).carousel('prev');
    });

</script>

</html>