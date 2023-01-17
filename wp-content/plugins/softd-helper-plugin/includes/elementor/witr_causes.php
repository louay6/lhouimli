<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_couses extends Widget_Base {

    public function get_name() {
        return 'witr_section_couses';
    }
  
    public function get_title() {
        return esc_html__( 'WITR: causes', 'softd' );
    }

    public function get_icon() {
        return 'eicon-post-excerpt';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

			/* === w_couses start === */
			$this->start_controls_section(
				'witr_field_display_couses',
				[
					'label' => esc_html__( 'witr causes  Study Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);	

				/* style check  witr_style_feature */
				$this->add_control(
					'witr_style_couses',
					[
						'label' => esc_html__( 'causes  style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'1' => esc_html__( 'style 1', 'softd' ),
							'2' => esc_html__( 'style 2', 'softd' ),

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
							'default' => 'left',
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
								'{{WRAPPER}} .witr_content_cousesm' => 'text-align: {{VALUE}}',
							],							
						]
					);
					/* witr_image */
					$this->add_control(
						'witr_couses_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
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
					/* witr_couses_top	*/
					$this->add_control(
						'witr_couses_top',
						[
							'label' => esc_html__( ' Top Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'DEVELOPMENT', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);					
					/* witr_couses_title */	
					$this->add_control(
						'witr_couses_title',
						[
							'label' => esc_html__( 'Bottom Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Creative Idea Buildup', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your couses title here', 'softd' ),						
						]
					);
					
				/* witr_couses_content */	
				$this->add_control(
					'witr_couses_content',
					[
						'label' => esc_html__( 'Content Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'Not use content, remove the text from field', 'softd' ),
						'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'softd' ),
						'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						'condition' => [
							'witr_style_couses' => ['2'],
						],						
					]
				);										

					/* witr_show_button */
					$this->add_control(
						'witr_show_button',
						[
							'label' => esc_html__( 'Show Button', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',							
						]
					);
					
				/* witr_couses_button	*/
					$this->add_control(
						'witr_couses_button',
						[
							'label' => esc_html__( 'Button text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Donate Now', 'softd' ),
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
				/* witr_show_icon witr_icon_item */
					$this->add_control(
						'witr_show_icon',
						[
							'label' => esc_html__( 'Show Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'separator'=>'before',
							'return_value' => 'yes',
							'default' => 'yes',
							'condition' => [
								'witr_show_button' => 'yes',
							],							
						]
					);				
					/* witr_icon_item */					
					$this->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Icon', 'softd' ),
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
					/* witr_goal_title */	
					$this->add_control(
						'witr_goal_title',
						[
							'label' => esc_html__( 'goal Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field, highlight text use ex-<span>text</span>', 'softd' ),
							'default' => esc_html__( 'Goal - $1250.00', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your couses goal title here', 'softd' ),						
						]
					);		
					/* witr_rise_title */	
					$this->add_control(
						'witr_rise_title',
						[
							'label' => esc_html__( 'rise Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field, highlight text use ex-<span>text</span>', 'softd' ),
							'default' => esc_html__( 'Rise - $2500.00', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your couses rise title here', 'softd' ),						
						]
					);		
					
			$this->end_controls_section();
			/* === end w_couses ===  */

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			
		/*=== start Single Box style ====*/
		$this->start_controls_section(
			'section_single_couseso',
			[
				'label' => esc_html__( 'Couses Box Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
			/* heading2 */
			$this->add_control(
				'witr_bvalheadeingf2_color',
				[
					'label' => esc_html__( 'Image Overlay color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',					
				]
			);				
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bvbgfh2_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_couses_image::before',					
				]
			);		
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowsbox',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_couses_color',
					]
				);						
				/* box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_couses_color' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);	
				/* box padding */
				$this->add_responsive_control(
					'witr_box_paddingei',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_couses_color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],						
					]
				);				
			
		

		$this->end_controls_section();
		/*=== start Single Box style ====*/		


		/*=== start w_title top style  ====*/

		$this->start_controls_section(
			'witr_style_option2',
			[
				'label' => esc_html__( 'Top Title Color Option', 'softd' ),
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
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_couses_color h4' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_couses_color h4:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_couses_color h4',
				]
			);
			
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin2',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_couses_color h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_couses_color h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title top style  ====*/

		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Bottom Title Color Option', 'softd' ),
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
						'{{WRAPPER}} .all_couses_color h3 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_couses_color h3 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_couses_color h3 a',
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
						'{{WRAPPER}} .all_couses_color h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_couses_color h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'condition' => [
					'witr_style_couses' => ['2'],
				],				
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
						'{{WRAPPER}} .all_couses_color p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_couses_color p',
				]
			);		
			/*  Title Width */
			$this->add_responsive_control(
				'witr_content_width',
				[
					'label' => esc_html__( ' Width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 10,
							'max' => 200,
						],
						'%' => [
							'min' => 10,
							'max' => 200,
						],
						'em' => [
							'min' => 10,
							'max' => 200,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .all_couses_color p' => 'width: {{SIZE}}{{UNIT}};',
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
					'selectors' => [
						'{{WRAPPER}} .all_couses_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_couses_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_couses_btnb a',
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
							'selector' => '{{WRAPPER}} .witr_couses_btnb a',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'border-color: {{VALUE}}',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_couses_btnb a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_couses_btnb a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_couses_btnb a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'softd' ),
							'selector' => '{{WRAPPER}} .witr_couses_btnb a:hover',
						]
					);
					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		

		/*=== start witr_gr style ====*/
		$this->start_controls_section(
			'witr_style_option_gr',
			[
				'label' => esc_html__( 'Goal & Rise Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_gr_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_couses_color h6' => 'color: {{VALUE}}',
					],
				]
			);

			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_grtpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .all_couses_color h6',
				]
			);		
			
			/* title margin */
			$this->add_responsive_control(
				'witr_gr_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_circal_r' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_gr_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_circal_r' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_gr style ====*/

		/*=== start witr_heighlight style ====*/
		$this->start_controls_section(
			'witr_style_optionh',
			[
				'label' => esc_html__( 'Goal & Rise Heighlight Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_htitle_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_couses_color h6 span' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_couses_color h6 span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_htpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .all_couses_color h6 span',
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
						'{{WRAPPER}} .all_couses_color h6 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_couses_color h6 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_heighlight style ====*/


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
						'selector' => '{{WRAPPER}} .witr_content_area_c',
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
						'selector' => '{{WRAPPER}} .witr_content_area_c:hover',
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
							'{{WRAPPER}} .witr_content_area_c' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);							
				/* Box margin */
				$this->add_responsive_control(
					'witr_boxc_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_area_c' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_boxc_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_area_c' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
			$this->end_controls_section();
			/* === end single Feature ===  */			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
	switch ( $witrshowdata['witr_style_couses'] ) {
		
		case '2':
		?>
		<div class="witr_couses_2 witr_couses all_couses_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="witr_couses_image">
				<?php if(isset($witrshowdata['witr_couses_image']['url']) && ! empty($witrshowdata['witr_couses_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_couses_image']['url'];?>" alt="" />
				<?php } ?>
			</div>			
			<div class="witr_content_area_c">
				<div class="witr_content_couses">
					<!-- top title -->
					<?php if(isset($witrshowdata['witr_couses_top']) && ! empty($witrshowdata['witr_couses_top'])){?>
						<h4><?php echo $witrshowdata['witr_couses_top']; ?> </h4>		
					<?php } ?>
					<!-- bottom title -->
					<?php if(isset($witrshowdata['witr_couses_title']) && ! empty($witrshowdata['witr_couses_title'])){?>
						<h3><a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_couses_title']; ?></a></h3>
					<?php }?>
					<!-- content -->
					<?php if(isset($witrshowdata['witr_couses_content']) && ! empty($witrshowdata['witr_couses_content'])){?>
						<p><?php echo $witrshowdata['witr_couses_content']; ?> </p>		
					<?php } ?>					
				</div>
				
				<!-- button -->
				<div class="witr_dis_btngr">
					<div class="witr_price_gr_area">
						<div class="witr_circal_r">
							<!-- Goal -->
							<?php if(isset($witrshowdata['witr_goal_title']) && ! empty($witrshowdata['witr_goal_title'])){?>
								<h6><?php echo $witrshowdata['witr_goal_title']; ?> </h6>		
							<?php } ?>					
							<!-- Rise -->
							<?php if(isset($witrshowdata['witr_rise_title']) && ! empty($witrshowdata['witr_rise_title'])){?>
								<h6><?php echo $witrshowdata['witr_rise_title']; ?> </h6>		
							<?php } ?>					

						</div>	
					</div>				
					<?php if(isset($witrshowdata['witr_couses_button']) && ! empty($witrshowdata['witr_couses_button'])){?>
						<div class="witr_couses_btnb">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_couses_button']; ?>
								<!-- icon -->
								<?php if ( $is_new || $migrated ) :
									Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
								else : ?>
									<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
								<?php endif; ?>							
							</a>
						</div>
					<?php } ?>

				</div>
				
			</div>	
		</div>
		<?php 	
			
		break;
		default:
		?>
		<div class="witr_couses all_couses_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="witr_couses_image">
				<?php if(isset($witrshowdata['witr_couses_image']['url']) && ! empty($witrshowdata['witr_couses_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_couses_image']['url'];?>" alt="" />
				<?php } ?>
			</div>			
			<div class="witr_content_area_c">
				<div class="witr_content_couses">
					<!-- top title -->
					<?php if(isset($witrshowdata['witr_couses_top']) && ! empty($witrshowdata['witr_couses_top'])){?>
						<h4><?php echo $witrshowdata['witr_couses_top']; ?> </h4>		
					<?php } ?>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_couses_title']) && ! empty($witrshowdata['witr_couses_title'])){?>
						<h3><a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_couses_title']; ?></a></h3>
					<?php }?>
				</div>
				
				<!-- button -->
				<div class="witr_dis_btngr">
				<?php if(isset($witrshowdata['witr_couses_button']) && ! empty($witrshowdata['witr_couses_button'])){?>
					<div class="witr_couses_btnb">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_couses_button']; ?>
							<!-- icon -->
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>							
						</a>
					</div>
				<?php } ?>
				<div class="witr_price_gr_area">
					<div class="witr_circal_r">
						<!-- Goal -->
						<?php if(isset($witrshowdata['witr_goal_title']) && ! empty($witrshowdata['witr_goal_title'])){?>
							<h6><?php echo $witrshowdata['witr_goal_title']; ?> </h6>		
						<?php } ?>					
						<!-- Rise -->
						<?php if(isset($witrshowdata['witr_rise_title']) && ! empty($witrshowdata['witr_rise_title'])){?>
							<h6><?php echo $witrshowdata['witr_rise_title']; ?> </h6>		
						<?php } ?>					

					</div>	
				</div>
				</div>
				
			</div>	
		</div> 
		<?php 		
		break;
		
	} 
		

    } /* function end */
	


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_couses() );
