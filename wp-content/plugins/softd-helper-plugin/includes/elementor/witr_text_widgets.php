<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Text_widget extends Widget_Base {

    public function get_name() {
        return 'witr_section_t_widget';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Text Widget', 'softd' );
    }

    public function get_icon() {
        return 'eicon-text';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			/* === witr_pricing start === */
			$this->start_controls_section(
				'witr_field_display_text_widget',
				[
					'label' => esc_html__( 'witr Widget Text options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);						
			
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Box Position', 'softd' ),
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
							'{{WRAPPER}} .witr_text_widget' => 'text-align: {{VALUE}}',
						],
					]
				);
			/* top text widget witr_top_text widget	*/
				$this->add_control(
					'witr_top_text_widget',
					[
						'label' => esc_html__( 'Top Title Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'softd is Awesome !', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use text Title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
						'placeholder' => esc_attr__( 'Type your top text title here', 'softd' ),						
					]
				);
				/* middle text widget witr_middle_text_widget	*/
				$this->add_control(
					'witr_middle_text_widget',
					[
						'label' => esc_html__( 'Middle Title Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Free to Download for Everyone', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use middle text Title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),						
						'placeholder' => esc_attr__( 'Type your middle text Title here', 'softd' ),							
					]
				);
				/* bottom text widget witr_bottom_text widget	*/
				$this->add_control(
					'witr_bottom_text_widget',
					[
						'label' => esc_html__( 'bottom Title Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__( '', 'softd' ),
						'separator' => 'before',
						'description' => esc_html__( 'Not use bottom text Title, remove the text from field,highlight text use ex-<span>text</span>', 'softd' ),
						'placeholder' => esc_attr__( 'Type your bottom text Title here', 'softd' ),
					]
				);
				
				/* text widget content witr_text widget_content */	
				$this->add_control(
					'witr_text_w_content',
					[
						'label' => '',
						'type' => Controls_Manager::WYSIWYG,
						'dynamic' => [
							'active' => true,
						],
						'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'softd' ),
						'separator' => 'before',
					]
				);				
				
					/* witr_show_repeater_list */
					$this->add_control(
						'witr_show_repeat_list',
						[
							'label' => esc_html__( 'Show Repeater', 'softd' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),							
							'return_value' => 'yes',
							'default' => 'yes',							
						]
					);
					$repeater = new Repeater();	

					/* show icon witr_show_icon witr_icon_item */
					$repeater->add_control(
						'witr_show_icon',
						[
							'label' => esc_html__( 'Show Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),							
							'return_value' => 'yes',
							'default' => 'yes',
							
						]
					);				
					$repeater->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Icon', 'softd' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'softd' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fas fa-check',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
							],							
						]
					);
						
					/* text widget Content witr_textr_content	*/
					$repeater->add_control(
						'witr_textr_content',
						[
							'label' => esc_html__( 'List', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),							
						]
					);
					
					
					/* witr_list_text_widget */
					$this->add_control(
						'witr_list_text_widget',
						[
							'label' => esc_html__( 'Repeater List', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'fields' => $repeater->get_controls(),
							'condition' => [
								'witr_show_repeat_list' => 'yes',
							],							
							'default' => [
											[
												'witr_textr_content' => esc_html__( 'Mectetur adipisicing elit, sed do eiusmod tempor', 'softd' ),
											],
											[
												'witr_textr_content' => esc_html__( 'Adipisicing elit, sed do eiusmod empor', 'softd' ),
											],

							],
							'title_field' => '{{{ witr_textr_content }}}',
						]
					);				

			$this->end_controls_section();
			/*=== end witr_text widget start ====*/
			
			
			
	   /*=====================================================================================================================
										START TO STYLE
		====================================================================================================================*/
			

		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( 'Top Title Color option', 'softd' ),
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
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h1' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_text_widget_inner h1:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_text_widget_inner h1',
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
						'{{WRAPPER}} .witr_text_widget_inner h1' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
				
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin',
				[
					'label' => __( 'Title Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding',
				[
					'label' => __( 'Title Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/
		

		/*=== start witr_title Middle/Bottom ====*/

		$this->start_controls_section(
			'witr_style_option2',
			[
				'label' => esc_html__( 'Middle/Bottom Text Color Option', 'softd' ),
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
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h2' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_color2',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_text_widget_inner h2',
				]
			);
			/* m/b width */
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
						'{{WRAPPER}} .witr_text_widget_inner h2' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			/* margin */
			$this->add_responsive_control(
				'witr_title margin2',
				[
					'label' => __( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_title padding2',
				[
					'label' => __( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget_inner h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title Middle/Bottom ====*/


		
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
						'{{WRAPPER}} .witr_text_widget_inner h1 span, {{WRAPPER}} .witr_text_widget_inner h2 span' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_text_widget_inner h1 span:hover, {{WRAPPER}} .witr_text_widget_inner h2 span:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_text_widget_inner h1 span, {{WRAPPER}} .witr_text_widget_inner h2 span',
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
						'{{WRAPPER}} .witr_text_widget_inner h1 span, {{WRAPPER}} .witr_text_widget_inner h2 span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_text_widget_inner h1 span, {{WRAPPER}} .witr_text_widget_inner h2 span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'witr_contents_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget p' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_contents_typography',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
					'selector' => '{{WRAPPER}} .witr_text_widget p',
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
						'{{WRAPPER}} .witr_text_widget p' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);			
			/* content margin */
			$this->add_responsive_control(
				'witr_contents_margin',
				[
					'label' => esc_html__( ' Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'witr_contents_padding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_text_widget p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
		 
		 $this->end_controls_section();
		/*=== end  witr contents style ====*/		
		
		
		
		/*=== start witr List content style ====*/		
		 $this->start_controls_section(
			'witr_option_list_content',
			[
				'label' => esc_html__( 'List Icon/Text Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_show_repeat_list' => ['yes'],
				],				
			]		 
		 );

		/* Icon Color */
		$this->add_control(
			'witr_primary_color',
			[
				'label' => esc_html__( 'List Icon Color', 'softd' ),
				'type' => Controls_Manager::COLOR,
				'separator'=>'before',
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .about-content span i' => 'color: {{VALUE}}',
				],
			]
		);
		/*  list icon font size */
		$this->add_responsive_control(
			'witr_icon size',
			[
				'label' => esc_html__( 'List Icon Size', 'softd' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .about-content span i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		/* Icon margin */
		$this->add_responsive_control(
			'witr_contenti_margin',
			[
				'label' => esc_html__( 'Icon Margin', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .about-content span i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		/* Icon padding */
		$this->add_responsive_control(
			'witr_contenti_padding',
			[
				'label' => esc_html__( 'Icon Padding', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .about-content span i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);		
		
		

			/* list text color */
			$this->add_control(
				'witr_list_color',
				[
					'label' => esc_html__( 'List Text Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					
					'selectors' => [
						'{{WRAPPER}} .about-content span' => 'color: {{VALUE}}',
					],
				]
			);
			
		/*  list text font size */
		$this->add_responsive_control(
			'witr list size',
			[
				'label' => esc_html__( 'List Text Size', 'softd' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'range' => [
					'px' => [
						'min' => 6,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .about-content span' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);			
		
		/* margin */
		$this->add_responsive_control(
			'witr_content_margin',
			[
				'label' => esc_html__( 'Margin', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .about-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		/* padding */
		$this->add_responsive_control(
			'witr_content_padding',
			[
				'label' => esc_html__( 'Padding', 'softd' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .about-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		 $this->end_controls_section();
		/*=== end  witr repeater content style ====*/		
		

	

		
		
		

     } /* funcition end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
				
				?>
					<!-- text widget center -->
					<div class="witr_text_widget">
						<div class="witr_text_widget_inner">
							<!-- text widget top -->
							<?php if(isset($witrshowdata['witr_top_text_widget']) && ! empty($witrshowdata['witr_top_text_widget'])){?>
								<h1><?php echo $witrshowdata['witr_top_text_widget']; ?></h1>		
							<?php } ?>						
							<!-- text widget middle -->
							<?php if(isset($witrshowdata['witr_middle_text_widget']) && ! empty($witrshowdata['witr_middle_text_widget'])){?>
								<h2><?php echo $witrshowdata['witr_middle_text_widget']; ?></h2>		
							<?php } ?>
							<!-- text widget bottom -->
							<?php if(isset($witrshowdata['witr_bottom_text_widget']) && ! empty($witrshowdata['witr_bottom_text_widget'])){?>
								<h2><?php echo $witrshowdata['witr_bottom_text_widget']; ?></h2>		
							<?php } ?>						
							
							<!-- content -->
							<?php if(isset($witrshowdata['witr_text_w_content']) && ! empty($witrshowdata['witr_text_w_content'])){?>
								<p><?php echo $witrshowdata['witr_text_w_content']; ?></p>		
							<?php } ?>
							
							<!--- repeater content --->
							
							<?php if(isset($witrshowdata['witr_list_text_widget']) && ! empty($witrshowdata['witr_list_text_widget'])){
							foreach($witrshowdata['witr_list_text_widget'] as $witr_text_single){?>	
							
								
								<div class="about-content">
									<span>
										<!-- icon -->
										<?php if ( $is_new || $migrated ) : ?>
											<?php Icons_Manager::render_icon( $witr_text_single['witr_icon_item'], [ 'aria-hidden' => 'true' ] ); ?>
										<?php
										else : ?>							
												<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
										<?php endif; ?>					
										<!-- end icon -->								
										
										<?php echo $witr_text_single['witr_textr_content']. "<br />"; ?>
									</span>
									
								</div>								
												
								<?php } ?>		
							<?php } ?>
							
						</div>
					</div>

				<?php


    } /* funcition end */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Text_widget() );
