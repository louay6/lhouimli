<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Apartment extends Widget_Base {

    public function get_name() {
        return 'witr_section_apartment';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Contact Form', 'softd' );
    }

    public function get_icon() {
        return 'eicon-table-of-contents';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			/* === witr_pricing start === */
			$this->start_controls_section(
				'witr_field_display_apartment',
				[
					'label' => esc_html__( 'Witr Contact Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
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
							'{{WRAPPER}} .apartment_area' => 'text-align: {{VALUE}}',
						],
						'separator' => 'before',
					]
				);
				
				/* witr_apartment_title	*/
				$this->add_control(
					'witr_apartment_title',
					[
						'label' => esc_html__( ' Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Type Your Title', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use Title, remove the title from field', 'softd' ),
						'placeholder' => esc_attr__( 'Type your title here', 'softd' ),						
					]
				);
				/* witr_apartment_content	*/
				$this->add_control(
					'witr_apartment_content',
					[
						'label' => esc_html__( 'Sub Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Type Your Sub Title', 'softd' ),
						'description' => esc_html__( 'Not use Sub Title, remove the Sub Title from field', 'softd' ),
						'placeholder' => esc_attr__( 'Type your Sub Title here', 'softd' ),							
					]
				);				
				/* witr_apartment_shortcode	*/
				$this->add_control(
					'witr_apartment_shortcode',
					[
						'label' => esc_html__( 'Shortcode', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => '',
						'separator' => 'before',
						'description' => esc_html__( 'Not use shortcode, remove the shortcode from field', 'softd' ),
						'placeholder' => esc_attr__( 'Type your shortcode here', 'softd' ),						
					]
				);				
				
		

			$this->end_controls_section();
			/*=== end witr_text widget start ====*/
			
			
			
			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/				
			
			
		/*=== start witr_style_option_box ====*/
		$this->start_controls_section(
			'witr_style_option_box',
			[
				'label' => esc_html__( 'Single Box Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);	
				/* Box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_background',
						'label' => esc_html__( 'Box Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .apartment_area,{{WRAPPER}} .witr_form_area1,{{WRAPPER}} .witr_form_area3,{{WRAPPER}} witr_form_area3,{{WRAPPER}} .form_area ',
					]
				);
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderf',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .apartment_area',
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
							'{{WRAPPER}} .apartment_area' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);				
			/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .apartment_area',
					]
				);
			/*  margin */
			$this->add_responsive_control(
				'witr_box_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .apartment_area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/*  padding */
			$this->add_responsive_control(
				'witr_box_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .apartment_area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/		
			
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
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .apartment_text h1' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .apartment_text h1:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .apartment_text h1',
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
						'{{WRAPPER}} .apartment_text h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .apartment_text h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/			


		/*=== start witr content style ====*/
		$this->start_controls_section(
			'witr_style_option_content',
			[
				'label' => esc_html__( 'Sub Title Color Option', 'softd' ),
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
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .apartment_text h2' => 'color: {{VALUE}}',
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
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .apartment_text h2',
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
						'{{WRAPPER}} .apartment_text h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .apartment_text h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/


		/*=== start witr Subscribe style ====*/
		$this->start_controls_section(
			'witr_style_subscribe _option',
			[
				'label' => esc_html__( 'Field Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
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
				/* witr_he_color
				$this->add_control(
					'witr_he_color',
					[
						'label' => esc_html__( 'Note - When Normal Option Use, Not Work Button Color Option', 'softd' ),
						'type' => Controls_Manager::HEADING,					
					]
				); */				
				
				/* Subscribe Color */
				$this->add_control(
					'witr_subscribe_color',
					[
						'label' => esc_html__( 'Field Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .witr_apartment_form input::-webkit-input-placeholder,{{WRAPPER}} .wpcf7-form-control-wrap input,{{WRAPPER}} .wpcf7-form-control-wrap input::-webkit-input-placeholder,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap a::-webkit-input-placeholder,{{WRAPPER}} .wpcf7-form-control-wrap textarea,{{WRAPPER}} .wpcf7-form-control-wrap textarea::-webkit-input-placeholder,{{WRAPPER}} .wpcf7-submit::-webkit-input-placeholder,{{WRAPPER}} .wpcf7 label,{{WRAPPER}} .witr_apartment_form form select option' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap textarea,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input,{{WRAPPER}} .witr_apartment_form form select option',
					]
				);				
				/* Chrome placeholder Color 
				$this->add_control(
					'witr_subplac_color',
					[
						'label' => esc_html__( 'Chrome Placeholder Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_apartment_form input::-webkit-input-placeholder' => 'color: {{VALUE}}',
						],					
					]
				);
				*/
				/* Firefox placeholder Color */
				$this->add_control(
					'witr_subplacfi_color',
					[
						'label' => esc_html__( 'Firefox Placeholder Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_apartment_form input::-moz-placeholder,{{WRAPPER}} .wpcf7-form-control-wrap textarea::-moz-placeholder,{{WRAPPER}} .wpcf7-submit::-webkit-input-placeholder,{{WRAPPER}} .wpcf7-form-control-wrap a::-moz-placeholder,{{WRAPPER}} .wpcf7-form-control-wrap a::-moz-placeholder' => 'color: {{VALUE}}',
						],					
					]
				);
				
				

				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_subse_color',
						'label' => esc_html__( ' Typography', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap textarea,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input,{{WRAPPER}} .wpcf7 label',
					]
				);
				
				/*  subscribe width */
				$this->add_responsive_control(
					'witr_subscribe_width',
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
						'size_units' => [ 'px', '%', 'em' ],
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
							'{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  textarea height */
				$this->add_responsive_control(
					'witr_subscribe_line_height',
					[
						'label' => esc_html__( 'Textarea Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .wpcf7-form-control-wrap textarea' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);				
				
				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_bordersb_style',
						'label' => esc_html__( 'Subscribe Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap textarea,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input',
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
							'{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap textarea,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			
				/* subscribe margin */
				$this->add_responsive_control(
					'witr_subscribe_margin',
					[
						'label' => esc_html__( 'Field Margin Top Bottom', 'softd' ),
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
							'{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .witr_apartment_form textarea,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_apartment_form input,{{WRAPPER}} .witr_apartment_form form select,{{WRAPPER}} .wpcf7-form-control-wrap textarea,{{WRAPPER}} .wpcf7-form-control-wrap a,{{WRAPPER}} .wpcf7-form-control-wrap input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				$this->end_controls_tab();
				/*=== end subscribe normal style ====*/
				
				/*=== start Button normal style ====*/
				$this->start_controls_tab(
					'witr_button_colors_normal',
					[
						'label' => esc_html__( 'Button', 'softd' ),
					]
				);				
				/* Subscribe Button Heading  */
				$this->add_control(
					'witr_btn_sub_color',
					[
						'label' => esc_html__( ' Button Color Option', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_textbtn_align',
					[
						'label' => esc_html__( 'Button Position', 'softd' ),
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
							'{{WRAPPER}} .witr_con_btn1,{{WRAPPER}} .witr_con_btn2,{{WRAPPER}} .witr_apartment_form .const_btn' => 'text-align: {{VALUE}}',
						],
						'separator' => 'before',
					]
				);

				
				/* Button Color */
				$this->add_control(
					'witr_button_color',
					[
						'label' => esc_html__( 'Button Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2',
					]
				);				
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_button_color',
						'label' => esc_html__( 'Button Typography', 'softd' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_ACCENT,
						],
						'selector' => '{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2',
					]
				);;
				
				/*  button width */
				$this->add_responsive_control(
					'witr_button_width',
					[
						'label' => esc_html__( ' width', 'softd' ),
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
						'size_units' => [ 'px', '%', 'em' ],
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
							'{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  button height */
				$this->add_responsive_control(
					'witr_button_height',
					[
						'label' => esc_html__( ' Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);												
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderc_style',
						'label' => esc_html__( 'Button Border', 'softd' ),
						'selector' => '{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_borders_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);			
				/* button margin */
				$this->add_responsive_control(
					'witr_button_margin',
					[
						'label' => esc_html__( 'Button Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* button padding */
				$this->add_responsive_control(
					'witr_button_padding',
					[
						'label' => esc_html__( 'Button Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .const_btn,{{WRAPPER}} .wpcf7-submit,{{WRAPPER}} button,{{WRAPPER}} input.w_btn1,{{WRAPPER}} input.w_btn2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .checkbox_witr span,{{WRAPPER}} span.wpcf7-list-item' => 'color: {{VALUE}}',
						],					
					]
				);
				/* Checkbox typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_checkbox_color',
						'label' => esc_html__( 'Checkbox Typography', 'softd' ),
						'selector' => '{{WRAPPER}} .checkbox_witr span,{{WRAPPER}} span.wpcf7-list-item',
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
							'{{WRAPPER}} .checkbox_witr span,{{WRAPPER}} span.wpcf7-list-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .checkbox_witr span,{{WRAPPER}} span.wpcf7-list-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
				$this->end_controls_tab();
				/*=== end btn normal style ====*/
			
					/*=== start subscribe hover style ====*/
					$this->start_controls_tab(
						'witr_icon_colors_hover',
						[
							'label' => esc_html__( 'Field Hover', 'softd' ),
						]
					);
					
					/*  primary hover color */
					$this->add_control(
						'witr_hoverds_icon_color',
						[
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .witr_apartment_form input:hover,{{WRAPPER}} .witr_apartment_form form select:hover,{{WRAPPER}} .wpcf7-form-control-wrap input:hover,{{WRAPPER}} .wpcf7-form-control-wrap a:hover,{{WRAPPER}} .wpcf7-form-control-wrap textarea:hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Subscribe background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hoverg_icon',
							'label' => esc_html__( ' Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .witr_apartment_form input:hover,{{WRAPPER}} .witr_apartment_form form select:hover,{{WRAPPER}} .wpcf7-form-control-wrap input:hover,{{WRAPPER}} .wpcf7-form-control-wrap a:hover,{{WRAPPER}} .wpcf7-form-control-wrap textarea:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .witr_apartment_form input:hover,{{WRAPPER}} .witr_apartment_form form select:hover,{{WRAPPER}} .wpcf7-form-control-wrap input:hover,{{WRAPPER}} .wpcf7-form-control-wrap a:hover,{{WRAPPER}} .wpcf7-form-control-wrap textarea:hover' => 'border-color: {{VALUE}}',
							],
						]
					);
					
					
					/*=========== Subscribe Button Hover Heading ==================*/
					$this->add_control(
						'witr_btn_hover_color',
						[
							'label' => esc_html__( ' Button Hover', 'softd' ),
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
							'{{WRAPPER}} .const_btn:hover,{{WRAPPER}} .wpcf7-submit:hover,{{WRAPPER}} .w_btn2:hover,{{WRAPPER}} button:hover,{{WRAPPER}} input.w_btn1:hover,{{WRAPPER}} input.w_btn2:hover' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .const_btn:hover,{{WRAPPER}} .wpcf7-submit:hover,{{WRAPPER}} .w_btn2:hover,{{WRAPPER}} button:hover,{{WRAPPER}} input.w_btn1:hover,{{WRAPPER}} input.w_btn2:hover',
					]
				);
				/* border_color_hover */
				$this->add_control(
					'witr_borders_hov_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						
						'selectors' => [
							'{{WRAPPER}} .const_btn:hover,{{WRAPPER}} .wpcf7-submit:hover,{{WRAPPER}} .w_btn2:hover,{{WRAPPER}} button:hover,{{WRAPPER}} input.w_btn1:hover,{{WRAPPER}} input.w_btn2:hover' => 'border-color: {{VALUE}}',
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
		
		?>

					<div class="apartment_area">				
						<div class="apartment_text">		
							<!-- title -->
							<?php if(isset($witrshowdata['witr_apartment_title']) && ! empty($witrshowdata['witr_apartment_title'])){?>
								<h1><?php echo $witrshowdata['witr_apartment_title']; ?></h1>
							<?php } ?>		
							<!-- content -->
							<?php if(isset($witrshowdata['witr_apartment_content']) && ! empty($witrshowdata['witr_apartment_content'])){?>
								<h2><?php echo $witrshowdata['witr_apartment_content']; ?> </h2>		
							<?php } ?>							
						</div>		
						<div class="witr_apartment_form">
							<?php if(isset($witrshowdata['witr_apartment_shortcode']) && ! empty($witrshowdata['witr_apartment_shortcode'])){
								$shortcodewon=$witrshowdata['witr_apartment_shortcode'];
								  echo do_shortcode( $shortcodewon );
							 } ?>						
						</div>					
					</div>					
		
		<?php	


    } /* funcition end */


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Apartment() );
