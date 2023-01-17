<?php
// theme fallback menu
if(!function_exists('softd_fallback_menu')){
	
	function softd_fallback_menu(){?>

		<ul class="main-menu clearfix">
			<li><a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php esc_html_e('Create Menu','softd'); ?></a></li>
		</ul>	
	<?php }			
}

// theme main menu
if(!function_exists('softd_main_menu')){
	
	function softd_main_menu(){
		wp_nav_menu(array(
			 'theme_location' =>'menu-1',
			 'container'      => false,
			 'menu_class' =>'sub-menu',
			 'fallback_cb' =>'softd_fallback_menu',									
		));
	}
}


// theme main menu
if(!function_exists('softd_one_page_menu')){
	
	function softd_one_page_menu(){
		wp_nav_menu(array(
			 'theme_location' =>'one-pages',
			 'container'      => false,
			 'menu_class' =>'sub-menu nav_scroll',
			 'fallback_cb' =>'softd_fallback_menu',									
		));
	}
}



// theme main menu
if(!function_exists('softd_mobile_menu')){
	
	function softd_mobile_menu(){
		wp_nav_menu(array(
			 'theme_location' =>'menu-3',
			 'container'      => false,
			 'menu_class' =>'main-menu clearfix',
			 'fallback_cb' =>'softd_fallback_menu',									
		));
	}
}

