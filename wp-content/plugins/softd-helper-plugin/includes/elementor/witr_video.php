<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Video extends Widget_Base {

    public function get_name() {
        return 'witr_section_video';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Video', 'softd' );
    }

    public function get_icon() {
        return 'eicon-youtube';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_video start === */
			$this->start_controls_section(
				'witr_field_display_video',
				[
					'label' => esc_html__( 'witr video options', 'softd' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);		

			/* service style check  witr_style_video */
				$this->add_control(
					'witr_style_video',
					[
						'label' => esc_html__( 'Video style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator' => 'before',
						'options' => [
							'1' => esc_html__( 'Video With Text Style ', 'softd' ),
							'2' => esc_html__( 'Video With Image Style', 'softd' ),
						],
						'default' => '1',
					]
				);
				/* video_type */
				$this->add_control(
					'video_type',
					[
						'label' => esc_html__( 'Source', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator' => 'before',
						'default' => 'youtube',
						'options' => [
							'youtube' => esc_html__( 'YouTube', 'softd' ),
							'vimeo' => esc_html__( 'Vimeo', 'softd' ),
						],
					]
				);
				/* youtube_url */
				$this->add_control(
					'youtube_url',
					[
						'label' => esc_html__( 'Link', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'placeholder' => esc_html__( 'Enter your URL', 'softd' ),
						'default' => 'https://www.youtube.com/watch?v=XHOmBV4js_E',
						'label_block' => true,
						'condition' => [
							'video_type' => 'youtube',
						],
					]
				);
				/* vimeo_url */
				$this->add_control(
					'vimeo_url',
					[
						'label' => esc_html__( 'Link', 'softd' ),
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'placeholder' => esc_html__( 'Enter your URL', 'softd' ),
						'default' => 'https://vimeo.com/235215203',
						'label_block' => true,
						'condition' => [
							'video_type' => 'vimeo',
						],
					]
				);		

				/* SHOW IMAGE witr_show_image witr_video_image */
				$this->add_control(
					'witr_show_image',
					[
						'label' => esc_html__( 'Show Image', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
						'condition' => [
							'witr_style_video' => ['2'],
						
							]
					]
				);	
				/* witr_video_image */
				$this->add_control(
					'witr_video_image',
					[
						'label' => esc_html__( 'Choose Image', 'softd' ),
						'type' => Controls_Manager::MEDIA,
						'separator' => 'before',
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
						'condition' => [
							'witr_show_image' => 'yes',
							'witr_style_video' => ['2'],
						],							
					]
				);
	
				/* show icon witr_show_icon witr_icon_item 
				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'Show Icon', 'softd' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'softd' ),
						'label_off' => esc_html__( 'Hide', 'softd' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);*/
				/* witr_icon_item */				
				$this->add_control(
					'witr_icon_item',
					[
						'label' => esc_html__( 'Icon', 'softd' ),
						'type' => Controls_Manager::ICONS,
						'separator' => 'before',
						'description' => esc_html__( 'chance the icon, click the library field', 'softd' ),						
						'fa4compatibility' => 'icon',
						'default' => [
							'value' => 'fas fa-play',
							'library' => 'fa-solid',
						],							
					]
				);				
				
				/* video title witr_videos_title */	
					$this->add_control(
						'witr_videos_title',
						[
							'label' => esc_html__( 'Title', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'separator' => 'before',
							'default' => esc_html__( 'Watch Video This Play', 'softd' ),
							'placeholder' => esc_attr__( 'Type your video title here', 'softd' ),							
							'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
							'condition' => [
								'witr_style_video' => ['1'],
							],						
						]
					);				

				
			$this->end_controls_section();
			/* === end witr_video ===  */			
		


		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
		
		

		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_video' => ['1'],
				],				

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
						'{{WRAPPER}} .witr_all_color_v h3' => 'color: {{VALUE}}',
					],
				]
			);
			/* Hover color */
			$this->add_control(
				'witr_titleh_color',
				[
					'label' => esc_html__( 'Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_all_color_v h3:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .witr_all_color_v h3',
				]
			);		

			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin',
				[
					'label' => esc_html__( 'Title Margin', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_all_color_v h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding',
				[
					'label' => esc_html__( 'Title Padding', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_all_color_v h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/	
		
		
		/*=== start witr_icon style ====*/
		$this->start_controls_section(
			'section_style_icon',
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
						'label' => esc_html__( 'Icon Color', 'softd' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} .witr_all_color_v i' => 'color: {{VALUE}}',
						],
						
					]
				);
				
				/*  icon font size */
				$this->add_responsive_control(
					'witr_icon_size',
					[
						'label' => esc_html__( 'Icon Size', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_all_color_v a' => 'font-size: {{SIZE}}{{UNIT}};',
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
						'selector' => '{{WRAPPER}} .witr_all_color_v a,{{WRAPPER}} .play-overlay a::before,{{WRAPPER}} .video-item a::before',
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
							'{{WRAPPER}} .witr_all_color_v a' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_all_color_v a' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_all_color_v a' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .witr_all_color_v a,{{WRAPPER}} .play-overlay a::before,{{WRAPPER}} .video-item a::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);				
				/* HEADING  */
				$this->add_control(
					'witr_head_icon',
					[
						'label' => esc_html__( ' Top,Left,Bottom,Right Option', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
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
						'{{WRAPPER}} .play-overlay,{{WRAPPER}} .video-item a' => 'top: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .play-overlay,{{WRAPPER}} .video-item a' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);
			/*  icon height */
			$this->add_responsive_control(
				'witr_zindex_height',
				[
					'label' => esc_html__( 'Z-Index', 'astute' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => -1,
							'max' => 9999,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .play-overlay' => 'z-index: {{SIZE}};',
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
						'{{WRAPPER}} .play-overlay,{{WRAPPER}} .video-item a' => 'right: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .play-overlay,{{WRAPPER}} .video-item a' => 'bottom: {{SIZE}}{{UNIT}};',
					],
					
				]
			);				
				
				/* HEADING Before */
				$this->add_control(
					'witr_heading_radius',
					[
						'label' => esc_html__( ' Before Color Option', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',

					]
				);

				/*  icon top */
				$this->add_responsive_control(
					'witr_icon_top_after',
					[
						'label' => esc_html__( 'Top', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .play-overlay a::before,{{WRAPPER}} .video-item a::before' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon left */
				$this->add_responsive_control(
					'witr_icon_left_after',
					[
						'label' => esc_html__( 'Left', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .play-overlay a::before,{{WRAPPER}} .video-item a::before' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);
				

				/* border_radius */
				$this->add_control(
					'witr_border_radius_after',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .play-overlay a::before,{{WRAPPER}} .video-item a::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'label' => esc_html__( 'Icon Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .witr_all_color_v i:hover ' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_all_color_v i:hover',
						]
					);					
					
				/* HEADING before */
				$this->add_control(
					'witr_headingh_radius',
					[
						'label' => esc_html__( 'Heading Before Hover', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'separator'=>'before',
					]
				);

				/* Icon background before */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_icons_bac_after',
						'label' => esc_html__( 'Icon Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .video-item a:hover::before,{{WRAPPER}} .play-overlay a:hover::before',
					]
				);
					$this->end_controls_tab();
					/*=== end icon hover style ====*/
					
			$this->end_controls_tabs();
			/*=== end icon_tabs style ====*/

		$this->end_controls_section();

		/*=== end witr_icon style ====*/		
		
				
		
		
		
		/*=== start witr_Video style ====*/
		$this->start_controls_section(
			'witr_style_image_option',
			[
				'label' => esc_html__( 'Video Overlay BG Option', 'softd' ),
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
							'{{WRAPPER}} .witr_all_color_v img' => 'width: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_video' => ['2'],
						],						
					]
				);			
				/*  img height */
				$this->add_responsive_control(
					'witr_image_heighta',
					[
						'label' => esc_html__( 'Image Height', 'softd' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 100,
								'max' => 1000,
							],
							'%' => [
								'min' => 100,
								'max' => 1000,
							],
							'em' => [
								'min' => 100,
								'max' => 1000,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} .witr_all_color_v img' => 'height: {{SIZE}}{{UNIT}};',
						],
						'condition' => [
							'witr_style_video' => ['2'],
						],						
					]
				);
			/* background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'section_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => [ 'classic', 'gradient','video' ],
					'selector' => '{{WRAPPER}} .witr_all_color_v, {{WRAPPER}} .witr_about_image::before',						
				]
			);

			/* border_radius */
			$this->add_control(
				'witr_rrborder_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .witr_all_color_v,{{WRAPPER}} .witr_about_image::before,{{WRAPPER}} .witr_about_image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_all_color_v' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_all_color_v' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		
        $witr_videotype  = ! empty( $witrshowdata['video_type'] ) ? $witrshowdata['video_type'] : 'youtube';  		
        $youtube_url  = ! empty( $witrshowdata['youtube_url'] ) ? $witrshowdata['youtube_url'] : ' ';  		
        $vimeo_url  = ! empty( $witrshowdata['vimeo_url'] ) ? $witrshowdata['vimeo_url'] : ' ';  		
		
		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
		
		
		
		
		switch($witrshowdata['witr_style_video'] ) {

		case '2':
		?>
		
			<div class="witr_play_vi witr_all_color_v">
				<!-- image -->
				<?php if(isset($witrshowdata['witr_video_image']['url']) && ! empty($witrshowdata['witr_video_image']['url'])){?>
					<div class="witr_about_image">
						<img src="<?php echo $witrshowdata['witr_video_image']['url'];?>" alt="" />
					</div>
				<?php } ?>
				
				<div class="play-overlay ">
					<a class="video-popup video-vemo-icon venobox vbox-item" data-vbtype="<?php echo $witr_videotype; ?>" data-autoplay="true" href="<?php if( $witr_videotype=='youtube' ){echo $youtube_url;}elseif( $witr_videotype=='vimeo' ){echo $vimeo_url;}else{} ?>">
						<!-- icon -->
							<?php if ( $is_new || $migrated ) :
								Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
							else : ?>
								<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
							<?php endif; ?>					
						<!-- end icon -->							
					</a>
				</div>
			</div> <!-- about play -->			

		<?php
		break;
		
		default:
		?>


        <div class="video-part">
			<div class="video-overlay witr_all_color_v">
				<div class="video-item text-center">
					<a class="video-popup video-vemo-icon venobox vbox-item" data-vbtype="<?php echo $witr_videotype; ?>" data-autoplay="true" href="<?php if( $witr_videotype=='youtube' ){echo $youtube_url;}elseif( $witr_videotype=='vimeo' ){echo $vimeo_url;}else{} ?>">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
						<?php endif; ?>					
						<!-- end icon -->							
					</a>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_videos_title']) && ! empty($witrshowdata['witr_videos_title'])){?>
						<h3><?php echo $witrshowdata['witr_videos_title']; ?> </h3>		
					<?php } ?>				
				</div> <!-- video item -->
			</div> <!-- video overlay -->
        </div> 

		
		<?php
		break;
			
			
			
		} /*switch end */
		
		

		

    } /* function end */



}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Video() );
