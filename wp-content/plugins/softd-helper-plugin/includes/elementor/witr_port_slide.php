<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Pslides extends Widget_Base {

    public function get_name() {
        return 'witr_section_ports';
    }
  
    public function get_title() {
        return esc_html__( 'WITR: Port Carousel', 'softd' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

			/* === w_case start === */
			$this->start_controls_section(
				'witr_field_display_case',
				[
					'label' => esc_html__( 'witr Slide Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);	

			/* === witr_style_call start === */
				$this->add_control(
					'witr_style_call_slide',
					[
						'label' => esc_html__( 'Select Slides Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator' => 'before',
						'options' => [
							'1' => esc_html__( ' Slides Style 1', 'softd' ),
							'2' => esc_html__( ' Slides Style 2', 'softd' ),
							'3' => esc_html__( ' Slides Style 3', 'softd' ),
							'4' => esc_html__( ' Slides Style 4', 'softd' ),
						
						],
						'default' => '1',
					]
				);			
					/* Box Position */				
					$this->add_control(
						'witr_text_ltc',
						[
							'label' => esc_html__( 'Box Position', 'softd' ),
							'type' => Controls_Manager::CHOOSE,
							'default' => ' ',
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
							'selectors' => [
								'{{WRAPPER}} .witr_single_pslide' => 'text-align: {{VALUE}}',
							],							
						]
					);
					
					$repeater = new Repeater();						
					/* witr_image */
					$repeater->add_control(
						'witr_case_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],							
						]
					);					
					/* witr_case_title */	
					$repeater->add_control(
						'witr_case_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Enter Your Title', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your  title here', 'softd' ),						
						]
					);
					/* witr_case_title_link */	
					$repeater->add_control(
						'witr_case_title_link',
						[
							'label' => esc_html__( 'Title Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert Title link here.','softd'),
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],								
						]
					);					
					
					/* witr_case_content	*/
					$repeater->add_control(
						'witr_case_content',
						[
							'label' => esc_html__( ' Content', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Being able to ', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);
					/* witr_show_custom */
					$repeater->add_control(
						'witr_show_custom',
						[
							'label' => esc_html__( 'Show custom Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',
							'description' => esc_html__( 'Not Working Only Style 1', 'softd' ),
						]
					);
					/*  witr_feature_custom	*/
					$repeater->add_control(
						'witr_feature_custom',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or https://fontawesome.com/cheatsheet name here', 'softd' ),
							'default' => esc_html__( 'ti-arrow-right', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),
							'condition' => [
								'witr_show_custom' => 'yes',
							],							
						]
					);
					/* witr_feature_title_link */	
					$repeater->add_control(
						'witr_feature_custom_link',
						[
							'label' => esc_html__( 'Icon Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert Icon link here.','softd'),
							'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],							
							'condition' => [
								'witr_show_custom' => 'yes',
							],							
						]
					);					

					/* witr_show_button */
					$repeater->add_control(
						'witr_show_button',
						[
							'label' => esc_html__( 'Show Button', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',							
						]
					);
					
				/* witr_case_button	*/
					$repeater->add_control(
						'witr_case_button',
						[
							'label' => esc_html__( 'Button text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Click', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
							'condition' => [						
								'witr_show_button' => 'yes',
							],							
						]
					);
				/*  witr_button_link */	
					$repeater->add_control(
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
					/* witr_show_icon */
					$repeater->add_control(
						'witr_show_icon',
						[
							'label' => esc_html__( 'Show Button Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',
							'condition' => [
								'witr_show_button' => 'yes',
							],							
						]
					);					
					/* witr_icon_item */					
					$repeater->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( ' Button Icon', 'softd' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'softd' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fas fa-arrow-circle-right',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
								'witr_show_button' => 'yes',
							],							
						]
					);
					/* witr_list_tslide */
					$this->add_control(
						'witr_list_cslide',
						[
							'label' => esc_html__( 'Repeater List', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'separator'=>'before',
							'fields' => $repeater->get_controls(),
							'default' => [
								[
									'witr_case_image' => esc_html__( 'Image Select', 'softd' ),
									'witr_case_title' => esc_html__( 'Add your Title', 'softd' ),
									'witr_case_content' => esc_html__( 'Sub Title Here', 'softd' ),
									
								],

							],
							'title_field' => '{{{ witr_case_title }}}',
							'content_field' => '{{{ witr_case_content }}}',
						]
					);					
		
					
			$this->end_controls_section();
			/* === end w_case ===  */


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
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',					
						'min' => 1,
						'max' => 100,
						'step' => 1,
						'default' => 3,
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
						'default' => 2000,
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
						'default' => 3,
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
						'default' =>3,
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
							'default' => 'idps',
							'placeholder' => esc_attr__( 'Type your ID here', 'softd' ),						
						]
					);				
				
												
			
			$this->end_controls_section();
			/* === end witr_image ===  */	

			
			
			
	   /*==================================================================================================================================================================
										START TO STYLE
		=============================================================================================*/			



		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
						'{{WRAPPER}} .all_pslides_color h3 a,{{WRAPPER}} .all_pslides_color h3' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_pslides_color h3 a:hover,{{WRAPPER}} .all_pslides_color h3:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_pslides_color h3 a,{{WRAPPER}} .all_pslides_color h3',
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
						'{{WRAPPER}} .all_pslides_color h3 a,{{WRAPPER}} .all_pslides_color h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pslides_color h3 a,{{WRAPPER}} .all_pslides_color h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/
		
		

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
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_pslides_color p' => 'color: {{VALUE}}',
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
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_pslides_color p',
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
						'{{WRAPPER}} .all_pslides_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pslides_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/
		
		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_span_option',
			[
				'label' => esc_html__( ' Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_call_slide' =>['2'],
				],				
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_pslide_custom a span',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'font-size: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borde_span',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_pslide_custom a span',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow_span',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_pslide_custom a span',
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
							'{{WRAPPER}} .witr_pslide_custom' => 'transform: rotate({{SIZE}}{{UNIT}});',
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
							'{{WRAPPER}} .witr_pslide_custom' => 'position: {{VALUE}};',
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
							'{{WRAPPER}} .witr_pslide_custom' => 'top: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom' => 'left: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pslide_custom a span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_pslide_custom a span:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_pslide_custom a span:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color_span',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .witr_pslide_custom a span:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					

					$this->end_controls_tab();
					/*=== end icon hover style ====*/
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon style ====*/		
		
		

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
							'label' => esc_html__( 'Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_ACCENT,
							],							
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .witr_pslide_btnb a' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_pslide_btnb a',
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
							'selector' => '{{WRAPPER}} .witr_pslide_btnb a',
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
								'{{WRAPPER}} .witr_pslide_btnb a' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .witr_pslide_btnb a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_pslide_btnb a' => 'border-color: {{VALUE}}',
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
								'{{WRAPPER}} .witr_pslide_btnb a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_pslide_btnb a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_pslide_btnb a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_pslide_btnb a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_pslide_btnb a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'softd' ),
							'selector' => '{{WRAPPER}} .witr_pslide_btnb a:hover',
						]
					);
					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		

		


		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_image',
			[
				'label' => esc_html__( 'Image Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 


		/* background */
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'img_background',
				'label' => esc_html__( 'Background', 'softd' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .witr_pslide_image::before',						
			]
		);
		/* background_overlay */
		$this->add_control(
			'background_overlay_opacity',
			[
				'label' => esc_html__( 'Opacity', 'softd' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => .5,
				],
				'range' => [
					'px' => [
						'max' => 1,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .witr_pslide_image::before' => 'opacity: {{SIZE}};',
				],

			]
		);				
			/* title margin */
			$this->add_responsive_control(
				'witr_img_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pslides_color img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_img_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pslides_color img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/		
		

		/*=== start Text Box style ====*/
		$this->start_controls_section(
			'witr_style_ss_option',
			[
				'label' => esc_html__( 'Text Box Color Optiton', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);		
		
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_background',
						'label' => esc_html__( 'box Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_content_pslide_text',
					]
				);
				/* Box background heading 2 */
				$this->add_responsive_control(
					'witr_box2_hover',
					[
						'label' => esc_html__( 'Background Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
					]
				);				
				/* box background hover */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box2_hover_background',
						'label' => esc_html__( 'box2 Hover Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_content_pslide_text:hover',
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_content_pslide_text',
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_borderc_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_pslide_text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				/* Box margin */
				$this->add_responsive_control(
					'witr_box_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_pslide_text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_pslide_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
			$this->end_controls_section();
			/* === end single Feature ===  */


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
								'name' => 'witr_arrowborder_style',
								'label' => esc_html__( 'Arrow Border', 'softd' ),
								'selector' => '{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next',
							]
						);
						/* border_radius */
						$this->add_control(
							'witr_border_arrow_radius',
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
							'witr_top',
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
									'{{WRAPPER}} .slick-prev,{{WRAPPER}} .slick-next' => 'top: {{SIZE}}{{UNIT}};',
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
										'max' => 1000,
									],
									'%' => [
										'min' => -500,
										'max' => 1000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .slick-prev' => 'left: {{SIZE}}{{UNIT}};',
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
										'max' => 1000,
									],
									'%' => [
										'min' => -500,
										'max' => 1000,
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
							'witr_arrow_hover_color',
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
								'name' => 'witr_arrow_hover_background',
								'label' => esc_html__( 'Arrow Hover Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-prev:hover,{{WRAPPER}} .slick-next:hover',
							]
						);
						/* witr_hoverborder_style1 */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_hoverborder_style1',
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
							'witr_dots_width',
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
							'witr_dots_height',
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
								'name' => 'witr_dots_background',
								'label' => esc_html__( 'Dots Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-dots li button',
							]
						);		
						/* witr_dotsborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_dotsborder_style',
								'label' => esc_html__( 'Dots Border', 'softd' ),
								'selector' => '{{WRAPPER}} .slick-dots li button',
							]
						);
						/* border_radius */
						$this->add_control(
							'witr_border_dots_radius',
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
							'witr_acdots_bg_had',
							[
								'label' => esc_html__( 'Active Dots Background', 'softd' ),
								'type' => Controls_Manager::HEADING,
							]
						);
							
						
						/* Active Dots background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_acdots_background',
								'label' => esc_html__( 'Active Dots Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-dots li.slick-active button ',
							]
						);						
						/* Active Dots height */
						$this->add_responsive_control(
							'witr_dotsac_height',
							[
								'label' => esc_html__( 'Active Height', 'softd' ),
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
									'{{WRAPPER}} .slick-dots li.slick-active button' => 'height: {{SIZE}}{{UNIT}};',
								],
							]
						);						

						/* witr_top */
						$this->add_responsive_control(
							'witr_topt_dots',
							[
								'label' => esc_html__( 'Top', 'softd' ),
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
							'witr_dots_margin',
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
								'name' => 'witr_dots_hover_background',
								'label' => esc_html__( 'Dots Hover Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .slick-dots li button:hover',
							]
						);
						/* witr_hoverborder_styled */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_hoverborder_styled',
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
		





			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		$infinite=$autoplay=$autoplayspeed=$speed=$slidestoShow=$slidestoscroll=$arrows=$dots=$res1=$res2=$res3=$unic_id="";

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
		
		
	switch ( $witrshowdata['witr_style_call_slide'] ) {
		case '4':		

		?>
		<div class="witr_pslide4 witr_pslide3 all_pslides_color ps1 ps3 service_active">
			<div class=" witr_cslide4_<?php echo $unic_id;?>">
				<?php if(isset($witrshowdata['witr_list_cslide']) && ! empty($witrshowdata['witr_list_cslide'])){	
					foreach($witrshowdata['witr_list_cslide'] as $witr_test_single){?>		
						<div class="item_pos col-lg-12">	
							<div class="witr_single_pslide">	
								<div class="witr_pslide_image">
									<?php if(isset($witr_test_single['witr_case_image']['url']) && ! empty($witr_test_single['witr_case_image']['url'])){?>
										<img src="<?php echo $witr_test_single['witr_case_image']['url'];?>" alt="" />
									<?php } ?>
								</div>			
								<div class="witr_content_pslide_text">
									<?php if($witr_test_single['witr_show_custom']=='yes'){?>	
										<div class="witr_pslide_custom">	
										<!-- custom icon -->
										<?php if(isset($witr_test_single['witr_feature_custom']) && ! empty($witr_test_single['witr_feature_custom'])){?>
											<a href="<?php echo $witr_test_single['witr_feature_custom_link'] ['url']; ?>"><span class="<?php echo $witr_test_single['witr_feature_custom']; ?>"></span></a>
										<?php } ?>									
										</div>
									<?php } ?>								
									<div class="witr_content_pslide">
										<!-- title -->
										<?php if(isset($witr_test_single['witr_case_title']) && ! empty($witr_test_single['witr_case_title'])){?>
										<?php if($witr_test_single['witr_case_title_link'] ['url']){?> 
											<h3><a href="<?php echo $witr_test_single['witr_case_title_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_title']; ?></a></h3>
										<?php }else{ ?>
										<h3><?php echo $witr_test_single['witr_case_title']; ?> </h3>
										<?php }	?>
										<?php } ?>										
										<!-- content -->
										<?php if(isset($witr_test_single['witr_case_content']) && ! empty($witr_test_single['witr_case_content'])){?>
											<p><?php echo $witr_test_single['witr_case_content']; ?> </p>		
										<?php } ?>
									<!-- button -->
									<?php if(isset($witr_test_single['witr_case_button']) && ! empty($witr_test_single['witr_case_button'])){?>
										<div class="witr_pslide_btnb">
											<a href="<?php echo $witr_test_single['witr_button_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_button']; ?>
												<?php if($witr_test_single['witr_show_icon']=='yes'){?>	
													<!-- icon -->
													<?php if ( $is_new || $migrated ) :
														Icons_Manager::render_icon( $witr_test_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
													else : ?>
														<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
													<?php endif; ?>	
												<?php } ?>	
											</a>
										</div>
									<?php } ?>										
										
									</div>
									
								</div>									
							</div> 
						</div>						
					<?php } ?>						
				<?php } ?>							
			</div> 
			
		</div> 
	
		
			<script type='text/javascript'>
				jQuery(function($){

					$('.witr_cslide4_<?php echo $unic_id;?>').slick({
						infinite: <?php echo $infinite;?>,
						autoplay: <?php echo $autoplay;?>,
						autoplaySpeed: <?php echo $autoplayspeed;?>,
						speed: <?php echo $speed;?>,					
						slidesToShow: <?php echo $slidestoShow;?>,
						slidesToScroll: <?php echo $slidestoscroll;?>,
						arrows: <?php echo $arrows;?>,
						dots: <?php echo $dots;?>,
						responsive: [
							{
								breakpoint: 1200,
								settings: {
									slidesToShow: <?php echo $res1;?>,
									slidesToScroll: 3,
								}
						},
							{
								breakpoint: 992,
								settings: {
									slidesToShow: <?php echo $res2;?>,
									slidesToScroll: 2,
								}
						},
							{
								breakpoint: 767,
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
		break;
		case '3':		

		?>
		<div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
			<div class=" witr_cslide3_<?php echo $unic_id;?>">
				<?php if(isset($witrshowdata['witr_list_cslide']) && ! empty($witrshowdata['witr_list_cslide'])){	
					foreach($witrshowdata['witr_list_cslide'] as $witr_test_single){?>		
						<div class="item_pos col-lg-12">	
							<div class="witr_single_pslide">	
								<div class="witr_pslide_image">
									<?php if(isset($witr_test_single['witr_case_image']['url']) && ! empty($witr_test_single['witr_case_image']['url'])){?>
										<img src="<?php echo $witr_test_single['witr_case_image']['url'];?>" alt="" />
									<?php } ?>
								</div>			
								<div class="witr_content_pslide_text">
									<div class="witr_content_pslide">
										<!-- title -->
										<?php if(isset($witr_test_single['witr_case_title']) && ! empty($witr_test_single['witr_case_title'])){?>
										<?php if($witr_test_single['witr_case_title_link'] ['url']){?> 
											<h3><a href="<?php echo $witr_test_single['witr_case_title_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_title']; ?></a></h3>
										<?php }else{ ?>
										<h3><?php echo $witr_test_single['witr_case_title']; ?> </h3>
										<?php }	?>
										<?php } ?>										
										<!-- content -->
										<?php if(isset($witr_test_single['witr_case_content']) && ! empty($witr_test_single['witr_case_content'])){?>
											<p><?php echo $witr_test_single['witr_case_content']; ?> </p>		
										<?php } ?>
									<!-- button -->
									<?php if(isset($witr_test_single['witr_case_button']) && ! empty($witr_test_single['witr_case_button'])){?>
										<div class="witr_pslide_btnb">
											<a href="<?php echo $witr_test_single['witr_button_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_button']; ?>
												<?php if($witr_test_single['witr_show_icon']=='yes'){?>	
													<!-- icon -->
													<?php if ( $is_new || $migrated ) :
														Icons_Manager::render_icon( $witr_test_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
													else : ?>
														<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
													<?php endif; ?>	
												<?php } ?>	
											</a>
										</div>
									<?php } ?>										
										
									</div>
									<?php if($witr_test_single['witr_show_custom']=='yes'){?>	
										<div class="witr_pslide_custom">	
										<!-- custom icon -->
										<?php if(isset($witr_test_single['witr_feature_custom']) && ! empty($witr_test_single['witr_feature_custom'])){?>
											<a href="<?php echo $witr_test_single['witr_feature_custom_link'] ['url']; ?>"><span class="<?php echo $witr_test_single['witr_feature_custom']; ?>"></span></a>
										<?php } ?>									
										</div>
									<?php } ?>
									
									
								</div>	
								
							</div> 
						</div>
						
					<?php } ?>
						
				<?php } ?>							
			</div> 
			
		</div> 
	
		
			<script type='text/javascript'>
				jQuery(function($){

					$('.witr_cslide3_<?php echo $unic_id;?>').slick({
						infinite: <?php echo $infinite;?>,
						autoplay: <?php echo $autoplay;?>,
						autoplaySpeed: <?php echo $autoplayspeed;?>,
						speed: <?php echo $speed;?>,					
						slidesToShow: <?php echo $slidestoShow;?>,
						slidesToScroll: <?php echo $slidestoscroll;?>,
						arrows: <?php echo $arrows;?>,
						dots: <?php echo $dots;?>,
						responsive: [
							{
								breakpoint: 1200,
								settings: {
									slidesToShow: <?php echo $res1;?>,
									slidesToScroll: 3,
								}
						},
							{
								breakpoint: 992,
								settings: {
									slidesToShow: <?php echo $res2;?>,
									slidesToScroll: 2,
								}
						},
							{
								breakpoint: 767,
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
		break;	
		case '2':		

		?>
		<div class="witr_pslide2 all_pslides_color ps1 ps2 service_active">
			<div class=" witr_cslide2_<?php echo $unic_id;?>">
				<?php if(isset($witrshowdata['witr_list_cslide']) && ! empty($witrshowdata['witr_list_cslide'])){	
					foreach($witrshowdata['witr_list_cslide'] as $witr_test_single){?>		
						<div class="item_pos col-lg-12">	
							<div class="witr_single_pslide">	
								<div class="witr_pslide_image">
									<?php if(isset($witr_test_single['witr_case_image']['url']) && ! empty($witr_test_single['witr_case_image']['url'])){?>
										<img src="<?php echo $witr_test_single['witr_case_image']['url'];?>" alt="" />
									<?php } ?>
								</div>			
								<div class="witr_content_pslide_text">
									<div class="witr_content_pslide">
										<!-- title -->
										<?php if(isset($witr_test_single['witr_case_title']) && ! empty($witr_test_single['witr_case_title'])){?>
										<?php if($witr_test_single['witr_case_title_link'] ['url']){?> 
											<h3><a href="<?php echo $witr_test_single['witr_case_title_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_title']; ?></a></h3>
										<?php }else{ ?>
										<h3><?php echo $witr_test_single['witr_case_title']; ?> </h3>
										<?php }	?>
										<?php } ?>										
										<!-- content -->
										<?php if(isset($witr_test_single['witr_case_content']) && ! empty($witr_test_single['witr_case_content'])){?>
											<p><?php echo $witr_test_single['witr_case_content']; ?> </p>		
										<?php } ?>
									</div>
									<!-- button -->
									<?php if(isset($witr_test_single['witr_case_button']) && ! empty($witr_test_single['witr_case_button'])){?>
										<div class="witr_pslide_btnb">
											<a href="<?php echo $witr_test_single['witr_button_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_button']; ?>
												<?php if($witr_test_single['witr_show_icon']=='yes'){?>	
													<!-- icon -->
													<?php if ( $is_new || $migrated ) :
														Icons_Manager::render_icon( $witr_test_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
													else : ?>
														<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
													<?php endif; ?>	
												<?php } ?>	
											</a>
										</div>
									<?php } ?>
									
									
								</div>	
									<?php if($witr_test_single['witr_show_custom']=='yes'){?>	
										<div class="witr_pslide_custom">	
										<!-- custom icon -->
										<?php if(isset($witr_test_single['witr_feature_custom']) && ! empty($witr_test_single['witr_feature_custom'])){?>
											<a href="<?php echo $witr_test_single['witr_feature_custom_link'] ['url']; ?>"><span class="<?php echo $witr_test_single['witr_feature_custom']; ?>"></span></a>
										<?php } ?>									
										</div>
									<?php } ?>								
							</div> 
						</div>
						
					<?php } ?>
						
				<?php } ?>							
			</div> 
			
		</div> 
	
		
			<script type='text/javascript'>
				jQuery(function($){

					$('.witr_cslide2_<?php echo $unic_id;?>').slick({
						infinite: <?php echo $infinite;?>,
						autoplay: <?php echo $autoplay;?>,
						autoplaySpeed: <?php echo $autoplayspeed;?>,
						speed: <?php echo $speed;?>,					
						slidesToShow: <?php echo $slidestoShow;?>,
						slidesToScroll: <?php echo $slidestoscroll;?>,
						arrows: <?php echo $arrows;?>,
						dots: <?php echo $dots;?>,
						responsive: [
							{
								breakpoint: 1200,
								settings: {
									slidesToShow: <?php echo $res1;?>,
									slidesToScroll: 3,
								}
						},
							{
								breakpoint: 992,
								settings: {
									slidesToShow: <?php echo $res2;?>,
									slidesToScroll: 2,
								}
						},
							{
								breakpoint: 767,
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
		break;
		
		default:
		?>			


		
		<div class="witr_pslide all_pslides_color ps1 service_active">
			<div class=" witr_islidess_slick witr_cslide_<?php echo $unic_id;?>">
				<?php if(isset($witrshowdata['witr_list_cslide']) && ! empty($witrshowdata['witr_list_cslide'])){	
					foreach($witrshowdata['witr_list_cslide'] as $witr_test_single){?>		
							
						<div class="item_pos col-lg-12">	
							<div class="witr_single_pslide">	
								<div class="witr_pslide_image">
									<?php if(isset($witr_test_single['witr_case_image']['url']) && ! empty($witr_test_single['witr_case_image']['url'])){?>
										<img src="<?php echo $witr_test_single['witr_case_image']['url'];?>" alt="" />
									<?php } ?>
								</div>			
								<div class="witr_content_pslide_text">
									<div class="witr_content_pslide">
										<!-- title -->
										<?php if(isset($witr_test_single['witr_case_title']) && ! empty($witr_test_single['witr_case_title'])){?>
										<?php if($witr_test_single['witr_case_title_link'] ['url']){?> 
											<h3><a href="<?php echo $witr_test_single['witr_case_title_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_title']; ?></a></h3>
										<?php }else{ ?>
										<h3><?php echo $witr_test_single['witr_case_title']; ?> </h3>
										<?php }	?>
										<?php } ?>										
										<!-- content -->
										<?php if(isset($witr_test_single['witr_case_content']) && ! empty($witr_test_single['witr_case_content'])){?>
											<p><?php echo $witr_test_single['witr_case_content']; ?> </p>		
										<?php } ?>
									</div>
									<!-- button -->
									<?php if(isset($witr_test_single['witr_case_button']) && ! empty($witr_test_single['witr_case_button'])){?>
										<div class="witr_pslide_btnb">
											<a href="<?php echo $witr_test_single['witr_button_link'] ['url']; ?>"><?php echo $witr_test_single['witr_case_button']; ?>
												<?php if($witr_test_single['witr_show_icon']=='yes'){?>	
													<!-- icon -->
													<?php if ( $is_new || $migrated ) :
														Icons_Manager::render_icon( $witr_test_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
													else : ?>
														<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
													<?php endif; ?>	
												<?php } ?>	
											</a>
										</div>
									<?php } ?>
	
								</div>	
								
							</div> 
						</div> 
						
						
					<?php } ?>
						
				<?php } ?>							
			</div> 
			
		</div> 
		
		
		
			<script type='text/javascript'>
				jQuery(function($){

					$('.witr_cslide_<?php echo $unic_id;?>').slick({
						infinite: <?php echo $infinite;?>,
						autoplay: <?php echo $autoplay;?>,
						autoplaySpeed: <?php echo $autoplayspeed;?>,
						speed: <?php echo $speed;?>,					
						slidesToShow: <?php echo $slidestoShow;?>,
						slidesToScroll: <?php echo $slidestoscroll;?>,
						arrows: <?php echo $arrows;?>,
						dots: <?php echo $dots;?>,
						responsive: [
							{
								breakpoint: 1200,
								settings: {
									slidesToShow: <?php echo $res1;?>,
									slidesToScroll: 3,
								}
						},
							{
								breakpoint: 992,
								settings: {
									slidesToShow: <?php echo $res2;?>,
									slidesToScroll: 2,
								}
						},
							{
								breakpoint: 767,
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
		break;						
		
	}/* switch end */
		
		

    } // function end
	

}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Pslides() );
