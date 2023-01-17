<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_S_image extends Widget_Base {

    public function get_name() {
        return 'witr_section_s_image';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Single Image', 'softd' );
    }

    public function get_icon() {
        return 'eicon-image';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_image start === */
			$this->start_controls_section(
				'witr_field_display_s_image',
				[
					'label' => esc_html__( 'witr Single Image Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
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
						'{{WRAPPER}} .single_image_area' => 'text-align: {{VALUE}}',
					],						
				]
			);			
				/* SHOW IMAGE witr_show_image witr_image_image */
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
				/* witr_image_image */
				$this->add_control(
					'witr_image_image',
					[
						'label' => esc_html__( 'Choose Single Image', 'softd' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
						'condition' => [
							'witr_show_image' => 'yes',
						],							
					]
				);
			/* top title witr_top_title	*/
				$this->add_control(
					'witr_top_title',
					[
						'label' => esc_html__( 'Title', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' =>'',
						'separator' => 'before',
						'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
						'placeholder' => esc_attr__( 'Type your title here', 'softd' ),						
					]
				);
				/* witr_service_title_link */	
				$this->add_control(
					'witr_service_title_link',
					[
						'label' => esc_html__( 'Title Link', 'softd' ),
						'type' => Controls_Manager::URL,
						'description' =>esc_html__('Insert Title link here.','softd'),
						'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
						'show_external' => true,
						
					]
				);				
				/* witr_middle_title	*/
				$this->add_control(
					'witr_middle_title',
					[
						'label' => esc_html__( 'Content', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'default' =>'',
						'separator' => 'before',
						'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),						
						'placeholder' => esc_attr__( 'Type your content here', 'softd' ),							
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
						]
					);				
												
			
			$this->end_controls_section();
			/* === end witr_image ===  */			
			
			
		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
		
		

		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( 'Single Images option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			
			
				/*  image width */
				$this->add_responsive_control(
					'witr_image_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',						
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
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .single_image img' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  image Max width */
				$this->add_responsive_control(
					'witr_image_maxwidth',
					[
						'label' => esc_html__( 'Max width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',						
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
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .single_image img' => 'max-width: {{SIZE}}{{UNIT}};',
						],
					]
				);
						/* witr_left */
						$this->add_responsive_control(
							'witr_left',
							[
								'label' => esc_html__( 'Left', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'description' => esc_html__( 'When Image Left then Left use.', 'softd' ),
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
									'{{WRAPPER}} .single_image' => 'left: {{SIZE}}{{UNIT}};',
								],
							]
						);
		
						/* witr_right */
						$this->add_responsive_control(
							'witr_right',
							[
								'label' => esc_html__( 'Right', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'description' => esc_html__( 'When Image Right then Right use.', 'softd' ),
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									'%' => [
										'min' => -100,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .single_image' => 'right: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .single_image img' => 'height: {{SIZE}}{{UNIT}};',
						],
					]			
				);
				/* background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'section_background',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => [ 'classic', 'gradient' ],
						'selector' => '{{WRAPPER}} .single_image::before',						
					]
				);
				/* background_overlay */
				$this->add_control(
					'background_overlay_opacity',
					[
						'label' => esc_html__( 'Opacity', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'default' => [
							'size' => .5,
						],
						'range' => [
							'px' => [
								'max' => 1,
								'step' => 0.01,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .single_image::before' => 'opacity: {{SIZE}};',
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
								'{{WRAPPER}} .single_image img' => 'transform: rotate({{SIZE}}{{UNIT}});',
							],							
						]
					);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_img_bb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .single_image img',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_single_br',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'description' =>esc_html__('When Show Animation 2 Set Not Work Border Radius','softd'),
						'selectors' => [
							'{{WRAPPER}} .single_image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .single_image' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .single_image' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_tx_ovei_title h2,{{WRAPPER}} .witr_tx_ovei_title h2 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_tx_ovei_title h2:hover,{{WRAPPER}} .witr_tx_ovei_title h2 a:hover' => 'color: {{VALUE}}',
					],
				]
			);			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_color',
					'label' => esc_html__( ' Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_tx_ovei_title h2,{{WRAPPER}} .witr_tx_ovei_title h2 a',
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
						'{{WRAPPER}} .witr_tx_ovei_title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_tx_ovei_title h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'witr_title_colorpi',
				[
					'label' => esc_html__( ' Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_tx_ovei_title p' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_ttpy_colorpi',
					'label' => esc_html__( ' Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
					'selector' => '{{WRAPPER}} .witr_tx_ovei_title p',
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
						'{{WRAPPER}} .witr_tx_ovei_title p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_tx_ovei_title p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/		
		

    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();

		
		?>	
		<div class="single_image_area">
			<div class="single_image <?php if($witrshowdata['witr_show_animate2']=='yes'){ ?>  single_img_ani <?php } ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  witr_not_ani <?php } ?>">
				<!-- image -->
				<?php if(isset($witrshowdata['witr_image_image']['url']) && ! empty($witrshowdata['witr_image_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_image_image']['url'];?>" alt="" />
				<?php } ?>

				<div class="witr_tx_ovei_title">
					<!-- title -->
					<?php if(isset($witrshowdata['witr_top_title']) && ! empty($witrshowdata['witr_top_title'])){?>
					<?php if($witrshowdata['witr_service_title_link'] ['url']){?> 
						<h2><a href="<?php echo $witrshowdata['witr_service_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_top_title']; ?></a></h2>
					<?php }else{ ?>
					<h2><?php echo $witrshowdata['witr_top_title']; ?> </h2>
					<?php }	?>
					<?php } ?>
					
					<!-- title content -->
					<?php if(isset($witrshowdata['witr_middle_title']) && ! empty($witrshowdata['witr_middle_title'])){?>
						<p><?php echo $witrshowdata['witr_middle_title']; ?></p>		
					<?php } ?>											
				</div>

			</div>
		</div>
			
			
		
			
		<?php	
		
		
		


    } /* function end */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_S_image() );
