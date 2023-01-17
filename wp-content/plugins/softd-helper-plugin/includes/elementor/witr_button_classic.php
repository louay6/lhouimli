<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Btns extends Widget_Base {

    public function get_name() {
        return 'witr_section_btns';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Classic Button ', 'softd' );
    }

    public function get_icon() {
        return 'eicon-button';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

  
    protected function register_controls() {
		
			
			

			/* === w_button start === */
			$this->start_controls_section(
				'witr_field_display_button',
				[
					'label' => esc_html__( 'Witr Buttons Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
					/* witr_align */					
					$this->add_responsive_control(
						'witr_align',
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
								'{{WRAPPER}} .witr_classic_button_area' => 'text-align: {{VALUE}}',
							],							
						]
					);			
					/* witr_Available_button	*/		
					$this->add_control(
						'witr_banner_av',
						[
							'label' => esc_html__( 'Available Text', 'softd' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Available for:', 'softd' ),
							'placeholder' => esc_attr__( 'Type your text here', 'softd' ),				
						]
					);
					/* Windows Button text */
					$this->add_control(
						'witr_banner_button',
						[
							'label' => esc_html__( 'Windows Button text', 'softd' ),
							'label_block' =>true,
							'separator' => 'before',
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Try For Free', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),				
						]
					);
					/* Windows Button link */	
					$this->add_control(
						'witr_button_link',
						[
							'label' => esc_html__( 'Windows Button Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link here.','softd'),
							'placeholder' => esc_attr__( 'https://webitrangpur.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],						
						]
					);
					/* Windows Icon	*/
					$this->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Windows Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'separator' => 'before',
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons Ex=icofont-brand-windows or Themify Icon -https://themify.me/themify-icons Ex=ti-user or Fontawesome Icon - https://fontawesome.com/cheatsheet Ex=fab fa-windows name here', 'softd' ),
							'default' => esc_html__( 'icofont-brand-windows', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Icon name here', 'softd' ),							
						]
					);					
					/* Windows Button 2 text */					
					$this->add_control(
						'witr_banner_button2',
						[
							'label' => esc_html__( 'Windows Button 2 text', 'softd' ),
							'label_block' =>true,
							'separator' => 'before',
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Windows Classic', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),				
						]
					);
				/* Windows Button link 2 */	
					$this->add_control(
						'witr_button_link2',
						[
							'label' => esc_html__( 'Windows Button 2 Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link here.','softd'),
							'placeholder' => esc_attr__( 'https://webitrangpur.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],						
						]
					);
					
					/* Apple Button text */
					$this->add_control(
						'witr_banner_button3',
						[
							'label' => esc_html__( 'Apple Button text', 'softd' ),
							'label_block' =>true,
							'separator' => 'before',
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Try For Free', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),				
						]
					);
					/* Apple Button link */	
					$this->add_control(
						'witr_button_link3',
						[
							'label' => esc_html__( 'Apple Button Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link here.','softd'),
							'placeholder' => esc_attr__( 'https://webitrangpur.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],						
						]
					);
					/* Apple Icon	*/
					$this->add_control(
						'witr_icon_item2',
						[
							'label' => esc_html__( 'Apple Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'separator' => 'before',
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons Ex=icofont-brand-apple or Themify Icon -https://themify.me/themify-icons Ex=ti-apple or Fontawesome Icon - https://fontawesome.com/cheatsheet Ex=fab fa-apple name here', 'softd' ),
							'default' => esc_html__( 'icofont-brand-apple', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Icon name here', 'softd' ),							
						]
					);					
					/* Apple Button text 2 */
					$this->add_control(
						'witr_banner_button4',
						[
							'label' => esc_html__( 'Apple Button 2 text', 'softd' ),
							'label_block' =>true,
							'separator' => 'before',
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),							
							'default' => esc_html__( 'Apple Classic', 'softd' ),
							'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),				
						]
					);
					/*Apple Button link 2*/	
					$this->add_control(
						'witr_button_link4',
						[
							'label' => esc_html__( 'Apple Button 2 Link', 'softd' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert button link here.','softd'),
							'placeholder' => esc_attr__( 'https://webitrangpur.com', 'softd' ),
							'show_external' => true,
							'default' => [
								'url' => '#',
								'is_external' => true,
								'nofollow' => true,
							],						
						]
					);					
			

			$this->end_controls_section();
			/* === end witr_button ===  */			

			
			
			
			
			/*================================================================================ Color Style =======================================================================*/

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
							'label' => esc_html__( 'Normal Button', 'softd' ),
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
									'{{WRAPPER}} .witr_bbtn' => 'color: {{VALUE}}',
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
								'selector' => '{{WRAPPER}} .witr_btn, {{WRAPPER}} .witr_bbtn',
							]
						);	
						/* Button background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_background',
								'label' => esc_html__( 'button Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => ' {{WRAPPER}} .witr_bbtn',
							]
						);
						/* witr_border_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_border_style',
								'label' => esc_html__( ' Border', 'softd' ),
								'default' => 'no',							
								'selector' => '{{WRAPPER}} .witr_bbtn',
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
									'{{WRAPPER}} .witr_btn, {{WRAPPER}} .witr_bbtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
								],
								
							]
						);
						/* button margin */
						$this->add_responsive_control(
							'witr_button_margin',
							[
								'label' => esc_html__( 'Margin', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'separator'=>'before',
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .witr_btn, {{WRAPPER}} .witr_bbtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* button padding */
						$this->add_responsive_control(
							'witr_button_padding',
							[
								'label' => esc_html__( 'Padding', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'separator'=>'before',
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .witr_btn, {{WRAPPER}} .witr_bbtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
					

					$this->end_controls_tab();
					/*=== end button normal style ====*/

						/*=== start button hover style ====*/
						$this->start_controls_tab(
							'witr_button_colors_hover',
							[
								'label' => esc_html__( ' Hover Button', 'softd' ),
							]
						);

						/* hover_color */
						$this->add_control(
							'witr_button_hover_color',
							[
								'label' => esc_html__( ' Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'selectors' => [
									'{{WRAPPER}} .witr_bbtn:hover,{{WRAPPER}} .witr_btn:hover .a_active i,{{WRAPPER}} .witr_bbtn:hover .a_active i' => 'color: {{VALUE}}',
								],
							]
						);					
							
						/* Button Hover background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_hover_background',
								'label' => esc_html__( 'button  Background', 'softd' ),
								'types' => ['classic','gradient'],
								'selector' => '{{WRAPPER}} .witr_bbtn:hover',
							]
						);					
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Color', 'softd' ),
								'type' => Controls_Manager::COLOR,							
								'selectors' => [
									'{{WRAPPER}} .witr_bbtn:hover' => 'border-color: {{VALUE}}',
								],
							]
						);										
						
						$this->end_controls_tab();
						/*=== end button hover style ====*/

					
					/*=== start witr_button_colors_active style ====*/
					$this->start_controls_tab(
						'witr_button_colors_active',
						[
							'label' => esc_html__( 'Active Button', 'softd' ),
						]
					);

					/* color */
					$this->add_control(
						'witr_button_act_color',
						[
							'label' => esc_html__( ' Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_ACCENT,
							],							
							'selectors' => [
								' {{WRAPPER}} .witr_btn' => 'color: {{VALUE}}',
							],
						]
					);					
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_button_act_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .witr_btn',
						]
					);					
					/* witr_border_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_border_act_style',
							'label' => esc_html__( 'Icon Border', 'softd' ),
							'default' => 'no',							
							'selector' => '{{WRAPPER}} .witr_btn',
						]
					);					
					
					$this->end_controls_tab();
					/*=== end button active style ====*/

					/*=== start witr_button_colors_active style ====*/
					$this->start_controls_tab(
						'witr_button_colors_activeh',
						[
							'label' => esc_html__( 'Active Hover', 'softd' ),
						]
					);

					/* color */
					$this->add_control(
						'witr_button_acth_color',
						[
							'label' => esc_html__( ' Text Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								' {{WRAPPER}} .witr_btn:hover' => 'color: {{VALUE}}',
							],
						]
					);					
					/* Button background */
					$this->add_group_control(
						Group_Control_Background::get_type(),
						[
							'name' => 'witr_button_acth_background',
							'label' => esc_html__( 'button Background', 'softd' ),
							'types' => ['classic','gradient'],
							'selector' => '{{WRAPPER}} .witr_btn:hover',
						]
					);					
						/* border_hover_color */
						$this->add_control(
							'witr_borderact_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'softd' ),
								'type' => Controls_Manager::COLOR,							
								'selectors' => [
									'{{WRAPPER}} .witr_btn:hover' => 'border-color: {{VALUE}}',
								],
							]
						);					
					
					$this->end_controls_tab();
					/*=== end button active Hover style ====*/		
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 $this->end_controls_section();
			/*=== end  witr button style ====*/	

			
		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option',
			[
				'label' => esc_html__( ' Text And Icon, Active Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			/* color */
			$this->add_control(
				'witr_iconac_color',
				[
					'label' => esc_html__( 'Icon Active Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'description' =>esc_html__('Active Icon Color Working Preview Page, Color Set And Preview Page Look','softd'),
					'selectors' => [
						'{{WRAPPER}} .a_active i' => 'color: {{VALUE}}',
					],
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
						'{{WRAPPER}} .btn_sh_area p' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .btn_sh_area p:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_color',
					'label' => esc_html__( 'Text Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .btn_sh_area p',
				]
			);

			/*  font size  */
			$this->add_responsive_control(
				'icon_size',
				[
					'label' => esc_html__( 'Icon Size', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 300,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .btn_sh_area p span i' => 'font-size: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .btn_sh_area p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding',
				[
					'label' => esc_html__( ' Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .btn_sh_area p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style ====*/			
			
			
	
			
    } /*==function end==*/


	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display(); 
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();

?>
		<!-- area -->
		<div class="witr_classic_button_area">
			<!-- btn default style -->
			<div class="witr_btn_style mr tx_op">
				<div class="witr_btn_sinner">	
					<?php if(isset($witrshowdata['witr_banner_button']) && ! empty($witrshowdata['witr_banner_button'])){?>
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>" class="witr_bbtn"><?php echo $witrshowdata['witr_banner_button']; ?>
							<span class="btn_w ">
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_icon_item']) && ! empty($witrshowdata['witr_icon_item'])){?>	
									<i class="<?php echo $witrshowdata['witr_icon_item']; ?>"></i>
								<?php } ?>											
							</span>
						</a>
					<?php } ?>							
					<?php if(isset($witrshowdata['witr_banner_button2']) && ! empty($witrshowdata['witr_banner_button2'])){?>
						<a href="<?php echo $witrshowdata['witr_button_link2'] ['url']; ?>" class="witr_btn"><?php echo $witrshowdata['witr_banner_button2']; ?>
						</a>
					<?php } ?>							
				</div>						
			</div>
			<!-- btn default style -->
			<div class="witr_btn_style mr  btn_none tx_cl">
				<div class="witr_btn_sinner">	
					<?php if(isset($witrshowdata['witr_banner_button3']) && ! empty($witrshowdata['witr_banner_button3'])){?>
						<a href="<?php echo $witrshowdata['witr_button_link3'] ['url']; ?>" class="witr_bbtn"><?php echo $witrshowdata['witr_banner_button3']; ?>
							<span class="btn_c">
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_icon_item2']) && ! empty($witrshowdata['witr_icon_item2'])){?>	
									<i class="<?php echo $witrshowdata['witr_icon_item2']; ?>"></i>
								<?php } ?>							
							</span>									
						</a>
					<?php } ?>
					<?php if(isset($witrshowdata['witr_banner_button4']) && ! empty($witrshowdata['witr_banner_button4'])){?>
						<a href="<?php echo $witrshowdata['witr_button_link4'] ['url']; ?>" class="witr_btn"><?php echo $witrshowdata['witr_banner_button4']; ?>
						</a>
					<?php } ?>							
				</div>						
			</div>
			
			<div class="btn_sh_area">
				<p>
					<?php if(isset($witrshowdata['witr_banner_av']) && ! empty($witrshowdata['witr_banner_av'])){?>
						<?php echo $witrshowdata['witr_banner_av']; ?>
					<?php } ?>						
					<span class="btn_w ">
						<!-- custom icon -->
						<?php if(isset($witrshowdata['witr_icon_item']) && ! empty($witrshowdata['witr_icon_item'])){?>	
							<i class="<?php echo $witrshowdata['witr_icon_item']; ?>"></i>
						<?php } ?>				
					</span>
					<span class="btn_c">
						<!-- custom icon -->
						<?php if(isset($witrshowdata['witr_icon_item2']) && ! empty($witrshowdata['witr_icon_item2'])){?>	
							<i class="<?php echo $witrshowdata['witr_icon_item2']; ?>"></i>
						<?php } ?>
					</span>					
				
				</p>
			</div>
		</div>
		<!-- end area -->
  

<?php

    } // function end
	
	

}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Btns() );
