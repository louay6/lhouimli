<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_App_Button extends Widget_Base {

    public function get_name() {
        return 'witr_section_app_button';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Apps Button', 'softd' );
    }

    public function get_icon() {
        return 'eicon-button';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_button start === */
			$this->start_controls_section(
				'witr_field_display_button',
				[
					'label' => esc_html__( 'Witr App Button Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* witr_align */					
			$this->add_responsive_control(
				'witr_align',
				[
					'label' => esc_html__( 'Witr Alignment', 'softd' ),
					'type' => Controls_Manager::CHOOSE,
					'separator' => 'before',					
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
					'prefix_class' => 'w_apps_button_image%s--align-',
					'selectors' => [
						'{{WRAPPER}}' => 'text-align: {{VALUE}}',
					],
				]
			);			
	
			/* show image witr_show_image witr_image_link */
			$this->add_control(
				'witr_show_image',
				[
					'label' => esc_html__( 'Show Button Image', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',								
				]
			);				
			
			$this->add_control(
				'witr_button_image',
				[
					'label' => esc_html__( 'Choose Button Image', 'softd' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'',
					],
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
			/*  witr_image_link */	
			$this->add_control(
				'witr_image_link',
				[
					'label' => esc_html__( 'Image Link', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert image link. It hidden when field blank.','softd'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
					],	
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);			
			
			
			/*  witr_button_image2 witr_image_link2 */				
			$this->add_control(
				'witr_button_image2',
				[
					'label' => esc_html__( 'Choose Button Image', 'softd' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'#',
					],
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
			/*  witr_image_link2 */	
			$this->add_control(
				'witr_image_link2',
				[
					'label' => esc_html__( 'Image Link2', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert image link. It hidden when field blank.','softd'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
					],	
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
			
				/* SHOW BUTTON witr_show_button witr_button witr_button_link	*/
				$this->add_control(
					'witr_show_button',
					[
						'label' => esc_html__( 'Show Text button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);				
				$this->add_control(
					'witr_button',
					[
						'label' => esc_html__( 'Button Text', 'softd' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'default' => esc_html__( 'Android App On', 'softd' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);
				$this->add_control(
					'witr_button2',
					[
						'label' => esc_html__( 'Button Text', 'softd' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( 'Google Play', 'softd' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);
				
				
				
				
				/*  witr_button_link */	
				$this->add_control(
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
				$this->add_control(
					'witr_button3',
					[
						'label' => esc_html__( 'Button2 Text', 'softd' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'default' => esc_html__( 'Available On The', 'softd' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],						
					]
				);
				$this->add_control(
					'witr_button4',
					[
						'label' => esc_html__( 'Button2 Text', 'softd' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( 'App Store', 'softd' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],						
					]
				);
				
				/*  witr_button_link2 */	
				$this->add_control(
					'witr_button_link2',
					[
						'label' => esc_html__( 'Button2 Link', 'softd' ),
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
				
				
				/* witr_show_icon witr_button_icon witr_button_icon2	*/
				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'show_icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
						'condition' => [
						'witr_show_button' => 'yes',
						],					
					]
				);				
					$this->add_control(
						'witr_button_icon',
						[
							'label' => esc_html__( 'Icon', 'softd' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fab fa-google-play',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
								'witr_show_button' => 'yes',
							],							
						]
					);
					$this->add_control(
						'witr_button_icon2',
						[
							'label' => esc_html__( 'Icon2', 'softd' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fab fa-apple',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
								'witr_show_button' => 'yes',
							],							
						]
					);
					
					
			$this->end_controls_section();
			/* === end witr_button ===  */			

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( 'Button Images option', 'softd' ),
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
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'%' => [
								'min' => 25,
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'width: {{SIZE}}{{UNIT}};',
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
							'%' => [
								'min' => 25,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'height: {{SIZE}}{{UNIT}};',
						],
					]			
				);

				/* image margin */
				$this->add_responsive_control(
					'witr_image_margin',
					[
						'label' => esc_html__( 'Image Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* image padding */
				$this->add_responsive_control(
					'witr_image_padding',
					[
						'label' => esc_html__( 'Image Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/			
			
			
			
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
					
					
						/* Icon Color */
						$this->add_control(
							'witr_primary_color',
							[
								'label' => esc_html__( 'Icon Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'default' => '',
								'selectors' => [
									'{{WRAPPER}} span.isoftd' => 'color: {{VALUE}}',
								],
								
							]
						);				
						/*  icon font size */
						$this->add_responsive_control(
							'witr_icon_size',
							[
								'label' => esc_html__( 'Icon Size', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%', 'em' ],
								'range' => [
									'px' => [
										'min' => 6,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} span.isoftd' => 'font-size: {{SIZE}}{{UNIT}};',
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
									'{{WRAPPER}} span.isoftd' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* icon padding 
						$this->add_responsive_control(
							'witr_icon_padding',
							[
								'label' => esc_html__( 'Icon Padding', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.isoftd' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);*/					

						/* Title color */
						$this->add_control(
							'witr_button_color',
							[
								'label' => esc_html__( 'Title Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.smalltext' => 'color: {{VALUE}}',
								],
							]
						);				

						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_button_typography',
								'label' => esc_html__( 'Typography', 'softd' ),
								'selector' => '{{WRAPPER}} span.spaninner span.smalltext',
							]
						);	
						/* Title margin */
						$this->add_responsive_control(
							'witr_title_margin',
							[
								'label' => esc_html__( 'Title Margin', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.smalltext' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* Title padding */
						$this->add_responsive_control(
							'witr_title_padding',
							[
								'label' => esc_html__( 'Title Padding', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.smalltext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);						
						/* Title2 color */
						$this->add_control(
							'witr_button2_color',
							[
								'label' => esc_html__( 'Title2 Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'global' => [
									'default' => Global_Colors::COLOR_PRIMARY,
								],								
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.largetext' => 'color: {{VALUE}}',
								],
							]
						);				

						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_button2_typography',
								'label' => esc_html__( 'Typography', 'softd' ),
								'global' => [
									'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
								],
								'selector' => '{{WRAPPER}} span.spaninner span.largetext',
							]
						);
						/* Title2 margin */
						$this->add_responsive_control(
							'witr_title2_margin',
							[
								'label' => esc_html__( 'Title2 Margin', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.largetext' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* Title2 padding */
						$this->add_responsive_control(
							'witr_title2_padding',
							[
								'label' => esc_html__( 'Title2 Padding', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.largetext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);						
						
						/* witr_border_style */
						$this->add_control(
							'witr_border_btn_style',
							[
								'label' => esc_html__( 'Border Style', 'softd' ),
								'type' => Controls_Manager::SELECT,
								'separator'=>'before',
								'options' => [
									'none' => esc_html__( 'none', 'softd' ),
									'solid' => esc_html__( 'Solid', 'softd' ),
									'double' => esc_html__( 'Double', 'softd' ),
									'dotted' => esc_html__( 'Dotted', 'softd' ),
									'dashed' => esc_html__( 'Dashed', 'softd' ),
								],
								'default' => ' ',
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-style: {{VALUE}}',
								],
							]
						);
						
						/* witr border */
						$this->add_control(
							'witr_borde_btn',
							[
								'label' => esc_html__( 'Border', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'condition' =>[
									'witr_border_btn_style' => ['solid','double','dotted','dashed']
								],								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								
							]
						);
						/* border_color */
						$this->add_control(
							'witr_border_btn_color',
							[
								'label' => esc_html__( 'Border Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'condition' =>[
									'witr_border_btn_style' => ['solid','double','dotted','dashed']
								],								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-color: {{VALUE}}',
								],
								
							]
						);
						/* border_radius */
						$this->add_control(
							'witr_border_btn_radius',
							[
								'label' => esc_html__( 'Border Radius', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .w_apps_button a',
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
									'{{WRAPPER}} .w_apps_button a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .w_apps_button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

						/* Icon Hover Color */
						$this->add_control(
							'witr_icon_color',
							[
								'label' => esc_html__( 'Icon Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'default' => '',
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover span.isoftd' => 'color: {{VALUE}}',
								],
								
							]
						);						
						/* Title color */
						$this->add_control(
							'witr_thover_color',
							[
								'label' => esc_html__( 'Title Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover span.spaninner span.smalltext' => 'color: {{VALUE}}',
								],
							]
						);					
						/* Title2 color */
						$this->add_control(
							'witr_hover2_color',
							[
								'label' => esc_html__( 'Title2 Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover span.spaninner span.largetext' => 'color: {{VALUE}}',
								],
							]
						);					
												
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover' => 'border-color: {{VALUE}}',
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
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .w_apps_button a:hover',
							]
						);						
						
						$this->end_controls_tab();
						/*=== end button hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 
			 $this->end_controls_section();
			/*=== end  witr button style ====*/				
			
			
			/*=== start witr_Active Button style ====*/
			$this->start_controls_section(
				'witr_sbutton',
				[
					'label' => esc_html__( 'Active Button Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_show_button' => 'yes',
					],					
					
				]
			);	

				/* Button background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_button_active_background',
						'label' => esc_html__( 'Button Background', 'softd' ),
						'types' => ['classic','gradient'],
						'separator'=>'before',
						'selector' => '{{WRAPPER}} .w_apps_button a.active',
					]
				);
				/* Button Color */
				$this->add_control(
					'witr_abutton_color',
					[
						'label' => esc_html__( 'Active Text Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',						
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} span.isoftd.active, {{WRAPPER}} span.spaninner.active' => 'color: {{VALUE}}',
						],
						
					]
				);
						/* border_color */
						$this->add_control(
							'witr_aborder_btn_color',
							[
								'label' => esc_html__( 'Active Border Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a.active' => 'border-color: {{VALUE}}',
								],
							]
						);				
			
			$this->end_controls_section();
			/* === end witr_Active Button ===  */			
			
			
			
			
			
			
			
			
    } /*==function end==*/

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_button_icon'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		

			?>
				<div class="w_apps_image_area">	
					<!-- image -->
					<?php if(isset($witrshowdata['witr_image_link']['url']) && ! empty($witrshowdata['witr_image_link']['url'])){?>
						<div class="w_apps_button_image"><a href="#"><img src="<?php echo $witrshowdata['witr_button_image']['url'];?>" alt="" /></a></div>
					<?php } ?>
					<!-- image 2 -->
					<?php if(isset($witrshowdata['witr_image_link2']['url']) && ! empty($witrshowdata['witr_image_link2']['url'])){?>
						<div class="w_apps_button_image"><a href="#"><img src="<?php echo $witrshowdata['witr_button_image2']['url'];?>" alt="" /></a></div>
					<?php } ?>
				</div>

					<!-- button -->
				<div class="w_apps_button_area">	
					<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
						<div class="w_apps_button"><a class="active" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>">
							<!-- icon -->
							<?php if ( $is_new || $migrated ) :?>
								<span class="isoftd active"><?php
								Icons_Manager::render_icon( $witrshowdata['witr_button_icon'], [ 'aria-hidden' => 'true' ] );?>
								</span>
								
							<?php else : ?>
							<span class="isoftd active"><i class="fas fa-arrow-down"></i></span>	
							<?php endif; ?>					
							<!-- end icon -->							
							<span class="spaninner active">
								<span class="smalltext"><?php echo $witrshowdata['witr_button'];?></span>
								<span class="largetext"><?php echo $witrshowdata['witr_button2'];?></span>
							</span></a>
						</div>
					<?php }?>
					
					<!-- button 2 -->
					<?php if(isset($witrshowdata['witr_button_link2']['url']) && ! empty($witrshowdata['witr_button_link2']['url'])){?>
						<div class="w_apps_button"><a href="<?php echo $witrshowdata['witr_button_link2']['url'] ;?>">
							<!-- icon -->
							<?php if ( $is_new || $migrated ) :?>
								<span class="isoftd"><?php
								Icons_Manager::render_icon( $witrshowdata['witr_button_icon2'], [ 'aria-hidden' => 'true' ] );?>
								</span>
								
							<?php else : ?>
							<span class="isoftd"><i class="fas fa-arrow-down"></i></span>	
							<?php endif; ?>					
							<!-- end icon -->
							<span class="spaninner">
								<span class="smalltext"><?php echo $witrshowdata['witr_button3'];?></span>
								<span class="largetext"><?php echo $witrshowdata['witr_button4'];?></span>
							</span></a>
						</div>
					<?php }?>
				</div>	

			<?php 
			

    } /* function end */
	
	
	


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_App_Button() );
