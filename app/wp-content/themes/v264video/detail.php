<?php
/*
Template Name: detail
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://san.org
 *
 * @package WordPress
 * @subpackage v264video
 */

get_header(); ?>
    <script src="//cytroncdn.videojj.com/latest/Iva.js"></script>
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
    <?php wp_footer(); ?>
</body>
<?php wp_enqueue_scripts('jquery-js'); ?>
<?php wp_enqueue_scripts('bootstrap-js'); ?>
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


<?php custom_registration_function(); ?>

</html>