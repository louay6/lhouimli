<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Witr_Theme_Section_image extends Widget_Base {

    public function get_name() {
        return 'witr_section_carousel_image';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Carousel Image', 'softd' );
    }

    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_image start === */
			$this->start_controls_section(
				'witr_field_display_image',
				[
					'label' => esc_html__( 'witr Image Carousel Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
				
				/* witr_image_carousel */
				$this->add_control(
					'witr_image_carousel',
					[
						'label' => esc_html__( 'Add Images', 'softd' ),
						'type' => Controls_Manager::GALLERY,
						'separator'=>'before',
						'default' => [],
						'description' =>esc_html__( 'Add Carousel Images', 'softd' ),
						'show_label' => false,
						'dynamic' => [
							'active' => true,
						],					
					]
				);	

				
				

	
				/* witr_slides_to_show */ 		
				$this->add_control(
					'witr_slides_to_show',
					[
						'label' => esc_html__( 'Slides to Show', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'description' =>esc_html__( 'Add Slide Mumber here, ex- 1', 'softd' ),
						'separator' => 'before',					
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
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1000,
						'max' => 50000,
						'step' => 1000,
						'default' => 3000,
					]
				);
				/*  witr_c_speed */			
				$this->add_control(
					'witr_c_speed',
					[
						'label' => esc_html__( 'speed', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 100,
						'max' => 2000,
						'step' => 100,
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
						'default' => 1,
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
						
			
			
		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
		

/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( 'Single Images option', 'softd' ),
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
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 25,
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .slide_items img' => 'width: {{SIZE}}{{UNIT}};',
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
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 25,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .slide_items img' => 'height: {{SIZE}}{{UNIT}};',
						],
					]			
				);


				/* image margin */
				$this->add_responsive_control(
					'witr_image_margin',
					[
						'label' => esc_html__( 'Image Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .slide_items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* image padding */
				$this->add_responsive_control(
					'witr_image_padding',
					[
						'label' => esc_html__( 'Image Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .slide_items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/		
		
		
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
						/* witr_hoverborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_hoverborder_style',
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
		
	
		/*===== start Image BG Overlay =====*/
		$this->start_controls_section(
			'section_background_overlay',
			[
				'label' => esc_html__( 'Image BG Overlay', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		
			/* image background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_icono_background',
					'label' => esc_html__( 'Single Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_car_overlay::before',
				]
			);				
		
		
		$this->end_controls_section();
		/*===== end Image BG Overlay =====*/
		
		



    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
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

		
			?>
				<!--======SCREENSHOTS PART START wittr_car_top_right ======-->
				<div class="imagess_area wittr_car_top_left">
				
						<div class="witr_car_overlay imagess_<?php echo $unic_id;?>">
						
							<?php 
							if(isset($witrshowdata['witr_image_carousel'])){
							foreach ( $witrshowdata['witr_image_carousel'] as $witr_image3 ) {
								echo '<div class="witr_slick_columns"><div class="slide_items">';
								echo '<img src="' . $witr_image3['url'] . '" alt=""/>';
								echo '</div></div>';
							}} ?>

						</div>

						
									
				</div> 
				<!--======SCREENSHOTS PART ENDS ======-->			
	
	<script type='text/javascript'>
		jQuery(function($){


			/*====== Screenshots Slide Slick =======*/
			$('.imagess_<?php echo $unic_id;?>').slick({	

				infinite: <?php echo $infinite;?>,
				autoplay: <?php echo $autoplay;?>,
				autoplaySpeed: <?php echo $autoplayspeed;?>,
				speed: <?php echo $speed;?>,					
				slidesToShow: <?php echo $slidestoShow;?>,
				slidesToScroll: <?php echo $slidestoscroll;?>,
				centerMode: true,
				centerPadding: '',					
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
			
			
			
			


    } /* function end */


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_image() );
