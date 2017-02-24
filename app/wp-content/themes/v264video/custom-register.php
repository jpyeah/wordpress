<?php     
/* 
*Template Name: 注册模版
*/     
?>

<?php   
require_once(ABSPATH . WPINC . '/registration.php'); //registration.php文件   
global $wpdb, $user_ID; //glocal全局变量   
if (!$user_ID) { //如果存在$user_ID变量，则用户已经登录   
   
		    //接下来的代码都添加在这里. 
		    if($_POST){   
		    //验证数据是否全部为空格   
		    $username = $wpdb->escape($_REQUEST['username']);   
		    if(empty($username)) {   
		        echo "用户名不能为空.";   
		        exit();   
		    }   
		    $email = $wpdb->escape($_REQUEST['email']);   
		    //验证邮箱格式   
		    if( !is_email($email) ) {   
		        echo "请输入有效的邮箱地址.";   
		        exit();   
		    }   
		       
		    //生成密码   
		    $random_password = wp_generate_password( 12, false );   
		    //创建用户   
		    $status = wp_create_user( $username, $random_password, $email );     
		    if ( is_wp_error($status) ) {   
		       echo $status->get_error_message();//输出错误信息  
		    }else{   
		        $from = get_option('admin_email');   
		        $headers = 'From: '.$from . "\r\n";   
		        $subject = "注册成功";   
		        $msg = "注册成功.\n你的登陆信息\n用户名: $username\n密码: $random_password";   
		        //发送邮件   
		        wp_mail( $email, $subject, $msg, $headers );   
		        echo "请检查你电子邮件中的登陆信息。";   
		    }   
		       
		    exit();   
		}else{   
		    get_header(); //加载头部问及爱你   
?>   
		    <!-- <script src="http://code.jquery.com/jquery-1.4.4.js"></script> --> <!-- 如果你的主题没有引入了jquery，请自己引入 -->   
		    <div id="container">   
		    <div id="content">   
<?php   
//将注册表单和ajax代码添加到这里   
		    
//get_option('users_can_register')获取是否允许注册   
if(get_option('users_can_register')) {   
?>   
						<body>
						    <nav>
						        <div class="container-fluid login-header">
						            <div class="row">
						                <div class="col-md-3 hidden-xs"></div>
						                <div class="col-md-6 col-xs-12">
						                    <div class="login-nav">
						                        <img class="img-responsive" src="images/icon/login.png" alt="">
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
						                    <form>
						                        <div class="form-group">
						                            <label for="account">创建新账号</label><span class="regist-msg">已有账号<a href="#">登录</a></span>
						                            <input type="text" class="form-control" id="account" placeholder="手机号码/邮箱" style="margin-top: 10px;">
						                        </div>
						                        <div class="form-group">
						                            <input type="password" class="form-control" id="password" placeholder="密码" style="margin-top: 10px;">
						                        </div>
						                        <div class="form-group">
						                            <input type="password" class="form-control" id="password" placeholder="确认密码" style="margin-top: 10px;">
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
						                        <button type="submit" class="btn btn-regist">登录</button>
						                    </form>
						                </div>
						            </div>
						            <div class="col-md-4 hidden-xs">
						            </div>
						        </div>
						    </div>
						</body>
<?php   
						}else{   
						    echo "对不起暂时不开放注册，请以后再试.";   
						}  

?>   
  
 <?php   
		        get_footer(); //加载底部文件   
		   }             
}else{   
   wp_redirect( home_url() ); exit; //如果已经登录，重定向到站点首页   
}   
?> 
