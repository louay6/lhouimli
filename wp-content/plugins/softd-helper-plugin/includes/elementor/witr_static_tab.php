<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Static_Tab extends Widget_Base {

    public function get_name() {
        return 'witr_section_static tab';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Static Tab', 'softd' );
    }

    public function get_icon() {
        return 'eicon-tabs';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === w_static tab start === */
			$this->start_controls_section(
				'witr_field_display_static tab',
				[
					'label' => esc_html__( 'witr static tab options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			/* service style check  witr_style_feature */
				$this->add_control(
					'witr_style_static_tabs',
					[
						'label' => esc_html__( 'Active Menu', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'default' => '1',
						'options' => [
							'1' => esc_html__( 'Tab Menu 1', 'softd' ),
							'2' => esc_html__( 'Tab Menu 2', 'softd' ),
							'3' => esc_html__( 'Tab Menu 3', 'softd' ),
						],						
					]
				);					
				/* menu 1 class */
				$this->add_control(
					'menu_active1',
					[
						'label' => esc_html__( 'Memu Active', 'softd' ),
						'type' => Controls_Manager::TEXT,						
						'description' => esc_html__( 'Set " active show " below field', 'softd' ),
						'default' => 'active show',
						'condition' => [
							'witr_style_static_tabs' => ['1'],
						],
					]
				);
				/* menu 2 class */
				$this->add_control(
					'menu_active2',
					[
						'label' => esc_html__( 'Memu Active', 'softd' ),
						'type' => Controls_Manager::TEXT,						
						'description' => esc_html__( 'Set " active show " below field', 'softd' ),
						'default' => 'active show',
						'condition' => [
							'witr_style_static_tabs' => ['2'],
						],
					]
				);
				/* menu 3 class */
				$this->add_control(
					'menu_active3',
					[
						'label' => esc_html__( 'Memu Active', 'softd' ),
						'type' => Controls_Manager::TEXT,						
						'description' => esc_html__( 'Set " active show " below field', 'softd' ),
						'default' => 'active show',
						'condition' => [
							'witr_style_static_tabs' => ['3'],
						],
					]
				);
				
				/* static Tab Menu 1 */	
					$this->add_control(
						'witr_static_tab_menu1',
						[
							'label' => esc_html__( 'Tab Menu 1', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Video', 'softd' ),
							'placeholder' => esc_attr__( 'Type your static tab title here', 'softd' ),
							'separator' => 'before',	
						]
					);
					/*  witr_button_select 1 */
					$this->add_control(
						'witr_slectv_button',
						[
							'label' => esc_html__('Select Video Lnik', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'description' =>esc_html__('select link here','softd'),
							'label_block' =>true,							
							'default' => ' ',
							'options' => [
								' ' => esc_html__( 'Select Video Link', 'softd' ),
								'youtube' => esc_html__( 'Youtube Video Link', 'softd' ),
								'vimeo' => esc_html__( 'Vimeo Vimeo Link', 'softd' ),
							],							
						]
					);
					
					/* witr_show_button  witr_yvideo_link	*/					
					$this->add_control(
						'witr_yvideo_link',
						[
							'label' => esc_html__( 'Youtube Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Enter the Youtube URL. For example: https://youtu.be/BS4TUd7FJSg','softd'),
							'placeholder' => esc_attr__( 'https://youtu.be/BS4TUd7FJSg', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://youtu.be/BS4TUd7FJSg',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_slectv_button' => ["youtube"],
							],							
						]
					);						
					/* main banner witr_vmvideo_link */						
					$this->add_control(
						'witr_vmvideo_link',
						[
							'label' => esc_html__( 'Vimeo Video Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Enter the Vimeo URL. For example: https://vimeo.com/174008281','softd'),
							'placeholder' => esc_attr__( 'https://vimeo.com/174008281', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => 'https://vimeo.com/174008281',
								'is_external' => true,
								'nofollow' => true,
							],	
							'condition' => [
								'witr_slectv_button' => ["vimeo"],
							],							
						]
					);		
					
				/* show icon witr_show_icon witr_icon_item */
					$this->add_control(
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
					$this->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Icon', 'softd' ),
							'type' => Controls_Manager::ICONS,
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
					
				/* show image witr_show_image witr_static tab_image */
					$this->add_control(
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
				
					$this->add_control(
						'witr_statictab_image',
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
										
				/* static tab menu 2 */	
					$this->add_control(
						'witr_static_tab_menu2',
						[
							'label' => esc_html__( 'Tab Menu 2', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Press', 'softd' ),
							'placeholder' => esc_attr__( 'Type your static tab title here', 'softd' ),
							'separator' => 'before',	
						]
					);
	
				/* team title witr_team_title */	
				$this->add_control(
					'witr_tab_title',
					[
						'label' => esc_html__( 'Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
						'default' => esc_html__( 'Cum sociis natoque penatibus et magnis', 'softd' ),
						'placeholder' => esc_attr__( 'Type your team title here', 'softd' ),						
					]
				);					
					
				/* text widget content tab_content */	
				$this->add_control(
					'witr_text_w_content',
					[
						'label' => '',
						'type' => Controls_Manager::WYSIWYG,
						'dynamic' => [
							'active' => true,
						],
						'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'softd' ),						
					]
				);		
				
					/* static Tab Menu 3 */	
					$this->add_control(
						'witr_static_tab_menu3',
						[
							'label' => esc_html__( 'Tab Menu 3', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'placeholder' => esc_attr__( 'Type your static tab title here', 'softd' ),
							'separator' => 'before',	
						]
					);
					/* static tab show witr_post_per_page */
					$this->add_control(
						'witr_post_per_page',
						[
							'label' => __( 'Show Number Of Events', 'softd' ),
							'type' => Controls_Manager::NUMBER,				
							'min' => 1,
							'max' => 500,
							'step' => 1,
							'default' => 2,
						]
					);
					/* static tab witr_adc_blog */
					$this->add_control(
						'witr_adc_blog',
						[
							'label' => esc_html__( 'Events ASC/DSC style', 'softd' ),
							'type' => Controls_Manager::SELECT,					
							'options' => [
								'DESC'	=> esc_html__( 'Descending', 'softd' ),
								'ASC'	=> esc_html__( 'Ascending', 'softd' )
							],
							'default' => 'DESC',
						]
					);					
					/* static tab title witr_static tab_title */	
					$this->add_control(
						'witr_statictab_title',
						[
							'label' => esc_html__( 'Show your latest 2 event Automatic', 'softd' ),
							'type' => Controls_Manager::HEADING,			
						]
					);					

					
		
					
			$this->end_controls_section();
			/* === end w_static tab ===  */

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

		

		/*=== Start Witr filter style ====*/

		$this->start_controls_section(
			'witr_style_filter_option',
			[
				'label' => esc_html__( 'Witr Filter Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
				
				/* filter Color */
				$this->add_control(
					'witr_filter_color',
					[
						'label' => esc_html__( 'Filter Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'global' => [
							'default' => Global_Colors::COLOR_PRIMARY,
						],						
						'separator'=>'before',
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a' => 'color: {{VALUE}}',
						],
						
					]
				);
				/* filter hover color */
				$this->add_control(
					'witr_filter_hover_color',
					[
						'label' => esc_html__( 'Filter Hover Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a:hover' => 'color: {{VALUE}}',
						],
					]
				);								
				/*  filter font size */
				$this->add_responsive_control(
					'witr_filter_size',
					[
						'label' => esc_html__( 'Filter Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);		
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_filter_ttpy_color',
						'label' => esc_html__( 'Typography', 'softd' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
						],
						'selector' => '{{WRAPPER}} .softd-tab li a',
					]
				);
				/* Filter background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_fitab_background',
						'label' => esc_html__( 'Filter Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .softd-tab li a,{{WRAPPER}} .softd-tab',
					]
				);			
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_filter_border',
						'label' => esc_html__( 'Border', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .softd-tab li a',
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_border_radius1',
					[
						'label' => esc_html__( 'Filter Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Filter background heading */
				$this->add_control(
					'witr_heading_background',
					[
						'label' => esc_html__( 'Filter Background Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,

					]
				);
				
				/* Filter background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_filter_background',
						'label' => esc_html__( 'Filter Background Hover', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .softd-tab li a:hover',
					]
				);			
			/* filter margin */
			$this->add_responsive_control(
				'witr_filter_margin',
				[
					'label' => esc_html__( 'Filter Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .softd-tab li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* Filter padding */
			$this->add_responsive_control(
				'witr_filter_padding',
				[
					'label' => esc_html__( 'Filter Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .softd-tab li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);				

		 $this->end_controls_section();
		/*=== end  witr Filter Text style ====*/		

		/*=== Start Witr Active filter style ====*/

		$this->start_controls_section(
			'witr_active_filter_option',
			[
				'label' => esc_html__( 'Witr Active Filter Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 										
				
				/* Active Filter background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_active_filter_background',
						'label' => esc_html__( 'Active Background', 'softd' ),
						'types' => ['classic','gradient'],
						'separator'=>'before',
						'selector' => '{{WRAPPER}} .softd-tab li a.active',
					]
				);				
				/* filter active color */
				$this->add_control(
					'witr_filter_active_color',
					[
						'label' => esc_html__( 'Filter Active Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a.active' => 'color: {{VALUE}}',
						],
					]
				);			
				
				/* Active border_color */
				$this->add_control(
					'witr_active_border_color',
					[
						'label' => esc_html__( 'Active Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,						
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a.active' => 'border-color: {{VALUE}}',
						],
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_borders_radius',
					[
						'label' => esc_html__( 'Active Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .softd-tab li a.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
		 $this->end_controls_section();
		/*=== end  witr Filter Active style ====*/		

		/*=== start witr Video style ====*/
		$this->start_controls_section(
			'witr_style_icon_option',
			[
				'label' => esc_html__( 'Witr Video All Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);

		/* video heading */
		$this->add_control(
			'witr_imagevideo',
			[
				'label' => esc_html__( 'Image Overlay BG', 'softd' ),
				'type' => Controls_Manager::HEADING,
				'separator'=>'before',
			]
		);		
		/* video background */
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'witr_video_background',
				'label' => esc_html__( 'Image Overlay', 'softd' ),
				'types' => ['classic','gradient'],
				'selector' => '{{WRAPPER}} .video_image:before',
			]
		);		
		/* Icon heading */
		$this->add_control(
			'witr_iconh',
			[
				'label' => esc_html__( 'Icon Color Option', 'softd' ),
				'type' => Controls_Manager::HEADING,
				'separator'=>'before',
			]
		);		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'icon_colors' );
			
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colors_normal',
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
						'selectors' => [
							'{{WRAPPER}} .video_icon a i' => 'color: {{VALUE}}',
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
							'{{WRAPPER}} .video_icon a i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .video_icon a i' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_icon_height',
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
							'{{WRAPPER}} .video_icon a i' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .video_icon a i' => 'line-height: {{SIZE}}{{UNIT}};',
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
						'selector' => '{{WRAPPER}} .video_icon a i',
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_border_style',
						'label' => esc_html__( 'Icon Border', 'softd' ),
						'selector' => '{{WRAPPER}} .video_icon a i',
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
							'{{WRAPPER}} .video_icon a i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .video_icon a i',
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
							'{{WRAPPER}} .video_icon a i' => 'mix-blend-mode: {{VALUE}}',
						],
					]
				);					
				/*  Rotate */
				$this->add_responsive_control(
					'witr_rotate',
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
							'{{WRAPPER}} .video_icon a i' => 'transform: rotate({{SIZE}}{{UNIT}});',
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
							'{{WRAPPER}} .video_icon a i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .video_icon a i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .video_icon a i:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .video_icon a i:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .video_icon a i:hover' => 'border-color: {{VALUE}}',
							],
						]
					);

					/*  Hover Rotate */
					$this->add_responsive_control(
						'witr_rotate_hover',
						[
							'label' => esc_html__( 'Rotate Hover', 'softd' ),
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
								'{{WRAPPER}} .video_icon a i:hover' => 'transform: rotate({{SIZE}}{{UNIT}});',
							],
						]
					);					

					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();
 
		/*=== end witr Video style ====*/



		/*=== start witr Press style ====*/

		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Witr Press All Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);	
		/* Title heading */
		$this->add_control(
			'witr_titleh',
			[
				'label' => esc_html__( 'Title Color Option', 'softd' ),
				'type' => Controls_Manager::HEADING,
				'separator'=>'before',
			]
		);		
			/* color */
			$this->add_control(
				'witr_title_color',
				[
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .tab_title_content h2' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_color',
				[
					'label' => esc_html__( 'Title Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,				
					'selectors' => [
						'{{WRAPPER}} .tab_title_content h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .tab_title_content h2',
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
						'{{WRAPPER}} .tab_title_content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .tab_title_content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
		/* Content heading */
		$this->add_control(
			'witr_Contenth',
			[
				'label' => esc_html__( 'Content Color Option', 'softd' ),
				'type' => Controls_Manager::HEADING,
				'separator'=>'before',
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
						'{{WRAPPER}} .wic_text_block p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .wic_text_block p',
				]
			);		

			/* content margin */
			$this->add_responsive_control(
				'witr_content_margin',
				[
					'label' => __( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wic_text_block p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'witr_content_padding',
				[
					'label' => __( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .wic_text_block p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);			
			
			
		 
		 $this->end_controls_section();
		/*=== end  witr_Press style ====*/


		/*=== start witr Event style ====*/

		$this->start_controls_section(
			'witr_style_option_event',
			[
				'label' => esc_html__( 'Witr Event All Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);	

			/* Date heading */
			$this->add_control(
				'witr_ditlehe',
				[
					'label' => esc_html__( 'Date Color Option', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
				]
			);
			/* Date color */
			$this->add_control(
				'witr_ditle_colore',
				[
					'label' => esc_html__( 'Date Color', 'softd' ),
					'type' => Controls_Manager::COLOR,					
					'selectors' => [
						'{{WRAPPER}} .event_date_list' => 'color: {{VALUE}}',
					],
				]
			);		
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_dtpye_color',
					'label' => esc_html__( 'Date Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .event_date_list',
				]
			);		
			/* Date background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_date',
					'label' => esc_html__( 'Date Background', 'softd' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .event_date_list',
				]
			);		
		

			/* Title heading */
			$this->add_control(
				'witr_titlehe',
				[
					'label' => esc_html__( 'Title Color Option', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
				]
			);		
			/* color */
			$this->add_control(
				'witr_title_colore',
				[
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .event_page_title h2 a' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_colore',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,				
					'selectors' => [
						'{{WRAPPER}} .event_page_title h2 a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpye_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .event_page_title h2 a',
				]
			);		
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margine',
				[
					'label' => __( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .event_page_title h2 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_paddinge',
				[
					'label' => __( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .event_page_title h2 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			/* Content heading */
			$this->add_control(
				'witr_Contenthe',
				[
					'label' => esc_html__( 'Content Color Option', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
				]
			);			
			
			/* color */
			$this->add_control(
				'witr_contente_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'selectors' => [
						'{{WRAPPER}} .event_pcontent p' => 'color: {{VALUE}}',
					],
				]
			);

			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_contenet_typography',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
					'selector' => '{{WRAPPER}} .event_pcontent p',
				]
			);		

			/* content margin */
			$this->add_responsive_control(
				'witr_content_margine',
				[
					'label' => __( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .event_pcontent p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'witr_content_paddinge',
				[
					'label' => __( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .event_pcontent p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			/* Meta heading */
			$this->add_control(
				'witr_Conticoh',
				[
					'label' => esc_html__( 'Meta Color Option', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
				]
			);	

			/* Text Color */
			$this->add_control(
				'witr_text_color',
				[
					'label' => esc_html__( 'Text Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .softd_event_icon span' => 'color: {{VALUE}}',
					],					
				]
					);
			/* Text typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_txtpye_color',
					'label' => esc_html__( 'Text Typography', 'softd' ),
					'selector' => '{{WRAPPER}} .softd_event_icon span',
				]
			);

			/* Text margin */
			$this->add_responsive_control(
				'witr_text_margine',
				[
					'label' => __( 'Text Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .softd_event_icon span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* Text padding */
			$this->add_responsive_control(
				'witr_text_paddinge',
				[
					'label' => __( 'Text Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .softd_event_icon span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
			

			/* Icon Color */
			$this->add_control(
				'witr_icon2_color',
				[
					'label' => esc_html__( 'Icon Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .softd_event_icon span i' => 'color: {{VALUE}}',
					],					
				]
			);

			/*  icon font size */
			$this->add_responsive_control(
				'icon_size2',
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
						'{{WRAPPER}} .softd_event_icon span i' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			/* Icon margin */
			$this->add_responsive_control(
				'witr_icon2_margine',
				[
					'label' => __( 'Icon Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .softd_event_icon span i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* Icon padding */
			$this->add_responsive_control(
				'witr_icon2_paddinge',
				[
					'label' => __( 'Icon Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .softd_event_icon span i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);


				
		 
		 $this->end_controls_section();
		/*=== end  witr Event style ====*/



			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		$active_tab_class1=$active_tab_class2=$active_tab_class3="";
		if(isset($witrshowdata['menu_active1']) && ! empty($witrshowdata['menu_active1'])){
			$active_tab_class1=$witrshowdata['menu_active1'];
		}
		if(isset($witrshowdata['menu_active2']) && ! empty($witrshowdata['menu_active2'])){
			$active_tab_class2=$witrshowdata['menu_active2'];
		}
		if(isset($witrshowdata['menu_active3']) && ! empty($witrshowdata['menu_active3'])){
			$active_tab_class3=$witrshowdata['menu_active3'];
		}
		
		 if( $witrshowdata['witr_slectv_button']=="youtube"){
			 $youtvimeo= $witrshowdata['witr_yvideo_link'] ['url'];
		 }elseif($witrshowdata['witr_slectv_button']=="vimeo"){
			  $youtvimeo= $witrshowdata['witr_vmvideo_link'] ['url'];
		 }else{
			 
		 }; 		
        $witr_post_per_page       = ! empty( $witrshowdata['witr_post_per_page'] ) ? $witrshowdata['witr_post_per_page'] : 2;
        $witr_adc_blog    = ! empty( $witrshowdata['witr_adc_blog'] ) ? $witrshowdata['witr_adc_blog'] : 'DESC';

		 
?>
		
	<div class="tab_area">					
		<ul class="softd-tab nav nav-tabs">
			<!-- menu 1 -->
			<?php if(isset($witrshowdata['witr_static_tab_menu1']) && ! empty($witrshowdata['witr_static_tab_menu1'])){?>
				<li><a class="<?php echo $active_tab_class1; ?>" data-toggle="tab" href="#video" aria-expanded="false"><?php echo $witrshowdata['witr_static_tab_menu1']; ?></a></li>	
			<?php } ?>
			<!-- menu 1 -->
			<?php if(isset($witrshowdata['witr_static_tab_menu2']) && ! empty($witrshowdata['witr_static_tab_menu2'])){?>
				<li><a class="<?php echo $active_tab_class2; ?> " data-toggle="tab" href="#press" aria-expanded="false"><?php echo $witrshowdata['witr_static_tab_menu2']; ?></a></li>	
			<?php } ?>
			<!-- menu 1 -->
			<?php if(isset($witrshowdata['witr_static_tab_menu3']) && ! empty($witrshowdata['witr_static_tab_menu3'])){?>
				<li><a class="<?php echo $active_tab_class3; ?>" data-toggle="tab" href="#event" aria-expanded="true"><?php echo $witrshowdata['witr_static_tab_menu3']; ?></a></li>	
			<?php } ?>					
		</ul>
		<!---- video area ---->
		<div class="tab-content">												
			<div class="tab-pane fade <?php echo $active_tab_class1; ?>" id="video">
				<div class="video_area">
					<div class="col-lg-12 col-md-12">
						<div class="tab_content1">
							<div class="single_video">
								<div class="video_image">
								<!-- image -->
									<?php if(isset($witrshowdata['witr_statictab_image']['url']) && ! empty($witrshowdata['witr_statictab_image']['url'])){?>
										<img src="<?php echo $witrshowdata['witr_statictab_image']['url'];?>" alt="">		
									<?php } ?>
								</div>
								<div class="choose_video_icon">
									<div class="video_icon">
											<a class="video-vemo-icon venobox vbox-item" data-vbtype="<?php echo $witrshowdata['witr_slectv_button']; ?>" data-autoplay="true" href="<?php echo $youtvimeo; ?>">											
											<?php if ( $is_new || $migrated ) :?>
												<?php Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );?>
												<?php else : ?>
												<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
											<?php endif; ?> 
										</a>	
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			
			<!---- press area ---->			
			<div class="tab-pane fade <?php echo $active_tab_class2; ?>" id="press">
				<div class="col-lg-12 col-md-12">
					<div class="wic_tab_content">
						<div class="tab_title_content">
							<!-- title -->
							<?php if(isset($witrshowdata['witr_tab_title']) && ! empty($witrshowdata['witr_tab_title'])){?>
								<h2><?php echo $witrshowdata['witr_tab_title']; ?> </h2>	
							<?php }?>						
						</div>
						<div class=" wic_text_block">
							<!-- content -->
							<?php if(isset($witrshowdata['witr_text_w_content']) && ! empty($witrshowdata['witr_text_w_content'])){?>
								<p><?php echo $witrshowdata['witr_text_w_content']; ?> </p>	
							<?php }?>
						</div>
					</div>									
				</div>
			</div>
			<!---- event area ---->
			<div class="tab-pane fade <?php echo $active_tab_class3; ?>" id="event">
				<div class="tab-event">	
					<div class="col-md-12">
						<?php 
							$args = array(
								'post_type'            => 'em_event',
								'post_status'          => 'publish',
								'ignore_sticky_posts'  => 1,
								'posts_per_page'       => $witr_post_per_page,
								'order'                => $witr_adc_blog,
							);
							
							$posts = new \WP_Query($args);					
						
						
						
						while($posts->have_posts()):$posts->the_post();
						
						?>
						<?php $event_time  = get_post_meta( get_the_ID(),'_softd_event_time', true ); 
						$event_address  = get_post_meta( get_the_ID(),'_softd_event_address', true ); 
						$event_day  = get_post_meta( get_the_ID(),'_softd_event_day', true ); 
						$event_month  = get_post_meta( get_the_ID(),'_softd_event_month', true );  ?>					
					
						<div class="softd_single_event">
							<div class="softd_event_thumb">
								<?php if($event_day || $event_month){?>
									<div class="event_date_list">
										<span><?php if($event_day){ echo esc_html($event_day);}?></span>
										<span><?php if($event_month){ echo esc_html($event_month);}?></span>
									</div>
								<?php } ?>								
							</div>
							<div class="event_content_area">
								<div class="event_page_title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div>
								<div class="event_pcontent">
									<p><?php  echo wp_trim_words( get_the_content(), 18, ' ' ); ?></p>
								</div>
								<?php if($event_time || $event_address){?>
								<div class="softd_event_icon">
									<span><i class="fas fa-clock"></i><?php if($event_time){ echo esc_html($event_time);}?></span>
									<span><i class="fas fa-map-marker-alt"></i><?php if($event_address){ echo esc_html($event_address);}?></span>
								</div>
								<?php } ?>
							</div>
						</div>
                    <?php endwhile;
					 wp_reset_query(); wp_reset_postdata();
					?>						
																	
					</div>
				</div>
			</div>							
		</div>					
	</div>	


	
	<?php	
		


    } // function end
	


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Static_Tab() );
