<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Elementor_Widget_Blog extends Widget_Base {

    public function get_name() {
        return 'witr_blog_section';
    }
    
    public function get_title() {
        return esc_html__( 'WITR : Post Blog', 'softd' );
    }

    public function get_icon() {
        return 'eicon-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'witr_blog_option',
            [
                'label' => esc_html__( 'witr blog options', 'softd' ),
            ]
        );
		
		
			/* blog style witr_style_blog */
			$this->add_control(
				'witr_style_blog',
				[
					'label' => esc_html__( 'Blog style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'1' => esc_html__( 'Blog style grid', 'softd' ),
						'2' => esc_html__( 'Blog style grid 2', 'softd' ),
						'3' => esc_html__( 'Blog style Carousel', 'softd' ),
						'4' => esc_html__( 'Blog style grid 4', 'softd' ),
						'5' => esc_html__( 'Blog style 5', 'softd' ),
						'6' => esc_html__( 'Blog style 6', 'softd' ),
						'7' => esc_html__( 'Blog style Carousel 7', 'softd' ),
						'8' => esc_html__( 'Blog style Carousel 8', 'softd' ),
						'9' => esc_html__( 'Blog style Carousel 9', 'softd' ),
						'10' => esc_html__( 'Blog style Carousel 10', 'softd' ),
						'11' => esc_html__( 'Blog style Carousel 11', 'softd' ),
						'12' => esc_html__( 'Blog style Carousel 12', 'softd' ),
						'13' => esc_html__( 'Blog style Carousel 13', 'softd' ),
						'14' => esc_html__( 'Blog style Carousel 14', 'softd' ),
						'15' => esc_html__( 'Blog style 15', 'softd' ),
						'16' => esc_html__( 'Blog style Carousel 16', 'softd' ),
					],
					'default' => '1',
				]
			);
			

			
			/* blog iten show witr_post_per_page */
            $this->add_control(
                'witr_post_per_page',
                [
                    'label' => __( 'Show Number Of blog', 'softd' ),
                    'type' => Controls_Manager::NUMBER,				
                    'separator' => 'before',
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                    'default' => 3,
                ]
            );
			/* blog show witr_adc_blog */
 			$this->add_control(
				'witr_adc_blog',
				[
					'label' => esc_html__( 'Blog ASC/DSC style', 'softd' ),
					'type' => Controls_Manager::SELECT,
                    'separator' => 'before',					
					'options' => [
						'DESC'	=> esc_html__( 'Descending', 'softd' ),
						'ASC'	=> esc_html__( 'Ascending', 'softd' )
					],
					'default' => 'DESC',
				]
			);
			/* witr_column_grid */
            $this->add_control(
                'witr_column_grid',
                [
                    'label' => esc_html__( 'Columns', 'softd' ),
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
					'condition' => [
						'witr_style_blog' =>['1','2','4','5','6','15']
					]					
                ]
            );
			
			/* blog title witr_title_length */			
            $this->add_control(
                'witr_title_length',
                [
                    'label' => esc_html__( 'Title Length', 'softd' ),
                    'type' => Controls_Manager::NUMBER,
                    'separator' => 'before',					
                    'min' => 1,
                    'max' => 500,
                    'step' => 1,
                    'default' => 15,
                ]
            );
			/* witr_show_content */
			$this->add_control(
				'witr_show_content',
				[
					'label' => esc_html__( 'Show Content', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',
					'separator'=>'before',							
				]
			);			
			/* witr_content_length */
            $this->add_control(
                'witr_content_length',
                [
                    'label' => esc_html__( 'Content Length', 'softd' ),
                    'type' => Controls_Manager::NUMBER,					
                    'min' => 1,
                    'max' => 1000,
                    'step' => 1,
                    'default' => 15,
					 'condition' => [
						'witr_show_content' => 'yes',
					 ]					
                ]
            );
			/* blog button witr_blog_button */			
            $this->add_control(
                'witr_blog_button',
                [
                    'label' => esc_html__( 'Button Text', 'softd' ),
                    'type' => Controls_Manager::TEXTAREA,
                    'separator' => 'before',					
					'description' => esc_html__( 'Not use button, remove the text from field, When Use Icon Ex-Button Text <i class="icofont-arrow-right"></i>, Icon Link Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/v4.7.0/icons/', 'softd' ),
					'placeholder' => esc_attr__( 'ex - Read More', 'softd' ),
                    'default' => 'Read More',
					'condition' => [
						'witr_style_blog' =>['1','2','3','4','5','7','8','9','10','11','12','13','14','15','16'],
					],
                ]
            );
			
			/* witr_cata_show */
			$this->add_control(
				'witr_cata_show',
				[
					'label' => esc_html__( 'Show Top Category', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
                    'separator' => 'before',					
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_blog' =>['11','12','13','14','15','16'],
					],					
				]
			);			
			
			/* witr_post_meta  */	
			$this->add_control(
				'witr_post_meta',
				[
					'label' => esc_html__( 'Show Post Meta', 'softd' ),
					'type' => Controls_Manager::SELECT2,
					'separator' => 'before',
					'description' => esc_html__( 'Use The Meta, Set the from field', 'softd' ),
					'multiple' => true,
					'condition' => [
						'witr_style_blog' =>['1','2','5','6','7','9','10','11','12','13','14','15','16'],
						],
					'options' => [
						'a' => esc_html__( 'Author', 'softd' ),
						'aa' => esc_html__( 'Category', 'softd' ),						
						'd'  => esc_html__( 'Date', 'softd' ),						
						'c' => esc_html__( 'Comment', 'softd' ),
						
					],
					'default' => [ 'a', 'd' ],
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
					'default' => 'no',
				]
			);	
			/* pagination  witr_pagination */
			$this->add_control(
				'witr_pagination_meta',
				[
					'label' => esc_html__( 'Show Meta 2', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
                    'separator' => 'before',					
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_blog' =>['5','6','13','14'],
					],					
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

		/*=== end_controls_section ===*/
		
			/* witr_bslick_option */ 
			$this->start_controls_section(
				'witr_bslick_option',
				[
					'label' => esc_html__( 'witr Slick options', 'softd' ),
					'condition' => [
						'witr_style_blog' =>['3','7','8','9','10','11','12','13','14','16']
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
						'default' => 3,						
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
						'default' => 3,						
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
				/* feature title witr_feature_title */	
					$this->add_control(
						'witr_unicid_c',
						[
							'label' => esc_html__( 'Use Unique ID', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Please use a unic ID here, ex- any text.', 'softd' ),
							'default' => 'idblog1',
							'placeholder' => esc_attr__( 'Type your ID here', 'softd' ),							
						]
					);				
				
	

        $this->end_controls_section();

		/*=== end_controls_section ===*/
		
		
/*==================================================================================================================================================
															START TO STYLE
==================================================================================================================================================*/
		
			/*=== start witr_single_blog style ====*/
			$this->start_controls_section(
				'witr_single_blog',
				[
					'label' => esc_html__( 'Single Blog Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,				
					'condition' => [
						'witr_style_blog' =>['1','2','4','5','6','9','10','11','12','13','14','15','16'],
					],					
				]
			);	
			/* witr_align */					
			$this->add_responsive_control(
				'witr_aligns',
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
					'prefix_class' => 'softd-star-rating%s--align-',
					'selectors' => [
						'{{WRAPPER}} .all_blog_color' => 'text-align: {{VALUE}}',
					],
				]
			);
			/*  image height */
			$this->add_responsive_control(
				'witr_image_height',
				[
					'label' => esc_html__( 'Image Height', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 25,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_sb6_thumb img ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]			
			);			
				/* witr_single_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_border',
						'label' => esc_html__( 'Single Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_blog_color',
					]
				);			
				/* single_border_radius */
				$this->add_control(
					'witr_single_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_blog_color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* single blog background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_single_testi',
						'label' => esc_html__( ' Blog BG', 'softd' ),
						'types' => [ 'classic', 'gradient'],
						'selector' => '{{WRAPPER}} .all_blog_color',
					]
				);
				/* Single blog shadow  */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_single_tesr',
						'label' => esc_html__( 'Blog Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_blog_color',
					]
				);

				/* Blog Shadow Hover */				
				$this->add_control(
					'witr_box_blend_testhover',
					[
						'label' => esc_html__( 'Blog Shadow Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
					]
				);
				/* Single blog shadow  */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_single_tesrhover',
						'label' => esc_html__( 'blog Shadow Hover', 'softd' ),
						'selector' => '{{WRAPPER}} .blog-part:hover .all_blog_color',
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( 'Text Box Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_blog_con,{{WRAPPER}} .em-blog-content-area_adn,{{WRAPPER}} .wblog-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_blog' =>['1','2','5','9','11','12','13','16'],
						],						
					]
				);				
			
			$this->end_controls_section();
			/* === end witr_single_blog ===  */	

		
			/*=== start witr_single_blog style ====*/
			$this->start_controls_section(
				'witr_single_blog7',
				[
					'label' => esc_html__( 'Single Blog Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,				
					'condition' => [
						'witr_style_blog' =>['7','8'],
					],					
				]
			);	

				/* single blog background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_single_testi7',
						'label' => esc_html__( ' Blog BG', 'softd' ),
						'types' => [ 'classic', 'gradient'],
						'selector' => '{{WRAPPER}} .witr_ablog_content,{{WRAPPER}} .witr_blog_area8 .witr_sb6_thumb::after',
					]
				);
				/* Single blog shadow  */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_single_tesr7',
						'label' => esc_html__( 'Blog Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_ablog_content,{{WRAPPER}} .witr_blog_area8 .witr_singleBlog',
					]
				);
				
				
			/* witr_alltext_color */
			$this->add_control(
				'witr_alltext_color',
				[
					'label' => esc_html__( 'All Text Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .witr_blog_area8 .witr_blog_con6 p,{{WRAPPER}} .witr_blog_area8 .witr_blog_con6 h5 a,{{WRAPPER}} .witr_blog_area8 .witr_blog_con6 h2 a' => 'color: {{VALUE}}',
					],
				]
			);				
			/* witr_alltext_color_hover */
			$this->add_control(
				'witr_alltext_color_hover',
				[
					'label' => esc_html__( 'All Text Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .witr_singleBlog:hover .witr_blog_con6 p,{{WRAPPER}} .witr_singleBlog:hover .witr_blog_con6 h5 a,{{WRAPPER}} .witr_singleBlog:hover .witr_blog_con6 h2 a' => 'color: {{VALUE}}',
					],
				]
			);				
				

			$this->end_controls_section();
			/* === end witr_single_blog ===  */	

		
		/*=== Start Top Category style ====*/
		$this->start_controls_section(
			'witr_style_post_optiont',
			[
				'label' => esc_html__( 'Top Category Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_blog' =>['11','12','13','14','15','16'],
					'witr_cata_show' =>['yes'],
				],
			]
		);		 
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'category' );
			
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colorsc_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);		
				
			/* meta text color */
			$this->add_control(
				'witr_mtc_color',
				[
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_top_category span ul li a, {{WRAPPER}} .witr_post_Author a,{{WRAPPER}} .witr_post_Author6 > a' => 'color: {{VALUE}}',
					],					
				]
			);
			/* Background  */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_mc_background',
					'label' => esc_html__( ' Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_top_category span ul li a',
				]
			);			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_mttpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'separator'=>'before',
					'selector' => '{{WRAPPER}} .witr_top_category span ul li a',
				]
			);
			/* margin */
			$this->add_responsive_control(
				'witr_section_m',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_top_category span ul li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_secti_m',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_top_category span ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
				$this->end_controls_tab();
				/*=== end icon normal style ====*/
		
				/*=== start icon hover style ====*/
				$this->start_controls_tab(
					'witr_icon_colorsc_hover',
					[
						'label' => esc_html__( 'category Hover', 'softd' ),
					]
				);
					/* hover color */
					$this->add_control(
						'witr_mtc_hover_color',
						[
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,					
							'selectors' => [
								'{{WRAPPER}} .witr_top_category span ul li a:hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* Background  */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_mch_background',
							'label' => esc_html__( ' Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .witr_top_category span ul li a:hover',
						]
					);					

					$this->end_controls_tab();
					/*=== end icon hover style ====*/					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

			
		 $this->end_controls_section();
		/*=== end  witr top Text style ====*/			
			
		
		/*=== Start Witr Icon/Meta Text style ====*/
		$this->start_controls_section(
			'witr_style_post_option',
			[
				'label' => esc_html__( 'Post Meta Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_blog' =>['1','2','5','6','7','9','10','11','12','13','14','15','16'],
				],
			]
		);		 
				/*  witr_icond_select */
				$this->add_control(
					'witr_icond_select',
					[
						'label' => esc_html__( 'Icon Display', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'description' =>"Set your Icon Display Select here",
						'separator' => 'before',					
						'default' => 'default',
						'options' => [
							'default' => esc_html__( 'Default', 'softd' ),
							'none' => esc_html__( 'None', 'softd' ),
							'block' => esc_html__( 'Block', 'softd' ),
							'inline-block' => esc_html__( 'Inline Block', 'softd' ),
						],
						'selectors' => [
							'{{WRAPPER}} .all_blog_color span i' => 'display: {{VALUE}}',
						],						
					]
				);		
				/* Icon Color */
				$this->add_control(
					'witr_primary_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'global' => [
							'default' => Global_Colors::COLOR_SECONDARY,
						],						
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .all_blog_color span i,{{WRAPPER}} .witr_post_Author a i,{{WRAPPER}} .witr_post_Author6 a i' => 'color: {{VALUE}}',
						],
						'condition' => [
							'witr_icond_select' => ['default','block','inline-block'],
						],						
					]
				);
				/* Icon hover color */
				$this->add_control(
					'witr_icon_hover_color',
					[
						'label' => esc_html__( 'Icon Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,						
						'selectors' => [
							'{{WRAPPER}} .all_blog_color span i:hover,{{WRAPPER}} .witr_post_Author a i:hover,{{WRAPPER}} .witr_post_Author6 a i:hover' => 'color: {{VALUE}}',
						],
						'condition' => [
							'witr_icond_select' => ['default','block','inline-block'],
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
								'min' => 1,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_blog_color span i,{{WRAPPER}} .witr_post_Author a i,{{WRAPPER}} .witr_post_Author6 a i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_icond_select' => ['default','block','inline-block'],
						],						
					]
				);	

			/* margin */
			$this->add_responsive_control(
				'witr_post_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_blog_color span i,{{WRAPPER}} .witr_post_Author a i,{{WRAPPER}} .witr_post_Author6 a i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_icond_select' => ['default','block','inline-block'],
					],					
				]
			);				
			
			/* meta text color */
			$this->add_control(
				'witr_mt_color',
				[
					'label' => esc_html__( 'Meta Text Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_blog_color span, {{WRAPPER}} .all_blog_color span a, {{WRAPPER}} .witr_post_Author a,{{WRAPPER}} .witr_post_Author6 > a' => 'color: {{VALUE}}',
					],					
				]
			);
			/* Background  */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_m_background',
					'label' => esc_html__( ' Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_blog_color span, {{WRAPPER}} .all_blog_color span a,{{WRAPPER}} .witr_blog_meta_potion',
				]
			);			
			
			/* meta text color */
			$this->add_control(
				'witr_mthv_color',
				[
					'label' => esc_html__( 'Meta Text Color 2 for style 5,13,14', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'condition' => [
						'witr_style_blog' =>['5','13','14']
					],	
					'selectors' => [
						'{{WRAPPER}} .witr_post_Author.stb5 .nameAuthor' => 'color: {{VALUE}}',
					],
				]
			);
			/* box shadow color */	
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'witr_meta_shadowsbox',
					'label' => esc_html__( 'Box Shadow for style 13', 'softd' ),
					'selector' => '{{WRAPPER}} .witr_blog_meta_potion',
					'condition' => [
						'witr_style_blog' =>['13']
					],					
				]
			);			
			/* hover color */
			$this->add_control(
				'witr_mt_hover_color',
				[
					'label' => esc_html__( 'Meta Text Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .all_blog_color span:hover,{{WRAPPER}} .all_blog_color span a:hover,{{WRAPPER}} .witr_post_Author a:hover,{{WRAPPER}} .witr_post_Author6 a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_mttpyb_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'separator'=>'before',
					'selector' => '{{WRAPPER}} .all_blog_color span,{{WRAPPER}} .witr_post_Author a,{{WRAPPER}} .witr_post_Author6 a',
				]
			);
			/* margin */
			$this->add_responsive_control(
				'witr_section_mb',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_blog_color span,{{WRAPPER}} .all_blog_color span a,{{WRAPPER}} .witr_blog_meta_potion' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_secti_mb',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_blog_color span, {{WRAPPER}} .all_blog_color span a,{{WRAPPER}} .witr_blog_meta_potion' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);			
		 $this->end_controls_section();
		/*=== end  witr Icon/Meta Text style ====*/
		
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
						'{{WRAPPER}} .all_blog_color h5 > a,{{WRAPPER}} .all_blog_color h2 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_blog_color h5 > a:hover,{{WRAPPER}} .all_blog_color h2 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_blog_color h5 > a,{{WRAPPER}} .all_blog_color h2 a',
				]
			);

			/* Title Background Heading */				
			$this->add_control(
				'witr_Title_bg',
				[
					'label' => esc_html__( 'Title Background', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'condition' => [
						'witr_style_blog' => ['3','4'],
					],
				]
			);
			/* Title Background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_title_back',
					'label' => esc_html__( ' Title Background', 'softd' ),
					'types' => [ 'classic', 'gradient'],
					'condition' => [
						'witr_style_blog' => ['3','4'],
					],					
					'selector' => '{{WRAPPER}} .all_blog_color h2',
				]
			);			
			/* Title Hover Background Heading */				
			$this->add_control(
				'witr_Title_hover_bg',
				[
					'label' => esc_html__( 'Title Hover Background', 'softd' ),
					'condition' => [
						'witr_style_blog' => ['3','4'],
					],					
					'type' => Controls_Manager::HEADING,
				]
			);
			
			/* Title Hover Background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_Title_hover_back',
					'label' => esc_html__( ' Title Hover Background', 'softd' ),
					'types' => [ 'classic', 'gradient'],
					'condition' => [
						'witr_style_blog' => ['3','4'],
					],					
					'selector' => '{{WRAPPER}} .single_blog_adn:hover.all_blog_color h2',
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
						'{{WRAPPER}} .all_blog_color h5 > a,{{WRAPPER}} .all_blog_color h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_blog_color h5 > a,{{WRAPPER}} .all_blog_color h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'witr_show_content' => 'yes',
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
						'{{WRAPPER}} .all_blog_color p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_blog_color p',
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
						'{{WRAPPER}} .all_blog_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_blog_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/


			/*=== start witr_icon style ====*/
			$this->start_controls_section(
				'witr_blog_icon_option',
				[
					'label' => esc_html__( 'Icon Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_style_blog' => ['3','4'],
					],				
				]
			);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'icon_colors' );
			
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_color_blog',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				/* Icon Color */
				$this->add_control(
					'witr_primar_color',
					[
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,						
						'selectors' => [
							'{{WRAPPER}} .blog_add_icon a' => 'color: {{VALUE}}',
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
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .blog_add_icon a' => 'font-size: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .blog_add_icon a' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .blog_add_icon a' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .blog_add_icon a' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .blog_add_icon a' => 'text-align: {{VALUE}}',
						],
					]
				);
				/* witr_border_style */
				$this->add_control(
					'witr_border_style',
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
							'{{WRAPPER}} .blog_add_icon a' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				
				$this->add_control(
					'witr_border',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .blog_add_icon a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_border_style' => ['solid','double','dotted','dashed','default'],
						],						
					]
				);
				/* border_color */
				$this->add_control(
					'witr_border_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .blog_add_icon a' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_style' => ['solid','double','dotted','dashed','default'],
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
							'{{WRAPPER}} .blog_add_icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'selector' => '{{WRAPPER}} .blog_add_icon a',
					]
				);									
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .blog_add_icon a',
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
							'{{WRAPPER}} .blog_add_icon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .blog_add_icon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					/*  primary hover color */
					$this->add_control(
						'witr_hover_primary_color',
						[
							'label' => esc_html__( 'Icon Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .blog_add_icon a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .blog_add_icon a:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Icon Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .sub-i.blog_add_icon a:hover' => 'border-color: {{VALUE}}',
							],
						]
					);
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();

		/*=== end witr_icon style ====*/		
			
			/*=== start witr button style ====*/

			$this->start_controls_section(
				'witr_style_option_button',
				[
					'label' => esc_html__( 'Button Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_style_blog' =>['1','2','3','4','5','7','8','9','10','11','12','13','14','15','16'],
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
								'label' => esc_html__( 'Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'global' => [
									'default' => Global_Colors::COLOR_ACCENT,
								],								
								'selectors' => [
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'color: {{VALUE}}',
								],
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
								'selector' => '{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn',
							]
						);	

						/* Button background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_background',
								'label' => esc_html__( 'button Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn',
							]
						);
						/* witr_border_style */
						$this->add_control(
							'witr_border_btn_style',
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
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'border-style: {{VALUE}}',
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
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'border-color: {{VALUE}}',
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
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .wblog-content > a,{{WRAPPER}} .learn_btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
					
					
					
						/* Btn Icon color */
						$this->add_control(
							'witr_button_icon',
							[
								'label' => esc_html__( 'Btn Icon Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',								
								'selectors' => [
									'{{WRAPPER}} .learn_btn i' => 'color: {{VALUE}}',
								],								
							]
						);				
						/*  icon font size */
						$this->add_responsive_control(
							'witr_icon_bti_size',
							[
								'label' => esc_html__( 'Icon Size', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', 'em' ],
								'range' => [
									'px' => [
										'min' => 6,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .learn_btn i' => 'font-size: {{SIZE}}{{UNIT}};',
								],								
							]
						);
						/* Icon background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_icon_bti_background',
								'label' => esc_html__( 'Icon Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .learn_btn i',								
							]
						);				
						/*  icon width */
						$this->add_responsive_control(
							'witr_icon_bti_width',
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
									'{{WRAPPER}} .learn_btn i' => 'width: {{SIZE}}{{UNIT}};',
								],								
							]
						);
						/*  icon height */
						$this->add_responsive_control(
							'witr_icon_bti_height',
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
									'{{WRAPPER}} .learn_btn i' => 'height: {{SIZE}}{{UNIT}};',
								],								
							]
						);
						/*  icon line height */
						$this->add_responsive_control(
							'witr_icon_bti_line_height',
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
									'{{WRAPPER}} .learn_btn i' => 'line-height: {{SIZE}}{{UNIT}};',
								],								
							]
						);										
						/* button Icon margin */
						$this->add_responsive_control(
							'witr_btn_icon_margin',
							[
								'label' => esc_html__( 'Btn Icon Margin', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,								
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .learn_btn i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'label' => esc_html__( 'Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,							
								'selectors' => [
									'{{WRAPPER}} .wblog-content > a:hover,{{WRAPPER}} .learn_btn:hover' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .wblog-content > a:hover,{{WRAPPER}} .learn_btn:hover',
							]
						);					
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,								
								'selectors' => [
									'{{WRAPPER}} .wblog-content > a:hover,{{WRAPPER}} .learn_btn:hover' => 'border-color: {{VALUE}}',
								],
							]
						);					
						/* Btn Icon:hover color */
						$this->add_control(
							'witr_button_hover_icon',
							[
								'label' => esc_html__( 'Btn Icon Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',								
								'selectors' => [
									'{{WRAPPER}} .learn_btn i:hover' => 'color: {{VALUE}}',
								],
							]
						);
						/* Icon background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_icon_btih_background',
								'label' => esc_html__( 'Icon Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .learn_btn:hover i',								
							]
						);						
						
						$this->end_controls_tab();
						/*=== end button hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 
			 $this->end_controls_section();
			/*=== end  witr button style ====*/				
		
		/*===== start  Images Overlay Style =====*/
		$this->start_controls_section(
			'section_Images_overlay',
			[
				'label' => esc_html__( 'Images Overlay', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,

			]
		);

		
			/* Single Blog Images */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_icono_background',
					'label' => esc_html__( 'Single Images', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .blog-img::before,{{WRAPPER}} .softd-blog-thumb_adn:before,{{WRAPPER}} .witr_sb_thumb::before,{{WRAPPER}} .witr_sb6_thumb::before',
				]
			);
			/* border_radius */
			$this->add_control(
				'witr_sing_border_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-img,{{WRAPPER}} .blog-img::before,{{WRAPPER}} .softd-blog-thumb_adn:before,{{WRAPPER}} .witr_sb_thumb::before,{{WRAPPER}} .witr_sb_thumb img,{{WRAPPER}} .witr_sb6_thumb::before,{{WRAPPER}} .witr_sb6_thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
		
		$this->end_controls_section();
		/*===== end Images Overlay =====*/		
		

			/*=== start witr Arrow style ====*/

			$this->start_controls_section(
				'witr_style_option_arrow',
				[
					'label' => esc_html__( 'Witr Arrow Options', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_c_arrows' => 'true',
						'witr_style_blog' =>['3','7','8','9','10','11','12','13','14','16']
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
										'min' => -500,
										'max' => 1000,
									],
									'%' => [
										'min' => -500,
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
										'max' => 1500,
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
										'max' => 1500,
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
						'witr_style_blog' =>['3','7','8','9','10','11','12','13','14','16']
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

        $witr_post_per_page       = ! empty( $witrshowdata['witr_post_per_page'] ) ? $witrshowdata['witr_post_per_page'] : 2;
        $witr_adc_blog    = ! empty( $witrshowdata['witr_adc_blog'] ) ? $witrshowdata['witr_adc_blog'] : 'DESC';
        $witr_title_length    = ! empty( $witrshowdata['witr_title_length'] ) ? $witrshowdata['witr_title_length'] : 5;
        $witr_content_length  = ! empty( $witrshowdata['witr_content_length'] ) ? $witrshowdata['witr_content_length'] : 20;      
        $witr_gutter_column  =  $witrshowdata['witr_gutter_column']=='yes'  ? 'witr_all_pd0' : 'witr_all_mb_30'; 
		
		$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
		$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );	
	
		
                        $args = array(
                            'post_type'            => 'post',
                            'post_status'          => 'publish',
                            'ignore_sticky_posts'  => 1,
                            'posts_per_page'       => $witr_post_per_page,
                            'order'                => $witr_adc_blog,
							'paged'     => $paged,
							'page'      => $paged
                        );
                        
                        $posts = new \WP_Query($args);
		switch( $witrshowdata['witr_style_blog']){

		
		
			case '16':
			?>
			<!-- Blog Section -->
			<div class="witr_blog_area11 witr_blog_area16">
				<div class="blog_wrap blog16_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>

										<?php if($witrshowdata['witr_cata_show']=='yes'){?>
											<div class="witr_top_category">
												<!-- category -->
												<span> <?php the_category('');?></span>
											</div>
										<?php } ?>
									</div>	
									<?php } ?>
									<div class="all_blog_color">	
										<div class="witr_blog_con bs5">									
											<!-- title -->
											<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											<div class="em-blog-content-area_adn ">
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											</div>	
											<?php } ?>
											<div class="witr_blog_border"></div>
											<!--  post meta -->
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {
													
													 if( $element=="aa"){?>
														<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
													<?php }?>
													
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i>Admin.</a></span>
													<?php }?>
													
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																<?php comments_number( esc_html__('0 Comments','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>											
										</div>
											
										
										
									</div>
									
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


			<script type='text/javascript'>
				jQuery(function($){

					$('.blog16_<?php echo $unic_id;?>').slick({
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
			case '15':
			?>
			<!-- Blog Section -->
			<div class="witr_blog_area15">
				<div class="blog_wrap">
				<div class="row">
					<?php while ($posts->have_posts()) : $posts->the_post();?>
					
						<div class="witr_nth_child col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-sm-12 grid-item   <?php echo $witr_gutter_column; ?>">
							
								<div class="busi_singleBlog all_blog_color">
									<div class="blog_toggle">
										
											<!-- image -->
											<?php if(has_post_thumbnail()){?>
											<div class="witr_sb_thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('270_168_default'); ?> </a>
												<?php if($witrshowdata['witr_cata_show']=='yes'){?>
													<div class="witr_top_category">
														<!-- category -->
														<span> <?php the_category('');?></span>
													</div>
												<?php } ?>	
											</div>	
											<?php } ?>
										
										
											<div class="witr_blog_con bs5">
												<div class="witr_post_meta15">
													<!--  post meta -->
													<?php
													foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
														if( $element=="aa"){?>
															<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
														<?php }?>
														<?php if( $element=="a"){?>
															<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
														<?php }?>
														<?php if( $element=="d"){?>
															<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
														<?php }?>
														<?php if( $element=="c"){?>
															<span>
															<?php if ( comments_open() || get_comments_number() ) {?>
																<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																	<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
																</a>						
															<?php }else{?>
																<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<?php } ?>														
															</span>
														<?php }?>	
													<?php }	?>
												
												</div>											
											
												<!-- title -->
												<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
												<!-- content -->
												<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
													<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
												<?php } ?>
											</div>
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											<div class="em-blog-content-area_adn ">
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											</div>	
											<?php } ?>									
																					
									</div>
								</div>
							
						</div>
						
						<?php endwhile;
						 wp_reset_query(); wp_reset_postdata();
						?>
				</div>		
				</div>
			</div>
			<!-- Blog Section -->												




			
			<?php			
			break;
		
			case '14':
			?>
			<!-- Blog Section -->
			<div class="witr_blog_area13 witr_blog_area14">
				<div class="blog_wrap blog14_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>

										<?php if($witrshowdata['witr_cata_show']=='yes'){?>
											<div class="witr_top_category">
												<!-- category -->
												<span> <?php the_category('');?></span>
											</div>
										<?php } ?>	
									</div>	
									<?php } ?>
									<div class="all_blog_color">	
										<div class="witr_blog_con bs5">
											<!-- title -->
											<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>	
											<div class="witr_blog_meta_potion14">
												<!-- author -->
												<?php if( $witrshowdata['witr_pagination_meta'] == 'yes' ){?>
												<div class="witr_post_Author stb5">
														<!-- image -->
														<?php echo get_avatar( get_the_author_meta('ID'), 60); ?>												
													<a class="nameAuthor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php esc_html_e('Mris Jonsong /','softd')?> </a>
												</div>
												<?php } ?>										
												<!--  post meta -->
												<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>
											</div>	


											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>											
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?></a>
												</div>
											<?php } ?>										
										</div>
									</div>
									
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog14_<?php echo $unic_id;?>').slick({
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
			
			case '13':
			?>
			<!-- Blog Section -->
			<div class="witr_blog_area13">
				<div class="blog_wrap blog13_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>

										<?php if($witrshowdata['witr_cata_show']=='yes'){?>
											<div class="witr_top_category">
												<!-- category -->
												<span> <?php the_category('');?></span>
											</div>
										<?php } ?>	
									</div>	
									<?php } ?>
									<div class="all_blog_color">	
										<div class="witr_blog_con bs5">
											<div class="witr_blog_meta_potion">
												<!-- author -->
												<?php if( $witrshowdata['witr_pagination_meta'] == 'yes' ){?>
												<div class="witr_post_Author stb5">
														<!-- image -->
														<?php echo get_avatar( get_the_author_meta('ID'), 60); ?>												
													<a class="nameAuthor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php esc_html_e('Mris Jonsong /','softd')?> </a>
												</div>
												<?php } ?>										
												<!--  post meta -->
												<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>
											</div>	
											<!-- title -->
											<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>											
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?></a>
												</div>
											<?php } ?>										
										</div>
									</div>
									
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog13_<?php echo $unic_id;?>').slick({
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
			<!-- Blog Section -->
			<div class="witr_blog_area12">
				<div class="blog_wrap blog12_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>

										<?php if($witrshowdata['witr_cata_show']=='yes'){?>
											<div class="witr_top_category">
												<!-- category -->
												<span> <?php the_category('');?></span>
											</div>
										<?php } ?>	
									</div>	
									<?php } ?>
									<div class="all_blog_color">	
										<div class="witr_blog_con bs5">
											<!--  post meta -->
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>									
											<!-- title -->
											<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>

											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
												<div class="learn_more_adn">
													<a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?></a>
												</div>
											<?php } ?>
										
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog12_<?php echo $unic_id;?>').slick({
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
			<!-- Blog Section -->
			<div class="witr_blog_area11">
				<div class="blog_wrap blog11_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>

										<?php if($witrshowdata['witr_cata_show']=='yes'){?>
											<div class="witr_top_category">
												<!-- category -->
												<span> <?php the_category('');?></span>
											</div>
										<?php } ?>
									</div>	
									<?php } ?>
									<div class="all_blog_color">	
										<div class="witr_blog_con bs5">
											<!--  post meta -->
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> By Admin <?php the_author(); ?> .</a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>									
											<!-- title -->
											<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>
										</div>
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											<div class="em-blog-content-area_adn ">
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											</div>	
											<?php } ?>											
										
										
									</div>
									
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog11_<?php echo $unic_id;?>').slick({
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
			<!-- Blog Section -->
			<div class="witr_blog_area10">
				<div class="blog_wrap blog10_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post();?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog all_blog_color">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<!-- image -->
											<?php if(has_post_thumbnail()){?>
											<div class="witr_sb_thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
												<div class="witr_post_meta9">
													<!--  post meta -->
													<?php
													foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
														if( $element=="aa"){?>
															<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
														<?php }?>
														<?php if( $element=="a"){?>
															<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
														<?php }?>
														<?php if( $element=="d"){?>
															<span><a href="#"></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
														<?php }?>
														<?php if( $element=="c"){?>
															<span>
															<?php if ( comments_open() || get_comments_number() ) {?>
																<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																	<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
																</a>						
															<?php }else{?>
																<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<?php } ?>														
															</span>
														<?php }?>	
													<?php }	?>
												
												</div>	
											</div>	
											<?php } ?>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="witr_blog_con bs5">
												<!-- title -->
												<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
												<!-- content -->
												<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
													<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
												<?php } ?>
											</div>
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											<div class="em-blog-content-area_adn ">
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											</div>	
											<?php } ?>											
										</div>											
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog10_<?php echo $unic_id;?>').slick({
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
			<!-- Blog Section -->
			<div class="witr_blog_area9">
				<div class="blog_wrap blog9_<?php echo $unic_id;?>">
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="busi_singleBlog all_blog_color">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
										<div class="witr_post_meta9">
											<!--  post meta -->
											<?php
											foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
												if( $element=="aa"){?>
													<span><i class="icofont-tags"></i><?php the_category(', ');?></span>
												<?php }?>
												<?php if( $element=="a"){?>
													<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
												<?php }?>
												<?php if( $element=="d"){?>
													<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
												<?php }?>
												<?php if( $element=="c"){?>
													<span>
													<?php if ( comments_open() || get_comments_number() ) {?>
														<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
															<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
														</a>						
													<?php }else{?>
														<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
													<?php } ?>														
													</span>
												<?php }?>	
											<?php }	?>
										
										</div>	
									</div>	
									<?php } ?>	
									<div class="witr_blog_con bs5">
										<!-- title -->
										<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
										<!-- content -->
										<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
											<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
										<?php } ?>
									</div>
									<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
									<div class="em-blog-content-area_adn ">
										<div class="learn_more_adn">
										  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
										</div>
									</div>	
									<?php } ?>											
								</div>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>						
				</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog9_<?php echo $unic_id;?>').slick({
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
			
			
			case '8':
			?>
			<!-- Blog Section -->
			<div class="witr_blog_area8">
					<div class="blog_wrap blog8_<?php echo $unic_id;?>">
						<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
							<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="witr_singleBlog">
										<!-- image -->
										<?php if(has_post_thumbnail()){?>
										<div class="witr_sb6_thumb">
											<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default8'); ?> </a>
											<div class="all_blog_color">	
												<div class="all_text_position">	
													<div class="witr_blog_con6 witr_blog_con8">
														<!-- title -->
														<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
														<!-- title -->
														<h5><?php the_category(',');?></h5>
														<!-- content -->
														<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
															<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
														<?php } ?>	
														<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
														<div class="em-blog-content-area_adn ">
															<div class="learn_more_adn">
															  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
															</div>
														</div>	
														<?php } ?>														
													</div>

												</div>
											</div>	
										</div>
										<?php } ?>
									</div>
								</div>
								
								
							</div>
						<?php endwhile; ?>	
						<?php wp_reset_query(); ?>						
					</div>
			</div>
			<!-- Blog Section -->												


		<script type='text/javascript'>
			jQuery(function($){

				$('.blog8_<?php echo $unic_id;?>').slick({
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
			<div class=" blog_style_adn_2">				
				<div class="blog_wrap blogcar_<?php echo $unic_id;?>">
				
					<?php while ($posts->have_posts()) : $posts->the_post(); 											
					?>
						<!-- single blog -->
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn witr_ablog_7_a all_blog_color">

								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="witr_ablog_7">
										<?php if(has_post_thumbnail()){?>	
											<div class="witr_ablog_thumb softd-blog-thumb_adn ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
											</div>											
										<?php } ?>	
										<div class="witr_ablog_content">
											<div class="witr_ablog_inner">
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i><?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="far fa-calendar-plus"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>												
											
												<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>	
													<!-- content -->
													<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
														<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
													<?php } ?>											
													<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
														<div class="learn_more_adn">
														  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
														</div>
													<?php } ?>
																								
											</div>
										</div>
									
									</div>

								</div> <!--  END SINGLE BLOG -->	
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>

					
				</div>
			</div>					
					
				
		<script type='text/javascript'>
			jQuery(function($){

				$('.blogcar_<?php echo $unic_id;?>').slick({
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
			case '6':
			?>
			<!-- Blog Section -->
			<section class="witr_blog_area6">
				<div class="container">
					<div class="row">
						<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
							<div class=" col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-12 <?php echo $witr_gutter_column; ?>">
								<div class="witr_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb6_thumb">
											<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default2'); ?> </a>
										<div class="all_blog_color">	
											<div class="all_text_position">	
												<div class="witr_blog_con6">
													<!-- title -->
													<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
													<!-- category -->
													<h5><?php the_category(',');?></h5>
													<!-- content -->
													<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
														<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
													<?php } ?>						
												</div>
												<div class="witr_post_Author6">
													<!-- image -->
													<?php if( $witrshowdata['witr_pagination_meta'] == 'yes' ){
														echo get_avatar( get_the_author_meta('ID'), 60); 
													} ?>
													<a class="nameAuthor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php esc_html_e('Posted by','softd')?> <?php the_author(); ?></a>
													<div class="witr_post_text">	
														<!--  post meta -->
															<?php
															foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
														if( $element=="a"){?>
															<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?> </a></span>
														<?php }?>
														<?php if( $element=="d"){?>
															<span><a href="#"><i class="icofont-clock-time"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
														<?php }?>
														<?php if( $element=="c"){?>
															<span>
															<?php if ( comments_open() || get_comments_number() ) {?>
																<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																	<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
																</a>						
															<?php }else{?>
																<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
																<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<?php } ?>														
															
															
															</span>
														<?php }?>
																	
															<?php }	?>
													</div>
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
			</section>
			<!-- Blog Section -->												
					
			<?php			
			break;
			
			case '5':
			?>
			<!-- Blog Section -->
			<section class="witr_blog_area5">
				<div class="container">
					<div class="row">
						<?php while ($posts->have_posts()) : $posts->the_post(); ?>					
							<div class=" col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-12 <?php echo $witr_gutter_column; ?>">
								<div class="busi_singleBlog">
									<!-- image -->
									<?php if(has_post_thumbnail()){?>
									<div class="witr_sb_thumb">
										<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
										
										<?php if( $witrshowdata['witr_pagination_meta'] == 'yes' ){?>
										<div class="witr_post_Author stb5">
												<!-- image -->
												<?php
													echo get_avatar( get_the_author_meta('ID'), 60); 
												 ?>																
											<a class="nameAuthor" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php esc_html_e('Posted by','softd')?> <?php the_author(); ?></a>
										</div>
										<?php } ?>
										
									</div>	
									<?php } ?>
									<div class="all_blog_color">	
										<div class="witr_blog_con bs5">
											<!--  post meta -->
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i> <?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-alt-3"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-speech-comments"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="icofont-speech-comments"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>									
											<!-- title -->
											<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>											
										</div>

											
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											<div class="em-blog-content-area_adn ">
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											</div>	
											<?php } ?>											

									</div>
									
								</div>
							</div>
						<?php endwhile; ?>	
						<?php wp_reset_query(); ?>						
					</div>
				</div>
			</section>
			<!-- Blog Section -->												
					
			<?php			
			break;
			
			
			case '4':
			?>
			<div class=" blog_style_adn_2 bgimgload witr_blog_4">				
					<div class="row blog_wrap blog-messonary">				
					<?php while ($posts->have_posts()) : $posts->the_post(); ?>
						<!-- single blog -->
						<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-8 grid-item  <?php echo $witr_gutter_column; ?>">
							<div class="single_blog_adn all_blog_color">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="softd-single-blog_adn ">					
										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
										<div class="blog_adn_thumb_inner">
											<div class="softd-blog-thumb_adn ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
												<div class="blog_add_icon">
													<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>
												</div>
											</div>
											<!-- BLOG TITLE -->
											<div class="blog-page-title_adn2 ">
												<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>			
											</div>											
										</div>
										<?php } ?>
										<div class="em-blog-content-area_adn ">
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>										
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											<?php } ?>
										</div>		
									</div>
								</div> <!--  END SINGLE BLOG -->
	
									
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
			<div class=" blog_style_adn_2 witr_blog_3">				
				<div class="blog_wrap blogcar_<?php echo $unic_id;?>">
				
					<?php while ($posts->have_posts()) : $posts->the_post(); 											

					?>
						<!-- single blog -->
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn all_blog_color">

								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="softd-single-blog_adn ">					
										
										<!-- BLOG THUMB -->
										<?php if(has_post_thumbnail()){?>
										<div class="blog_adn_thumb_inner">
											<div class="softd-blog-thumb_adn ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
												<div class="blog_add_icon">
													<a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>
												</div>
											</div>
											<!-- BLOG TITLE -->
											<div class="blog-page-title_adn2 ">
												<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>			
											</div>
										</div>
										<?php } ?>
										
										<div class="em-blog-content-area_adn ">
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>										
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
												<div class="learn_more_adn">
												  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
												</div>
											<?php } ?>
										</div>			
									</div>
								</div> <!--  END SINGLE BLOG -->	
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>

					
				</div>
			</div>					
					
				
		<script type='text/javascript'>
			jQuery(function($){

				$('.blogcar_<?php echo $unic_id;?>').slick({
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
			
			case '2':
			?>
                <div class=" bgimgload">	
					<div class="row blog-messonary">
                    <?php
                        while($posts->have_posts()):$posts->the_post();
                    ?>
						<div class="col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  grid-item  <?php echo $witr_gutter_column; ?>">
							<div class="blog-part ">
								<div class="blog_part_inner ">
									<div class="witr_blog_imags">
										<!-- image -->
										<?php if(has_post_thumbnail()){?>
											<div class="blog-img">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('blog_490_250_default'); ?> </a>
											</div>
										<?php } ?>
									</div>
									<div class="wblog-content blog-content-5 all_blog_color">
											<!--  post meta -->
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i><?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="far fa-calendar-plus"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>	
												<!-- title -->
												<h5>
													<a href="<?php the_permalink(); ?>">
														<?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?>
													</a>
												</h5>
												<!-- content -->
												<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
													<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
												<?php } ?>
												<!-- button -->	
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
											  <a class="btn2 witr_bt2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?></a>
										<?php } ?>
									</div>
								</div>
							</div><!-- blog part -->
						</div>					
 				
					
                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>
					</div>
                </div>
			
			<?php				
			break;			
			default:
        ?>
               <div class=" bgimgload">	
					<div class="row blog-messonary">
						<?php
							while($posts->have_posts()):$posts->the_post();
						?>

							<div class="witr_nth_child col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-8 grid-item   <?php echo $witr_gutter_column; ?>">
								<div class="blog-part all_blog_color">
									<div class="blog_part_inner">
										<div class="witr_blog_imags">
											<!-- image -->
											<?php if(has_post_thumbnail()){?>
												<div class="blog-img">
													<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('softd-blog-default'); ?> </a>
												</div>
											<?php } ?>
										</div>
										<div class="wblog-content blog-content-2 all_blog_color">
										<!--  post meta -->
										<?php
											foreach ( $witrshowdata['witr_post_meta'] as $element ) {	
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i><?php the_category(', ');?></span>
													<?php }?>											
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="far fa-calendar-plus"></i></a> <?php the_time(esc_html__('d M Y','softd')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i>
																<?php comments_number( esc_html__('0','softd'), esc_html__('1 ','softd'), esc_html__('% ','softd') );?>
															</a>						
														<?php }else{?>
															<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
															<span><i class="fas fa-comment"></i> <?php echo esc_html__('Comments Off','softd'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
													
											<?php }	?>								
											<!-- title -->
											<h5>
												<a href="<?php the_permalink(); ?>">
													<?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?>
												</a>
											</h5>
											<!-- content -->
											<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
												<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
											<?php } ?>											
											<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
												  <a class="btn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?></a>
											<?php } ?>
										  
										</div>
									</div>
								</div><!-- blog part -->
							</div>
						<?php endwhile;
						 wp_reset_query(); wp_reset_postdata();
						?>
					</div>
                </div>
        <?php

			break;
			
		} // end switch				
			if( $witrshowdata['witr_pagination'] == 'yes' ){?>
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
								'total' => $posts->max_num_pages
							) );										
						
						?>
					</div>
				</div>
			</div>															
		
			
<?php 			
			
			
			}	
			
       
	} // end function




}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Elementor_Widget_Blog() );

