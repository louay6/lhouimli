<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Service2 extends Widget_Base {

    public function get_name() {
        return 'witr_section_service2';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Service2', 'softd' );
    }

    public function get_icon() {
        return 'eicon-featured-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === w_service2 start === */
			$this->start_controls_section(
				'witr_field_display_service2',
				[
					'label' => esc_html__( 'witr service Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			/* service style check  witr_style_service */
			$this->add_control(
				'witr_style_service',
				[
					'label' => esc_html__( 'Service style', 'softd' ),
					'type' => Controls_Manager::SELECT,
					'default' => '1',					
					'options' => [
						'1' => esc_html__( 'Service Style 1 ', 'softd' ),
						'2' => esc_html__( 'Service Style 2', 'softd' ),
						'3' => esc_html__( 'Service Style 3', 'softd' ),
						'4' => esc_html__( 'Service Style 4', 'softd' ),
						'5' => esc_html__( 'Service Style 5', 'softd' ),
						'6' => esc_html__( 'Service Style 6', 'softd' ),
						'7' => esc_html__( 'Service Style 7', 'softd' ),
						'8' => esc_html__( 'Service Style 8', 'softd' ),

					],
				]
			);
				$this->add_control(
					'witr_min_heading',
					[
						'label' => esc_html__( 'Recommended Min 2 Column Set Now', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_service' =>['7'],
						],						
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
							'condition' => [
								'witr_style_service' => ['2','6','7'],
							],							
							'selectors' => [
								'{{WRAPPER}} .witr_content_service2,{{WRAPPER}} .all_service2_color' => 'text-align: {{VALUE}}',
							],							
						]
					);	
				$this->add_control(
					'witr_more_heading',
					[
						'label' => esc_html__( 'Recommended Image Size= 370x300px', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_service' =>['1','2','7'],
						],						
					]
				);
				
					$this->add_control(
						'witr_service2_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],
							'condition' => [
								'witr_style_service' =>['1','2','7'],
							],							
						]
					);
				/* witr_show_animate */
				$this->add_control(
					'witr_show_animate',
					[
						'label' => esc_html__( 'Show Image Animation ', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'no',
						'separator'=>'before',							
					]
				);	



			/* witr_service_title */	
			$this->add_control(
				'witr_service_title',
				[
					'label' => esc_html__( 'Top Title', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Add title Here', 'softd' ),
					'placeholder' => esc_attr__( 'Type your service title here', 'softd' ),
					'condition' => [
						'witr_style_service' =>['7','8'],
					],					
				]
			);				
				/* witr_service2_title */	
					$this->add_control(
						'witr_service2_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Type your title here', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your service2 title here', 'softd' ),						
						]
					);
					/* witr_service2_title_link */	
					$this->add_control(
						'witr_service2_title_link',
						[
							'label' => esc_html__( 'Title Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert Title link here.','softd'),
							'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
							'show_external' => true,
							
						]
					);					
				/* witr_service2_content	*/
					$this->add_control(
						'witr_service2_content',
						[
							'label' => esc_html__( ' Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'We help businesses elevate their through custom service software development product design.', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);
				/* Time witr_service2_list */
				$this->add_control(
					'witr_service2_list',
					[
						'label' => esc_html__( 'service2 List Items ', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'use list from here, must be use the stcructure ex <ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li></ul> OR TEXT USE EX-<ul><li><p>Text List</p></li></ul> OR TEXT USE EX-<ul><li><span>Text List</span></li></ul> OR TEXT USE EX-<ul><li>Text List</li></ul>', 'softd' ),
						'default' => '<ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li><li><a href="#">example list 3</a></li></ul>',
						'placeholder' => esc_attr__( 'Type your List Item here', 'softd' ),
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);					
					
				/* witr_icon_item */
					$this->add_control(
						'witr_show_icon',
						[
							'label' => esc_html__( 'Show Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'separator'=>'before',
							'return_value' => 'yes',
							'default' => 'yes',							
						]
					);
					/* witr_icon_item */					
					$this->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Icon', 'softd' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'softd' ),
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


					/* witr_show_custom */
					$this->add_control(
						'witr_show_custom',
						[
							'label' => esc_html__( 'Show custom Icon', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',							
						]
					);
					/*  witr_service2_custom	*/
					$this->add_control(
						'witr_service2_custom',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet name here', 'softd' ),
							'default' => esc_html__( 'icofont-adjust', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),
							'condition' => [
								'witr_show_custom' => 'yes',
							],							
						]
					);					
					
					
				/* witr_show_image witr_service2_image */
					$this->add_control(
						'witr_show_image',
						[
							'label' => esc_html__( 'Show Icon Image', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',							
						]
					);	
				
					$this->add_control(
						'witr_icon_service2_image',
						[
							'label' => esc_html__( 'Choose Icon Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => '',
							],
							'condition' => [
								'witr_show_image' => 'yes',
							],							
						]
					);					

					/* witr_show_button */
					$this->add_control(
						'witr_show_button',
						[
							'label' => esc_html__( 'Show Button', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',							
						]
					);
					
				/* witr_service2_button	*/
					$this->add_control(
						'witr_service2_button',
						[
							'label' => esc_html__( 'Button text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Read More', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
							'condition' => [						
								'witr_show_button' => 'yes',
							],							
						]
					);
				/*  witr_button_link */	
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
								'witr_show_button' => 'yes',
							],							
						]
					);						
					/*  witr_service2_pluse	*/
					$this->add_control(
						'witr_service2_pluse',
						[
							'label' => esc_html__( 'Button Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon - https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/v4.7.0/icons/ name here', 'softd' ),
							'default' => esc_html__( 'icofont-plus', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Button Icon Name here', 'softd' ),
							'condition' => [
								'witr_style_service' => ['7'],
							],							
						]
					);		
					
			$this->end_controls_section();
			/* === end w_service2 ===  */

			
	   /*=============================================================================================================================
										START TO STYLE
		=============================================================================================*/			

		/*=== start single Feature style ====*/
		$this->start_controls_section(
			'witr_style_ss_option',
			[
				'label' => esc_html__( 'Single Box', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);		
		
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_box_background',
					'label' => esc_html__( 'box Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_back_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color',
				]
			);
			
			
				/* Box after heading 2 */
				$this->add_responsive_control(
					'witr_h2_service2',
					[
						'label' => esc_html__( 'Bottom Line Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'condition' => [
							'witr_style_service' =>['3','5','6','8'],
						],						
					]
				);				
				/* box after hover */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_bl2_hover_background',
						'label' => esc_html__( 'box2 Hover Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .medi_singleService:after',
						'condition' => [
							'witr_style_service' =>['3','5','6','8'],
						],						
					]
				);			
				/* Box before 2 */
				$this->add_responsive_control(
					'witr_h_service2',
					[
						'label' => esc_html__( ' Bottom Hover Line Color', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'condition' => [
							'witr_style_service' =>['3','5','6','8'],
						],						
					]
				);
				/* box before */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_bl_background',
						'label' => esc_html__( 'box2 Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .medi_singleService:before',
						'condition' => [
							'witr_style_service' =>['3','5','6','8'],
						],						
					]
				);
			
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_boxs2_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_service2_color',
					]
				);
			
			
				/* witr_border_style */
				$this->add_control(
					'witr_border_box_style',
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
							'{{WRAPPER}} .witr_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				$this->add_control(
					'witr_borde_box',
					[
						'label' => esc_html__( 'Border', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .witr_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_border_box_style' => ['solid','double','dotted','dashed','default'],
						],
					]							
					
				);
				/* border_color */
				$this->add_control(
					'witr_border_box_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						
						'selectors' => [
							'{{WRAPPER}} .witr_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_box_style' => ['solid','double','dotted','dashed','default'],
						],
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_borderc_radius',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				/* Box margin */
				$this->add_responsive_control(
					'witr_box_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_back_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_back_service2,{{WRAPPER}} .all_color_s3,{{WRAPPER}} .all_service2_color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				$this->add_control(
					'witr_moref_heading',
					[
						'label' => esc_html__( 'Hover Option', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_boxsh2_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_service2_color:hover',
					]
				);				
				/* border_color */
				$this->add_control(
					'witr_border_boxh_color',
					[
						'label' => esc_html__( 'Border Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						
						'selectors' => [
							'{{WRAPPER}} .witr_service2:hover,{{WRAPPER}} .all_color_s3:hover,{{WRAPPER}} .all_service2_color:hover' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_box_style' => ['solid','double','dotted','dashed','default'],
						],
					]
				);				
				
				/*======== Box heading 2 ==========*/
				$this->add_responsive_control(
					'witr_box2',
					[
						'label' => esc_html__( ' Box 2 Option', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box2_background',
						'label' => esc_html__( 'box2 Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_service2_box',
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);
				/* Box background heading 2 */
				$this->add_responsive_control(
					'witr_box2_hover',
					[
						'label' => esc_html__( 'Background Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);				
				/* box background hover */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box2_hover_background',
						'label' => esc_html__( 'box2 Hover Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_service2_box:hover',
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);
				
				
				/* Box margin */
				$this->add_responsive_control(
					'witr_box2_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_service2_box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_box2_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_service2_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['2'],
						],						
					]
				);				
				/* Box padding */
				$this->add_responsive_control(
					'witr_box2_spadding',
					[
						'label' => esc_html__( ' Hover Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_service2_style4_s:hover .witr_service2_style4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_service' =>['4'],
						],						
					]
				);						
				
			$this->end_controls_section();
			/* === end single Feature ===  */		
		

		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_icon_option',
			[
				'label' => esc_html__( 'Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
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
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i',
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'icon_size',
					[
						'label' => esc_html__( ' Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_icon_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Text Align', 'softd' ),
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
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderf',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i',
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
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i',
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
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'mix-blend-mode: {{VALUE}}',
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
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);				
				
				/* witr_position_style */
				$this->add_responsive_control(
					'witr_position_style',
					[
						'label' => esc_html__( 'Icon Position', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'' => esc_html__( 'Default', 'softd' ),
							'absolute' => esc_html__( 'absolute', 'softd' ),
							'fixed' => esc_html__( 'fixed', 'softd' ),
							'inherit' => esc_html__( 'inherit', 'softd' ),
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i' => 'position: {{VALUE}};',
						],							
					]
				);
				/* witr_icon_top */
				$this->add_responsive_control(
					'witr_icon_top',
					[
						'label' => esc_html__( 'Icon Top', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 500,
							],
							'%' => [
								'min' => -100,
								'max' => 100,
							],		
						],
						'condition' => [
							'witr_position_style' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/* witr_icon_left */
				$this->add_responsive_control(
					'witr_icon_left',
					[
						'label' => esc_html__( 'Icon Left', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 500,
							],
							'%' => [
								'min' => -100,
								'max' => 100,
							],	
						],
						'condition' => [
							'witr_position_style' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);				
				/* icon margin */
				$this->add_responsive_control(
					'witr_icon_margin',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_icon_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color i,{{WRAPPER}} .all_color_s3 i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .all_service2_color i:hover,{{WRAPPER}} .all_color_s3 i:hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_icon',
							'label' => esc_html__( ' Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .all_service2_color i:hover,{{WRAPPER}} .all_color_s3 i:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .all_service2_color i:hover,{{WRAPPER}} .all_color_s3 i:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					

					$this->end_controls_tab();
					/*=== end icon hover style ====*/
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon style ====*/

		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'witr_style_span_option',
			[
				'label' => esc_html__( 'Button Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' =>['7'],
				],				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'span_colors' );
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colors_span',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);
				/* Icon Color */
				$this->add_control(
					'witr_span_color',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'color: {{VALUE}}',
						],					
					]
				);
				
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_span_background',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .all_service2_color span',
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'icon_size_span',
					[
						'label' => esc_html__( ' Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/*  icon width */
				$this->add_responsive_control(
					'witr_icon_width_span',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_icon_height_span',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon line height */
				$this->add_responsive_control(
					'witr_icon_line_height_span',
					[
						'label' => esc_html__( 'Line Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align_span',
					[
						'label' => esc_html__( 'Text Align', 'softd' ),
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
							'{{WRAPPER}} .all_service2_color span' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borde_span',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_service2_color span',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_border_radius_span',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow_span',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_service2_color span',
					]
				);					
				/*  Rotate */
				$this->add_responsive_control(
					'witr_rotate_span',
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
							'{{WRAPPER}} .pluse_btn' => 'transform: rotate({{SIZE}}{{UNIT}});',
						],
					]
				);				
				
				/* witr_position_style */
				$this->add_responsive_control(
					'witr_position_style_span',
					[
						'label' => esc_html__( 'Icon Position', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'' => esc_html__( 'Default', 'softd' ),
							'absolute' => esc_html__( 'absolute', 'softd' ),
							'fixed' => esc_html__( 'fixed', 'softd' ),
							'inherit' => esc_html__( 'inherit', 'softd' ),
						],
						'selectors' => [
							'{{WRAPPER}} .pluse_btn' => 'position: {{VALUE}};',
						],							
					]
				);
				/* witr_icon_top */
				$this->add_responsive_control(
					'witr_icon_top_span',
					[
						'label' => esc_html__( 'Icon Top', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 500,
							],
							'%' => [
								'min' => -100,
								'max' => 100,
							],		
						],
						'condition' => [
							'witr_position_style_span' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .pluse_btn' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);
				
				/* witr_icon_left */
				$this->add_responsive_control(
					'witr_icon_left_span',
					[
						'label' => esc_html__( 'Icon Left', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 500,
							],
							'%' => [
								'min' => -100,
								'max' => 100,
							],	
						],
						'condition' => [
							'witr_position_style_span' => ["absolute","fixed"],
						],						
						'selectors' => [
							'{{WRAPPER}} .pluse_btn' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);				
				/* icon margin */
				$this->add_responsive_control(
					'witr_icon_margin_span',
					[
						'label' => esc_html__( ' Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* icon padding */
				$this->add_responsive_control(
					'witr_icon_padding_span',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_service2_color span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
			
					/*=== start icon hover style ====*/
					$this->start_controls_tab(
						'witr_icon_span_hover',
						[
							'label' => esc_html__( 'Icon Hover', 'softd' ),
						]
					);
					/*  primary hover color */
					$this->add_control(
						'witr_hover_span_color',
						[
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .all_service2_color span:hover' => 'color: {{VALUE}}',
							],
						]
					);
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_icon_span',
							'label' => esc_html__( ' Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .all_service2_color span:hover',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color_span',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .all_service2_color span:hover' => 'border-color: {{VALUE}}',
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
			'witr_style_image_Option',
			[
				'label' => esc_html__( ' Images Option', 'softd' ),
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
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => 25,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color img,{{WRAPPER}} .all_color_s3 img' => 'width: {{SIZE}}{{UNIT}};',
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
							'min' => 25,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color img,{{WRAPPER}} .all_color_s3 img' => 'height: {{SIZE}}{{UNIT}};',
					],
				]			
			);
			/* witr_border_style */
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'witr_img_bb',
					'label' => esc_html__( 'Border', 'softd' ),
					'selector' => '{{WRAPPER}} .single_seivice_ani img',
				]
			);			
			/* border_radius */
			$this->add_control(
				'witr_border_img_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'description' =>esc_html__('When Show Animation Set Not Work Border Radius','softd'),
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color img,{{WRAPPER}} .all_color_s3 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* image margin */
			$this->add_responsive_control(
				'witr_image_margin',
				[
					'label' => esc_html__( ' Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color img,{{WRAPPER}} .all_color_s3 img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* image padding */
			$this->add_responsive_control(
				'witr_image_padding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color img,{{WRAPPER}} .all_color_s3 img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/

		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title2',
			[
				'label' => esc_html__( 'Top Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_service' =>['7','8'],
				],				
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
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_service2_color h2,{{WRAPPER}} .all_service2_color h2 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_service2_color h2:hover,{{WRAPPER}} .all_service2_color h2 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_service2_color h2,{{WRAPPER}} .all_service2_color h2 a',
				]
			);			
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin2',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding2',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_service2_color h3,{{WRAPPER}} .all_service2_color h3 a,{{WRAPPER}} .all_color_s3 h3 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_service2_color h3:hover,{{WRAPPER}} .all_service2_color h3 a:hover,{{WRAPPER}} .all_color_s3 h3 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_service2_color h3,{{WRAPPER}} .all_service2_color h3 a,{{WRAPPER}} .all_color_s3 h3 a',
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
						'{{WRAPPER}} .all_service2_color h3,{{WRAPPER}} .all_color_s3 h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_service2_color h3,{{WRAPPER}} .all_color_s3 h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_service2_color p,{{WRAPPER}} .all_color_s3 p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_service2_color p,{{WRAPPER}} .all_color_s3 p',
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
						'{{WRAPPER}} .all_service2_color p,{{WRAPPER}} .all_color_s3 p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_service2_color p,{{WRAPPER}} .all_color_s3 p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/
		

		/*=== start witr list style ====*/
		$this->start_controls_section(
			'witr_style_option_list',
			[
				'label' => esc_html__( ' List Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_style_service' =>['2'],
					],				
			]
		);	

			/* color */
			$this->add_control(
				'witr_list_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_service2_color ul li a,{{WRAPPER}} .all_service2_color ul li p,{{WRAPPER}} .all_service2_color ul li span,{{WRAPPER}} .all_service2_color ul li' => 'color: {{VALUE}}',
					],
				]
			);
			/* Hover color */
			$this->add_control(
				'witr_listh_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_service2_color ul li a:hover,{{WRAPPER}} .all_service2_color ul li p:hover,{{WRAPPER}} .all_service2_color ul li span:hover,{{WRAPPER}} .all_service2_color ul li:hover' => 'color: {{VALUE}}',
					],
				]
			);
			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_list_typography',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
					'selector' => '{{WRAPPER}} .all_service2_color ul li a,{{WRAPPER}} .all_service2_color ul li p,{{WRAPPER}} .all_service2_color ul li span,{{WRAPPER}} .all_service2_color ul li',
				]
			);		

			/* list margin */
			$this->add_responsive_control(
				'list_margin',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color ul li a,{{WRAPPER}} .all_service2_color ul li p,{{WRAPPER}} .all_service2_color ul li span,{{WRAPPER}} .all_service2_color ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* list padding */
			$this->add_responsive_control(
				'list_padding',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_service2_color ul li a,{{WRAPPER}} .all_service2_color ul li p,{{WRAPPER}} .all_service2_color ul li span,{{WRAPPER}} .all_service2_color ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		 $this->end_controls_section();
		/*=== end  witr list style ====*/
		

		
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
							'label' => esc_html__( 'Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_ACCENT,
							],							
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .witr_btn_all_color a' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_btn_all_color a',
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
							'selector' => '{{WRAPPER}} .witr_btn_all_color a',
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
								'{{WRAPPER}} .witr_btn_all_color a' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .witr_btn_all_color a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color a' => 'border-color: {{VALUE}}',
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
								'{{WRAPPER}} .witr_btn_all_color a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_btn_all_color a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'softd' ),
							'selector' => '{{WRAPPER}} .witr_btn_all_color:hover',
						]
					);
					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		
		
		
		
		
		/*=== start witr content style ====*/
		$this->start_controls_section(
			'witr_style_alloption_content',
			[
				'label' => esc_html__( 'All Text Hover Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_alcontent_color',
				[
					'label' => esc_html__( 'Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_service2_color:hover h3 a,{{WRAPPER}} .all_service2_color:hover h3,{{WRAPPER}} .all_color_s3:hover h3 a,{{WRAPPER}} .all_color_s3:hover h3,{{WRAPPER}} .all_service2_color:hover p,{{WRAPPER}} .all_color_s3:hover p,{{WRAPPER}} .all_service2_color:hover i,{{WRAPPER}} .all_color_s3:hover i,{{WRAPPER}} .witr_btn_all_color:hover a,{{WRAPPER}} .all_service2_color:hover ul li a' => 'color: {{VALUE}}',
					],
				]
			);

		 $this->end_controls_section();
		/*=== end  witr content style ====*/		
		
			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
	switch ( $witrshowdata['witr_style_service'] ) {



		case '8':
		?>
		
				<div class="wirt_s2_s8 medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
					<?php endif; ?>				
					<!-- icon image -->
					<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
					<?php } ?>					
					<!-- custom icon -->
					<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
						<div class="witr_custom_icons">
							<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
							<?php } ?>
						</div>	
					<?php } ?>	

					<div class="wirt_s2_s5i">
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
						<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
						<?php }	?>
						<?php } ?>
						<!-- sub title -->
						<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
							<h2><?php echo $witrshowdata['witr_service_title']; ?></h2>
						<?php } ?>						
						<!-- content -->
						<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
							<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
						<?php } ?>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
							<div class="witr_ser_btnb witr_btn_all_color">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
							</div>
						<?php } ?>	
					</div>

				</div>		
		
		<?php 
		break;	
		case '7':
		?>
		<div class="witr_service2_7 all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="witr_2service_content">				
					<!-- image -->
					<div class="witr_service7s_image">
						<?php if(isset($witrshowdata['witr_service2_image']['url']) && ! empty($witrshowdata['witr_service2_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_service2_image']['url'];?>" alt="" />
						<?php } ?>
					</div>				
				
				
					<div class="witr_titles_content">
						<!-- top title -->
						<?php if(isset($witrshowdata['witr_service_title']) && ! empty($witrshowdata['witr_service_title'])){?>
							<h2><?php echo $witrshowdata['witr_service_title']; ?></h2>
						<?php } ?>					
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
						<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
						<?php }	?>
						<?php } ?>
						<!-- content -->
						<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
							<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
						<?php } ?>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
							<div class="witr_ser_btnb witr_btn_all_color">
								<a class="pluse_btn1" href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?>
									<!-- icon -->
									<?php if ( $is_new || $migrated ) :
										Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
									else : ?>
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									<?php endif; ?>							
									<!-- icon image -->
									<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
										<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
									<?php } ?>					
									<!-- custom icon -->
									<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
										<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
											<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
										<?php } ?>
									<?php } ?>
									
								</a>
								
								<?php if(isset($witrshowdata['witr_service2_pluse']) && ! empty($witrshowdata['witr_service2_pluse'])){?>
									<div class="pluse_btn">
										<span class="<?php echo $witrshowdata['witr_service2_pluse']; ?>"></span>
									</div>	
								<?php } ?>								

							</div>
						<?php } ?>						
					</div>
					
				

			
			</div>
		</div>		
		
		<?php 
		break;
		case '6':
		?>
		
				<div class="medi_singleService wirt_s2_s5 wirt_s2_s6 all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
					<?php endif; ?>				
					<!-- icon image -->
					<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
					<?php } ?>					
					<!-- custom icon -->
					<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
						<div class="witr_custom_icons">
							<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
							<?php } ?>
						</div>	
					<?php } ?>	

					<div class="wirt_s2_s5i">
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
						<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
						<?php }	?>
						<?php } ?>					
						<!-- content -->
						<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
							<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
						<?php } ?>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
							<div class="witr_ser_btnb witr_btn_all_color">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
							</div>
						<?php } ?>	
					</div>

				</div>		
		
		<?php 
		break;
		
	case '5':
		?>
		
				<div class="medi_singleService wirt_s2_s5 all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
					<?php endif; ?>				
					<!-- icon image -->
					<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
					<?php } ?>					
					<!-- custom icon -->
					<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
						<div class="witr_custom_icons">
							<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
							<?php } ?>
						</div>	
					<?php } ?>	

					<div class="wirt_s2_s5i">
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
						<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
						<?php }	?>
						<?php } ?>					
						<!-- content -->
						<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
							<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
						<?php } ?>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
							<div class="witr_ser_btnb witr_btn_all_color">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
							</div>
						<?php } ?>	
					</div>

				</div>		
		
		<?php 
		break;		
		case '4':
		?>
	
	
				<div class="witr_service2_style4_s <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<div class=" all_service2_color witr_service2_style4">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>				
						<!-- icon image -->
						<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
						<?php } ?>					
						<!-- custom icon -->
						<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
							<div class="witr_custom_icons">
								<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
									<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
								<?php } ?>
							</div>	
						<?php } ?>					
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
						<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
						<?php }	?>
						<?php } ?>					
						<!-- content -->
						<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
							<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
						<?php } ?>

						<div class=" witr_button_s2">
							<!-- button -->
							<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
								<div class="witr_sn_button witr_btn_all_color">
									<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
								</div>
							<?php } ?>	
						</div>
					</div>

				</div>
		
		<?php 
		break;
		case '3':
		?>
		
				<div class="medi_singleService all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
					<?php endif; ?>				
					<!-- icon image -->
					<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
					<?php } ?>					
					<!-- custom icon -->
					<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
						<div class="witr_custom_icons">
							<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
							<?php } ?>
						</div>	
					<?php } ?>					
					<!-- title -->
					<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
					<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
					<?php }	?>
					<?php } ?>					
					<!-- content -->
					<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
						<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
					<?php } ?>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
						<div class="witr_ser_btnb witr_btn_all_color">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
						</div>
					<?php } ?>					

				</div>		
		
		<?php 
		break;
		
		case '2':
		?>
		<div class="witr_service2 all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="witr_front_content">
				<!-- image -->
				<div class="witr_service2_image">
					<?php if(isset($witrshowdata['witr_service2_image']['url']) && ! empty($witrshowdata['witr_service2_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_service2_image']['url'];?>" alt="" />
					<?php } ?>
					
					<div class="witr_back_service2">
						<div class="witr_content_service2">					
							<!-- content -->
							<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
								<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
							<?php } ?>
							<!-- list -->
							<?php if(isset($witrshowdata['witr_service2_list']) && ! empty($witrshowdata['witr_service2_list'])){?>
								<?php echo $witrshowdata['witr_service2_list']; ?>
							<?php }?>						
							<!-- button -->
							<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
								<div class="witr_service2_btnb witr_btn_all_color">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
								</div>
							<?php } ?>
						</div>
					</div>					
				</div>	
				
				<div class="witr_service2_box">
					<div class="witr_service2_icon">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>				
						<!-- image -->
						<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
						<?php } ?>
					</div>
					
					<!-- custom icon -->
					<?php if($witrshowdata['witr_show_custom']=='yes' ){ ?>
						<div class="witr_custom2_icon">
							<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
								<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
							<?php } ?>
						</div>	
					<?php } ?>					
					
					<div class="witr_titles">
						<!-- title -->
						<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
						<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
						<?php }	?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php 
		break;	
		default:		
