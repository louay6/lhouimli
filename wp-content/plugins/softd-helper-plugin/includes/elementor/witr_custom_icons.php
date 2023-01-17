<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Custom_Icons extends Widget_Base {

    public function get_name() {
        return 'witr_section_custom';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Custom Icons', 'softd' );
    }

    public function get_icon() {
        return 'eicon-social-icons';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			/* === witr_pricing start === */
			$this->start_controls_section(
				'witr_field_display_social_icons',
				[
					'label' => esc_html__( 'Witr Social Icons Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);

					/* text_align */
					$this->add_responsive_control(
						'text_align',
						[
							'label' => esc_html__( 'Text Alignment', 'softd' ),
							'type' => Controls_Manager::CHOOSE,
							'options' => [
								'left'    => [
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
							],
							'default' => 'center',
							'selectors' => [
								'{{WRAPPER}} .witr_custom_icons' => 'text-align: {{VALUE}};',
							],
						]
					);
					
					$repeater = new Repeater();					
	
					/* Custom Icon	*/
					$repeater->add_control(
						'witr_custom_icon',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon - https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet Icon name Filed here', 'softd' ),
							'default' => esc_html__( 'icofont-star', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),							
						]
					);
					/*  witr_icons_link */	
					$repeater->add_control(
						'witr_cusicon_link',
						[
							'label' => esc_html__( 'Set Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert list link here.','softd'),
							'placeholder' => esc_attr__( 'https://your_site.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],							
						]
					);											
					/* witr_social_icons */
					$this->add_control(
						'witr_custom_list',
						[
							'label' => esc_html__( 'Custom Icons Item', 'softd' ),
							'type' => Controls_Manager::REPEATER,
							'fields' => $repeater->get_controls(),
							'separator'=>'before',							
							'default' => [
								[
									'witr_custom_icon' => esc_html__( 'icofont-star', 'softd' ),
								],

							],
							'title_field' => '{{{ witr_custom_icon }}}',							
						]
					);
				

			$this->end_controls_section();
			/*=== end witr_text widget start ====*/
			
			
			
			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/				
		
		/*=== start witr icon custom style ====*/
		$this->start_controls_section(
			'witr_custom_icon_option',
			[
				'label' => esc_html__( 'Custom Icon Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
		
			/*=== start icon_tabs style ====*/
			$this->start_controls_tabs( 'icon_colorsc' );
				/*=== start icon_normal style ====*/
				$this->start_controls_tab(
					'witr_icon_colorc_normal',
					[
						'label' => esc_html__( 'Normal', 'softd' ),
					]
				);

				/* Icon Color */
				$this->add_control(
					'witr_primaryc_color',
					[
						'label' => esc_html__( ' Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'global' => [
							'default' => Global_Colors::COLOR_SECONDARY,
						],						
						'separator'=>'before',
						'selectors' => [
							'{{WRAPPER}} .witr_custom_icons i' => 'color: {{VALUE}}',
						],					
					]
				);
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_iconc_background',
						'label' => esc_html__( ' Custom Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_custom_icons i',
					]
				);				
				/*  icon Size */
				$this->add_responsive_control(
					'iconc_sizec',
					[
						'label' => esc_html__( 'Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_custom_icons i' => 'font-size: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_custom_icons i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_custom_icons i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_custom_icons i' => 'line-height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( ' Icon Align', 'softd' ),
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
							'{{WRAPPER}} .witr_custom_icons i' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderc',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .witr_custom_icons i',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_border_radiusc',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_custom_icons i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
				/* icon margin */
				$this->add_responsive_control(
					'witr_iconc_margin',
					[
						'label' => esc_html__( ' margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .serIcon,{{WRAPPER}} .witr_custom_icons i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				/* icon padding */
				$this->add_responsive_control(
					'witr_iconc_padding',
					[
						'label' => esc_html__( ' Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_custom_icons i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
				

				$this->end_controls_tab();
				/*=== end icon normal style ====*/
			
					/*=== start icon hover style ====*/
					$this->start_controls_tab(
						'witr_iconc_color_hover',
						[
							'label' => esc_html__( 'Icon Hover', 'softd' ),
						]
					);
					/*  primary hover color */
					$this->add_control(
						'witr_hover_primaryc_color',
						[
							'label' => esc_html__( ' Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .witr_custom_icons i:hover' => 'color: {{VALUE}}',
							],
						]
					);					

					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_colorc',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .witr_custom_icons i:hover' => 'border-color: {{VALUE}}',
							],
						]
					);					
					/* hover Icon background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_hover_iconc',
							'label' => esc_html__( ' Hover Background', 'softd' ),
							'types' => [ 'classic', 'gradient'],
							'selector' => '{{WRAPPER}} .witr_custom_icons i:hover',
						]
					);
				/* border_radius */
				$this->add_control(
					'witr_borderh_radiusc',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_custom_icons i:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);					
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/
		$this->end_controls_section();
		/*=== end witr_icon style ====*/
			

			
			
			
			
	

     } /* funcition end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
			?>					
				<!-- footer socials -->
				<div class="witr_custom_icons">
							
							<?php if(isset($witrshowdata['witr_custom_list']) && ! empty($witrshowdata['witr_custom_list'])){
								foreach($witrshowdata['witr_custom_list'] as $witr_custom){?>											
									<!-- custom icon -->
									<a href="<?php echo $witr_custom['witr_cusicon_link']['url'];?>">
										<i class="<?php echo $witr_custom['witr_custom_icon']; ?>"></i>
									</a>
								<?php } ?>
							<?php } ?>
				
				</div>							
	
			<?php 


    } /* funcition end */


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Custom_Icons() );
