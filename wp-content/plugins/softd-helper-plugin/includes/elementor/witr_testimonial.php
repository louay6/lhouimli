<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Elementor_Widget_Testimonialr extends Widget_Base {

    public function get_name() {
        return 'witr_testimonialr_section';
    }
    
    public function get_title() {
        return esc_html__( 'WITR : Testimonial', 'softd' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
		/* === witr_controls_section start === */
        $this->start_controls_section(
            'witr_testimonial_option',
            [
                'label' => esc_html__( 'witr testimonial options', 'softd' ),
				'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
		
		
			/*  witr_style_testimonial */
			$this->add_control(
				'witr_style_testimonial',
				[
					'label' => esc_html__( 'Testimonial style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'1' => esc_html__( 'Testimonial style 1', 'softd' ),
						'2' => esc_html__( 'Testimonial style 2', 'softd' ),
						'3' => esc_html__( 'Testimonial style 3', 'softd' ),
					],
					'default' => '1',
				]
			);

			
			$repeater = new Repeater();	
				/* show image witr_testimonialr_image */
					$repeater->add_control(
						'witr_show_image',
						[
							'label' => esc_html__( 'Show Image', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'yes',								
						]
					);	
					$repeater->add_control(
						'witr_morethree_heading',
						[
							'label' => esc_html__( 'Recommended Image Size= 78x78px', 'softd' ),
							'type' => Controls_Manager::HEADING,
						]
					);				
					$repeater->add_control(
						'witr_testimonialr_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],
							'condition' => [
								'witr_show_image' => 'yes',
							],							
						]
					);
									
				/* witr_testimonialr_title */	
					$repeater->add_control(
						'witr_testimonialr_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator'=>'before',
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'placeholder' => esc_attr__( 'Type your testimonial title here', 'softd' ),						
						]
					);
					/*witr_testimonialr_subtitle */	
					$repeater->add_control(
						'witr_testimonialr_subtitle',
						[
							'label' => esc_html__( 'Sub Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator'=>'before',
							'description' => esc_html__( 'Not use sub title, remove the text from field', 'softd' ),
							'placeholder' => esc_attr__( 'Type your testimonial sub title here', 'softd' ),						
						]
					);
							
				/* witr_testimonial_content	*/
					$repeater->add_control(
						'witr_testimonialr_content',
						[
							'label' => esc_html__( 'Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator'=>'before',
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);
					
					/* witr_star_select */
					$repeater->add_control(
						'witr_star_select',
						[
							'label' => esc_html__( 'Star Select', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'description' =>"Set your Star Select here",
							'separator' => 'before',					
							'default' => '5',
							'options' => [
								'1' => esc_html__( '1 Star', 'softd' ),
								'2' => esc_html__( '2 Star', 'softd' ),
								'3' => esc_html__( '3 Star', 'softd' ),
								'4' => esc_html__( '4 Star', 'softd' ),
								'5' => esc_html__( '5 Star', 'softd' ),
							],
						]
					);
							
					/* witr_list_testimonialr */
					$this->add_control(
						'witr_list_testimonialr',
						[
							'label' => esc_html__( 'Repeater List', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'separator'=>'before',
							'fields' => $repeater->get_controls(),
							'default' => [
								[
									'witr_testimonialr_image' => esc_html__( 'Image', 'softd' ),
									'witr_testimonialr_title' => esc_html__( 'Testimonial Title', 'softd' ),
									'witr_testimonialr_subtitle' => esc_html__( '- Web Developer', 'softd' ),
									'witr_testimonialr_content' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sod tempor.', 'softd' ),
								],

							],
							'title_field' => '{{{ witr_testimonialr_title }}}',
						]
					);			
			

			/*witr_column_grid */
            $this->add_control(
                'witr_column_grid',
                [
                    'label' => esc_html__( 'Columns', 'softd' ),
                    'type' => Controls_Manager::SELECT,
					'description' =>"set your column from here",
                    'separator' => 'before',					
                    'default' => '2',
                    'options' => [
                        '12' => esc_html__( '1', 'softd' ),
                        '6' => esc_html__( '2', 'softd' ),
                        '4' => esc_html__( '3', 'softd' ),
                        '3' => esc_html__( '4', 'softd' ),
                        '2' => esc_html__( '6', 'softd' ),
                    ],
						'condition' => [
							'witr_style_testimonial' =>['3']
						],					
                ]
            );
		
			/* witr_gutter_column */
			$this->add_control(
				'witr_gutter_column',
				[
					'label' => esc_html__( 'Show Gutter', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
                    'separator' => 'before',					
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',					
				]
			);	   
	
				/* witr_slides_to_show */ 		
				$this->add_control(
					'witr_slides_to_show',
					[
						'label' => esc_html__( 'Slides to Show', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 100,
						'step' => 1,
						'default' => 2,
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
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
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
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
						'condition' => [
							'witr_style_testimonial' =>['1','2']
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
						'condition' => [
							'witr_style_testimonial' =>['1','2']
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
						'default' => 1000,
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
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
						'default' => 700,
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
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
						'condition' => [
							'witr_style_testimonial' =>['1','2']
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
						'condition' => [
							'witr_style_testimonial' =>['1','2']
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
						'default' => 2,
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
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
						'default' => 2,
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
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
						'condition' => [
							'witr_style_testimonial' =>['1','2']
						],						
					]
				);								
				/* feature title witr_feature_title */	
					$this->add_control(
						'witr_unicid_c',
						[
							'label' => esc_html__( 'Use Unic ID', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Please use a unic ID here, ex- any text.', 'softd' ),
							'default' => 'id1',
							'placeholder' => esc_attr__( 'Type your ID here', 'softd' ),
							'condition' => [
								'witr_style_testimonial' =>['1','2']
							],							
						]
					);				
			
			
        $this->end_controls_section();
		/* === witr_controls_section end === */
		
		
		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
		
		
			/*=== start witr_single_testimonial style ====*/
			$this->start_controls_section(
				'witr_single_testimonial',
				[
					'label' => esc_html__( 'Single testimonial Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,				
					
				]
			);	

				/* witr_single_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_border',
						'label' => esc_html__( 'Single Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_color_testimonial',
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
							'{{WRAPPER}} .all_color_testimonial' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);			
			
			$this->end_controls_section();
			/* === end witr_single_testimonial ===  */		
		
		
		
		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( ' Title Color option', 'softd' ),
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
						'{{WRAPPER}} .all_color_testimonial h6' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_color_testimonial h6:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_color_testimonial h6',
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
						'{{WRAPPER}} .all_color_testimonial h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_color_testimonial h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/
		

		/*=== start witr_subtitle style  ====*/

		$this->start_controls_section(
			'witr_style_subtitle_option2',
			[
				'label' => esc_html__( 'SubTitle Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_subtitle_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial span' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_subtitle_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_sttpy_color1',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_color_testimonial span',
				]
			);		
			/* margin */
			$this->add_responsive_control(
				'witr_subtitle margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_subtitle padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_subtitle style  ====*/		
		
		/*=== start witr_star style  ====*/
		$this->start_controls_section(
			'witr_style_star_option',
			[
				'label' => esc_html__( 'Star Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_star_color',
				[
					'label' => esc_html__( 'Icon Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial ul li i' => 'color: {{VALUE}}',
					],
				]
			);
			
			/* active color */
			$this->add_control(
				'witr_star_active_color',
				[
					'label' => esc_html__( 'Icon Active Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial ul li .active' => 'color: {{VALUE}}',
					],
				]
			);
				/*  icon font size */
				$this->add_responsive_control(
					'witr_sttpy_size',
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
							'{{WRAPPER}} .all_color_testimonial ul li i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);		
			/* margin */
			$this->add_responsive_control(
				'witr_star margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial ul li i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_star padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial ul li i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_star style  ====*/

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
						'{{WRAPPER}} .all_color_testimonial p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_color_testimonial p',
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
						'{{WRAPPER}} .all_color_testimonial p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_color_testimonial p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/		
		
		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_option',
			[
				'label' => esc_html__( 'Images option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
								'min' => 0,
								'max' => 500,
							],
							'px' => [
								'min' => 0,
								'max' => 1920,
							],	
						],						
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],					

						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial img' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  image max width */
				$this->add_responsive_control(
					'witr_image_maxwidth',
					[
						'label' => esc_html__( 'Max width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'%' => [
								'min' => 0,
								'max' => 500,
							],
							'px' => [
								'min' => 0,
								'max' => 1920,
							],	
						],						
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],					

						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial img' => 'max-width: {{SIZE}}{{UNIT}};',
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
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial img' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .all_color_testimonial img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_color_testimonial img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			/* image heading */
			$this->add_responsive_control(
				'witr_image_heading',
				[
					'label' => esc_html__( 'This Style(1,2,3) Working', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);			
			/* witr_top */
				$this->add_responsive_control(
					'witr_topt',
					[
						'label' => esc_html__( 'Top', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 1000,
							],
							'%' => [
								'min' => -500,
								'max' => 1000,
							],
							'em' => [
								'min' => -500,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .test-part img,{{WRAPPER}} .video-item a' => 'top: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_testimonial' =>['1','2','3'],
						],					
					]
				);
				
				/* witr_left */
				$this->add_responsive_control(
					'witr_leftl',
					[
						'label' => esc_html__( 'Left', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 1500,
							],
							'%' => [
								'min' => -500,
								'max' => 1500,
							],
							'em' => [
								'min' => -500,
								'max' => 1500,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} .test-part img,{{WRAPPER}} .video-item a' => 'left: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_testimonial' =>['1','2','3'],
						],					
					]
				);

				/* witr_right */
				$this->add_responsive_control(
					'witr_rightr',
					[
						'label' => esc_html__( 'Right', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
							'em' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .test-part img,{{WRAPPER}} .video-item a' => 'right: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_testimonial' =>['1','2','3'],
						],					
					]
				);					
				/* witr_bottom */
				$this->add_responsive_control(
					'witr_bottomb',
					[
						'label' => esc_html__( 'Bottom', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 1000,
							],
							'%' => [
								'min' => -500,
								'max' => 1000,
							],
							'em' => [
								'min' => -500,
								'max' => 1000,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} .test-part img,{{WRAPPER}} .video-item a' => 'bottom: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_testimonial' =>['1','2','3'],
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
						'witr_style_testimonial' =>['1','2']
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
								'label' => esc_html__( 'Active Background', 'softd' ),
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
								'selector' => '{{WRAPPER}} .slick-prev.slick-disabled,{{WRAPPER}} .slick-next.slick-disabled',
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
						/* witr_hoverborder_style */
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
						'witr_style_testimonial' =>['1','2']
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
		
		
		
		
		
		
		
		
		
		
		

    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata = $this->get_settings_for_display();
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();

		$witr_gutter_column  =  $witrshowdata['witr_gutter_column']=='yes'  ? 'noguttergs' : 'guttergs';		
		
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
		

		switch( $witrshowdata['witr_style_testimonial']){
			

			case '3':
			?>			
            <div  class="testomonial all_color_testimonial">	
                <div class="row">		
					<?php if(isset($witrshowdata['witr_list_testimonialr']) && ! empty($witrshowdata['witr_list_testimonialr'])){
						foreach($witrshowdata['witr_list_testimonialr'] as $witr_test_single){?>						
							<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-12 col-xs-12 <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50">
									<!-- title -->
									<?php if(isset($witr_test_single['witr_testimonialr_title']) && ! empty($witr_test_single['witr_testimonialr_title'])){?>
										<h6><?php echo $witr_test_single['witr_testimonialr_title']; ?> </h6>		
									<?php } ?>																								 
									<!-- sub title -->
									<?php if(isset($witr_test_single['witr_testimonialr_subtitle']) && ! empty($witr_test_single['witr_testimonialr_subtitle'])){?>
										<span><?php echo $witr_test_single['witr_testimonialr_subtitle']; ?> </span>		
									<?php } ?>

									<ul><li>
										<?php if($witr_test_single['witr_star_select']==5){?> 
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
											</div>									
										
										<?php }elseif($witr_test_single['witr_star_select']==4){?>
											<div class="em_crating">
												
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												
											</div>												

										<?php }elseif($witr_test_single['witr_star_select']==3){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>											

										<?php }elseif($witr_test_single['witr_star_select']==2){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>											

										<?php }elseif($witr_test_single['witr_star_select']==1){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>
										<?php }else{}?>
									</li></ul>
									<!-- content -->
									<?php if(isset($witr_test_single['witr_testimonialr_content']) && ! empty($witr_test_single['witr_testimonialr_content'])){?>
										<p><?php echo $witr_test_single['witr_testimonialr_content']; ?> </p>		
									<?php } ?>
									<!-- image -->
									<?php if(isset($witr_test_single['witr_testimonialr_image']['url']) && ! empty($witr_test_single['witr_testimonialr_image']['url'])){?>
										<img src="<?php echo $witr_test_single['witr_testimonialr_image']['url'];?>" alt="" />
									<?php } ?>										
								</div> 
							</div>
							
						<?php } ?>
					<?php } ?>
                </div>
            </div>
			
			<?php			
			break;
			case '2':
			?>
			<div  class="testomonial testomonial-5 all_color_testimonial">	
                <div class="row tshover testomonial-slide testsa_<?php echo $unic_id;?>">
					<?php if(isset($witrshowdata['witr_list_testimonialr']) && ! empty($witrshowdata['witr_list_testimonialr'])){
						foreach($witrshowdata['witr_list_testimonialr'] as $witr_test_single){?>						
							<div class="witr_item_column <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50">
									<!-- title -->
									<?php if(isset($witr_test_single['witr_testimonialr_title']) && ! empty($witr_test_single['witr_testimonialr_title'])){?>
										<h6><?php echo $witr_test_single['witr_testimonialr_title']; ?> </h6>		
									<?php } ?>																								 
									<!-- sub title -->
									<?php if(isset($witr_test_single['witr_testimonialr_subtitle']) && ! empty($witr_test_single['witr_testimonialr_subtitle'])){?>
										<span><?php echo $witr_test_single['witr_testimonialr_subtitle']; ?> </span>		
									<?php } ?>

									<ul><li>
										<?php if($witr_test_single['witr_star_select']==5){?> 
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
											</div>									
										
										<?php }elseif($witr_test_single['witr_star_select']==4){?>
											<div class="em_crating">
												
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												
											</div>												

										<?php }elseif($witr_test_single['witr_star_select']==3){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>											

										<?php }elseif($witr_test_single['witr_star_select']==2){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>											

										<?php }elseif($witr_test_single['witr_star_select']==1){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>
										<?php }else{}?>
									</li></ul>
									<!-- content -->
									<?php if(isset($witr_test_single['witr_testimonialr_content']) && ! empty($witr_test_single['witr_testimonialr_content'])){?>
										<p><?php echo $witr_test_single['witr_testimonialr_content']; ?> </p>		
									<?php } ?>
									<!-- image -->
									<?php if(isset($witr_test_single['witr_testimonialr_image']['url']) && ! empty($witr_test_single['witr_testimonialr_image']['url'])){?>
										<div class="postimg"><img src="<?php echo $witr_test_single['witr_testimonialr_image']['url'];?>" alt="" /></div>
									<?php } ?>										
								</div> 
							</div>
							
						<?php } ?>
					<?php } ?>
                </div>
            </div>
			<script type='text/javascript'>
				jQuery(function($){

					$('.testsa_<?php echo $unic_id;?>').slick({
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
	
					
			<div  class="testomonial testomonial-2 all_color_testimonial">	
				<div class="row tshover testomonial-slide testsa_<?php echo $unic_id;?>">
					<?php if(isset($witrshowdata['witr_list_testimonialr']) && ! empty($witrshowdata['witr_list_testimonialr'])){
						foreach($witrshowdata['witr_list_testimonialr'] as $witr_test_single){?>						
							<div class="witr_item_column <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50">
									<!-- title -->
									<?php if(isset($witr_test_single['witr_testimonialr_title']) && ! empty($witr_test_single['witr_testimonialr_title'])){?>
										<h6><?php echo $witr_test_single['witr_testimonialr_title']; ?> </h6>		
									<?php } ?>																								 
									<!-- sub title -->
									<?php if(isset($witr_test_single['witr_testimonialr_subtitle']) && ! empty($witr_test_single['witr_testimonialr_subtitle'])){?>
										<span><?php echo $witr_test_single['witr_testimonialr_subtitle']; ?> </span>		
									<?php } ?>

									<ul><li>
										<?php if($witr_test_single['witr_star_select']==5){?> 
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
											</div>									
										
										<?php }elseif($witr_test_single['witr_star_select']==4){?>
											<div class="em_crating">
												
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												
											</div>												

										<?php }elseif($witr_test_single['witr_star_select']==3){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>											

										<?php }elseif($witr_test_single['witr_star_select']==2){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>											

										<?php }elseif($witr_test_single['witr_star_select']==1){?>
											<div class="em_crating">
											
												<i class="fas fa-star active"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											
											</div>
										<?php }else{}?>
									</li></ul>
									<!-- content -->
									<?php if(isset($witr_test_single['witr_testimonialr_content']) && ! empty($witr_test_single['witr_testimonialr_content'])){?>
										<p><?php echo $witr_test_single['witr_testimonialr_content']; ?> </p>		
									<?php } ?>
									<!-- image -->
									<?php if(isset($witr_test_single['witr_testimonialr_image']['url']) && ! empty($witr_test_single['witr_testimonialr_image']['url'])){?>
										<img src="<?php echo $witr_test_single['witr_testimonialr_image']['url'];?>" alt="" />
									<?php } ?>										
								</div> 
							</div>
							
						<?php } ?>
					<?php } ?>							
				</div>
			</div>
			
			<script type='text/javascript'>
				jQuery(function($){

					$('.testsa_<?php echo $unic_id;?>').slick({
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
			
		} /*=== end switch ====*/	

       
	} // end function





}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Elementor_Widget_Testimonialr() );

