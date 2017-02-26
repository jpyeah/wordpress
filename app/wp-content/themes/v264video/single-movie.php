<?php
/*
Template Name: moviedetail
*/
echo '导演：'.get_post_meta( get_the_ID(), '_movie_director', true );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <?php wp_enqueue_scripts('bootstrap-min-css'); ?>
    <?php wp_enqueue_scripts('home'); ?>
    <script src="//cytroncdn.videojj.com/latest/Iva.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php get_template_part( 'menunav' );           // Navigation bar (nav.php) ?>

    <section class="video-box">
        <div class="hidden-xs" id="video-pc" style="width:748px;height:421px;"></div>
        <div class="hidden-md hidden-sm hidden-lg" id="video-mobile" style="width:100%;height:200px;"></div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12" style="border-right: 1px solid #eee;padding-right: 0">
                <div class="video-info">
                    <div class="title-box">
                        <h3>生化危机5</h3>
                        <span>23253</span>
                        <span>3525</span>
                    </div>
                    <div class="title-info">
                        <small>来自</small>
                        <a href="#">团队名</a>
                        <small>上传</small>
                        <small>9天前</small>
                    </div>
                    <div class="user-box">
                        <div class="user-box-left">
                            <img src="" alt="">
                            <button>+加关注</button>
                        </div>
                        <div class="user-box-right">
                            <span>分享到：</span>
                            <img src="" alt="分享到微博">
                            <img src="" alt="分享到微信">
                            <img src="" alt="分享到facebook">
                        </div>
                    </div>
                </div>

                <div class="comment-count">
                    <h3>9999个评论</h3>
                </div>

                <div class="comment-box">
                    <ul>
                        <li>
                            <img src="" alt="">
                            <div class="comment-content">
                                <h5>用户名</h5>
                                <p>评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字</p>
                            </div>
                        </li>
                        <li>
                            <img src="" alt="">
                            <div class="comment-content">
                                <h5>用户名</h5>
                                <p>评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字</p>
                            </div>
                        </li>
                        <li>
                            <img src="" alt="">
                            <div class="comment-content">
                                <h5>用户名</h5>
                                <p>评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字评论文字</p>
                            </div>
                        </li>
                        <li>
                            <img src="" alt="">
                            <div class="comment-content">
                                <textarea placeholder="输入你的评论"></textarea>
                                <button>登录评论</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <h4 style="padding: 10px 0">更多视频</h4>
                <ul class="more-video">
                    <li>
                        <div class="more-box">
                            <img src="" alt="">
                            <h5>视频标题</h5>
                            <span>播放数：322626</span>
                        </div>
                    </li>
                    <li>
                        <div class="more-box">
                            <img src="" alt="">
                            <h5>视频标题</h5>
                            <span>播放数：322626</span>
                        </div>
                    </li>
                    <li>
                        <div class="more-box">
                            <img src="" alt="">
                            <h5>视频标题</h5>
                            <span>播放数：322626</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
<?php wp_enqueue_scripts('jquery-js'); ?>
<?php wp_enqueue_scripts('bootstrap-js'); ?>
<?php wp_enqueue_scripts('movie-js'); ?>

</html>