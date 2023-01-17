<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Animater_Slider extends Widget_Base {

    public function get_name() {
        return 'witr_animate_text';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Animate Heading', 'softd' );
    }

    public function get_icon() {
        return 'eicon-animated-headline';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
		

			
			
			/* === witr_animate title start === */
			$this->start_controls_section(
				'witr_option_animate_title',
				[
					'label' => esc_html__( 'Witr Animate Heading Options', 'softd' ),
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
							'{{WRAPPER}} .witr_animate_area' => 'text-align: {{VALUE}}',
						],
						'separator' => 'before',
					]
				);

			
				/* main animate witr_animate_title1 */	
					$this->add_control(
						'witr_animate_title1',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title top, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Add Title', 'softd' ),
							'placeholder' => esc_attr__( 'Type your animate title here', 'softd' ),						
						]
					);
			/* main animate witr_animate_title2 */	
					$this->add_control(
						'witr_animate_title2',
						[
							'label' => esc_html__( 'Animate Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use animate text, remove the text from field, and it will work your preview page. use the this way. ex- <b class="is-visible"> Web Developer</b> <b>I\'m Web Developer</b> <b>I\'m Web Designer</b> <b>Lives in US</b>', 'softd' ),
							'default' => __( '<b class="is-visible"> Web Developer</b> <b>I\'m Web Developer</b> <b>I\'m Web Designer</b> <b>Lives in US</b> ' ),
							'placeholder' => esc_attr__( 'Type your animate text here', 'softd' ),						
						]
					);
			
					
		
			$this->end_controls_section();
			/* === end witr_animate button ===  */
			
					

					
			
			
			
			
			

	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			
		

			
		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option',
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
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .witr_animate_content h1:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_animate_content h1',
				]
			);						
			
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin',
				[
					'label' => esc_html__( 'Tittle Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding',
				[
					'label' => esc_html__( 'Tittle Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'separator'=>'before',
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  w_title style ====*/
		

		/*=== start w_title style 2 ====*/

		$this->start_controls_section(
			'witr_style_option2',
			[
				'label' => esc_html__( 'Animate Text Color Option', 'softd' ),
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
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1 span, {{WRAPPER}} .witr_animate_content h1 span b' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_thover_color2',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1 span:hover, {{WRAPPER}} .witr_animate_content h1 span b:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_animate_content h1 span, {{WRAPPER}} .witr_animate_content h1 span b',
				]
			);	
			/* Button Forground */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_after_background',
					'label' => esc_html__( 'Bar Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .cd-headline.clip .cd-words-wrapper:after',
				]
			);					
			/* margin */
			$this->add_responsive_control(
				'witr_sectionmargin2',
				[
					'label' => esc_html__( 'Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1 span, {{WRAPPER}} .witr_animate_content h1 span b' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* padding */
			$this->add_responsive_control(
				'witr_sectionpadding2',
				[
					'label' => esc_html__( 'Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_animate_content h1 span, {{WRAPPER}} .witr_animate_content h1 span b' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  Middle/Bottom style  ====*/
		
		



    } /* function end*/

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();


		?>

		<div class="witr_animate_area witr_animate_height">
		
			<div class="witr_animate_content text-<?php if(isset($witrshowdata['witr_animate_title1']) && ! empty($witrshowdata['witr_animate_title1']))?>">

                                <h1 class="cd-headline clip is-full-width">
									<?php if(isset($witrshowdata['witr_animate_title1']) && ! empty($witrshowdata['witr_animate_title1'])){?>
										<?php echo $witrshowdata['witr_animate_title1']; ?>
									<?php } ?>	
									<?php if(isset($witrshowdata['witr_animate_title2']) && ! empty($witrshowdata['witr_animate_title2'])){?>
										 <span class="cd-words-wrapper witr_ani_text">
											<?php echo $witrshowdata['witr_animate_title2']; ?>
										</span>		 	
									<?php } ?>	
                                </h1>								

			</div> <!-- animate content -->
		
		
		
		
		</div>

     	
		<?php		
	
	
    } /*end function */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Animater_slider() );