?>
	
					<div class="witr_single_service3 all_service2_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">	
					
						<div class="witr_service3_thumb">
							<?php if(isset($witrshowdata['witr_service2_image']['url']) && ! empty($witrshowdata['witr_service2_image']['url'])){?>
								<div class="witr_service3_thposi">
									<img src="<?php echo $witrshowdata['witr_service2_image']['url'];?>" alt="" />
								</div>		
							<?php } ?>							
							<div class="witr_service3_box">
								<div class="witr_service3_icon">
									<!-- icon -->
									<?php if ( $is_new || $migrated ) :
										Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
									else : ?>
										<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
									<?php endif; ?>
									<!-- custom icon -->
									<?php if(isset($witrshowdata['witr_service2_custom']) && ! empty($witrshowdata['witr_service2_custom'])){?>	
										<i class="<?php echo $witrshowdata['witr_service2_custom']; ?>"></i>
									<?php } ?>				
									<!-- image -->
									<?php if(isset($witrshowdata['witr_icon_service2_image']['url']) && ! empty($witrshowdata['witr_icon_service2_image']['url'])){?>
										<img src="<?php echo $witrshowdata['witr_icon_service2_image']['url'];?>" alt="" />
									<?php } ?>				
								</div>			
								
								<div class="witr_service3_content">
									<!-- title -->
									<?php if(isset($witrshowdata['witr_service2_title']) && ! empty($witrshowdata['witr_service2_title'])){?>
									<?php if($witrshowdata['witr_service2_title_link'] ['url']){?> 
										<h3><a href="<?php echo $witrshowdata['witr_service2_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_title']; ?></a></h3>
									<?php }else{ ?>
									<h3><?php echo $witrshowdata['witr_service2_title']; ?> </h3>
									<?php }	?>
									<?php } ?>									
									<!-- content -->
									<?php if(isset($witrshowdata['witr_service2_content']) && ! empty($witrshowdata['witr_service2_content'])){?>
										<p><?php echo $witrshowdata['witr_service2_content']; ?> </p>		
									<?php } ?>
								</div>	 
							</div>	 
									
							
							<!-- button -->
							<?php if(isset($witrshowdata['witr_service2_button']) && ! empty($witrshowdata['witr_service2_button'])){?>
							<div class="witr_btn_inner">
								<div class="witr_service3_btn witr_btn_all_color">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_service2_button']; ?></a>
								</div>
							</div>	
							<?php } ?>								
							
						</div>
					</div>
			

				
		<?php		
		break;
		
	} //switch
    } // function end
	


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Service2() );
