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
	wp_enqueue_script( 'movie-js', get_template_directory_uri() . '/js/movie.js', array(), '', true );


}
add_action( 'wp_enqueue_scripts', 'v264video_scripts' );



add_filter('the_content','make_clickable');
add_filter( 'show_admin_bar', '__return_false' );

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

function v264video_post_movie() {
 $labels = array(
    'name'               => _x( 'Movies', 'post type 名称' ),
    'singular_name'      => _x( 'Movie', 'post type 单个 item 时的名称，因为英文有复数' ),
    'add_new'            => _x( '新建影片', '添加新内容的链接名称' ),
    'add_new_item'       => __( '新建一个影片' ),
    'edit_item'          => __( '编辑影片' ),
    'new_item'           => __( '新影片' ),
    'all_items'          => __( '所有影片' ),
    'view_item'          => __( '查看影片' ),
    'search_items'       => __( '搜索影片' ),
    'not_found'          => __( '没有找到有关影片' ),
    'not_found_in_trash' => __( '回收站里面没有相关影片' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Movies'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => '我们网站的影片信息',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true
  );
  register_post_type( 'movie', $args );
}
add_action( 'init', 'v264video_post_movie' );


function v264video_taxonomies_movie() {
  $labels = array(
    'name'              => _x( '影片分类', 'taxonomy 名称' ),
    'singular_name'     => _x( '影片分类', 'taxonomy 单数名称' ),
    'search_items'      => __( '搜索影片分类' ),
    'all_items'         => __( '所有影片分类' ),
    'parent_item'       => __( '该影片分类的上级分类' ),
    'parent_item_colon' => __( '该影片分类的上级分类：' ),
    'edit_item'         => __( '编辑影片分类' ),
    'update_item'       => __( '更新影片分类' ),
    'add_new_item'      => __( '添加新的影片分类' ),
    'new_item_name'     => __( '新影片分类' ),
    'menu_name'         => __( '影片分类' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'movie_category', 'movie', $args );
}
add_action( 'init', 'v264video_taxonomies_movie', 0 );

add_action( 'add_meta_boxes', 'movie_director' );
function movie_director() {
    add_meta_box(
        'movie_director',
        'director',
        'movie_director_meta_box',
        'movie',
        'side',
        'low'
    );
}

function movie_director_meta_box($post) {

    // 创建临时隐藏表单，为了安全
    wp_nonce_field( 'movie_director_meta_box', 'movie_director_meta_box_nonce' );
    // 获取之前存储的值
    $value = get_post_meta( $post->ID, '_movie_director', true );

    ?>

    <label for="movie_director"></label>
    <input type="text" id="movie_director" name="movie_director" value="<?php echo esc_attr( $value ); ?>" placeholder="输入导演名称" >

    <?php
}

add_action( 'save_post', 'movie_director_save_meta_box' );
function movie_director_save_meta_box($post_id){

    // 安全检查
    // 检查是否发送了一次性隐藏表单内容（判断是否为第三者模拟提交）
    if ( ! isset( $_POST['movie_director_meta_box_nonce'] ) ) {
        return;
    }
    // 判断隐藏表单的值与之前是否相同
    if ( ! wp_verify_nonce( $_POST['movie_director_meta_box_nonce'], 'movie_director_meta_box' ) ) {
        return;
    }
    // 判断该用户是否有权限
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // 判断 Meta Box 是否为空
    if ( ! isset( $_POST['movie_director'] ) ) {
        return;
    }

    $movie_director = sanitize_text_field( $_POST['movie_director'] );
    update_post_meta( $post_id, '_movie_director', $movie_director );

}

add_action("manage_posts_custom_column",  "movie_custom_columns");
add_filter("manage_edit-movie_columns", "movie_edit_columns");
function movie_custom_columns($column){
    global $post;
    switch ($column) {
        case "movie_director":
            echo get_post_meta( $post->ID, '_movie_director', true );
            break;
    }
}
function movie_edit_columns($columns){

    $columns['movie_director'] = '导演';

    return $columns;
}

?>