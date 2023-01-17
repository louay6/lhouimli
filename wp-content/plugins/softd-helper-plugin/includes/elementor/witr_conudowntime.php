<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Cdown extends Widget_Base {

    public function get_name() {
        return 'witr_section_countdown';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Countdown Time', 'softd' );
    }

    public function get_icon() {
        return 'eicon-countdown';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_countdown start === */
			$this->start_controls_section(
				'witr_field_display_countdown',
				[
					'label' => esc_html__( 'witr countdown options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
				
				/* countdown title witr_countdown_year */	
					$this->add_control(
						'witr_countdown_year',
						[
							'label' => esc_html__( 'Year', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use year, your countdown not work*', 'softd' ),
							'default' => esc_html__( '2021', 'softd' ),
							'placeholder' => esc_attr__( 'Type your year here*', 'softd' ),						
						]
					);
					/* countdown time witr_countdown_month */	
					$this->add_control(
						'witr_countdown_month',
						[
							'label' => esc_html__( 'Month', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use month, your countdown not work*', 'softd' ),
							'default' => esc_html__( '12', 'softd' ),
							'placeholder' => esc_attr__( 'Type your month here*', 'softd' ),						
						]
					);
						/* countdown time witr_countdown_day */	
					$this->add_control(
						'witr_countdown_day',
						[
							'label' => esc_html__( 'Day', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use day, your countdown not work*', 'softd' ),
							'default' => esc_html__( '30', 'softd' ),
							'placeholder' => esc_attr__( 'Type your day here*', 'softd' ),						
						]
					);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_alignd',
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
							'{{WRAPPER}} .counterdowns' => 'text-align: {{VALUE}}',
						],
					]
				);	

				/* witr_show_button witr_button witr_button_link	
				$this->add_control(
					'witr_show_button',
					[
						'label' => esc_html__( 'Show Text button', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);				
				$this->add_control(
					'witr_button',
					[
						'label' => esc_html__( 'Button Text', 'softd' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'default' => esc_html__( 'explore more', 'softd' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);

			  witr_button_link 
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
				);*/

					
					
			/* countdown style check  witr_style_countdown */
				$this->add_control(
					'witr_style_countdown',
					[
						'label' => esc_html__( 'When you set year, month and day. that time countdown not work properly. completed set, please reload, then work fine', 'softd' ),
						'type' => Controls_Manager::HEADING,						
					]
				);						
					

			$this->end_controls_section();
			/*=== end  witr countdown style ====*/
					
			

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_option_number',
				[
					'label' => esc_html__( 'Number Color Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);		 
				/* color */
				$this->add_control(
					'witr_number_color',
					[
						'label' => esc_html__( 'Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'global' => [
							'default' => Global_Colors::COLOR_SECONDARY,
						],						
						'selectors' => [
							'{{WRAPPER}} span.time-counts' => 'color: {{VALUE}}',
						],
					]
				);
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_ttpy_number',
						'label' => esc_html__( 'Typography', 'softd' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
						],
						'selector' => '{{WRAPPER}} span.time-counts',
					]
				);		
				
				/* title margin */
				$this->add_responsive_control(
					'witr_number_margin',
					[
						'label' => __( 'Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.time-counts' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* title padding */
				$this->add_responsive_control(
					'witr_number_padding',
					[
						'label' => __( 'Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.time-counts' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/			
			
			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_option_title',
				[
					'label' => esc_html__( 'Number Title Option', 'softd' ),
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
							'default' => Global_Colors::COLOR_PRIMARY,
						],						
						'selectors' => [
							'{{WRAPPER}} .counterdowns p' => 'color: {{VALUE}}',
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
						'selector' => '{{WRAPPER}} .counterdowns p',
					]
				);		
				
				/* title margin */
				$this->add_responsive_control(
					'witr_title_margin',
					[
						'label' => __( 'Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .counterdowns p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* title padding */
				$this->add_responsive_control(
					'witr_title_padding',
					[
						'label' => __( 'Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .counterdowns p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/					
			
			
			/*=== start witr Group style ====*/

			$this->start_controls_section(
				'witr_style_option_group',
				[
					'label' => esc_html__( 'Box Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,					
				]
			);
				/*  background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_icons_background',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} span.cdowns',
					]
				);
				/*  icon width */
				$this->add_responsive_control(
					'witr_group_width',
					[
						'label' => esc_html__( 'width', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%'],
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 5000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_group_height',
					[
						'label' => esc_html__( 'Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%'],
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 1,
								'max' => 5000,
							],
							'%' => [
								'min' => 1,
								'max' => 5000,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'height: {{SIZE}}{{UNIT}};',
						],
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
							'{{WRAPPER}} span.cdowns' => 'text-align: {{VALUE}}',
						],
					]
				);

					/* witr_border_style */
					$this->add_control(
						'witr_border_btn_style',
						[
							'label' => esc_html__( 'Border Style', 'softd' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'default' => esc_html__( 'Default', 'softd' ),
								'none' => esc_html__( 'none', 'softd' ),
								'solid' => esc_html__( 'Solid', 'softd' ),
								'double' => esc_html__( 'Double', 'softd' ),
								'dotted' => esc_html__( 'Dotted', 'softd' ),
								'dashed' => esc_html__( 'Dashed', 'softd' ),
							],
							'default' => 'default',
							'selectors' => [
								'{{WRAPPER}} span.cdowns' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} span.cdowns' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} span.cdowns' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
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
							'{{WRAPPER}} span.cdowns' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			
	
				/* group margin */
				$this->add_responsive_control(
					'witr_group_margin',
					[
						'label' => __( 'Margin', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* group padding */
				$this->add_responsive_control(
					'witr_group_padding',
					[
						'label' => __( 'Padding', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr group style ====*/			
			

			
			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_dotcolorbefore',
				[
					'label' => esc_html__( 'Dot Before Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);	


				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'Show/Hide Dot', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);
				$this->add_control(
					'witr_style_countdown12',
					[
						'label' => esc_html__( 'When you set off,that time countdown not work properly. so when set off, then save document and, please reload it, then work fine', 'softd' ),
						'type' => Controls_Manager::HEADING,						
					]
				);						
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_dot_background',
						'separator'=>'before',
						'label' => esc_html__( 'Background', 'softd' ),						
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} span.cdowns::before',
					]
				);
						/* witr_top */
						$this->add_responsive_control(
							'witr_top1',
							[
								'label' => esc_html__( 'Top', 'softd' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px'],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} span.cdowns::before' => 'top: {{SIZE}}{{UNIT}};',
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
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} span.cdowns::before' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/					
			
			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_dotcolorafter',
				[
					'label' => esc_html__( 'Dot After Option', 'softd' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);	


				$this->add_control(
					'witr_show_icon2',
					[
						'label' => esc_html__( 'Show/Hide Dot', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);
				$this->add_control(
					'witr_style_countdown13',
					[
						'label' => esc_html__( 'When you set off,that time countdown not work properly. so when set off, then save document and, please reload it, then work fine', 'softd' ),
						'type' => Controls_Manager::HEADING,						
					]
				);					
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_dot_background2',
						'separator'=>'before',
						'label' => esc_html__( 'Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} span.cdowns::after',
					]
				);
				/* witr_top */
				$this->add_responsive_control(
					'witr_top',
					[
						'label' => esc_html__( 'Top', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px'],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns::after' => 'top: {{SIZE}}{{UNIT}};',
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
								'min' => -500,
								'max' => 500,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns::after' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);				
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/					
			
			
			
			
			
			
			
			
    } /*==function end==*/

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		//$witrshowicon    = $this->get_settings_for_display('witr_icon_item');		

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		

		?>
				<div class="counterdowns">
					<div class="witr_countdown">	
						<div class="timer">
							<div class="timer_section  <?php if($witrshowdata['witr_show_icon'] =='yes'){echo ""; }else{echo "dotnoneb";}?>  <?php if($witrshowdata['witr_show_icon2'] =='yes'){echo ""; }else{echo "dotnonea";}?>">
								<?php if(isset($witrshowdata['witr_countdown_year']) && ! empty($witrshowdata['witr_countdown_year'])){?>						
										<div class="autob" data-countdown="<?php echo $witrshowdata['witr_countdown_year']; ?>/<?php echo $witrshowdata['witr_countdown_month']; ?>/<?php echo $witrshowdata['witr_countdown_day']; ?>"></div>						
								<?php } ?>								
								
							</div>									
						</div>									
					</div>
				</div>			
		
		
		<script type='text/javascript'>
			jQuery(function($){

			/*---------------------
			 countdown
			--------------------- */
				$('[data-countdown]').each(function() {
				  var $this = $(this), finalDate = $(this).data('countdown');
				  $this.countdown(finalDate, function(event) {
					$this.html(event.strftime('<span class="cdowns days"><span class="time-counts">%-D</span> <p>Days</p></span> <span class="cdowns hour"><span class="time-counts">%-H</span> <p>Hour</p></span> <span class="cdowns minutes"><span class="time-counts">%M</span> <p>Min</p></span> <span class="cdowns second"> <span><span class="time-counts">%S</span> <p>Sec</p></span>'));
				  });
				});							
			
			
			});
		</script>	
<?php
	
	
	

    } /* function end */
	
	


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Cdown() );
