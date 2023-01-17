<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Elementor_Widget_Testimonial extends Widget_Base {

    public function get_name() {
        return 'witr_testimonial_section';
    }
    
    public function get_title() {
        return esc_html__( 'WITR : Post Testimonial', 'softd' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'witr_testimonial_option',
            [
                'label' => esc_html__( 'witr testimonial options', 'softd' ),
            ]
        );
		
		
			/* testimonial style witr_style_testimonial */
			$this->add_control(
				'witr_style_testimonial',
				[
					'label' => esc_html__( 'Testimonial style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'1' => esc_html__( 'Testimonial style 1', 'softd' ),
						'2' => esc_html__( 'Testimonial style 2', 'softd' ),
						'3' => esc_html__( 'Testimonial Not Carousel', 'softd' ),
						'4' => esc_html__( 'Testimonial style 4', 'softd' ),
						'5' => esc_html__( 'Testimonial style 5', 'softd' ),
						'6' => esc_html__( 'Testimonial style 6', 'softd' ),
						'7' => esc_html__( 'Testimonial style 7', 'softd' ),
						'8' => esc_html__( 'Testimonial style 8', 'softd' ),
						'9' => esc_html__( 'Testimonial style 9', 'softd' ),
						'10' => esc_html__( 'Testimonial style 10', 'softd' ),
						'11' => esc_html__( 'Testimonial style 11', 'softd' ),
						'12' => esc_html__( 'Testimonial style 12', 'softd' ),
						'13' => esc_html__( 'Left Image Right Text style', 'softd' ),
					],
					'default' => '1',
				]
			);
			
			/* witr_align */					
			$this->add_responsive_control(
				'witr_align_test',
				[
					'label' => __( 'Box Alignment', 'softd' ),
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
						'{{WRAPPER}} .all_color_testimonial,{{WRAPPER}} .em_single_testimonial,{{WRAPPER}} .em_testi_content,{{WRAPPER}} .em_testi_text,{{WRAPPER}} .witr_testi_s_11 ' => 'text-align: {{VALUE}} !important',
					],
					'condition' => [
						'witr_style_testimonial' =>['1','2','4','9','10','11','12','13'],
					],					
				]
			);
			
			/* testimonial iten show witr_post_per_page */
            $this->add_control(
                'witr_post_per_page',
                [
                    'label' => esc_html__( 'Show Number Of testimonial', 'softd' ),
                    'type' => Controls_Manager::NUMBER,				
                    'separator' => 'before',
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                    'default' => 4,
					
                ]
            );
			/* testimonial show witr_adc_testimonial */
 			$this->add_control(
				'witr_adc_testimonial',
				[
					'label' => esc_html__( 'Testimonial ASC/DSC style', 'softd' ),
					'type' => Controls_Manager::SELECT,
                    'separator' => 'before',					
					'options' => [
						'DESC'	=> esc_html__( 'Descending', 'softd' ),
						'ASC'	=> esc_html__( 'Ascending', 'softd' )
					],
					'default' => 'DESC',
					'condition' => [
						'witr_style_testimonial' =>['1','2','4','5','6','7','8','9','10','11','12','13'],
					],				
				]
			);
			/* witr_content_length */
            $this->add_control(
                'witr_content_length',
                [
                    'label' => esc_html__( 'Content Length', 'softd' ),
                    'type' => Controls_Manager::NUMBER,
                    'separator' => 'before',					
                    'min' => 1,
                    'max' => 1000,
                    'step' => 1,
                    'default' => 23,					
                ]
            );			
			
			/* testimonial column witr_column_grid */
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
					'condition' => [
						'witr_style_testimonial' =>['1','2','4','6','9','10','11','12','13'],
					],					
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
						],						
					]
				);
				/* witr_slides_to_show2 */ 		
				$this->add_control(
					'witr_slides_to_show2',
					[
						'label' => esc_html__( 'Slides to Show', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 100,
						'step' => 1,
						'default' => 3,
						'condition' => [
							'witr_style_testimonial' =>['5','7']
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
						'condition' => [
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
						'default' => 1000,
						'condition' => [
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','5','6','7','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','5','6','7','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
							'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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
							'default' => 'idtesti',
							'placeholder' => esc_attr__( 'Type your ID here', 'softd' ),
							'condition' => [
								'witr_style_testimonial' =>['1','2','4','6','8','9','10','11','12','13']
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

				/* Slider Opacity background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_txsi_background11',
						'label' => esc_html__( 'Backgrpund Color', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_testi_main',
						'condition' => [
							'witr_style_testimonial' =>['8'],
						],						
					]
				);			
				/* witr_single_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_border11',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_testi_main',
						'condition' => [
							'witr_style_testimonial' =>['8'],
						],							
					]
				);
				
			
				/* witr_single_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_border',
						'label' => esc_html__( 'Single Border', 'softd' ),
						'selector' => '{{WRAPPER}} .em_single_testimonial,{{WRAPPER}} .testiCreCon,{{WRAPPER}} .testomonial .test-part,{{WRAPPER}} .witr_testi_s_11',
						'condition' => [
							'witr_style_testimonial' =>['1','2','3','4','6','9','10','11','12','13'],
						],							
					]
				);
				/* Slider Opacity background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_txsi_background',
						'label' => esc_html__( 'Backgrpund Color', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .em_single_testimonial,{{WRAPPER}} .testiCreCon,{{WRAPPER}} .testomonial .test-part,{{WRAPPER}} .witr_testi_s_11',
						'condition' => [
							'witr_style_testimonial' =>['1','2','3','4','6','9','10','11','12','13'],
						],						
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_tes_shadowsbox',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .em_single_testimonial,{{WRAPPER}} .testomonial .test-part,{{WRAPPER}} .witr_testi_main,{{WRAPPER}} .testiCreCon,{{WRAPPER}} .witr_testi_s_11',
						'condition' => [
							'witr_style_testimonial' => ['1','2','3','4','6','9','10','11','12','13'],
						],						
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_tesh_shadowsbox',
						'label' => esc_html__( 'Box Shadow Hover', 'softd' ),
						'selector' => '{{WRAPPER}} .em_single_testimonial:hover,{{WRAPPER}} .testomonial .test-part:hover,{{WRAPPER}} .witr_testi_main:hover,{{WRAPPER}} .testiCreCon:hover,{{WRAPPER}} .witr_testi_s_11',
						'condition' => [
							'witr_style_testimonial' => ['1','2','3','4','6','9','10','11','12','13'],
						],						
					]
				);				
				$this->add_control(
					'witr_phead_as',
					[
						'label' => esc_html__( 'BG Hover Color ', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_testimonial' =>['1','2','3','4','6','9','10','11','12','13'],
						],							
					]
				);
				
				/* Slider Opacity background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_thxsi_background',
						'label' => esc_html__( 'Backgrpund Color', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .em_single_testimonial:hover,{{WRAPPER}} .testomonial .test-part:hover,{{WRAPPER}} .witr_testi_main:hover,{{WRAPPER}} .testiCreCon:hover,{{WRAPPER}} .witr_testi_s_11:hover',
						'condition' => [
							'witr_style_testimonial' =>['1','2','3','4','6','9','10','11','12','13'],
						],						
					]
				);			
				
				/* single_border_radius 
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
				);*/
				$this->add_control(
					'witr_phead_alts',
					[
						'label' => esc_html__( 'All Text Hover Color ', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_testimonial' =>['1','2','3','4','6','9','10','11','12','13'],
						],							
					]
				);
			$this->add_control(
				'witr_title_ahover_color',
				[
					'label' => esc_html__( 'All Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .em_single_testimonial:hover h2,{{WRAPPER}} .em_single_testimonial:hover p,{{WRAPPER}} .em_single_testimonial:hover span,{{WRAPPER}} .em_single_testimonial:hover i,{{WRAPPER}} .testomonial .test-part:hover h6,{{WRAPPER}} .testomonial .test-part:hover p,{{WRAPPER}} .testomonial .test-part:hover span,{{WRAPPER}} .testomonial .test-part:hover i,{{WRAPPER}} .testiCreCon:hover p' => 'color: {{VALUE}}',
					],
					'condition' => [
						'witr_style_testimonial' =>['1','2','3','4','6','9','10','11','12','13'],
					],						
				]
			);
			/* number margin */
			$this->add_responsive_control(
				'witr_number_margin',
				[
					'label' => esc_html__( ' Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .testomonial .test-part,{{WRAPPER}} .em_single_testimonial,{{WRAPPER}} .witr_testi_main,{{WRAPPER}} .testiCreCon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_testimonial' =>['1','2','3','4','6','7','9','10','11','12','13'],
					],					
				]
			);
			/* number padding */
			$this->add_responsive_control(
				'witr_number_padding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .testomonial .test-part,{{WRAPPER}} .em_single_testimonial,{{WRAPPER}} .witr_testi_main,{{WRAPPER}} .testiCreCon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_testimonial' =>['1','2','3','4','6','7','9','10','11','12','13'],
					],					
				]
			);
			
			
			$this->end_controls_section();
			/* === end witr_single_testimonial ===  */		
		
		
		
		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( 'Title Color option', 'softd' ),
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
						'{{WRAPPER}} .all_color_testimonial h6,{{WRAPPER}} .all_color_testimonial h2' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_color_testimonial h6:hover,{{WRAPPER}} .all_color_testimonial h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_color_testimonial h6,{{WRAPPER}} .all_color_testimonial h2',
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
						'{{WRAPPER}} .all_color_testimonial h6,{{WRAPPER}} .all_color_testimonial h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_color_testimonial h6,{{WRAPPER}} .all_color_testimonial h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/
		

		/*=== start witr_subtitle style  ====*/

		$this->start_controls_section(
			'witr_style_subtitle_option2',
			[
				'label' => esc_html__( 'Designation Color Option', 'softd' ),
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
						'{{WRAPPER}} .all_color_testimonial span,{{WRAPPER}} .execllent_star h3' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_color_testimonial span:hover,{{WRAPPER}} .execllent_star h3:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_color_testimonial span,{{WRAPPER}} .execllent_star h3',
				]
			);		
			/* margin */
			$this->add_responsive_control(
				'witr_subtitle_margin',
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
				'witr_subtitle_padding',
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
				'condition' => [
					'witr_style_testimonial' =>['1','2','3','4','5','7','8','9','10','11','12','13'],
				],				
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
						'{{WRAPPER}} .all_color_testimonial i' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_color_testimonial i.active' => 'color: {{VALUE}}',
					],
				]
			);
				/*  icon font size */
				$this->add_responsive_control(
					'witr_star_size',
					[
						'label' => esc_html__( ' Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_star_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .test-part',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_star_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .test-part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* padding */
				$this->add_responsive_control(
					'witr_star_padding',
					[
						'label' => esc_html__( 'Icon Box Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .test-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
			/* margin */
			$this->add_responsive_control(
				'witr_star_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
			/* witr_text_align */					
			$this->add_responsive_control(
				'witr_text_align',
				[
					'label' => esc_html__( 'Text Align', 'softd' ),
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
						'{{WRAPPER}} .single_creativeItem' => 'text-align: {{VALUE}}',
					],
					'condition' => [
						'witr_style_testimonial' =>['6'],
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
			/* witr_border_style */
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'witr_border_content_style',
					'label' => esc_html__( 'Border', 'softd' ),
					'default' => 'no',								
					'selector' => '{{WRAPPER}} .em_testi_content',
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_con_margin',
				[
					'label' => esc_html__( 'Content Box Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .em_testi_content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_con_background',
					'label' => esc_html__( 'Icon Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .testiCreCon,{{WRAPPER}} .testiCreCon:after',
					'condition' => [
						'witr_style_testimonial' =>['6'],
					],					
				]
			);
			/*  icon left */
			$this->add_responsive_control(
				'witr_icon_left_after',
				[
					'label' => esc_html__( 'After Left', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .testiCreCon:after' => 'left: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_testimonial' =>['6'],
					]					
				]
			);			
			/* content border_radius */
			$this->add_control(
				'witr_bordercontent_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .testiCreCon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_testimonial' =>['6'],
					],					
				]
			);
			
			/* content box shadow color */	
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'witr_boxcontent_shadow',
					'label' => esc_html__( 'Box Shadow', 'softd' ),
					'selector' => '{{WRAPPER}} .testiCreCon',
					'condition' => [
						'witr_style_testimonial' =>['6'],
					],					
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
		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_icon_option',
			[
				'label' => esc_html__( 'Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_testimonial' =>['6','7'],
				],				
			]
		);

				/* Icon Color */
				$this->add_control(
					'witr_primary_color',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial.dfa i,{{WRAPPER}} .witr_content_test7 p::after' => 'color: {{VALUE}}',
						],					
					]
				);
				/* Icon Hover Color */
				$this->add_control(
					'witr_primaryh_color',
					[
						'label' => esc_html__( 'Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial.dfa i:hover,{{WRAPPER}} .witr_content_test7 p:hover::after' => 'color: {{VALUE}}',
						],					
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'icon_size',
					[
						'label' => esc_html__( ' Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial.dfa i,{{WRAPPER}} .witr_content_test7 p::after' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);		
			/* Icon margin */
			$this->add_responsive_control(
				'icon_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial.dfa i,{{WRAPPER}} .witr_content_test7 p::after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					
				]
			);
			/* Icon padding */
			$this->add_responsive_control(
				'icon_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial.dfa i,{{WRAPPER}} .witr_content_test7 p::after' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			/* witr_top */
			$this->add_responsive_control(
				'witr_top7',
				[
					'label' => esc_html__( 'Top', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -100,
							'max' => 1000,
						],
						'%' => [
							'min' => -000,
							'max' => 1000,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .witr_content_test7 p::after' => 'top: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_testimonial' =>['7'],
					],					
				]
			);
			
			/* witr_left */
			$this->add_responsive_control(
				'witr_left7',
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
						'{{WRAPPER}} .witr_content_test7 p::after' => 'left: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_testimonial' =>['7'],
					],					
				]
			);			
		
		 $this->end_controls_section();
		/*=== end  witr Icon style ====*/
		
		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_option',
			[
				'label' => esc_html__( 'Images Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_testimonial' =>['1','2','3','4','5','7','8','9','10','11','12','13'],
				],				
			]
		);		 
				/* witr_posi_style */
				$this->add_control(
					'witr_float_style',
					[
						'label' => esc_html__( 'Image Position', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'default ' => esc_html__( 'Default', 'softd' ),
							'none ' => esc_html__( 'None', 'softd' ),
							'left' => esc_html__( 'Left', 'softd' ),
							'right' => esc_html__( 'Right', 'softd' ),	
						],
						'selectors' => [
							'{{WRAPPER}} .em_test_thumb,{{WRAPPER}} .autho_thumb,{{WRAPPER}} .postimg' => 'float: {{VALUE}}',
						],
						'description' => esc_html__( 'Working Style 4,5,11,12', 'softd' ),						
						'condition' => [
							'witr_style_testimonial' =>['4','5','11','12'],
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
						'separator'=>'before',
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],					
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
							'{{WRAPPER}} .all_color_testimonial img' => 'width: {{SIZE}}{{UNIT}};',
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
							
				/* border_radius */
				$this->add_control(
					'witr_img_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_color_testimonial img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			/* Image box shadow color */	
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'witr_boximg_shadow',
					'label' => esc_html__( 'Box Shadow', 'softd' ),
					'selector' => '{{WRAPPER}} .all_color_testimonial img',					
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
		

		/*=== start Text Box style ====*/
		$this->start_controls_section(
			'section_text_box',
			[
				'label' => esc_html__( ' Box  Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_testimonial' =>['8'],
				],				
			]
		);
			/* box text background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_boxt_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_background_test,{{WRAPPER}} .witr_testi_main',
					
				]
			);		
			/* border_color */
			$this->add_control(
				'witr_box_tr',
				[
					'label' => esc_html__( 'Border Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .witr_background_test,{{WRAPPER}} .witr_testi_main' => 'border-color: {{VALUE}}',
					],
				]
			);								
			/* box padding */
			$this->add_responsive_control(
				'witr_box_tpadding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_background_test,{{WRAPPER}} .witr_testi_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);				

		

		$this->end_controls_section();
		/*=== start Single Box style ====*/			


		/*===== start  all_text =====*/
		$this->start_controls_section(
			'section_all_text_color',
			[
				'label' => esc_html__( ' All Text Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				//'condition' => [
					//'witr_style_testimonial' => ['9','10','11','12'],
				//],
			]
		);		
		
			/* color */
			$this->add_control(
				'witr_text_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial i,{{WRAPPER}} .all_color_testimonial p,{{WRAPPER}} .all_color_testimonial h2,{{WRAPPER}} .all_color_testimonial h6,{{WRAPPER}} .all_color_testimonial span' => 'color: {{VALUE}}',
					],
				]
			);
			/* color */
			$this->add_control(
				'witr_texth_color',
				[
					'label' => esc_html__( 'Hover Color ', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_color_testimonial:hover i,{{WRAPPER}} .all_color_testimonial:hover p,{{WRAPPER}} .all_color_testimonial:hover h2,{{WRAPPER}} .all_color_testimonial:hover h6,{{WRAPPER}} .all_color_testimonial:hover span' => 'color: {{VALUE}}',
					],
				]
			);
			

		$this->end_controls_section();
		/*===== end all_text =====*/



		
		
			/*=== start witr Arrow style ====*/

			$this->start_controls_section(
				'witr_style_option_arrow',
				[
					'label' => esc_html__( 'Witr Arrow Options', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_c_arrows' => 'true',
						'witr_style_testimonial' =>['1','2','4','5','6','7','8','9','10','11','12','13']
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
										'min' => -300,
										'max' => 1000,
									],
									'%' => [
										'min' => -300,
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
								'size_units' => [ 'px', 'em' ],
								'range' => [
									'px' => [
										'min' => -1000,
										'max' => 1000,
									],
									'em' => [
										'min' => -1000,
										'max' => 1000,
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
								'size_units' => [ 'px', 'em' ],
								'range' => [
									'px' => [
										'min' => -1000,
										'max' => 1000,
									],
									'em' => [
										'min' => -1000,
										'max' => 1000,
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
						'witr_style_testimonial' =>['1','2','4','5','6','7','8','9','10','11','12','13']
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
		$infinite=$autoplay=$autoplayspeed=$speed=$slidestoShow=$slidestoShow2=$slidestoscroll=$arrows=$dots=$res1=$res2=$res3=$unic_id="";

if(! empty($witrshowdata['witr_slides_to_show'])){
	$slidestoShow=$witrshowdata['witr_slides_to_show'];
}
if(! empty($witrshowdata['witr_slides_to_show2'])){
	$slidestoShow2=$witrshowdata['witr_slides_to_show2'];
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
		
		
		
		
        $witr_post_per_page       = ! empty( $witrshowdata['witr_post_per_page'] ) ? $witrshowdata['witr_post_per_page'] : 2;
        $witr_adc_testimonial    = ! empty( $witrshowdata['witr_adc_testimonial'] ) ? $witrshowdata['witr_adc_testimonial'] : 'DESC';
        $witr_title_length    = ! empty( $witrshowdata['witr_title_length'] ) ? $witrshowdata['witr_title_length'] : 5;
        $witr_content_length  = ! empty( $witrshowdata['witr_content_length'] ) ? $witrshowdata['witr_content_length'] : 23;      
        $witr_gutter_column  =  $witrshowdata['witr_gutter_column']=='yes'  ? 'noguttergs' : 'guttergs'; 

			$args = array(
				'post_type'            => 'em_testimonial',
				'post_status'          => 'publish',
				'ignore_sticky_posts'  => 1,
				'posts_per_page'       => $witr_post_per_page,
				'order'                => $witr_adc_testimonial,
			);
                        
                 $posts = new \WP_Query($args);
		switch( $witrshowdata['witr_style_testimonial']){
			
		case '13':
			?>			
					<div class="carso13_<?php echo $unic_id;?> tshover testomonial-slide ">	
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
									

							$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );										
							 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );					
							 $testi_logo  = get_post_meta( get_the_ID(),'_softd_testi_logo', true );					
							 $screenshot_img  = get_post_meta( get_the_ID(),'_softd_screenshot_img', true );
							 $review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
							 ?>						
						<!-- SINGLE TEAM -->
						<div class="witr_testi_itemt testi-width all_color_testimonial ">
							<!-- Start Single Testimonial -->
							<div class="em_single_testimonial witr_testi_s_9 testimonial_post_13">
								<?php if($screenshot_img){?>
									<div class="witr_screenshot_thumb">
										<img src="<?php echo $screenshot_img;?>" alt="logo" />
									</div>
								<?php }?>
								
								<div class="test_text_all">
									<div class="test-part mt-50 ">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
									</div> <!-- test part -->							
									<div class="em_testi_content">
										<div class="em_testi_text">
											<!-- content -->	
											<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
										</div>
									</div>								
									<?php if(has_post_thumbnail()){?> 
								
										<div class="em_test_thumb">
											<?php the_post_thumbnail();?>
										</div>
									<?php } ?>												
										<div class="em_testi_title">
											<h2><?php the_title(); ?> <span><?php if($testi_deg){echo $testi_deg;}?></span></h2>											
										</div>
										<div class="em_testi_logo">
											<div class="em_testilogo_inner">
												<?php if($testi_logo){?>
												<img src="<?php echo $testi_logo;?>" alt="logo" />
												 <?php }?>
											</div>
										</div>

								</div>										
							</div>										
						</div>	

					<?php  } //END WHILE ?>
				</div>
				<script type='text/javascript'>
					jQuery(function($){

						$('.carso13_<?php echo $unic_id;?>').slick({
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
		case '12':
			?>			
					<div class="carso12_<?php echo $unic_id;?> tshover testomonial-slide ">	
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
									

							$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );										
							 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );					
							 $testi_logo  = get_post_meta( get_the_ID(),'_softd_testi_logo', true );
							 $review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
							 ?>						
						<!-- SINGLE TEAM -->
						<div class="witr_testi_itemt testi-width all_color_testimonial">	
						
							<!-- Start Single Testimonial -->
							<div class="em_single_testimonial witr_testi_s_9 witr_testi_s_12">
								<div class="test-part mt-50 ">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
								</div> <!-- test part -->							
								<div class="em_testi_content">
									<div class="em_testi_text">
										<!-- content -->	
										<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									</div>
								</div>								
								<?php if(has_post_thumbnail()){?> 
							
									<div class="em_test_thumb">
										<?php the_post_thumbnail();?>
									</div>
								<?php } ?>												
									<div class="em_testi_title">
										<h2><?php the_title(); ?> <span><?php if($testi_deg){echo $testi_deg;}?></span></h2>											
									</div>
									<div class="em_testi_logo">
										<div class="em_testilogo_inner">
											<?php if($testi_logo){?>
											<img src="<?php echo $testi_logo;?>" alt="logo" />

											 <?php }?>
											
										</div>
									</div>

									
							</div>										
						</div>	

					<?php  } //END WHILE ?>
					</div>
				<script type='text/javascript'>
					jQuery(function($){

						$('.carso12_<?php echo $unic_id;?>').slick({
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
			case '11':
			?>			
            <div  class="testomonial testomonial-2 all_color_testimonial">	
                <div class="row tshover testomonial-slide carso_<?php echo $unic_id;?>">
                    <?php

                        while($posts->have_posts()):$posts->the_post();

						$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
						$testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );							
						$review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );							
								
					?>


							<div class="witr_item_column <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50 witr_testi_s_11">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
									<!-- content -->	
									<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
										 <h6><?php the_title(); ?>	</h6>  									 
									
									<?php if($testi_deg){?><span> <?php echo $testi_deg; ?> </span> <?php }?>									
									<!-- image -->
									<?php if(has_post_thumbnail()){?>							
										<?php the_post_thumbnail(); ?> 								
									<?php } ?>
								</div> <!-- test part -->
							</div>

				
				
                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>
                </div>
            </div>
			<script type='text/javascript'>
				jQuery(function($){

					$('.carso_<?php echo $unic_id;?>').slick({
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
			case '10':
			?>			
					<div class="carso_<?php echo $unic_id;?> tshover testomonial-slide witr_testi_s10">	
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
									

							$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );										
							 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );					
							 $testi_logo  = get_post_meta( get_the_ID(),'_softd_testi_logo', true );
							 $review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
							 ?>						
						<!-- SINGLE TEAM -->
						<div class="witr_testi_itemt testi-width all_color_testimonial">	
						
							<!-- Start Single Testimonial -->
							<div class="em_single_testimonial">
									<div class="test_q_icon">
										<i class="fas fa-quote-left"></i>
									</div>
								<div class="em_testi_content">
									<div class="em_testi_text">
										<!-- content -->	
										<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									</div>
								</div>								

								<?php if(has_post_thumbnail()){?> 
							
									<div class="em_test_thumb test-part">
										<?php the_post_thumbnail();?>
									</div>
								<?php } ?>												
									<div class="em_testi_title">
										<h2><?php the_title(); ?> <span><?php if($testi_deg){echo $testi_deg;}?></span></h2>											
									</div>
									<div class="em_testi_logo">
										<div class="em_testilogo_inner">
											<?php if($testi_logo){?>
											<img src="<?php echo $testi_logo;?>" alt="logo" />

											 <?php }?>
											
										</div>
									</div>

									
							</div>										
						</div>	

					<?php  } //END WHILE ?>
					</div>
				<script type='text/javascript'>
					jQuery(function($){

						$('.carso_<?php echo $unic_id;?>').slick({
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
		case '9':
			?>			
					<div class="carso_<?php echo $unic_id;?> tshover testomonial-slide ">	
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
									

							$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );										
							 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );					
							 $testi_logo  = get_post_meta( get_the_ID(),'_softd_testi_logo', true );
							 $review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
							 ?>						
						<!-- SINGLE TEAM -->
						<div class="witr_testi_itemt testi-width all_color_testimonial">	
						
							<!-- Start Single Testimonial -->
							<div class="em_single_testimonial witr_testi_s_9">
								<div class="test-part mt-50 ">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
								</div> <!-- test part -->							
								<div class="em_testi_content">
									<div class="em_testi_text">
										<!-- content -->	
										<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									</div>
								</div>								
								<?php if(has_post_thumbnail()){?> 
							
									<div class="em_test_thumb">
										<?php the_post_thumbnail();?>
									</div>
								<?php } ?>												
									<div class="em_testi_title">
										<h2><?php the_title(); ?> <span><?php if($testi_deg){echo $testi_deg;}?></span></h2>											
									</div>
									<div class="em_testi_logo">
										<div class="em_testilogo_inner">
											<?php if($testi_logo){?>
											<img src="<?php echo $testi_logo;?>" alt="logo" />

											 <?php }?>
											
										</div>
									</div>

									
							</div>										
						</div>	

					<?php  } //END WHILE ?>
					</div>
				<script type='text/javascript'>
					jQuery(function($){

						$('.carso_<?php echo $unic_id;?>').slick({
							infinite: <?php echo $infinite;?>,
							autoplay: <?php echo $autoplay;?>,
							autoplaySpeed: <?php echo $autoplayspeed;?>,
							speed: <?php echo $speed;?>,					
							slidesToShow: <?php echo $slidestoShow;?>,
							slidesToScroll: <?php echo $slidestoscroll;?>,
							arrows: <?php echo $arrows;?>,
							dots: <?php echo $dots;?>,
							//centerMode: true,
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
			case '8':
			?>
			
			<div class="witr_testomonial_area all_color_testimonial testomonial-slide">
				<div class="row witr_carso_<?php echo $unic_id;?>">
                    <?php

                        while($posts->have_posts()):$posts->the_post();

						$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
						$testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );							
						$review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );							
								
					?>
							<div class="witr_background_test">
								<div class="witr_testi_main">
									<div class="witr_test_part ">
										<!-- image -->
										<?php if(has_post_thumbnail()){?>
										<div class="postimg"><?php the_post_thumbnail();?></div>
																		
										<?php } ?>
									</div>
									<div class="witr_ns_part ">
										 <h6><?php the_title(); ?>	</h6>  									 
										<?php if($testi_deg){?><span> <?php echo $testi_deg; ?> </span> <?php }?>
									</div>
									<div class="witr_test_content">
										<!-- content -->	
										<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									</div>
									<div class="witr_test_name">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
									</div>
								</div>
							</div>
					


                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>
                </div>
            </div>
			<script type='text/javascript'>
				jQuery(function($){

					$('.witr_carso_<?php echo $unic_id;?>').slick({
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
			case '7':
			?>			
				<div class="witr_client7 carsoli_<?php echo $unic_id;?>  testomonial-slide text-center all_color_testimonial">											
					<div class="witr_testiSlider">
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
									
						?>
							<div class="item">	
								<?php if(has_post_thumbnail()){?>
									<div class="witr_autho_thumb">
										<?php the_post_thumbnail();?>
									</div>
								<?php } ?>
							</div>
						<?php  } //END WHILE ?>
					</div>
					<div class="wirt_TraSlider">

						<?php while ( $posts->have_posts() ) {
							$posts->the_post();		
								 $em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
								 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );
								 $review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
								?>							
							<div class="item witr_content_test7">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
								<!-- content -->	
								<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
                                <div class="witr_author_name">
									<h6><?php the_title();?></h6>
									<span><?php if($testi_deg){echo $testi_deg;}?></span>
								</div>						
							</div>
						<?php  } //END WHILE ?>
					</div>		
				</div>
							
							
							
				<script type='text/javascript'>
					jQuery(function($){
						if ($('.witr_testiSlider').length > 0) {
							$('.witr_testiSlider').slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								arrows: false,
								fade: true,
								asNavFor: '.wirt_TraSlider',
								autoplay: true,
							});

							$('.wirt_TraSlider').slick({
								slidesToShow: <?php echo $slidestoShow2;?>,
								slidesToScroll: 1,
								asNavFor: '.witr_testiSlider',
								arrows: <?php echo $arrows;?>,
								dots: <?php echo $dots;?>,
								autoplaySpeed: 2000,
								speed: 700,								
								centerMode: true,
								centerPadding: '0',
								focusOnSelect: true,
								responsive: [
									{
										breakpoint: 1200,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
										}
									},
									{
										breakpoint: 992,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
										}
									},
									{
										breakpoint: 767,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
										}
									}
								]								
							});
						}	
					});					
					
				</script>							
			<?php			
			break;			
			
			case '6':
			?>			
				<div class=" carso_<?php echo $unic_id;?> all_color_testimonial dfa testomonial-slide">					
					<?php while ( $posts->have_posts() ) {
						$posts->the_post();
						$testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );
						?>
							
						<div class="item <?php echo $witr_gutter_column; ?>">
							<div class="single_creativeItem ">
								<div class="box-size">
									<div class="testiCreCon">
										<i class="fa fa-quote-left"></i>
										<!-- content -->	
										<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									</div>
									<div class="testAuthor">
										<h6><?php the_title();?></h6>
										<?php if($testi_deg){?><span> <?php echo $testi_deg; ?> </span> <?php }?>
									</div>
								</div>
							</div>
						</div>
					<?php  } //END WHILE ?>
				</div>
										
				<script type='text/javascript'>
					jQuery(function($){

						$('.carso_<?php echo $unic_id;?>').slick({
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
			case '5':
			?>			
				<div class="busi_testimonialArea carsol_<?php echo $unic_id;?> testomonial-slide  text-center all_color_testimonial">												
					<div class="busi_testiSlider">
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
								$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
								$review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
							?>
								
							<div class="item">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
								<!-- content -->	
								<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
							</div>
						<?php  } //END WHILE ?>
					</div>
					<div class="busi_singleNav text-center">

						<?php while ( $posts->have_posts() ) {
								$posts->the_post();		
							 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );
								?>							
						<div class="item">
							<?php if(has_post_thumbnail()){?>
								<div class="autho_thumb">
									<?php the_post_thumbnail();?>
								</div>
							<?php } ?>
							<div class="test_author">
								<h6><?php the_title();?></h6>
								<span><?php if($testi_deg){echo $testi_deg;}?></span>
							</div>
						</div>
						<?php  } //END WHILE ?>
					</div>		
				</div>
							
							
							
				<script type='text/javascript'>
					jQuery(function($){
						if ($('.busi_testiSlider').length > 0) {
							$('.busi_testiSlider').slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								arrows: false,
								asNavFor: '.busi_singleNav',
								autoplay: true,
								
							});

							$('.busi_singleNav').slick({
								slidesToShow: <?php echo $slidestoShow2;?>,
								slidesToScroll: 1,
								asNavFor: '.busi_testiSlider',
								arrows: <?php echo $arrows;?>,
								dots: <?php echo $dots;?>,
								centerMode: true,
								centerPadding: '0',
								focusOnSelect: true,
								responsive: [
									{
										breakpoint: 1200,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
										}
									},
									{
										breakpoint: 992,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
										}
									},
									{
										breakpoint: 767,
										settings: {
											slidesToShow: 1,
											slidesToScroll: 1,
										}
									}
								]								
							});
						}	
					});			
					
				</script>							
			<?php			
			break;			
			case '4':
			?>			
					<div class="carso_<?php echo $unic_id;?> tshover testomonial-slide ">	
						<?php while ( $posts->have_posts() ) {
								$posts->the_post();
									

							$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );										
							 $testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );					
							 $testi_logo  = get_post_meta( get_the_ID(),'_softd_testi_logo', true );
							 $review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );
							 ?>						
						<!-- SINGLE TEAM -->
						<div class="witr_testi_itemt testi-width all_color_testimonial">	
						
							<!-- Start Single Testimonial -->
							<div class="em_single_testimonial">
							
								<?php if(has_post_thumbnail()){?> 
							
									<div class="em_test_thumb test-part">
										<?php the_post_thumbnail();?>
									</div>
								<?php } ?>												
									<div class="em_testi_title">
										<h2><?php the_title(); ?> <span><?php if($testi_deg){echo $testi_deg;}?></span></h2>											
									</div>
									<div class="em_testi_logo">
										<div class="em_testilogo_inner">
											<?php if($testi_logo){?>
											<img src="<?php echo $testi_logo;?>" alt="logo" />

											 <?php }?>
											
										</div>
									</div>

								<div class="em_testi_content">
									<div class="em_testi_text">
										<!-- content -->	
										<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									</div>
								</div>
								<div class="test-part">
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>										
								</div>										
							</div>										
						</div>								
					<?php  } //END WHILE ?>
					</div>
				<script type='text/javascript'>
					jQuery(function($){

						$('.carso_<?php echo $unic_id;?>').slick({
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
			case '3':
			?>			
            <div  class="testomonial all_color_testimonial">	
                <div class="row">
                    <?php

                        while($posts->have_posts()):$posts->the_post();

						$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
						$testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );							
						$review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );							
								
					?>


							<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-12 col-xs-12 <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50">						
										<h6><?php the_title(); ?>	</h6>  									 
									<?php if($testi_deg){?><span> <?php echo $testi_deg; ?> </span> <?php }?>
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
									<!-- content -->	
									<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									<!-- image -->
									<?php if(has_post_thumbnail()){?>							
										<?php the_post_thumbnail(); ?> 								
									<?php } ?>
								</div> <!-- test part -->
							</div>

				
				
                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>
                </div>
            </div>
			
			<?php			
			break;
			
			case '2':
			?>
			<div  class="testomonial testomonial-5 all_color_testimonial">	
                <div class="row tshover testomonial-slide carso_<?php echo $unic_id;?>">
                    <?php

                        while($posts->have_posts()):$posts->the_post();

						$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
						$testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );							
						$review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );							
								
					?>


							<div class="witr_item_column <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50">
																
										 <h6><?php the_title(); ?>	</h6>  									 
									
									<?php if($testi_deg){?><span> <?php echo $testi_deg; ?> </span> <?php }?>
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
									<!-- content -->	
									<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="postimg"><?php the_post_thumbnail();?></div>
																	
									<?php } ?>
								</div> <!-- test part -->
							</div>

				
				
                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>
                </div>
            </div>
			<script type='text/javascript'>
				jQuery(function($){

					$('.carso_<?php echo $unic_id;?>').slick({
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
                <div class="row tshover testomonial-slide carso_<?php echo $unic_id;?>">
                    <?php

                        while($posts->have_posts()):$posts->the_post();

						$em_rating  = get_post_meta( get_the_ID(),'_softd_em_rating', true );
						$testi_deg  = get_post_meta( get_the_ID(),'_softd_testi_deg', true );							
						$review_text  = get_post_meta( get_the_ID(),'_softd_review_text', true );							
								
					?>


							<div class="witr_item_column <?php echo $witr_gutter_column; ?>">
								<div class="test-part mt-50">
																
										 <h6><?php the_title(); ?>	</h6>  									 
									
									<?php if($testi_deg){?><span> <?php echo $testi_deg; ?> </span> <?php }?>
										<ul>
											<li>
												<?php if($em_rating==5){?> 
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												
												<?php }elseif($em_rating==4){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>												

												<?php }elseif($em_rating==3){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==2){?>
													<div class="execllent_toggol">
														<div class="em_crating">
															<i class="fas fa-star active"></i>
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>											

												<?php }elseif($em_rating==1){?>
													<div class="execllent_toggol">
														<div class="em_crating">
														
															<i class="fas fa-star active"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
														<?php if($review_text){?>
														<div class="execllent_star">
															<h3><?php echo $review_text;?></h3>
														</div>
														<?php }?>
													</div>
												<?php }else{}?>
											</li>
										</ul>
									<!-- content -->	
									<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
									<!-- image -->
									<?php if(has_post_thumbnail()){?>							
										<?php the_post_thumbnail(); ?> 								
									<?php } ?>
								</div> <!-- test part -->
							</div>

				
				
                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>
                </div>
            </div>
			<script type='text/javascript'>
				jQuery(function($){

					$('.carso_<?php echo $unic_id;?>').slick({
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

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Elementor_Widget_Testimonial() );

