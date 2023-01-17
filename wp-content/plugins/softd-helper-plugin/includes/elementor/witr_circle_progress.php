<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Cricle extends Widget_Base {

    public function get_name() {
        return 'witr_section_carousel_circle';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: circle Progress', 'softd' );
    }

    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_progress start === */
			$this->start_controls_section(
				'witr_field_display_progress',
				[
					'label' => esc_html__( 'witr circle Options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
				
				/* witr_slides_to_show */ 		
				$this->add_control(
					'witr_slides_to_show',
					[
						'label' => esc_html__( 'Circle Box Size', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 1000,
						'step' => 1,
						'default' => 100,
					]
				);				
				/*  witr_c_slidestoScroll */			
				$this->add_control(
					'witr_c_slidestoScroll',
					[
						'label' => esc_html__( 'Value', 'softd' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 0.01,
						'max' => 1,
						'step' => 0.01,
						'default' => 0.75,
					]
				);
				/* witr_slides_to_show */ 		
				$this->add_control(
					'witr_slides_text',
					[
						'label' => esc_html__( 'Use symbol', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'description' => esc_html__( 'Please use a symbol, If you need, ex- +.', 'softd' ),						
						'default' => '%',
					]
				);					
				/* progress_infinite */
				$this->add_control(
					'witr_c_infinite',
					[
						'label' => esc_html__( 'Circle Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'round',
						'options' => [
							'round' => esc_html__( 'round', 'softd' ),
							'square' => esc_html__( 'square', 'softd' ),
							'butt' => esc_html__( 'butt', 'softd' ),
						],
					]
				);
				$this->add_control(
					'witr_color1',
					[
						'label' => esc_html__( 'Circle Bar Color 1', 'softd' ),
						'type' => Controls_Manager::COLOR,						
						'default' => '#ff0000',						
					]
				);	
				$this->add_control(
					'witr_color2',
					[
						'label' => esc_html__( 'Circle Bar Color 2', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'default' => '#ffa500',						
					]
				);				
				/* witr_unicid_c */	
					$this->add_control(
						'witr_unicid_c',
						[
							'label' => esc_html__( 'Use Uniqe ID', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator' => 'before',
							'description' => esc_html__( 'Please use a unic ID here, ex- wittr_1.', 'softd' ),
							'default' => 'id1',
							'placeholder' => esc_attr__( 'Type your ID here', 'softd' ),						
						]
					);

				/* witr_circle_title */	
					$this->add_control(
						'witr_circle_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Add title Here', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your circle title here', 'softd' ),						
						]
					);
					/* witr_circle_content	*/
					$this->add_control(
						'witr_circle_content',
						[
							'label' => esc_html__( ' Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Lorem ipsum dolor sit amet, ca adipisicing elit.', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);
					
			
			$this->end_controls_section();
			/* === end witr_progress ===  */			
						
			
			
		
		
	 

		
	
		/*===== start Progress BG Overlay =====*/
		$this->start_controls_section(
			'section_background_overlay',
			[
				'label' => esc_html__( 'Progress Style', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'witr_thover_color',
				[
					'label' => esc_html__( 'Text Color', 'softd' ),
					'type' => Controls_Manager::COLOR,	
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} span.witr_cir_text' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} span.witr_cir_text',
				]
			);

				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Box Text Align', 'softd' ),
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
							'{{WRAPPER}} .witr_circle_area' => 'text-align: {{VALUE}}',
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
						'{{WRAPPER}} span.witr_cir_text' => 'top: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} span.witr_cir_text' => 'left: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} span.witr_cir_text' => 'right: {{SIZE}}{{UNIT}};',
					],
				]
			);				
		
		$this->end_controls_section();
		/*===== end Progress BG Overlay =====*/

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
						'{{WRAPPER}} .witr_circle_title h3' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_circle_title h3:hover' => 'color: {{VALUE}}',
					],
				]
			);
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_tepy_color',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_circle_title h3',
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
						'{{WRAPPER}} .witr_circle_title h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_circle_title h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_circle_content p' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_circle_content p',
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
						'{{WRAPPER}} .witr_circle_content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_circle_content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/		



    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
$infinite=$autoplay=$autoplayspeed=$speed=$slidestoShow=$slidestoscroll=$arrows=$dots=$res1=$res2=$res3=$unic_id="";
if(! empty($witrshowdata['witr_slides_to_show'])){
	$slidestoShow=$witrshowdata['witr_slides_to_show'];
}
if(! empty($witrshowdata['witr_c_slidestoScroll'])){
	$slidestoscroll=$witrshowdata['witr_c_slidestoScroll'];
}
if(! empty($witrshowdata['witr_c_infinite'])){
	$infinite=$witrshowdata['witr_c_infinite'];
}
if(! empty($witrshowdata['witr_slides_text'])){
	$witr_sy_text=$witrshowdata['witr_slides_text'];
}
if(! empty($witrshowdata['witr_color1'])){
	$speed=$witrshowdata['witr_color1'];
}
if(! empty($witrshowdata['witr_color2'])){
	$autoplay=$witrshowdata['witr_color2'];
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
$witr_val1=0.1;
$witr_val2=0.2;
$witr_val3=0.3;
$witr_val4=0.4;
$witr_val5=0.5;
$witr_val6=0.6;
$witr_val7=0.7;
$witr_val8=0.8;
$witr_val9=0.9;
$witr_val10=1;
$witr_val1_eq="";
if($witr_val1==$slidestoscroll or $witr_val2==$slidestoscroll or $witr_val3==$slidestoscroll or $witr_val4==$slidestoscroll or $witr_val5==$slidestoscroll or $witr_val6==$slidestoscroll or $witr_val7==$slidestoscroll or $witr_val8==$slidestoscroll or $witr_val9==$slidestoscroll or $witr_val10==$slidestoscroll){
	$witr_val1_eq=0;
}else{
	$witr_val1_eq='';
}

		
			?>

				<div class="witr_circle_area">
					<div class="witr_cp_class witr_circle_<?php echo $unic_id;?>">
						<span class="witr_cir_text"><?php echo $slidestoscroll; ?><?php echo $witr_val1_eq;?><?php echo $witr_sy_text;?></span>

					</div>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_circle_title']) && ! empty($witrshowdata['witr_circle_title'])){?>
					<div class="witr_circle_title">
						<h3><?php echo $witrshowdata['witr_circle_title']; ?> </h3>
					</div>
					<?php } ?>
					<!-- content -->
					<?php if(isset($witrshowdata['witr_circle_content']) && ! empty($witrshowdata['witr_circle_content'])){?>
					<div class="witr_circle_content">
						<p><?php echo $witrshowdata['witr_circle_content']; ?> </p>	
					</div>	
					<?php } ?>					
				</div>
		
	
	<script type='text/javascript'>
		jQuery(function($){

			  var witr_cp = $('.witr_circle_<?php echo $unic_id;?>');

			  witr_cp.circleProgress({
				startAngle: -Math.PI / 4 * 3,
				value: <?php echo $slidestoscroll;?>,
				size: <?php echo $slidestoShow;?>,
				lineCap: '<?php echo $infinite;?>',
				fill: {  gradient: ["<?php echo $speed;?>", "<?php echo $autoplay;?>"]}
			  });

		});
	</script>		
		
		
		
		

<?php		
			
			
			
			


    } /* function end */


}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Cricle() );
