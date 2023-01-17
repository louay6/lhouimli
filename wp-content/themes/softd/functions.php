<?php
/**
 * softd functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softd
 */


if ( ! function_exists( 'softd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function softd_setup() {

	load_theme_textdomain( 'softd', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'audio' ) );
	add_image_size( 'softd-blog-default', 390, 350, true );
	add_image_size( '270_168_default', 270, 168, true );
	add_image_size( 'blog_570_250_default', 570, 250, true );
	add_image_size( 'softd-blog6-default', 390, 250, true );
	add_image_size( 'softd-blog-default2', 370, 430, true );
	add_image_size( 'softd-blog-default8', 370, 440, true );
	add_image_size( 'softd-event-default', 420, 350, true );
	add_image_size( 'softd-event-370-450', 370, 450, true );
	add_image_size( 'softd-blog-single', 900, 550, true );
	add_image_size( 'softd-event-single', 770, 450, true );
	add_image_size( 'softd-blog-both', 570, 350, true );
	add_image_size( 'softd-team', 450, 450, true );
	add_image_size( 'softd-testimonial', 106, 106, true );
	add_image_size( 'softd-single-portfolio', 1170, 600, true );
	add_image_size( 'softd-gallery-thumb', 560, 560, true );
	add_image_size( 'softd_recent_image', 70, 70, true );
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );						
	add_theme_support( 'post-thumbnails' );
	add_editor_style();

	register_nav_menus( array(
		'menu-top' => esc_html__( 'Top Menu', 'softd' ),
		'menu-1' => esc_html__( 'Main Menu', 'softd' ),
		'one-pages' => esc_html__( 'One Page Menu', 'softd' ),		
		'menu-2' => esc_html__( 'Footer Menu', 'softd' ),
		'menu-3' => esc_html__( 'Mobile Menu', 'softd' ),
	) );
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'softd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'softd_setup' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
*visual composer 
*/

// load redux
if ( class_exists('ReduxFrameworkPlugin') ) {
	require get_template_directory(). '/includes/softd-option-framework.php';
}
require get_template_directory(). '/includes/softd-global-function.php';
require get_template_directory(). '/includes/softd-breadcrumb.php';
require get_template_directory(). '/includes/softd-tgm-activation.php';
require get_template_directory(). '/includes/demo/txbd-click-import.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function softd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'softd_content_width', 1140 );
}
add_action( 'after_setup_theme', 'softd_content_width', 0 );

/**
 *Register Fonts
*/
if(!function_exists('softd_fonts_url')){
	
	function softd_fonts_url(){
	 $fonts_url = '';
	 
	 /* Translators: If there are characters in your language that are not
	 * supported by Roboto, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	 $softd_font1 = _x( 'on', 'Mulish font: on or off', 'softd' );
	 $softd_font2 = _x( 'on', 'Mulish font: on or off', 'softd' );
	 
	 if ( 'off' !== $softd_font1 ) {
	 $font_families = array();
	 }
	 
	 if ( 'off' !== $softd_font1 ) {
	 $font_families[] = 'Mulish: 200,300,400,500,600,700,800,900';
	 }
	 
	 if ( 'off' !== $softd_font2 ) {
	 $font_families[] = 'Mulish: 200,300,400,500,600,700,800,900';
	 }

	if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		), 'https://fonts.googleapis.com/css' );
	}
	 
	 
	 
	 return esc_url_raw( $fonts_url ); 
	}
	
}



// load style
if(!function_exists('softd_styles')){
	
	function softd_styles(){
		
		wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
		wp_enqueue_style( 'softd-fonts', softd_fonts_url(), array() );		
		wp_enqueue_style('venobox', get_template_directory_uri() .'/venobox/venobox.css');
		wp_enqueue_style('swipercss', get_template_directory_uri() .'/assets/css/txbd-swiper-bundle.min.css');
		wp_enqueue_script( 'modernizrs', get_template_directory_uri() . '/assets/js/modernizr.custom.79639.js', array('jquery'), '3.2.4', true );
		wp_enqueue_style('slick-theme-css', get_template_directory_uri() .'/assets/css/slitheme.css');		
		wp_enqueue_style('softd-plugin-style', get_template_directory_uri() .'/assets/css/plugin_theme_css.css');
		wp_enqueue_style('edupit-main-style', get_template_directory_uri() .'/assets/css/style.css',array('slick-theme-css'));		
		wp_enqueue_style( 'softd-style', get_stylesheet_uri() );	
		wp_enqueue_style('softd-responsive', get_template_directory_uri() .'/assets/css/responsive.css');	
	}
	
}

add_action( 'wp_enqueue_scripts', 'softd_styles' );


 // Load scripts.
if(!function_exists('softd_scripts')){
	
	function softd_scripts() {
		
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), '2.8.3', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
		wp_enqueue_script( 'imagesloaded');
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.pack.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'venobox', get_template_directory_uri() . '/venobox/venobox.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-knob', get_template_directory_uri() . '/assets/js/jquery.knob.js', array('jquery'), '3.2.4', true );		
		wp_enqueue_script( 'BeerSlider', get_template_directory_uri() . '/assets/js/BeerSlider.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/js/txbd-swiper-bundle.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'theme-plugin', get_template_directory_uri() . '/assets/js/theme-pluginjs.js', array('jquery'), '3.2.4', true );		
		wp_enqueue_script( 'softd-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
		wp_enqueue_script( 'softd-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
		wp_enqueue_script( 'softd-theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '3.2.4', true );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'softd_scripts' );

/**
 * softd widget js
 */
 if(!function_exists('softd_media_scripts')){
	 
	function softd_media_scripts() {
		wp_enqueue_media();
		wp_enqueue_script('softd-uploader', get_template_directory_uri() .'/assets/js/softd_uploader.js', false, '', true );
	}
 }
add_action('admin_enqueue_scripts', 'softd_media_scripts');



// Content word count
if(!function_exists('softd_read_more')){
		
	function softd_read_more($limit){
		$content = explode(' ', get_the_content());
		$count   = array_slice($content, 0 , $limit);
		echo implode (' ', $count);
	}
}

// Title word count
if(!function_exists('the_title')){
	
	function the_title($limit){
		$title = explode(' ' , get_the_title());
		$titles = array_slice($title , 0, $limit);
		echo implode(' ', $titles);
	}
	
}



/**
 * Register widget area.
 */
if(!function_exists('softd_widgets_init')){
	
	function softd_widgets_init() {
				
		register_sidebar( array(
			'name'          => esc_html__( 'Blog Left Sidebar', 'softd' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'softd' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Blog Right Sidebar', 'softd' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'softd' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Page Left Sidebar', 'softd' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'softd' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Page Right Sidebar', 'softd' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'softd' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Shop Left Sidebar', 'softd' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'softd' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Popup Menu Sidebar', 'softd' ),
			'id'            => 'sidebar-pop',
			'description'   => esc_html__( 'Add widgets here.', 'softd' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );		
		/**
		 * Register Footer Sidebars
		 */
		for( $footer = 1; $footer < 5; $footer++ ) {
			register_sidebar( array(
				'id'		=> 'softd-footer-' . $footer,
				'name'		=> esc_html__( 'Footer ', 'softd' ) . $footer,
				'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<h2 class="widget-title">',
				'after_title'	=> '</h2>',
			) );
		} // for footers		
		
		
	}
		
}
add_action( 'widgets_init', 'softd_widgets_init' );
	

/*Disables the block editor from managing widgets in the Gutenberg plugin.*/
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
/* Disables the block editor from managing widgets.*/
add_filter( 'use_widgets_block_editor', '__return_false' );










