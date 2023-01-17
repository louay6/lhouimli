<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Title extends Widget_Base {

    public function get_name() {
        return 'witr_section_title';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Title', 'softd' );
    }

    public function get_icon() {
        return 'eicon-t-letter';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			/*==== witr_title start ====*/
			$this->start_controls_section(
				'witr_field_display_title',
				[
					'label' => esc_html__( 'witr title options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			/* title style check  witr_style_title */
				$this->add_control(
					'witr_style_title',
					[
						'label' => esc_html__( 'Title Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'default' => '1',
						'options' => [
							'1' => esc_html__( 'Title Style Center', 'softd' ),
							'2' => esc_html__( 'Title Style Left', 'softd' ),
							'3' => esc_html__( 'Title Style Right', 'softd' ),
							'4' => esc_html__( 'Title Style Extra', 'softd' ),
							'5' => esc_html__( 'Title Left Button Right', 'softd' ),
						],
						
					]
				);
		
			/* top title witr_top_title	*/
				$this->add_control(
					'witr_top_title',
					[
						'label' => esc_html__( 'Top Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Text Here', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
						'placeholder' => esc_attr__( 'Type your top title here', 'softd' ),						
					]
				);
			/* witr_middle_title	*/
				$this->add_control(
					'witr_middle_title',
					[
						'label' => esc_html__( 'Middle Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Business Service', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),						
						'placeholder' => esc_attr__( 'Type your middle title here', 'softd' ),							
					]
				);
				/* witr_bottom_title	*/
				$this->add_control(
					'witr_bottom_title',
					[
						'label' => esc_html__( 'Bottom Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( '', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
						'placeholder' => esc_attr__( 'Type your bottom title here', 'softd' ),
					]
				);
				/* witr_title_inner	*/
				$this->add_control(
					'witr_title_inner',
					[
						'label' => esc_html__( ' Inner Title ', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( '', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
						'placeholder' => esc_attr__( 'Type your bottom title here', 'softd' ),
					]
				);				
				/* witr_title_content */	
				$this->add_control(
					'witr_title_content',
					[
						'label' => esc_html__( 'Content Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'Not use content, remove the text from field, highlight text use ex-<span>text</span> or when link use ex-<span><a href="#">text</a></span>', 'softd' ),
						'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. it enim ad minim veniam,', 'softd' ),
						'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
					]
				);				

			/* title style check  witr_style_title */
				$this->add_control(
					'witr_style_ico',
					[
						'label' => esc_html__( 'Icon Position', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'default' => '1',
						'options' => [
							'1' => esc_html__( 'Icon Position Bottom', 'softd' ),
							'2' => esc_html__( 'Icon Position Middle', 'softd' ),
							'3' => esc_html__( 'Icon Position Top', 'softd' ),
						],
						
					]
				);				
				
			/* witr_show_icon witr_image_icon */	
				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'Show icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);				
				$this->add_control(
					'witr_image_icon',
					[
						'label' => esc_html__( 'Icon', 'softd' ),
						'type' => Controls_Manager::ICONS,
						'separator'=>'before',
						'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),
						'fa4compatibility' => 'icon',
						'default' => [
							'value' => 'fas fa-star',
							'library' => 'fa-solid',
						],
						'condition' => [
							'witr_show_icon' => 'yes',

						],							
					]
				);
				/* show image  witr_show_image */	
				$this->add_control(
					'witr_show_image',
					[
						'label' => esc_html__( 'Show Image', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);				
				$this->add_control(
					'witr_title_image',
					[
						'label' => esc_html__( 'Choose Image', 'softd' ),
						'type' => Controls_Manager::MEDIA,
						'separator'=>'before',
						'default' => [
							'url' =>'',
						],
						'condition' => [
							'witr_show_image' => 'yes',
						],							
					]
				);
	
				/* show bar */	
				$this->add_control(
					'witr_show_bar',
					[
						'label' => esc_html__( 'Show Bar', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);
				/* show bar */	
				$this->add_control(
					'witr_show_barc',
					[
						'label' => esc_html__( 'Show Circle Bar Animation ', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
					]
				);
				
			$this->add_control(
				'witr_title_button',
				[
					'label' => esc_html__( 'Button text', 'softd' ),
					'label_block' =>true,
					'type' => Controls_Manager::TEXT,
					'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),		
					'default' => esc_html__( 'Read More', 'softd' ),
					'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
					'condition' => [
						'witr_style_title' =>['5'],
					],							
				]
			);
			/* witr_button_link */	
			$this->add_control(
				'witr_button_link',
				[
					'label' => esc_html__( 'Button Link', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert button link here.','softd'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
						'is_external' => true,
						'nofollow' => true,
					],
					'condition' => [
						'witr_style_title' =>['5'],
					],							
				]
			);			
				
			$this->end_controls_section();
			/*=== end witr_title start ====*/
			
			
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
						'{{WRAPPER}} .witr_section_title_inner h2' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_section_title_inner h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_section_title_inner h2',
				]
			);						
			/*  Title Width */
			$this->add_responsive_control(
				'witr_tt_width',
				[
					'label' => esc_html__( ' Width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 10,
							'max' => 200,
						],
						'%' => [
							'min' => 10,
							'max' => 200,
						],
						'em' => [
							'min' => 10,
							'max' => 200,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h2' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			/*  title background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_titlebg_iconc',
					'label' => esc_html__( ' Background', 'softd' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .witr_section_title_inner h2',
				]
			);
				/* border_radius */
				$this->add_control(
					'witr_title_br',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_section_title_inner h2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_section_title_inner h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_section_title_inner h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style ====*/
		

		/*=== start w_title style 2 ====*/

		$this->start_controls_section(
			'witr_style_option2',
			[
				'label' => esc_html__( 'Middle Title Color Option', 'softd' ),
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
						'{{WRAPPER}} .witr_section_title_inner h3' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_section_title_inner h3:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_section_title_inner h3',
				]
			);
			/*  Title Width */
			$this->add_responsive_control(
				'witr_tm_width',
				[
					'label' => esc_html__( ' Width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 10,
							'max' => 200,
						],
						'%' => [
							'min' => 10,
							'max' => 200,
						],
						'em' => [
							'min' => 10,
							'max' => 200,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h3' => 'width: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_section_title_inner h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_section_title_inner h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style 2 ====*/

		/*=== start w_title style 3 ====*/

		$this->start_controls_section(
			'witr_style_option3',
			[
				'label' => esc_html__( 'Bottom Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_title_color3',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h1' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_thover_color3',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h1:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_color3',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_section_title_inner h1',
				]
			);		
				
			/*  Title Width */
			$this->add_responsive_control(
				'witr_tb_width',
				[
					'label' => esc_html__( ' Width', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 10,
							'max' => 200,
						],
						'%' => [
							'min' => 10,
							'max' => 200,
						],
						'em' => [
							'min' => 10,
							'max' => 200,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h1' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_title_margin3',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_title_padding3',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style 3 ====*/



		/*=== start Inner title style ====*/
		$this->start_controls_section(
			'witr_stylei_option',
			[
				'label' => esc_html__( 'Inner Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_titleik_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .witr_back_title h4' => '-webkit-text-stroke-color: {{VALUE}}',
					],
				]
			);
			/* color */
			$this->add_control(
				'witr_titlbi_color',
				[
					'label' => esc_html__( 'Border', 'softd' ),
					'type' => Controls_Manager::TEXT,
					'description' => esc_html__( 'Must Be Use Ex-1px', 'softd' ),
					'placeholder' => esc_attr__( '1px', 'softd' ),					
					'selectors' => [
						'{{WRAPPER}} .witr_back_title h4' => '-webkit-text-stroke-width: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpyi_color3',
					'label' => esc_html__( 'Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .witr_back_title h4',
				]
			);		

			/* box shadow color */	
			$this->add_group_control(
				Group_Control_Text_Shadow::get_type(),
				[
					'name' => 'witr_Texti_shadow',
					'label' => esc_html__( 'Text Shadow', 'softd' ),
					'selector' => '{{WRAPPER}} .witr_back_title h4',
				]
			);			
			/* blend mode style color */				
			$this->add_control(
				'witr_it_blend_mode',
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
						'{{WRAPPER}} .witr_back_title h4' => 'mix-blend-mode: {{VALUE}}',
					],
				]
			);
			/* text_opacity */
			$this->add_control(
				'text_opacity',
				[
					'label' => esc_html__( 'Text Opacity', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'default' => [
						'size' => 1,
					],
					'range' => [
						'px' => [
							'max' => 1,
							'step' => 0.01,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_back_title h4' => 'opacity: {{SIZE}};',
					],
				]
			);			
			/* witr_top */
			$this->add_responsive_control(
				'witr_top1',
				[
					'label' => esc_html__( 'Top', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -300,
							'max' => 500,
						],
						'%' => [
							'min' => -300,
							'max' => 500,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .witr_back_title' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);
			
			/* witr_left */
			$this->add_responsive_control(
				'witr_left1',
				[
					'label' => esc_html__( 'Left', 'softd' ),
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
						'{{WRAPPER}} .witr_back_title' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);
			
		 
		 $this->end_controls_section();
		/*=== end  Inner title style  ====*/
		
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
						'{{WRAPPER}} .witr_section_title_inner h1 span,{{WRAPPER}} .witr_section_title_inner h2 span,{{WRAPPER}} .witr_section_title_inner h3 span,{{WRAPPER}} .witr_section_title_inner p span,{{WRAPPER}} .witr_section_title_inner p span a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_section_title_inner h1 span:hover,{{WRAPPER}} .witr_section_title_inner h2 span:hover,{{WRAPPER}} .witr_section_title_inner h3 span:hover,{{WRAPPER}} .witr_section_title_inner p span:hover,{{WRAPPER}} .witr_section_title_inner p span a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_section_title_inner h1 span,{{WRAPPER}} .witr_section_title_inner h2 span,{{WRAPPER}} .witr_section_title_inner h3 span,{{WRAPPER}} .witr_section_title_inner p span,{{WRAPPER}} .witr_section_title_inner p span a',
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
						'{{WRAPPER}} .witr_section_title_inner h1 span,{{WRAPPER}} .witr_section_title_inner h2 span,{{WRAPPER}} .witr_section_title_inner h3 span,{{WRAPPER}} .witr_section_title_inner p span,{{WRAPPER}} .witr_section_title_inner p span a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_section_title_inner h1 span,{{WRAPPER}} .witr_section_title_inner h2 span,{{WRAPPER}} .witr_section_title_inner h3 span,{{WRAPPER}} .witr_section_title_inner p span,{{WRAPPER}} .witr_section_title_inner p span a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_heighlight style ====*/		
		
		

		/*=== start w_icon style ====*/
		$this->start_controls_section(
			'witr_section_style_icon',
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
			
				/*=== start icon normal style ====*/
				$this->start_controls_tab(
					'icon_colors_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				/* icon color */
				$this->add_control(
					'primary_color',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .witr_icon_title i' => 'color: {{VALUE}}',
						],
						
					]
				);
				/*  font size  */
				$this->add_responsive_control(
					'icon_size',
					[
						'label' => esc_html__( 'Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 300,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_icon_title i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  Rotate */
				$this->add_responsive_control(
					'rotatettr',
					[
						'label' => esc_html__( 'Rotate', 'softd' ),
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
							'{{WRAPPER}} .witr_icon_title i' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);		
					/* margin */
					$this->add_responsive_control(
						'icon_margin',
						[
							'label' => esc_html__( 'Margin', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .witr_icon_title i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);
					/* padding */
					$this->add_responsive_control(
						'icon_padding',
						[
							'label' => esc_html__( 'Padding', 'softd' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%', 'em' ],
							'selectors' => [
								'{{WRAPPER}} .witr_icon_title i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
						]
					);		
				$this->end_controls_tab();
				/*=== end icon normal style ====*/
			
				/*=== start icon hover style ====*/
				$this->start_controls_tab(
					'icon_colors_hover',
					[
						'label' => esc_html__( 'Hover', 'softd' ),
					]
				);
				/* Icon hover Color */
				$this->add_control(
					'hover_primary_color',
					[
						'label' => esc_html__( ' Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',				
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .witr_icon_title i:hover' => 'color: {{VALUE}}',
						],
					]
				);
				$this->end_controls_tab();
				/*=== end icon hover style ====*/
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/		

		$this->end_controls_section();

		/*=== end w_icon style ====*/
		
		
		
		
		
		
		
		
		
		
		/*=== start bar style ====*/
		$this->start_controls_section(
			'witr_section_style_bar',
			[
				'label' => esc_html__( 'Bar Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,			
				
			]
		);
		
				/* bar background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_bar_background',
						'label' => esc_html__( 'button Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_bar_inner',
					]
				);
				/*  width  */
				$this->add_responsive_control(
					'bar_width',
					[
						'label' => esc_html__( 'Width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_bar_inner' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
			/*  Height  */
				$this->add_responsive_control(
					'bar_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_bar_inner' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* bar border_radius */
				$this->add_control(
					'witr_border_bar_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_bar_inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],							
					]
				);				
			/* margin */
			$this->add_responsive_control(
				'bar_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_bar_main' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			
				$this->add_control(
					'witr_cbar_before',
					[
						'label' => esc_html__( 'Bar Circle Before Style', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'description' => esc_html__( 'set circle height,color and style', 'softd' ),					
					]
				);
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'ciclebar_border_b',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_bar_innerc::after',
					]
				);
				$this->add_control(
					'witr_cbar_after',
					[
						'label' => esc_html__( 'Bar Circle After Style', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'description' => esc_html__( 'set circle height,color and style', 'softd' ),					
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'ciclebar_border_af',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_bar_innerc::after',
					]
				);
			
		
			$this->end_controls_section();
			/*=== end bar style ====*/

		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( 'Bar Images option', 'softd' ),
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
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 25,
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_image_title img' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  image height */
				$this->add_responsive_control(
					'witr_image_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 25,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_image_title img' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_image_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* image padding */
				$this->add_responsive_control(
					'witr_image_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_image_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/	
 
		

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
						'{{WRAPPER}} .witr_section_title_inner p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_section_title_inner p',
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
						'{{WRAPPER}} .witr_section_title_inner p' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
		
			/* margin */
			$this->add_responsive_control(
				'content_margin',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_section_title_inner p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'witr_style_title' =>['5'],
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
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .title_btn a' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .title_btn a',
						]
					);	
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_button_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .title_btn a',
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
							'default' => ' ',
							'selectors' => [
								'{{WRAPPER}} .title_btn a' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .title_btn a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed'],
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
								'{{WRAPPER}} .title_btn a' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed'],
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
								'{{WRAPPER}} .title_btn a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',								
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed'],
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
								'{{WRAPPER}} .title_btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .title_btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .title_btn a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .title_btn a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'softd' ),
							'selector' => '{{WRAPPER}} .title_btn a:hover',
						]
					);					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		
				
		
		/*=== start Before/After style ====*/
		$this->start_controls_section(
			'witr_style_beaf_content',
			[
				'label' => esc_html__( 'Before/After Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition'=>[
					'witr_style_title'=>['4']
				
				
				],
			]
		);		
		
		/* Before/After background */
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'witr_befaf',
				'label' => esc_html__( 'Before After Background', 'softd' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .title_in::before,{{WRAPPER}} .title_in::after',
			]
		);
					/*  Before After Rotate */
					$this->add_responsive_control(
						'witr_rotat_befaf',
						[
							'label' => esc_html__( 'Rotate', 'softd' ),
							'type' => Controls_Manager::SLIDER,
							'size_units' => [ 'deg' ],
							'default' => [
								'size' => 0,
								'unit' => 'deg',
							],
							'tablet_default' => [
							],
								'unit' => 'deg',
							'mobile_default' => [
								'unit' => 'deg',
							],
							'selectors' => [
								'{{WRAPPER}} .title_in::before,{{WRAPPER}} .title_in::after' => 'transform: rotate({{SIZE}}{{UNIT}});',
							],
						]
					);

		
		
		 $this->end_controls_section();
		/*=== end  Before/After style ====*/
		
	
     } /* funcition end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
				
	
		switch ( $witrshowdata['witr_style_title'] ) {	
				case '5':
				?>							
					<!-- title right -->
					<div class="witr_section_title">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="witr_section_title_inner">
								<!-- title top -->
								<?php if(isset($witrshowdata['witr_top_title']) && ! empty($witrshowdata['witr_top_title'])){?>
									<h2><?php echo $witrshowdata['witr_top_title']; ?></h2>		
								<?php } ?>						
								<!-- title middle -->
								<?php if(isset($witrshowdata['witr_middle_title']) && ! empty($witrshowdata['witr_middle_title'])){?>
									<h3><?php echo $witrshowdata['witr_middle_title']; ?></h3>		
								<?php } ?>
								<!-- title bottom -->
								<?php if(isset($witrshowdata['witr_bottom_title']) && ! empty($witrshowdata['witr_bottom_title'])){?>
									<h1><?php echo $witrshowdata['witr_bottom_title']; ?></h1>		
								<?php } ?>
								
									<!-- image -->
									<?php if($witrshowdata['witr_show_image']=='yes'){?>
										<div class="witr_image_title">								
											<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
										</div>
									<?php }?>	
								
								<!-- icon -->
								<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
									<?php if ( $is_new || $migrated ) : ?>
										<div class="witr_icon_title">
										<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
										</div>
									<?php
									else : ?>
										<div class="witr_icon_title">
											<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
										</div>	
									<?php endif; ?>	
								<?php }?>					
								<!-- bar -->
								<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
									<div class="witr_bar_main">
										<div class="witr_bar_inner">
										</div>
									</div>
								<?php }?>							
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>

								
								<!-- content -->
								<?php if(isset($witrshowdata['witr_title_content']) && ! empty($witrshowdata['witr_title_content'])){?>
									<p><?php echo $witrshowdata['witr_title_content']; ?> </p>		
								<?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">	
							<!-- button -->
							<?php if(isset($witrshowdata['witr_title_button']) && ! empty($witrshowdata['witr_title_button'])){?>
								<div class="title_btn text-right">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_title_button']; ?></a>
								</div>
							<?php } ?>	
						</div>	
							<!-- inner title -->
							<?php if(isset($witrshowdata['witr_title_inner']) && ! empty($witrshowdata['witr_title_inner'])){?>
								<div class="witr_back_title">
									<h4><?php echo $witrshowdata['witr_title_inner']; ?></h4>
								</div>
							<?php } ?>						
					</div>							
					</div>				
					
				<?php
				break;
				case '4':
				?>							
				<div class="title_in_area witr_section_title_inner witr_extra_title">		
					<div class="title_in">			
						<div class="title_tx">				  
							<!-- title top -->
							<?php if(isset($witrshowdata['witr_top_title']) && ! empty($witrshowdata['witr_top_title'])){?>
								<h2><?php echo $witrshowdata['witr_top_title']; ?></h2>		
							<?php } ?>						
							<!-- title middle -->
							<?php if(isset($witrshowdata['witr_middle_title']) && ! empty($witrshowdata['witr_middle_title'])){?>
								<h3><?php echo $witrshowdata['witr_middle_title']; ?></h3>		
							<?php } ?>
							<!-- title bottom -->
							<?php if(isset($witrshowdata['witr_bottom_title']) && ! empty($witrshowdata['witr_bottom_title'])){?>
								<h1><?php echo $witrshowdata['witr_bottom_title']; ?></h1>		
							<?php } ?>							
						</div>		
					</div>		
					<div class="title_p">			
						<div class="title_ptx">							
							<!-- content -->
							<?php if(isset($witrshowdata['witr_title_content']) && ! empty($witrshowdata['witr_title_content'])){?>
								<p><?php echo $witrshowdata['witr_title_content']; ?> </p>		
							<?php } ?>						
						</div>					
					</div>		
				</div>				
					
				<?php
				break;
				
				case '3':
				?>							
					<!-- title right -->
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-right">
						
							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='3'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->
						
						
							<!-- title top -->
							<?php if(isset($witrshowdata['witr_top_title']) && ! empty($witrshowdata['witr_top_title'])){?>
								<h2><?php echo $witrshowdata['witr_top_title']; ?></h2>		
							<?php } ?>	

							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='2'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->

							
							<!-- title middle -->
							<?php if(isset($witrshowdata['witr_middle_title']) && ! empty($witrshowdata['witr_middle_title'])){?>
								<h3><?php echo $witrshowdata['witr_middle_title']; ?></h3>		
							<?php } ?>
							<!-- title bottom -->
							<?php if(isset($witrshowdata['witr_bottom_title']) && ! empty($witrshowdata['witr_bottom_title'])){?>
								<h1><?php echo $witrshowdata['witr_bottom_title']; ?></h1>		
							<?php } ?>
							
							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='1'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->

							<!-- content -->
							<?php if(isset($witrshowdata['witr_title_content']) && ! empty($witrshowdata['witr_title_content'])){?>
								<p><?php echo $witrshowdata['witr_title_content']; ?> </p>		
							<?php } ?>
						</div>
							<!-- inner title -->
							<?php if(isset($witrshowdata['witr_title_inner']) && ! empty($witrshowdata['witr_title_inner'])){?>
								<div class="witr_back_title">
									<h4><?php echo $witrshowdata['witr_title_inner']; ?></h4>
								</div>
							<?php } ?>						
					</div>				
				<?php
				break;
				
				case '2':
				?>
					<!-- title left -->
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-left">
						
							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='3'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->
						
						
							<!-- title top -->
							<?php if(isset($witrshowdata['witr_top_title']) && ! empty($witrshowdata['witr_top_title'])){?>
								<h2><?php echo $witrshowdata['witr_top_title']; ?></h2>		
							<?php } ?>

							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='2'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->

							
							<!-- title middle -->
							<?php if(isset($witrshowdata['witr_middle_title']) && ! empty($witrshowdata['witr_middle_title'])){?>
								<h3><?php echo $witrshowdata['witr_middle_title']; ?></h3>		
							<?php } ?>
							<!-- title bottom -->
							<?php if(isset($witrshowdata['witr_bottom_title']) && ! empty($witrshowdata['witr_bottom_title'])){?>
								<h1><?php echo $witrshowdata['witr_bottom_title']; ?></h1>		
							<?php } ?>
							
							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='1'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->

							<!-- content -->
							<?php if(isset($witrshowdata['witr_title_content']) && ! empty($witrshowdata['witr_title_content'])){?>
								<p><?php echo $witrshowdata['witr_title_content']; ?> </p>		
							<?php } ?>
						</div>
							<!-- inner title -->
							<?php if(isset($witrshowdata['witr_title_inner']) && ! empty($witrshowdata['witr_title_inner'])){?>
								<div class="witr_back_title">
									<h4><?php echo $witrshowdata['witr_title_inner']; ?></h4>
								</div>
							<?php } ?>						
					</div>				
				<?php
				
				break;

				default:
				?>
					<!-- title center -->
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-center">
						
							<!--<div class="witr_title_lines"><span class="witr_line_shaps"><span class="witr_shape_dv">Divider <i aria-hidden="true" class="fas fa-star"></i></span></span></div>-->
							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='3'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							
							<?php }?>	
							<!-- end icon position -->
							
						
							<!-- title top -->
							<?php if(isset($witrshowdata['witr_top_title']) && ! empty($witrshowdata['witr_top_title'])){?>
								<h2><?php echo $witrshowdata['witr_top_title']; ?></h2>		
							<?php } ?>


							<!-- icon position -->
							<?php if($witrshowdata['witr_style_ico']=='2'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							<!-- end icon position -->


							
							<!-- title middle -->
							<?php if(isset($witrshowdata['witr_middle_title']) && ! empty($witrshowdata['witr_middle_title'])){?>
								<h3><?php echo $witrshowdata['witr_middle_title']; ?></h3>		
							<?php } ?>
							<!-- title bottom -->
							<?php if(isset($witrshowdata['witr_bottom_title']) && ! empty($witrshowdata['witr_bottom_title'])){?>
								<h1><?php echo $witrshowdata['witr_bottom_title']; ?></h1>		
							<?php } ?>

							
							
							<?php if($witrshowdata['witr_style_ico']=='1'){?>
							
							<!-- image -->
							<?php if($witrshowdata['witr_show_image']=='yes'){?>
								<div class="witr_image_title">								
									<img src="<?php echo $witrshowdata['witr_title_image']['url'];?>" alt="">																	
								</div>
							<?php }?>
							<!-- icon -->
							<?php if($witrshowdata['witr_show_icon']=='yes'){?>							
								<?php if ( $is_new || $migrated ) : ?>
									<div class="witr_icon_title">
									<?php Icons_Manager::render_icon( $witrshowdata['witr_image_icon'], [ 'aria-hidden' => 'true' ] ); ?>
									</div>
								<?php
								else : ?>
									<div class="witr_icon_title">
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									</div>	
								<?php endif; ?>	
							<?php }?>							
							<!-- bar -->
							<?php if($witrshowdata['witr_show_bar']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner">
									</div>
								</div>
							<?php }?>
							<!-- circle bar -->
							<?php if($witrshowdata['witr_show_barc']=='yes'){?>							
								<div class="witr_bar_main">
									<div class="witr_bar_inner witr_bar_innerc">
									</div>
								</div>
							<?php }?>
							
							<?php }?>	
							

							
							<!-- content -->
							<?php if(isset($witrshowdata['witr_title_content']) && ! empty($witrshowdata['witr_title_content'])){?>
								<p><?php echo $witrshowdata['witr_title_content']; ?> </p>		
							<?php } ?>							
						</div>
							<!-- inner title -->
							<?php if(isset($witrshowdata['witr_title_inner']) && ! empty($witrshowdata['witr_title_inner'])){?>
								<div class="witr_back_title">
									<h4><?php echo $witrshowdata['witr_title_inner']; ?></h4>
								</div>
							<?php } ?>						
					</div>

				<?php
				break;


		
		} /* switch end */
		
		
		


    } /* funcition end */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Title() );
