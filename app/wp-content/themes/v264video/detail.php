<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styl/home.css">
    <script src="//cytroncdn.videojj.com/latest/Iva.js"></script>
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

    <section class="video-box">
        <div class="hidden-xs" id="video-pc" style="width:748px;height:421px;"></div>
        <div class="hidden-md hidden-sm hidden-lg" id="video-mobile" style="width:100%;height:200px;"></div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">1</div>
            <div class="col-md-4 col-xs-12">2</div>
        </div>
    </div>
</body>
<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script>
    new Iva(
        'video-mobile',//父容器id
        {
            appkey: '410idWDt',//必填，请在控制台查看应用标识
            video: 'http://7xikp8.com1.z0.glb.clouddn.com/bunny.mp4',//必填，播放地址（例如：http://v.youku.com/v_show/id_XMTY5NDg2MzY5Ng==.html）
            title: '小视频',//选填，建议填写方便后台数据统计
            cover: '',//选填，视频封面url
            playerUrl: '', //选填，第三方播放器与Video++互动层的桥接文件，由Video++官方定制提供，默认为空
            videoStartPrefixSeconds: 0,//选填，跳过片头，默认为0
            videoEndPrefixSeconds: 0,//选填，跳过片尾，默认为0
            /* 以下参数可以在“控制台->项目看板->应用管理->播放器设置” >进行全局设置，前端设置可以覆盖全局设置 */
            skinSelect: 0,//选填，播放器皮肤，可选0、1、2，默认为0，
            autoplay: false,//选填，是否自动播放，默认为false
            rightHand: true,//选填，是否开启右键菜单，默认为false
            autoFormat: false,//选填，是否自动选择最高清晰度，默认为false
            bubble: true,//选填，是否开启云泡功能，默认为true
            jumpStep: 10,//选填，左右方向键快退快进的时间
            tagTrack: false,//选填，云链是否跟踪，默认为false
            tagShow: false,//选填，云链是否显示，默认为false
            tagDuration: 5,//选填，云链显示时间，默认为5秒
            tagFontSize: 16,//选填，云链文字大小，默认为16像素
            editorEnable: true, // 选填，当用户登录之后，是否允许加载编辑器，默认为true
            vorEnable: true, // 选填，是否允许加载灵悟，默认为true
            vorStartGuideEnable: true //选填， 是否启用灵悟新人引导，默认为true
        }
    );
    var ivaInstance = new Iva(
        'video-pc',//父容器id
        {
            appkey: '410idWDt',//必填，请在控制台查看应用标识
            video: 'http://7xikp8.com1.z0.glb.clouddn.com/bunny.mp4',//必填，播放地址（例如：http://v.youku.com/v_show/id_XMTY5NDg2MzY5Ng==.html）
            title: '小视频',//选填，建议填写方便后台数据统计
            cover: '',//选填，视频封面url
            playerUrl: '', //选填，第三方播放器与Video++互动层的桥接文件，由Video++官方定制提供，默认为空
            videoStartPrefixSeconds: 0,//选填，跳过片头，默认为0
            videoEndPrefixSeconds: 0,//选填，跳过片尾，默认为0
            /* 以下参数可以在“控制台->项目看板->应用管理->播放器设置” >进行全局设置，前端设置可以覆盖全局设置 */
            skinSelect: 0,//选填，播放器皮肤，可选0、1、2，默认为0，
            autoplay: false,//选填，是否自动播放，默认为false
            rightHand: true,//选填，是否开启右键菜单，默认为false
            autoFormat: false,//选填，是否自动选择最高清晰度，默认为false
            bubble: true,//选填，是否开启云泡功能，默认为true
            jumpStep: 10,//选填，左右方向键快退快进的时间
            tagTrack: false,//选填，云链是否跟踪，默认为false
            tagShow: false,//选填，云链是否显示，默认为false
            tagDuration: 5,//选填，云链显示时间，默认为5秒
            tagFontSize: 16,//选填，云链文字大小，默认为16像素
            editorEnable: true, // 选填，当用户登录之后，是否允许加载编辑器，默认为true
            vorEnable: true, // 选填，是否允许加载灵悟，默认为true
            vorStartGuideEnable: true //选填， 是否启用灵悟新人引导，默认为true
        }
    );

</script>

</html>