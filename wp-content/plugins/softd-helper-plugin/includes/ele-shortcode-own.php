<?php
//define
define( 'WITR_URL', plugins_url() );
define( 'WITR_DIR', dirname( __FILE__ ) );
 
 require_once WITR_DIR.'/elementor/post-type.php';

//Elementor Addons File
function witr_theme_addons(){
	
    require_once WITR_DIR.'/elementor/witr_section_title.php';
    require_once WITR_DIR.'/elementor/witr_animate_text.php';
    require_once WITR_DIR.'/elementor/witr_about.php';
    require_once WITR_DIR.'/elementor/witr_accordion.php';	
    require_once WITR_DIR.'/elementor/witr_apps_button.php';
    require_once WITR_DIR.'/elementor/witr_apartment.php'; 	
    require_once WITR_DIR.'/elementor/witr_nivo_slider.php';
    require_once WITR_DIR.'/elementor/witr_slick_slider.php';
    require_once WITR_DIR.'/elementor/witr_slick_slider2.php';
    require_once WITR_DIR.'/elementor/witr_swiper_slider.php';
    require_once WITR_DIR.'/elementor/witr_animate_slider.php';
	require_once WITR_DIR.'/elementor/witr_banner_slider.php';
	require_once WITR_DIR.'/elementor/witr_banner_slider2.php';
    require_once WITR_DIR.'/elementor/witr_blog.php';
    require_once WITR_DIR.'/elementor/witr_button.php';	
    require_once WITR_DIR.'/elementor/witr_button_classic.php';	
    require_once WITR_DIR.'/elementor/witr_text_widgets.php';	
    require_once WITR_DIR.'/elementor/witr_counter.php';
    require_once WITR_DIR.'/elementor/witr_conudowntime.php';
    require_once WITR_DIR.'/elementor/witr_carousel_image.php';		
    require_once WITR_DIR.'/elementor/witr_carousel_imagetext.php';
    require_once WITR_DIR.'/elementor/witr_call_to_action.php';
    require_once WITR_DIR.'/elementor/witr_creative_tab.php';
    require_once WITR_DIR.'/elementor/witr_case.php';
    require_once WITR_DIR.'/elementor/witr_causes.php';	
    require_once WITR_DIR.'/elementor/witr_image_comparison.php';			
    require_once WITR_DIR.'/elementor/witr_event.php';		
    require_once WITR_DIR.'/elementor/witr_feature.php';
    require_once WITR_DIR.'/elementor/witr_feature2.php';	
    require_once WITR_DIR.'/elementor/witr_feature_carousel.php';	
    require_once WITR_DIR.'/elementor/witr_footer_widgets.php';
    require_once WITR_DIR.'/elementor/witr_social_icons.php';
    require_once WITR_DIR.'/elementor/witr_custom_icons.php';
    require_once WITR_DIR.'/elementor/witr_social_feed.php';
    require_once WITR_DIR.'/elementor/witr_list.php';	
    require_once WITR_DIR.'/elementor/witr_modal.php';	
    require_once WITR_DIR.'/elementor/witr_portfolio.php';
    require_once WITR_DIR.'/elementor/witr_port_slide.php';
    require_once WITR_DIR.'/elementor/witr_pricing.php';
    require_once WITR_DIR.'/elementor/witr_process.php';	
    require_once WITR_DIR.'/elementor/witr_post_tab.php';
    require_once WITR_DIR.'/elementor/witr_static_tab.php';	
    require_once WITR_DIR.'/elementor/witr_progress.php';
    require_once WITR_DIR.'/elementor/witr_circle_progress.php';
    require_once WITR_DIR.'/elementor/witr_service.php';
    require_once WITR_DIR.'/elementor/witr_service2.php';	
    require_once WITR_DIR.'/elementor/witr_post_service.php';	
    require_once WITR_DIR.'/elementor/witr_marquee_notice.php';	
    require_once WITR_DIR.'/elementor/witr_single_image.php';
    require_once WITR_DIR.'/elementor/witr_screenshorts.php';
    require_once WITR_DIR.'/elementor/witr_shape.php';
    require_once WITR_DIR.'/elementor/witr_show_detail.php';
    require_once WITR_DIR.'/elementor/witr_team.php';
    require_once WITR_DIR.'/elementor/witr_post_team.php';
    require_once WITR_DIR.'/elementor/witr_timeline.php';
    require_once WITR_DIR.'/elementor/witr_post_testimonial.php';	
    require_once WITR_DIR.'/elementor/witr_testimonial.php';		
    require_once WITR_DIR.'/elementor/witr_video.php';  
 
 

 	

}
add_action('elementor/widgets/widgets_registered','witr_theme_addons');


/*  BLOG SOCIAL SHARING LINKS  */

if ( ! function_exists('softd_blog_sharing') ) {
 function softd_blog_sharing( ) {
  global $post;

		$html = '<div class="softd-single-icon-inner">';

		// facebook
		$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u='. get_the_permalink();
		$html .= '<a href="'. esc_url( $facebook_url ) .'" ><i class="fa fa-facebook"></i></a>';

		// twitter
		$twitter_url = 'https://twitter.com/share?'. esc_url(get_permalink()) .'&amp;text='. get_the_title();
		$html .= '<a href="'. esc_url( $twitter_url ) .'" ><i class="fa fa-twitter"></i></a>';

		// google plus
		$google_plus_url = 'https://plus.google.com/share?url='. esc_url(get_permalink());
		$html .= '<a href="'. esc_url( $google_plus_url ) .'" ><i class="fa fa-google-plus"></i></a>';

		// linkedin
		$linkedin_url = 'http://www.linkedin.com/shareArticle?url='. esc_url(get_permalink()) .'&amp;title='. get_the_title();
		$html .= '<a href="'. esc_url( $linkedin_url ) .'" ><i class="fa fa-linkedin"></i></a>';

		// pinterest
		$pinterest_url = 'https://pinterest.com/pin/create/bookmarklet/?url='. esc_url(get_permalink()) .'&amp;description='. get_the_title() .'&amp;media='. esc_url(wp_get_attachment_url( get_post_thumbnail_id($post->ID)) );
		$html .= '<a href="'. esc_url( $pinterest_url ) .'" ><i class="fa fa-pinterest"></i></a>';

		// reddit
		$reddit_url = 'http://reddit.com/submit?url='. esc_url(get_permalink()) .'&amp;title='. get_the_title();
		$html .= '<a href="'. esc_url( $reddit_url ) .'" ><i class="fa fa-reddit"></i></a>';

		$html .= '</div>';

  echo ''. $html;
 }
}
