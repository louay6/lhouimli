<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Animate_slider extends Widget_Base {

    public function get_name() {
        return 'witr_animate_slider';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Animate Slider', 'softd' );
    }

    public function get_icon() {
        return 'fa fa-picture-o';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
		

			
			
			/* === witr_banner title start === */
			$this->start_controls_section(
				'witr_option_banner_title',
				[
					'label' => esc_html__( 'Witr Title Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* banner slider style check  witr_style_banner */ 
				$this->add_control(
					'witr_style_banner',
					[
						'label' => esc_html__( 'Animate Slider Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'1' => esc_html__( 'Text Left Righr Image', 'softd' ),
							'2' => esc_html__( 'Text Center slider style', 'softd' ),

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
					]
				);			
					/*  witr_animate_title_top */	
					$this->add_control(
						'witr_animate_title_top',
						[
							'label' => esc_html__( 'Top Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title , remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'placeholder' => esc_attr__( 'Type your top title here', 'softd' ),						
						]
					);					
					/*  witr_animate_title */	
					$this->add_control(
						'witr_animate_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title , remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' => __( 'Add Your animate title Here', 'softd' ),
							'placeholder' => esc_attr__( 'Type your title here', 'softd' ),						
						]
					);
					/*  witr_animate_title2 */	
					$this->add_control(
						'witr_animate_title2',
						[
							'label' => esc_html__( 'Animate Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use animate text, remove the text from field, and it will work your preview page. use the this way. ex- <b class="is-visible"> Web Developer</b> <b>I\'m Web Developer</b> <b>I\'m Web Designer</b> <b>Lives in US</b>', 'softd' ),
							'default' => __( '<b class="is-visible"> Web Developer</b> <b>I\'m Web Developer</b> <b>I\'m Web Designer</b> <b>Lives in US</b> ' ),
							'placeholder' => esc_attr__( 'Type your animate text here', 'softd' ),						
						]
					);
					
				/*  witr_pragraph */	
					$this->add_control(
						'witr_pragraph',
						[
							'label' => esc_html__( ' Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.', 'softd' ),
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);				
				

			$this->end_controls_section();
			/* === end w_banner title === */
			
			/* === w_banner button start === */
			$this->start_controls_section(
				'witr_banner_button_option',
				[
					'label' => esc_html__( 'Witr Button Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
				/* witr_show_button witr_banner_button	*/
				$this->add_control(
					'witr_show_button',
					[
						'label' => esc_html__( 'Default Show button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);				
					$this->add_control(
						'witr_banner_button',
						[
							'label' => esc_html__( 'Button text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,							
							'default' => esc_html__( 'Contact Us', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
							'condition' => [
								'witr_show_button' => 'yes',
							],							
						]
					);
				/* main banner witr_button_link */	
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
				/* witr_show_button witr_vshow_button witr_video_button	*/
				$this->add_control(
					'witr_vshow_button',
					[
						'label' => esc_html__( 'Video Show button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',														
					]
				);				
					$this->add_control(
						'witr_video_button',
						[
							'label' => esc_html__( 'Video Button Text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),
							'default' => esc_html__( 'Watch Video', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
							'condition' => [
								'witr_vshow_button' => 'yes',
							],							
						]
					);
				/* witr_show_button witr_yshow_button witr_yvideo_link	*/
				$this->add_control(
					'witr_yshow_button',
					[
						'label' => esc_html__( 'Show Youtube Link', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
						'condition' => [
							'witr_vshow_button' => 'yes',
						]						
					]
				);						
					$this->add_control(
						'witr_yvideo_link',
						[
							'label' => esc_html__( 'Youtube Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank. link ex- https://youtu.be/BS4TUd7FJSg','softd'),
							'placeholder' => esc_attr__( 'https://youtu.be/BS4TUd7FJSg', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://youtu.be/BS4TUd7FJSg',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_yshow_button' => 'yes',

							],							
						]
					);						
					/* main banner witr_vmshow_button witr_vmvideo_link */	
					$this->add_control(
						'witr_vmshow_button',
						[
							'label' => esc_html__( 'Show Vimo Link', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'condition' => [
								'witr_vshow_button' => 'yes',
							]						
						]
					);						
					$this->add_control(
						'witr_vmvideo_link',
						[
							'label' => esc_html__( 'Vimo Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link. It hidden when field blank. link ex- https://vimeo.com/235215203','softd'),
							'placeholder' => esc_attr__( 'https://vimeo.com/235215203', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://vimeo.com/235215203',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_vmshow_button' => 'yes',
							],							
						]
					);						
					
		
			$this->end_controls_section();
			/* === end witr_banner button ===  */


			/* === witr_banner single Image start === */
			$this->start_controls_section(
				'witr_banner_image_option',
				[
					'label' => esc_html__( 'Witr Image Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
					'condition' => [
						'witr_style_banner' =>['1'],
					],					
				]
			);
			/* show image witr_show_image witr_banner_image	*/
				$this->add_control(
					'witr_show_image',
					[
						'label' => esc_html__( 'Show Image', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);				
				$this->add_control(
					'witr_banner_image',
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
					/* witr_show_animate */
					$this->add_control(
						'witr_show_animate',
						[
							'label' => esc_html__( 'Show Animation', 'softd' ),
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
					/* witr_show_animate */
					$this->add_control(
						'witr_show_animate2',
						[
							'label' => esc_html__( 'Show Animation 2', 'softd' ),
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
			
			$this->end_controls_section();
			/* === end witr_banner single Image === */
			
			
			
			/* === Witr Slider Height start === */
			$this->start_controls_section(
				'witr_sliders_height',
				[
					'label' => esc_html__( 'Witr Slider Height Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);			
			
				/*  Slider Heigh */
				$this->add_responsive_control(
					'witr_slider_height',
					[
						'label' => esc_html__( 'Slider Heigh', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px','%'],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 2000,
							],
							'%' => [
								'min' => 6,
								'max' => 500,
							],
							
							
							
						],
						'selectors' => [
							'{{WRAPPER}} .witr_banner_height' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);			
			
			$this->end_controls_section();
			/* ===  Witr Slider Height End === */			
			
			
			
			
			

	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

		
		

		/*=== start w_top style 2 ====*/

		$this->start_controls_section(
			'witr_style_optiont',
			[
				'label' => esc_html__( 'Top Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_top_color2',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .banner-content h3' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_tohover_color2',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .banner-content h3:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttopy_color2',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .banner-content h3',
				]
			);
			/*  m/b Tittle width */
			$this->add_responsive_control(
				'witr_mbo_width',
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
						'{{WRAPPER}} .banner-content h3' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_sectionomargin2',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .banner-content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectioonpadding2',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .banner-content h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  top style  ====*/
		
		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option',
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
						'{{WRAPPER}} .witr_animate_content h2' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_animate_content h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_animate_content h2',
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
						'{{WRAPPER}} .witr_animate_content h2' => 'width: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_animate_content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_animate_content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style ====*/
		

		/*=== start w_title style 2 ====*/

		$this->start_controls_section(
			'witr_style_optiona',
			[
				'label' => esc_html__( 'Animate Text Color Option', 'softd' ),
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
						'{{WRAPPER}} .witr_animate_content h2 span' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_animate_content h2 span:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_animate_content h2 span',
				]
			);
			/* headding */
			$this->add_control(
				'witr_headding',
				[
					'label' => esc_html__( 'Text Line Color', 'softd' ),
					'type' => Controls_Manager::HEADING,
				]
			);			
			/* Button Forground */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_after_background',
					'label' => esc_html__( 'Bar Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .cd-headline.clip .cd-words-wrapper:after',
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
						'{{WRAPPER}} .witr_animate_content h2 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_animate_content h2 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  Middle/Bottom style  ====*/

		
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
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .banner-content h3 span, {{WRAPPER}} .banner-content h2 span' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .banner-content h3 span:hover, {{WRAPPER}} .banner-content h2 span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_htpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .banner-content h3 span, {{WRAPPER}} .banner-content h2 span',
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
						'{{WRAPPER}} .banner-content h3 span, {{WRAPPER}} .banner-content h2 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .banner-content h3 span, {{WRAPPER}} .banner-content h2 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_heighlight style ====*/		
		
		
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
							'{{WRAPPER}} .banner-content p' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .banner-content p',
					]
				);		
			/*  content width */
			$this->add_responsive_control(
				'witr_content_width',
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
						'{{WRAPPER}} .banner-content p' => 'width: {{SIZE}}{{UNIT}};',
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
						'allowed_dimensions' => 'vertical',
						'placeholder' => [
						'top' => '',
						'right' => 'auto',
						'bottom' => '',
						'left' => 'auto',
						],
						'selectors' => [
						'{{WRAPPER}} .banner-content p' => 'margin-top: {{TOP}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}};',
							
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
							'{{WRAPPER}} .banner-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'label' => esc_html__( 'Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'global' => [
									'default' => Global_Colors::COLOR_ACCENT,
								],								
								'separator'=>'before',
								'selectors' => [
									'{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button',
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
								'selector' => '{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button',
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
								'{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button' => 'border-color: {{VALUE}}',
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
									'{{WRAPPER}} .butn,{{WRAPPER}} .banner-content button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .banner-content a,{{WRAPPER}} .banner-content button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .banner-content a,{{WRAPPER}} .banner-content button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'separator'=>'before',
								'selectors' => [
									'{{WRAPPER}} .butn:hover,{{WRAPPER}} .banner-content button:hover' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .butn:hover,{{WRAPPER}} .banner-content button:hover',
							]
						);						
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,								
								'selectors' => [
									'{{WRAPPER}} .butn:hover,{{WRAPPER}} .banner-content button:hover' => 'border-color: {{VALUE}}',
								],
							]
						);													

					/*  witr Forground Hover headding */
					$this->add_control(
						'witr_hiddenaf_view',
						[
							'label' => esc_html__( 'Forground Hover Color ', 'softd' ),
							'type' => Controls_Manager::HEADING,
						]
					);						
						/* Forground Hover background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_ab_hover_background',
								'label' => esc_html__( 'Forground Hover', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .butn:hover::before',
							]
						);
											
						
						$this->end_controls_tab();						
				$this->end_controls_tabs();					 
			 $this->end_controls_section();
			/*=== end  witr button style ====*/			
		

			/*=== start witr_icon style ====*/
			$this->start_controls_section(
				'section_style_icon',
				[
					'label' => esc_html__( 'Icon Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,					
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
							'{{WRAPPER}} .banner-content a i' => 'color: {{VALUE}}',
						],
						
					]
				);
								
				/*  icon font size */
				$this->add_responsive_control(
					'witr_icon_size',
					[
						'label' => esc_html__( 'Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'rem', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .banner-content a i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* text Color */
				$this->add_control(
					'witr_texti_color',
					[
						'label' => esc_html__( 'Text Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .banner-content a span' => 'color: {{VALUE}}',
						],
						
					]
				);				
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_icotex_typography',
						'label' => esc_html__( 'Typography', 'softd' ),
						'selector' => '{{WRAPPER}} .banner-content a span',
					]
				);				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .banner-content a i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .banner-content a i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .banner-content a i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* witr_border_style */
				$this->add_control(
					'witr_border_style',
					[
						'label' => esc_html__( 'Border Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'none' => esc_html__( 'None', 'softd' ),
							'solid' => esc_html__( 'Solid', 'softd' ),
							'double' => esc_html__( 'Double', 'softd' ),
							'dotted' => esc_html__( 'Dotted', 'softd' ),
							'dashed' => esc_html__( 'Dashed', 'softd' ),
						],
						'default' => 'none',
						'selectors' => [
							'{{WRAPPER}} .banner-content a i' => 'border-style: {{VALUE}}',
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
							'{{WRAPPER}} .banner-content a i' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .banner-content a i' => 'border-color: {{VALUE}}',
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
							'{{WRAPPER}} .banner-content a i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				/*  witr_heading */
				$this->add_control(
					'witr_hidden_icon',
					[
						'label' => esc_html__( 'Icon Background Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'default' => 'heading',							
					]
				);				
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_icons_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .banner-content a i',
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .banner-content a i',
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
							'{{WRAPPER}} .banner-content a i' => 'mix-blend-mode: {{VALUE}}',
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
							'{{WRAPPER}} .banner-content a i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .banner-content a i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'label' => esc_html__( ' Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .banner-content a i:hover' => 'color: {{VALUE}}',
							],
						]
					);
				/*  witr_heading */
				$this->add_control(
					'witr_hidden_iconh',
					[
						'label' => esc_html__( 'Icon Hover Background Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'default' => 'heading',							
					]
				);					
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hovet_icon',
							'label' => esc_html__( 'Icon Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .banner-content a i:hover',
						]
					);
					/* border_color */
					$this->add_control(
						'witr_borderhh_color',
						[
							'label' => esc_html__( 'Border Color', 'softd' ),
							'type' => Controls_Manager::COLOR,						
							'selectors' => [
								'{{WRAPPER}} .banner-content a i:hover' => 'border-color: {{VALUE}}',
							],
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
			'witr_style_image_option',
			[
				'label' => esc_html__( ' Images Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_banner' =>['1'],
				],				
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
							'{{WRAPPER}} .witr_deshboard img' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_deshboard img' => 'max-width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
					/*  Rotate */
					$this->add_responsive_control(
						'witr_rotate_img',
						[
							'label' => esc_html__( 'Image Rotate', 'softd' ),
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
								'{{WRAPPER}} .single_img_ani img,{{WRAPPER}} .witr_deshboard img' => 'transform: rotate({{SIZE}}{{UNIT}});',
							],							
						]
					);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_img_bb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .single_img_ani img,{{WRAPPER}} .witr_deshboard img',
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
									'{{WRAPPER}} .witr_deshboard' => 'top: {{SIZE}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_deshboard' => 'left: {{SIZE}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_deshboard' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
						/* witr_bottom */
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
									'{{WRAPPER}} .witr_deshboard' => 'bottom: {{SIZE}}{{UNIT}};',
								],
							]
						);
			/* image margin */
			$this->add_responsive_control(
				'witr_image_margin',
				[
					'label' => esc_html__( ' Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_deshboard' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* image padding */
			$this->add_responsive_control(
				'witr_image_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_deshboard' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/		
		
		
		
		


    } /* function end*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		switch ( $witrshowdata['witr_style_banner'] ) {

		case '2':
		?>
		<div class=" animate_banner_area banner_area witr_banner_height">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="banner-content animate_2 text-<?php echo $witrshowdata['witr_text_ltc']; ?>">
							<!-- title 1 -->
								<div class="witr_animate_content <?php if(isset($witrshowdata['witr_animate_title']) && ! empty($witrshowdata['witr_animate_title']))?>">
										<!-- title 3 -->
										<?php if(isset($witrshowdata['witr_animate_title_top']) && ! empty($witrshowdata['witr_animate_title_top'])){?>
											<h3><?php echo $witrshowdata['witr_animate_title_top']; ?> </h3>		
										<?php } ?>
										<h2 class="cd-headline clip is-full-width">
											<?php if(isset($witrshowdata['witr_animate_title']) && ! empty($witrshowdata['witr_animate_title'])){?>
												<?php echo $witrshowdata['witr_animate_title']; ?>
											<?php } ?>	
											<?php if(isset($witrshowdata['witr_animate_title2']) && ! empty($witrshowdata['witr_animate_title2'])){?>
												 <br/><span class="cd-words-wrapper witr_ani_text">
													<?php echo $witrshowdata['witr_animate_title2']; ?>
												</span>		 	
											<?php } ?>	
										</h2>								

								</div>					
						
								<!-- pragraph -->
								<?php if(isset($witrshowdata['witr_pragraph']) && ! empty($witrshowdata['witr_pragraph'])){?>				
								<p><?php echo $witrshowdata['witr_pragraph']; ?></p>
								<?php }?>

								<!-- button -->
								<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
									<a  class="butn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_banner_button'];?></a>			
								<?php }?>
								<!-- video button -->
								<?php if($witrshowdata['witr_yshow_button']=='yes' or $witrshowdata['witr_vmshow_button']='yes'  ){?>
								
								<?php if(isset($witrshowdata['witr_yvideo_link']['url']) && ! empty($witrshowdata['witr_yvideo_link']['url'])){?>
									<a class="witr_btns2 butn-2 video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_yvideo_link'] ['url']; ?>"><i class="fa fa-play"></i><span>
									<?php echo $witrshowdata['witr_video_button']; ?></span>
									</a>
								<?php } ?>	
								<?php if(isset($witrshowdata['witr_vmvideo_link']['url']) && ! empty($witrshowdata['witr_vmvideo_link']['url'])){?>
									<a class="witr_btns2 butn-2 video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_vmvideo_link'] ['url']; ?>"><i class="fa fa-play"></i><span><?php echo $witrshowdata['witr_video_button']; ?></span></a>
								<?php } ?>	

								<?php } ?>

							</div> 
						</div>
					</div>
				</div> 
		</div>		

		<?php


		
		break;		
		default:
		?>
	
		<div class="animate_banner_area banner_area witr_banner_height">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="banner-content text-<?php echo $witrshowdata['witr_text_ltc']; ?>">
							<!-- title 1 -->
								<div class="witr_animate_content <?php if(isset($witrshowdata['witr_animate_title']) && ! empty($witrshowdata['witr_animate_title']))?>">
										<!-- title 3 -->
										<?php if(isset($witrshowdata['witr_animate_title_top']) && ! empty($witrshowdata['witr_animate_title_top'])){?>
											<h3><?php echo $witrshowdata['witr_animate_title_top']; ?> </h3>		
										<?php } ?>
										<h2 class="cd-headline clip is-full-width">
											<?php if(isset($witrshowdata['witr_animate_title']) && ! empty($witrshowdata['witr_animate_title'])){?>
												<?php echo $witrshowdata['witr_animate_title']; ?>
											<?php } ?>	
											<?php if(isset($witrshowdata['witr_animate_title2']) && ! empty($witrshowdata['witr_animate_title2'])){?>
												 <br/><span class="cd-words-wrapper witr_ani_text">
													<?php echo $witrshowdata['witr_animate_title2']; ?>
												</span>		 	
											<?php } ?>	
										</h2>								

								</div>					
						
								<!-- pragraph -->
								<?php if(isset($witrshowdata['witr_pragraph']) && ! empty($witrshowdata['witr_pragraph'])){?>				
								<p><?php echo $witrshowdata['witr_pragraph']; ?></p>
								<?php }?>

								<!-- button -->
								<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
									<a  class="butn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_banner_button'];?></a>			
								<?php }?>
								<!-- video button -->
								<?php if($witrshowdata['witr_yshow_button']=='yes' or $witrshowdata['witr_vmshow_button']='yes'  ){?>
								
								<?php if(isset($witrshowdata['witr_yvideo_link']['url']) && ! empty($witrshowdata['witr_yvideo_link']['url'])){?>
									<a class="witr_btns2 butn-2 video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_yvideo_link'] ['url']; ?>"><i class="fa fa-play"></i><span>
									<?php echo $witrshowdata['witr_video_button']; ?></span>
									</a>
								<?php } ?>	
								<?php if(isset($witrshowdata['witr_vmvideo_link']['url']) && ! empty($witrshowdata['witr_vmvideo_link']['url'])){?>
									<a class="witr_btns2 butn-2 video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_vmvideo_link'] ['url']; ?>"><i class="fa fa-play"></i><span><?php echo $witrshowdata['witr_video_button']; ?></span></a>
								<?php } ?>	

								<?php } ?>

							</div> 
						</div>
						<div class="col-lg-6">
							<!-- image -->
							<?php if(isset($witrshowdata['witr_banner_image']['url']) && ! empty($witrshowdata['witr_banner_image']['url'])){?>
								<div class="witr_deshboard <?php if($witrshowdata['witr_show_animate2']=='yes'){ ?>  single_img_ani <?php } ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  witr_not_ani <?php } ?>">
									<img src="<?php echo $witrshowdata['witr_banner_image']['url'];?>" alt="">
								</div>
							<?php } ?>					

						</div>
					</div>
			</div> 
		</div>
				

		
		
		<?php		
		break;
		
		
	} /* switch end*/ 

	
    } /*end function */




}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Animate_slider() );