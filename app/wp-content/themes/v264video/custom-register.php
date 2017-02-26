<?php     
/* 
*Template Name: customregister
*/ 

if( !empty($_POST['ludou_reg']) ) {
  $error = '';
  $sanitized_user_login = sanitize_user( $_POST['user_login'] );
  $user_email = apply_filters( 'user_registration_email', $_POST['user_email'] );

  // Check the username
  if ( $sanitized_user_login == '' ) {
    $error .= '<strong>错误</strong>：请输入用户名。<br />';
  } elseif ( ! validate_username( $sanitized_user_login ) ) {
    $error .= '<strong>错误</strong>：此用户名包含无效字符，请输入有效的用户名<br />。';
    $sanitized_user_login = '';
  } elseif ( username_exists( $sanitized_user_login ) ) {
    $error .= '<strong>错误</strong>：该用户名已被注册，请再选择一个。<br />';
  }

  // Check the e-mail address
  if ( $user_email == '' ) {
    $error .= '<strong>错误</strong>：请填写电子邮件地址。<br />';
  } elseif ( ! is_email( $user_email ) ) {
    $error .= '<strong>错误</strong>：电子邮件地址不正确。！<br />';
    $user_email = '';
  } elseif ( email_exists( $user_email ) ) {
    $error .= '<strong>错误</strong>：该电子邮件地址已经被注册，请换一个。<br />';
  }
   
  // Check the password
  if(strlen($_POST['user_pass']) < 6)
    $error .= '<strong>错误</strong>：密码长度至少6位!<br />';
  elseif($_POST['user_pass'] != $_POST['user_pass2'])
    $error .= '<strong>错误</strong>：两次输入的密码必须一致!<br />';
     
    if($error == '') {
    $user_id = wp_create_user( $sanitized_user_login, $_POST['user_pass'], $user_email );
   
    if ( ! $user_id ) {
      $error .= sprintf( '<strong>错误</strong>：无法完成您的注册请求... 请联系<a href="mailto:%s">管理员</a>！<br />', get_option( 'admin_email' ) );
    }
    else if (!is_user_logged_in()) {
      $user = get_user_by( 'login', $sanitized_user_login );
      $user_id = $user->ID;
 
      // 自动登录
      wp_set_current_user($user_id, $user_login);
      wp_set_auth_cookie($user_id);
      do_action('wp_login', $user_login);
    }
  }
}  
?>
<?php the_content(); ?>
<?php if(!empty($error)) {
 echo '<p class="ludou-error">'.$error.'</p>';
}
if (!is_user_logged_in()) { ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>
    <?php wp_enqueue_scripts('bootstrap-min-css'); ?>
    <?php wp_enqueue_scripts('home'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <div class="col-md-4 hidden-xs"></div>
            <div class="col-md-4 col-xs-12">
                <div class="regist-form">
                    <form  method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                        <div class="form-group">
                             <label for="account">创建新账号</label><span class="regist-msg">已有账号<a href="#">登录</a></span>
                            <input type="text" class="form-control" id="account" placeholder="用户名"  value="<?php if(!empty($sanitized_user_login)) echo $sanitized_user_login; ?>" name="user_login" style="margin-top: 10px;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="account" placeholder="手机号码/邮箱"  name="user_email"  style="margin-top: 10px;">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="密码"   name="user_pass" style="margin-top: 10px;">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="确认密码" name="user_pass2" style="margin-top: 10px;">
                        </div>
                        <div class="form-group">
                             <label for="account">创建新账号</label><span class="regist-msg">已有账号<a href="#">登录</a></span>
                            <input type="text" class="form-control" id="account" placeholder="用户名"  value="<?php if(!empty($sanitized_user_login)) echo $sanitized_user_login; ?>" name="user_login" style="margin-top: 10px;">
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="验证码">
                            <span class="input-group-addon" >获取验证码</span>
                        </div>
                        <div class="checkbox">
                            <label>
                                    <input type="checkbox">我同意<a href="#">《用户协议》</a>
                            </label>
                        </div>
                          <input type="hidden" name="ludou_reg" value="ok" />
                        <button type="submit" class="btn btn-regist">登录</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 hidden-xs">
            </div>
        </div>
    </div>
        <?php wp_footer(); ?>
</body>
<?php wp_enqueue_scripts('jquery-js'); ?>
<?php wp_enqueue_scripts('bootstrap-js'); ?>

</html>

<!--
<form name="registerform" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="ludou-reg">
    <p>
      <label for="user_login">用户名<br />
        <input type="text" name="user_login" tabindex="1" id="user_login" class="input" value="<?php if(!empty($sanitized_user_login)) echo $sanitized_user_login; ?>" />
      </label>
    </p>

    <p>
      <label for="user_email">电子邮件<br />
        <input type="text" name="user_email" tabindex="2" id="user_email" class="input" value="<?php if(!empty($user_email)) echo $user_email; ?>" size="25" />
      </label>
    </p>
   
    <p>
      <label for="user_pwd1">密码(至少6位)<br />
        <input id="user_pwd1" class="input" tabindex="3" type="password" tabindex="21" size="25" value="" name="user_pass" />
      </label>
    </p>
   
    <p>
      <label for="user_pwd2">重复密码<br />
        <input id="user_pwd2" class="input" tabindex="4" type="password" tabindex="21" size="25" value="" name="user_pass2" />
      </label>
    </p>
   
    <p class="submit">
      <input type="hidden" name="ludou_reg" value="ok" />
      <button class="button button-primary button-large" type="submit">注册</button>
    </p>
</form>
-->
<?php } else {
 echo '<p class="ludou-error">您已注册成功，并已登录！</p>';
} ?>