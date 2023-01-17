<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_notice_slider extends Widget_Base {

    public function get_name() {
        return 'witr_notice_slider';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Notice', 'softd' );
    }

    public function get_icon() {
        return 'eicon-table-of-contents';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
		

			
			
			/* === witr_option_notice start === */
			$this->start_controls_section(
				'witr_option_notice',
				[
					'label' => esc_html__( 'Notice Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
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
					]
				);
				/* witr_direction */
				$this->add_control(
					'witr_direction',
					[
						'label' => esc_html__( 'Direction', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'left',
						'options' => [
							'left' => esc_html__( 'Left', 'softd' ),
							'right' => esc_html__( 'Right', 'softd' ),
						],
					]
				);				
				/* witr_speed */
				$this->add_control(
					'witr_speed',
					[
						'label' => esc_html__( 'Speed', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator'=>'before',
						'default' => '4',						
					]
				);					
					/*  witr_notice_title */	
					$this->add_control(
						'witr_notice_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator'=>'before',
							'description' => esc_html__( 'Not use title , remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'placeholder' => esc_attr__( 'Type your title here', 'softd' ),						
						]
					);
					
				$repeater = new Repeater();					
					/*  witr_notice_text */	
					$repeater->add_control(
						'witr_notice_text',
						[
							'label' => esc_html__( 'Notice Text', 'softd' ),
							'separator' => 'before',
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Add Your Title Here', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Notice Text here', 'softd' ),						
						]
					);					
					/* witr_notice_link */	
					$repeater->add_control(
						'witr_notice_link',
						[
							'label' => esc_html__( ' Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert your notice link, not use the link field blank it.','softd'),
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],								
						]
					);
					$repeater->add_control(	
						'witr_icon_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'separator'=>'before',
						]
					);
					/* Custom Icon	*/
					$repeater->add_control(
						'witr_custom_icon',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons ex- icofont-star or Themify Icon - https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet Icon name Filed here', 'softd' ),
							'default' => esc_html__( 'icofont-star', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),							
						]
					);					
					/*  witr_notice_list */	
					$this->add_control(
						'witr_notice_list',
						[
							'label' => esc_html__( 'Notice List', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'fields' => $repeater->get_controls(),
							'separator'=>'before',
							'default' => [
								[
									'witr_notice_text' => esc_html__( 'Add Your Top Title Here', 'softd' ),
									'witr_notice_link' => esc_html__( 'Add Your Middle Title Here', 'softd' ),
								],
								[
									'witr_notice_text' => esc_html__( 'Add Your Top Title Here', 'softd' ),
									'witr_notice_link' => esc_html__( 'Add Your Middle Title Here', 'softd' ),
								],
							],
							'title_field' => '{{{ witr_notice_text }}}',
						]
					);				
				

			$this->end_controls_section();
			/* === end w_banner title === */
			

	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

		/*=== start single Feature style ====*/
		$this->start_controls_section(
			'witr_style_ss_option',
			[
				'label' => esc_html__( 'Single Box', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);		


				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_bb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .notice_marquee_area',
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
							'{{WRAPPER}} .notice_marquee_area' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_background',
						'label' => esc_html__( ' Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .notice_marquee_area',							
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowsbox',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .notice_marquee_area',
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
							'{{WRAPPER}} .notice_marquee_area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .notice_marquee_area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
			$this->end_controls_section();
			/* === end single Feature ===  */
		
		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( 'Notice Title Color Option', 'softd' ),
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
						'{{WRAPPER}} .witr_notice_title h3' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_notice_title h3:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_notice_title h3',
				]
			);						
			/*  witr_text_width */
			$this->add_responsive_control(
				'witr_text_width',
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
						'{{WRAPPER}} .witr_notice_title h3' => 'width: {{SIZE}}{{UNIT}};',
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
					'selectors' => [
						'{{WRAPPER}} .witr_notice_title h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_notice_title h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style ====*/
		

		/*=== start w_title style 2 ====*/
		$this->start_controls_section(
			'witr_style_optiona',
			[
				'label' => esc_html__( 'Notice Text Color Option', 'softd' ),
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
						'{{WRAPPER}} .notice_marquee_text h2,{{WRAPPER}} .notice_marquee_text h2 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .notice_marquee_text h2:hover,{{WRAPPER}} .notice_marquee_text h2 a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* tx bg */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_tx_bg',
					'label' => esc_html__( ' Hover Background', 'softd' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .notice_marquee_text h2',
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
					'selector' => '{{WRAPPER}} .notice_marquee_text h2,{{WRAPPER}} .notice_marquee_text h2 a',
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
						'{{WRAPPER}} .notice_marquee_text h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .notice_marquee_text h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  notice text style  ====*/

		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( ' Images Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
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
						'{{WRAPPER}} .notice_marquee_text img' => 'width: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .notice_marquee_text img' => 'height: {{SIZE}}{{UNIT}} !important;',
					],
				]			
			);			
			/* border_radius */
			$this->add_control(
				'witr_border_img_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .notice_marquee_text img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .notice_marquee_text img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .notice_marquee_text img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/		

		/*=== start witr icon custom style ====*/
		$this->start_controls_section(
			'witr_custom_icon_option',
			[
				'label' => esc_html__( 'Custom Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'icon_colorsc' );
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colorc_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);

				/* Icon Color */
				$this->add_control(
					'witr_primaryc_color',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'global' => [
							'default' => Global_Colors::COLOR_PRIMARY,
						],						
						'separator'=>'before',
						'selectors' => [
							'{{WRAPPER}} .notice_marquee_text i' => 'color: {{VALUE}}',
						],					
					]
				);
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_iconc_background',
						'label' => esc_html__( ' Custom Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .notice_marquee_text i',
					]
				);				
				/*  icon Size */
				$this->add_responsive_control(
					'iconc_sizec',
					[
						'label' => esc_html__( 'Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .notice_marquee_text i' => 'font-size: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .notice_marquee_text i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .notice_marquee_text i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .notice_marquee_text i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( ' Icon Align', 'softd' ),
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
							'{{WRAPPER}} .notice_marquee_text i' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderc',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .notice_marquee_text i',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_border_radiusc',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .notice_marquee_text i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
				/* icon margin */
				$this->add_responsive_control(
					'witr_iconc_margin',
					[
						'label' => esc_html__( ' margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .serIcon,{{WRAPPER}} .notice_marquee_text a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				/* icon padding */
				$this->add_responsive_control(
					'witr_iconc_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .notice_marquee_text a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
			
					/*=== start icon hover style ====*/
					$this->start_controls_tab(
						'witr_iconc_color_hover',
						[
							'label' => esc_html__( 'Icon Hover', 'softd' ),
						]
					);
					/*  primary hover color */
					$this->add_control(
						'witr_hover_primaryc_color',
						[
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .notice_marquee_text i:hover' => 'color: {{VALUE}}',
							],
						]
					);					

					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_colorc',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .notice_marquee_text i:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_iconc',
							'label' => esc_html__( ' Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .notice_marquee_text i:hover',
						]
					);
				/* border_radius */
				$this->add_control(
					'witr_borderh_radiusc',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .notice_marquee_text i:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);					
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon style ====*/
		
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
						'{{WRAPPER}} .witr_notice_title h3 span' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_notice_title h3 span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_htpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .witr_notice_title h3 span',
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
						'{{WRAPPER}} .witr_notice_title h3 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_notice_title h3 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_heighlight style ====*/		
		


    } /* function end*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		?>
	
		<div class="notice_banner_area text-<?php echo $witrshowdata['witr_text_ltc']; ?>">
				<!--  marquee_area	-->
				<div class="notice_marquee_area">
						<!-- title -->
						<?php if(isset($witrshowdata['witr_notice_title']) && ! empty($witrshowdata['witr_notice_title'])){?>
						<div class="witr_notice_title">
							<h3><?php echo $witrshowdata['witr_notice_title']; ?></h3>
						</div>	
						<?php } ?>				
					<marquee direction="<?php echo $witrshowdata['witr_direction']; ?>" scrollamount="<?php echo $witrshowdata['witr_speed']; ?>">
						<div class="notice_marquee_text">
							<?php if ( $witrshowdata['witr_notice_list'] ) {
								foreach (  $witrshowdata['witr_notice_list'] as $witr_n_item ) {?>
						
									<!--  thumb image -->
									<?php if(isset($witr_n_item['witr_icon_image']['url']) && ! empty($witr_n_item['witr_icon_image']['url'])){?>
										<?php echo '<img src="' . $witr_n_item['witr_icon_image']['url'] . '">';?>
									<?php } ?>
									
									<!-- custom icon -->
									<?php if(isset($witr_n_item['witr_custom_icon']) && ! empty($witr_n_item['witr_custom_icon'])){?>	
										<i class="<?php echo $witr_n_item['witr_custom_icon']; ?>"></i>
									<?php } ?>
									
									<!-- title notice -->
									<?php if(isset($witr_n_item['witr_notice_text']) && ! empty($witr_n_item['witr_notice_text'])){?>
										<?php if($witr_n_item['witr_notice_link'] ['url']){?> 
											<h2><a href="<?php echo $witr_n_item['witr_notice_link']['url'];?>"><?php echo $witr_n_item['witr_notice_text']; ?></a></h2>
										<?php }else{ ?>
										<h2><?php echo $witr_n_item['witr_notice_text']; ?> </h2>
										<?php }	?>									
									<?php } ?>
									
							<?php }} ?>	
						</div>
					</marquee>					
				</div>								
		</div>
				

		
		
		<?php		

		

	
    } /*end function */




}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_notice_slider() );