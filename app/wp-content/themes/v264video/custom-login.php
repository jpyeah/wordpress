<?php
/*
Template Name: customlogin
*/

if(!isset($_SESSION))
  session_start();
 
if( isset($_POST['ludou_token']) && ($_POST['ludou_token'] == $_SESSION['ludou_token'])) {
  $error = '';
  $secure_cookie = false;
  $user_name = sanitize_user( $_POST['log'] );
  $user_password = $_POST['pwd'];
  if ( empty($user_name) || ! validate_username( $user_name ) ) {
    $error .= '<strong>错误</strong>：请输入有效的用户名。<br />';
    $user_name = '';
  }
 
  if( empty($user_password) ) {
    $error .= '<strong>错误</strong>：请输入密码。<br />';
  }
 
  if($error == '') {
    // If the user wants ssl but the session is not ssl, force a secure cookie.
    if ( !empty($user_name) && !force_ssl_admin() ) {
      if ( $user = get_user_by('login', $user_name) ) {
        if ( get_user_option('use_ssl', $user->ID) ) {
          $secure_cookie = true;
          force_ssl_admin(true);
        }
      }
    }
     
    if ( isset( $_GET['r'] ) ) {
      $redirect_to = $_GET['r'];
      // Redirect to https if user wants ssl
      if ( $secure_cookie && false !== strpos($redirect_to, 'wp-admin') )
        $redirect_to = preg_replace('|^http://|', 'https://', $redirect_to);
    }
    else {
      $redirect_to = admin_url();
    }
   
    if ( !$secure_cookie && is_ssl() && force_ssl_login() && !force_ssl_admin() && ( 0 !== strpos($redirect_to, 'https') ) && ( 0 === strpos($redirect_to, 'http') ) )
      $secure_cookie = false;
   
    $creds = array();
    $creds['user_login'] = $user_name;
    $creds['user_password'] = $user_password;
    $creds['remember'] = !empty( $_POST['rememberme'] );
    $user = wp_signon( $creds, $secure_cookie );
    if ( is_wp_error($user) ) {
      $error .= $user->get_error_message();
    }
    else {
      unset($_SESSION['ludou_token']);
      wp_safe_redirect($redirect_to);
    }
  }

  unset($_SESSION['ludou_token']);
}

$rememberme = !empty( $_POST['rememberme'] );
 
$token = md5(uniqid(rand(), true));
$_SESSION['ludou_token'] = $token;

?>


<?php the_content(); ?>

<?php 
if(!empty($error)) {
echo '<p class="ludou-error">'.$error.'</p>';
}
if (!is_user_logged_in()) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <?php wp_enqueue_scripts('bootstrap-min-css'); ?>
    <?php wp_enqueue_scripts('style'); ?>
    
    <?php wp_enqueue_scripts('bootstrap-min-css'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <?php wp_head(); ?>
</head>

<body>
    <nav>
        <div class="container-fluid login-header">
            <div class="row">
                <div class="col-md-3 hidden-xs"></div>
                <div class="col-md-6 col-xs-12">
                    <div class="login-nav">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/icon/login.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 hidden-xs"></div>
            </div>
        </div>
    </nav>
    <div class="container-fluid login-container">
        <div class="row">
            <div class="col-md-3 hidden-xs"></div>
            <div class="col-md-6 col-xs-12">
                <div class="login-box">
                    <div class="row">
                        <div class="col-md-6 hidden-xs">
                            <div class="login-cover">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="login-form">
                                <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                                    <div class="form-group">
                                        <label for="account">登录账号：</label><span class="error-msg">（账号不存在）</span>
                                        <input type="text" class="form-control" id="account" placeholder="账号"  name="log"  value="<?php if(!empty($user_name)) echo $user_name; ?>" style="margin-top: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">密码：</label><span class="error-msg">（密码错误）</span>
                                        <input type="password" class="form-control" id="password" placeholder="密码" name="pwd" style="margin-top: 10px;">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                              <input type="checkbox"   name="rememberme" id="rememberme" value="1" <?php checked( $rememberme ); ?> >自动登录
                                        </label>
                                    </div>
                                    <input type="hidden" name="redirect_to" value="<?php if(isset($_GET['r'])) echo $_GET['r']; ?>" />
                                    <input type="hidden" name="ludou_token" value="<?php echo $token; ?>" />
                                    <button type="submit" class="btn btn-submit">登录</button>
                                    <div class="login-tool">
                                        <span>没有账号？</span>
                                        <?php echo ' <a href="http://localhost:9080/?page_id=102">立即注册</a>';  ?>
                                     
                                        <a href="#">找回密码</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-xs">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 hidden-xs"></div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-md-4 col-md-12">
                        <div class="login-bottom-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/dichan.png" alt="">
                            <h5>创意</h5>
                            <span>品牌的互联网高端视频营销解决方案</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-12">
                        <div class="login-bottom-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/dichan.png" alt="">
                            <h5>制作资源</h5>
                            <span>实现与优质制作团队快速配对</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-12">
                        <div class="login-bottom-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/dichan.png" alt="">
                            <h5>制作保障</h5>
                            <span>国际监制增值服务保证制作顺利进行</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-xs"></div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
<?php wp_enqueue_scripts('jquery-js'); ?>
<?php wp_enqueue_scripts('bootstrap-js'); ?>
</html>

<?php } else {
echo '<p class="ludou-error">您已登录！（<a href="'.wp_logout_url().'" title="登出">登出？</a>）</p>';
} ?>