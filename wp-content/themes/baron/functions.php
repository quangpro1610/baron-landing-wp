<?php 
define('BARON_INCLUDES_PATH'    ,get_template_directory() . '/includes');

require_once BARON_INCLUDES_PATH . '/codestar-framework/cs-framework.php';

//URL
define('BARON_THEME_TEXTDOMAIN'        ,'thebaron');
define('BARON_ASSETS_URL'              ,get_template_directory_uri() . '/assets');
define('BARON_CSS_URL'                 ,BARON_ASSETS_URL . '/css');
define('BARON_JS_URL'                  ,BARON_ASSETS_URL . '/js');
define('BARON_IMAGES_URL'              ,BARON_ASSETS_URL . '/img');


//set up assets.
add_action( 'wp_enqueue_scripts', 'baron_theme_setup_assets' );
function baron_theme_setup_assets(){
	//css
    wp_enqueue_style( 'default-style'           ,get_stylesheet_uri(), array(), null);
    wp_enqueue_style( 'Roboto'               	,'https://fonts.googleapis.com/css?family=Roboto:300,500', array(), null);
    wp_enqueue_style( 'bootstrap'               ,'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), null);
    wp_enqueue_style( 'animate'                 ,'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array(), null);
    wp_enqueue_style( 'fullpage-style'           ,BARON_CSS_URL . '/fullpage.css', array(), null);
    wp_enqueue_style( 'main-style'              ,BARON_CSS_URL . '/style.css', array(), null);
    //js
    wp_enqueue_script( 'jquery_core'             	,'https://code.jquery.com/jquery-1.12.4.min.js', array(), null, true);
    wp_enqueue_script( 'popper-js'              ,'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery_core'), null, true);
    wp_enqueue_script( 'bootstrap-js'            ,'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery_core'), null, true);
   	wp_enqueue_script( 'easing-js'            ,BARON_JS_URL . '/jquery.easing.min.js', array('jquery_core'), null, true);
    wp_enqueue_script( 'wow-js'            ,BARON_JS_URL . '/wow.min.js', array('jquery_core'), null, true);
    wp_enqueue_script( 'fullpage-js'       		,BARON_JS_URL . '/fullpage.js', array('jquery_core'), null, true);
    //wp_enqueue_script( 'main-js'            ,BARON_JS_URL . '/main.js', array('jquery'), null, true);
    wp_enqueue_script( 'main-js'            ,BARON_JS_URL . '/main-1.js', array('jquery_core'), null, true);
}
//other setup.
add_action( 'after_setup_theme', 'baron_setup' );
function baron_setup(){
	show_admin_bar(true);
	add_theme_support( 'post-thumbnails' );
    // Custom image size
	add_image_size('properties-thumbnail', 540, 280, true);
    // Register navigation menus.
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu (header)', BARON_THEME_TEXTDOMAIN),
		'mobile'   => __( 'Mobile Menu (header)', BARON_THEME_TEXTDOMAIN),
	) );

	$defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
//allow upload svg file
add_filter('upload_mimes', 'baron_allow_upload_svg');
function baron_allow_upload_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
//add widget.
add_action( 'widgets_init', 'baron_widgets_init' );
function baron_widgets_init() {
	// Standard sidebar.
	register_sidebar( array(
		'name'          => __( 'Sidebar', BARON_THEME_TEXTDOMAIN ),
		'id'            => 'widget-area-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	// Footer copyright.
	register_sidebar( array(
		'name'          => __( 'Footer Copyright ', BARON_THEME_TEXTDOMAIN),
		'id'            => 'widget-area-footer-copyright',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title">',
		'after_title'   => '</h4>',
	) );
}
//shortcode for theme.
add_filter( 'the_content', 'shortcode_unautop');
add_filter( 'the_content', 'do_shortcode');
add_filter( 'cs_framework_settings', 'extra_cs_framework_settings' );
function extra_cs_framework_settings( $settings ) {
	$settings = array();
	$settings           = array(
		'menu_title'      => 'Theme Options',
		'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
		'menu_slug'       => 'theme-options',
		'ajax_save'       => false,
		'show_reset_all'  => false,
		'framework_title' => 'Theme Options',
	);
 	return $settings;
}


//add_filter( 'manage_posts_columns',  'myquang_add_new_columns' );
function myquang_add_new_columns($columns) {
  $post_type = get_post_type();
  if ( $post_type == 'post' ) {
    $new_columns = array(
      'post_status' => esc_html__( 'Status', BARON_THEME_TEXTDOMAIN),
    );
    return array_merge($columns, $new_columns);
  }
}

//add_action( 'manage_posts_custom_column', 'myquang_posts_custom_columns', 5, 2 );
function myquang_posts_custom_columns( $column_name, $id ) {
  if ( 'post_status' === $column_name ) {
    echo ucfirst(get_post_status($id));
  }
}