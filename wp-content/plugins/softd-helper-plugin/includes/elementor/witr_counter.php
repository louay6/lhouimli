<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Counter extends Widget_Base {

    public function get_name() {
        return 'witr_section_counter';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Counter', 'softd' );
    }

    public function get_icon() {
        return 'eicon-counter';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_counter start === */
			$this->start_controls_section(
				'witr_field_display_counter',
				[
					'label' => esc_html__( 'witr Counter options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);

			/* counter style check  witr_style_counter */
				$this->add_control(
					'witr_style_counter',
					[
						'label' => esc_html__( 'Counter style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'description' => esc_html__( 'select your counter style from here', 'softd' ),
						'options' => [
							'1' => esc_html__( 'Counter style 1', 'softd' ),
							'2' => esc_html__( 'Counter style 2', 'softd' ),
							'3' => esc_html__( 'Counter style 3', 'softd' ),
							'4' => esc_html__( 'Counter style 4', 'softd' ),
							'5' => esc_html__( 'Counter style 5', 'softd' ),
							'6' => esc_html__( 'Counter style 6', 'softd' ),
						],
						'default' => '1',
					]
				);
	
			/* show icon witr_show_icon witr_icon_item */
				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'Show Icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
						'separator'=>'before',
						'condition' => [
							'witr_style_counter' => ['1','2','3','4'],
						],							
					]
				);				
				$this->add_control(
					'witr_icon_item',
					[
						'label' => esc_html__( 'Icon', 'softd' ),
						'type' => Controls_Manager::ICONS,
						'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),			
						'fa4compatibility' => 'icon',
						'default' => [
							'value' => 'fab fa-youtube',
							'library' => 'fa-solid',
						],
						'condition' => [
							'witr_show_icon' => 'yes',
							'witr_style_counter' => ['1','2','3','4'],
						],							
					]
				);
					/* witr_show_custom */
					$this->add_control(
						'witr_show_custom',
						[
							'label' => esc_html__( 'Show custom Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',
							'condition' => [
								'witr_style_counter' => ['1','2','3','4'],
							],							
						]
					);
					/*  witr_feature_custom	*/
					$this->add_control(
						'witr_counter_custom',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet name here', 'softd' ),
							'default' => esc_html__( 'icofont-adjust', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),
							'condition' => [
								'witr_show_custom' => 'yes',
								'witr_style_counter' => ['1','2','3','4'],
							],							
						]
					);				
			
		
				/* SHOW NUMBER witr_counter_number */	
					$this->add_control(
						'witr_counter_number',
						[
							'label' => esc_html__( 'Number', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use number, remove the text from field', 'softd' ),
							'default' => esc_html__( '523', 'softd' ),
							'placeholder' => esc_attr__( 'Type your number here', 'softd' ),
							'separator'=>'before',							
						]
					);
					$this->add_control(
						'witr_counter_symbol',
						[
							'label' => esc_html__( 'Symbol', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use symbol, remove the text from field', 'softd' ),
							'default' => esc_html__( '+', 'softd' ),
								'placeholder' => esc_attr__( 'Type your symbol here', 'softd' ),								
						]
					);
					
				/* witr_counter_title */	
				$this->add_control(
					'witr_counter_title',
					[
						'label' => esc_html__( 'Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator'=>'before',
						'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
						'default' => esc_html__( 'Download App', 'softd' ),
						'placeholder' => esc_attr__( 'Type your service title here', 'softd' ),						
					]
				);				
				/* counter content witr_counter_content */	
				$this->add_control(
					'witr_counter_content',
					[
						'label' => esc_html__( 'Content Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'description' => esc_html__( 'Not use content, remove the text from field', 'softd' ),
						'default' => esc_html__( 'They also strengthen your reputation by sing the trust that other people.', 'softd' ),
						'placeholder' => esc_attr__( 'Type your content text here', 'softd' ),
						'condition' => [
							'witr_style_counter' => ['6','5'],
						],						
					]
				);				
			/* witr_align */					
			$this->add_responsive_control(
				'witr_alignc',
				[
					'label' => __( 'Counter Alignment', 'softd' ),
					'type' => Controls_Manager::CHOOSE,
					'separator' => 'before',					
					'options' => [
						'left' => [
							'title' => __( 'Left', 'softd' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'softd' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'softd' ),
							'icon' => 'eicon-text-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'softd' ),
							'icon' => 'eicon-text-align-justify',
						],
					],
					'prefix_class' => 'softd-star-rating%s--align-',
					'selectors' => [
						'{{WRAPPER}} .all_counter_color' => 'text-align: {{VALUE}}',
					],
					'condition' => [
						'witr_style_counter' => ['1','2'],
					],					
				]
			);			
							
				
				
			$this->end_controls_section();
			/* === end witr_counter ===  */			

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			
			
		
		
		/*=== start witr_number style ====*/

		$this->start_controls_section(
			'witr_style_option_number',
			[
				'label' => esc_html__( 'Number Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_number_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_counter_color h3,{{WRAPPER}} .all_counter_color span' => 'color: {{VALUE}}',
					],
				]
			);			
			/* hover color */
			$this->add_control(
				'witr_number_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .all_counter_color h3:hover,{{WRAPPER}} .all_counter_color span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* witr_number_background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_number_background',
					'label' => esc_html__( ' Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_counter_6 .wirt_new_iner',
					'condition' => [
						'witr_style_counter' => ['6'],
					],					
				]
			);
			/*  image width */
			$this->add_responsive_control(
				'witr_number_width',
				[
					'label' => esc_html__( 'Box width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 25,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_counter_6 .wirt_new_iner' => 'width: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_counter' => ['6'],
					],					
				]
			);
			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ntpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_counter_color h3,{{WRAPPER}} .all_counter_color span',
				]
			);		
				
			/* number margin */
			$this->add_responsive_control(
				'witr_number_margin',
				[
					'label' => esc_html__( 'Number Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_counter_color h3,{{WRAPPER}} .all_counter_color span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* number padding */
			$this->add_responsive_control(
				'witr_number_padding',
				[
					'label' => esc_html__( 'Number Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_counter_color h3,{{WRAPPER}} .all_counter_color span,{{WRAPPER}} .witr_counter_6 .wirt_new_iner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_number style ====*/		
		
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
						'{{WRAPPER}} .all_counter_color h4,{{WRAPPER}} .all_counter_color h1' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_counter_color h4:hover,{{WRAPPER}} .all_counter_color h1:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_counter_color h4,{{WRAPPER}} .all_counter_color h1',
				]
			);		

				
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin',
				[
					'label' => esc_html__( 'Title Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_counter_color h4,{{WRAPPER}} .all_counter_color h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding',
				[
					'label' => esc_html__( 'Title Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_counter_color h4,{{WRAPPER}} .all_counter_color h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_counter_color p ' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_counter_color p',
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
						'{{WRAPPER}} .all_counter_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_counter_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/


		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'section_style_icon',
			[
				'label' => esc_html__( 'Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_counter' =>['1','2','3','4'],
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
							'{{WRAPPER}} .all_counter_color i' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .all_counter_color i',
					]
				);				
				/*  icon font size */
				$this->add_responsive_control(
					'witr_icon_size',
					[
						'label' => esc_html__( 'Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_counter_color i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_counter_color i' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_icon_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_counter_color i' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_counter_color i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Text Align', 'softd' ),
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
							'{{WRAPPER}} .all_counter_color i' => 'text-align: {{VALUE}}',
						],
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
						'default' => 'default ',
						'selectors' => [
							'{{WRAPPER}} .all_counter_color i' => 'border-style: {{VALUE}}',
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
							'{{WRAPPER}} .all_counter_color i' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .all_counter_color i' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
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
							'{{WRAPPER}} .all_counter_color i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_counter_color i',
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
							'{{WRAPPER}} .all_counter_color i' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);				
					/* witr_posi_style */
					$this->add_control(
						'witr_posi_style',
						[
							'label' => esc_html__( 'Position', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								' ' => esc_html__( 'Select Option', 'softd' ),
								'top' => esc_html__( 'Top', 'softd' ),
								'left' => esc_html__( 'Left', 'softd' ),
								'right' => esc_html__( 'Right', 'softd' ),	
							],
							'default' => 'top',
							'selectors' => [
								'{{WRAPPER}} .witr_counter_icon,{{WRAPPER}} .witr_custom_icon,{{WRAPPER}} .counter_icon,{{WRAPPER}} .witr_counter_icon4' => 'float: {{VALUE}}',
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
							'{{WRAPPER}} .all_counter_color i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .all_counter_color i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .all_counter_color:hover i' => 'color: {{VALUE}}',
							],
						]
					);
					/* hovrt Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hovet_icon',
							'label' => esc_html__( 'Icon Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .all_counter_color:hover i',
						]
					);					
					/* border_color */
					$this->add_control(
						'witr_ico_borders_color4',
						[
							'label' => esc_html__( 'Border Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .all_counter_color:hover i' => 'border-color: {{VALUE}}',
							],
						]
					);
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();
		/*=== end witr_icon style ====*/	
				
		
		
		/*=== start witr_inner_box style 3 ====*/
		$this->start_controls_section(
			'section_style_inner_box',
			[
				'label' => esc_html__( 'Inner Box Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_counter' =>['3'],
				],				
				
			]
		);
		
			/*=== start inner_box_tabs style ====*/
			$this->start_controls_tabs( 'inner_box_colors' );
			
				/*=== start inner_box_normal style ====*/
				$this->start_controls_tab(
					'inner_box_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				

				/* witr_border_style */
				$this->add_control(
					'witr_inner_border_style',
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
							'{{WRAPPER}} .single_counter' => 'border-top-style: {{VALUE}};border-bottom-style: {{VALUE}}',
							'{{WRAPPER}} .single_counter::before,{{WRAPPER}} .single_counter::after' => 'border-left-style: {{VALUE}};border-right-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				$this->add_control(
					'witr_inner_border',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .single_counter' => 'border-top-width: {{TOP}}{{UNIT}};border-bottom-width:{{BOTTOM}}{{UNIT}};',
							'{{WRAPPER}} .single_counter::before,{{WRAPPER}} .single_counter::after' => 'border-left-width: {{LEFT}}{{UNIT}};border-right-width:{{RIGHT}}{{UNIT}};',
						],
						'condition' => [
							'witr_inner_border_style' => ['solid','double','dotted','dashed','default'],
						],
					]							
				);
				/* border_color */
				$this->add_control(
					'witr_inner_border_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .single_counter' => 'border-top-color: {{VALUE}};border-bottom-color: {{VALUE}}',
							'{{WRAPPER}} .single_counter::before,{{WRAPPER}} .single_counter::after' => 'border-left-color: {{VALUE}};border-right-color: {{VALUE}}',
						],
						'condition' => [
							'witr_inner_border_style' => ['solid','double','dotted','dashed','default'],
						],
					]
				);				
				
				/* box inner background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_innbox_background',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .single_counter',
					]
				);		

				$this->end_controls_tab();
				/*=== end inner_box normal style ====*/
			
				/*=== start inner_box hover style ====*/
				$this->start_controls_tab(
					'inner_box_colors_hover',
						[
							'label' => esc_html__( 'Hover', 'softd' ),
						]
					);
					

				/* box inner background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_innbox_hoverbg',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .single_counter:hover',
					]
				);			
				/*  primary hover color */
				$this->add_control(
					'witr_innbox_hoverbord',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'selectors' => [
							'{{WRAPPER}} .single_counter:hover' => 'border-top-color: {{VALUE}};border-bottom-color: {{VALUE}}',
							'{{WRAPPER}} .single_counter:hover::before,{{WRAPPER}} .single_counter:hover::after' => 'border-left-color: {{VALUE}};border-right-color: {{VALUE}}',
						],
					]
				);	
					
				$this->end_controls_tab();
				/*=== end inner_box hover style ====*/	
			$this->end_controls_tabs();
			/*=== end inner_box_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_inner_box style ====*/			

      /*=== start witr_inner_box style 4 ====*/
		$this->start_controls_section(
			'section_style_inner_box4',
			[
				'label' => esc_html__( 'Box Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_counter' =>['4','5','6'],
				],				
				
			]
		);
		
			/*=== start inner_box_tabs style ====*/
			$this->start_controls_tabs( 'inner_box_color4' );
			
				/*=== start inner_box_normal style ====*/
				$this->start_controls_tab(
					'inner_box_color4_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				

				/* witr_border_style */
				$this->add_control(
					'witr_box_border_style4',
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
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				$this->add_control(
					'witr_inner_border4',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_box_border_style4' => ['solid','double','dotted','dashed','default']
						],
					]							
				);
				/* border_color */
				$this->add_control(
					'witr_inner_border_color4',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_box_border_style4' => ['solid','double','dotted','dashed','default']
						],
					]
				);

				/* border_radius */
				$this->add_control(
					'witr_border_radius4',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_box_border_style4' => ['solid','double','dotted','dashed','default']
						],						
					]
				);				
				
				/* box inner background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_innbox4_background',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single',
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowsc',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single',
					]
				);
				/*  box width */
				$this->add_responsive_control(
					'witr_box_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  box height */
				$this->add_responsive_control(
					'witr_box_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'height: {{SIZE}}{{UNIT}};',
						],
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
							'{{WRAPPER}} .witr_single_counter,{{WRAPPER}} .witr_counter_single' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				$this->end_controls_tab();
				/*=== end inner_box normal style ====*/
			
				/*=== start inner_box hover style ====*/
				$this->start_controls_tab(
					'inner_box_colors_hover4',
						[
							'label' => esc_html__( 'Hover', 'softd' ),
						]
					);
					
				/*  all hover color */
				$this->add_control(
					'witr_all_text_hover',
					[
						'label' => esc_html__( 'All Text Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter:hover.all_counter_color i,{{WRAPPER}} .witr_single_counter:hover.all_counter_color h4,{{WRAPPER}} .witr_single_counter:hover.all_counter_color h3,{{WRAPPER}} .witr_single_counter:hover.all_counter_color span' => 'color: {{VALUE}}',
							
							'{{WRAPPER}} .witr_counter_single:hover.all_counter_color h4,{{WRAPPER}} .witr_counter_single:hover.all_counter_color h3,{{WRAPPER}} .witr_counter_single:hover.all_counter_color span,{{WRAPPER}} .witr_counter_single:hover.all_counter_color p' => 'color: {{VALUE}}',
						],
					]
				);
				/* box inner background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_innbox_hoverbg4',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_single_counter:hover,{{WRAPPER}} .witr_counter_single:hover',
					]
				);

				/* witr_border_style */
				$this->add_control(
					'witr_box_borderh_style4',
					[
						'label' => esc_html__( 'Border Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'default' => 'default',
						'options' => [
							'none' => esc_html__( 'none', 'softd' ),
							'solid' => esc_html__( 'Solid', 'softd' ),
							'double' => esc_html__( 'Double', 'softd' ),
							'dotted' => esc_html__( 'Dotted', 'softd' ),
							'dashed' => esc_html__( 'Dashed', 'softd' ),
							'default' => esc_html__( 'Default', 'softd' ),
						],
						
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter:hover,{{WRAPPER}} .witr_counter_single:hover' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				$this->add_control(
					'witr_innerh_borderh4',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter:hover,{{WRAPPER}} .witr_counter_single:hover' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_box_borderh_style4' => ['solid','double','dotted','dashed','default'],
						],
					]							
				);

				/*  Border hover color */
				$this->add_control(
					'witr_innbox_hoverbord4',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter:hover,{{WRAPPER}} .witr_counter_single:hover' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_box_borderh_style4' => ['solid','double','dotted','dashed','default'],
						],						
					]
				);
				
				/* border_radius */
				$this->add_control(
					'witr_borderh_radius4',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_single_counter:hover,{{WRAPPER}} .witr_counter_single:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],						
					]
				);

				
	
					
				$this->end_controls_tab();
				/*=== end inner_box hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end inner_box_tabs style ====*/

		$this->end_controls_section();

		/*=== end witr_inner_box style ====*/			

        


    }/*==function end==*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
		
		switch ( $witrshowdata['witr_style_counter'] ) {	

		case '6':
		?>
			<div class="witr_counter_single witr_counter_6 all_counter_color">
				<div class="witr_counter_number_inn">
					<div class="wirt_new_iner">
						<!-- number -->
						<?php if(isset($witrshowdata['witr_counter_number']) && ! empty($witrshowdata['witr_counter_number'])){?>
							<h3 class="counter"><?php echo $witrshowdata['witr_counter_number']; ?> </h3>				
						<?php } ?>
						<!-- symbol -->
						<?php if(isset($witrshowdata['witr_counter_symbol']) && ! empty($witrshowdata['witr_counter_symbol'])){?>
							<span><?php echo $witrshowdata['witr_counter_symbol']; ?></span>
						<?php } ?>
					</div>
					<div class="wirt_counter_tiner">
						<!-- title -->
						<?php if(isset($witrshowdata['witr_counter_title']) && ! empty($witrshowdata['witr_counter_title'])){?>
							<h1><?php echo $witrshowdata['witr_counter_title']; ?></h1>
						<?php } ?>					
						<!-- content -->
						<?php if(isset($witrshowdata['witr_counter_content']) && ! empty($witrshowdata['witr_counter_content'])){?>
							<p><?php echo $witrshowdata['witr_counter_content']; ?> </p>		
						<?php } ?>					
					</div> 		
				</div> 		
			</div>				
		
		<?php
		break;
		
		case '5':
		?>
			<div class="witr_counter_single counter_5 all_counter_color">
				<div class="witr_counter_number_inn">
					<div class="wirt_new_iner">
					<!-- number -->
					<?php if(isset($witrshowdata['witr_counter_number']) && ! empty($witrshowdata['witr_counter_number'])){?>
						<h3 class="counter"><?php echo $witrshowdata['witr_counter_number']; ?> </h3>				
					<?php } ?>
					<!-- symbol -->
					<?php if(isset($witrshowdata['witr_counter_symbol']) && ! empty($witrshowdata['witr_counter_symbol'])){?>
						<span><?php echo $witrshowdata['witr_counter_symbol']; ?></span>
					<?php } ?>
					</div>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_counter_title']) && ! empty($witrshowdata['witr_counter_title'])){?>
						<h4><?php echo $witrshowdata['witr_counter_title']; ?> </h4>		
					<?php } ?>
					<!-- content -->
					<?php if(isset($witrshowdata['witr_counter_content']) && ! empty($witrshowdata['witr_counter_content'])){?>
					<div class="wirt_new_content">
						<p><?php echo $witrshowdata['witr_counter_content']; ?> </p>
					</div>	
					<?php } ?>					
				</div> <!-- counter part -->		
			</div>				
		
		<?php
		break;
		case '4':
		?>
			<div class="witr_single_counter all_counter_color">
				<?php if($witrshowdata['witr_show_icon']=='yes' ){ ?>
					<div class="witr_counter_icon4 ">			
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>					
						<!-- end icon -->
					</div>
				<?php	} ?>
				<!-- custom icon -->
				<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
					<div class="witr_custom_icon">
						<?php if(isset($witrshowdata['witr_counter_custom']) && ! empty($witrshowdata['witr_counter_custom'])){?>	
							<i class="<?php echo $witrshowdata['witr_counter_custom']; ?>"></i>
						<?php } ?>
					</div>	
				<?php } ?>				
				<div class="witr_counter_text">
					<!-- content -->
					<?php if(isset($witrshowdata['witr_counter_title']) && ! empty($witrshowdata['witr_counter_title'])){?>
						<h4><?php echo $witrshowdata['witr_counter_title']; ?> </h4>		
					<?php } ?>
					<!-- number -->
					<?php if(isset($witrshowdata['witr_counter_number']) && ! empty($witrshowdata['witr_counter_number'])){?>
						<h3 class="counter"><?php echo $witrshowdata['witr_counter_number']; ?> </h3>				
					<?php } ?>
					<!-- symbol -->
					<?php if(isset($witrshowdata['witr_counter_symbol']) && ! empty($witrshowdata['witr_counter_symbol'])){?>
						<span><?php echo $witrshowdata['witr_counter_symbol']; ?></span>
					<?php } ?>
				</div>					
			</div> 				
		
		<?php
		break;
		case '3':
		?>
			<div class="single_counter all_counter_color">
				<div class="single_counter_inner">
					<?php if($witrshowdata['witr_show_icon']=='yes' ){ ?>
						<div class="counter_icon ">			
								<!-- icon -->
								<?php if ( $is_new || $migrated ) :
									Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
								else : ?>
									<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
								<?php endif; ?>					
								<!-- end icon -->
						</div>
					<?php	} ?>
					<!-- custom icon -->
					<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
						<div class="counter_icon ">	
							<?php if(isset($witrshowdata['witr_counter_custom']) && ! empty($witrshowdata['witr_counter_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_counter_custom']; ?>"></i>
							<?php } ?>
						</div>	
					<?php } ?>					
					<div class="counter_title">
						<!-- content -->
						<?php if(isset($witrshowdata['witr_counter_title']) && ! empty($witrshowdata['witr_counter_title'])){?>
							<h4><?php echo $witrshowdata['witr_counter_title']; ?> </h4>		
						<?php } ?>
						
					</div>
					
					<div class="countr_text">
						<!-- number -->
						<?php if(isset($witrshowdata['witr_counter_number']) && ! empty($witrshowdata['witr_counter_number'])){?>
							<h3 class="counter"><?php echo $witrshowdata['witr_counter_number']; ?> </h3>				
						<?php } ?>
						<!-- symbol -->
						<?php if(isset($witrshowdata['witr_counter_symbol']) && ! empty($witrshowdata['witr_counter_symbol'])){?>
							<span><?php echo $witrshowdata['witr_counter_symbol']; ?></span>
						<?php } ?>
					</div>
					
				</div>						
			</div> 				
		
		<?php
		break;
		
		
		case '2':
		?>
			<div class="witr_counter_single single_counter_inner all_counter_color">
				<?php if($witrshowdata['witr_show_icon']=='yes' ){ ?>
					<div class="witr_counter_icon">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>					
						<!-- end icon -->
						
					</div>
				<?php	} ?>
				<!-- custom icon -->
				<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
					<div class="witr_custom_icon">
						<?php if(isset($witrshowdata['witr_counter_custom']) && ! empty($witrshowdata['witr_counter_custom'])){?>	
							<i class="<?php echo $witrshowdata['witr_counter_custom']; ?>"></i>
						<?php } ?>
					</div>	
				<?php } ?>
				<div class="witr_counter_number">
					<div class="witr_counter_number_inn">
						<!-- content -->
						<?php if(isset($witrshowdata['witr_counter_title']) && ! empty($witrshowdata['witr_counter_title'])){?>
							<h4><?php echo $witrshowdata['witr_counter_title']; ?> </h4>		
						<?php } ?>					
						<!-- number -->
						<?php if(isset($witrshowdata['witr_counter_number']) && ! empty($witrshowdata['witr_counter_number'])){?>
							<h3 class="counter"><?php echo $witrshowdata['witr_counter_number']; ?> </h3>		
						<?php } ?>
						<!-- symbol -->
						<?php if(isset($witrshowdata['witr_counter_symbol']) && ! empty($witrshowdata['witr_counter_symbol'])){?>
							<span><?php echo $witrshowdata['witr_counter_symbol']; ?></span>
						<?php } ?>						
					
					</div>
				</div>
				
			</div> <!-- counter part -->		
		
		<?php
		break;
		
		default:
		?>
			<div class="witr_counter_single all_counter_color">
				<?php if($witrshowdata['witr_show_icon']=='yes' ){ ?>
					<div class="witr_counter_icon">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>					
						<!-- end icon -->
						
					</div>
				<?php	} ?>
				<!-- custom icon -->
				<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
					<div class="witr_custom_icon">
						<?php if(isset($witrshowdata['witr_counter_custom']) && ! empty($witrshowdata['witr_counter_custom'])){?>	
							<i class="<?php echo $witrshowdata['witr_counter_custom']; ?>"></i>
						<?php } ?>
					</div>	
				<?php } ?>			
			
				<div class="witr_counter_number_inn">
					<!-- number -->
					<?php if(isset($witrshowdata['witr_counter_number']) && ! empty($witrshowdata['witr_counter_number'])){?>
						<h3 class="counter"><?php echo $witrshowdata['witr_counter_number']; ?> </h3>				
					<?php } ?>
					<!-- symbol -->
					<?php if(isset($witrshowdata['witr_counter_symbol']) && ! empty($witrshowdata['witr_counter_symbol'])){?>
						<span><?php echo $witrshowdata['witr_counter_symbol']; ?></span>
					<?php } ?>
					<!-- content -->
					<?php if(isset($witrshowdata['witr_counter_title']) && ! empty($witrshowdata['witr_counter_title'])){?>
						<h4><?php echo $witrshowdata['witr_counter_title']; ?> </h4>		
					<?php } ?>					
				</div> <!-- counter part -->		
			</div>		
		
		<?php
		break;

		
		} //end switch		
			
			
	


    }/*==function end==*/


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Counter() );
