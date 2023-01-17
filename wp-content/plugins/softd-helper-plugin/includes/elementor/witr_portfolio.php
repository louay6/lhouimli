<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Elementor_Widget_Portfolio extends Widget_Base {

    public function get_name() {
        return 'witr_portfolio_section';
    }
    
    public function get_title() {
        return esc_html__( 'WITR : Post Portfolio', 'softd' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

		/*=== witr portfolio options ====*/
        $this->start_controls_section(
            'witr_portfolio_option',
            [
                'label' => esc_html__( 'witr portfolio options', 'softd' ),
            ]
        );
		
		
			/* portfolio style witr_style_portfolio */
			$this->add_control(
				'witr_style_portfolio',
				[
					'label' => esc_html__( 'Portfolio style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'1' => esc_html__( 'Portfolio style 1', 'softd' ),
						'2' => esc_html__( 'Portfolio style 2', 'softd' ),
						'3' => esc_html__( 'Portfolio style 3', 'softd' ),
						'4' => esc_html__( 'Portfolio style 4', 'softd' ),
						'5' => esc_html__( 'Portfolio style 5', 'softd' ),
					],
					'default' => '1',
				]
			);
			

			
			/* portfolio iten show witr_post_per_page */
            $this->add_control(
                'witr_post_per_page',
                [
                    'label' => __( 'Show Number Of portfolio', 'softd' ),
                    'type' => Controls_Manager::NUMBER,				
                    'separator' => 'before',
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                    'default' => 3,
                ]
            );
			/* portfolio show witr_adc_portfolio */
 			$this->add_control(
				'witr_adc_portfolio',
				[
					'label' => esc_html__( 'Portfolio ASC/DSC style', 'softd' ),
					'type' => Controls_Manager::SELECT,
                    'separator' => 'before',					
					'options' => [
						'DESC'	=> esc_html__( 'Descending', 'softd' ),
						'ASC'	=> esc_html__( 'Ascending', 'softd' )
					],
					'default' => 'DESC',
				]
			);
			/* portfolio column witr_column_grid */
            $this->add_control(
                'witr_column_grid',
                [
                    'label' => esc_html__( 'Set Columns', 'softd' ),
                    'type' => Controls_Manager::SELECT,
					'description' =>"set your column from here",
                    'separator' => 'before',					
                    'default' => '4',
                    'options' => [
                        '12' => esc_html__( '1', 'softd' ),
                        '6' => esc_html__( '2', 'softd' ),
                        '4' => esc_html__( '3', 'softd' ),
                        '3' => esc_html__( '4', 'softd' ),
                        '2' => esc_html__( '6', 'softd' ),
                    ],
                ]
            );
		
			/* portfolio button witr_portfolio_button */			
            $this->add_control(
                'witr_portfolio_button',
                [
                    'label' => esc_html__( 'Filter Text', 'softd' ),
                    'type' => Controls_Manager::TEXT,
                    'separator' => 'before',					
					'description' => esc_html__( 'change all work to your own text', 'softd' ),
					'placeholder' => esc_attr__( 'ex - All Work', 'softd' ),
                    'default' => esc_html__( 'All Work', 'softd' ),
                ]
            );		
			/* gutter  witr_gutter_column */
			$this->add_control(
				'witr_gutter_column',
				[
					'label' => esc_html__( 'Show Gutter', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
                    'separator' => 'before',					
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			/* Filter  witr_filder_show */
			$this->add_control(
				'witr_filder_show',
				[
					'label' => esc_html__( 'Show Filter Menu', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
                    'separator' => 'before',					
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			
			/* pagination  witr_pagination */
			$this->add_control(
				'witr_pagination',
				[
					'label' => esc_html__( 'Show Pagination', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
                    'separator' => 'before',					
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
				]
			);	           

        $this->end_controls_section();
		/*=== witr portfolio options end ====*/

		
		
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
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .prot_content h3 a,{{WRAPPER}} .porttitle_inner4 h3 a' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',					
					'selectors' => [
						'{{WRAPPER}} .prot_content h3 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .prot_content h3 a',
				]
			);						
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin',
				[
					'label' => __( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .prot_content h3 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding',
				[
					'label' => __( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .prot_content h3 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'selectors' => [
						'{{WRAPPER}} .pstyle_1 .porttitle_inner p span,{{WRAPPER}} .porttitle_inner4 p span' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .prot_content p span',
				]
			);		

			/* content margin */
			$this->add_responsive_control(
				'witr_content_margin',
				[
					'label' => __( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .prot_content p span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'witr_content_padding',
				[
					'label' => __( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .prot_content p span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/
		
		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_icon_option',
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
				/* Icon Color */
				$this->add_control(
					'witr_primary_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'color: {{VALUE}}',
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
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'font-size: {{SIZE}}{{UNIT}};',
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
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'width: {{SIZE}}{{UNIT}};',
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
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'height: {{SIZE}}{{UNIT}};',
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
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'line-height: {{SIZE}}{{UNIT}};',
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
						'selector' => '{{WRAPPER}} .picon a',
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
							'{{WRAPPER}} .picon a' => 'text-align: {{VALUE}}',
						],
					]
				);
				

				/* witr_border_style */
				$this->add_control(
					'witr_border_style',
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
							'{{WRAPPER}} .picon a' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				
				$this->add_control(
					'witr_border',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* border_color */
				$this->add_control(
					'witr_border_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'border-color: {{VALUE}}',
						],
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				/* blend mode style color */				
				$this->add_control(
					'witr_icon_blend_mode',
					[
						'label' => esc_html__( 'Blend Mode', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
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
							'{{WRAPPER}} .picon a' => 'mix-blend-mode: {{VALUE}}',
						],
						'separator' => 'none',
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .picon a',
					]
				);

				/*  Rotate */
				$this->add_responsive_control(
					'witr_rotate',
					[
						'label' => esc_html__( 'Rotate', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'separator'=>'before',
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
							'{{WRAPPER}} .picon a' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);				
				
				/* icon margin */
				$this->add_responsive_control(
					'witr_icon_margin',
					[
						'label' => esc_html__( 'Icon Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_icon_padding',
					[
						'label' => esc_html__( 'Icon Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .picon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					/*  icon hover color */
					$this->add_control(
						'witr_hover_primary_color',
						[
							'label' => esc_html__( 'Icon Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .picon a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .picon a:hover',
						]
					);
					
					/* border_hover_color */
					$this->add_control(
						'witr_hover_border_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							
							'selectors' => [
								'{{WRAPPER}} .picon a:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					

					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();

		/*=== end witr_icon style ====*/


		
		

		/*=== Start Witr filter style ====*/

		$this->start_controls_section(
			'witr_style_filter_option',
			[
				'label' => esc_html__( 'Witr Filter Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
		
		
			/* witr_align */					
			$this->add_responsive_control(
				'witr_align',
				[
					'label' => __( 'Witr Alignment Filter', 'softd' ),
					'type' => Controls_Manager::CHOOSE,
					'default' => 'center ',
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
					'prefix_class' => 'wittr_pfilter_menu%s--align-',
					'selectors' => [
						'{{WRAPPER}} .portfolio_nav' => 'text-align: {{VALUE}}',
					],
				]
			);		
				/* filter Color */
				$this->add_control(
					'witr_filter_color',
					[
						'label' => esc_html__( 'Filter Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'global' => [
							'default' => Global_Colors::COLOR_PRIMARY,
						],
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li' => 'color: {{VALUE}}',
						],
						
					]
				);
				/* filter hover color */
				$this->add_control(
					'witr_filter_hover_color',
					[
						'label' => esc_html__( 'Filter Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li:hover' => 'color: {{VALUE}}',
						],
					]
				);								
				/*  filter font size */
				$this->add_responsive_control(
					'witr_filter_size',
					[
						'label' => esc_html__( 'Filter Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* Filter background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_filth_background',
						'label' => esc_html__( 'Filter Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .portfolio_nav ul li',
					]
				);				
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_filter_ttpy_color',
						'label' => esc_html__( 'Typography', 'softd' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
						],						
						'selector' => '{{WRAPPER}} .portfolio_nav ul li',
					]
				);
			
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_filter_border',
						'label' => esc_html__( 'Border', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .portfolio_nav ul li',
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_border_radius1',
					[
						'label' => esc_html__( 'Filter Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Filter background heading */
				$this->add_control(
					'witr_heading_background',
					[
						'label' => esc_html__( 'Filter Background Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',

					]
				);
				
				/* Filter background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_filter_background',
						'label' => esc_html__( 'Filter Background Hover', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .portfolio_nav ul li:hover',
					]
				);			
			/* filter margin */
			$this->add_responsive_control(
				'witr_filter_margin',
				[
					'label' => esc_html__( 'Filter Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .portfolio_nav ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* Filter padding */
			$this->add_responsive_control(
				'witr_filter_padding',
				[
					'label' => esc_html__( 'Filter Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .portfolio_nav ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);				
				
		 
		 $this->end_controls_section();
		/*=== end  witr Filter Text style ====*/		



		/*=== Start Witr Active filter style ====*/

		$this->start_controls_section(
			'witr_active_filter_option',
			[
				'label' => esc_html__( 'Witr Active Filter Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 										
				
				/* filter active color */
				$this->add_control(
					'witr_filter_active_color',
					[
						'label' => esc_html__( 'Filter Active Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li.current_menu_item' => 'color: {{VALUE}}',
						],
					]
				);			
				
				/* Active border_color */
				$this->add_control(
					'witr_active_border_color',
					[
						'label' => esc_html__( 'Active Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,						
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li.current_menu_item' => 'border-color: {{VALUE}}',
						],
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_borders_radius',
					[
						'label' => esc_html__( 'Active Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .portfolio_nav ul li.current_menu_item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Active Filter background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_active_filter_background',
						'label' => esc_html__( 'Active Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .portfolio_nav ul li.current_menu_item',
					]
				);				

		
				
		 
		 $this->end_controls_section();
		/*=== end  witr Filter Active style ====*/		

		
		
		
		
		
		/*=== witr_background_option  ====*/
		$this->start_controls_section(
			'witr_background_option',
			[
				'label' => esc_html__( 'Background Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);	


				/* heading */
				$this->add_control(
					'witr_imagehover',
					[
						'label' => esc_html__( 'Image Overlay BG', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);		
		
		
				/* single portfolio background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_port_background',
						'label' => esc_html__( 'Portfolio Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .prot_content',
					]
				);			

				/* heading */
				$this->add_control(
					'witr_titlehover',
					[
						'label' => esc_html__( 'Title and Content BG', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);		
		
		
				/* single portfolio background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_titleh_background',
						'label' => esc_html__( 'Title Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .prot_content_inner,{{WRAPPER}} .positi_3.pprotfolio4',
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
										'max' => 500,
									],
									'%' => [
										'min' => -500,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .prot_content,{{WRAPPER}} .positi_3.pprotfolio4' => 'top: {{SIZE}}{{UNIT}};',
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
									'{{WRAPPER}} .prot_content,{{WRAPPER}} .positi_3.pprotfolio4' => 'left: {{SIZE}}{{UNIT}};',
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
									'{{WRAPPER}} .prot_content,{{WRAPPER}} .positi_3.pprotfolio4' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);
						/* witr_right */
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
									'{{WRAPPER}} .prot_content' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
				
				
				
		
        $this->end_controls_section();
		/*=== witr_background_option ====*/				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata = $this->get_settings_for_display();

        $witr_post_per_page       = ! empty( $witrshowdata['witr_post_per_page'] ) ? $witrshowdata['witr_post_per_page'] : 2;
        $witr_adc_portfolio    = ! empty( $witrshowdata['witr_adc_portfolio'] ) ? $witrshowdata['witr_adc_portfolio'] : 'DESC';
        $witr_title_length    = ! empty( $witrshowdata['witr_title_length'] ) ? $witrshowdata['witr_title_length'] : 5;
        $witr_content_length  = ! empty( $witrshowdata['witr_content_length'] ) ? $witrshowdata['witr_content_length'] : 20;      
        $witr_gutter_column  =  $witrshowdata['witr_gutter_column']=='yes'  ? 'witr_all_pd0' : 'witr_all_mb_30'; 
		
		$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
		$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );	
	
		
                        $args = array(
                            'post_type'            => 'em_portfolio',
                            'post_status'          => 'publish',
                            'ignore_sticky_posts'  => 1,
                            'posts_per_page'       => $witr_post_per_page,
                            'order'                => $witr_adc_portfolio,
							'paged'     => $paged,
							'page'      => $paged
                        );
					$the_query = new \WP_Query($args);
					
					

		 if($witrshowdata['witr_filder_show']=='yes'){?>		
		
		<div class="clearfix kicuakta">
			<div class="col-md-12">
				<div class="portfolio_nav  wittr_pfilter_menu">
					<ul id="filter" class="filter_menu ">
						<li class="current_menu_item" data-filter="*" ><?php if( !empty( $witrshowdata['witr_portfolio_button'] ) ){echo $witrshowdata['witr_portfolio_button'];}?></li>
					<?php 	
					$witr_categories = get_terms('em_portfolio_cat');
						foreach ( $witr_categories as $single_category ) {

							if($single_category !=''){?>
								<li   data-filter=".<?php echo esc_attr( $single_category->slug );?>"><?php echo esc_html( $single_category->name );?></li>
							<?php } ?>
							
						<?php }?>
					</ul>
				</div>

			</div>				
		</div>			
		
		
		<?php }
		
		
   
		switch( $witrshowdata['witr_style_portfolio']){
			case '5':
			?>
			<div class=" em_load pstyle2">				
				<div class="prot_wrap">
				
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 
					
						$terms = get_the_terms(get_the_ID(), 'em_portfolio_cat');
						
						$saloption  = get_post_meta( get_the_ID(),'_softd_saloption', true ); 
						$siimagepop  = get_post_meta( get_the_ID(),'_softd_siimagepop', true ); 
						$sllink  = get_post_meta( get_the_ID(),'_softd_sllink', true ); 
						$shyoutub  = get_post_meta( get_the_ID(),'_softd_shyoutub', true ); 
						$pyoutube  = get_post_meta( get_the_ID(),'_softd_pyoutube', true ); 
						$svvimeo  = get_post_meta( get_the_ID(),'_softd_svvimeo', true ); 
						$pvimeo  = get_post_meta( get_the_ID(),'_softd_pvimeo', true );
						$pshow_cat  = get_post_meta( get_the_ID(),'_softd_pshow_cat', true ); 
						$pshow_title  = get_post_meta( get_the_ID(),'_softd_pshow_title', true ); 									

					?>
						<!-- single portfolio -->
					<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  grid-item col-md-6 col-xs-12 col-sm-12 <?php  if(!empty($terms )){ foreach( $terms as $single_slug){echo $single_slug->slug. ' ';} }	?> <?php echo $witr_gutter_column; ?>" >
							<div class="single_protfolio">
							
								
								
						<?php $m_g_image_pop  = get_post_meta( get_the_ID(),'_softd_m_g_image_pop', true ); 
						if($m_g_image_pop =="m_gshow"){?>
						<div class="prot_thumb">
							<div class="owl-carousel portfolio_gallery_post  curosel-style">	
								
									<?php
										softd_slider_o('_softd_pgellaryu',array(1000,570));									
									?>									
											
							</div>	


								<div class="prot_content multi_gallery">
								<div class="prot_content_inner">
								<?php if($saloption=='m_alshow'): ?>										
										<div class="picon">								
																								
										<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																	
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>			
																
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									

										</div>

								<?php else:  ?>

								<div class="picon">
																	
															
									<?php if($siimagepop=='m_ishow'): ?>									
									<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
									<?php endif; ?>

									<?php if($sllink=='m_lshow'): ?>	
									<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
									<?php endif; ?>

									<?php if($shyoutub=='m_yshow'): ?>	

									<?php if($pyoutube): ?>								
									<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
									<i class="fab fa-youtube"></i></a>		
									<?php endif; ?>

									<?php endif; ?>

									<?php if($svvimeo=='m_vshow'): ?>

									<?php if($pvimeo): ?>									
									<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
									</a>									
									<?php endif; ?>

									<?php endif; ?>

								</div>
																			
								<?php endif; ?>											
																	
									
									<?php if($pshow_title=='ptitle_show'){ ?>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
									<?php } ?>
									
									<?php if($pshow_cat=='pcat_show'){ ?>
									<p>
										<?php if( $terms ){
											
										foreach( $terms as $single_slugs ){?>
											<span class="category-item-p">
											   <?php echo $single_slugs->name ;?>
											</span>																			
										<?php }}?>
									</p>
									<?php } ?>										
								</div>
								</div>

						</div>			

						<?php }else{ ?>
							
							<div class="prot_thumb">
								
									<?php the_post_thumbnail('softd-gallery-thumb');?>
								
								<div class="prot_content">
								<div class="prot_content_inner">

								<?php if($saloption=='m_alshow'): ?>										
										<div class="picon">								
																								
										<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																	
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>			
																
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									

										</div>

								<?php else:  ?>

								<div class="picon">
																	
															
									<?php if($siimagepop=='m_ishow'): ?>									
									<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
									<?php endif; ?>

									<?php if($sllink=='m_lshow'): ?>	
									<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
									<?php endif; ?>

									<?php if($shyoutub=='m_yshow'): ?>	

									<?php if($pyoutube): ?>								
									<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
									<i class="fab fa-youtube"></i></a>		
									<?php endif; ?>

									<?php endif; ?>

									<?php if($svvimeo=='m_vshow'): ?>

									<?php if($pvimeo): ?>									
									<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
									</a>									
									<?php endif; ?>

									<?php endif; ?>

								</div>
																			
								<?php endif; ?>											
																	
									
										<?php if($pshow_title=='ptitle_show'){ ?>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
										<?php } ?>
										
										<?php if($pshow_cat=='pcat_show'){ ?>
										<p>
											<?php if( $terms ){
												
											foreach( $terms as $single_slugs ){?>
												<span class="category-item-p">
												   <?php echo $single_slugs->name ;?>
												</span>																			
											<?php }}?>
										</p>
										<?php } ?>									
								</div>
								</div>
										
							</div>				
	
						<?php } ?>					
																	

								
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>

					
				</div>
			</div>					

			<?php			
			break;
			case '4':
			?>
			<div class=" em_load pstyle2 pstyle3">		
				<div class="prot_wrap">
				
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 
						$terms = get_the_terms(get_the_ID(), 'em_portfolio_cat');
						
						$saloption  = get_post_meta( get_the_ID(),'_softd_saloption', true ); 
						$siimagepop  = get_post_meta( get_the_ID(),'_softd_siimagepop', true ); 
						$sllink  = get_post_meta( get_the_ID(),'_softd_sllink', true ); 
						$shyoutub  = get_post_meta( get_the_ID(),'_softd_shyoutub', true ); 
						$pyoutube  = get_post_meta( get_the_ID(),'_softd_pyoutube', true ); 
						$svvimeo  = get_post_meta( get_the_ID(),'_softd_svvimeo', true ); 
						$pvimeo  = get_post_meta( get_the_ID(),'_softd_pvimeo', true );
						$pshow_cat  = get_post_meta( get_the_ID(),'_softd_pshow_cat', true ); 
						$pshow_title  = get_post_meta( get_the_ID(),'_softd_pshow_title', true ); 									

					?>
						<!-- single portfolio -->
					<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  grid-item col-md-6 col-xs-12 col-sm-12 <?php  if(!empty($terms )){ foreach( $terms as $single_slug){echo $single_slug->slug. ' ';} }	?> <?php echo $witr_gutter_column; ?>" >
							<div class="single_protfolio">
							
							
							<div class="prot_thumb">
								
									<?php the_post_thumbnail();?>
								<?php if($pshow_title=='ptitle_show' || $pshow_cat=='pcat_show'){ ?>
								<div class="prot_content">
								<div class="prot_content_inner">
									
																	
									<?php if($pshow_title=='ptitle_show'){ ?>
										
										<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
									<?php } ?>	
									<?php if($pshow_cat=='pcat_show'){ ?>
										<p>
											<?php if( $terms ){
												
											foreach( $terms as $single_slugs ){?>
												<span class="category-item-p">
												   <?php echo $single_slugs->name ;?>
												</span>																			
											<?php }}?>
										</p>
									<?php } ?>				
								</div>
								</div>
								<?php }  ?>
								

							<div class="em_plus_port">
								<?php if($saloption=='m_alshow'): ?>										
										<div class="picon">								
																								
										<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

										<a href="<?php the_permalink(); ?>"><i class="fas fa-plus"></i></a>	
																	
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>			
																
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									

										</div>

								<?php else: //or ?>

								<div class="picon">
																	
															
									<?php if($siimagepop=='m_ishow'): ?>									
									<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
									<?php endif; ?>

									<?php if($sllink=='m_lshow'): ?>	
									<a href="<?php the_permalink(); ?>"><i class="fas fa-plus"></i></a>	
									<?php endif; ?>

									<?php if($shyoutub=='m_yshow'): ?>	

									<?php if($pyoutube): ?>								
									<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
									<i class="fab fa-youtube"></i></a>		
									<?php endif; ?>

									<?php endif; ?>

									<?php if($svvimeo=='m_vshow'): ?>

									<?php if($pvimeo): ?>									
									<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
									</a>									
									<?php endif; ?>

									<?php endif; ?>

								</div>
																			
								<?php endif; ?>		

							</div>



								
							</div>				
	
									
																	

								
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>
				</div>
			</div>					

			<?php			
			break;
			case '3':
			?>
			<div class=" em_load pstyle_1 pstyle4">		
				<div class="prot_wrap">
				
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 		
												
						$terms = get_the_terms(get_the_ID(), 'em_portfolio_cat');
						
						$saloption  = get_post_meta( get_the_ID(),'_softd_saloption', true ); 
						$siimagepop  = get_post_meta( get_the_ID(),'_softd_siimagepop', true ); 
						$sllink  = get_post_meta( get_the_ID(),'_softd_sllink', true ); 
						$shyoutub  = get_post_meta( get_the_ID(),'_softd_shyoutub', true ); 
						$pyoutube  = get_post_meta( get_the_ID(),'_softd_pyoutube', true ); 
						$svvimeo  = get_post_meta( get_the_ID(),'_softd_svvimeo', true ); 
						$pvimeo  = get_post_meta( get_the_ID(),'_softd_pvimeo', true );
						$pshow_cat  = get_post_meta( get_the_ID(),'_softd_pshow_cat', true ); 
						$pshow_title  = get_post_meta( get_the_ID(),'_softd_pshow_title', true ); 									

					?>
						<!-- single portfolio -->
					<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  grid-item col-md-6 col-xs-12 col-sm-12 <?php  if(!empty($terms )){ foreach( $terms as $single_slug){echo $single_slug->slug. ' ';} }	?> <?php echo $witr_gutter_column; ?>" >
							<div class="single_protfolio">
							
								
								
						<?php $m_g_image_pop  = get_post_meta( get_the_ID(),'_softd_m_g_image_pop', true ); 
						if($m_g_image_pop =="m_gshow"){?>
						<div class="prot_thumb">
								<div class="owl-carousel portfolio_gallery_post  curosel-style">	
										<?php
											softd_slider_o('_softd_pgellaryu',array(1000,570));									
										?>											
								</div>	
								<div class="prot_content multi_gallery">
									<div class="prot_content_inner">
									<?php if($saloption=='m_alshow'): ?>										
											<div class="picon">								
																									
											<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

											<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																		
											<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
											<i class="fab fa-youtube"></i></a>			
																	
											<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
											</a>									

											</div>

									<?php else: //or ?>

									<div class="picon">
																		
																
										<?php if($siimagepop=='m_ishow'): ?>									
										<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
										<?php endif; ?>

										<?php if($sllink=='m_lshow'): ?>	
										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
										<?php endif; ?>

										<?php if($shyoutub=='m_yshow'): ?>	

										<?php if($pyoutube): ?>								
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>		
										<?php endif; ?>

										<?php endif; ?>

										<?php if($svvimeo=='m_vshow'): ?>

										<?php if($pvimeo): ?>									
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									
										<?php endif; ?>

										<?php endif; ?>

									</div>
																				
									<?php endif; ?>											
																																								
									</div>
									
									
									
								</div>
								
								<?php if($pshow_title=='ptitle_show'){ ?>
									<div class="pprotfolio4 positi_3">
										<div class="porttitle_inner4">
											
											<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
											
											
											<?php if($pshow_cat=='pcat_show'){ ?>
											<p>
												<?php if( $terms ){
													
												foreach( $terms as $single_slugs ){?>
													<span class="category-item-p">
													   <?php echo $single_slugs->name ;?>
													</span>																			
												<?php }?>
												<?php }?>	
											</p>
											<?php } ?>												
												
										</div>
									</div>
								
								<?php } ?>								

						</div>	


						<?php }else{ ?>
							
							<div class="prot_thumb">
								
									<?php the_post_thumbnail('softd-gallery-thumb');?>
								
								<div class="prot_content">
									<div class="prot_content_inner">

									<?php if($saloption=='m_alshow'): ?>										
											<div class="picon">								
																									
											<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

											<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																		
											<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
											<i class="fab fa-youtube"></i></a>			
																	
											<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
											</a>									

											</div>

									<?php else: //or ?>

									<div class="picon">
																		
																
										<?php if($siimagepop=='m_ishow'): ?>									
										<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
										<?php endif; ?>

										<?php if($sllink=='m_lshow'): ?>	
										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
										<?php endif; ?>

										<?php if($shyoutub=='m_yshow'): ?>	

										<?php if($pyoutube): ?>								
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>		
										<?php endif; ?>

										<?php endif; ?>

										<?php if($svvimeo=='m_vshow'): ?>

										<?php if($pvimeo): ?>									
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									
										<?php endif; ?>

										<?php endif; ?>

									</div>
																				
									<?php endif; ?>																	
									</div>
								</div>
								
									<?php if($pshow_title=='ptitle_show'){ ?>
										<div class="pprotfolio4 positi_3">
											<div class="porttitle_inner4">
												
												<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
												
												
												<?php if($pshow_cat=='pcat_show'){ ?>
												<p>
													<?php if( $terms ){
														
													foreach( $terms as $single_slugs ){?>
														<span class="category-item-p">
														   <?php echo $single_slugs->name ;?>
														</span>																			
													<?php }?>
													<?php }?>	
												</p>
												<?php } ?>												
													
											</div>
										</div>
									
									<?php } ?>								
								
										
							</div>	



						<?php } ?>					
																	

								
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>
				</div>
			</div>					

			<?php			
			break;
			
			case '2':
			?>
			<div class=" em_load pstyle_1 pstyle4">
		
				<div class="prot_wrap">
				
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 
					
						$terms = get_the_terms(get_the_ID(), 'em_portfolio_cat');
						
						$saloption  = get_post_meta( get_the_ID(),'_softd_saloption', true ); 
						$siimagepop  = get_post_meta( get_the_ID(),'_softd_siimagepop', true ); 
						$sllink  = get_post_meta( get_the_ID(),'_softd_sllink', true ); 
						$shyoutub  = get_post_meta( get_the_ID(),'_softd_shyoutub', true ); 
						$pyoutube  = get_post_meta( get_the_ID(),'_softd_pyoutube', true ); 
						$svvimeo  = get_post_meta( get_the_ID(),'_softd_svvimeo', true ); 
						$pvimeo  = get_post_meta( get_the_ID(),'_softd_pvimeo', true );
						$pshow_cat  = get_post_meta( get_the_ID(),'_softd_pshow_cat', true ); 
						$pshow_title  = get_post_meta( get_the_ID(),'_softd_pshow_title', true ); 									

					?>
					<!-- single portfolio -->
					<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  grid-item col-md-6 col-xs-12 col-sm-12 <?php  if(!empty($terms )){ foreach( $terms as $single_slug){echo $single_slug->slug. ' ';} }	?> <?php echo $witr_gutter_column; ?>" >
						<div class="single_protfolio">
							
								
								
						<?php $m_g_image_pop  = get_post_meta( get_the_ID(),'_softd_m_g_image_pop', true ); 
						if($m_g_image_pop =="m_gshow"){?>
						<div class="prot_thumb">
							<div class="owl-carousel portfolio_gallery_post  curosel-style">	
								
									<?php
										softd_slider_o('_softd_pgellaryu',array(1000,570));									
									?>									
											
							</div>	


								<div class="prot_content multi_gallery">
									<div class="prot_content_inner">
									<?php if($saloption=='m_alshow'): ?>										
											<div class="picon">								
																									
											<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

											<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																		
											<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
											<i class="fab fa-youtube"></i></a>			
																	
											<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
											</a>									

											</div>

									<?php else: //or ?>

									<div class="picon">
																		
																
										<?php if($siimagepop=='m_ishow'): ?>									
										<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
										<?php endif; ?>

										<?php if($sllink=='m_lshow'): ?>	
										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
										<?php endif; ?>

										<?php if($shyoutub=='m_yshow'): ?>	

										<?php if($pyoutube): ?>								
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>		
										<?php endif; ?>

										<?php endif; ?>

										<?php if($svvimeo=='m_vshow'): ?>

										<?php if($pvimeo): ?>									
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									
										<?php endif; ?>

										<?php endif; ?>

									</div>
																				
									<?php endif; ?>											
																																								
									</div>
									
									
									
								</div>

						</div>	
									<?php if($pshow_title=='ptitle_show'){ ?>
										<div class="pprotfolio4">
											<div class="porttitle_inner4">
												
												<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
												
												
												<?php if($pshow_cat=='pcat_show'){ ?>
												<p>
													<?php if( $terms ){
														
													foreach( $terms as $single_slugs ){?>
														<span class="category-item-p">
														   <?php echo $single_slugs->name ;?>
														</span>																			
													<?php }} ?>
														
												</p>
												<?php } ?>												
													
											</div>
										</div>
									
									<?php } ?>

						

						<?php }else{ ?>
							
							<div class="prot_thumb">
								
									<?php the_post_thumbnail();?>
								
								<div class="prot_content">
									<div class="prot_content_inner">

									<?php if($saloption=='m_alshow'): ?>										
											<div class="picon">								
																									
											<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

											<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																		
											<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
											<i class="fab fa-youtube"></i></a>			
																	
											<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
											</a>									

											</div>

									<?php else: //or ?>

									<div class="picon">
																		
																
										<?php if($siimagepop=='m_ishow'): ?>									
										<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
										<?php endif; ?>

										<?php if($sllink=='m_lshow'): ?>	
										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
										<?php endif; ?>

										<?php if($shyoutub=='m_yshow'): ?>	

										<?php if($pyoutube): ?>								
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>		
										<?php endif; ?>

										<?php endif; ?>

										<?php if($svvimeo=='m_vshow'): ?>

										<?php if($pvimeo): ?>									
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									
										<?php endif; ?>

										<?php endif; ?>

									</div>
																				
									<?php endif; ?>											
																		
										
						
									</div>

								
									
								</div>
										
							</div>	

									<?php if($pshow_title=='ptitle_show'){ ?>
										<div class="pprotfolio4">
											<div class="porttitle_inner4">
												
												<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
												
												
												<?php if($pshow_cat=='pcat_show'){ ?>
												<p>
													<?php if( $terms ){
														
													foreach( $terms as $single_slugs ){?>
														<span class="category-item-p">
														   <?php echo $single_slugs->name ;?>
														</span>																			
													<?php }?>
													<?php }?>	
												</p>
												<?php } ?>												
													
											</div>
										</div>
									
									<?php } ?>
	
						<?php } ?>					
																	

								
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>
				</div>
			</div>					

			<?php				
			break;			
			default:
        ?>
	
			<div class=" em_load pstyle_1 em_port_container">					
				<div class="prot_wrap">				
					<?php while ($the_query->have_posts()) : $the_query->the_post(); 						
						$terms = get_the_terms(get_the_ID(), 'em_portfolio_cat');
						
						$saloption  = get_post_meta( get_the_ID(),'_softd_saloption', true ); 
						$siimagepop  = get_post_meta( get_the_ID(),'_softd_siimagepop', true ); 
						$sllink  = get_post_meta( get_the_ID(),'_softd_sllink', true ); 
						$shyoutub  = get_post_meta( get_the_ID(),'_softd_shyoutub', true ); 
						$pyoutube  = get_post_meta( get_the_ID(),'_softd_pyoutube', true ); 
						$svvimeo  = get_post_meta( get_the_ID(),'_softd_svvimeo', true ); 
						$pvimeo  = get_post_meta( get_the_ID(),'_softd_pvimeo', true );
						$pshow_cat  = get_post_meta( get_the_ID(),'_softd_pshow_cat', true ); 
						$pshow_title  = get_post_meta( get_the_ID(),'_softd_pshow_title', true );
					?>
							
					
					
					
					
					
						<!-- single portfolio -->
						<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  grid-item col-md-6 col-xs-12 col-sm-12 <?php  if(!empty($terms )){ foreach( $terms as $single_slug){echo $single_slug->slug. ' ';} }	?> <?php echo $witr_gutter_column; ?>" >
							<div class="single_protfolio">
		
						<?php $m_g_image_pop  = get_post_meta( get_the_ID(),'_softd_m_g_image_pop', true ); 
						if($m_g_image_pop =="m_gshow"){?>
						<div class="prot_thumb">
							<div class="owl-carousel portfolio_gallery_post  curosel-style">	
									<?php
										softd_slider_o('_softd_pgellaryu',array(1000,570));									
									?>											
							</div>	
								<div class="prot_content multi_gallery">
									<div class="prot_content_inner">
									<?php if($saloption=='m_alshow'): ?>										
											<div class="picon">								
																									
											<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

											<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																		
											<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
											<i class="fab fa-youtube"></i></a>			
																	
											<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
											</a>									

											</div>

									<?php else: //or ?>

									<div class="picon">
																		
																
										<?php if($siimagepop=='m_ishow'): ?>									
										<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
										<?php endif; ?>

										<?php if($sllink=='m_lshow'): ?>	
										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
										<?php endif; ?>

										<?php if($shyoutub=='m_yshow'): ?>	

										<?php if($pyoutube): ?>								
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>		
										<?php endif; ?>

										<?php endif; ?>

										<?php if($svvimeo=='m_vshow'): ?>

										<?php if($pvimeo): ?>									
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									
										<?php endif; ?>

										<?php endif; ?>

									</div>
																				
									<?php endif; ?>											
																																								
									
									
									
									<div class="porttitle_inner">
										<?php if($pshow_title=='ptitle_show'){ ?>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
										<?php } ?>
										
										<?php if($pshow_cat=='pcat_show'){ ?>
										<p>
											<?php if( $terms ){
												
											foreach( $terms as $single_slugs ){?>
												<span class="category-item-p">
												   <?php echo $single_slugs->name ;?>
												</span>																			
											<?php }}?>
										</p>
																					
									<?php } ?>
									</div>												
									</div>
								</div>

						</div>			

						<?php }else{ ?>
							
							<div class="prot_thumb">
								
									<?php the_post_thumbnail();?>
								
								<div class="prot_content em_port_content ">
									<div class="prot_content_inner">

									<?php if($saloption=='m_alshow'): ?>										
											<div class="picon">								
																									
											<a class="portfolio-icon venobox" data-gall="myGallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>

											<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
																		
											<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
											<i class="fab fa-youtube"></i></a>			
																	
											<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
											</a>									

											</div>

									<?php else: //or ?>

									<div class="picon">
																		
																
										<?php if($siimagepop=='m_ishow'): ?>									
										<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fas fa-arrows-alt"></i></a>
										<?php endif; ?>

										<?php if($sllink=='m_lshow'): ?>	
										<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>	
										<?php endif; ?>

										<?php if($shyoutub=='m_yshow'): ?>	

										<?php if($pyoutube): ?>								
										<a class="video-vemo-icon venobox" data-vbtype="youtube" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pyoutube ); ?>">
										<i class="fab fa-youtube"></i></a>		
										<?php endif; ?>

										<?php endif; ?>

										<?php if($svvimeo=='m_vshow'): ?>

										<?php if($pvimeo): ?>									
										<a class="video-vemo-icon venobox" data-vbtype="vimeo" data-autoplay="true" data-gall="gall-video" href="<?php echo esc_url($pvimeo ); ?>"><i class="fab fa-vimeo-v"></i>
										</a>									
										<?php endif; ?>

										<?php endif; ?>

									</div>
																				
									<?php endif; ?>											

									<div class="porttitle_inner">
										<?php if($pshow_title=='ptitle_show'){ ?>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
										<?php } ?>
										
										<?php if($pshow_cat=='pcat_show'){ ?>
										<p>
											<?php if( $terms ){
												
											foreach( $terms as $single_slugs ){?>
												<span class="category-item-p">
												   <?php echo $single_slugs->name ;?>
												</span>																			
											<?php }}?>
										</p>
											
										<?php } ?>	
											
									</div>
									</div>	
								</div>		
							</div>				
	
						<?php } ?>					
																	
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>
				</div>
			</div>		
	
        <?php

			break;
			
		} // end switch	
		
		
			if( $witrshowdata['witr_pagination']== 'yes' ){?>
			<!-- START PAGINATION -->
			<div class="row">
				<div class="col-md-12">
					<div class="paginations">
						
						<?php 
						
							 echo paginate_links( array(
								'prev_next' => true,
								'prev_text' => '<i class="fas fa-long-arrow-alt-left"></i>',
								'next_text' => '<i class="fas fa-long-arrow-alt-right"></i>',
								'type' => 'list',
								'current' => $paged,
								'total' => $the_query->max_num_pages
							) );										
						
						?>
					</div>
				</div>
			</div>
			<?php }	?>

		<script type='text/javascript'>
			jQuery(function($){

				/* Portfolio Isotope  */

				$('.em_load').imagesLoaded(function() {

					if ($.fn.isotope) {

						var $portfolio = $('.em_load');

						$portfolio.isotope({

							itemSelector: '.grid-item',

							filter: '*',

							resizesContainer: true,

							layoutMode: 'masonry',

							transitionDuration: '0.8s'

						});


						$('.filter_menu li').on('click', function() {

							$('.filter_menu li').removeClass('current_menu_item');

							$(this).addClass('current_menu_item');

							var selector = $(this).attr('data-filter');

							$portfolio.isotope({

								filter: selector,

							});

						});

					};

				});

				/*--------------------------
					portfolio gallery post
				---------------------------- */
				$('.portfolio_gallery_post').owlCarousel({
					nav: true,
					dots: false,
					navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
					responsive: {
						0: {
							items: 1
						},
						768: {
							items: 1
						},
						992: {
							items: 1
						},
						1920: {
							items: 1
						}
					}
				})			
			
			});
		</script>		
						

<?php

   
	} // end function





}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Elementor_Widget_Portfolio() );

