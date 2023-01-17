<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Service extends Widget_Base {

    public function get_name() {
        return 'witr_section_service';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Service', 'softd' );
    }

    public function get_icon() {
        return 'eicon-featured-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === w_service start === */
			$this->start_controls_section(
				'witr_field_display_service',
				[
					'label' => esc_html__( 'witr service options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* service style check  witr_style_service */
			$this->add_control(
				'witr_style_service',
				[
					'label' => esc_html__( 'Service style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'default' => '1',					
					'options' => [
						'1' => esc_html__( 'Icon Top Left Center Right', 'softd' ),
						'2' => esc_html__( 'Icon Right', 'softd' ),
						'3' => esc_html__( 'Icon Left', 'softd' ),
						'4' => esc_html__( 'All Text Hover With BG Image', 'softd' ),
						'5' => esc_html__( 'Top Icon and Shape', 'softd' ),
						'6' => esc_html__( '3D/Flip Box Style', 'softd' ),
						'7' => esc_html__( 'style 7', 'softd' ),						
						'8' => esc_html__( 'style 8', 'softd' ),						
						'9' => esc_html__( 'style 9', 'softd' ),						
						'10' => esc_html__( 'style 10', 'softd' ),						
						'11' => esc_html__( 'style 11', 'softd' ),						
						'12' => esc_html__( 'Top Image Must Be Show', 'softd' ),						
					],
				]
			);
				/*  witr_box_height12 */
				$this->add_responsive_control(
					'witr_box_height12',
					[
						'label' => esc_html__( 'Box Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 3000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_service_s_12.service-item' => 'height: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['12'],
						],							
					]
				);			
			/* Box Position */				
			$this->add_control(
				'witr_text_ltc',
				[
					'label' => esc_html__( 'Box Position', 'softd' ),
					'type' => Controls_Manager::CHOOSE,
					'default' => 'center',
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'softd' ),
							'icon' => 'eicon-h-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'softd' ),
							'icon' => 'eicon-v-align-top',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'softd' ),
							'icon' => 'eicon-h-align-right',
						],
					],
					'separator'=>'before',
					'condition' => [
						'witr_style_service' =>['1','4','6','7','8','12'],
					],							
				]
			);
				/* witr_xyz */
				$this->add_control(
					'witr_xyz',
					[
						'label' => esc_html__( 'Flip Box', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'witr_service_flip_left',
						'options' => [
							'witr_service_flip_left' => esc_html__( 'Left', 'softd' ),
							'witr_service_flip_right' => esc_html__( 'Right', 'Down' ),
							'witr_service_flip_up' => esc_html__( 'Up', 'softd' ),
							'witr_service_flip_down' => esc_html__( 'Down', 'softd' ),
							'witr_service_flip_zoomin' => esc_html__( 'Zoom In', 'Down' ),
							'witr_service_flip_zoomout' => esc_html__( 'Zoom Out', 'Down' ),
						],
						'condition' => [
							'witr_style_service' =>['6'],
						],						
					]
				);			
					/*  box height */
					$this->add_responsive_control(
						'witr_box_height',
						[
							'label' => esc_html__( 'Box Height', 'softd' ),
							'type' => Controls_Manager::SLIDER,
							'separator'=>'before',
							'range' => [
								'px' => [
									'min' => 6,
									'max' => 1000,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_service_front_3d,{{WRAPPER}} .witr_service_back_3d' => 'height: {{SIZE}}{{UNIT}};',
							],
							'condition' => [
								'witr_style_service' =>['6'],
							],							
						]
					);
			/* witr_showtop_image */
			$this->add_control(
				'witr_showtop_image',
				[
					'label' => esc_html__( 'Show Top Image', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_service' =>['1','2','3','12'],
					],					
				]
			);	
			/* witr_service_image */
			$this->add_control(
				'witr_top_image',
				[
					'label' => esc_html__( 'Choose Image', 'softd' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'witr_showtop_image' => 'yes',
						'witr_style_service' =>['1','2','3','12'],
					],							
				]
			);
			/* witr_show_animate */
			$this->add_control(
				'witr_show_animate',
				[
					'label' => esc_html__( 'Show Image Animation ', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'separator'=>'before',							
				]
			);			
			/* witr_service_title */	
			$this->add_control(
				'witr_service_title',
				[
					'label' => esc_html__( 'Title', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Add title Here', 'softd' ),
					'placeholder' => esc_attr__( 'Type your service title here', 'softd' ),						
				]
			);
					/* witr_service_title_link */	
					$this->add_control(
						'witr_service_title_link',
						[
							'label' => esc_html__( 'Title Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert Title link here.','softd'),
							'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
							'show_external' => true,
							
						]
					);			
			/* witr_service_title */	
			$this->add_control(
				'witr_service_sub_title',
				[
					'label' => esc_html__( 'Small Title', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use Sub title, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Add title Here', 'softd' ),
					'placeholder' => esc_attr__( 'Type your service title here', 'softd' ),
					'condition' => [
						'witr_style_service' => ['11','12'],
					],					
				]
			);			
			/* witr_service_content	*/
			$this->add_control(
				'witr_service_content',
				[
					'label' => esc_html__( 'Content Text', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing .', 'softd' ),
					'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
				]
			);			
			
			/* witr_show_list */
			$this->add_control(
				'witr_show_repeat_list',
				[
					'label' => esc_html__( 'Show list', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_service' => ['10','11'],
					],					
				]
			);			
			/* witr_service2_list */
			$this->add_control(
				'witr_service_list',
				[
					'label' => esc_html__( 'service List Items ', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator' => 'before',
					'description' => esc_html__( 'use list from here, must be use the stcructure ex <ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li></ul> OR TEXT USE EX-<ul><li><p>Text List</p></li></ul> OR TEXT USE EX-<ul><li><span>Text List</span></li></ul> OR TEXT USE EX-<ul><li>Text List</li></ul> when icon use ex <ul><li><i class="icofont-tick-mark"></i></li><li><i class="icofont-tick-mark"></i></li></ul> ', 'softd' ),
					'default' => '<ul><li><i class="icofont-tick-mark"></i></li><li><i class="icofont-tick-mark"></i></li></ul><ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li></ul>',
					'placeholder' => esc_attr__( 'Type your List Item here', 'softd' ),
					'condition' => [
						'witr_style_service' => ['10','11'],
						'witr_show_repeat_list' => 'yes',
					],						
				]
			);			
			
			/* witr_show_icon witr_icon_item */
			$this->add_control(
				'witr_show_icon',
				[
					'label' => esc_html__( 'Show Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'yes',							
				]
			);				
			$this->add_control(
				'witr_icon_item',
				[
					'label' => esc_html__( 'Icon', 'softd' ),
					'type' => Controls_Manager::ICONS,
					'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'softd' ),
					'fa4compatibility' => 'icon',
					'default' => [
						'value' => 'fas fa-star',
						'library' => 'fa-solid',
					],
					'condition' => [
						'witr_show_icon' => 'yes',
					],							
				]
			);					
	
			/* witr_show_custom witr_service_custom */
			$this->add_control(
				'witr_show_custom',
				[
					'label' => esc_html__( 'Show custom Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',							
				]
			);
			/* Custom Icon	*/
			$this->add_control(
				'witr_service_custom',
				[
					'label' => esc_html__( 'Custom Icon Name', 'softd' ),
					'type' => Controls_Manager::TEXT,
					'description' => esc_html__( 'Type Icofont - https://icofont.com/icons Ex=icofont-adjust or Themify Icon -https://themify.me/themify-icons Ex=ti-user or Fontawesome Icon - https://fontawesome.com/cheatsheet Ex=fas fa-star name here', 'softd' ),
					'default' => esc_html__( 'icofont-adjust', 'softd' ),
					'placeholder' => esc_attr__( 'Type your Icon name here', 'softd' ),
					'condition' => [
						'witr_show_custom' => 'yes',
					],							
				]
			);				
			/* show image witr_show_image witr_service_image */
			$this->add_control(
				'witr_show_image',
				[
					'label' => esc_html__( 'Show Image', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',								
				]
			);	
			/* witr_service_image */
			$this->add_control(
				'witr_service_image',
				[
					'label' => esc_html__( 'Choose Icon Image', 'softd' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'',
					],
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
	
			
			/* witr_show_button */
			$this->add_control(
				'witr_show_button',
				[
					'label' => esc_html__( 'Show Button', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',								
				]
			);			
			/* witr_service_button	*/
			$this->add_control(
				'witr_service_button',
				[
					'label' => esc_html__( 'Button text', 'softd' ),
					'label_block' =>true,
					'type' => Controls_Manager::TEXT,
					'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),		
					'default' => esc_html__( 'Read More', 'softd' ),
					'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
					'condition' => [
						'witr_show_button' => 'yes',
					],							
				]
			);
			/* witr_button_link */	
			$this->add_control(
				'witr_button_link',
				[
					'label' => esc_html__( 'Button Link', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert button link here.','softd'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
					],
					'condition' => [
						'witr_show_button' => 'yes',
					],							
				]
			);
			/* witr_show_icon_b */
			$this->add_control(
				'witr_show_icon_b',
				[
					'label' => esc_html__( 'Show Button Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_show_button' => 'yes',
					],					
				]
			);
			/* Custom Icon	*/
			$this->add_control(
				'witr_custom_icon_b',
				[
					'label' => esc_html__( 'Button Icon Name', 'softd' ),
					'type' => Controls_Manager::TEXT,
					'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons name here', 'softd' ),
					'default' => esc_html__( 'ti-arrow-right', 'softd' ),
					'placeholder' => esc_attr__( 'Type your Icon name here', 'softd' ),
					'condition' => [
						'witr_show_button' => 'yes',
						'witr_show_icon_b' => 'yes',
					],							
				]
			);

			/* witr_show_number */
			$this->add_control(
				'witr_show_number',
				[
					'label' => esc_html__( 'Show Number', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_service' =>['4'],
					],					
				]
			);			
				/* witr_service_number */	
				$this->add_control(
					'witr_service_number',
					[
						'label' => esc_html__( 'Number', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'description' => esc_html__( 'Not use number, remove the text from field', 'softd' ),
						'default' => esc_html__( '01', 'softd' ),
						'placeholder' => esc_attr__( 'Type your number here', 'softd' ),
						'condition' => [
							'witr_style_service' =>['4'],
							'witr_show_number' => 'yes',
						],							
					]
				);
			
			/* witr_show_icon witr_icon_item */
			$this->add_control(
				'witr_show_icon9',
				[
					'label' => esc_html__( 'Show Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_service' =>['9'],
					],						
				]
			);				
			$this->add_control(
				'witr_icon_item9',
				[
					'label' => esc_html__( 'Icon', 'softd' ),
					'type' => Controls_Manager::ICONS,
					'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'softd' ),
					'fa4compatibility' => 'icon',
					'default' => [
						'value' => 'fas fa-long-arrow-alt-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'witr_show_icon9' => 'yes',
						'witr_style_service' =>['9'],
					],							
				]
			);	

/* =================================================== Bekent Option =================================================================== */
			/* witr_service_heading2 */	
			$this->add_control(
				'witr_service_heading2',
				[
					'label' => esc_html__( 'Bekent Option Bottom Look', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);			
			
			/* witr_service_title2 */	
			$this->add_control(
				'witr_service_title2',
				[
					'label' => esc_html__( 'Title', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Add title Here2', 'softd' ),
					'placeholder' => esc_attr__( 'Type your service title here', 'softd' ),
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);
			/* witr_service_title_link2 */	
			$this->add_control(
				'witr_service_title_link2',
				[
					'label' => esc_html__( 'Title Link', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert Title link here.','softd'),
					'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
					'show_external' => true,
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);			
			/* witr_service_content2	*/
			$this->add_control(
				'witr_service_content2',
				[
					'label' => esc_html__( 'Content Text', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing .', 'softd' ),
					'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);
			/* witr_show_icon witr_icon_item */
			$this->add_control(
				'witr_show_icon2',
				[
					'label' => esc_html__( 'Show Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);				
			$this->add_control(
				'witr_icon_item2',
				[
					'label' => esc_html__( 'Icon', 'softd' ),
					'type' => Controls_Manager::ICONS,
					'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'softd' ),
					'fa4compatibility' => 'icon',
					'default' => [
						'value' => 'fab fa-twitter',
						'library' => 'fa-solid',
					],
					'condition' => [
						'witr_show_icon2' => 'yes',
						'witr_style_service' =>['6'],
					],							
				]
			);					
	
			/* witr_show_custom2 witr_service_custom2 */
			$this->add_control(
				'witr_show_custom2',
				[
					'label' => esc_html__( 'Show custom Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);
			/* Custom Icon2	*/
			$this->add_control(
				'witr_service_custom2',
				[
					'label' => esc_html__( 'Custom Icon Name', 'softd' ),
					'type' => Controls_Manager::TEXT,
					'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons name here', 'softd' ),
					'default' => esc_html__( 'icofont-adjust', 'softd' ),
					'placeholder' => esc_attr__( 'Type your Icon name here', 'softd' ),
					'condition' => [
						'witr_show_custom2' => 'yes',
						'witr_style_service' =>['6'],
					],							
				]
			);				
			/* show image witr_show_image witr_service_image2 */
			$this->add_control(
				'witr_show_image2',
				[
					'label' => esc_html__( 'Show Image', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);	
			/* witr_service_image */
			$this->add_control(
				'witr_service_image2',
				[
					'label' => esc_html__( 'Choose Image', 'softd' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'',
					],
					'condition' => [
						'witr_show_image2' => 'yes',
						'witr_style_service' =>['6'],
					],							
				]
			);
			
			/* witr_show_button */
			$this->add_control(
				'witr_show_button2',
				[
					'label' => esc_html__( 'Show Button', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);			
			/* witr_service_button	*/
			$this->add_control(
				'witr_service_button2',
				[
					'label' => esc_html__( 'Button text', 'softd' ),
					'label_block' =>true,
					'type' => Controls_Manager::TEXT,
					'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),		
					'default' => esc_html__( 'See More', 'softd' ),
					'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
					'condition' => [
						'witr_show_button2' => 'yes',
						'witr_style_service' =>['6'],
					],							
				]
			);
			/* witr_button_link2 */	
			$this->add_control(
				'witr_button_link2',
				[
					'label' => esc_html__( 'Button Link', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert button link here.','softd'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
					],
					'condition' => [
						'witr_show_button2' => 'yes',
						'witr_style_service' =>['6'],
					],							
				]
			);


		$this->end_controls_section();
		/* === end witr_service ===  */	
		
		
	   /*===============================================================================================================================
																START TO STYLE
		=================================================================================================================================*/			

		/*=== start Single Box style ====*/
		$this->start_controls_section(
			'section_single_service',
			[
				'label' => esc_html__( 'Box Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
				$this->add_control(
					'shapeboxh',
					[
						'label' => esc_html__( 'Bar Background', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_service' => ['10'],
						],							
					]
				);				
				/* shape background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_boxba_background',
						'label' => esc_html__( ' Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_service_10::before',
						'condition' => [
							'witr_style_service' => ['10'],
						],							
					]
				);		
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_bb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_service',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_single_br',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_service' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowsbox',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_service,{{WRAPPER}} .service_top_image::after',
					]
				);
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_background',
						'label' => esc_html__( ' Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .all_color_service,{{WRAPPER}} .service_top_image::after',							
					]
				);				
				/* box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_service' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box margin */
				$this->add_responsive_control(
					'witr_box_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_service' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
				/* box padding */
				$this->add_responsive_control(
					'witr_box_paddingei',
					[
						'label' => esc_html__( ' Content Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .detail_SS,{{WRAPPER}} .wirt_detail_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['8','11'],
						],							
					]
				);				

				/* HEADING  */
				$this->add_control(
					'witr_bor_headd_color',
					[
						'label' => esc_html__( ' Hover option', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_bh',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_service:hover',
					]
				);		
				/* Border Hover Color */
				$this->add_control(
					'witr_bor_h_color',
					[
						'label' => esc_html__( 'Border Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .all_color_service:hover' => 'border-color: {{VALUE}}',
						],
						
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowhbox',
						'label' => esc_html__( 'Hover Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_service:hover',
					]
				);					
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_boxhover_background',
						'label' => esc_html__( ' Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .all_color_service:hover',							
					]
				);		

		$this->end_controls_section();
		/*=== start Single Box style ====*/			
			
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'section_style_icon',
			[
				'label' => esc_html__( 'Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'icon_colors' );
			
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
			/*  button witr_btn_button */	
				$this->add_control(
					'witr_Select_whi',
					[
						'label' => esc_html__( 'Select Icon Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'multiple' => true,
						'options' => [
							'same2' => esc_html__( 'Default', 'softd' ),
							'width_height_link_0'  => esc_html__( 'Background Custom', 'softd' ),						
						],
						'condition' => [
							'witr_style_service' => ['1','2','3','9','12'],
						],						
					]
				);				
				
				$this->add_control(
					'shapeititle',
					[
						'label' => esc_html__( 'Shape Background', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_service' => ['5','10'],
						],							
					]
				);				
				/* shape background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_ishape_background',
						'label' => esc_html__( 'Shape Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .SIBG_1::before,{{WRAPPER}} .witr_service_10::before',
						'condition' => [
							'witr_style_service' => ['5','10'],
						],							
					]
				);
				/*  witr_icond_select */
				$this->add_responsive_control(
					'witr_icond_select',
					[
						'label' => esc_html__( 'Icon Position', 'devien' ),
						'type' => Controls_Manager::SELECT,
						'description' =>"Set your Icon Position Select here",
						'separator' => 'before',
						'default' => 'default',
						'options' => [
							'default' => esc_html__( 'Default', 'devien' ),
							'none' => esc_html__( 'None', 'devien' ),
							'left' => esc_html__( 'Left', 'devien' ),
							'right' => esc_html__( 'Right', 'devien' ),
						],
						'condition' => [
							'witr_style_service' => ['2','3'],
						],						
						'selectors' => [
							'{{WRAPPER}} .em-service2.sleft .em-service-icon,{{WRAPPER}} .em-service2.sright .em-service-icon' => 'float: {{VALUE}}',
						],						
					]
				);				
				/* Icon Color */
				$this->add_control(
					'witr_primary_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'color: {{VALUE}}',
						],
						
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'witr_icon_size',
					[
						'label' => esc_html__( 'Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_icons_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .all_icon_color i',
					]
				);				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_icon_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Inner Icon Align', 'softd' ),
						'type' => Controls_Manager::CHOOSE,					
						'options' => [
							'left' => [
								'title' => esc_html__( 'Left', 'softd' ),
								'icon' => 'eicon-text-align-left',
							],
							'center' => [
								'title' => esc_html__( 'Center', 'softd' ),
								'icon' => 'eicon-text-align-center',
							],
							'right' => [
								'title' => esc_html__( 'Right', 'softd' ),
								'icon' => 'eicon-text-align-right',
							],
							'justify' => [
								'title' => esc_html__( 'Justified', 'softd' ),
								'icon' => 'eicon-text-align-justify',
							],
						],
						'prefix_class' => 'softd-star-rating%s--align-',
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'text-align: {{VALUE}}',
						],
					]
				);
				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_border',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_icon_color i',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_icon_color i',
					]
				);					
				/* blend mode style color */				
				$this->add_control(
					'witr_icon_blend_mode',
					[
						'label' => esc_html__( 'Blend Mode', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'' => esc_html__( 'Normal', 'softd' ),
							'multiply' => 'Multiply',
							'screen' => 'Screen',
							'overlay' => 'Overlay',
							'darken' => 'Darken',
							'lighten' => 'Lighten',
							'color-dodge' => 'Color Dodge',
							'saturation' => 'Saturation',
							'color' => 'Color',
							'difference' => 'Difference',
							'exclusion' => 'Exclusion',
							'hue' => 'Hue',
							'luminosity' => 'Luminosity',
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'mix-blend-mode: {{VALUE}}',
						],
					]
				);				

					
				/*  Rotate */
				$this->add_responsive_control(
					'witr_rotate',
					[
						'label' => esc_html__( 'Rotate', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'deg' ],
						'default' => [
							'size' => 0,
							'unit' => 'deg',
						],
						'tablet_default' => [
							'unit' => 'deg',
						],
						'mobile_default' => [
							'unit' => 'deg',
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);

				/* witr_position_style */
				$this->add_responsive_control(
					'witr_position_style',
					[
						'label' => esc_html__( 'Icon Position', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'' => esc_html__( 'Default', 'softd' ),
							'absolute' => esc_html__( 'absolute', 'softd' ),
							'fixed' => esc_html__( 'fixed', 'softd' ),
							'inherit' => esc_html__( 'inherit', 'softd' ),
						],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'position: {{VALUE}};',
						],							
					]
				);
				/* witr_icon_top */
				$this->add_responsive_control(
					'witr_icon_top',
					[
						'label' => esc_html__( 'Icon Top', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 500,
							],
							'%' => [
								'min' => -100,
								'max' => 100,
							],		
						],
						'condition' => [
							'witr_position_style' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/* witr_icon_left */
				$this->add_responsive_control(
					'witr_icon_left',
					[
						'label' => esc_html__( 'Icon Left', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 500,
							],
							'%' => [
								'min' => -100,
								'max' => 100,
							],	
						],
						'condition' => [
							'witr_position_style' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* icon margin */
				$this->add_responsive_control(
					'witr_icon_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i,{{WRAPPER}} .em-service2.sleft .em-service-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_icon_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_icon_color i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
		
				/*=== start icon hover style ====*/
				$this->start_controls_tab(
					'witr_icon_colors_hover',
					[
						'label' => esc_html__( 'Icon Hover', 'softd' ),
					]
				);
				$this->add_control(
					'shapeihtitle',
					[
						'label' => esc_html__( 'Shape Hover Background', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_service' => ['5','10'],
						],						
					]
				);				
				/* shape background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_ihshape_background',
						'label' => esc_html__( 'Shape Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .singleSS:hover .SIBG_1::before,{{WRAPPER}} .witr_service_10:hover::before',
						'condition' => [
							'witr_style_service' => ['5','10'],
						],						
					]
				);					
					/*  primary hover color */
					$this->add_control(
						'witr_hover_primary_color',
						[
							'label' => esc_html__( 'Icon Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .all_color_service:hover i ' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_icon',
							'label' => esc_html__( 'Icon Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .all_color_service:hover i',
						]
					);					
					/* witr_border_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_borderho',
							'label' => esc_html__( 'Border', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .all_color_service:hover i',
						]
					);					
					$this->end_controls_tab();
					/*=== end icon hover style ====*/					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon style ====*/		

		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( ' Images Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_image' => 'yes',
				],				
			]
		);		 
			
			/*  image width */
			$this->add_responsive_control(
				'witr_image_width',
				[
					'label' => esc_html__( 'width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 25,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .all_icon_color img' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			/*  image height */
			$this->add_responsive_control(
				'witr_image_height',
				[
					'label' => esc_html__( 'Height', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 25,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .all_icon_color img' => 'height: {{SIZE}}{{UNIT}};',
					],
				]			
			);
			/* witr_border_style */
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'witr_img_bb',
					'label' => esc_html__( 'Border', 'softd' ),
					'selector' => '{{WRAPPER}} .single_seivice_ani img,{{WRAPPER}} .all_icon_color img',
				]
			);			
			/* border_radius */
			$this->add_control(
				'witr_border_img_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'description' =>esc_html__('When Show Animation Set Not Work Border Radius','softd'),
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .all_icon_color img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* image margin */
			$this->add_responsive_control(
				'witr_image_margin',
				[
					'label' => esc_html__( ' Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_icon_color img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* image padding */
			$this->add_responsive_control(
				'witr_image_padding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_icon_color img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/
		
		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			/* border_radius */
			$this->add_control(
				'witr_border_text_radius',
				[
					'label' => esc_html__( 'Title Box Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .wirt_detail_texti' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_service' => ['11'],
					],					
				]
			);
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_tex_background',
						'label' => esc_html__( '  Background', 'softd' ),
						'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .wirt_detail_texti',
						'condition' => [
							'witr_style_service' => ['11'],
						],						
					]
				);			
			/* image padding */
			$this->add_responsive_control(
				'witr_tex_padding',
				[
					'label' => esc_html__( 'Title Box Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wirt_detail_texti' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_service' => ['11'],
					],					
				]
			);		
			/* color */
			$this->add_control(
				'witr_title_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_color_service h3,{{WRAPPER}} .all_color_service h3 a' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_color_service h3:hover,{{WRAPPER}} .all_color_service h3 a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .all_color_service h3,{{WRAPPER}} .all_color_service h3 a',
				]
			);			
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/

		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title2',
			[
				'label' => esc_html__( 'Small Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' =>['11','12'],
				],				
			]
		);		 
			/* color */
			$this->add_control(
				'witr_title_color2',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_color_service h2,{{WRAPPER}} .all_color_service h2 a' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_color2',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_color_service h2:hover,{{WRAPPER}} .all_color_service h2 a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_color2',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_color_service h2,{{WRAPPER}} .all_color_service h2 a',
				]
			);			
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin2',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding2',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/
			
		/*=== start witr List content style ====*/		
		 $this->start_controls_section(
			'witr_option_list_content',
			[
				'label' => esc_html__( 'List Icon & Text Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_repeat_list' => ['yes'],
					'witr_style_service' =>['10','11'],
				],				
			]		 
		 );
		 
		/*=== start list_tabs style ====*/
		$this->start_controls_tabs( 'list_colors' );
		
			/*=== start icon_normal style ====*/
			$this->start_controls_tab(
				'iconl_colors_normal',
				[
					'label' => esc_html__( 'icon', 'softd' ),
				]
			);		 

		/* Icon Color */
		$this->add_control(
			'witr_iconl_color',
			[
				'label' => esc_html__( 'Icon', 'softd' ),
				'type' => Controls_Manager::COLOR,
				'separator'=>'before',
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .service_list_op ul li i' => 'color: {{VALUE}}',
				],
			]
		);
		/*  list icon font size */
		$this->add_responsive_control(
			'witr_icon size',
			[
				'label' => esc_html__( ' Size', 'softd' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .service_list_op ul li i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		/* Icon margin */
		$this->add_responsive_control(
			'witr_contenti_margin',
			[
				'label' => esc_html__( ' Margin', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .service_list_op ul li i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		/* Icon padding */
		$this->add_responsive_control(
			'witr_contenti_padding',
			[
				'label' => esc_html__( ' Padding', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .service_list_op ul li i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);		
		
		$this->end_controls_tab();
		/*=== end list normal style ====*/
	
			/*=== start icon hover style ====*/
			$this->start_controls_tab(
				'list_colors_hover',
				[
					'label' => esc_html__( 'text ', 'softd' ),
				]
			);		

				/* list text color */
				$this->add_control(
					'witr_list_color',
					[
						'label' => esc_html__( ' Text', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'global' => [
							'default' => Global_Colors::COLOR_TEXT,
						],						
						'selectors' => [
							'{{WRAPPER}} .service_list_op ul li a,{{WRAPPER}} .service_list_op ul li p,{{WRAPPER}} .service_list_op ul li span,{{WRAPPER}} .service_list_op ul li' => 'color: {{VALUE}}',
						],
					]
				);
				/* list text color */
				$this->add_control(
					'witr_list_hover_color',
					[
						'label' => esc_html__( ' Text Hover', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .service_list_op ul li a:hover,{{WRAPPER}} .service_list_op ul li p:hover,{{WRAPPER}} .service_list_op ul li span:hover,{{WRAPPER}} .service_list_op ul li:hover' => 'color: {{VALUE}}',
						],
					]
				);
				
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_list_color',
						'label' => esc_html__( 'Typography', 'softd' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_TEXT,
						],
						'selector' => '{{WRAPPER}} .service_list_op ul li a,{{WRAPPER}} .service_list_op ul li p,{{WRAPPER}} .service_list_op ul li span,{{WRAPPER}} .service_list_op ul li',
					]
				);						
				
				/* margin */
				$this->add_responsive_control(
					'witr_list_margin',
					[
						'label' => esc_html__( 'Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .service_list_op ul li a,{{WRAPPER}} .service_list_op ul li p,{{WRAPPER}} .service_list_op ul li span,{{WRAPPER}} .service_list_op ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* padding */
				$this->add_responsive_control(
					'witr_list_padding',
					[
						'label' => esc_html__( 'Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .service_list_op ul li a,{{WRAPPER}} .service_list_op ul li p,{{WRAPPER}} .service_list_op ul li span,{{WRAPPER}} .service_list_op ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);


				$this->end_controls_tab();
				/*=== end text hover style ====*/
				
		$this->end_controls_tabs();
		/*=== end text_tabs style ====*/

	$this->end_controls_section();

	/*=== end witr_list style ====*/
		
		/*=== start witr content style ====*/
		$this->start_controls_section(
			'witr_style_option_content',
			[
				'label' => esc_html__( 'Content Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_content_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_color_service p ' => 'color: {{VALUE}}',
					],
				]
			);

			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_content_typography',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
					'selector' => '{{WRAPPER}} .all_color_service p',
				]
			);		

			/* content margin */
			$this->add_responsive_control(
				'witr_content_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'witr_content_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/			
		

		/*=== start witr button style ====*/
		$this->start_controls_section(
			'witr_style_option_button',
			[
				'label' => esc_html__( 'Button Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_button' => 'yes',
				],				
			]
		);		 

			/*=== start button_tabs style ====*/
			$this->start_controls_tabs( 'button_colors' );
				/*=== start button_normal style ====*/
				$this->start_controls_tab(
					'witr_button_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
					/* color */
					$this->add_control(
						'witr_button_color',
						[
							'label' => esc_html__( 'Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_ACCENT,
							],							
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'color: {{VALUE}}',
							],
						]
					);				

					/* typograohy color */			
					$this->add_group_control(
						Group_Control_Typography::get_type(),
						[
							'name' => 'witr_button_typography',
							'label' => esc_html__( 'Typography', 'softd' ),
							'global' => [
								'default' => Global_Typography::TYPOGRAPHY_ACCENT,
							],
							'selector' => '{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a',
						]
					);	
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_button_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a',
						]
					);
					/* witr_border_style */
					$this->add_control(
						'witr_border_btn_style',
						[
							'label' => esc_html__( 'Border Style', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'default' => esc_html__( 'Default', 'softd' ),
								'none' => esc_html__( 'none', 'softd' ),
								'solid' => esc_html__( 'Solid', 'softd' ),
								'double' => esc_html__( 'Double', 'softd' ),
								'dotted' => esc_html__( 'Dotted', 'softd' ),
								'dashed' => esc_html__( 'Dashed', 'softd' ),
							],
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'border-style: {{VALUE}}',
							],
						]
					);		
					/* witr border */
					$this->add_control(
						'witr_borde_btn',
						[
							'label' => esc_html__( 'Border', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
							],
						]							
						
					);
					/* border_color */
					$this->add_control(
						'witr_border_btn_color',
						[
							'label' => esc_html__( 'Border Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);
					/* border_radius */
					$this->add_control(
						'witr_border_btn_radius',
						[
							'label' => esc_html__( 'Border Radius', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%' ],
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',								
							],
						]
					);					
						
					/* button margin */
					$this->add_responsive_control(
						'witr_button_margin',
						[
							'label' => esc_html__( 'Margin', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);
					/* button padding */
					$this->add_responsive_control(
						'witr_button_padding',
						[
							'label' => esc_html__( 'Padding', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .service-btn a,{{WRAPPER}} .witr_service_btn_3d a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);					
				

				$this->end_controls_tab();
				/*=== end button normal style ====*/
			
				/*=== start button hover style ====*/
				$this->start_controls_tab(
					'witr_button_colors_hover',
					[
						'label' => esc_html__( 'Button Hover', 'softd' ),
					]
				);

					/* hover_color */
					$this->add_control(
						'witr_button_hover_color',
						[
							'label' => esc_html__( 'Text Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							
							'selectors' => [
								'{{WRAPPER}} .service-btn a:hover,{{WRAPPER}} .service-btn a:hover i,{{WRAPPER}} .witr_service_btn_3d a:hover' => 'color: {{VALUE}}',
							],
						]
					);					
						
					/* Button Hover background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_button_hover_background',
							'label' => esc_html__( 'button Hover Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .service-btn a:hover,{{WRAPPER}} .witr_service_btn_3d a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'softd' ),
							'selector' => '{{WRAPPER}} .service-btn a:hover,{{WRAPPER}} .witr_service_btn_3d a:hover',
						]
					);					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		

			
		/*=== start witr_icon_Button style ====*/
		$this->start_controls_section(
			'section_style_icon_button',
			[
				'label' => esc_html__( 'Button Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_icon_b' => 'yes',
				],				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'button_icon' );
			
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colorb_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);		
				/* Icon Color */
				$this->add_control(
					'witr_primaryb_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'color: {{VALUE}}',
						],
						
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'witr_icon_sizeb',
					[
						'label' => esc_html__( 'Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_iconsb_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .all_color_service a span',
					]
				);				
				/*  icon width */
				$this->add_responsive_control(
					'witr_iconb_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_iconb_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_iconb_line_height',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_textb_align',
					[
						'label' => esc_html__( 'Inner Icon Align', 'softd' ),
						'type' => Controls_Manager::CHOOSE,					
						'options' => [
							'left' => [
								'title' => esc_html__( 'Left', 'softd' ),
								'icon' => 'eicon-text-align-left',
							],
							'center' => [
								'title' => esc_html__( 'Center', 'softd' ),
								'icon' => 'eicon-text-align-center',
							],
							'right' => [
								'title' => esc_html__( 'Right', 'softd' ),
								'icon' => 'eicon-text-align-right',
							],
							'justify' => [
								'title' => esc_html__( 'Justified', 'softd' ),
								'icon' => 'eicon-text-align-justify',
							],
						],
						'prefix_class' => 'softd-star-rating%s--align-',
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'text-align: {{VALUE}}',
						],
					]
				);
				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_service a span',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_borderbs_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_boxb_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_service a span',
					]
				);														
				/*  Rotate */
				$this->add_responsive_control(
					'witr_rotateb',
					[
						'label' => esc_html__( 'Rotate', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'deg' ],
						'default' => [
							'unit' => 'deg',
						],
						'tablet_default' => [
							'unit' => 'deg',
						],
						'mobile_default' => [
							'unit' => 'deg',
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);
				/* icon margin */
				$this->add_responsive_control(
					'witr_iconb_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_iconb_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_service a span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
		
				/*=== start icon hover style ====*/
				$this->start_controls_tab(
					'witr_icon_colorsb_hover',
					[
						'label' => esc_html__( 'Icon Hover', 'softd' ),
					]
				);					
					/*  primary hover color */
					$this->add_control(
						'witr_hover_primaryb_color',
						[
							'label' => esc_html__( 'Icon Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .all_color_service a:hover span ' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hoverb_icon',
							'label' => esc_html__( 'Icon Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .all_color_service a:hover span',
						]
					);					
					/* witr_border_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_borderhob',
							'label' => esc_html__( 'Border', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .all_color_service a:hover span',
						]
					);					
					$this->end_controls_tab();
					/*=== end icon hover style ====*/					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon Button style ====*/		

		/*=== start witr_Number style ====*/

		$this->start_controls_section(
			'witr_style_option_number',
			[
				'label' => esc_html__( 'Number Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' => ['4'],
					'witr_show_number' => 'yes',
				],				
			]
		);			
			/* number Color */
			$this->add_control(
				'witr_number_color',
				[
					'label' => esc_html__( 'Number Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_color_service span' => 'color: {{VALUE}}',
					],	
				]
			);
			/* number background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_num_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_color_service span',					
				]
			);

			/* number typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_number_typography',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .all_color_service span',
				]
			);
			/* border_radius */
			$this->add_control(
				'witr_number_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_service span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);			
			/* witr_right */
			$this->add_responsive_control(
				'witr_rightr',
				[
					'label' => esc_html__( 'Right', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => -100,
							'max' => 500,
						],
						'%' => [
							'min' => -100,
							'max' => 500,
						],
						'em' => [
							'min' => -100,
							'max' => 500,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .service_hover_btn' => 'right: {{SIZE}}{{UNIT}};',
					],
				]
			);					
			/* witr_bottom */
			$this->add_responsive_control(
				'witr_bottomb',
				[
					'label' => esc_html__( 'Bottom', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => -100,
							'max' => 500,
						],
						'%' => [
							'min' => -100,
							'max' => 500,
						],
						'em' => [
							'min' => -100,
							'max' => 500,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .service_hover_btn' => 'bottom: {{SIZE}}{{UNIT}};',
					],					
				]
			);
			
		 $this->end_controls_section();
		/*=== end  witr_Number style ====*/		
		
		/*=== start witr all style ====*/
		$this->start_controls_section(
			'witr_style_all_content',
			[
				'label' => esc_html__( 'All Text Hover Color', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' =>['4','6'],
				],					
			]
		);		 
			/* color */
			$this->add_control(
				'witr_alltitle_color',
				[
					'label' => esc_html__( 'All Text Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',					
					'selectors' => [
						'{{WRAPPER}} .em-service:hover .em-service-icon i,{{WRAPPER}} .em-service:hover .em-service-title h3 a,{{WRAPPER}} .em-service:hover .em-service-title h3,{{WRAPPER}} .em-service:hover .em-service-desc p,{{WRAPPER}} .em-service:hover .service-btn > a,{{WRAPPER}} .all_color_service:hover .witr_service_icon_3d i,{{WRAPPER}} .all_color_service:hover .witr_service_content_3d h3 a,{{WRAPPER}} .all_color_service:hover .witr_service_content_3d h3,{{WRAPPER}} .all_color_service:hover .witr_service_content_3d p,{{WRAPPER}} .all_color_service:hover .witr_service_btn_3d a,{{WRAPPER}} .em-service:hover .service_hover_btn span' => 'color: {{VALUE}}',
					],
				] 
			);
						/* border_color */
						$this->add_control(
							'witr_bordear_btn_color',
							[
								'label' => esc_html__( 'Button Border hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'selectors' => [
									'{{WRAPPER}} .all_color_service:hover .witr_service_btn_3d a' => 'border-color: {{VALUE}}',
								],
							]
						);			
			/* box shadow color */	
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'witr_sbox_shadow',
					'separator'=>'before',
					'label' => esc_html__( 'Box Shadow', 'softd' ),
					'selector' => '{{WRAPPER}} .em-service,{{WRAPPER}} .all_color_service',
				]
			);	
			/*  background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_backgrounda',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .em-service:hover,{{WRAPPER}} .witr_service_front_3d',
				]
			);
				
			/* color */
			$this->add_control(
				'witr_before_heading',
				[
					'label' => esc_html__( 'Image Overlay Color', 'softd' ),
					'type' => Controls_Manager::HEADING,				
				]
			);				
				/*  background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_backgrounda_before',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .em-service:hover::before,{{WRAPPER}} .witr_service_front_3d:before',
					]
				);
				/* Fontend border_radius */
				$this->add_control(
					'witr_borderf_radius',
					[
						'label' => esc_html__( 'Fontend Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_service_front_3d,{{WRAPPER}} .witr_service_front_3d:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['6'],
						],						
					]
				);				

	
/* =================================================== Bekend Option =================================================================== */
			/* heading2 */
			$this->add_control(
				'witr_heading3_color',
				[
					'label' => esc_html__( 'Box Bekend Option Bottom Look', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);
			/* heading2 */
			$this->add_control(
				'witr_alheadeing2_color',
				[
					'label' => esc_html__( 'Box BG color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);
			
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bbgh2_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_service_back_3d',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);			
			/* heading2 */
			$this->add_control(
				'witr_bvalheadeing2_color',
				[
					'label' => esc_html__( 'Box Overlay BG color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);			
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bvbgh2_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_service_back_3d:before',
					'condition' => [
						'witr_style_service' =>['6'],
					],					
				]
			);
				/* Fontend border_radius */
				$this->add_control(
					'witr_borderb_radius',
					[
						'label' => esc_html__( 'Bekend Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_service_back_3d,{{WRAPPER}} .witr_service_back_3d:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['6'],
						],						
					]
				);				


		 $this->end_controls_section();
		/*=== end  witr all text style ====*/
		

		/*=== start witr all style ====*/
		$this->start_controls_section(
			'witr_style_all_content9',
			[
				'label' => esc_html__( 'All Text Hover Color', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' =>['9'],
				],					
			]
		);		 
			/* color */
			$this->add_control(
				'witr_before_headings9',
				[
					'label' => esc_html__( 'Shape BG Color', 'softd' ),
					'type' => Controls_Manager::HEADING,				
				]
			);	
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_backgrounda9',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_sstyle_9::before',
				]
			);
				
				/* color */
				$this->add_control(
					'witr_before_heading9',
					[
						'label' => esc_html__( 'Shape Hover BG Color', 'softd' ),
						'type' => Controls_Manager::HEADING,				
					]
				);				
				/*  background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_backgrounda_before9',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_sstyle_9:hover::before',
					]
				);
				
			/* color */
			$this->add_control(
				'witr_alltitle_color9',
				[
					'label' => esc_html__( 'Title and Content Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',					
					'selectors' => [
						'{{WRAPPER}} .witr_sstyle_9:hover h3,{{WRAPPER}} .witr_sstyle_9:hover p' => 'color: {{VALUE}}',
					],
				] 
			);
				/* color */
				$this->add_control(
					'witr_before_btns9',
					[
						'label' => esc_html__( 'Icon and button color', 'softd' ),
						'type' => Controls_Manager::HEADING,				
					]
				);
				/* color */
				$this->add_control(
					'witr_alltitle_uncolor9',
					[
						'label' => esc_html__( 'Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',					
						'selectors' => [
							'{{WRAPPER}} .em-service2.witr_sstyle_9:hover .em-service-icon i,{{WRAPPER}} .witr_sstyle_9:hover .service-btn > a' => 'color: {{VALUE}}',
						],
					] 
				);				
				/*  background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_backgrounda_btn9',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .em-service2.witr_sstyle_9:hover .em-service-icon i,{{WRAPPER}} .witr_sstyle_9:hover .service-btn > a',
					]
				);			
			/* border_color */
			$this->add_control(
				'witr_bordear_btn_color9',
				[
					'label' => esc_html__( 'Button Border Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .em-service2.witr_sstyle_9:hover .em-service-icon i,{{WRAPPER}} .witr_sstyle_9:hover .service-btn > a' => 'border-color: {{VALUE}}',
					],
				]
			);			
			/* box shadow color */	
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'witr_sbox_shadow9',
					'separator'=>'before',
					'label' => esc_html__( 'Icon Box Shadow', 'softd' ),
					'selector' => '{{WRAPPER}} .em-service2.witr_sstyle_9:hover .em-service-icon i',
				]
			);					
				
				/* Fontend border_radius */
				$this->add_control(
					'witr_borderf_radius9',
					[
						'label' => esc_html__( 'Shape Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_sstyle_9:hover::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['9'],
						],						
					]
				);				
									
		
		
		
		 $this->end_controls_section();
		/*=== end  witr all text style ====*/

		/*=== start Text Box style ====*/
		$this->start_controls_section(
			'section_text_box',
			[
				'label' => esc_html__( ' Text Box  Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' =>['1','2','3'],
					'witr_showtop_image' => 'yes',
				],				
			]
		);
			/* box text background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_boxt_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .text_box',
					
				]
			);		
				/* border_radius */
				$this->add_control(
					'witr_box_tr',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .text_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* HEADING  */
				$this->add_control(
					'witr_boxhh',
					[
						'label' => esc_html__( 'Background Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
					]
				);						
				/* box text h background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_boxth_background',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .text_box:hover',
						
					]
				);				
				/* box padding */
				$this->add_responsive_control(
					'witr_box_tpadding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .text_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);				

		

		$this->end_controls_section();
		/*=== start Single Box style ====*/			
			
			
			
			
    } /*==function end==*/

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
		
	switch ( $witrshowdata['witr_style_service'] ) {
		
		case '12':
		?>
		
			<div class="service-item witr_service_s_12  <?php echo $witrshowdata['witr_Select_whi']; ?> text-<?php echo $witrshowdata['witr_text_ltc']; ?>  <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
				<div class="service_top_image">
					<!-- image -->
					<?php if(isset($witrshowdata['witr_top_image']['url']) && ! empty($witrshowdata['witr_top_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_top_image']['url'];?>" alt="" />
					<?php } ?>			
				</div>
				<div class="text_box all_icon_color all_color_service">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>
						<!-- custom icon -->
						<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
							<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
						<?php } ?>				
						<!-- image -->
						<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
						<?php } ?>

						<!-- Sub title -->
						<?php if(isset($witrshowdata['witr_service_sub_title']) && ! empty($witrshowdata['witr_service_sub_title'])){?>
							<h2><?php echo $witrshowdata['witr_service_sub_title']; ?> </h2>
						<?php } ?>					
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
						<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
						<?php }	?>
						<?php } ?>
						<!-- content -->
						<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
							<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
						<?php } ?>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
							<div class="service-btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
								<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
									<!-- custom icon -->
									<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
										<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
									<?php } ?>
								<?php }?>	
							</a>
							</div>
						<?php } ?>	
				</div> <!-- text_box -->							
			</div> <!-- service item -->							
 		<?php 
		
		break;		
		
		case '11':
		?>
		
		<div class=" witr_service_11 all_color_service  text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class=" wirt_detail_texti">
				<div class=" wirt_detail_icon all_icon_color">
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
					<?php endif; ?>
					<!-- custom icon -->
					<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>					
						<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
					<?php } ?>				
					<!-- image -->
					<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
					<?php } ?>			
				</div>
				<div class="wirt_detail_title">
					<!-- title -->
					<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
					<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
					<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
					<?php }	?>
					<?php } ?>
					<!-- Sub title -->
					<?php if(isset($witrshowdata['witr_service_sub_title']) && ! empty($witrshowdata['witr_service_sub_title'])){?>
						<h2><?php echo $witrshowdata['witr_service_sub_title']; ?> </h2>
					<?php } ?>				
				</div>
			</div>
			<div class="wirt_detail_content">
				<!-- content -->
				<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
					<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
				<?php } ?>
				<!--- list content --->
				<?php if($witrshowdata['witr_show_repeat_list']=='yes'){?>
				<div class="service_list_op">
					<!-- list -->
					<?php if(isset($witrshowdata['witr_service_list']) && ! empty($witrshowdata['witr_service_list'])){?>
						<?php echo $witrshowdata['witr_service_list']; ?>
					<?php }?>
				</div>	
				<?php } ?>				
				<!-- button -->
				<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
					<div class="service-btn witr_sbtn_s8">
					<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
						<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
							<!-- custom icon -->
							<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
								<i class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></i>
							<?php } ?>
						<?php }?>
					</a>
					</div>
				<?php } ?>
			</div>
		</div>

		<?php 
		break;
		
		case '10':
		?>
		
		<div class="witr_service_10  all_color_service <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="serIcon SIBG_1  service_text all_icon_color">
				<!-- icon -->
				<?php if ( $is_new || $migrated ) :
					Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
				else : ?>
					<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
				<?php endif; ?>
				<!-- custom icon -->
				<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>					
					<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
				<?php } ?>				
				<!-- image -->
				<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
				<?php } ?>			
			</div>
			<div class="detail_SS">
				<!-- title -->
				<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
				<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
					<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
				<?php }else{ ?>
				<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
				<?php }	?>
				<?php } ?>
				<!-- content -->
				<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
					<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
				<?php } ?>
				<!--- list content --->
				<?php if($witrshowdata['witr_show_repeat_list']=='yes'){?>
				<div class="service_list_op">
					<!-- list -->
					<?php if(isset($witrshowdata['witr_service_list']) && ! empty($witrshowdata['witr_service_list'])){?>
						<?php echo $witrshowdata['witr_service_list']; ?>
					<?php }?>
				</div>	
				<?php } ?>				
				<!-- button -->
				<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
					<div class="service-btn">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
							<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
									<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
								<?php } ?>
							<?php }?>					
						</a>
					</div>
				<?php } ?>
			</div>
		</div>			


		<?php 
		break;
		
		
		case '9':
		?>
		
			<div class="em-service2 sleft all_color_service witr_sstyle_9">
				<div class="em_service_content ">
					<div class="em_single_service_text <?php echo $witrshowdata['witr_Select_whi']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
						<div class="service_top_image">
							<!-- image -->
							<?php if(isset($witrshowdata['witr_top_image']['url']) && ! empty($witrshowdata['witr_top_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_top_image']['url'];?>" alt="" />
							<?php } ?>			
						</div>
						<div class="text_box ">
							<div class="service_top_text all_icon_color">
								<div class="em-service-icon">
									<!-- icon -->
									<?php if ( $is_new || $migrated ) :
										Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
									else : ?>
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									<?php endif; ?>					
									<!-- custom icon -->
									<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
										<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
									<?php } ?>
									<!-- image -->
									<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
										<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
									<?php } ?>				
								</div>			
							</div>
							<div class="em-service-inner">
								<div class="em-service-title ">
									<!-- title -->
									<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
									<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
										<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
									<?php }else{ ?>
									<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
									<?php }	?>
									<?php } ?>
									<!-- content -->
								</div>						
								<div class="em-service-desc">
									<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
										<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
									<?php } ?>
								</div>
								<!-- button -->
								<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
									<div class="service-btn">
									<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
										<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
											<!-- custom icon -->
											<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
												<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
											<?php } ?>
										<?php }?>													
									
									</a>
									</div>
								<?php } ?>				
							</div>
						</div>
					</div>
				</div>
			</div>			


		<?php 
		break;
		
		
		case '8':
		?>
		<div class="singleSS witr_service_8 all_color_service  text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="serIcon  service_text all_icon_color">
				<!-- icon -->
				<?php if ( $is_new || $migrated ) :
					Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
				else : ?>
					<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
				<?php endif; ?>
				<!-- custom icon -->
				<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>					
					<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
				<?php } ?>				
				<!-- image -->
				<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
				<?php } ?>			
			</div>
			<div class="detail_SS">
				<!-- title -->
				<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
				<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
					<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
				<?php }else{ ?>
				<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
				<?php }	?>
				<?php } ?>
				<!-- content -->
				<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
					<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
				<?php } ?>				
				<!-- button -->
				<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
					<div class="service-btn witr_sbtn_s8">
					<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?> 
						<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
							<!-- custom icon -->
							<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
								<i class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></i>
							<?php } ?>
						<?php }?>
					</a>
					</div>
				<?php } ?>
			</div>
		</div>
				

		<?php 
		break;	
		case '7':
		?>
		<div class="singleSS witr_service_7 all_color_service text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="serIcon  service_text all_icon_color">
				<!-- icon -->
				<?php if ( $is_new || $migrated ) :
					Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
				else : ?>
					<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
				<?php endif; ?>
				<!-- custom icon -->
				<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>					
					<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
				<?php } ?>				
				<!-- image -->
				<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
				<?php } ?>			
			</div>
			<div class="detail_SS">
				<!-- title -->
				<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
				<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
					<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
				<?php }else{ ?>
				<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
				<?php }	?>
				<?php } ?>
				<!-- content -->
				<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
					<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
				<?php } ?>				
				<!-- button -->
				<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
					<div class="service-btn">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
							<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
									<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
								<?php } ?>
							<?php }?>					
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
				

		<?php 
		break;		
		case '6':
		?>

		<div class="witr_service_3d witr_service_con_3d <?php echo $witrshowdata['witr_xyz']; ?>">
			<div class="witr_single_service_3d all_color_service text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
				<!-- fontent -->
				<div class="witr_service_front_3d">
					<div class="witr_service_position">
						<div class="witr_service_content_3d ">
							<div class="witr_service_icon_3d all_icon_color">
								<!-- icon -->
								<?php if ( $is_new || $migrated ) :
									Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
								else : ?>
									<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
								<?php endif; ?>
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
									<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
								<?php } ?>				
								<!-- image -->
								<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
									<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
								<?php } ?>						
							</div>
							<!-- title -->
							<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
							<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
								<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
							<?php }else{ ?>
							<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
							<?php }	?>
							<?php } ?>
							<!-- content -->
							<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
								<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
							<?php } ?>						
						</div>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
							<div class="witr_service_btn_3d">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
								<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
									<!-- custom icon -->
									<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
										<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
									<?php } ?>
								<?php }?>							
							</a>
							</div>
						<?php } ?>	
					</div>
				</div>
				<!-- bekend -->
				<div class="witr_service_back_3d">
					<div class="witr_service_position ">
						<div class="witr_service_content_3d">
							<div class="witr_service_icon_3d all_icon_color">
								<!-- icon -->
								<?php if ( $is_new || $migrated ) :
									Icons_Manager::render_icon( $witrshowdata['witr_icon_item2'], [ 'aria-hidden' => 'true' ] );
								else : ?>
									<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
								<?php endif; ?>
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_service_custom2']) && ! empty($witrshowdata['witr_service_custom2'])){?>	
									<i class="<?php echo $witrshowdata['witr_service_custom2']; ?>"></i>
								<?php } ?>				
								<!-- image -->
								<?php if(isset($witrshowdata['witr_service_image2']['url']) && ! empty($witrshowdata['witr_service_image2']['url'])){?>
									<img src="<?php echo $witrshowdata['witr_service_image2']['url'];?>" alt="" />
								<?php } ?>						
							</div>
							<!-- title -->
							<?php if(isset($witrshowdata['witr_service_title2']) && ! empty($witrshowdata['witr_service_title2'])){?>
							<?php if($witrshowdata['witr_service_title_link2'] ['url']){?> 
								<h3><a href="<?php echo $witrshowdata['witr_service_title_link2'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title2']; ?></a></h3>
							<?php }else{ ?>
							<h3><?php echo $witrshowdata['witr_service_title2']; ?> </h3>
							<?php }	?>
							<?php } ?>
							<!-- content -->
							<?php if(isset($witrshowdata['witr_service_content2']) && ! empty($witrshowdata['witr_service_content2'])){?>
								<p><?php echo $witrshowdata['witr_service_content2']; ?> </p>		
							<?php } ?>						
						</div>
						
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service_button2']) && ! empty($witrshowdata['witr_service_button2'])){?>
							<div class="witr_service_btn_3d">
							<a href="<?php echo $witrshowdata['witr_button_link2'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button2']; ?></a>
							</div>
						<?php } ?>					
						
					</div>
				</div>
			</div>
		</div>
				

		<?php 
		break;
		
		case '5':
		?>
		

		<div class="singleSS all_color_service <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="serIcon SIBG_1  service_text all_icon_color">
				<!-- icon -->
				<?php if ( $is_new || $migrated ) :
					Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
				else : ?>
					<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
				<?php endif; ?>
				<!-- custom icon -->
				<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>					
					<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
				<?php } ?>				
				<!-- image -->
				<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
				<?php } ?>			
			</div>
			<div class="detail_SS">
				<!-- title -->
				<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
				<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
					<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
				<?php }else{ ?>
				<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
				<?php }	?>
				<?php } ?>
				<!-- content -->
				<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
					<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
				<?php } ?>				
				<!-- button -->
				<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
					<div class="service-btn">
					<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
						<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
							<!-- custom icon -->
							<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
								<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
							<?php } ?>
						<?php }?>					
					</a>
					</div>
				<?php } ?>
			</div>
		</div>
				

		<?php 
		break;
		
		
		case '4':
		?>
		
		<div class="em-service all_color_service text-<?php echo $witrshowdata['witr_text_ltc']; ?>">				
			<div class="em_service_content">
				<div class="em_single_service_text <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<div class="service_top_text">
						<div class="em-service-icon all_icon_color">
							<!-- icon -->
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>
							<!-- custom icon -->
							<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
							<?php } ?>							
							<!-- image -->
							<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
							<?php } ?>
						</div>	
						<div class="em-service-title">
							<!-- title -->
							<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
							<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
								<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
							<?php }else{ ?>
							<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
							<?php }	?>
							<?php } ?>
							
						</div>	
					</div>
					<div class="em-service-inner">				
						<div class="em-service-desc">
							<!-- content -->
							<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
								<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
							<?php } ?>
						</div>							
					</div>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
						<div class="service-btn">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
							<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
									<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
								<?php } ?>
							<?php }?>						
						</a>
						</div>
					<?php } ?>
					<!-- number -->
					<?php if($witrshowdata['witr_show_number']=='yes'){ ?>
						<?php if(isset($witrshowdata['witr_service_number']) && ! empty($witrshowdata['witr_service_number'])){?>
							<div class="service_hover_btn">
								<span><?php echo $witrshowdata['witr_service_number']; ?></span>
							</div>	
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>	

		<?php 
		break;
				
		case '3':
		?>
	
		
			<div class="em-service2 sleft all_color_service">
				<div class="em_service_content ">
					<div class="em_single_service_text <?php echo $witrshowdata['witr_Select_whi']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
						<div class="service_top_image">
							<!-- image -->
							<?php if(isset($witrshowdata['witr_top_image']['url']) && ! empty($witrshowdata['witr_top_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_top_image']['url'];?>" alt="" />
							<?php } ?>			
						</div>
						<div class="text_box">
							<div class="service_top_text all_icon_color">
								<div class="em-service-icon">
									<!-- icon -->
									<?php if ( $is_new || $migrated ) :
										Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
									else : ?>
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									<?php endif; ?>					
									<!-- custom icon -->
									<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
										<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
									<?php } ?>
									<!-- image -->
									<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
										<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
									<?php } ?>				
								</div>			
							</div>
							<div class="em-service-inner">
								<div class="em-service-title">
									<!-- title -->
									<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
									<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
										<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
									<?php }else{ ?>
									<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
									<?php }	?>
									<?php } ?>
									<!-- content -->
								</div>						
								<div class="em-service-desc">
									<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
										<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
									<?php } ?>
								</div>
								<!-- button -->
								<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
									<div class="service-btn">
										<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
											<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
												<!-- custom icon -->
												<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
													<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
												<?php } ?>
											<?php }?>										
										</a>
									</div>
								<?php } ?>				
							</div>
						</div>
					</div>
				</div>
			</div>			

				
		<?php 
		break;		
		case '2':
		?>
			<div class="em-service2 sright all_color_service">
				<div class="em_service_content ">
					<div class="em_single_service_text <?php echo $witrshowdata['witr_Select_whi']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
						<div class="service_top_image">
							<!-- image -->
							<?php if(isset($witrshowdata['witr_top_image']['url']) && ! empty($witrshowdata['witr_top_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_top_image']['url'];?>" alt="" />
							<?php } ?>			
						</div>
						<div class="text_box">
							<div class="service_top_text">
								<div class="em-service-icon all_icon_color">
									<!-- icon -->
									<?php if ( $is_new || $migrated ) :
										Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
									else : ?>
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									<?php endif; ?>					
									<!-- custom icon -->
									<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
										<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
									<?php } ?>				
									<!-- image -->
									<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
										<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
									<?php } ?>				
								</div>			
							</div>
							<div class="em-service-inner">
								<div class="em-service-title ">
									<!-- title -->
									<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
									<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
										<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
									<?php }else{ ?>
									<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
									<?php }	?>
									<?php } ?>
									
								</div>
								<!-- content -->
								<div class="em-service-desc">
									<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
										<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
									<?php } ?>
								</div>
								<!-- button -->
								<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
									<div class="service-btn">
									<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
										<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
											<!-- custom icon -->
											<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
												<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
											<?php } ?>
										<?php }?>									
									</a>
									</div>
								<?php } ?>			
							</div>
						</div>
					</div>
				</div>
			</div>					
		<?php 
		break;								
		default:
		?>
		
			<div class="service-item all_color_service <?php echo $witrshowdata['witr_Select_whi']; ?> text-<?php echo $witrshowdata['witr_text_ltc']; ?>  <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
				<div class="service_top_image">
					<!-- image -->
					<?php if(isset($witrshowdata['witr_top_image']['url']) && ! empty($witrshowdata['witr_top_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_top_image']['url'];?>" alt="" />
					<?php } ?>			
				</div>
				<div class="text_box all_icon_color">
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
					<?php endif; ?>
					<!-- custom icon -->
					<?php if(isset($witrshowdata['witr_service_custom']) && ! empty($witrshowdata['witr_service_custom'])){?>	
						<i class="<?php echo $witrshowdata['witr_service_custom']; ?>"></i>
					<?php } ?>				
					<!-- image -->
					<?php if(isset($witrshowdata['witr_service_image']['url']) && ! empty($witrshowdata['witr_service_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_service_image']['url'];?>" alt="" />
					<?php } ?>	
					<!-- title -->
					<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
					<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_service_title']; ?> </h3>
					<?php }	?>
					<?php } ?>
					<!-- content -->
					<?php if(isset($witrshowdata['witr_service_content']) && ! empty($witrshowdata['witr_service_content'])){?>
						<p><?php echo $witrshowdata['witr_service_content']; ?> </p>		
					<?php } ?>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_service_button']) && ! empty($witrshowdata['witr_service_button'])){?>
						<div class="service-btn">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service_button']; ?>
							<?php if($witrshowdata['witr_show_icon_b']=='yes'){ ?> 
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_custom_icon_b']) && ! empty($witrshowdata['witr_custom_icon_b'])){?>	
									<span class="<?php echo $witrshowdata['witr_custom_icon_b']; ?>"></span>
								<?php } ?>
							<?php }?>	
						</a>
						</div>
					<?php } ?>				
				</div> <!-- text_box -->							
			</div> <!-- service item -->							
 		<?php 
		
		break;
		
	}
	

	
	
	


    } /* function end */
	


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Service() );
