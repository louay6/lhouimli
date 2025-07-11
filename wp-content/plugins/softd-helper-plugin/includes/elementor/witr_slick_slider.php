<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Slick_slider extends Widget_Base {

    public function get_name() {
        return 'witr_slick_slider';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Slick Slider', 'softd' );
    }

    public function get_icon() {
        return 'eicon-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
		

			
			
			/* === witr_slick title start === */
			$this->start_controls_section(
				'witr_option_slick_title',
				[
					'label' => esc_html__( 'Witr Slick Slider Item', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/*  Top content width */
			$this->add_responsive_control(
				'witr_content_width',
				[
					'label' => esc_html__( 'Container width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'description' => esc_html__( 'When Container Full-Width Then Work to, Or When Container Boxed Fild Value Blank To', 'softd' ),					
					'default' => [
						'unit' => '%',
					],
					'tablet_default' => [
						'unit' => '%',
					],
					'mobile_default' => [
						'unit' => '%',
					],					
					'size_units' => ['%','px'],
					'range' => [
						'%' => [
							'min' => 0,
							'max' => 100,
						],
						'px' => [
							'min' => 0,
							'max' => 1920,
						],	
					],
					'selectors' => [
						'{{WRAPPER}} .witr_containers' => 'width: {{SIZE}}{{UNIT}};',
					],
					
				]
			);


			/* slick slider style check  witr_style_slick */
				
				$repeater = new Repeater();
				$repeater->add_control(
					'witr_style_slick',
					[
						'label' => esc_html__( 'Slick Slider Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'default' => '1',
						'options' => [
							'1' => esc_html__( 'Text Center', 'softd' ),
							'2' => esc_html__( 'Text Right', 'softd' ),
							'3' => esc_html__( 'Text Left', 'softd' ),
						],
						
					]
				);					
					$repeater->add_control(
						'witr_bg_image',
						[
							'label' => esc_html__( 'Choose BG Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],
						]
					);
					/* witr_phead_ */
					$repeater->add_control(
						'witr_phead_',
						[
							'label' => esc_html__( 'Use slider BG image and set size ', 'softd' ),
							'type' => Controls_Manager::HEADING,
							'separator' => 'before',
						]
					);

					/* witr_posimg_style */
					$repeater->add_responsive_control(
						'witr_posimg_style',
						[
							'label' => esc_html__( 'Position', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'' => esc_html__( 'Default', 'softd' ),
								'center center' => esc_html__( 'Center Center', 'softd' ),
								'center left' => esc_html__( 'Center Left', 'softd' ),
								'center right' => esc_html__( 'Center Right', 'softd' ),
								'top center' => esc_html__( 'Top Center', 'softd' ),
								'top left' => esc_html__( 'Top Left', 'softd' ),
								'top right' => esc_html__( 'Top Right', 'softd' ),
								'bottom center' => esc_html__( 'Bottom Center', 'softd' ),
								'bottom left' => esc_html__( 'Bottom Left', 'softd' ),
								'bottom right' => esc_html__( 'Bottom Right', 'softd' ),
							],							
							'selectors' => [
								'{{WRAPPER}} .witr_ds_content' => 'background-position: {{VALUE}};',
							],							
						]
					);
					/* witr_attachment_style */
					$repeater->add_control(
						'witr_attachment_style',
						[
							'label' => esc_html__( 'Attachment', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'' => esc_html__( 'Default', 'softd' ),
								'scroll' => esc_html__( 'Scroll', 'softd' ),
								'fixed' => esc_html__( 'Fixed', 'softd' ),
							],
							'selectors' => [
								'{{WRAPPER}} .witr_ds_content' => 'background-attachment: {{VALUE}};',
							],							
						]
					);
					/* witr_repeat_style */
					$repeater->add_responsive_control(
						'witr_repeat_style',
						[
							'label' => esc_html__( 'Repeat', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'' => esc_html__( 'Default', 'softd' ),
								'no-repeat' => esc_html__( 'no-Repeat', 'softd' ),
								'repeat' => esc_html__( 'Repeat', 'softd' ),
								'repeat-x' => esc_html__( 'Repeat-x', 'softd' ),
								'repeat-y' => esc_html__( 'Repeat-y', 'softd' ),
							],
							'selectors' => [
								'{{WRAPPER}} .witr_ds_content' => 'background-repeat: {{VALUE}};',
							],							
						]
					);

					/* witr_size_style */
					$repeater->add_responsive_control(
						'witr_size_style',
						[
							'label' => esc_html__( 'Size', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'' => esc_html__( 'Default', 'softd' ),
								'auto' => esc_html__( 'Auto', 'softd' ),
								'cover' => esc_html__( 'Cover', 'softd' ),
								'contain' => esc_html__( 'Contain', 'softd' ),
							],
							'selectors' => [
								'{{WRAPPER}} .witr_ds_content' => 'background-size: {{VALUE}};',
							],							
						]
					);
					
				/* main slick witr_slick_title1 */	
					$repeater->add_control(
						'witr_slick_title1',
						[
							'label' => esc_html__( 'Title Top', 'softd' ),
							'separator' => 'before',
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title top, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' => esc_html__( 'Add Your Top Title Here', 'softd' ),
							'placeholder' => esc_attr__( 'Type your slick title here', 'softd' ),						
						]
					);				
				/* main slick witr_slick_title2 */	
					$repeater->add_control(
						'witr_slick_title2',
						[
							'label' => esc_html__( 'Title Middle', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator' => 'before',
							'description' => esc_html__( 'Not use title middle, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' => esc_html__( 'Add Your Middle Title Here', 'softd' ),
							'placeholder' => esc_attr__( 'Type your slick title here', 'softd' ),						
						]
					);					
					/* witr_slick_title3 */	
					$repeater->add_control(
						'witr_slick_title3',
						[
							'label' => esc_html__( 'Title Bottom', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator' => 'before',
							'description' => esc_html__( 'Not use title bottom, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' =>"",
							'placeholder' => esc_attr__( 'Type your slick title here', 'softd' ),						
						]
					);					
					/* witr_pragraph */	
					$repeater->add_control(
						'witr_pragraph',
						[
							'label' => esc_html__( 'Slider Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator' => 'before',
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.', 'softd' ),
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);
					
					/* witr_show_list */
					$repeater->add_control(
						'witr_show_list',
						[
							'label' => esc_html__( 'Show List', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'separator' => 'before',
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),							
							'return_value' => 'yes',
							'default' => 'yes',
							
						]
					);										
					/* witr_text_list	*/
					$repeater->add_control(
						'witr_text_list',
						[
							'label' => esc_html__( 'List Box', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( '<ul><li><a href="#"><i class="fas fa-check"></i>example list 1</a></li><li><a href="#"><i class="fas fa-check"></i>example list 1</a></li></ul> OR <ul><li><i class="fas fa-check"></i>example list 1</li><li><i class="fas fa-check"></i>example list 1</li></ul>', 'softd' ),
							'placeholder' => esc_attr__( 'Type your list here', 'softd' ),
							'default' => __( '<ul><li><a href="#"><i class="fas fa-check"></i>example list 1</a></li><li><a href="#"><i class="fas fa-check"></i>example list 1</a></li></ul>', 'softd' ),														
							'condition' => [
								'witr_show_list' => 'yes',
							],							
						]
					);					
					

				/* witr_show_button witr_slick_button	*/
				$repeater->add_control(
					'witr_show_button',
					[
						'label' => esc_html__( 'Default Show button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);				
					$repeater->add_control(
						'witr_slick_button',
						[
							'label' => esc_html__( 'Button text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,							
							'default' => esc_html__( 'Contact Us', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
							'description' =>esc_html__('Type your button text here. It hidden when field blank. When Icon Use Ex-<i class="ti-arrow-right"></i>,Type Icofont - https://icofont.com/icons or Themify Icon - https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/v4.7.0/icons/ Icon name Filed here','softd'),
							'condition' => [
								'witr_show_button' => 'yes',
							],							
						]
					);
				/* main slick witr_button_link */	
					$repeater->add_control(
						'witr_button_link',
						[
							'label' => esc_html__( 'Button Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank.','softd'),
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
					/*  witr_service2_pluse	*/
					$repeater->add_control(
						'witr_button_pluse',
						[
							'label' => esc_html__( 'Button Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon - https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/v4.7.0/icons/ Icon name Filed here', 'softd' ),
							'default' => esc_html__( 'icofont-plus', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Button Icon Name here', 'softd' ),
							'condition' => [
								'witr_show_button' => 'yes',
							],							
						]
					);					
				/* witr_show_button witr_vshow_button witr_video_button	*/
				$repeater->add_control(
					'witr_vshow_button',
					[
						'label' => esc_html__( 'Video Show button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',														
					]
				);				
					$repeater->add_control(
						'witr_video_button',
						[
							'label' => esc_html__( 'Video Button Text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'separator' => 'before',
							'description' =>esc_html__('Insert button text And Icon Use <i class="fas fa-play"></i> Text Before,After. It hidden when field blank.','softd'),
							'default' => esc_html__( 'Watch Video', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
							'condition' => [
								'witr_vshow_button' => 'yes',
							],							
						]
					);
					$repeater->add_control(
						'witr_yvideo_linkhas',
						[
							'label' => esc_html__( 'Video Button Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank','softd'),
							'placeholder' => esc_attr__( '# Insert Your Link', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_vshow_button' => 'yes',

							],							
						]
					);					
				/* witr_show_button witr_yshow_button witr_yvideo_link	*/
				$repeater->add_control(
					'witr_yshow_button',
					[
						'label' => esc_html__( 'Show Youtube Link', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
						'condition' => [
							'witr_vshow_button' => 'yes',
						]						
					]
				);						
					$repeater->add_control(
						'witr_yvideo_link',
						[
							'label' => esc_html__( 'Youtube Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank. link ex- https://youtu.be/BS4TUd7FJSg','softd'),
							'placeholder' => esc_attr__( 'https://youtu.be/BS4TUd7FJSg', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://youtu.be/BS4TUd7FJSg',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_yshow_button' => 'yes',

							],							
						]
					);						
					/* main slick witr_vmshow_button witr_vmvideo_link */	
					$repeater->add_control(
						'witr_vmshow_button',
						[
							'label' => esc_html__( 'Show Vimo Link', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'separator' => 'before',
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'condition' => [
								'witr_vshow_button' => 'yes',
							]						
						]
					);						
					$repeater->add_control(
						'witr_vmvideo_link',
						[
							'label' => esc_html__( 'Vimo Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank. link ex- https://vimeo.com/235215203','softd'),
							'placeholder' => esc_attr__( 'https://vimeo.com/235215203', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://vimeo.com/235215203',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_vmshow_button' => 'yes',
							],							
						]
					);
					

					
				/*====== witr_show_Video 2 ====*/
				$repeater->add_control(
					'witr_vshow_button2',
					[
						'label' => esc_html__( ' Show Circle Video', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',														
					]
				);				
					$repeater->add_control(
						'witr_video_button2',
						[
							'label' => esc_html__( 'Video Text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'separator' => 'before',
							'description' =>esc_html__('Insert Video text. It hidden when field blank.','softd'),
							'default' => esc_html__( 'Play Video', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Video text here', 'softd' ),
							'condition' => [
								'witr_vshow_button2' => 'yes',
							],							
						]
					);
				/* witr_show_button witr_yshow_button witr_yvideo_link	*/
				$repeater->add_control(
					'witr_yshow_button2',
					[
						'label' => esc_html__( 'Show Youtube Link', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
						'condition' => [
							'witr_vshow_button2' => 'yes',
						]						
					]
				);						
					$repeater->add_control(
						'witr_yvideo_link2',
						[
							'label' => esc_html__( 'Youtube Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank. link ex- https://youtu.be/BS4TUd7FJSg','softd'),
							'placeholder' => esc_attr__( 'https://youtu.be/BS4TUd7FJSg', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://youtu.be/BS4TUd7FJSg',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_yshow_button2' => 'yes',

							],							
						]
					);						
					/* main slick witr_vmshow_button witr_vmvideo_link */	
					$repeater->add_control(
						'witr_vmshow_button2',
						[
							'label' => esc_html__( 'Show Vimo Link', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'separator' => 'before',
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'condition' => [
								'witr_vshow_button2' => 'yes',
							]						
						]
					);						
					$repeater->add_control(
						'witr_vmvideo_link2',
						[
							'label' => esc_html__( 'Vimo Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank. link ex- https://vimeo.com/235215203','softd'),
							'placeholder' => esc_attr__( 'https://vimeo.com/235215203', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://vimeo.com/235215203',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_vmshow_button2' => 'yes',
							],							
						]
					);


					
					$repeater->add_control(
						'witr_sitem_image',
						[
							'label' => esc_html__( 'Choose single Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'separator' => 'before',
							'default' => [''],
							'condition' => [
								'witr_style_slick' => ['2','3'],
							],
						]
					);						
					$this->add_control(
						'wittr_slist',
						[
							'label' => esc_html__( 'SLIDER ITEM LIST', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'fields' => $repeater->get_controls(),
							'separator'=>'before',
							'default' => [
								[
									'witr_slick_title1' => esc_html__( 'Add Your Top Title Here', 'softd' ),
									'witr_slick_title2' => esc_html__( 'Add Your Middle Title Here', 'softd' ),
									'witr_pragraph' => esc_html__( 'Item content. Click the edit button to change this text.', 'softd' ),
								],
								[
									'witr_slick_title1' => esc_html__( 'Add Your Top Title Here', 'softd' ),
									'witr_slick_title2' => esc_html__( 'Add Your Middle Title Here', 'softd' ),
									'witr_pragraph' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore', 'softd' ),
								],
							],
							'title_field' => '{{{ witr_slick_title1 }}}',
						]
					);					
				
				

				
				
				

			$this->end_controls_section();
			/* === end w_slick title === */

			/* === witr_Carousel start === */
			$this->start_controls_section(
				'witr_field_display_image',
				[
					'label' => esc_html__( 'Slick Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
				
				/* witr_slides_to_show */ 		
				$this->add_control(
					'witr_slides_to_show',
					[
						'label' => esc_html__( 'Slides to Show', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 100,
						'step' => 1,
						'default' => 1,
					]
				);				
				/*  witr_c_slidestoScroll */			
				$this->add_control(
					'witr_c_slidestoScroll',
					[
						'label' => esc_html__( 'slidestoScroll', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 10,
						'step' => 1,
						'default' => 1,
					]
				);
				/* image_infinite */
				$this->add_control(
					'witr_c_infinite',
					[
						'label' => esc_html__( 'Set Loop', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'true',
						'options' => [
							'true' => esc_html__( 'True', 'softd' ),
							'false' => esc_html__( 'False', 'softd' ),
						],
					]
				);
				/* witr_c_autoplay */
				$this->add_control(
					'witr_c_autoplay',
					[
						'label' => esc_html__( 'Autoplay', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'true',
						'options' => [
							'true' => esc_html__( 'True', 'softd' ),
							'false' => esc_html__( 'False', 'softd' ),
						],
					]
				);					
				/*  witr_c_autoplaySpeed */			
				$this->add_control(
					'witr_c_autoplaySpeed',
					[
						'label' => esc_html__( 'autoplaySpeed', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Type your autoplaySpeed Number here, ex-1000ms=1s.', 'softd' ),
						'default' => 3000,
					]
				);
				/*  witr_c_speed */			
				$this->add_control(
					'witr_c_speed',
					[
						'label' => esc_html__( 'speed', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Type your Speed Number here, ex-1000ms=1s.', 'softd' ),
						'default' => 1000,
					]
				);

				/* witr_c_arrows */
				$this->add_control(
					'witr_c_arrows',
					[
						'label' => esc_html__( 'arrows', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'true',
						'options' => [
							'true' => esc_html__( 'True', 'softd' ),
							'false' => esc_html__( 'False', 'softd' ),
						],
					]
				);	
				/* witr_c_dots */
				$this->add_control(
					'witr_c_dots',
					[
						'label' => esc_html__( 'dots', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'true',
						'options' => [
							'true' => esc_html__( 'True', 'softd' ),
							'false' => esc_html__( 'False', 'softd' ),
						],
					]
				);	
				/*  witr_c_res1 */			
				$this->add_control(
					'witr_c_res1',
					[
						'label' => esc_html__( 'Desktop', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 10,
						'step' => 1,
						'default' => 1,
					]
				);					
				/*  witr_c_res2 */			
				$this->add_control(
					'witr_c_res2',
					[
						'label' => esc_html__( 'Tablet', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 8,
						'step' => 1,
						'default' =>1,
					]
				);				
				/*  witr_c_res3 */			
				$this->add_control(
					'witr_c_res3',
					[
						'label' => esc_html__( 'Mobile', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 5,
						'step' => 1,
						'default' => 1,
					]
				);								
				/* witr_unicid_c */	
					$this->add_control(
						'witr_unicid_c',
						[
							'label' => esc_html__( 'Use Uniqe ID', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Please use a unic ID here, ex- wittr_1.', 'softd' ),
							'default' => 'id1',
							'placeholder' => esc_attr__( 'Type your ID here', 'softd' ),						
						]
					);				
				
												
			
			$this->end_controls_section();
			/* === end witr_image ===  */
			
			/* === witr_slick social start ==== */
			$this->start_controls_section(
				'witr_field_slick_social',
				[
					'label' => esc_html__( 'Witr Social Icon Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,					
				]
			);	
				/* witr_show_Icon */
				$this->add_control(
					'witr_show_Icon',
					[
						'label' => esc_html__( 'Show Icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);
					/* witr_icon_1 */	
					$this->add_control(
						'witr_icon_1',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet , Icon Name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'default' => 'icofont-facebook',
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);				
					/* main swiper witr_swiper_fb */	
					$this->add_control(
						'witr_swiper_fb',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],							
							'condition' => [
								'witr_show_Icon' => 'yes',
							],												
						]
					);
					/* witr_icon_2 */	
					$this->add_control(
						'witr_icon_2',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon or Themify Icon or Fontawesome Icon , Icon name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'default' => 'icofont-twitter',
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);					
				/* main swiper witr_swiper_tw */	
					$this->add_control(
						'witr_swiper_tw',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);
					/* witr_icon_3 */	
					$this->add_control(
						'witr_icon_3',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon or Themify Icon or Fontawesome Icon , Icon name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'default' => 'icofont-instagram',
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);					
					/* main swiper witr_swiper_gp */	
					$this->add_control(
						'witr_swiper_gp',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);
					/* witr_icon_4 */	
					$this->add_control(
						'witr_icon_4',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon or Themify Icon or Fontawesome Icon , Icon name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'default' => 'icofont-dribble',
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);					
				/* main swiper witr_swiper_lk */	
					$this->add_control(
						'witr_swiper_lk',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);
					/* witr_icon_5 */	
					$this->add_control(
						'witr_icon_5',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon or Themify Icon or Fontawesome Icon , Icon name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);					
				/* main swiper witr_swiper_pi */	
					$this->add_control(
						'witr_swiper_pi',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],												
						]
					);
					/* witr_icon_6 */	
					$this->add_control(
						'witr_icon_6',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon or Themify Icon or Fontawesome Icon , Icon name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);					
				/* main swiper witr_swiper_in */	
					$this->add_control(
						'witr_swiper_in',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],												
						]
					);
					/* witr_icon_7 */	
					$this->add_control(
						'witr_icon_7',
						[
							'label' => esc_html__( 'Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont Icon or Themify Icon or Fontawesome Icon , Icon name here,example - icofont-facebook , fa fa-facebook , ti-facebook ', 'softd' ),
							'placeholder' => esc_attr__( 'Type Icon Name', 'softd' ),
							'separator' => 'before',
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
						]
					);					
				/* main swiper witr_swiper_us*/	
					$this->add_control(
						'witr_swiper_us',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert Icon link. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],												
						]
					);				
					
			
			$this->end_controls_section();
			/* === end witr_slick socila === */		

			/* === Witr Slider Height start === */
			$this->start_controls_section(
				'witr_sliders_height',
				[
					'label' => esc_html__( 'Witr Slider Height/Opacity Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);			
			
				/*  Slider Heigh */
				$this->add_responsive_control(
					'witr_slider_height',
					[
						'label' => esc_html__( 'Slider Heigh', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 2000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_height' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* Slider Opacity HEADING */
				$this->add_control(
					'witr_opaci_color',
					[
						'label' => esc_html__( 'Slider Opacity BG Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);				
				/* Slider Opacity background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_sopacity_background',
						'label' => esc_html__( 'Slider Opacity BG', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_ds_content::before',
					]
				);

			
			$this->end_controls_section();
			/* ===  Witr Slider Height End === */			
			
			
			
			
			

	   /* ==============================================================================================================
										START TO STYLE
		================================================================================================================ */
		

			
		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( 'Top Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_title_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_thover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1:hover' => 'color: {{VALUE}}',
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
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .witr_slick_content h1',
				]
			);						
			/*  Top Tittle width */
			$this->add_responsive_control(
				'witr_top_width',
				[
					'label' => esc_html__( 'width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'unit' => '%',
					],
					'tablet_default' => [
						'unit' => '%',
					],
					'mobile_default' => [
						'unit' => '%',
					],					
					'size_units' => [ '%', 'px', 'em' ],
					'range' => [
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin',
				[
					'label' => esc_html__( ' Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'allowed_dimensions' => 'vertical',
					'placeholder' => [
					'top' => '',
					'right' => 'auto',
					'bottom' => '',
					'left' => 'auto',
					],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title top style ====*/
		

		/*=== start Middle top style  ====*/

		$this->start_controls_section(
			'witr_style_option2',
			[
				'label' => esc_html__( 'Middle Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_title_color2',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h2' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_thover_color2',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h2:hover' => 'color: {{VALUE}}',
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
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_slick_content h2',
				]
			);
			/*  Middle Tittle width */
			$this->add_responsive_control(
				'witr_middle_width',
				[
					'label' => esc_html__( 'width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'unit' => '%',
					],
					'tablet_default' => [
						'unit' => '%',
					],
					'mobile_default' => [
						'unit' => '%',
					],					
					'size_units' => [ '%', 'px', 'em' ],
					'range' => [
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h2' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin2',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'allowed_dimensions' => 'vertical',
					'placeholder' => [
					'top' => '',
					'right' => 'auto',
					'bottom' => '',
					'left' => 'auto',
					],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h2' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding2',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  Middle title style  ====*/
		
	/*=== start Bottom Title style  ====*/

		$this->start_controls_section(
			'witr_style_option3',
			[
				'label' => esc_html__( 'Bottom Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_title_color3',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h3' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_thover_color3',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h2:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/*  Bottom Tittle width */
			$this->add_responsive_control(
				'witr_bottom_width',
				[
					'label' => esc_html__( 'width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'unit' => '%',
					],
					'tablet_default' => [
						'unit' => '%',
					],
					'mobile_default' => [
						'unit' => '%',
					],					
					'size_units' => [ '%', 'px', 'em' ],
					'range' => [
						'%' => [
							'min' => 0,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h3' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_color3',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_slick_content h3',
				]
			);									
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin3',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'allowed_dimensions' => 'vertical',
					'placeholder' => [
					'top' => '',
					'right' => 'auto',
					'bottom' => '',
					'left' => 'auto',
					],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h3' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding3',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  Bottom style  ====*/		
		
		/*=== start witr_heighlight style ====*/

		$this->start_controls_section(
			'witr_style_optionh',
			[
				'label' => esc_html__( 'Heighlight Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_htitle_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1 span, {{WRAPPER}} .witr_slick_content h2 span, {{WRAPPER}} .witr_slick_content h3 span' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_hhover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1 span:hover, {{WRAPPER}} .witr_slick_content h2 span:hover, {{WRAPPER}} .witr_slick_content h3 span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_htpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .witr_slick_content h1 span, {{WRAPPER}} .witr_slick_content h2 span, {{WRAPPER}} .witr_slick_content h3 span',
				]
			);		
			
			/* margin */
			$this->add_responsive_control(
				'witr_heighlight_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1 span, {{WRAPPER}} .witr_slick_content h2 span, {{WRAPPER}} .witr_slick_content h3 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_heighlight_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_slick_content h1 span, {{WRAPPER}} .witr_slick_content h2 span, {{WRAPPER}} .witr_slick_content h3 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_heighlight style ====*/		
		
		
		
		
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
							'{{WRAPPER}} .witr_slick_content p' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_slick_content p',
					]
				);		
				/*  content width */
				$this->add_responsive_control(
					'witr_contenth_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],						
						'size_units' => [ '%', 'px', 'em' ],
						'range' => [
							'%' => [
								'min' => 0,
								'max' => 100,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content p' => 'width: {{SIZE}}{{UNIT}};',
						],						
					]
				);
				/* content margin */
				$this->add_responsive_control(
					'witr_content_margin',
					[
						'label' => esc_html__( 'Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'allowed_dimensions' => 'vertical',
						'placeholder' => [
						'top' => '',
						'right' => 'auto',
						'bottom' => '',
						'left' => 'auto',
						],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content p' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_slick_content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr content style ====*/			

		
		/*=== start witr List content style ====*/		
		 $this->start_controls_section(
			'witr_option_list_content',
			[
				'label' => esc_html__( 'List Icon & Text Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
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
				'selectors' => [
					'{{WRAPPER}} .witr_slick_list ul li i' => 'color: {{VALUE}}',
				],
			]
		);
		/*  list icon font size */
		$this->add_responsive_control(
			'witr_iconl_size',
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
					'{{WRAPPER}} .witr_slick_list ul li i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		/* Icon margin */
		$this->add_responsive_control(
			'witr_contentl_margin',
			[
				'label' => esc_html__( ' Margin', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .witr_slick_list ul li i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		/* Icon padding */
		$this->add_responsive_control(
			'witr_contentl_padding',
			[
				'label' => esc_html__( ' Padding', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .witr_slick_list ul li i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);		
		
		$this->end_controls_tab();
		/*=== end list normal style ====*/
	
			/*=== start icon hover style ====*/
			$this->start_controls_tab(
				'list_colorl_hover',
				[
					'label' => esc_html__( 'text ', 'softd' ),
				]
			);		
				/*  witr_layout_select */
				$this->add_control(
					'witr_layout_select',
					[
						'label' => esc_html__( 'Text Layout', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator' => 'before',					
						'options' => [
							'default' => esc_html__( 'Default', 'softd' ),
							'block' => esc_html__( 'Block', 'softd' ),
							'inline-block' => esc_html__( 'Inline Block', 'softd' ),
							'inline' => esc_html__( 'Inline', 'softd' ),
							'grid' => esc_html__( 'grid', 'softd' ),
							'none' => esc_html__( 'None', 'softd' ),
						],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_list ul li' => 'display: {{VALUE}}',
						],						
					]
				);
				/* list text color */
				$this->add_control(
					'witr_list_color',
					[
						'label' => esc_html__( ' Text', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'global' => [
							'default' => Global_Colors::COLOR_TEXT,
						],						
						'selectors' => [
							'{{WRAPPER}} .witr_slick_list ul li,{{WRAPPER}} .witr_slick_list ul li a' => 'color: {{VALUE}}',
						],
					]
				);
				/* list text hover color */
				$this->add_control(
					'witr_listh_color',
					[
						'label' => esc_html__( ' Text Hover', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_slick_list ul li:hover,{{WRAPPER}} .witr_slick_list ul li a:hover' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_slick_list ul li,{{WRAPPER}} .witr_slick_list ul li a',
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
							'{{WRAPPER}} .witr_slick_list ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_slick_list ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);


				$this->end_controls_tab();
				/*=== end text hover style ====*/
				
		$this->end_controls_tabs();
		/*=== end text_tabs style ====*/
	$this->end_controls_section();
	/*=== end witr_list style ====*/
			
		
			/*=== start witr button style ====*/
			$this->start_controls_section(
				'witr_style_option_button',
				[
					'label' => esc_html__( 'Button Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,					
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
								'label' => esc_html__( 'Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'global' => [
									'default' => Global_Colors::COLOR_ACCENT,
								],								
								'selectors' => [
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'color: {{VALUE}}',
								],
							]
						);				
						/* Button background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_background',
								'label' => esc_html__( 'button Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .witr_slick_content .witr_btn',
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
								'selector' => '{{WRAPPER}} .witr_slick_content .witr_btn',
							]
						);	

						/* witr_border_style */
						$this->add_control(
							'witr_border_btn_style',
							[
								'label' => esc_html__( 'Border Style', 'softd' ),
								'type' => Controls_Manager::SELECT,
								'options' => [
									'none' => esc_html__( 'none', 'softd' ),
									'solid' => esc_html__( 'Solid', 'softd' ),
									'double' => esc_html__( 'Double', 'softd' ),
									'dotted' => esc_html__( 'Dotted', 'softd' ),
									'dashed' => esc_html__( 'Dashed', 'softd' ),
									'default' => esc_html__( 'Default', 'softd' ),
								],
								'default' => 'default',
								'selectors' => [
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'border-style: {{VALUE}}',
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
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'border-color: {{VALUE}}',
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
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
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
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_slick_content .witr_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
					

					$this->end_controls_tab();
					/*=== end button normal style ====*/
				
						/*=== start button hover style ====*/
						$this->start_controls_tab(
							'witr_button_colors_hover',
							[
								'label' => esc_html__( 'Normal Hover', 'softd' ),
							]
						);

						/* hover_color */
						$this->add_control(
							'witr_button_hover_color',
							[
								'label' => esc_html__( 'Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .witr_slick_content .witr_btn:hover,{{WRAPPER}} .witr_slick_content form button:hover,{{WRAPPER}} .witr_video_butns:hover' => 'color: {{VALUE}}',
								],
							]
						);
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,								
								'selectors' => [
									'{{WRAPPER}} .witr_slick_content .witr_btn:hover,{{WRAPPER}} .witr_slick_content form button:hover,{{WRAPPER}} .witr_video_butns:hover' => 'border-color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .witr_slick_content .witr_btn:hover',
							]
						);

						
						$this->end_controls_tab();
						/*=== end button hover style ====*/

						
					/*=== start witr_button_colors_active style ====*/
					$this->start_controls_tab(
						'witr_button_colors_active',
						[
							'label' => esc_html__( 'Border Button', 'softd' ),							
						]
					);						
						
						/* color */
						$this->add_control(
							'witr_button_act_color',
							[
								'label' => esc_html__( ' Text Color', 'softd' ),
								'type' => Controls_Manager::COLOR,								
								'selectors' => [
									'{{WRAPPER}} .witr_slick_content .witr_btn.active' => 'color: {{VALUE}}',
								],
							]
						);					
						/* Button background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_act_background',
								'label' => esc_html__( 'button Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .witr_slick_content .witr_btn.active',
							]
						);					
						/* witr_border_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_border_act_style',
								'label' => esc_html__( 'Icon Border', 'softd' ),
								'default' => 'no',							
								'selector' => '{{WRAPPER}} .witr_slick_content .witr_btn.active',
							]
						);						
						
						
					$this->end_controls_tab();
					/*=== end button active style ====*/

					/*=== start witr_button_colors_active style ====*/
					$this->start_controls_tab(
						'witr_button_colors_activeh',
						[
							'label' => esc_html__( 'Border Hover', 'softd' ),							
						]
					);

					/* color */
					$this->add_control(
						'witr_button_acth_color',
						[
							'label' => esc_html__( ' Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .witr_slick_content .witr_btn.active:hover' => 'color: {{VALUE}}',
							],
						]
					);					
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_button_acth_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .witr_slick_content .witr_btn.active:hover',
						]
					);					
						/* border_hover_color */
						$this->add_control(
							'witr_borderact_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,							
								'selectors' => [
									'{{WRAPPER}} .witr_slick_content .witr_btn.active:hover' => 'border-color: {{VALUE}}',
								],
							]
						);					

					$this->end_controls_tab();
					/*=== end button active Hover style ====*/						
						
						
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 
			 $this->end_controls_section();
			/*=== end  witr button style ====*/			




		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_span_option',
			[
				'label' => esc_html__( ' Button Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'span_colors' );
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colors_span',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				/* Icon Color */
				$this->add_control(
					'witr_span_color',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'color: {{VALUE}}',
						],					
					]
				);
				
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_span_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .slick_pluse_btn span',
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'icon_size_span',
					[
						'label' => esc_html__( ' Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width_span',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_icon_height_span',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height_span',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align_span',
					[
						'label' => esc_html__( 'Text Align', 'softd' ),
						'type' => Controls_Manager::CHOOSE,
						'default' => 'center',
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
							'{{WRAPPER}} .slick_pluse_btn span' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borde_span',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .slick_pluse_btn span',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_border_radius_span',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow_span',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .slick_pluse_btn span',
					]
				);					
				/*  Rotate */
				$this->add_responsive_control(
					'witr_rotate_span',
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
							'{{WRAPPER}} .slick_pluse_btn' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);				
				
				/* witr_position_style */
				$this->add_responsive_control(
					'witr_position_style_span',
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
							'{{WRAPPER}} .slick_pluse_btn' => 'position: {{VALUE}};',
						],							
					]
				);
				/* witr_icon_top */
				$this->add_responsive_control(
					'witr_icon_top_span',
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
							'witr_position_style_span' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/* witr_icon_left */
				$this->add_responsive_control(
					'witr_icon_left_span',
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
							'witr_position_style_span' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);				
				/* icon margin */
				$this->add_responsive_control(
					'witr_icon_margin_span',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_icon_padding_span',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .slick_pluse_btn span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
			
					/*=== start icon hover style ====*/
					$this->start_controls_tab(
						'witr_icon_span_hover',
						[
							'label' => esc_html__( 'Icon Hover', 'softd' ),
						]
					);
					/*  primary hover color */
					$this->add_control(
						'witr_hover_span_color',
						[
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .slick_pluse_btn span:hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_icon_span',
							'label' => esc_html__( ' Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .slick_pluse_btn span:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color_span',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .slick_pluse_btn span:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					

					$this->end_controls_tab();
					/*=== end icon hover style ====*/
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon style ====*/
			

			/*=== start witr_icon style ====*/
			$this->start_controls_section(
				'section_style_icon',
				[
					'label' => esc_html__( 'Social Icon Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_show_Icon' => 'yes'
					],	
				]
			);						
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'icon_colors' );
			
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'icon_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
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
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'color: {{VALUE}}',
						],
						
					]
				);
								
				/*  icon font size */
				$this->add_responsive_control(
					'witr_icon_size',
					[
						'label' => esc_html__( 'Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'rem', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
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
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* witr_border_style */
				$this->add_control(
					'witr_border_style',
					[
						'label' => esc_html__( 'Border Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'none' => esc_html__( 'None', 'softd' ),
							'solid' => esc_html__( 'Solid', 'softd' ),
							'double' => esc_html__( 'Double', 'softd' ),
							'dotted' => esc_html__( 'Dotted', 'softd' ),
							'dashed' => esc_html__( 'Dashed', 'softd' ),
							'default' => esc_html__( 'Default', 'softd' ),
						],
						'default' => 'default',
						'selectors' => [	
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				$this->add_control(
					'witr_border',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_border_style' => ['solid','double','dotted','dashed','default'],
						],						
					]
				);
				/* border_color */
				$this->add_control(
					'witr_border_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,						
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_style' => ['solid','double','dotted','dashed','default'],
						],						
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
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_border_style' => ['solid','double','dotted','dashed','default'],
						],						
					]
				);
					
				/*  witr_heading */
				$this->add_control(
					'witr_hidden_icon',
					[
						'label' => esc_html__( 'Icon Background Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'default' => 'heading',							
					]
				);				
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_icons_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_slick_content_icon a i',
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_slick_content_icon a i',
					]
				);							
				/* icon margin */
				$this->add_responsive_control(
					'witr_icon_margin',
					[
						'label' => esc_html__( 'Icon Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_icon_padding',
					[
						'label' => esc_html__( 'Icon Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_slick_content_icon a i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
			
				$this->end_controls_tab();
				/*=== end icon normal style ====*/
			
					/*=== start icon hover style ====*/
					$this->start_controls_tab(
						'icon_colors_hover',
						[
							'label' => esc_html__( 'Icon Hover', 'softd' ),
						]
					);
					/*  primary hover color */
					$this->add_control(
						'witr_hover_primary_color',
						[
							'label' => esc_html__( 'Primary Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .witr_slick_content_icon a i:hover' => 'color: {{VALUE}}',
							],
						]
					);
				/*  witr_heading */
				$this->add_control(
					'witr_hidden_iconh',
					[
						'label' => esc_html__( 'Icon Hover Background Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'default' => 'heading',							
					]
				);					
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hovet_icon',
							'label' => esc_html__( 'Icon Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .witr_slick_content_icon a i:hover',
						]
					);					
										
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();

		/*=== end witr_icon style ====*/
		
		
			
		/*=== start witr_icon_Button style ====*/
		$this->start_controls_section(
			'section_style_icon_button',
			[
				'label' => esc_html__( 'Circle Video Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'video_icon' );
			
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
							'{{WRAPPER}} .witr_video_btn i' => 'color: {{VALUE}}',
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
							'{{WRAPPER}} .witr_video_btn i' => 'font-size: {{SIZE}}{{UNIT}};',
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
						'selector' => '{{WRAPPER}} .witr_video_btn i,{{WRAPPER}} .witr_video_btn i::after',
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
							'{{WRAPPER}} .witr_video_btn i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_video_btn i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_video_btn i' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_video_btn i' => 'text-align: {{VALUE}}',
						],
					]
				);
				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_video_btn i',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_borderb_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_video_btn i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_boxb_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_video_btn i',
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
							'{{WRAPPER}} .witr_video_btn i' => 'transform: rotate({{SIZE}}{{UNIT}});',
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
							'{{WRAPPER}} .witr_video_btn i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_video_btn i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
		
				/*=== start icon hover style ====*/
				$this->start_controls_tab(
					'witr_icon_colorsb_hover',
					[
						'label' => esc_html__( 'Icons Hover', 'softd' ),
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
								'{{WRAPPER}} .witr_video_btn i:hover ' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_video_btn i:hover',
						]
					);					
					/* witr_border_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_borderhob',
							'label' => esc_html__( 'Border', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .witr_video_btn i:hover',
						]
					);					
					$this->end_controls_tab();
					/*=== end icon hover style ====*/

					/*=== start icon hover style ====*/
					$this->start_controls_tab(
						'witr_icon_colorsb_text',
						[
							'label' => esc_html__( 'Text', 'softd' ),
						]
					);
					
						/* color */
						$this->add_control(
							'witr_titlev_color',
							[
								'label' => esc_html__( 'Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .witr_video_btn' => 'color: {{VALUE}}',
								],
							]
						);
						/* hover color */
						$this->add_control(
							'witr_thoverv_color',
							[
								'label' => esc_html__( 'Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,					
								'selectors' => [
									'{{WRAPPER}} .witr_video_btn:hover' => 'color: {{VALUE}}',
								],
							]
						);
						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_ttpyv_color',
								'label' => esc_html__( 'Typography', 'softd' ),
								'selector' => '{{WRAPPER}} .witr_video_btn',
							]
						);											

					$this->end_controls_tabs();
					/*=== end icon_tabs style ====*/
			
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon Button style ====*/			
		
		
		
		
		
		
		
		
		
		
		/*=== start image option style ====*/

		$this->start_controls_section(
			'witr_style_s2image_option',
			[
				'label' => esc_html__( 'Left & Right Image Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);		 
						/* witr_top */
						$this->add_responsive_control(
							'witr_top',
							[
								'label' => esc_html__( 'Top', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 1000,
									],
									'%' => [
										'min' => -500,
										'max' => 1000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .em_slider_s2_image' => 'top: {{SIZE}}{{UNIT}};',
								],
							]
						);
						
						/* witr_left */
						$this->add_responsive_control(
							'witr_left',
							[
								'label' => esc_html__( 'Left', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									'%' => [
										'min' => -500,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .em_slider_s2_image' => 'left: {{SIZE}}{{UNIT}};',
								],
							]
						);
		
						/* witr_right */
						$this->add_responsive_control(
							'witr_right',
							[
								'label' => esc_html__( 'Right', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									'%' => [
										'min' => -500,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .em_slider_s2_image' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
						/* witr_bottom */
						$this->add_responsive_control(
							'witr_bottom',
							[
								'label' => esc_html__( 'Bottom', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									'%' => [
										'min' => -500,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .em_slider_s2_image' => 'bottom: {{SIZE}}{{UNIT}};',
								],
							]
						);

				/*  image width */
				$this->add_responsive_control(
					'witr_image_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'%' => [
								'min' => 0,
								'max' => 500,
							],
							'px' => [
								'min' => 0,
								'max' => 1920,
							],	
						],						
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],					

						'selectors' => [
							'{{WRAPPER}} .em_slider_s2_image img' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  image max width */
				$this->add_responsive_control(
					'witr_image_maxwidth',
					[
						'label' => esc_html__( 'Max width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'%' => [
								'min' => 0,
								'max' => 500,
							],
							'px' => [
								'min' => 0,
								'max' => 1920,
							],	
						],						
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],					

						'selectors' => [
							'{{WRAPPER}} .em_slider_s2_image img' => 'max-width: {{SIZE}}{{UNIT}};',
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
								'max' => 1500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .em_slider_s2_image img' => 'height: {{SIZE}}{{UNIT}};',
						],
					]			
				);						
						
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/	


			/*=== start witr Arrow style ====*/

			$this->start_controls_section(
				'witr_style_option_arrow',
				[
					'label' => esc_html__( 'Witr Arrow Options', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_c_arrows' => 'true',
					],					
				]
			);		 

		
				/*=== start Navigation_tabs style ====*/
				$this->start_controls_tabs( 'arrow_colors' );
				
					/*=== start Navigation_normal style ====*/
					$this->start_controls_tab(
						'witr_arrow_colors_normal',
						[
							'label' => esc_html__( 'Arrow', 'softd' ),
						]
					);
						/*  arrow width */
						$this->add_responsive_control(
							'witr_arrow_width',
							[
								'label' => esc_html__( 'width', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 500,
									],
									'%' => [
										'min' => 0,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'width: {{SIZE}}{{UNIT}};',
								],
							]
						);
						/*  arrow height */
						$this->add_responsive_control(
							'witr_arrow_height',
							[
								'label' => esc_html__( 'Height', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 500,
									],
									'%' => [
										'min' => 0,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'height: {{SIZE}}{{UNIT}};',
								],
							]
						);						
						/*  arrow Line height */
						$this->add_responsive_control(
							'witr_arrow_line_height',
							[
								'label' => esc_html__( 'Line Height', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 500,
									],
									'%' => [
										'min' => 0,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'line-height: {{SIZE}}{{UNIT}};',
								],
							]
						);						
						/*  arrow Opacity */
						$this->add_responsive_control(
							'witr_arrow_opacity',
							[
								'label' => esc_html__( 'Arrow Opacity', 'softd' ),
								'type' => Controls_Manager::TEXT,
								'selectors' => [
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'opacity: {{SIZE}}{{UNIT}};',
								],
							]
						);					
						/*  Arrow font size */
						$this->add_responsive_control(
							'witr_arrow_size',
							[
								'label' => esc_html__( 'Arrow Size', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', 'em' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 500,
									],
									'em' => [
										'min' => 0,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev:before,{{WRAPPER}} .slick-next:before' => 'font-size: {{SIZE}}{{UNIT}};',
								],
							]
						);					
						/* Arrow color */
						$this->add_control(
							'witr_arrow_color',
							[
								'label' => esc_html__( 'Arrow Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'selectors' => [
									'{{WRAPPER}} .slick-prev:before,{{WRAPPER}} .slick-next:before ' => 'color: {{VALUE}}',
								],
							]
						);				
	
						/* Arrow background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_arrow_background',
								'label' => esc_html__( 'Arrow Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next',
							]
						);
						/* Arrow Active color */
						$this->add_control(
							'witr__actv_arrow_color',
							[
								'label' => esc_html__( 'Arrow Active Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'selectors' => [
									'{{WRAPPER}} .slick-disabled.slick-prev:before,{{WRAPPER}} .slick-disabled.slick-next:before ' => 'color: {{VALUE}}',
								],
							]
						);	
						/*  witr_actv */
						$this->add_responsive_control(
							'witr_actv',
							[
								'label' => esc_html__( 'Active Background, Set Color And Click Arrow Button Than Show Active Color.', 'softd' ),
								'type' => Controls_Manager::HEADING,
							]
						);
						/* Arrow active background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_act_arrow_background',
								'label' => esc_html__( 'Arrow Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-prev.slick-disabled,{{WRAPPER}} .slick-next.slick-disabled,{{WRAPPER}} .slick-prev:focus,{{WRAPPER}} .slick-next:focus',
							]
						);		
						/* witr_arrowborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_arrowborder_style1',
								'label' => esc_html__( 'Arrow Border', 'softd' ),
								'selector' => '{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next',
							]
						);
						/* border_radius */
						$this->add_control(
							'witr_border_arrow_radius1',
							[
								'label' => esc_html__( 'Border Radius', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* witr_top */
						$this->add_responsive_control(
							'witr_top1',
							[
								'label' => esc_html__( 'Top', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 1000,
									],
									'%' => [
										'min' => -500,
										'max' => 1000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'top: {{SIZE}}{{UNIT}};',
								],
							]
						);
						
						/* witr_left */
						$this->add_responsive_control(
							'witr_left1',
							[
								'label' => esc_html__( 'Left', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									'%' => [
										'min' => -500,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev' => 'left: {{SIZE}}{{UNIT}};',
								],
							]
						);
		
						/* witr_right */
						$this->add_responsive_control(
							'witr_right1',
							[
								'label' => esc_html__( 'Right', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									'%' => [
										'min' => -500,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .slick-next' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
					

					$this->end_controls_tab();
					/*=== end Arrow normal style ====*/
				
						/*=== start Arrow hover style ====*/
						$this->start_controls_tab(
							'witr_arrow_colors_hover',
							[
								'label' => esc_html__( 'Arrow Hover', 'softd' ),
							]
						);
						/* Arrow_hover_color */
						$this->add_control(
							'witr_arrow_hover_color1',
							[
								'label' => esc_html__( 'Arrow Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .slick-prev:hover:before,{{WRAPPER}} .slick-next:hover:before' => 'color: {{VALUE}}',
								],
							]
						);					
							
						/* Arrow Hover background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_arrow_hover_background1',
								'label' => esc_html__( 'Arrow Hover Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-prev:hover,{{WRAPPER}} .slick-next:hover',
							]
						);
						/* witr_hoverborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_hoverborder_style11',
								'label' => esc_html__( 'Arrow Hover Border', 'softd' ),
								'selector' => '{{WRAPPER}} .slick-prev:hover,{{WRAPPER}} .slick-next:hover',
							]
						);					
						
						
						$this->end_controls_tab();
						/*=== end Arrow hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end Arrow tabs style ====*/


			 $this->end_controls_section();
			/*=== end  witr Arrow style ====*/
			


			/*=== start witr Dots style ====*/

			$this->start_controls_section(
				'witr_style_option_dots',
				[
					'label' => esc_html__( 'Witr Dots Options', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_c_dots' => 'true',
					],					
				]
			);
				/*=== start Dots_tabs style ====*/
				$this->start_controls_tabs( 'dots_colors' );

					/*=== start Navigation_normal style ====*/
					$this->start_controls_tab(
						'witr_dots_colors_normal',
						[
							'label' => esc_html__( 'Dots', 'softd' ),
						]
					);

						/*  Dots width */
						$this->add_responsive_control(
							'witr_dots_width1',
							[
								'label' => esc_html__( 'width', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'separator'=>'before',
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 200,
									],
									'%' => [
										'min' => 0,
										'max' => 200,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots li button' => 'width: {{SIZE}}{{UNIT}};',
								],
							]
						);
						/*  Dots height */
						$this->add_responsive_control(
							'witr_dots_height1',
							[
								'label' => esc_html__( 'Height', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 200,
									],
									'%' => [
										'min' => 0,
										'max' => 200,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots li button' => 'height: {{SIZE}}{{UNIT}};',
								],
							]
						);											
						/* Dots background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_dots_background1',
								'label' => esc_html__( 'Dots Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-dots li button',
							]
						);		
						/* witr_dotsborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_dotsborder_style1',
								'label' => esc_html__( 'Dots Border', 'softd' ),
								'selector' => '{{WRAPPER}} .slick-dots li button',
							]
						);
						/* border_radius */
						$this->add_control(
							'witr_border_dots_radius1',
							[
								'label' => esc_html__( 'Border Radius', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .slick-dots li button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						
						/* Active Dots Background heading */
						$this->add_control(
							'witr_acdots_bg_had1',
							[
								'label' => esc_html__( 'Active Dots Background', 'softd' ),
								'type' => Controls_Manager::HEADING,
							]
						);
							
						
						/* Active Dots background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_acdots_background1',
								'label' => esc_html__( 'Active Dots Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-dots li.slick-active button ',
							]
						);						
						/* witr_top */
						$this->add_responsive_control(
							'witr_top_dots1',
							[
								'label' => esc_html__( 'Top', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => 0,
										'max' => 1000,
									],
									'%' => [
										'min' => 0,
										'max' => 1000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots' => 'top: {{SIZE}}{{UNIT}};',
								],
							]
						);
						
						/* witr_left */
						$this->add_responsive_control(
							'witr_leftl_dots',
							[
								'label' => esc_html__( 'Left', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%', 'em' ],
									'range' => [
									'px' => [
										'min' => -500,
										'max' => 2000,
									],
									'%' => [
										'min' => -500,
										'max' => 2000,
									],
									'em' => [
										'min' => -500,
										'max' => 2000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots' => 'left: {{SIZE}}{{UNIT}};',
								],

							]
						);

						/* witr_right */
						$this->add_responsive_control(
							'witr_rightr_dots',
							[
								'label' => esc_html__( 'Right', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%', 'em' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 2000,
									],
									'%' => [
										'min' => -500,
										'max' => 2000,
									],
									'em' => [
										'min' => -500,
										'max' => 2000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
						/* witr_bottom */
						$this->add_responsive_control(
							'witr_bottomb_dots',
							[
								'label' => esc_html__( 'Bottom', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%', 'em' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 2000,
									],
									'%' => [
										'min' => -500,
										'max' => 2000,
									],
									'em' => [
										'min' => -500,
										'max' => 2000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots' => 'bottom: {{SIZE}}{{UNIT}};',
								],					
							]
						);
						
						/* dots margin */
						$this->add_responsive_control(
							'witr_dots_margin1',
							[
								'label' => esc_html__( 'Margin', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'allowed_dimensions' => 'horizontal',
								'placeholder' => [
									'top' => 'auto',
									'right' => '',
									'bottom' => 'auto',
									'left' => '',
								],
								'selectors' => [
									'{{WRAPPER}} .slick-dots li button' => 'margin-right: {{RIGHT}}{{UNIT}}; margin-left: {{LEFT}}{{UNIT}};',
								],
							]
						);					
					

					$this->end_controls_tab();
					/*=== end Dots normal style ====*/
				
						/*=== start Dots hover style ====*/
						$this->start_controls_tab(
							'witr_dots_colors_hover',
							[
								'label' => esc_html__( 'Dots Hover', 'softd' ),
							]
						);
							
						/* Dots Hover background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_dots_hover_background1',
								'label' => esc_html__( 'Dots Hover Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-dots li button:hover',
							]
						);
						/* witr_hoverborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_hoverborder_style1',
								'label' => esc_html__( 'Dots Hover Border', 'softd' ),
								'selector' => '{{WRAPPER}} .slick-dots li button:hover',
							]
						);					
						
						
						$this->end_controls_tab();
						/*=== end Dots hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end Dots tabs style ====*/

			 $this->end_controls_section();
			/*=== end  witr Dots style ====*/		
	


    } /* function end*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		if(! empty($witrshowdata['witr_slides_to_show'])){
			$slidestoShow=$witrshowdata['witr_slides_to_show'];
		}
		if(! empty($witrshowdata['witr_c_infinite'])){
			$infinite=$witrshowdata['witr_c_infinite'];
		}
		if(! empty($witrshowdata['witr_c_autoplay'])){
			$autoplay=$witrshowdata['witr_c_autoplay'];
		}
		if(! empty($witrshowdata['witr_c_autoplaySpeed'])){
			$autoplayspeed=$witrshowdata['witr_c_autoplaySpeed'];
		}
		if(! empty($witrshowdata['witr_c_speed'])){
			$speed=$witrshowdata['witr_c_speed'];
		}
		if(! empty($witrshowdata['witr_c_slidestoScroll'])){
			$slidestoscroll=$witrshowdata['witr_c_slidestoScroll'];
		}
		if(! empty($witrshowdata['witr_c_arrows'])){
			$arrows=$witrshowdata['witr_c_arrows'];
		}
		if(! empty($witrshowdata['witr_c_dots'])){
			$dots=$witrshowdata['witr_c_dots'];
		}
		if(! empty($witrshowdata['witr_c_res1'])){
			$res1=$witrshowdata['witr_c_res1'];
		}
		if(! empty($witrshowdata['witr_c_res2'])){
			$res2=$witrshowdata['witr_c_res2'];
		}
		if(! empty($witrshowdata['witr_c_res3'])){
			$res3=$witrshowdata['witr_c_res3'];
		}
		if(! empty($witrshowdata['witr_unicid_c'])){
			$unic_id=$witrshowdata['witr_unicid_c'];	
		}
		
		
		
?>
<!-- slider area -->
	<div class="witr_ds_content_area witr_dsider_js_active simages_<?php echo $unic_id;?>">

		<?php 
		if ( $witrshowdata['wittr_slist'] ) {
			foreach (  $witrshowdata['wittr_slist'] as $wittr_s_item ) {
				
				
		
		
		
		switch ( $wittr_s_item['witr_style_slick'] ) {	

		case '3':
		?>
				<!-- single slider item -->
					<div class="witr_ds_slider_content witr_slick_content">
						<div class=" witr_ds_content witr_slick_height text-left witr_current_id-<?php echo $wittr_s_item['_id'];?>" <?php if(isset($wittr_s_item['witr_bg_image']['url']) && ! empty($wittr_s_item['witr_bg_image']['url'])){?> style="background-image:url(<?php echo $wittr_s_item['witr_bg_image']['url'];?>);"<?php }?>>
							<div class="witr_ds_content_inner witr_containers">
								<!-- title -->
								<?php if(isset($wittr_s_item['witr_slick_title1']) && ! empty($wittr_s_item['witr_slick_title1'])){?>
									<h1><?php  echo $wittr_s_item['witr_slick_title1'];?></h1>
								<?php } ?>
								<!-- title 2 -->
								<?php if(isset($wittr_s_item['witr_slick_title2']) && ! empty($wittr_s_item['witr_slick_title2'])){?>
									<h2><?php  echo $wittr_s_item['witr_slick_title2'];?></h2>
								<?php } ?>
								<!-- title 3 -->
								<?php if(isset($wittr_s_item['witr_slick_title3']) && ! empty($wittr_s_item['witr_slick_title3'])){?>
									<h3><?php  echo $wittr_s_item['witr_slick_title3'];?></h3>
								<?php } ?>
								<!-- content -->
								<?php if(isset($wittr_s_item['witr_pragraph']) && ! empty($wittr_s_item['witr_pragraph'])){?>
									<p><?php  echo $wittr_s_item['witr_pragraph'];?></p>
								<?php } ?>
								<!--- List Option --->
								<?php if($wittr_s_item['witr_show_list']=='yes'){?>	
									<?php if(isset($wittr_s_item['witr_text_list']) && ! empty($wittr_s_item['witr_text_list'])){ ?>
										<div class="witr_slick_list">								
											<?php echo $wittr_s_item['witr_text_list']; ?>
										</div>								
									<?php } ?>						
								<?php } ?>							
								<!-- btn gradient style -->
								<div class="slider_btn">
									<div class="witr_btn_style">
										<div class="witr_btn_sinner">
											<!-- button -->
											<?php if(isset($wittr_s_item['witr_button_link']['url']) && ! empty($wittr_s_item['witr_button_link']['url'])){?>
												<a  class="witr_btn" href="<?php echo $wittr_s_item['witr_button_link']['url'] ;?>"><?php echo $wittr_s_item['witr_slick_button'];?>
												<?php if(isset($wittr_s_item['witr_button_pluse']) && ! empty($wittr_s_item['witr_button_pluse'])){?>
													<div class="slick_pluse_btn">
														<span class="<?php echo $wittr_s_item['witr_button_pluse']; ?>"></span>
													</div>	
												<?php } ?>												
												</a>
											<?php }?>

											<!-- video button -->
											<?php if($wittr_s_item['witr_vshow_button']=='yes' ){
												 if(isset($wittr_s_item['witr_yvideo_linkhas']['url']) && ! empty($wittr_s_item['witr_yvideo_linkhas']['url'])){?>
													<a class="witr_btn active recpwit"  href="<?php echo $wittr_s_item['witr_yvideo_linkhas'] ['url']; ?>">
													<?php echo $wittr_s_item['witr_video_button']; ?>
													</a>
												<?php }												
												if($wittr_s_item['witr_yshow_button']=='yes' or $wittr_s_item['witr_vmshow_button']='yes'  ){
											
													 if(isset($wittr_s_item['witr_yvideo_link']['url']) && ! empty($wittr_s_item['witr_yvideo_link']['url'])){?>
														<a class="witr_btn active recpwit video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $wittr_s_item['witr_yvideo_link'] ['url']; ?>"><i class="fas fa-play"></i>
														<?php echo $wittr_s_item['witr_video_button']; ?>
														</a>
													<?php } 

													if(isset($wittr_s_item['witr_vmvideo_link']['url']) && ! empty($wittr_s_item['witr_vmvideo_link']['url'])){?>
														<a class="witr_btn active recpwit video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $wittr_s_item['witr_vmvideo_link'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $wittr_s_item['witr_video_button']; ?></a>
													<?php } 
												} 
											} ?>

											<!-- video button 2 Style -->
											<?php if($wittr_s_item['witr_vshow_button2']=='yes' ){
												if($wittr_s_item['witr_yshow_button2']=='yes' or $wittr_s_item['witr_vmshow_button2']='yes'  ){
											
													 if(isset($wittr_s_item['witr_yvideo_link2']['url']) && ! empty($wittr_s_item['witr_yvideo_link2']['url'])){?>
														<a class="witr_video_btn  video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $wittr_s_item['witr_yvideo_link2'] ['url']; ?>"><i class="fas fa-play"></i>
														<?php echo $wittr_s_item['witr_video_button2']; ?>
														</a>
													<?php } 

													if(isset($wittr_s_item['witr_vmvideo_link2']['url']) && ! empty($wittr_s_item['witr_vmvideo_link2']['url'])){?>
														<a class="witr_video_btn video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $wittr_s_item['witr_vmvideo_link2'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $wittr_s_item['witr_video_button2']; ?></a>
													<?php } 
												} 
											} ?>							
										</div>
									</div>
								</div>							
								<!-- slider thumb image -->
								<?php if(isset($wittr_s_item['witr_sitem_image']['url']) && ! empty($wittr_s_item['witr_sitem_image']['url'])){?>
								<div class="witr_slider_thumb em_slider_s2_image">
									<div class="witr_slider_thumb_inner">
										<?php echo '<img src="' . $wittr_s_item['witr_sitem_image']['url'] . '">';
										?>
									</div>
								</div>
								<?php } ?>
							<!-- social -->
						<?php if($witrshowdata['witr_show_Icon']=='yes'){?>	
						<div class="icon_section witr_slick_content_icon">			
							<div class="softd_slider_icon">
								<ul>
									<?php if(isset($witrshowdata['witr_icon_1']) && ! empty($witrshowdata['witr_icon_1'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_fb']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_1']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_2']) && ! empty($witrshowdata['witr_icon_2'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_tw']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_2']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_3']) && ! empty($witrshowdata['witr_icon_3'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_gp']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_3']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_4']) && ! empty($witrshowdata['witr_icon_4'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_lk']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_4']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_5']) && ! empty($witrshowdata['witr_icon_5'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_pi']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_5']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_6']) && ! empty($witrshowdata['witr_icon_6'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_in']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_6']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_7']) && ! empty($witrshowdata['witr_icon_7'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_us']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_7']?>"></i></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<?php } ?>									
							</div>
						</div>						
					</div>
							
		<?php
		
		break;
		case '2':
		?>
				<!-- single slider item -->
					<div class="witr_ds_slider_content witr_slick_content">
						<div class=" witr_ds_content witr_slick_height text-right witr_current_id-<?php echo $wittr_s_item['_id'];?>" <?php if(isset($wittr_s_item['witr_bg_image']['url']) && ! empty($wittr_s_item['witr_bg_image']['url'])){?> style="background-image:url(<?php echo $wittr_s_item['witr_bg_image']['url'];?>);"<?php }?>>
							<div class="witr_ds_content_inner witr_containers">
								<!-- title -->
								<?php if(isset($wittr_s_item['witr_slick_title1']) && ! empty($wittr_s_item['witr_slick_title1'])){?>
									<h1><?php  echo $wittr_s_item['witr_slick_title1'];?></h1>
								<?php } ?>
								<!-- title 2 -->
								<?php if(isset($wittr_s_item['witr_slick_title2']) && ! empty($wittr_s_item['witr_slick_title2'])){?>
									<h2><?php  echo $wittr_s_item['witr_slick_title2'];?></h2>
								<?php } ?>
								<!-- title 3 -->
								<?php if(isset($wittr_s_item['witr_slick_title3']) && ! empty($wittr_s_item['witr_slick_title3'])){?>
									<h3><?php  echo $wittr_s_item['witr_slick_title3'];?></h3>
								<?php } ?>
								<!-- content -->
								<?php if(isset($wittr_s_item['witr_pragraph']) && ! empty($wittr_s_item['witr_pragraph'])){?>
									<p><?php  echo $wittr_s_item['witr_pragraph'];?></p>
								<?php } ?>
								<!--- List Option --->
								<?php if($wittr_s_item['witr_show_list']=='yes'){?>	
									<?php if(isset($wittr_s_item['witr_text_list']) && ! empty($wittr_s_item['witr_text_list'])){ ?>
										<div class="witr_slick_list">								
											<?php echo $wittr_s_item['witr_text_list']; ?>
										</div>								
									<?php } ?>						
								<?php } ?>
								<!-- btn gradient style -->
								<div class="slider_btn">
									<div class="witr_btn_style">
										<div class="witr_btn_sinner">
											<!-- button -->
											<?php if(isset($wittr_s_item['witr_button_link']['url']) && ! empty($wittr_s_item['witr_button_link']['url'])){?>
												<a  class="witr_btn " href="<?php echo $wittr_s_item['witr_button_link']['url'] ;?>"><?php echo $wittr_s_item['witr_slick_button'];?>
												
												<?php if(isset($wittr_s_item['witr_button_pluse']) && ! empty($wittr_s_item['witr_button_pluse'])){?>
													<div class="slick_pluse_btn">
														<span class="<?php echo $wittr_s_item['witr_button_pluse']; ?>"></span>
													</div>	
												<?php } ?>												
												</a>
												
											<?php }?>

											<!-- video button -->
											<?php if($wittr_s_item['witr_vshow_button']=='yes' ){
												 if(isset($wittr_s_item['witr_yvideo_linkhas']['url']) && ! empty($wittr_s_item['witr_yvideo_linkhas']['url'])){?>
													<a class="witr_btn active recpwit"  href="<?php echo $wittr_s_item['witr_yvideo_linkhas'] ['url']; ?>">
													<?php echo $wittr_s_item['witr_video_button']; ?>
													</a>
												<?php }												
												if($wittr_s_item['witr_yshow_button']=='yes' or $wittr_s_item['witr_vmshow_button']='yes'  ){
											
													 if(isset($wittr_s_item['witr_yvideo_link']['url']) && ! empty($wittr_s_item['witr_yvideo_link']['url'])){?>
														<a class="witr_btn active recpwit video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $wittr_s_item['witr_yvideo_link'] ['url']; ?>"><i class="fas fa-play"></i>
														<?php echo $wittr_s_item['witr_video_button']; ?>
														</a>
													<?php } 

													if(isset($wittr_s_item['witr_vmvideo_link']['url']) && ! empty($wittr_s_item['witr_vmvideo_link']['url'])){?>
														<a class="witr_btn active recpwit video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $wittr_s_item['witr_vmvideo_link'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $wittr_s_item['witr_video_button']; ?></a>
													<?php } 
												} 
											} ?>

											<!-- video button 2 Style -->
											<?php if($wittr_s_item['witr_vshow_button2']=='yes' ){
												if($wittr_s_item['witr_yshow_button2']=='yes' or $wittr_s_item['witr_vmshow_button2']='yes'  ){
											
													 if(isset($wittr_s_item['witr_yvideo_link2']['url']) && ! empty($wittr_s_item['witr_yvideo_link2']['url'])){?>
														<a class="witr_video_btn  video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $wittr_s_item['witr_yvideo_link2'] ['url']; ?>"><i class="fas fa-play"></i>
														<?php echo $wittr_s_item['witr_video_button2']; ?>
														</a>
													<?php } 

													if(isset($wittr_s_item['witr_vmvideo_link2']['url']) && ! empty($wittr_s_item['witr_vmvideo_link2']['url'])){?>
														<a class="witr_video_btn video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $wittr_s_item['witr_vmvideo_link2'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $wittr_s_item['witr_video_button2']; ?></a>
													<?php } 
												} 
											} ?>							
										</div>
									</div>
								</div>							
								<!-- slider thumb image -->
								<?php if(isset($wittr_s_item['witr_sitem_image']['url']) && ! empty($wittr_s_item['witr_sitem_image']['url'])){?>
								<div class="witr_slider_thumb em_slider_s2_image">
									<div class="witr_slider_thumb_inner">
										<?php echo '<img src="' . $wittr_s_item['witr_sitem_image']['url'] . '">';
										?>
									</div>
								</div>
								<?php } ?>
							<!-- social -->
						<?php if($witrshowdata['witr_show_Icon']=='yes'){?>	
						<div class="icon_section witr_slick_content_icon">			
							<div class="softd_slider_icon">
								<ul>
									<?php if(isset($witrshowdata['witr_icon_1']) && ! empty($witrshowdata['witr_icon_1'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_fb']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_1']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_2']) && ! empty($witrshowdata['witr_icon_2'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_tw']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_2']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_3']) && ! empty($witrshowdata['witr_icon_3'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_gp']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_3']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_4']) && ! empty($witrshowdata['witr_icon_4'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_lk']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_4']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_5']) && ! empty($witrshowdata['witr_icon_5'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_pi']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_5']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_6']) && ! empty($witrshowdata['witr_icon_6'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_in']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_6']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_7']) && ! empty($witrshowdata['witr_icon_7'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_us']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_7']?>"></i></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<?php } ?>									
							</div>
						</div>						
					</div>
							
		<?php
		break;		
		default:
		?>
			<!-- single slider item -->
			<div class="witr_ds_slider_content witr_slick_content">
				<div class=" witr_ds_content witr_slick_height  text-center witr_current_id-<?php echo $wittr_s_item['_id'];?>" <?php if(isset($wittr_s_item['witr_bg_image']['url']) && ! empty($wittr_s_item['witr_bg_image']['url'])){?> style="background-image:url(<?php echo $wittr_s_item['witr_bg_image']['url'];?>);"<?php }?>>
					<div class="witr_ds_content_inner container">
						<!-- title -->
						<?php if(isset($wittr_s_item['witr_slick_title1']) && ! empty($wittr_s_item['witr_slick_title1'])){?>
							<h1><?php  echo $wittr_s_item['witr_slick_title1'];?></h1>
						<?php } ?>
						<!-- title 2 -->
						<?php if(isset($wittr_s_item['witr_slick_title2']) && ! empty($wittr_s_item['witr_slick_title2'])){?>
							<h2><?php  echo $wittr_s_item['witr_slick_title2'];?></h2>
						<?php } ?>
						<!-- title 3 -->
						<?php if(isset($wittr_s_item['witr_slick_title3']) && ! empty($wittr_s_item['witr_slick_title3'])){?>
							<h3><?php  echo $wittr_s_item['witr_slick_title3'];?></h3>
						<?php } ?>
						<!-- content -->
						<?php if(isset($wittr_s_item['witr_pragraph']) && ! empty($wittr_s_item['witr_pragraph'])){?>
							<p><?php  echo $wittr_s_item['witr_pragraph'];?></p>
						<?php } ?>

						<!--- List Option --->
						<?php if($wittr_s_item['witr_show_list']=='yes'){?>	
							<?php if(isset($wittr_s_item['witr_text_list']) && ! empty($wittr_s_item['witr_text_list'])){ ?>
								<div class="witr_slick_list">								
									<?php echo $wittr_s_item['witr_text_list']; ?>
								</div>								
							<?php } ?>						
						<?php } ?>						
						<!-- btn gradient style -->
						<div class="slider_btn">
							<div class="witr_btn_style">
								<div class="witr_btn_sinner">
									<!-- button -->
									<?php if(isset($wittr_s_item['witr_button_link']['url']) && ! empty($wittr_s_item['witr_button_link']['url'])){?>
										<a  class="witr_btn " href="<?php echo $wittr_s_item['witr_button_link']['url'] ;?>"><?php echo $wittr_s_item['witr_slick_button'];?>
											<?php if(isset($wittr_s_item['witr_button_pluse']) && ! empty($wittr_s_item['witr_button_pluse'])){?>
												<div class="slick_pluse_btn">
													<span class="<?php echo $wittr_s_item['witr_button_pluse']; ?>"></span>
												</div>	
											<?php } ?>										
										</a>
									<?php }?>

									<!-- video button -->
									<?php if($wittr_s_item['witr_vshow_button']=='yes' ){
										 if(isset($wittr_s_item['witr_yvideo_linkhas']['url']) && ! empty($wittr_s_item['witr_yvideo_linkhas']['url'])){?>
											<a class="witr_btn active recpwit"  href="<?php echo $wittr_s_item['witr_yvideo_linkhas'] ['url']; ?>">
											<?php echo $wittr_s_item['witr_video_button']; ?>
											</a>
										<?php }										
										if($wittr_s_item['witr_yshow_button']=='yes' or $wittr_s_item['witr_vmshow_button']='yes'  ){
									
											 if(isset($wittr_s_item['witr_yvideo_link']['url']) && ! empty($wittr_s_item['witr_yvideo_link']['url'])){?>
												<a class="witr_btn active recpwit video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $wittr_s_item['witr_yvideo_link'] ['url']; ?>"><i class="fas fa-play"></i>
												<?php echo $wittr_s_item['witr_video_button']; ?>
												</a>
											<?php } 

											if(isset($wittr_s_item['witr_vmvideo_link']['url']) && ! empty($wittr_s_item['witr_vmvideo_link']['url'])){?>
												<a class="witr_btn active recpwit video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $wittr_s_item['witr_vmvideo_link'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $wittr_s_item['witr_video_button']; ?></a>
											<?php } 
										} 
									} ?>
									
									<!-- video button 2 Style -->
									<?php if($wittr_s_item['witr_vshow_button2']=='yes' ){
										if($wittr_s_item['witr_yshow_button2']=='yes' or $wittr_s_item['witr_vmshow_button2']='yes'  ){
									
											 if(isset($wittr_s_item['witr_yvideo_link2']['url']) && ! empty($wittr_s_item['witr_yvideo_link2']['url'])){?>
												<a class="witr_video_btn  video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $wittr_s_item['witr_yvideo_link2'] ['url']; ?>"><i class="fas fa-play"></i>
												<?php echo $wittr_s_item['witr_video_button2']; ?>
												</a>
											<?php } 

											if(isset($wittr_s_item['witr_vmvideo_link2']['url']) && ! empty($wittr_s_item['witr_vmvideo_link2']['url'])){?>
												<a class="witr_video_btn video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $wittr_s_item['witr_vmvideo_link2'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $wittr_s_item['witr_video_button2']; ?></a>
											<?php } 
										} 
									} ?>
									
									
								</div>
							</div>
						</div>
							<!-- social -->
						<?php if($witrshowdata['witr_show_Icon']=='yes'){?>	
						<div class="icon_section witr_slick_content_icon">			
							<div class="softd_slider_icon">
								<ul>
									<?php if(isset($witrshowdata['witr_icon_1']) && ! empty($witrshowdata['witr_icon_1'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_fb']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_1']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_2']) && ! empty($witrshowdata['witr_icon_2'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_tw']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_2']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_3']) && ! empty($witrshowdata['witr_icon_3'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_gp']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_3']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_4']) && ! empty($witrshowdata['witr_icon_4'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_lk']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_4']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_5']) && ! empty($witrshowdata['witr_icon_5'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_pi']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_5']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_6']) && ! empty($witrshowdata['witr_icon_6'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_in']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_6']?>"></i></a></li>
									<?php } ?>
									<?php if(isset($witrshowdata['witr_icon_7']) && ! empty($witrshowdata['witr_icon_7'])){?>
										<li><a href="<?php echo $witrshowdata['witr_swiper_us']['url'];?>"><i class="<?php echo $witrshowdata['witr_icon_7']?>"></i></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<?php } ?>						
					</div>
				</div>						
			</div>
							
		<?php		
		break;
		
		
		} /* switch end*/ 
		?>
			
			<?php }} ?>

			</div> <!-- end slick slider -->
			
<!-- end slider area --> 
	<script type='text/javascript'>
		jQuery(function($){


			/*====== Screenshots Slide Slick =======*/
			$('.simages_<?php echo $unic_id;?>').slick({	

				infinite: <?php echo $infinite;?>,
				autoplay: <?php echo $autoplay;?>,
				autoplaySpeed: <?php echo $autoplayspeed;?>,
				speed: <?php echo $speed;?>,					
				slidesToShow: <?php echo $slidestoShow;?>,
				slidesToScroll: <?php echo $slidestoscroll;?>,
				centerMode: true,
				centerPadding: '0',					
				arrows: <?php echo $arrows;?>,
				dots: <?php echo $dots;?>,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							slidesToShow: <?php echo $res1;?>,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 992,
						settings: {
							slidesToShow: <?php echo $res2;?>,
							slidesToScroll: 1,
						}
				},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: <?php echo $res3;?>,
							slidesToScroll: 1,
						}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
			});

		});
	</script>		
		
		
<?php		
		

	
    } /*end function */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Slick_slider() );