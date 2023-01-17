<?php
/*
* Plugin Name: Themex Helper Plugin
* Plugin URI: https://www.templatemonster.com/authors/themex/
* Description: This plugin is mandatory for softd theme.
* Version: 1.0
* Author: Md Azijul Islam
* Author URI: https://your_site.com/
*
* Text Domain: softd
* Domain Path: /languages/
*/


// Secure it
if ( ! defined( 'ABSPATH' ) ) exit;

// define constants 
define( 'WITR_EXTENSION_DIR' , trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'WITR_EXTENSION_URI' , trailingslashit( plugin_dir_url( __FILE__ ) ) );

//Elementor Custom Category
function witr_elementor_category ( $elements_manager ) {
    $elements_manager->add_category(
        'witr_tname',
        array(
            'title' => 'softd ADDONS LIST',
            'icon'  => 'fonts',
        )
    );
}
add_action( 'elementor/elements/categories_registered', 'witr_elementor_category' );


// Load plugin class files

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
require_once(WITR_EXTENSION_DIR. '/widgets/em_about.php');
require_once(WITR_EXTENSION_DIR. '/widgets/em_recent_post.php');
require_once(WITR_EXTENSION_DIR. '/widgets/em_footer_portfolio.php');
require_once(WITR_EXTENSION_DIR. '/widgets/em_review_testi.php');
require_once(WITR_EXTENSION_DIR. '/widgets/em_carousel_portfolio.php');
require_once(WITR_EXTENSION_DIR. '/widgets/em-info-widget.php');
require_once(WITR_EXTENSION_DIR. '/includes/metabox/em-metabox.php');
require_once(WITR_EXTENSION_DIR. '/includes/ele-shortcode-own.php');


// Instantiate Plugin
if ( !function_exists('witr_extension_init') ) {
	function witr_extension_init() {

		global $witr_extention;

		// Localization
		load_plugin_textdomain('softd', FALSE, dirname(plugin_basename(__FILE__)) . "/languages");		
		
	}
}
add_action( 'plugins_loaded', 'witr_extension_init' );



/**
 * HTML Tag list
 * @return array
 */
function softd_html_tag_lists() {
    $html_tag_list = [
        'h1'   => esc_html__( 'H1', 'softd' ),
        'h2'   => esc_html__( 'H2', 'softd' ),
        'h3'   => esc_html__( 'H3', 'softd' ),
        'h4'   => esc_html__( 'H4', 'softd' ),
        'h5'   => esc_html__( 'H5', 'softd' ),
        'h6'   => esc_html__( 'H6', 'softd' ),
        'div'  => esc_html__( 'div', 'softd' ),
        'span' => esc_html__( 'span', 'softd' ),
        'p'    => esc_html__( 'p', 'softd' ),
    ];
    return $html_tag_list;
}

/*
 * Elementor Templates List
 * return array
 */

if( !function_exists('softd_html_template_at') ){
    function softd_html_template_at() {
        $templates = \Elementor\Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
        $types = array();
        if ( empty( $templates ) ) {
            $softd_tmp_items = [ '0' => esc_html__( 'Do not Saved Templates.', 'softd' ) ];
        } else {
            $softd_tmp_items = [ '0' => esc_html__( 'Choose Template', 'softd' ) ];
            foreach ( $templates as $template ) {
                $softd_tmp_items[ $template['template_id'] ] = $template['title'] . ' (' . $template['type'] . ')';
            }
        }
        return $softd_tmp_items;
    }
}








