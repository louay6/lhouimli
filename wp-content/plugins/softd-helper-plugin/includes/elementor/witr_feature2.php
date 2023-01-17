<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Feature2 extends Widget_Base {

    public function get_name() {
        return 'witr_section_feature2';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Feature2', 'softd' );
    }

    public function get_icon() {
        return 'eicon-featured-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === w_feature start === */
			$this->start_controls_section(
				'witr_field_display_feature',
				[
					'label' => esc_html__( 'witr feature options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);									
					/* Box Position */				
					$this->add_control(
						'witr_text_ltc',
						[
							'label' => esc_html__( 'Box Position', 'softd' ),
							'type' => Controls_Manager::CHOOSE,
							'default' => 'center',
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
						
				/* witr_style_feature2 */
				$this->add_control(
					'witr_style_feature2',
					[
						'label' => esc_html__( 'Feature style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'1' => esc_html__( 'Feature style 1', 'softd' ),
							'2' => esc_html__( 'Feature style 2', 'softd' ),

						],
						'default' => '1',
					]
				);					
					$this->add_control(
						'witr_feature2_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],
							'condition' => [
								'witr_style_feature2' =>['2'],
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
							'condition' => [
								'witr_style_feature2' =>['2'],
							],							
						]
					);					
					/* witr_feature_title */	
					$this->add_control(
						'witr_feature_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Add title Here', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your feature title here', 'softd' ),						
						]
					);
					/* witr_feature_title_link */	
					$this->add_control(
						'witr_feature_title_link',
						[
							'label' => esc_html__( 'Title Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert Title link here.','softd'),
							'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
							'show_external' => true,
							
						]
					);					
					/* witr_feature_content	*/
					$this->add_control(
						'witr_feature_content',
						[
							'label' => esc_html__( ' Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Lorem ipsum dolor ame elit, sed do eiusmod tempor incididunt utn labore.', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
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
							'condition' => [
								'witr_style_feature2' =>['1'],
							],							
						]
					);
					/*  witr_feature_custom	*/
					$this->add_control(
						'witr_feature_custom',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet name here', 'softd' ),
							'default' => esc_html__( 'icofont-adjust', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),
							'condition' => [
								'witr_show_custom' => 'yes',
								'witr_style_feature2' =>['1'],
							],							
						]
					);					
					
					
				/* witr_show_image witr_feature_image */
					$this->add_control(
						'witr_show_image',
						[
							'label' => esc_html__( 'Show Image', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',
							'condition' => [
								'witr_style_feature2' =>['1'],
							],							
						]
					);	
				
					$this->add_control(
						'witr_feature_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' =>'',
							],
							'condition' => [
								'witr_show_image' => 'yes',
								'witr_style_feature2' =>['1'],
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
					
				/* witr_feature_button	*/
					$this->add_control(
						'witr_feature_button',
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
		
		
					
			$this->end_controls_section();
			/* === end w_feature ===  */

			
	   /*==========================================================================================================================================================================
										START TO STYLE
		=========================================================================================================================================================================*/

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
						'selector' => '{{WRAPPER}} .witr_feature2,{{WRAPPER}} .medi_featureDetail',
					]
				);
				/* Background_Hover */
				$this->add_control(
					'witr_borderc_bhov',
					[
						'label' => esc_html__( 'Background Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
					]
				);				
				/* box hover background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_boxho_background',
						'label' => esc_html__( 'box Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_feature2:hover,{{WRAPPER}} .medi_featureDetail:hover',
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
							'{{WRAPPER}} .witr_feature2,{{WRAPPER}} .medi_featureDetail' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_feature2,{{WRAPPER}} .medi_featureDetail' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_feature2,{{WRAPPER}} .medi_featureDetail' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);

				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_single_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .medi_singleFeature',
					]
				);
				/* Background_Hover */
				$this->add_control(
					'witr_border_after',
					[
						'label' => esc_html__( 'After Background', 'softd' ),
						'type' => Controls_Manager::HEADING,
					]
				);				
				/* after background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_after_background',
						'label' => esc_html__( 'after Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .medi_singleFeature::after',
					]
				);
				
				/* Background_before */
				$this->add_control(
					'witr_border_before',
					[
						'label' => esc_html__( 'Before Background', 'softd' ),
						'type' => Controls_Manager::HEADING,
					]
				);				
				/* before background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_before_background',
						'label' => esc_html__( 'before Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .medi_singleFeature::before',
					]
				);
				/*  before after height */
				$this->add_responsive_control(
					'witr_afb_height',
					[
						'label' => esc_html__( 'Before After Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .medi_singleFeature::after,{{WRAPPER}} .medi_singleFeature::before' => 'height: {{SIZE}}{{UNIT}};',
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
				'condition' => [
					'witr_style_feature2' =>['1'],
				],				
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .witr_fea2_icon_top i',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'font-size: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderf',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_fea2_icon_top i',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_fea2_icon_top i',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'mix-blend-mode: {{VALUE}}',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'transform: rotate({{SIZE}}{{UNIT}});',
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
						'condition' => [
							'witr_style_feature2' =>['1'],
						],						
						'selectors' => [
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'position: {{VALUE}};',
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
							'witr_style_feature2' =>['1'],
						],						
						'selectors' => [
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'top: {{SIZE}}{{UNIT}};',
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
							'witr_style_feature2' =>['1'],
						],						
						'selectors' => [
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'left: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_fea2_icon_top i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_fea2_icon_top:hover i' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_fea2_icon_top:hover i',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .witr_fea2_icon_top:hover i' => 'border-color: {{VALUE}}',
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
			'witr_style_icon2_option',
			[
				'label' => esc_html__( 'Icon2 Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_feature2' =>['1'],
				],				
			]
		);
				/* Icon Color */
				$this->add_control(
					'witr_primary_colorb',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_feature2_icon i' => 'color: {{VALUE}}',
						],					
					]
				);			
				/*  icon font size */
				$this->add_responsive_control(
					'icon_sizeb',
					[
						'label' => esc_html__( ' Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_feature2_icon i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* opacity */
				$this->add_control(
					'opacity_icon',
					[
						'label' => esc_html__( 'Opacity', 'elementor' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'max' => 1,
								'min' => 0.10,
								'step' => 0.01,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .single_feature2:hover .witr_feature2_icon' => 'opacity: {{SIZE}};',
						],
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
						'{{WRAPPER}} .witr_feature2_icon' => 'top: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_feature2_icon' => 'left: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_feature2_icon' => 'right: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_feature2_icon' => 'bottom: {{SIZE}}{{UNIT}};',
					],
					
				]
			);					
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
						'{{WRAPPER}} .all_feature_color img' => 'width: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color img' => 'height: {{SIZE}}{{UNIT}};',
					],
				]			
			);
			/* border_radius */
			$this->add_control(
				'witr_border_img_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .all_feature_color img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/
		

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
						'{{WRAPPER}} .all_feature_color h3,{{WRAPPER}} .all_feature_color h3 a,{{WRAPPER}} .all_feature_color h2' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_feature_color h3:hover,{{WRAPPER}} .all_feature_color h3 a:hover,{{WRAPPER}} .all_feature_color h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_feature_color h3,{{WRAPPER}} .all_feature_color h3 a,{{WRAPPER}} .all_feature_color h2',
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
						'{{WRAPPER}} .all_feature_color h3,{{WRAPPER}} .all_feature_color h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color h3,{{WRAPPER}} .all_feature_color h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_feature_color p',
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
						'{{WRAPPER}} .all_feature_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'label' => esc_html__( 'Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_ACCENT,
							],							
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .witr_btn_all_color' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_btn_all_color',
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
							'selector' => '{{WRAPPER}} .witr_btn_all_color',
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
								'{{WRAPPER}} .witr_btn_all_color' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .witr_btn_all_color' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color' => 'border-color: {{VALUE}}',
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
								'{{WRAPPER}} .witr_btn_all_color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_btn_all_color:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_btn_all_color:hover',
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


		/*=== start witr_style_Image style ====*/
		$this->start_controls_section(
			'witr_style_Image Overlay',
			[
				'label' => esc_html__( 'Image Overlay Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

					/* Button Hover background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_img_background',
							'label' => esc_html__( 'Image Overlay BG', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .medi_featureThumb::after',
						]
					);

		 $this->end_controls_section();
		/*=== end  witr_style_Image style ====*/	

		

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
		
	switch ( $witrshowdata['witr_style_feature2'] ) {
		
		case '2':
		?>		
			<div class="medi_singleFeature all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
				<div class="medi_featureThumb">
					<!-- image -->
					<?php if(isset($witrshowdata['witr_feature2_image']['url']) && ! empty($witrshowdata['witr_feature2_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_feature2_image']['url'];?>" alt="" />
					<?php } ?>
				</div>
				<div class="medi_featureDetail">
					<!-- title -->
					<?php if(isset($witrshowdata['witr_feature_title']) && ! empty($witrshowdata['witr_feature_title'])){?>
					<?php if($witrshowdata['witr_feature_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_feature_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_feature_title']; ?> </h3>
					<?php }	?>
					<?php } ?>
					<!-- content -->
					<?php if(isset($witrshowdata['witr_feature_content']) && ! empty($witrshowdata['witr_feature_content'])){?>
						<p><?php echo $witrshowdata['witr_feature_content']; ?> </p>		
					<?php } ?>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
						<a class="witr_btn_all_color discover_more" href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?>
							<!-- icon -->
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?> ></i>
							<?php endif; ?>
						</a>
					<?php } ?>

				</div>
			</div>		
		<?php 
		break;
		
		default:
		?>
            <div class="all_feature_color single_feature2 text-<?php echo $witrshowdata['witr_text_ltc']; ?>">            
				<div class="witr_feature2">					
					<div class="witr_fea2_icon_top">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?> ></i>
						<?php endif; ?>
						<!-- custom icon -->
						<?php if(isset($witrshowdata['witr_feature_custom']) && ! empty($witrshowdata['witr_feature_custom'])){?>					
							<i class="<?php echo $witrshowdata['witr_feature_custom']; ?>"></i>
						<?php } ?>					
						<!-- image -->
						<?php if(isset($witrshowdata['witr_feature_image']['url']) && ! empty($witrshowdata['witr_feature_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_feature_image']['url'];?>" alt="" />
						<?php } ?>	
 					</div>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_feature_title']) && ! empty($witrshowdata['witr_feature_title'])){?>
					<?php if($witrshowdata['witr_feature_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_feature_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_feature_title']; ?> </h3>
					<?php }	?>
					<?php } ?>					
					<!-- content -->
					<?php if(isset($witrshowdata['witr_feature_content']) && ! empty($witrshowdata['witr_feature_content'])){?>
						<p><?php echo $witrshowdata['witr_feature_content']; ?> </p>		
					<?php } ?>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
						<div class="witr_feature_btn2">
							<a class="witr_btn_all_color" href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>
					
					<div class="witr_feature2_icon">						
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?> ></i>
						<?php endif; ?>
						<!-- custom icon -->
						<?php if(isset($witrshowdata['witr_feature_custom']) && ! empty($witrshowdata['witr_feature_custom'])){?>					
							<i class="<?php echo $witrshowdata['witr_feature_custom']; ?>"></i>
						<?php } ?>					
						<!-- image -->
						<?php if(isset($witrshowdata['witr_feature_image']['url']) && ! empty($witrshowdata['witr_feature_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_feature_image']['url'];?>" alt="" />
						<?php } ?>					
					</div>					
				</div> 	   
            </div> 
		<?php

		
		break;
	
		
	} 	
		

    } // function end
	

}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Feature2() );