// theme logo 1 setting 
if(!function_exists('softd_main_logo')){				
	function softd_main_logo(){
	 global $softd_opt;
	 if(is_ssl()){
	  $softd_opt['softd_logo']['url'] = str_replace('http:', 'https:', $softd_opt['softd_logo']['url']);
	  $softd_opt['softd_ts_logo']['url'] = str_replace('http:', 'https:', $softd_opt['softd_ts_logo']['url']);
	 }
	 ?>

	  <?php if( isset($softd_opt['softd_logo']['url']) && ! empty($softd_opt['softd_logo']['url']) ){ ?>
	  
		<div class="logo">
			<a class="main_sticky_main_l" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($softd_opt['softd_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
			<a class="main_sticky_l" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($softd_opt['softd_ts_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
					
		
		</div>	  

	  <?php
	  
	  } else { ?>
	  
			<div class="logo_area">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><?php 
	  			$description = get_bloginfo( 'description', 'display' );
				$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>
			
			</div>	 					
	 
	<?php  }
	}
}


// theme logo 2 setting 
if(!function_exists('softd_onepage_logo')){				
	function softd_onepage_logo(){
	 global $softd_opt;
	 if(is_ssl()){
	  $softd_opt['softd_onepage_logo']['url'] = str_replace('http:', 'https:', $softd_opt['softd_onepage_logo']['url']);
	  $softd_opt['softd_ts_logo']['url'] = str_replace('http:', 'https:', $softd_opt['softd_ts_logo']['url']);
	 }
	 ?>

	  <?php if( isset($softd_opt['softd_onepage_logo']['url']) ){ ?>
	  
		<div class="logo">
			<a class="main_sticky_main_l"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($softd_opt['softd_onepage_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
			<a class="main_sticky_l" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($softd_opt['softd_ts_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>			
		</div>	  

	  <?php
		}
	}
}
// theme logo 3 setting 
if(!function_exists('softd_ts_logo')){				
	function softd_ts_logo(){
	 global $softd_opt;
	 if(is_ssl()){
	  $softd_opt['softd_ts_logo']['url'] = str_replace('http:', 'https:', $softd_opt['softd_ts_logo']['url']);
	 }
	 ?>

	  <?php if( isset($softd_opt['softd_ts_logo']['url']) ){ ?>
	  
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($softd_opt['softd_ts_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>		
		</div>	  

	  <?php
		}
	}
}
// theme logo 4 for mobile 
if(!function_exists('softd_mobile_top_logo')){				
	function softd_mobile_top_logo(){
	 global $softd_opt;
	 if(is_ssl()){
	  $softd_opt['softd_mobile_top_logo']['url'] = str_replace('http:', 'https:', $softd_opt['softd_mobile_top_logo']['url']);
	 }
	 ?>

	  <?php if( isset($softd_opt['softd_mobile_top_logo']['url']) ){ ?>
		<div class="mobile_menu_logo text-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<img src="<?php echo esc_url($softd_opt['softd_mobile_top_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
			</a>		
		</div>
	  <?php
		}
	}
}



/* login option */
if(!function_exists('softd_login')){
	function softd_login(){
		if (is_user_logged_in()) {?>
		
				<a href="<?php echo esc_url(wp_logout_url(get_permalink()));?>"><i class="fas fa-user"></i> <?php esc_html_e('Logout','softd');?></a>
			
			<?php }else{?>
			
				<a href="<?php echo esc_url(wp_login_url( get_permalink() ));?>"><i class="fas fa-user"></i> <?php esc_html_e('Login','softd');?></a>
				<a href="<?php echo esc_url(wp_registration_url(get_permalink()));?>"><i class="fas fa-key"></i> <?php esc_html_e('Register','softd');?></a>

		<?php }		

	}
}
if(!function_exists('softd_search_code')){
	function softd_search_code(){
		?>
			<div class="em-quearys-top msin-menu-search">
				<div class="em-top-quearys-area">
				   <div class="em-header-quearys">
						<div class="em-quearys-menu">
							<i class="fa fa-search t-quearys"></i>
						</div>
					</div>
					<!--SEARCH FORM-->
					<div class="em-quearys-inner">
						<div class="em-quearys-form">
							<form class="top-form-control" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
									<input type="text" placeholder="<?php echo esc_attr_e( 'Type Your Keyword', 'softd' ) ?>" name="s" value="<?php the_search_query(); ?>" />
								<button class="top-quearys-style" type="submit">
									<i class="fa fa-long-arrow-right"></i>
								</button>
							</form>

							<div class="em-header-quearys-close text-center mrt10">
								<div class="em-quearys-menu">
									 <i class="fa fa-close  t-close em-s-hidden "></i>
								</div>
							</div>											
						</div>
					</div>														
				</div>
			</div>				
	<?php
	}
}


if(!function_exists('softd_right_side_menu')){
	function softd_right_side_menu(){
		?>

		   <div class="right_popupmenu_area">
			   <div class="right_side_icon">
					<div class="right_sideber_menu">
						<i class="icofont-navigation-menu openclass"></i>
					</div>
				</div>
				<!--SEARCH FORM-->
				<div class="right_sideber_menu_inner">
					<div class="right_sideber_content">
						<div class="blog-left-side widget">
							<?php if ( is_active_sidebar( 'sidebar-pop' ) ) {
								dynamic_sidebar( 'sidebar-pop' );
							}?>
						</div>					
						<div class="right_side_icon right_close_class">
							<div class="right_sideber_menu">
								<i class="icofont-close-line-squared closeclass"></i>
							</div>
						</div>											
					</div>
				</div>													
			</div>													
						
	<?php
	}
}



//softd comment form
add_filter('comment_form_default_fields','softd_comments_form');
if(!function_exists('softd_comments_form')){
    function softd_comments_form($default){
			$default['author'] = '<div  class="comment_forms"><div  class="comment_forms_inner">
			
			<div class="comment_field"><div class="input-field">
				<label for="name">'.esc_html__('Name','softd').'<em>*</em></label>
				<input id="name" name="author" type="text" placeholder="'.esc_html__('Your Name','softd').'"/>
			</div>';

			$default['email'] = '
			<div class="input-field">
				<label for="email">'.esc_html__('E-mail Address','softd').'<em>*</em></label>
				<input id="email"  name="email" type="text" placeholder="'.esc_html__('Email Address','softd').'"/>
			</div>';	

			$default['title'] = '
			<div class="input-field">
				<label for="title">'.esc_html__('Website','softd').'<em>*</em></label>
				<input id="title" name="url" type="text" placeholder="'.esc_html__('Your Website','softd').'"/>
			</div> </div>';	
			$default['url']='';
			$default['message'] ='<div class="comment_field"><div class="textarea-field"><label for="comment">'.esc_html__('Comment','softd').'<em>*</em></label><textarea name="comment" id="comment" cols="30" rows="10" placeholder="'.esc_html__('Write your comment...','softd').'"></textarea></div></div>   </div></div>';																		

 
        return $default;
    }
}
add_filter('comment_form_defaults','softd_form_default');

 if(!function_exists('softd_form_default')){
    function softd_form_default($default_info){
        if(!is_user_logged_in()){
            $default_info['comment_field'] = '';
        }else{
            $default_info['comment_field'] = '<div  class="comment_forms"><div  class="comment_forms_inner"> <div class="comment_field"><div class="textarea-field"><label for="comment">'.esc_html__('Comment','softd').'<em>*</em></label><textarea name="comment" id="comment" cols="30" rows="10" placeholder="'.esc_html__('Write your comment...','softd').'"></textarea></div></div> </div></div>';
        }
         
        $default_info['submit_button'] = '<button class="softd_btn" type="submit">'.esc_html__('Post Comment','softd').'</button>';
        $default_info['submit_field'] = '%1$s %2$s';
        $default_info['comment_notes_before'] = ' ';
        $default_info['title_reply'] = esc_html__('leave a comment ','softd');
        $default_info['title_reply_before'] = '<div class="commment_title"><h3> ';
        $default_info['title_reply_after'] = '</h3></div> ';
 
        return $default_info;
    }
 
 }
	
	
//softd comment show
if(! function_exists('softd_comment')){
	function softd_comment($comment,$arg, $depth){
		$GLOBALS ['comment'] = $comment;
		?>

		<!-- connent reply -->		
		<div class="post_comment">
			<div class="comment_inner">
				<div class="post_replay">
					<div class="post_replay_content">											
						<div class="post_replay_inner" id="comment-<?php comment_ID(); ?>">
							<div class="post_reply_thumb">
								 <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php echo get_avatar($comment,80); ?></a>
							</div>
							<div class="post_reply">
								<div class="st"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_comment_author(); ?></a></div>
								<div class="reply_date">
									<span class="span_left"><?php echo get_comment_date(get_option('date_format')); ?></span>
									<?php 
										comment_reply_link(
											array_merge($arg,array(
												'reply_text' => '<span class="span_right">'. esc_html__('REPLY','softd').'</span>',
												'depth'    => $depth,
												'max_depth' => $arg['max_depth']
											))
									); ?>   
									
								</div>
								<p><?php comment_text(); ?></p>
								<div class="edit_comment"><?php edit_comment_link(esc_html__('(Edit)' , 'softd' ),'<small class="ecome">','</small>') ?></div>
							</div>
							
						</div>
					</div>																
				</div>
			</div>
		</div>		
	
		<?php
	}
}



/**
 * Add color styling from theme
 */
 
 if( !function_exists( 'softd_inline_styles' ) ) {
function softd_inline_styles() {
	 global $softd_opt;
	 $lheight=$logoheight=$lwidth=$logoweight=$linheight=$lmtop=$mobile_image=$mobile_image_sec='';
	
		if (!empty($softd_opt['softd_logo_height'])){
			$lheight=$softd_opt['softd_logo_height'];
			$logoheight="height:{$lheight}";
		}
		if (!empty($softd_opt['softd_logo_widget'])){
			$lwidth=$softd_opt['softd_logo_widget'];
			$logoweight="width:{$lwidth}";
		}
		if (!empty($softd_opt['softd_line_height'])){
			$linheight=$softd_opt['softd_line_height'];
			$lmtop="margin-top:{$linheight}";
		}
		if (!empty($softd_opt['softd_mobile_image_logo'])){
			$mobile_image=$softd_opt['softd_mobile_image_logo'];
			$mobile_image_sec="content:{$mobile_image}";
		}		
		
			 
		wp_enqueue_style(
			'softd-breadcrumb',
			get_template_directory_uri() . '/assets/css/em-breadcrumb.css'
		);			
        $inlinewp_css = "
					.logo img {
						{$logoheight};
						{$logoweight};
					}
					.logo a{
						{$lmtop}
					}
					.mean-container .mean-bar::before{
						{$mobile_image_sec}						
					}											
               ";				
				
        wp_add_inline_style( 'softd-breadcrumb', $inlinewp_css );
	}
}
add_action( 'wp_enqueue_scripts', 'softd_inline_styles',200 );


/**
* Print pagination
*
* @param    array           $args           Arguments for this function, including 'query', 'range'
* @param    string         $wrapper        Type of html wrapper
* @param    string         $wrapper_class  Class of HTML wrapper
* @echo     string                          Post Meta HTML
*/
if( !function_exists( 'softd_pagination' ) ) {
	function softd_pagination( $args = NULL , $wrapper = 'div', $wrapper_class = 'paginations' ) {

		// Set up some globals
		global $wp_query, $paged;

		// Get the current page
		if( empty($paged ) ) $paged = ( get_query_var('page') ? get_query_var('page') : 1 );

		// Set a large number for the 'base' argument
		$big = 99999;

		// Get the correct post query
		if( !isset( $args[ 'query' ] ) ){
			$use_query = $wp_query;
		} else {
			$use_query = $args[ 'query' ];
		} ?>

		<<?php echo esc_html($wrapper); ?> class="<?php echo esc_html($wrapper_class); ?>">
			<?php echo paginate_links( array(
				'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
				'prev_next' => true,
				'mid_size' => ( isset( $args[ 'range' ] ) ? $args[ 'range' ] : 5 ) ,
				'prev_text' => '<i class="fas fa-long-arrow-alt-left"></i>',
				'next_text' => '<i class="fas fa-long-arrow-alt-right"></i>',				
				'type' => 'list',
				'current' => $paged,
				'total' => $use_query->max_num_pages
			) ); ?>
		</<?php echo esc_html($wrapper); ?>>
	<?php }
} // softd_pagination


if( !function_exists( 'softd_slider_o' ) ) {
 function softd_slider_o( $file_list_meta_key, $img_size = 'full' ) {

  // Get the list of files
  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  // Loop through them and output an image
  foreach ( (array) $files as $attachment_id => $attachment_url ) {
			echo '<div class="gitem">';
			echo wp_get_attachment_image( $attachment_id, $img_size );
			echo '</div>';
		}
	}
}

if(class_exists( 'WooCommerce' )){
	remove_action( 'woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10 );
	remove_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close',5 );
	/* change your default oderby text */
	if(! function_exists('witr_customize_product_sorting')){
	add_filter('woocommerce_catalog_orderby', 'witr_customize_product_sorting');
		function witr_customize_product_sorting($witr_sorting_options){
			$witr_sorting_options = array(
				'menu_order' => esc_html__( 'Default Sort', 'softd' ),
				'popularity' => esc_html__( 'Top Sale', 'softd' ),
				'rating'     => esc_html__( 'Top Rating', 'softd' ),
				'date'       => esc_html__( 'New Product', 'softd' ),
				'price'      => esc_html__( 'Price: low to high', 'softd' ),
				'price-desc' => esc_html__( 'Price: high to low', 'softd' ),
			);

			return $witr_sorting_options;
		}
	}
	/* change your breadcrumb options */
	if(! function_exists('witr_customize_breadcrumbs')){
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',20 );	
	add_filter( 'woocommerce_breadcrumb_defaults', 'witr_customize_breadcrumbs' );
		function witr_customize_breadcrumbs($witr_bread_options) {  
			$witr_bread_options['delimiter'] = '<i class="fa fa-angle-right"></i>';
			$witr_bread_options['wrap_before'] = '<div class="breadcumb-inner witr_breadcumb_shop" itemprop="breadcrumb"><ul><li>';
			$witr_bread_options['wrap_after'] = '</li></ul></div>';
			return $witr_bread_options;       
		}
	}
	/* change your related options */
	if(! function_exists('witr_related_products_args')){
	add_filter( 'woocommerce_output_related_products_args', 'witr_related_products_args', 20 );
		function witr_related_products_args( $args ) {
			$args['posts_per_page'] = 20; 
			$args['columns'] = 12 .' '.'col-md-12'; 
			return $args;
		}
	}
	/* change your upsell options */
	if(! function_exists('witr_upsell_products_args')){
	add_filter( 'woocommerce_upsell_display_args', 'witr_upsell_products_args', 20 );
		function witr_upsell_products_args( $args ) {
			$args['posts_per_page'] = 12;
			$args['columns'] = 12;
			return $args;
		}
	}
	/* change your upsell options */
	if(! function_exists('witr_cross_sells_products_args')){
	add_filter( 'woocommerce_cross_sells_columns', 'witr_cross_sells_products_args', 20 );
		function witr_cross_sells_products_args( $columns ) {
			return 12 .' '.'col-md-12';
		}
	}
	/* change add to cart button text */
	if(! function_exists('softd_archive_custom_cart_button_text')){	
	add_filter('woocommerce_product_add_to_cart_text', 'softd_archive_custom_cart_button_text');
		function softd_archive_custom_cart_button_text(){
		global $softd_opt;
		$softd_add_text="";
			if (!empty($softd_opt['softd_woocommerce_button'])){
				$softd_add_text = $softd_opt['softd_woocommerce_button'];
			}else{
				$softd_add_text = esc_html__('Buy Now', 'softd');
			}
			return $softd_add_text;
		}
	}
	
	
} //end class	


