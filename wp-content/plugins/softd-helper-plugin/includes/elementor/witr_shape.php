<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Shape extends Widget_Base {

    public function get_name() {
        return 'witr_section_Shape';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Shape Box', 'softd' );
    }

    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === shape start === */
			$this->start_controls_section(
				'witr_field_display_image',
				[
					'label' => esc_html__( 'witr shape options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* counter style check  witr_style_counter */
				$this->add_control(
					'witr_style_counter',
					[
						'label' => esc_html__( 'Counter style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'description' => esc_html__( 'select your counter style from here', 'softd' ),
						'options' => [
							'1' => esc_html__( 'Shape Box Style', 'softd' ),
							'2' => esc_html__( 'Shape Image style', 'softd' ),
						],
						'default' => '1',
					]
				);
				/* text */
				$this->add_control(
					'witr_shape_title',
					[
						'label' => esc_html__( 'Text', 'softd' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'default' => esc_html__( 'softd', 'softd' ),
						'placeholder' => esc_attr__( 'Type your text here', 'softd' ),							
						'description' => esc_html__( 'Not use text, remove the text from field', 'softd' ),
						'condition' => [
							'witr_style_counter' => ['1'],
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
						'condition' => [
							'witr_style_counter' => ['2'],
						],						
					]
				);	
				/* witr_image_image */
				$this->add_control(
					'witr_image_image',
					[
						'label' => esc_html__( 'Choose Single Image', 'softd' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' =>'',
						],
						'condition' => [
							'witr_show_image' => 'yes',
							'witr_style_counter' => ['2'],
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
							'witr_style_counter' => ['2'],
						],						
					]
				);				
				

	
				/* witr_slides_to_show */ 		
				$this->add_control(
					'adt',
					[
						'label' => esc_html__( 'animation-duration', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 100,
						'step' => 1,
						'default' => 5,
					]
				);				
				/* image_infinite */
				$this->add_control(
					'atf',
					[
						'label' => esc_html__( 'animation-timing-function', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'linear',
						'options' => [
							'ease' => esc_html__( 'ease', 'softd' ),
							'linear' => esc_html__( 'linear', 'softd' ),
							'ease-in' => esc_html__( 'ease-in', 'softd' ),
							'ease-out' => esc_html__( 'ease-out', 'softd' ),
							'ease-in-out' => esc_html__( 'ease-in-out', 'softd' ),
						],
					]
				);
				/*  witr_c_slidestoScroll */			
				$this->add_control(
					'ad',
					[
						'label' => esc_html__( 'animation-delay', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 50,
						'step' => 1,
						'default' => 1,
					]
				);				
				/* witr_c_autoplay */
				$this->add_control(
					'aic',
					[
						'label' => esc_html__( 'animation-iteration-count', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'infinite',
						'options' => [
							'infinite' => esc_html__( 'infinite', 'softd' ),
							'1' => esc_html__( '1', 'softd' ),
							'2' => esc_html__( '2', 'softd' ),
							'3' => esc_html__( '3', 'softd' ),
							'4' => esc_html__( '4', 'softd' ),
							'5' => esc_html__( '5', 'softd' ),
							'6' => esc_html__( '6', 'softd' ),
						],
					]
				);					
				/* witr_c_arrows */
				$this->add_control(
					'adi',
					[
						'label' => esc_html__( 'animation-direction', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'alternate',
						'options' => [
							'alternate' => esc_html__( 'alternate', 'softd' ),
							'alternate-reverse' => esc_html__( 'alternate-reverse', 'softd' ),
							'normal' => esc_html__( 'normal', 'softd' ),
							'reverse' => esc_html__( 'reverse', 'softd' ),
						],
					]
				);	
				/* witr_c_arrows */
				$this->add_control(
					'aps',
					[
						'label' => esc_html__( 'animation-play-state', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'running',
						'options' => [
							'running' => esc_html__( 'running', 'softd' ),
							'paused' => esc_html__( 'paused', 'softd' ),
						],
					]
				);	
				
				/* move */
				$this->add_control(
					'anall',
					[
						'label' => esc_html__( 'Animation-name', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'witr_movelr_box45',
						'options' => [
							'none' => esc_html__( 'None', 'softd' ),
							'witr_movelr_box45' => esc_html__( 'witr_movelr_box45', 'softd' ),
							'witr_movelr_box90' => esc_html__( 'witr_movelr_box90', 'softd' ),
							'witr_movelr_box180' => esc_html__( 'witr_movelr_box180', 'softd' ),
							'witr_movelr_box360' => esc_html__( 'witr_movelr_box360', 'softd' ),							
							'witr_movetb_box45' => esc_html__( 'witr_movetb_box45', 'softd' ),
							'witr_movetb_box90' => esc_html__( 'witr_movetb_box90', 'softd' ),
							'witr_movetb_box180' => esc_html__( 'witr_movetb_box180', 'softd' ),
							'witr_movetb_box360' => esc_html__( 'witr_movetb_box360', 'softd' ),							
							'witr_rotate_360' => esc_html__( 'witr_rotate_360', 'softd' ),
							'witr_rotate_180' => esc_html__( 'witr_rotate_180', 'softd' ),
							'witr_rotate_90' => esc_html__( 'witr_rotate_90', 'softd' ),
							'witr_rotate_45' => esc_html__( 'witr_rotate_45', 'softd' ),

						],
					]
				);
				
			
			$this->end_controls_section();
			/* === end witr_image ===  */			
						
			
			
		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
		

			/*=== start witr Arrow style ====*/

			$this->start_controls_section(
				'witr_style_option_arrow',
				[
					'label' => esc_html__( 'Witr Shape Options', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,				
				]
			);		 


					/* witr_posimg_style */
					$this->add_responsive_control(
						'witr_posimg_style',
						[
							'label' => esc_html__( 'Position', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'separator'=>'before',
							'options' => [
								'' => esc_html__( 'Default', 'softd' ),
								'relative' => esc_html__( 'relative', 'softd' ),
								'inherit' => esc_html__( 'inherit', 'softd' ),
								'fixed' => esc_html__( 'fixed', 'softd' ),
							],							
							'selectors' => [
								'{{WRAPPER}} .witr_shape_item_inner' => 'position: {{VALUE}};',
							],							
						]
					);
			
					/*  icon width */
					$this->add_responsive_control(
						'witr_icon2_width',
						[
							'label' => esc_html__( 'width', 'astute' ),
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
									'max' => 1920,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .witr_shape_item img' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .witr_shape_item img' => 'max-width: {{SIZE}}{{UNIT}};',
						],
					]
				);					
					
					
					/*  icon height */
					$this->add_responsive_control(
						'witr_icon2_height',
						[
							'label' => esc_html__( 'Height', 'astute' ),
							'type' => Controls_Manager::SLIDER,
							'separator'=>'before',
							'size_units' => [ 'px', '%', 'em' ],
							'range' => [
								'px' => [
									'min' => 6,
									'max' => 2000,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_shape_box' => 'height: {{SIZE}}{{UNIT}};',
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
								'{{WRAPPER}} .single_img_ani img,{{WRAPPER}} .witr_shape_image img' => 'transform: rotate({{SIZE}}{{UNIT}});',
							],
							'condition' => [
								'witr_style_counter' => ['2'],
							],							
						]
					);					
						/* Arrow background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_arrow_background',
								'label' => esc_html__( 'Shape Background', 'softd' ),
								'types' => ['classic','gradient','video'],
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .witr_shape_box',
							]
						);						
						/* witr_arrowborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_arrowborder_style',
								'label' => esc_html__( 'Shape Border', 'softd' ),
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .single_img_ani img',
							]
						);
						
						/* border_radius */
						$this->add_control(
							'witr_border_arrow_radius',
							[
								'label' => esc_html__( 'Shape Border Radius', 'softd' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .single_img_ani img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
						$this->add_control(
							'witr_thovers_color',
							[
								'label' => esc_html__( 'Text Color', 'softd' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'global' => [
									'default' => Global_Colors::COLOR_PRIMARY,
								],					
								'selectors' => [
									'{{WRAPPER}} .witr_shape_box_text' => 'color: {{VALUE}}',
								],
							]
						);
						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_ttpys_color',
								'label' => esc_html__( 'Text Typography', 'softd' ),
								'global' => [
									'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
								],
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .witr_shape_box_text',
							]
						);		
					/*  icon height */
					$this->add_responsive_control(
						'witr_zindex_height',
						[
							'label' => esc_html__( 'Z-Index', 'astute' ),
							'type' => Controls_Manager::SLIDER,
							'separator'=>'before',
							'size_units' => [ 'px' ],
							'range' => [
								'px' => [
									'min' => -1,
									'max' => 9999,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_shape_item_inner' => 'z-index: {{SIZE}};',
							],
						]
					);	

						$this->add_control(
							'witr_h_tb',
							[
								'label' => __( 'Select one time 2 style ex- top & left, If you need', 'softd' ),
								'type' => Controls_Manager::HEADING,
								'separator' => 'before',
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
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -5000,
										'max' => 5000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'top: {{SIZE}}{{UNIT}};',
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
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -5000,
										'max' => 5000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'left: {{SIZE}}{{UNIT}};',
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
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -1000,
										'max' => 5000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);
						/* witr_right */
						$this->add_responsive_control(
							'witr_bottom',
							[
								'label' => esc_html__( 'Bottom', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -5000,
										'max' => 5000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'bottom: {{SIZE}}{{UNIT}};',
								],
							]
						);					
					



			 $this->end_controls_section();
			/*=== end  witr Arrow style ====*/
			

		



    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
$adt=$atf=$ad=$aic=$adi=$aps=$arrows=$dots=$res1=$res2=$res3=$unic_id="";

		if(! empty($witrshowdata['adt'])){
			$slidestoShow=$witrshowdata['adt'];
		}
		if(! empty($witrshowdata['atf'])){
			$infinite=$witrshowdata['atf'];
		}
		if(! empty($witrshowdata['witr_c_autoplay'])){
			$autoplay=$witrshowdata['witr_c_autoplay'];
		}
		if(! empty($witrshowdata['witr_c_autoplaySpeed'])){
			$autoplayspeed=$witrshowdata['witr_c_autoplaySpeed'];
		}
		if(! empty($witrshowdata['witr_c_speed'])){
			$speed=$witrshowdata['witr_c_speed'];
		}
		if(! empty($witrshowdata['witr_c_slidestoScroll'])){
			$slidestoscroll=$witrshowdata['witr_c_slidestoScroll'];
		}
		if(! empty($witrshowdata['witr_c_arrows'])){
			$arrows=$witrshowdata['witr_c_arrows'];
		}
		if(! empty($witrshowdata['witr_c_dots'])){
			$dots=$witrshowdata['witr_c_dots'];
		}
		if(! empty($witrshowdata['witr_c_res1'])){
			$res1=$witrshowdata['witr_c_res1'];
		}
		if(! empty($witrshowdata['witr_c_res2'])){
			$res2=$witrshowdata['witr_c_res2'];
		}
		if(! empty($witrshowdata['witr_c_res3'])){
			$res3=$witrshowdata['witr_c_res3'];
		}
		if(! empty($witrshowdata['witr_unicid_c'])){
			$unic_id=$witrshowdata['witr_unicid_c'];	
		}
		


		switch ( $witrshowdata['witr_style_counter'] ) {	
	
		case '2':		
	?>
			
	<div class="witr_shape_item">
		<div class="witr_shape_item_inner">
		<div class="witr_shape_image <?php if($witrshowdata['witr_show_animate']=='yes'){ ?> single_img_ani <?php } ?>" style="animation: <?php echo $witrshowdata['anall'];?>  <?php echo $witrshowdata['adt'];?>s  <?php echo $witrshowdata['atf'];?>  <?php echo $witrshowdata['ad'];?>s  <?php echo $witrshowdata['aic'];?>  <?php echo $witrshowdata['adi'];?>  <?php echo $witrshowdata['aps'];?>;">
			<!-- image -->
			<?php if(isset($witrshowdata['witr_image_image']['url']) && ! empty($witrshowdata['witr_image_image']['url'])){?>
				<img src="<?php echo $witrshowdata['witr_image_image']['url'];?>" alt="" />
			<?php } ?>
	
		</div>
		</div>
	</div>
			

		
		<?php
		break;
		
		default:
		?>
			<div class="witr_shape_item">
				<div class="witr_shape_item_inner" style="animation: <?php echo $witrshowdata['anall'];?>  <?php echo $witrshowdata['adt'];?>s  <?php echo $witrshowdata['atf'];?>  <?php echo $witrshowdata['ad'];?>s  <?php echo $witrshowdata['aic'];?>  <?php echo $witrshowdata['adi'];?>  <?php echo $witrshowdata['aps'];?>;">
					<div class="witr_shape_box">	
						<!-- text -->
						<?php if(isset($witrshowdata['witr_shape_title']) && ! empty($witrshowdata['witr_shape_title'])){?>
							<div class="witr_shape_box_text">	
								<?php echo $witrshowdata['witr_shape_title'];?>
							</div>
						<?php } ?>					
					</div>
				</div>
			</div>	
			
		<?php
		break;

		
		} //end switch				
	


    } /* function end */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Shape() );
