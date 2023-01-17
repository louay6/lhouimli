<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Banner_slider extends Widget_Base {

    public function get_name() {
        return 'witr_banner_slider';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Banner Slider', 'softd' );
    }

    public function get_icon() {
        return 'eicon-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
					
			/* === witr_banner title start === */
			$this->start_controls_section(
				'witr_option_banner_title',
				[
					'label' => esc_html__( 'Witr Banner Title Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* banner slider style check  witr_style_banner */
				$this->add_control(
					'witr_style_banner',
					[
						'label' => esc_html__( 'Banner Slider Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'default' => '1',
						'options' => [
							'1' => esc_html__( 'Text Center', 'softd' ),
							'2' => esc_html__( 'Text Right', 'softd' ),
							'3' => esc_html__( 'Text Left', 'softd' ),
						],
						
					]
				);					
			
				/* main banner witr_banner_title1 */	
					$this->add_control(
						'witr_banner_title1',
						[
							'label' => esc_html__( 'Title Top', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title top, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' => esc_html__( 'Add Your banner title Here', 'softd' ),
							'placeholder' => esc_attr__( 'Type your banner title here', 'softd' ),						
						]
					);
				/* main banner witr_banner_title2 */	
					$this->add_control(
						'witr_banner_title2',
						[
							'label' => esc_html__( 'Title Middle', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title middle, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' => esc_html__( 'Add Your banner title Here', 'softd' ),
							'placeholder' => esc_attr__( 'Type your banner title here', 'softd' ),						
						]
					);
					/* witr_banner_title3 */	
					$this->add_control(
						'witr_banner_title3',
						[
							'label' => esc_html__( 'Title Bottom', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title bottom, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
							'default' =>"",
							'placeholder' => esc_attr__( 'Type your banner title here', 'softd' ),						
						]
					);					
					/* witr_pragraph */	
					$this->add_control(
						'witr_pragraph',
						[
							'label' => esc_html__( 'Slider Content Text', 'softd' ),
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
					'label' => esc_html__( 'Witr Banner Button Options', 'softd' ),
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
			
			/* === witr_banner social start ==== */
			$this->start_controls_section(
				'witr_field_banner_social',
				[
					'label' => esc_html__( 'Witr Banner Social Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,					
				]
			);	
				/* witr_show_Icon */
				$this->add_control(
					'witr_show_Icon',
					[
						'label' => esc_html__( 'Show Icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);			
				/* main banner witr_banner_fb */	
					$this->add_control(
						'witr_banner_fb',
						[
							'label' => esc_html__( 'facebook Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link facebook. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
				/* main banner witr_banner_tw */	
					$this->add_control(
						'witr_banner_tw',
						[
							'label' => esc_html__( 'twitter Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link twitter. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
				/* main banner witr_banner_gp */	
					$this->add_control(
						'witr_banner_gp',
						[
							'label' => esc_html__( 'google-plus Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link google plus. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
				/* main banner witr_banner_lk */	
					$this->add_control(
						'witr_banner_lk',
						[
							'label' => esc_html__( 'linkedin-in-in Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link linkedin-in. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
				/* main banner witr_banner_pi */	
					$this->add_control(
						'witr_banner_pi',
						[
							'label' => esc_html__( 'pinterest-p Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link pinterest. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
				/* main banner witr_banner_in */	
					$this->add_control(
						'witr_banner_in',
						[
							'label' => esc_html__( 'instagram Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link instagram. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
				/* main banner witr_banner_us*/	
					$this->add_control(
						'witr_banner_us',
						[
							'label' => esc_html__( 'users Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link users. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);								
					/* main banner witr_banner_tu*/	
					$this->add_control(
						'witr_banner_tu',
						[
							'label' => esc_html__( 'tumblr Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link tumblr. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
					/* main banner witr_banner_vi*/	
					$this->add_control(
						'witr_banner_vi',
						[
							'label' => esc_html__( 'vimeo Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link vimeo. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
					/* main banner witr_banner_yt*/	
					$this->add_control(
						'witr_banner_yt',
						[
							'label' => esc_html__( 'Youtube Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'description' =>esc_html__('Insert link Youtube. It hidden when field blank.','softd'),
							'show_external' => true,
							'condition' => [
								'witr_show_Icon' => 'yes',
							],							
							'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
							],					
						]
					);				
					
			
			$this->end_controls_section();
			/* === end witr_banner socila === */		

			/* === Witr Slider Height start === */
			$this->start_controls_section(
				'witr_sliders_height',
				[
					'label' => esc_html__( 'Witr Slider Height/Opacity Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);			
			
				/*  Slider Heigh */
				$this->add_responsive_control(
					'witr_slider_height',
					[
						'label' => esc_html__( 'Slider Heigh', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 2000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_banner_height' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);

				/* Slider Opacity HEADING */
				$this->add_control(
					'witr_opaci_color',
					[
						'label' => esc_html__( 'Slider Opacity BG Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);				
				/* Slider Opacity background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_sopacity_background',
						'label' => esc_html__( 'Slider Opacity BG', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_banner_area',
					]
				);

			
			$this->end_controls_section();
			/* ===  Witr Slider Height End === */			
			
			
			
			
			

	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			
		

			
		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( 'Top Title Color Option', 'softd' ),
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
						'{{WRAPPER}} .witr_banner_content h1' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_banner_content h1:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_banner_content h1',
				]
			);						
			/*  Top Tittle width */
			$this->add_responsive_control(
				'witr_top_width',
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
						'{{WRAPPER}} .witr_banner_content h1' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin',
				[
					'label' => esc_html__( 'Tittle Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_banner_content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding',
				[
					'label' => esc_html__( 'Tittle Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_banner_content h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style ====*/
		

		/*=== start w_title style 2 ====*/

		$this->start_controls_section(
			'witr_style_option2',
			[
				'label' => esc_html__( 'Middle/Bottom Title Color Option', 'softd' ),
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
						'{{WRAPPER}} .witr_banner_content h2' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_banner_content h2:hover' => 'color: {{VALUE}}',
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
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_banner_content h2',
				]
			);
			/*  m/b Tittle width */
			$this->add_responsive_control(
				'witr_mb_width',
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
						'{{WRAPPER}} .witr_banner_content h2' => 'width: {{SIZE}}{{UNIT}};',
					],
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
						'{{WRAPPER}} .witr_banner_content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_banner_content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_banner_content h1 span, {{WRAPPER}} .witr_banner_content h2 span' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_banner_content h1 span:hover, {{WRAPPER}} .witr_banner_content h2 span:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_htpy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .witr_banner_content h1 span, {{WRAPPER}} .witr_banner_content h2 span',
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
						'{{WRAPPER}} .witr_banner_content h1 span, {{WRAPPER}} .witr_banner_content h2 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_banner_content h1 span, {{WRAPPER}} .witr_banner_content h2 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content p' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_banner_content p',
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
							'{{WRAPPER}} .witr_banner_content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
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
						'{{WRAPPER}} .witr_banner_content p' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns',
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
								],
								'default' => ' solid ',
								'selectors' => [
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button' => 'border-style: {{VALUE}}',
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
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns' => 'border-color: {{VALUE}}',
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
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/*  witr_heading */
						$this->add_control(
							'witr_hidden_bbg',
							[
								'label' => esc_html__( ' Background Color', 'softd' ),
								'type' => Controls_Manager::HEADING,
								'default' => 'heading',							
							]
						);
						/* Button background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_background',
								'label' => esc_html__( 'button Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns',
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
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_butn,{{WRAPPER}} .witr_banner_content form button,{{WRAPPER}} .witr_video_butns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
									'{{WRAPPER}} .witr_butn:hover,{{WRAPPER}} .witr_banner_content form button:hover,{{WRAPPER}} .witr_video_butns:hover' => 'color: {{VALUE}}',
								],
							]
						);
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,								
								'selectors' => [
									'{{WRAPPER}} .witr_butn:hover,{{WRAPPER}} .witr_banner_content form button:hover,{{WRAPPER}} .witr_video_butns:hover' => 'border-color: {{VALUE}}',
								],
							]
						);						
						/*  witr_heading */
						$this->add_control(
							'witr_hidden_bhbg',
							[
								'label' => esc_html__( ' Background Hover Color', 'softd' ),
								'type' => Controls_Manager::HEADING,
								'default' => 'heading',							
							]
						);							
						/* Button Hover background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_hover_background',
								'label' => esc_html__( 'button Hover Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .witr_butn:hover,{{WRAPPER}} .witr_banner_content form button:hover,{{WRAPPER}} .witr_video_butns:hover',
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
								'selector' => '{{WRAPPER}} .witr_butn:hover::before,{{WRAPPER}} .witr_banner_content form button:hover::before',
							]
						);
					
						
						
						$this->end_controls_tab();
						/*=== end button hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 
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
							'{{WRAPPER}} .witr_banner_content a i' => 'color: {{VALUE}}',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'font-size: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'border-style: {{VALUE}}',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'border-color: {{VALUE}}',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'selector' => '{{WRAPPER}} .witr_banner_content a i',
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_banner_content a i',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'mix-blend-mode: {{VALUE}}',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_banner_content a i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_banner_content a i:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_banner_content a i:hover',
						]
					);
					/* border_color */
					$this->add_control(
						'witr_borderhh_color',
						[
							'label' => esc_html__( 'Border Color', 'softd' ),
							'type' => Controls_Manager::COLOR,						
							'selectors' => [
								'{{WRAPPER}} .witr_banner_content a i:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					
										
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();

		/*=== end witr_icon style ====*/



    } /* function end*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		switch ( $witrshowdata['witr_style_banner'] ) {

		case '3':
		?>
		<div class=" container">
			<div class="row">
				<div class="col-lg-12">		
					<div class="witr_banner_area witr_banner_height">
						<div class="witr_banner_content text-left">
							<!-- title 1 -->
							<?php if(isset($witrshowdata['witr_banner_title1']) && ! empty($witrshowdata['witr_banner_title1'])){?>
								<h1><?php echo $witrshowdata['witr_banner_title1']; ?> </h1>		
							<?php } ?>
							<!-- title 2 -->
							<?php if(isset($witrshowdata['witr_banner_title2']) && ! empty($witrshowdata['witr_banner_title2'])){?>
							<h2><?php echo $witrshowdata['witr_banner_title2']; ?> </h2>		
							<?php } ?>
							<!-- title 3 -->
							<?php if(isset($witrshowdata['witr_banner_title3']) && ! empty($witrshowdata['witr_banner_title3'])){?>
							<h2><?php echo $witrshowdata['witr_banner_title3']; ?> </h2>		
							<?php } ?>							
							<!-- pragraph -->
							<?php if(isset($witrshowdata['witr_pragraph']) && ! empty($witrshowdata['witr_pragraph'])){?>				
							<p><?php echo $witrshowdata['witr_pragraph']; ?></p>
							<?php }?>
							<!-- button -->
							<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
								<a  class="witr_butn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_banner_button'];?></a>
							<?php }?>
							
							<!-- video button -->
							<?php if($witrshowdata['witr_yshow_button']=='yes' or $witrshowdata['witr_vmshow_button']='yes'  ){?>
							
							<?php if(isset($witrshowdata['witr_yvideo_link']['url']) && ! empty($witrshowdata['witr_yvideo_link']['url'])){?>
								<a class="witr_video_butns video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $witrshowdata['witr_yvideo_link'] ['url']; ?>"><i class="fas fa-play"></i>
								<?php echo $witrshowdata['witr_video_button']; ?>
								</a>
							<?php } ?>

							<?php if(isset($witrshowdata['witr_vmvideo_link']['url']) && ! empty($witrshowdata['witr_vmvideo_link']['url'])){?>
								<a class="witr_video_butns video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_vmvideo_link'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $witrshowdata['witr_video_button']; ?></a>
							<?php } ?>	

							<?php } ?>
							<!-- social -->
							<ul class="witr_ico2">
								<?php if(isset($witrshowdata['witr_banner_fb']['url']) && ! empty($witrshowdata['witr_banner_fb']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_fb']['url'];?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_tw']['url']) && ! empty($witrshowdata['witr_banner_tw']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_tw']['url'];?>"><i class="fab fa-twitter"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_gp']['url']) && ! empty($witrshowdata['witr_banner_gp']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_gp']['url'];?>"><i class="fab fa-google"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_lk']['url']) && ! empty($witrshowdata['witr_banner_lk']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_lk']['url'];?>"><i class="fab fa-linkedin-in"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_pi']['url']) && ! empty($witrshowdata['witr_banner_pi']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_pi']['url'];?>"><i class="fab fa-pinterest"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_in']['url']) && ! empty($witrshowdata['witr_banner_in']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_in']['url'];?>"><i class="fab fa-instagram"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_us']['url']) && ! empty($witrshowdata['witr_banner_us']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_us']['url'];?>"><i class="fas fa-users"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_tu']['url']) && ! empty($witrshowdata['witr_banner_tu']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_tu']['url'];?>"><i class="fab fa-tumblr"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_vi']['url']) && ! empty($witrshowdata['witr_banner_vi']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_vi']['url'];?>"><i class="fab fa-vimeo-v"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_yt']['url']) && ! empty($witrshowdata['witr_banner_yt']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_yt']['url'];?>"><i class="fab fa-youtube"></i></a></li>
								<?php } ?>
							</ul>				
							
						</div> <!-- banner content -->
					</div>		
				</div>		
			</div>		
		</div>		
		<?php
		
		break;
		case '2':
		?>

		<div class=" container">
			<div class="row">
				<div class="col-lg-12">			
					<div class="witr_banner_area witr_banner_height">

						<div class="witr_banner_content text-right">
							<!-- title 1 -->
							<?php if(isset($witrshowdata['witr_banner_title1']) && ! empty($witrshowdata['witr_banner_title1'])){?>
								<h1><?php echo $witrshowdata['witr_banner_title1']; ?> </h1>		
							<?php } ?>
							<!-- title 2 -->
							<?php if(isset($witrshowdata['witr_banner_title2']) && ! empty($witrshowdata['witr_banner_title2'])){?>
							<h2><?php echo $witrshowdata['witr_banner_title2']; ?> </h2>		
							<?php } ?>
							<!-- title 3 -->
							<?php if(isset($witrshowdata['witr_banner_title3']) && ! empty($witrshowdata['witr_banner_title3'])){?>
							<h2><?php echo $witrshowdata['witr_banner_title3']; ?> </h2>		
							<?php } ?>							
							<!-- pragraph -->
							<?php if(isset($witrshowdata['witr_pragraph']) && ! empty($witrshowdata['witr_pragraph'])){?>				
							<p><?php echo $witrshowdata['witr_pragraph']; ?></p>
							<?php }?>
							<!-- button -->
							<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
								<a  class="witr_butn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_banner_button'];?></a>		
							<?php }?>
							
							<!-- video button -->
							<?php if($witrshowdata['witr_yshow_button']=='yes' or $witrshowdata['witr_vmshow_button']='yes'  ){?>
							
							<?php if(isset($witrshowdata['witr_yvideo_link']['url']) && ! empty($witrshowdata['witr_yvideo_link']['url'])){?>
								<a class="witr_video_butns video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $witrshowdata['witr_yvideo_link'] ['url']; ?>"><i class="fas fa-play"></i>
								<?php echo $witrshowdata['witr_video_button']; ?>
								</a>
							<?php } ?>

							<?php if(isset($witrshowdata['witr_vmvideo_link']['url']) && ! empty($witrshowdata['witr_vmvideo_link']['url'])){?>
								<a class="witr_video_butns video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_vmvideo_link'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $witrshowdata['witr_video_button']; ?></a>
							<?php } ?>	

							<?php } ?>	

							<!-- social -->
							<ul class="witr_ico2">
								<?php if(isset($witrshowdata['witr_banner_fb']['url']) && ! empty($witrshowdata['witr_banner_fb']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_fb']['url'];?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_tw']['url']) && ! empty($witrshowdata['witr_banner_tw']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_tw']['url'];?>"><i class="fab fa-twitter"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_gp']['url']) && ! empty($witrshowdata['witr_banner_gp']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_gp']['url'];?>"><i class="fab fa-google"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_lk']['url']) && ! empty($witrshowdata['witr_banner_lk']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_lk']['url'];?>"><i class="fab fa-linkedin-in"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_pi']['url']) && ! empty($witrshowdata['witr_banner_pi']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_pi']['url'];?>"><i class="fab fa-pinterest"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_in']['url']) && ! empty($witrshowdata['witr_banner_in']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_in']['url'];?>"><i class="fab fa-instagram"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_us']['url']) && ! empty($witrshowdata['witr_banner_us']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_us']['url'];?>"><i class="fas fa-users"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_tu']['url']) && ! empty($witrshowdata['witr_banner_tu']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_tu']['url'];?>"><i class="fab fa-tumblr"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_vi']['url']) && ! empty($witrshowdata['witr_banner_vi']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_vi']['url'];?>"><i class="fab fa-vimeo-v"></i></a></li>
								<?php } ?>
								<?php if(isset($witrshowdata['witr_banner_yt']['url']) && ! empty($witrshowdata['witr_banner_yt']['url'])){?>
									<li><a href="<?php echo $witrshowdata['witr_banner_yt']['url'];?>"><i class="fab fa-youtube"></i></a></li>
								<?php } ?>
							</ul>				
							
						</div> <!-- banner content -->
								
					</div>		
				</div>		
			</div>		
		</div>		
		
		<?php


		
		break;		
		default:
		?>

		<div class="witr_banner_area witr_banner_height">
		
			<div class="witr_banner_content text-center">
				<!-- title 1 -->
				<?php if(isset($witrshowdata['witr_banner_title1']) && ! empty($witrshowdata['witr_banner_title1'])){?>
				<h1> <?php echo $witrshowdata['witr_banner_title1']; ?> </h1>		
				<?php } ?>
				<!-- title 2 -->
				<?php if(isset($witrshowdata['witr_banner_title2']) && ! empty($witrshowdata['witr_banner_title2'])){?>
				<h2><?php echo $witrshowdata['witr_banner_title2']; ?> </h2>		
				<?php } ?>
				<!-- title 3 -->
				<?php if(isset($witrshowdata['witr_banner_title3']) && ! empty($witrshowdata['witr_banner_title3'])){?>
				<h2><?php echo $witrshowdata['witr_banner_title3']; ?> </h2>		
				<?php } ?>
				<!-- pragraph -->
				<?php if(isset($witrshowdata['witr_pragraph']) && ! empty($witrshowdata['witr_pragraph'])){?>				
				<p><?php echo $witrshowdata['witr_pragraph']; ?></p>
				<?php }?>
				<!-- button -->
				<?php if(isset($witrshowdata['witr_button_link']['url']) && ! empty($witrshowdata['witr_button_link']['url'])){?>
					<a  class="witr_butn" href="<?php echo $witrshowdata['witr_button_link']['url'] ;?>"><?php echo $witrshowdata['witr_banner_button'];?></a>
				<?php }?>
				
				<!-- video button -->
				<?php if($witrshowdata['witr_yshow_button']=='yes' or $witrshowdata['witr_vmshow_button']='yes'  ){?>
				
				<?php if(isset($witrshowdata['witr_yvideo_link']['url']) && ! empty($witrshowdata['witr_yvideo_link']['url'])){?>
					<a class="witr_video_butns video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo $witrshowdata['witr_yvideo_link'] ['url']; ?>"><i class="fas fa-play"></i>
					<?php echo $witrshowdata['witr_video_button']; ?>
					</a>
				<?php } ?>

				<?php if(isset($witrshowdata['witr_vmvideo_link']['url']) && ! empty($witrshowdata['witr_vmvideo_link']['url'])){?>
					<a class="witr_video_butns video-popup video-vemo-icon venobox vbox-item" data-vbtype="vimeo" data-autoplay="true" href="<?php echo $witrshowdata['witr_vmvideo_link'] ['url']; ?>"><i class="fas fa-play"></i><?php echo $witrshowdata['witr_video_button']; ?></a>
				<?php } ?>	

				<?php } ?>

				<!-- social -->
				<ul class="witr_ico2">
					<?php if(isset($witrshowdata['witr_banner_fb']['url']) && ! empty($witrshowdata['witr_banner_fb']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_fb']['url'];?>"><i class="fab fa-facebook-f"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_tw']['url']) && ! empty($witrshowdata['witr_banner_tw']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_tw']['url'];?>"><i class="fab fa-twitter"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_gp']['url']) && ! empty($witrshowdata['witr_banner_gp']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_gp']['url'];?>"><i class="fab fa-google"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_lk']['url']) && ! empty($witrshowdata['witr_banner_lk']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_lk']['url'];?>"><i class="fab fa-linkedin-in"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_pi']['url']) && ! empty($witrshowdata['witr_banner_pi']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_pi']['url'];?>"><i class="fab fa-pinterest"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_in']['url']) && ! empty($witrshowdata['witr_banner_in']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_in']['url'];?>"><i class="fab fa-instagram"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_us']['url']) && ! empty($witrshowdata['witr_banner_us']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_us']['url'];?>"><i class="fas fa-users"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_tu']['url']) && ! empty($witrshowdata['witr_banner_tu']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_tu']['url'];?>"><i class="fab fa-tumblr"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_vi']['url']) && ! empty($witrshowdata['witr_banner_vi']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_vi']['url'];?>"><i class="fab fa-vimeo-v"></i></a></li>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_yt']['url']) && ! empty($witrshowdata['witr_banner_yt']['url'])){?>
						<li><a href="<?php echo $witrshowdata['witr_banner_yt']['url'];?>"><i class="fab fa-youtube"></i></a></li>
					<?php } ?>
				</ul>				
			</div> <!-- banner content -->			
		</div>
		
		
		<?php		
		break;
		
		
	} /* switch end*/ 
	
	
    } /*end function */




}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Banner_slider() );