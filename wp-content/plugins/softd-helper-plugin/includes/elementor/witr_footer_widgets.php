<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Footer_widget extends Widget_Base {

    public function get_name() {
        return 'witr_section_footer_widget';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Footer Widget', 'softd' );
    }

    public function get_icon() {
        return 'eicon-text';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			/* === witr_pricing start === */
			$this->start_controls_section(
				'witr_field_display_text_widget',
				[
					'label' => esc_html__( 'Witr Widget Footer Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			/*  witr_button_select */
			$this->add_control(
				'witr_button_select',
				[
					'label' => esc_html__( 'Select List Style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'description' =>"Set your list style here",
					'separator' => 'before',					
					'default' => '1',
					'options' => [
						'1' => esc_html__( 'Select Link list Style ', 'softd' ),
						'2' => esc_html__( 'Select No Link list Style', 'softd' ),
						'3' => esc_html__( 'Footer Menu', 'softd' ),
						'4' => esc_html__( 'Use Shortcode', 'softd' ),
					],
				]
			);
			
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Box Position', 'softd' ),
						'type' => Controls_Manager::CHOOSE,
						'default' => 'left',
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
							'{{WRAPPER}} .witr_footer_widget_area' => 'text-align: {{VALUE}}',
						],
						'separator' => 'before',
					]
				);			
			
				/* witr_footer_shortcode	*/
				$this->add_control(
					'witr_footer_shortcode',
					[
						'label' => esc_html__( 'Shortcode', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => '',
						'separator' => 'before',
						'description' => esc_html__( 'Not use shortcode, remove the shortcode from field', 'softd' ),
						'placeholder' => esc_attr__( 'Type your shortcode here', 'softd' ),
							'condition' => [
								'witr_button_select' => ['4'],
							],						
					]
				);				
			/* witr_footer_title_widget	*/
				$this->add_control(
					'witr_footer_title_widget',
					[
						'label' => esc_html__( 'List Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Type Your Title', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use Title, remove the title from field', 'softd' ),
						'placeholder' => esc_attr__( 'Type your title here', 'softd' ),						
					]
				);				
				
					/* witr_show_repeater_list */
					$this->add_control(
						'witr_show_repeat_list',
						[
							'label' => esc_html__( 'Show List Items', 'softd' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),							
							'return_value' => 'yes',
							'default' => 'yes',
							'condition' => [
								'witr_button_select' => ['1','2'],
							],							
						]
					);
					
					$repeater = new Repeater();	

					/* witr_footer_content	*/
					$repeater->add_control(
						'witr_footer_content',
						[
							'label' => esc_html__( 'Lists', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content, remove the content from field', 'softd' ),
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),							
						]
					);			
					/*  witr_button_link */	
					$repeater->add_control(
						'witr_menu_link',
						[
							'label' => esc_html__( 'Set Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert list link here. when select no list link style, that time the field not work in your page','softd'),
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],
						]
					);					
					/* witr_show_icon witr_icon_item */
					$repeater->add_control(
						'witr_show_icon',
						[
							'label' => esc_html__( 'Show List Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),							
							'return_value' => 'yes',
							'default' => 'no',							
							
						]
					);				
					$repeater->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Icon Item', 'softd' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fas fa-check',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
							],							
						]
					);
											
					/* witr_list_text_widget */
					$this->add_control(
						'witr_list_text_widget',
						[
							'label' => esc_html__( 'Single List Item', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'fields' => $repeater->get_controls(),
							'condition' => [
								'witr_show_repeat_list' => 'yes',
								'witr_button_select' => ['1','2'],
							],							
							'default' => [
											[
												'witr_footer_content' => esc_html__( 'Type your list here', 'softd' ),
											],
											[
												'witr_footer_content' => esc_html__( 'Type your list here', 'softd' ),
											],
											[
												'witr_footer_content' => esc_html__( 'Type your list here', 'softd' ),
											],

							],
							'title_field' => '{{{ witr_footer_content }}}',
						]
					);				

			$this->end_controls_section();
			/*=== end witr_text widget start ====*/
			
			
			
			
	   /*===========================================================================================
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
						'{{WRAPPER}} .witr_own_widet_title h1' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_own_widet_title h1:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_own_widet_title h1',
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
						'{{WRAPPER}} .witr_own_widet_title h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_own_widet_title h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/			
			
		/*=== start witr_list style ====*/

		$this->start_controls_section(
			'witr_style_option_list',
			[
				'label' => esc_html__( 'List Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_button_select' => ['1','2','3'],
				],				
			]
		);		 
			/* color */
			$this->add_control(
				'witr_list_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .wittr_footermenu_w_list ul li,{{WRAPPER}} .wittr_footermenu_w_list ul li a,{{WRAPPER}} .footer-menu ul li a' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_list_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .wittr_footermenu_w_list ul li a:hover,{{WRAPPER}} .wittr_footermenu_w_list ul li:hover,{{WRAPPER}} .footer-menu ul li a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_list_color',
					'label' => esc_html__( 'List Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
					'selector' => '{{WRAPPER}} .wittr_footermenu_w_list ul li,{{WRAPPER}} .wittr_footermenu_w_list ul li a,{{WRAPPER}} .footer-menu ul li a',
				]
			);						
			/* list margin */
			$this->add_responsive_control(
				'witr_list_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wittr_footermenu_w_list ul li,{{WRAPPER}} .wittr_footermenu_w_list ul li a,{{WRAPPER}} .footer-menu ul li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* list padding */
			$this->add_responsive_control(
				'witr_list_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wittr_footermenu_w_list ul li,{{WRAPPER}} .wittr_footermenu_w_list ul li a,{{WRAPPER}} .footer-menu ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_list style ====*/			
	
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_icon_option',
			[
				'label' => esc_html__( 'Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_icon' => 'yes',
					'witr_button_select' => ['1','2'],

				],				
			]
		);	
				/* Icon Color */
				$this->add_control(
					'witr_icon_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .wittr_footermenu_w_list ul li i' => 'color: {{VALUE}}',
						],					
					]
				);
				/*  Icon hover color */
					$this->add_control(
						'witr_hover_icon_color',
						[
							'label' => esc_html__( 'Icon Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',						
							'selectors' => [
								'{{WRAPPER}} .wittr_footermenu_w_list ul li i:hover' => 'color: {{VALUE}}',
							],
						]
					);								
				/*  icon font size */
				$this->add_responsive_control(
					'icon_size',
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
							'{{WRAPPER}} .wittr_footermenu_w_list ul li i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
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
							'{{WRAPPER}} .wittr_footermenu_w_list ul li i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);





		$this->end_controls_section();

		/*=== end witr_icon style ====*/




		/*=== start witr Subscribe style ====*/
		$this->start_controls_section(
			'witr_style_subscribe _option',
			[
				'label' => esc_html__( 'Subscribe Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_button_select' => ['4'],
				],				
			]
		);				
		
			/*=== start Subscribe tabs style ====*/
			$this->start_controls_tabs( 'icon_colors' );
			
				/*=== start Subscribe normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				
				/* Subscribe Color */
				$this->add_control(
					'witr_subscribe_color',
					[
						'label' => esc_html__( 'Subscribe Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields input' => 'color: {{VALUE}}',
						],					
					]
				);
				/* Chrome placeholder Color */
				$this->add_control(
					'witr_subplac_color',
					[
						'label' => esc_html__( 'Chrome Placeholder Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields input::-webkit-input-placeholder' => 'color: {{VALUE}}',
						],					
					]
				);
				
				/* Firefox placeholder Color */
				$this->add_control(
					'witr_subplacfi_color',
					[
						'label' => esc_html__( 'Firefox Placeholder Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields input::-moz-placeholder' => 'color: {{VALUE}}',
						],					
					]
				);
				
				

				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_subse_color',
						'label' => esc_html__( 'Subscribe Typography', 'softd' ),
						'selector' => '{{WRAPPER}} .mc4wp-form-fields input',
					]
				);
				
				/*  subscribe width */
				$this->add_responsive_control(
					'witr_subscribe_width',
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
							'{{WRAPPER}} .mc4wp-form-fields input' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  subscribe height */
				$this->add_responsive_control(
					'witr_subscribe_height',
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
							'{{WRAPPER}} .mc4wp-form-fields input' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  subscribe line height */
				$this->add_responsive_control(
					'witr_subscribe_line_height',
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
							'{{WRAPPER}} .mc4wp-form-fields input' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);				
				
				/* Subscribe background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_subscribe_background',
						'label' => esc_html__( 'Subscribe Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .mc4wp-form-fields input',
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_bordersb_style',
						'label' => esc_html__( 'Subscribe Border', 'softd' ),
						'selector' => '{{WRAPPER}} .mc4wp-form-fields input',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_bordersb_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			
				/* subscribe margin */
				$this->add_responsive_control(
					'witr_subscribe_margin',
					[
						'label' => esc_html__( 'Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields input' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* subscribe padding */
				$this->add_responsive_control(
					'witr_subscribe_padding',
					[
						'label' => esc_html__( 'Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				
				/*========== Subscribe Button Heading ============ */
				$this->add_control(
					'witr_btn_sub_color',
					[
						'label' => esc_html__( 'Subscribe Button Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);				
				/* Button Color */
				$this->add_control(
					'witr_button_color',
					[
						'label' => esc_html__( 'Button Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'color: {{VALUE}}',
						],					
					]
				);
				
				
				/*  button font size */
				$this->add_responsive_control(
					'button_size',
					[
						'label' => esc_html__( 'Button Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/*  button width */
				$this->add_responsive_control(
					'witr_button_width',
					[
						'label' => esc_html__( 'Icon width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  button height */
				$this->add_responsive_control(
					'witr_button_height',
					[
						'label' => esc_html__( 'Icon Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  button line height */
				$this->add_responsive_control(
					'witr_button_line_height',
					[
						'label' => esc_html__( 'Icon Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);								
				/* Button background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_button_background',
						'label' => esc_html__( 'Button Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .mc4wp-form-fields button',
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderc_style',
						'label' => esc_html__( 'Button Icon Border', 'softd' ),
						'selector' => '{{WRAPPER}} .mc4wp-form-fields button',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_borders_radius',
					[
						'label' => esc_html__( 'Border Icon Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);			
				/* button margin */
				$this->add_responsive_control(
					'witr_button_margin',
					[
						'label' => esc_html__( 'Button Icon Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* button padding */
				$this->add_responsive_control(
					'witr_button_padding',
					[
						'label' => esc_html__( 'Button Icon Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);

				
				/*=========== checkbox Heading ==================*/
				$this->add_control(
					'witr_checkbox_color',
					[
						'label' => esc_html__( 'Checkbox', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);				
				/* Checkbox Color */
				$this->add_control(
					'witr_chefckbox_color',
					[
						'label' => esc_html__( 'Checkbox Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .checkbox_witr span' => 'color: {{VALUE}}',
						],					
					]
				);
				/* Checkbox typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_checkbox_color',
						'label' => esc_html__( 'Checkbox Typography', 'softd' ),
						'selector' => '{{WRAPPER}} .checkbox_witr span',
					]
				);
				/* Checkbox margin */
				$this->add_responsive_control(
					'witr_checkbox_margin',
					[
						'label' => esc_html__( 'Checkbox Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .checkbox_witr span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Checkbox padding */
				$this->add_responsive_control(
					'witr_checkbox_padding',
					[
						'label' => esc_html__( 'Checkbox Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .checkbox_witr span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
				$this->end_controls_tab();
				/*=== end subscribe normal style ====*/
			
					/*=== start subscribe hover style ====*/
					$this->start_controls_tab(
						'witr_icon_colors_hover',
						[
							'label' => esc_html__( 'Subscribe Hover', 'softd' ),
						]
					);
					
					/*  primary hover color */
					$this->add_control(
						'witr_hoverds_icon_color',
						[
							'label' => esc_html__( 'Subscribe Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .mc4wp-form-fields input:hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Subscribe background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hoverg_icon',
							'label' => esc_html__( 'Subscribe Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .mc4wp-form-fields input:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .mc4wp-form-fields input:hover' => 'border-color: {{VALUE}}',
							],
						]
					);
					
					
					/*=========== Subscribe Button Hover Heading ==================*/
					$this->add_control(
						'witr_btn_hover_color',
						[
							'label' => esc_html__( 'Subscribe Button Hover', 'softd' ),
							'type' => Controls_Manager::HEADING,
							'separator'=>'before',
						]
					);

				/* Button Color hover */
				$this->add_control(
					'witr_button_hov_color',
					[
						'label' => esc_html__( 'Button Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button:hover' => 'color: {{VALUE}}',
						],					
					]
				);					

				/* Button background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_button_hov_background',
						'label' => esc_html__( 'Button Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .mc4wp-form-fields button:hover',
					]
				);
				/* border_color_hover */
				$this->add_control(
					'witr_borders_hov_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						
						'selectors' => [
							'{{WRAPPER}} .mc4wp-form-fields button:hover' => 'border-color: {{VALUE}}',
						],
					]
				);									

					$this->end_controls_tab();
					/*=== end subscribe hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/


		
		$this->end_controls_section();

		/*=== end witr Subscribe style ====*/

			
			
			
			
			
			
			
	

     } /* funcition end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
	switch ( $witrshowdata['witr_button_select'] ) {


		case '4':
		?>
			<div class="witr_footer_widget_area">
				<div class="witr_footer_widget">		
					<!-- title -->
					<?php if(isset($witrshowdata['witr_footer_title_widget']) && ! empty($witrshowdata['witr_footer_title_widget'])){?>
						<div class="witr_own_widet_title">
							<h1><?php echo $witrshowdata['witr_footer_title_widget']; ?></h1>
						</div>		
					<?php } ?>		
					<div class="witr_own_shorcode">
						<?php if(isset($witrshowdata['witr_footer_shortcode']) && ! empty($witrshowdata['witr_footer_shortcode'])){
							$shortcodewon=$witrshowdata['witr_footer_shortcode'];
							  echo do_shortcode( $shortcodewon );
						 } ?>			
						<!-- FOOTER COPYRIGHT MENU -->				
					</div>					
				</div>					
			</div>					
		<?php 
		break;

		
		case '3':
		?>
			<div class="witr_footer_widget_area">
				<div class="witr_footer_widget">		
					<!-- title -->
					<?php if(isset($witrshowdata['witr_footer_title_widget']) && ! empty($witrshowdata['witr_footer_title_widget'])){?>
						<div class="witr_own_widet_title">
							<h1><?php echo $witrshowdata['witr_footer_title_widget']; ?></h1>
						</div>		
					<?php } ?>		
					<div class="footer-menu">
						<!-- FOOTER COPYRIGHT MENU -->				
						 <?php if ( has_nav_menu( 'menu-2' ) ) {
								wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_class' => '',
								'fallback_cb' => false,
								'container' => '',
								) );
						 } ?> 
						
					</div>					
				</div>					
			</div>					
		<?php 
		break;
		case '2':
		?>
			<!-- footer widget center -->
			<div class="witr_footer_widget_area">
				<div class="witr_footer_widget">
					<!-- title -->
					<?php if(isset($witrshowdata['witr_footer_title_widget']) && ! empty($witrshowdata['witr_footer_title_widget'])){?>
						<div class="witr_own_widet_title">
							<h1><?php echo $witrshowdata['witr_footer_title_widget']; ?></h1>
						</div>		
					<?php } ?>						
					
					<!--- repeater content --->
				
					<div class="wittr_footermenu_w_list">
						<ul>													
							<?php if(isset($witrshowdata['witr_list_text_widget']) && ! empty($witrshowdata['witr_list_text_widget'])){
								foreach($witrshowdata['witr_list_text_widget'] as $witr_footer_single){?>	
									<li>											
										<!-- icon -->
										<?php if ( $is_new || $migrated ) : ?>
											<?php Icons_Manager::render_icon( $witr_footer_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] ); ?>
										<?php
										else : ?>							
												<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
										<?php endif; ?>					
										<!-- end icon -->
										
										<?php echo $witr_footer_single['witr_footer_content']; ?>
										
									</li>							
								<?php } ?>
							<?php } ?>
						</ul>
								
					</div>	
													
				</div>
			</div>							
		<?php 
		break;
		
		default :
		?>					
			<!-- footer widget center -->
			<div class="witr_footer_widget_area">
				<div class="witr_footer_widget">
					<!-- title -->
					<?php if(isset($witrshowdata['witr_footer_title_widget']) && ! empty($witrshowdata['witr_footer_title_widget'])){?>
						<div class="witr_own_widet_title">
							<h1><?php echo $witrshowdata['witr_footer_title_widget']; ?></h1>
						</div>		
					<?php } ?>						
					
					<!--- repeater content --->
				
					<div class="wittr_footermenu_w_list">
						<ul>							
							<?php if(isset($witrshowdata['witr_list_text_widget']) && ! empty($witrshowdata['witr_list_text_widget'])){
								foreach($witrshowdata['witr_list_text_widget'] as $witr_footer_single){?>	
									<li>											
										<!-- icon -->
										<?php if ( $is_new || $migrated ) : ?>
											<?php Icons_Manager::render_icon( $witr_footer_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] ); ?>
										<?php
										else : ?>							
												<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
										<?php endif; ?>					
										<!-- end icon -->																				
											<a href="<?php echo $witr_footer_single['witr_menu_link']['url']; ?>"><?php echo $witr_footer_single['witr_footer_content']; ?>	</a>
									</li>
										
								<?php } ?>
							<?php } ?>
						</ul>	
					</div>							
				</div>
			</div>	

			
		<?php 
		break;
		}	
	


    } /* funcition end */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Footer_widget() );
