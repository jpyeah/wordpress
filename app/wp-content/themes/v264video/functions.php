<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function v264video_scripts() {

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/styl/Style.css', array(), '' );
	wp_enqueue_style( 'home', get_template_directory_uri() . '/styl/home.css', array(), '' );

	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), '', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.js', array('jquery-js'), '', true );
	wp_enqueue_script( 'hammer-js', get_template_directory_uri() . '/js/hammer.min.js', array(), '', true );
	wp_enqueue_script( 'jquery-hammer', get_template_directory_uri() . '/js/jquery.hammer.js', array(), '', true );

	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-1.4.2.min.js', array(), '1.4.2', true );
	wp_enqueue_script( 'roundabout', get_template_directory_uri() . '/js/roundabout.js', array(), '', true );
	wp_enqueue_script( 'roundabout_shapes', get_template_directory_uri() . '/js/roundabout_shapes.js', array(), '', true );
	wp_enqueue_script( 'gallery_init', get_template_directory_uri() . '/js/gallery_init.js', array(), '', true );
	
	wp_enqueue_script( 'gallery_init', get_template_directory_uri() . '/js/gallery_init.js', array(), '', true );

	wp_enqueue_script( 'index-js', get_template_directory_uri() . '/js/index.js', array(), '', true );
	wp_enqueue_script( 'noconflict', get_template_directory_uri() . '/js/noconflict.js', array(), '', true );


}
add_action( 'wp_enqueue_scripts', 'v264video_scripts' );


add_action('init', 'fanly_change_role_name');
function fanly_change_role_name() {
	global $wp_roles;
	if ( ! isset( $wp_roles ) )$wp_roles = new WP_Roles();
	$wp_roles->roles['subscriber']['name'] = '个人';
	$wp_roles->role_names['subscriber'] = '个人';
}

//WordPress添加用户角色
add_role('team', '团队', array(
    'read' => true, //阅读权限，true表示允许
    'edit_posts' => true,//编辑文章的权限，true为允许
    'delete_posts' => false, //删除文章的权限，false表示不允许删除
));

//WordPress删除用户角色
remove_role( 'contributor' );//投稿者
//remove_role( 'subscriber' );//订阅者
remove_role( 'author' );//作者
remove_role( 'editor' );//编辑

?>