<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Pricing extends Widget_Base {

    public function get_name() {
        return 'witr_section_pricing';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Pricing Table', 'softd' );
    }

    public function get_icon() {
        return 'eicon-price-table';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_pricing start === */
			$this->start_controls_section(
				'witr_field_display_pricing',
				[
					'label' => esc_html__( 'softd Pricing options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* witr_style_pricing */
			$this->add_control(
				'witr_style_pricing',
				[
					'label' => esc_html__( 'Pricing style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'description' => esc_html__( 'When select style 2 that time, set column and set gutter not work', 'softd' ),
					'options' => [
						'1' => esc_html__( 'Pricing style 1', 'softd' ),
						'2' => esc_html__( 'Pricing style 2', 'softd' ),
						'3' => esc_html__( 'Pricing style 3', 'softd' ),
						'4' => esc_html__( 'Pricing style 4', 'softd' ),
					],
					'default' => '1',
				]
			);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_alignd',
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
							'{{WRAPPER}} .pricing-part' => 'text-align: {{VALUE}}',
						],
					]
				);
			/* witr_show_icon witr_icon_item */
				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'Show Icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',							
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
						'separator' => 'before',
						'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),
						'fa4compatibility' => 'icon',
						'default' => [
							'value' => 'fas fa-paper-plane',
							'library' => 'fa-solid',
						],
						'condition' => [
							'witr_show_icon' => 'yes',
						],							
					]
				);

					
				/* witr_show_image witr_feature_image */
					$this->add_control(
						'witr_show_image',
						[
							'label' => esc_html__( 'Show Image', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',							
						]
					);	
				
					$this->add_control(
						'witr_pricing_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' =>'',
							],
							'condition' => [
								'witr_show_image' => 'yes',
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
							'condition' => [
								'witr_show_image' => 'yes',
							],							
						]
					);				
				
				
				/* witr_pricing_title */	
				$this->add_control(
					'witr_pricing_title',
					[
						'label' => esc_html__( 'Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'Not use title top, remove the text from field', 'softd' ),
						'default' => esc_html__( 'Advance Plan', 'softd' ),
						'placeholder' => esc_attr__( 'Type your pricing title here', 'softd' ),						
					]
				);
				
				/* pricing subtitle witr_pricing_subtitle */
				$this->add_control(
					'witr_pricing_ribon',
					[
						'label' => esc_html__( 'Ribon Text ', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'Not use ribon, remove the text from field', 'softd' ),
						'default' => esc_html__( 'Popular', 'softd' ),
						'placeholder' => esc_attr__( 'Type your ribon here', 'softd' ),						
					]
				);	
				/* witr_pricing_content */
				$this->add_control(
					'witr_pricing_content',
					[
						'label' => esc_html__( 'content Text ', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'use content in the box', 'softd' ),
						'default' => esc_html__( 'write content', 'softd' ),
						'placeholder' => esc_attr__( 'Type your content here', 'softd' ),	
						'condition' => [
							'witr_style_pricing' =>'1',
						]
					]
				);
				/* witr_pricing_month */
				$this->add_control(
					'witr_pricing_offerp',
					[
						'label' => esc_html__( 'Offer Price', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Not use month , remove the text from field', 'softd' ),
						'default' => esc_html__( '', 'softd' ),
						'placeholder' => esc_attr__( 'Type your price here', 'softd' ),						
					]
				);				
				/* witr_pricing_currency */
				$this->add_control(
					'witr_pricing_currency',
					[
						'label' => esc_html__( 'Currency', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Not use Currency , remove the text from field', 'softd' ),
						'default' => esc_html__( '$', 'softd' ),
						'placeholder' => esc_attr__( 'Type your Currency here', 'softd' ),						
					]
				);
				
				/* pricing price witr_pricing_price */
				$this->add_control(
					'witr_pricing_price',
					[
						'label' => esc_html__( 'price ', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Not use price, remove the text from field', 'softd' ),
						'default' => esc_html__( '31.99', 'softd' ),
						'placeholder' => esc_attr__( 'Type your price here', 'softd' ),						
					]
				);
				
				/* witr_pricing_month */
				$this->add_control(
					'witr_pricing_month',
					[
						'label' => esc_html__( 'Month/Year', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Not use month , remove the text from field', 'softd' ),
						'default' => esc_html__( '/month', 'softd' ),
						'placeholder' => esc_attr__( 'Type your Month here', 'softd' ),						
					]
				);	
				/* witr_pricing_month */
				$this->add_control(
					'witr_pricing_yearly',
					[
						'label' => esc_html__( 'Extra yearly option', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Not use month , remove the text from field', 'softd' ),
						'default' => esc_html__( '', 'softd' ),
						'placeholder' => esc_attr__( 'Type your text here', 'softd' ),						
					]
				);				
				
				/* pricing Time witr_pricing_list */
				$this->add_control(
					'witr_pricing_list',
					[
						'label' => esc_html__( 'Pricing List Items ', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'use list from here, must be use the stcructure ex <ul><li>example list 1</li><li>example list 2</li></ul> when icon use ex <ul><li><i class="fas fa-check"></i></li><li><i class="fas fa-times-circle"></i></li></ul>', 'softd' ),
						'default' => "<ul><li>example list 1</li><li>example list 2</li><li>example list 3</li></ul>",
						'placeholder' => esc_attr__( 'Type your List Item here', 'softd' ),						
					]
				);  
	
				/* SHOW BUTTON witr_show_button witr_pricing_button witr_button_link	*/
				$this->add_control(
					'witr_show_button',
					[
						'label' => esc_html__( 'Show button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);				
				$this->add_control(
					'witr_pricing_button',
					[
						'label' => esc_html__( 'Button Text', 'softd' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'default' => esc_html__( 'Subscribe Now', 'softd' ),
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

				/* SHOW Active	 witr_show_active */
				$this->add_control(
					'witr_show_active',
					[
						'label' => esc_html__( 'Set Active:', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'description' => esc_html__( ' If you set yes, It will be set active.', 'softd' ),						
						'return_value' => 'yes',
						'default' => 'no',
					]
				);
					
	
			
			$this->end_controls_section();
			/* === end witr_pricing ===  */			
			
			
			
	/*======================================================================================================================================
										START TO STYLE
	========================================================================================================================================*/			
			
			/*=== start witr_single_pricing style ====*/
			$this->start_controls_section(
				'witr_single_pricing',
				[
					'label' => esc_html__( 'Single Pricing Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,				
					
				]
			);
				/* area background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_backgroundi',
						'label' => esc_html__( 'Box List area Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .pricing_area',
					]
				);			
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_bbox_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .pricing_area',
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
							'{{WRAPPER}} .pricing_area' => 'border-style: {{VALUE}}',
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
							'{{WRAPPER}} .pricing_area' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .pricing_area' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
						],
					]
				);
				
				/* single_border_radius */
				$this->add_control(
					'witr_single_border_radius',
					[
						'label' => esc_html__( 'Single Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .pricing_area' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* border hover color */
				$this->add_control(
					'witr_border_hover_color',
					[
						'label' => esc_html__( 'Border Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						
						'selectors' => [
							'{{WRAPPER}} .pricing_area:hover' => 'border-color: {{VALUE}}',
						],
					]
				);				
			
			$this->end_controls_section();
			/* === end witr_single_pricing ===  */			
			
			
			/*=== start witr_icon style ====*/
			$this->start_controls_section(
				'section_style_icon',
				[
					'label' => esc_html__( 'Icon Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,				
					'condition' => [
						'witr_show_icon' => 'yes',
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
					'witr_icon_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .witr_pricing_icon i' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_pricing_icon i',
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
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_pricing_icon i' => 'font-size: {{SIZE}}{{UNIT}};',
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
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_pricing_icon i' => 'width: {{SIZE}}{{UNIT}};',
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
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_pricing_icon i' => 'height: {{SIZE}}{{UNIT}};',
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
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_pricing_icon i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
		
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_border_style',
						'label' => esc_html__( 'Icon Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_pricing_icon i',
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
							'{{WRAPPER}} .witr_pricing_icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
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
							'{{WRAPPER}} .witr_pricing_icon i' => 'mix-blend-mode: {{VALUE}}',
						],
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_pricing_icon i',
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
							'{{WRAPPER}} .witr_pricing_icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_pricing_icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'label' => esc_html__( 'Icon Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .witr_pricing_icon:hover i' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hovet_icon',
							'label' => esc_html__( 'Icon Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .witr_pricing_icon:hover i',
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
						'{{WRAPPER}} .all_pricing_color img' => 'width: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pricing_color img' => 'height: {{SIZE}}{{UNIT}};',
					],
				]			
			);
			
			/* witr_border_style */
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'witr_img_bb',
					'label' => esc_html__( 'Border', 'softd' ),
					'selector' => '{{WRAPPER}} .single_seivice_ani img,{{WRAPPER}} .all_pricing_color img',
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
						'{{WRAPPER}} .all_pricing_color img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pricing_color img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pricing_color img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pricing_color h4' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_pricing_color h4:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_colorp1',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .all_pricing_color h4',
				]
			);		
			/* title background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_title_background',
					'label' => esc_html__( 'Title Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_pricing_color h4',
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
						'{{WRAPPER}} .all_pricing_color h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pricing_color h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_pricing_color p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_pricing_color p',
				]
			);		

			/* content margin */
			$this->add_responsive_control(
				'content_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'content_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/		
	

		/*=== start witr_price style ====*/
		$this->start_controls_section(
			'witr_style_option_price',
			[
				'label' => esc_html__( 'Price Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_price_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],						
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h5' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_price_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h5:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_colorp2',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_pricing_color h5',
				]
			);		
			/* pricing background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_pricinc_background',
					'label' => esc_html__( 'Price Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_pricing_color h5, {{WRAPPER}} .all_pricing_color .witr_p_middle_inner',
				]
			);
			/* border_radius */
			$this->add_control(
				'witr_border_pr_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .witr_p_middle_inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);				
			/* price margin */
			$this->add_responsive_control(
				'witr_price_margin',
				[
					'label' => esc_html__( 'Price Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* price padding */
			$this->add_responsive_control(
				'witr_price_padding',
				[
					'label' => esc_html__( 'Price Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			/* hesding */
			$this->add_control(
				'witr_chh',
				[
					'label' => esc_html__( 'Currency/Month/Year', 'softd' ),
					'type' => Controls_Manager::HEADING,					
					'separator' => 'before',
				]
			);
			/* Currency/Month/Year color */
			$this->add_control(
				'witr_cmy_color',
				[
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color span' => 'color: {{VALUE}}',
					],
				]
			);
			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_cmy_colorp2',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_pricing_color span',
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_cmy_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);			
			
			
			/* Offer price color ======================= */
			/* hesding */
			$this->add_control(
				'witr_pycof',
				[
					'label' => esc_html__( 'Offer Price Color option', 'softd' ),
					'type' => Controls_Manager::HEADING,					
					'separator' => 'before',
				]
			);			
			$this->add_control(
				'witr_pycof_color',
				[
					'label' => esc_html__( ' Offer Price Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h6' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'witr_pychof_color',
				[
					'label' => esc_html__( ' Offer Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,				
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h6:hover' => 'color: {{VALUE}}',
					],
				]
			);
			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_pycof_colorp2',
					'label' => esc_html__( 'Offer Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_pricing_color h6',
				]
			);
			/* pricing background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_pycof_background',
					'label' => esc_html__( 'Offer Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_pricing_color h6',
				]
			);			
			/* price padding */
			$this->add_responsive_control(
				'witr_pycof_padding',
				[
					'label' => esc_html__( 'Offer Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_pycof_margin',
				[
					'label' => esc_html__( 'Offer Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);				
						
			
			
			/* yearly color ======================= */
			/* hesding */
			$this->add_control(
				'witr_pyc',
				[
					'label' => esc_html__( 'Extra Yearly Color option', 'softd' ),
					'type' => Controls_Manager::HEADING,					
					'separator' => 'before',
				]
			);			
			$this->add_control(
				'witr_pyc_color',
				[
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color p' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_control(
				'witr_pych_color',
				[
					'label' => esc_html__( ' Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,				
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color p:hover' => 'color: {{VALUE}}',
					],
				]
			);
			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_pyc_colorp2',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_pricing_color p',
				]
			);
			/* pricing background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_pyc_background',
					'label' => esc_html__( 'Price Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_pricing_color p',
				]
			);			
			/* price padding */
			$this->add_responsive_control(
				'witr_pyc_padding',
				[
					'label' => esc_html__( 'Price Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_pyc_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);				
			
			
			
			
		 
		 $this->end_controls_section();
		/*=== end  witr_price style ====*/		
		
		/*=== start witr list style ====*/
		$this->start_controls_section(
			'witr_style_option_list',
			[
				'label' => esc_html__( 'Pricing List Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);	

			/*=== start list_tabs style ====*/
			$this->start_controls_tabs( 'list_colors' );
			
				/*=== start list_normal style ====*/
				$this->start_controls_tab(
					'witr_list_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				/* witr_text_align_list */					
				$this->add_responsive_control(
					'witr_text_align_list',
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
							'{{WRAPPER}} .pricing-part ul' => 'text-align: {{VALUE}}',
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
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li' => 'color: {{VALUE}}',
							],
						]
					);
					/* list background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_list_background',
							'label' => esc_html__( 'List Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .all_pricing_color ul li',
						]
					);					
					/* odd color */
					$this->add_control(
						'witr_odd_color',
						[
							'label' => esc_html__( 'Odd Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_TEXT,
							],							
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li:nth-child(odd)' => 'color: {{VALUE}}',
							],
						]
					);
					/* odd background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_odd_background',
							'label' => esc_html__( 'Odd Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .all_pricing_color ul li:nth-child(odd)',
						]
					);					
					/* even color */
					$this->add_control(
						'witr_even_color',
						[
							'label' => esc_html__( 'Even Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_TEXT,
							],							
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li:nth-child(even)' => 'color: {{VALUE}}',
							],
						]
					);

					/* even background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_even_background',
							'label' => esc_html__( 'Even Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .all_pricing_color ul li:nth-child(even)',
						]
					);					

					/* typograohy color */			
					$this->add_group_control(
						Group_Control_Typography::get_type(),
						[
							'name' => 'witr_list_typography',
							'label' => esc_html__( 'Typography', 'softd' ),
							'global' => [
								'default' => Global_Typography::TYPOGRAPHY_TEXT,
							],
							'selector' => '{{WRAPPER}} .all_pricing_color ul li',
						]
					);		

					/* list margin */
					$this->add_responsive_control(
						'list_margin',
						[
							'label' => esc_html__( 'Margin', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);
					/* list padding */
					$this->add_responsive_control(
						'list_padding',
						[
							'label' => esc_html__( 'Padding', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);
					/* Box List area */					
					$this->add_control(
						'witr_box_hd',
						[
							'label' => __( 'Box List Area', 'softd' ),
							'type' => Controls_Manager::HEADING,
							'separator' => 'before',
						]
					);				
					/* area background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_active_backgroundi',
							'label' => esc_html__( 'Box List area Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .pricing-part ul',
						]
					);				
					/* List Box padding */
					$this->add_responsive_control(
						'witr_ribon_paddingi',
						[
							'label' => esc_html__( 'List Box Padding', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .pricing-part ul' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);						
					/* border_radius */
					$this->add_control(
						'witr_lab_radius',
						[
							'label' => esc_html__( 'Border Radius', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%' ],
							'selectors' => [
								'{{WRAPPER}} .pricing-part ul' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);				
					/* box shadow list */	
					$this->add_group_control(
						Group_Control_Box_Shadow::get_type(),
						[
							'name' => 'witr_boxl_shadow',
							'label' => esc_html__( 'Box Shadow', 'softd' ),
							'selector' => '{{WRAPPER}} .pricing-part ul',
						]
					);
				$this->end_controls_tab();
				/*=== end list normal style ====*/
			
					/*=== start list hover style ====*/
					$this->start_controls_tab(
						'witr_list_colors_hover',
						[
							'label' => esc_html__( 'List Hover', 'softd' ),
						]
					);
					
							
					/* hover color */
					$this->add_control(
						'witr_list_hover_color',
						[
							'label' => esc_html__( 'Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li:hover' => 'color: {{VALUE}}',
							],
						]
					);					
					/* odd hover color */
					$this->add_control(
						'witr_odd_hover_color',
						[
							'label' => esc_html__( 'Odd Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,							
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li:nth-child(odd):hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* even hover color */
					$this->add_control(
						'witr_even_hover_color',
						[
							'label' => esc_html__( 'Even Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,							
							'selectors' => [
								'{{WRAPPER}} .all_pricing_color ul li:nth-child(even):hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover list background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_list',
							'label' => esc_html__( 'List Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .all_pricing_color ul li:hover',
						]
					);
					

					$this->end_controls_tab();
					/*=== end list hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end list_tabs style ====*/

		 $this->end_controls_section();
		/*=== end  witr list style ====*/
		
		

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
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .witr_btnp_color a.btn',
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
								'selector' => '{{WRAPPER}} .witr_btnp_color a.btn',
							]
						);	

						/* witr_border_style */
						$this->add_control(
							'witr_border_btns_style',
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
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'border-style: {{VALUE}}',
								],
							]
						);		
						/* witr border */
						$this->add_control(
							'witr_borde_btns',
							[
								'label' => esc_html__( 'Border', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_border_btns_style' => ['solid','double','dotted','dashed','default'],
								],
							]							
							
						);
						/* border_color */
						$this->add_control(
							'witr_border_btns_color',
							[
								'label' => esc_html__( 'Border Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'border-color: {{VALUE}}',
								],
								'condition' => [
									'witr_border_btns_style' => ['solid','double','dotted','dashed','default'],
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
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_btnp_color a.btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
					/* hesding */
					$this->add_control(
						'witr_btn_boxh',
						[
							'label' => esc_html__( 'Button Box Option', 'softd' ),
							'type' => Controls_Manager::HEADING,					
							'separator' => 'before',
						]
					);
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_boxb_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .witr_btnp_color',
						]
					);
					/* hesding hover */
					$this->add_control(
						'witr_btnhover_boxh',
						[
							'label' => esc_html__( 'Button Box Hover', 'softd' ),
							'type' => Controls_Manager::HEADING,					
						]
					);
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_boxbho_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .pricing_area:hover .witr_btnp_color',
						]
					);

						/* witr_border_style */
						$this->add_control(
							'witr_borderc_box_style',
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
									'{{WRAPPER}} .witr_btnp_color' => 'border-style: {{VALUE}}',
								],
							]
						);		
						/* witr border */
						$this->add_control(
							'witr_bordecb_box',
							[
								'label' => esc_html__( 'Border', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_borderc_box_style' => ['solid','double','dotted','dashed','default'],
								],
							]							
							
						);
						/* border_color */
						$this->add_control(
							'witr_borderb_box_color',
							[
								'label' => esc_html__( 'Border Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color' => 'border-color: {{VALUE}}',
								],
								'condition' => [
									'witr_borderc_box_style' => ['solid','double','dotted','dashed','default'],
								],
							]
						);
						/* border hover color */
						$this->add_control(
							'witr_borderh_box_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								
								'selectors' => [
									'{{WRAPPER}} .pricing_area:hover .witr_btnp_color' => 'border-color: {{VALUE}}',
								],
								'condition' => [
									'witr_borderc_box_style' => ['solid','double','dotted','dashed','default'],
								],
							]
						);
						
						/* border_radius */
						$this->add_control(
							'witr_border_rad_box',
							[
								'label' => esc_html__( 'Border Radius', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',								
								],
								'condition' => [
									'witr_borderc_box_style' => ['solid','double','dotted','dashed','default'],
								],
							]
						);
					
					/* Box margin */
					$this->add_responsive_control(
						'witr_boxb_margin',
						[
							'label' => esc_html__( ' Margin', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .witr_btnp_color' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);
					/* padding */
					$this->add_responsive_control(
						'witr_boxb_padding',
						[
							'label' => esc_html__( ' Padding', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .witr_btnp_color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_btnp_color a.btn:hover' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .witr_btnp_color a.btn:hover',
							]
						);
						/* witr_border_style */
						$this->add_control(
							'witr_hhbtns_style',
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
									'{{WRAPPER}} .witr_btnp_color a.btn:hover' => 'border-style: {{VALUE}}',
								],
							]
						);		
						/* witr border */
						$this->add_control(
							'witr_hhh_btns',
							[
								'label' => esc_html__( 'Border', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color a.btn:hover' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_border_btns_style' => ['solid','double','dotted','dashed','default'],
								],
							]							
							
						);
						/* border_color */
						$this->add_control(
							'witr_hh_btns_color',
							[
								'label' => esc_html__( 'Border Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color a.btn:hover' => 'border-color: {{VALUE}}',
								],
								'condition' => [
									'witr_border_btns_style' => ['solid','double','dotted','dashed','default'],
								],
							]
						);						
						
						/* border_radius */
						$this->add_control(
							'witr_bordh_btn_radius',
							[
								'label' => esc_html__( 'Border Radius', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .witr_btnp_color a.btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
						
						
						$this->end_controls_tab();
						/*=== end button hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 
			 $this->end_controls_section();
			/*=== end  witr button style ====*/		
		

		/*=== start witr_ribon style ====*/
		$this->start_controls_section(
			'witr_style_option_ribon',
			[
				'label' => esc_html__( 'Ribon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_ribon_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color sub' => 'color: {{VALUE}}',
					],
				]
			);
			/* ribon background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_ribon_background',
					'label' => esc_html__( 'Ribon Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_pricing_color sub',
				]
			);			
			/* hover color */
			$this->add_control(
				'witr_ribon_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',					
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color sub:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* ribon hover background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_ribonh_background',
					'label' => esc_html__( 'Ribon Hover Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_pricing_color sub:hover',
				]
			);			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_colorp9',
					'label' => esc_html__( 'Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .all_pricing_color sub',
				]
			);		

				
			/* ribon margin */
			$this->add_responsive_control(
				'witr_ribon_margin',
				[
					'label' => esc_html__( 'Ribon Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* ribon padding */
			$this->add_responsive_control(
				'witr_ribon_padding',
				[
					'label' => esc_html__( 'Ribon Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_pricing_color sub' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		 $this->end_controls_section();
		/*=== end  witr_ribon style ====*/		 		
		
		
		/*=== start witr Active Box style ====*/

		$this->start_controls_section(
			'witr_style_option_active',
			[
				'label' => esc_html__( 'Active Box Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_active' => 'yes',
				],				
			]
		);		
		
			/* Active background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_active_background',
					'label' => esc_html__( 'Active Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .pricing-part.active,{{WRAPPER}} .pricing_area',
				]
			);

				/* witr_active_radius */
				$this->add_control(
					'witr_active_radius',
					[
						'label' => esc_html__( 'Box Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .pricing_area,{{WRAPPER}} .pricing-part.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			
			/* color */
			$this->add_control(
				'witr_actitex_color',
				[
					'label' => esc_html__( 'Active Text Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .pricing-part.active i,{{WRAPPER}} .pricing-part .active ul li:nth-child(odd),{{WRAPPER}} .pricing-part .active ul li:nth-child(even),{{WRAPPER}} .pricing-part.active h4,{{WRAPPER}} .pricing-part.active h5, .pricing-part.active ul li,{{WRAPPER}} .pricing-part sub' => 'color: {{VALUE}}',
					],
				]
			);
			
		 $this->end_controls_section();
		/*=== end  witr_Active Box style ====*/
		
		

    } /*===function end ===*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
	
		switch ( $witrshowdata['witr_style_pricing'] ) {
			case'4':
			?>
				<div class="pricing_area all_pricing_color pricing_style_4 <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
                    <div class="pricing-part   <?php if( $witrshowdata['witr_show_active']=='yes' ){ echo "active"; }?>  ">
							<!-- icon -->
							<div class="witr_pricing_icon">
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>
							</div>
							
							<!-- image -->
							<?php if(isset($witrshowdata['witr_pricing_image']['url']) && ! empty($witrshowdata['witr_pricing_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_pricing_image']['url'];?>" alt="" />
							<?php } ?>							
							<!-- ribon -->	
							<?php if(isset($witrshowdata['witr_pricing_ribon']) && ! empty($witrshowdata['witr_pricing_ribon'])){?>
								<sub><?php echo $witrshowdata['witr_pricing_ribon']; ?> </sub>	
							<?php }?>	
							
							<!-- title -->
							<?php if(isset($witrshowdata['witr_pricing_title']) && ! empty($witrshowdata['witr_pricing_title'])){?>
								<h4><?php echo $witrshowdata['witr_pricing_title']; ?> </h4>	
							<?php }?>
							<!-- offer price -->
							<?php if(isset($witrshowdata['witr_pricing_offerp']) && ! empty($witrshowdata['witr_pricing_offerp'])){?>
								<h6><?php echo $witrshowdata['witr_pricing_offerp']; ?> </h6>	
							<?php }?>							
							<!-- price/currency/month -->
							<?php if(isset($witrshowdata['witr_pricing_price']) && ! empty($witrshowdata['witr_pricing_price'])){?>
								<div class="witr_p_middle">
									<div class="witr_p_middle_inner">
									<h5><span><?php echo $witrshowdata['witr_pricing_currency']; ?></span><?php echo $witrshowdata['witr_pricing_price']; ?> <span> <?php echo $witrshowdata['witr_pricing_month']; ?></span></h5>
									</div>
								</div>
							<?php }?>
							<!-- yearly -->
								<?php if(isset($witrshowdata['witr_pricing_yearly']) && ! empty($witrshowdata['witr_pricing_yearly'])){?>
								<p><?php echo $witrshowdata['witr_pricing_yearly']; ?></p>	
								<?php }?>							
							<!-- list -->
							<?php if(isset($witrshowdata['witr_pricing_list']) && ! empty($witrshowdata['witr_pricing_list'])){?>
								<div class="witri_texti_list">
								<?php echo $witrshowdata['witr_pricing_list']; ?>
								</div>
							<?php }?>
							
						<!-- button -->
						<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
							<div class="witr_btnp_color">
								<a  class="btn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_pricing_button'];?></a>
							</div>			
						<?php }?>						
                    </div> <!-- pricing part -->
                </div> 

			<?php
			break;
						
			case'3':
			?>
				<div class="pricing_area all_pricing_color  pricing_style_3  <?php if( $witrshowdata['witr_show_active']=='yes' ){ echo "active"; }?>">
                    <div class="pricing-part <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
							<!-- icon -->
							<div class="witr_pricing_icon">
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>
							</div>
				
							<!-- image -->
							<?php if(isset($witrshowdata['witr_pricing_image']['url']) && ! empty($witrshowdata['witr_pricing_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_pricing_image']['url'];?>" alt="" />
							<?php } ?>							
							<!-- ribon -->	
							<?php if(isset($witrshowdata['witr_pricing_ribon']) && ! empty($witrshowdata['witr_pricing_ribon'])){?>
								<sub><?php echo $witrshowdata['witr_pricing_ribon']; ?> </sub>	
							<?php }?>						
							<!-- title -->
							<?php if(isset($witrshowdata['witr_pricing_title']) && ! empty($witrshowdata['witr_pricing_title'])){?>
								<h4><?php echo $witrshowdata['witr_pricing_title']; ?> </h4>	
							<?php }?>
							<!-- offer price -->
							<?php if(isset($witrshowdata['witr_pricing_offerp']) && ! empty($witrshowdata['witr_pricing_offerp'])){?>
								<h6><?php echo $witrshowdata['witr_pricing_offerp']; ?> </h6>	
							<?php }?>							
							<!-- price/currency/month -->
							<?php if(isset($witrshowdata['witr_pricing_price']) && ! empty($witrshowdata['witr_pricing_price'])){?>
								<h5><span><?php echo $witrshowdata['witr_pricing_currency']; ?></span><?php echo $witrshowdata['witr_pricing_price']; ?> <span> <?php echo $witrshowdata['witr_pricing_month']; ?></span></h5>	
							<?php }?>
							<!-- yearly -->
								<?php if(isset($witrshowdata['witr_pricing_yearly']) && ! empty($witrshowdata['witr_pricing_yearly'])){?>
								<p><?php echo $witrshowdata['witr_pricing_yearly']; ?></p>	
								<?php }?>								
							<!-- list -->
							<?php if(isset($witrshowdata['witr_pricing_list']) && ! empty($witrshowdata['witr_pricing_list'])){?>
								<div class="witri_texti_list">
								<?php echo $witrshowdata['witr_pricing_list']; ?>
								</div>
							<?php }?>	
						<!-- button -->
						<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
						<div class="witr_btnp_color">
							<a  class="btn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_pricing_button'];?></a>
						</div>			
						<?php }?>						
                    </div> <!-- pricing part -->
                </div> 

			<?php
			break;			
			case'2':
			?>
				<div class="pricing_area all_pricing_color pricing_style_2  <?php if( $witrshowdata['witr_show_active']=='yes' ){ echo "active"; }?>">
                    <div class="pricing-part <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
						<div class=" newsssss">
							<!-- icon -->
							<div class="witr_pricing_icon">
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>
							</div>
				
							<!-- image -->
							<?php if(isset($witrshowdata['witr_pricing_image']['url']) && ! empty($witrshowdata['witr_pricing_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_pricing_image']['url'];?>" alt="" />
							<?php } ?>							
							<!-- ribon -->	
							<?php if(isset($witrshowdata['witr_pricing_ribon']) && ! empty($witrshowdata['witr_pricing_ribon'])){?>
								<sub><?php echo $witrshowdata['witr_pricing_ribon']; ?> </sub>	
							<?php }?>						
							<!-- title -->
							<?php if(isset($witrshowdata['witr_pricing_title']) && ! empty($witrshowdata['witr_pricing_title'])){?>
								<h4><?php echo $witrshowdata['witr_pricing_title']; ?> </h4>	
							<?php }?>
							<!-- offer price -->
							<?php if(isset($witrshowdata['witr_pricing_offerp']) && ! empty($witrshowdata['witr_pricing_offerp'])){?>
								<h6><?php echo $witrshowdata['witr_pricing_offerp']; ?> </h6>	
							<?php }?>							
							<!-- price/currency/month -->
							<?php if(isset($witrshowdata['witr_pricing_price']) && ! empty($witrshowdata['witr_pricing_price'])){?>
								<h5><span><?php echo $witrshowdata['witr_pricing_currency']; ?></span><?php echo $witrshowdata['witr_pricing_price']; ?> <span> <?php echo $witrshowdata['witr_pricing_month']; ?></span></h5>
							<?php }?>
							<!-- yearly -->
								<?php if(isset($witrshowdata['witr_pricing_yearly']) && ! empty($witrshowdata['witr_pricing_yearly'])){?>
								<p><?php echo $witrshowdata['witr_pricing_yearly']; ?></p>	
								<?php }?>	
							<!-- list -->
							<?php if(isset($witrshowdata['witr_pricing_list']) && ! empty($witrshowdata['witr_pricing_list'])){?>
								<div class="witri_texti_list">
								<?php echo $witrshowdata['witr_pricing_list']; ?>
								</div>
							<?php }?>
						</div><!-- color -->	
						<!-- button -->
						<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
						<div class="witr_btnp_color">
							<a  class="btn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_pricing_button'];?></a>
						</div>			
						<?php }?>						
                    </div> <!-- pricing part -->
                </div> 

			<?php
			break;
			
			default:
			?>


					
				<div class="pricing_area all_pricing_color  <?php if( $witrshowdata['witr_show_active']=='yes' ){ echo "active"; }?>">
                    <div class="pricing-part <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
	
							<!-- icon -->
							<div class="witr_pricing_icon">
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>
							</div>
				
							<!-- image -->
							<?php if(isset($witrshowdata['witr_pricing_image']['url']) && ! empty($witrshowdata['witr_pricing_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_pricing_image']['url'];?>" alt="" />
							<?php } ?>							
							<!-- ribon -->	
							<?php if(isset($witrshowdata['witr_pricing_ribon']) && ! empty($witrshowdata['witr_pricing_ribon'])){?>
								<sub><?php echo $witrshowdata['witr_pricing_ribon']; ?> </sub>	
							<?php }?>						
							<!-- title -->
							<?php if(isset($witrshowdata['witr_pricing_title']) && ! empty($witrshowdata['witr_pricing_title'])){?>
								<h4><?php echo $witrshowdata['witr_pricing_title']; ?> </h4>	
							<?php }?>
							<!--  price content -->
							<?php if(isset($witrshowdata['witr_pricing_content']) && ! empty($witrshowdata['witr_pricing_content'])){?>
							<div class="prt_content"><p><?php echo $witrshowdata['witr_pricing_content']; ?> </p></div>
							<?php }?>
							<!-- offer price -->
							<?php if(isset($witrshowdata['witr_pricing_offerp']) && ! empty($witrshowdata['witr_pricing_offerp'])){?>
								<h6><?php echo $witrshowdata['witr_pricing_offerp']; ?> </h6>	
							<?php }?>
							<!-- price/currency/month -->
							<?php if(isset($witrshowdata['witr_pricing_price']) && ! empty($witrshowdata['witr_pricing_price'])){?>
								<h5><span><?php echo $witrshowdata['witr_pricing_currency']; ?></span><?php echo $witrshowdata['witr_pricing_price']; ?> <span> <?php echo $witrshowdata['witr_pricing_month']; ?></span></h5>
							<?php }?>
							<!-- yearly -->
								<?php if(isset($witrshowdata['witr_pricing_yearly']) && ! empty($witrshowdata['witr_pricing_yearly'])){?>
								<p><?php echo $witrshowdata['witr_pricing_yearly']; ?></p>	
								<?php }?>							
							
							<!-- list -->
							<?php if(isset($witrshowdata['witr_pricing_list']) && ! empty($witrshowdata['witr_pricing_list'])){?>
								<div class="witri_texti_list">
									<?php echo $witrshowdata['witr_pricing_list']; ?>
								</div>
							<?php }?>
			
						<!-- button -->
						<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
						<div class="witr_btnp_color">
							<a  class="btn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_pricing_button'];?></a>
						</div>			
						<?php }?>						
                    </div> <!-- pricing part -->
                </div> 

			
			<?php
			break;
			
		} /* switch end */
		

	
	
	

    } /*===function end ===*/



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Pricing() );
