<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Witr_Theme_Section_Feature extends Widget_Base {

    public function get_name() {
        return 'witr_section_feature';
    }
    
    public function get_title() {
        return esc_html__( 'WITR: Feature', 'softd' );
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
			
				/* style check  witr_style_feature */
				$this->add_control(
					'witr_style_feature',
					[
						'label' => esc_html__( 'Feature style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'1' => esc_html__( 'Feature style 1', 'softd' ),
							'2' => esc_html__( 'Feature style 2', 'softd' ),
							'3' => esc_html__( 'Feature style 3', 'softd' ),
							'4' => esc_html__( 'Feature style 4', 'softd' ),
							'5' => esc_html__( 'Feature style 5', 'softd' ),
							'6' => esc_html__( 'Feature style 6', 'softd' ),
							'7' => esc_html__( 'Feature style 7', 'softd' ),
							'8' => esc_html__( 'Feature style 8', 'softd' ),
							'9' => esc_html__( 'Feature style 9', 'softd' ),
							'10' => esc_html__( 'Feature 3D/Flip Box style', 'softd' ),
							'11' => esc_html__( 'Feature slug style', 'softd' ),
							'12' => esc_html__( 'Feature style 12', 'softd' ),
							'13' => esc_html__( 'Feature style 13', 'softd' ),
						],
						'default' => '1',
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
							'condition' => [
								'witr_style_feature' =>['1','2','3','4','5','6','10','11','12','13'],
							],							
						]
					);
				/* witr_xyz */
				$this->add_control(
					'witr_xyz',
					[
						'label' => esc_html__( 'Flip Box', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'witr_feature_flip_left',
						'options' => [
							'witr_feature_flip_left' => esc_html__( 'Left', 'softd' ),
							'witr_feature_flip_right' => esc_html__( 'Right', 'Down' ),
							'witr_feature_flip_up' => esc_html__( 'Up', 'softd' ),
							'witr_feature_flip_down' => esc_html__( 'Down', 'softd' ),
							'witr_feature_flip_zoomin' => esc_html__( 'Zoom In', 'Down' ),
							'witr_feature_flip_zoomout' => esc_html__( 'Zoom Out', 'Down' ),
						],
						'condition' => [
							'witr_style_feature' =>['10'],
						],						
					]
				);					
					/*  box height */
					$this->add_responsive_control(
						'witr_box_height',
						[
							'label' => esc_html__( 'Box Height', 'softd' ),
							'type' => Controls_Manager::SLIDER,
							'separator'=>'before',
							'range' => [
								'px' => [
									'min' => 6,
									'max' => 1000,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_feature_front_3d,{{WRAPPER}} .witr_feature_back_3d' => 'height: {{SIZE}}{{UNIT}};',
							],
							'condition' => [
								'witr_style_feature' =>['10','11'],
							],							
						]
					);					
					
				/* witr_show_image witr_feature_image */
					$this->add_control(
						'witr_show_bo_image',
						[
							'label' => esc_html__( 'Show Image', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',
							'condition' => [
								'witr_style_feature' =>['11','12','13'],
							],							
						]
					);									
					$this->add_control(
						'witr_feature_bo_image',
						[
							'label' => esc_html__( 'Choose Image', 'softd' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],
							'condition' => [
								'witr_show_bo_image' => 'yes',
								'witr_style_feature' =>['11','12','13'],
							],							
						]
					);					
					/* feature title witr_feature_title */	
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
			/* witr_feature_title */	
			$this->add_control(
				'witr_feature_sub_title',
				[
					'label' => esc_html__( 'Sub Title', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use Sub title, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Add title Here', 'softd' ),
					'placeholder' => esc_attr__( 'Type your feature title here', 'softd' ),
					'condition' => [
						'witr_style_feature' =>['13'],
					],					
				]
			);					
					/* witr_feature_content	*/
					$this->add_control(
						'witr_feature_content',
						[
							'label' => esc_html__( ' Content Text', 'softd' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
							'default' => esc_html__( 'Lorem ipsum dolor sit amet, ca adipisicing elit, sed do eiusmod tempor incididunt utn labore et dolore magna.', 'softd' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
						]
					);
				/* witr_show_icon witr_icon_item */
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
					/*  witr_feature_custom	*/
					$this->add_control(
						'witr_feature_custom',
						[
							'label' => esc_html__( 'Custom Icon Name', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or https://fontawesome.com/cheatsheet name here', 'softd' ),
							'default' => esc_html__( 'icofont-adjust', 'softd' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),
							'condition' => [
								'witr_show_custom' => 'yes',
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
								'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],
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
								'witr_show_image' => 'yes',
								'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],
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
								'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],
							],							
						]
					);
					
					/* witr_show_number */
					$this->add_control(
						'witr_show_number',
						[
							'label' => esc_html__( 'Show Number', 'softd' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'softd' ),
							'label_off' => esc_html__( 'Hide', 'softd' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',
							'condition' => [
								'witr_style_feature' =>['1','4','8','9','13'],
							],							
						]
					);					
				/* witr_feature_number */	
					$this->add_control(
						'witr_feature_number',
						[
							'label' => esc_html__( 'Number', 'softd' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use number, remove the text from field', 'softd' ),
							'default' => esc_html__( '01', 'softd' ),
							'placeholder' => esc_attr__( 'Type your number here', 'softd' ),
							'condition' => [
								'witr_style_feature' =>['1','4','8','9','13'],
								'witr_show_number' => 'yes',
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
							'condition' => [
								'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],
							]							
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
								'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],							
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
								'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],
								'witr_show_button' => 'yes',
							],							
						]
					);						
/* =================================================== Bekent Option =================================================================== */
			/* witr_feature_heading2 */	
			$this->add_control(
				'witr_feature_heading2',
				[
					'label' => esc_html__( 'Bekent Option Bottom Look', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);			
			
			/* witr_feature_title2 */	
			$this->add_control(
				'witr_feature_title2',
				[
					'label' => esc_html__( 'Title', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use title, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Add title Here2', 'softd' ),
					'placeholder' => esc_attr__( 'Type your feature title here', 'softd' ),
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);
			/* witr_feature_title_link2 */	
			$this->add_control(
				'witr_feature_title_link2',
				[
					'label' => esc_html__( 'Title Link', 'softd' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert Title link here.','softd'),
					'placeholder' => esc_attr__( 'https://your-link.com', 'softd' ),
					'show_external' => true,
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);			
			/* witr_feature_content2	*/
			$this->add_control(
				'witr_feature_content2',
				[
					'label' => esc_html__( 'Content Text', 'softd' ),
					'type' => Controls_Manager::TEXTAREA,
					'separator'=>'before',
					'description' => esc_html__( 'Not use content text, remove the text from field', 'softd' ),
					'default' => esc_html__( 'Lorem ipsum dolor sit amet, ca adipisicing elit, sed do eiusmod tempor incididunt utn labore et dolore magna.', 'softd' ),
					'placeholder' => esc_attr__( 'Type your content here', 'softd' ),
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);
			/* witr_show_icon witr_icon_item */
			$this->add_control(
				'witr_show_icon2',
				[
					'label' => esc_html__( 'Show Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),							
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);				
			$this->add_control(
				'witr_icon_item2',
				[
					'label' => esc_html__( 'Icon', 'softd' ),
					'type' => Controls_Manager::ICONS,
					'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'softd' ),
					'fa4compatibility' => 'icon',
					'default' => [
						'value' => 'fab fa-twitter',
						'library' => 'fa-solid',
					],
					'condition' => [
						'witr_show_icon2' => 'yes',
						'witr_style_feature' =>['10'],
					],							
				]
			);					
	
			/* witr_show_custom2 witr_feature_custom2 */
			$this->add_control(
				'witr_show_custom2',
				[
					'label' => esc_html__( 'Show custom Icon', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);
			/* Custom Icon2	*/
			$this->add_control(
				'witr_feature_custom2',
				[
					'label' => esc_html__( 'Custom Icon Name', 'softd' ),
					'type' => Controls_Manager::TEXT,
					'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons name here', 'softd' ),
					'default' => esc_html__( 'icofont-adjust', 'softd' ),
					'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'softd' ),
					'condition' => [
						'witr_show_custom2' => 'yes',
						'witr_style_feature' =>['10'],
					],							
				]
			);				
			/* show image witr_show_image witr_feature_image2 */
			$this->add_control(
				'witr_show_image2',
				[
					'label' => esc_html__( 'Show Image', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'no',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);	
			/* witr_feature_image */
			$this->add_control(
				'witr_feature_image2',
				[
					'label' => esc_html__( 'Choose Image', 'softd' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'',
					],
					'condition' => [
						'witr_show_image2' => 'yes',
						'witr_style_feature' =>['10'],
					],							
				]
			);
			
			/* witr_show_button */
			$this->add_control(
				'witr_show_button2',
				[
					'label' => esc_html__( 'Show Button', 'softd' ),
					'type' => Controls_Manager::SWITCHER,
					'separator'=>'before',
					'label_on' => esc_html__( 'Show', 'softd' ),
					'label_off' => esc_html__( 'Hide', 'softd' ),
					'return_value' => 'yes',
					'default' => 'yes',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);			
			/* witr_feature_button	*/
			$this->add_control(
				'witr_feature_button2',
				[
					'label' => esc_html__( 'Button text', 'softd' ),
					'label_block' =>true,
					'type' => Controls_Manager::TEXT,
					'description' =>esc_html__('Insert button text. It hidden when field blank.','softd'),		
					'default' => esc_html__( 'See More', 'softd' ),
					'placeholder' => esc_attr__( 'Type your button text here', 'softd' ),
					'condition' => [
						'witr_show_button2' => 'yes',
						'witr_style_feature' =>['10'],
					],							
				]
			);
			/* witr_button_link2 */	
			$this->add_control(
				'witr_button_link2',
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
						'witr_show_button2' => 'yes',
						'witr_style_feature' =>['10'],
					],							
				]
			);

		
		
					
			$this->end_controls_section();
			/* === end w_feature ===  */

			
	   /*========================================================================================================================================================================
										START TO STYLE
		==========================================================================================================================================================================*/	

		/*=== start single Feature style ====*/
		$this->start_controls_section(
			'witr_style_ss_option',
			[
				'label' => esc_html__( 'Single Box', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_feature' => ['7','12'],
				],				
			]
		);		


				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_single_bb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_feature_color',
					]
				);
				/* border_radius */
				$this->add_control(
					'witr_single_br',
					[
						'label' => esc_html__( 'Border Radius', 'softd' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_feature_color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_background',
						'label' => esc_html__( ' Background', 'softd' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_feature_12.sub-item,{{WRAPPER}} .feature_inner_box',							
					]
				);				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowsbox',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_feature_color,{{WRAPPER}} .feature_inner_box',
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
							'{{WRAPPER}} .feature_inner_box,{{WRAPPER}} .witr_feature_12.sub-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .feature_inner_box,{{WRAPPER}} .witr_feature_12.sub-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);		
			$this->end_controls_section();
			/* === end single Feature ===  */
			
		/*=== start witr_Number style ====*/

		$this->start_controls_section(
			'witr_style_option_number',
			[
				'label' => esc_html__( 'Number Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_feature' => ['1','4','8','9','13'],
					'witr_show_number' => 'yes',
				],				
			]
		);	

		
			/* number Color */
			$this->add_control(
				'witr_number_color',
				[
					'label' => esc_html__( 'Number Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'selectors' => [
						'{{WRAPPER}} .all_feature_color span,{{WRAPPER}} .all_feature_color h2' => 'color: {{VALUE}}',
					],
					
				]
			);
			/* number background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_num_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_feature_color .sub-item span',					
				]
			);

			/* number typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_number_typography',
					'label' => esc_html__( 'Typography', 'softd' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .all_feature_color span,{{WRAPPER}} .all_feature_color h2',
				]
			);
			/* border_radius */
			$this->add_control(
				'witr_number_radius',
				[
					'label' => esc_html__( 'Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .all_feature_color span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'min' => -100,
							'max' => 500,
						],
						'%' => [
							'min' => -100,
							'max' => 500,
						],
						'em' => [
							'min' => -100,
							'max' => 500,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .all_feature_color span,{{WRAPPER}} .all_feature_color h2' => 'top: {{SIZE}}{{UNIT}};',
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
							'min' => -100,
							'max' => 500,
						],
						'%' => [
							'min' => -100,
							'max' => 500,
						],
						'em' => [
							'min' => -100,
							'max' => 500,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .all_feature_color span,{{WRAPPER}} .all_feature_color h2' => 'left: {{SIZE}}{{UNIT}};',
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
							'min' => -100,
							'max' => 500,
						],
						'%' => [
							'min' => -100,
							'max' => 500,
						],
						'em' => [
							'min' => -100,
							'max' => 500,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .all_feature_color span,{{WRAPPER}} .all_feature_color h2' => 'right: {{SIZE}}{{UNIT}};',
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
							'min' => -100,
							'max' => 500,
						],
						'%' => [
							'min' => -100,
							'max' => 500,
						],
						'em' => [
							'min' => -100,
							'max' => 500,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .all_feature_color span,{{WRAPPER}} .all_feature_color h2' => 'bottom: {{SIZE}}{{UNIT}};',
					],					
				]
			);
			/* heading2 */
			$this->add_control(
				'witr_headib_color',
				[
					'label' => esc_html__( 'Bar Top, Left, Opacity Option', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
					'condition' => [
						'witr_style_feature' => ['13'],
					],					
				]
			);
			/* witr_bar_opacity */
			$this->add_control(
				'witr_bar_opacity',
				[
					'label' => esc_html__( 'Bar Opacity', 'softd' ),
					'type' => Controls_Manager::TEXT,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_feature_13 .sub-item::before,{{WRAPPER}} .witr_feature_13 .sub-item::after' => 'opacity: {{VALUE}}',
					],					
					'condition' => [
						'witr_style_feature' => ['13'],
					],					
				]
			);			
			/* witr_top */
			$this->add_responsive_control(
				'witrb_topt',
				[
					'label' => esc_html__( 'Bar Top', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => -500,
							'max' => 500,
						],
						'%' => [
							'min' => -500,
							'max' => 500,
						],
						'em' => [
							'min' => -500,
							'max' => 500,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .witr_feature_13 .sub-item::before,{{WRAPPER}} .witr_feature_13 .sub-item::after' => 'top: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_feature' => ['13'],
					],					
				]
			);
			
			/* witr_left */
			$this->add_responsive_control(
				'witrb_leftl',
				[
					'label' => esc_html__( 'Bar Left', 'softd' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%', 'em' ],
					'range' => [
						'px' => [
							'min' => -500,
							'max' => 500,
						],
						'%' => [
							'min' => -500,
							'max' => 500,
						],
						'em' => [
							'min' => -500,
							'max' => 500,
						],
						
					],
					'selectors' => [
						'{{WRAPPER}} .witr_feature_13 .sub-item::before,{{WRAPPER}} .witr_feature_13 .sub-item::after' => 'left: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_feature' => ['13'],
					],					

				]
			);			
			
			
			
			
			
			/* heading2 */
			$this->add_control(
				'witr_headi_color',
				[
					'label' => esc_html__( 'Hover Color Option', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',					
				]
			);
			$this->add_control(
				'witr_number_hovercolor',
				[
					'label' => esc_html__( 'Number Hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .all_feature_color:hover span,{{WRAPPER}} .all_feature_color:hover h2' => 'color: {{VALUE}}',
					],
					
				]
			);			
			/* number Hover background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_numh_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_feature_color .sub-item:hover span,{{WRAPPER}} .witr_feature_13 .sub-item:hover::before',					
				]
			);
			
			
			
					
		 $this->end_controls_section();
		/*=== end  witr_Number style ====*/		
		
		
		
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
							'{{WRAPPER}} .all_feature_color i' => 'color: {{VALUE}}',
						],					
					]
				);
			/*  button witr_btn_button */	
				$this->add_control(
					'witr_Select_whi',
					[
						'label' => esc_html__( 'Select Icon Style', 'softd' ),
						'type' => Controls_Manager::SELECT,
						'multiple' => true,
						'options' => [
							'same2' => esc_html__( 'Default', 'softd' ),
							'width_height_link_0'  => esc_html__( 'Background Custom', 'softd' ),						
						],
						'condition' => [
							'witr_style_feature' =>['1','2','4','6','13'],
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
						'selector' => '{{WRAPPER}} .all_feature_color i',
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
							'{{WRAPPER}} .all_feature_color i' => 'font-size: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  Heading imge */
				$this->add_responsive_control(
					'heaging_image',
					[
						'label' => esc_html__( 'Icon Before Image', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'condition' => [
							'witr_style_feature' =>['8','9'],
						],						
					]
				);				
				/* Before Image */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_iconc_img',
						'label' => esc_html__( 'Icon Before Image', 'softd' ),
						'types' => ['classic', 'gradient'],
						'selector' => '{{WRAPPER}} .box:before',
						'condition' => [
							'witr_style_feature' =>['8','9'],
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
							'{{WRAPPER}} .all_feature_color i' => 'width: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'line-height: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'text-align: {{VALUE}}',
						],
					]
				);				
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_borderf',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .all_feature_color i',
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
							'{{WRAPPER}} .all_feature_color i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadow',
						'label' => esc_html__( 'Box Shadow', 'softd' ),
						'selector' => '{{WRAPPER}} .all_feature_color i',
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
							'{{WRAPPER}} .all_feature_color i' => 'mix-blend-mode: {{VALUE}}',
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
							'size' => '',
							'unit' => 'deg',
						],
						'tablet_default' => [
							'unit' => 'deg',
						],
						'mobile_default' => [
							'unit' => 'deg',
						],
						'selectors' => [
							'{{WRAPPER}} .all_feature_color i' => 'transform: rotate({{SIZE}}{{UNIT}});',
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
							'{{WRAPPER}} .all_feature_color i' => 'position: {{VALUE}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'top: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'left: {{SIZE}}{{UNIT}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
							'{{WRAPPER}} .all_feature_color i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .all_feature_color:hover i' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .all_feature_color:hover i',
						]
					);
					/* border_hover_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Hover Color', 'softd' ),
							'type' => Controls_Manager::COLOR,
							
							'selectors' => [
								'{{WRAPPER}} .all_feature_color:hover i' => 'border-color: {{VALUE}}',
							],
						]
					);
				/*  Heading imge */
				$this->add_responsive_control(
					'heagingh_image',
					[
						'label' => esc_html__( 'Icon After Image', 'softd' ),
						'type' => Controls_Manager::HEADING,
						'condition' => [
							'witr_style_feature' =>['8','9'],
						],						
					]
				);				
				/* after Image */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_iconch_img',
						'label' => esc_html__( 'Icon after Image', 'softd' ),
						'types' => ['classic', 'gradient'],
						'selector' => '{{WRAPPER}} .box:after',
						'condition' => [
							'witr_style_feature' =>['8','9'],
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
					'witr_style_feature' =>['1','2','3','4','5','6','7','10','11'],
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
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_img_bb',
						'label' => esc_html__( 'Border', 'softd' ),
						'selector' => '{{WRAPPER}} .single_seivice_ani img,{{WRAPPER}} .all_feature_color img',
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

		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title2',
			[
				'label' => esc_html__( 'Sub Title Color Option', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_feature' =>['13'],
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
						'{{WRAPPER}} .all_feature_color h2,{{WRAPPER}} .all_feature_color h2 a' => 'color: {{VALUE}}',
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
						'{{WRAPPER}} .all_feature_color h2:hover,{{WRAPPER}} .all_feature_color h2 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_feature_color h2,{{WRAPPER}} .all_feature_color h2 a',
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
						'{{WRAPPER}} .all_feature_color h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_feature_color h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'witr_style_feature' =>['1','2','3','4','5','6','7','10','11','12','13'],
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a',
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
							'selector' => '{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a',
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'border-color: {{VALUE}}',
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .feature_btn a,{{WRAPPER}} .witr_feature_btn_3d a,{{WRAPPER}} .witr_feature_btn_f a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .feature_btn a:hover,{{WRAPPER}} .witr_feature_btn_3d a:hover,{{WRAPPER}} .witr_feature_btn_f a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .feature_btn a:hover,{{WRAPPER}} .witr_feature_btn_3d a:hover,{{WRAPPER}} .witr_feature_btn_f a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'softd' ),
							'selector' => '{{WRAPPER}} .feature_btn a:hover,{{WRAPPER}} .witr_feature_btn_3d a:hover,{{WRAPPER}} .witr_feature_btn_f a:hover',
						]
					);
					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		

		/*=== start All Text style ====*/
		$this->start_controls_section(
			'witr_style_all_content',
			[
				'label' => esc_html__( 'All Text And BG Hover Color', 'softd' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'witr_style_feature' =>['7','10','11'],
				],					
			]
		);		 
			/* color */
			$this->add_control(
				'witr_alltitle_color',
				[
					'label' => esc_html__( 'All Text Color Hover', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .em-feature:hover .feature_button a,{{WRAPPER}} .em-feature:hover h2,{{WRAPPER}} .em-feature:hover h3,{{WRAPPER}} .em-feature:hover h3 a,{{WRAPPER}} .em-feature:hover .em-feature-desc,{{WRAPPER}} .em-feature:hover .em_feature-icon,{{WRAPPER}} .all_feature_color:hover .witr_feature_icon_3d i,{{WRAPPER}} .all_feature_color:hover .witr_feature_content_3d h3,{{WRAPPER}} .all_feature_color:hover .witr_feature_content_3d h3 a,{{WRAPPER}} .all_feature_color:hover .witr_feature_content_3d p,{{WRAPPER}} .all_feature_color:hover .witr_feature_btn_3d a,{{WRAPPER}} .all_feature_color:hover .witr_content_textf h3,{{WRAPPER}} .all_feature_color:hover .witr_content_textf h3 a,{{WRAPPER}} .all_feature_color:hover .witr_content_textf p,{{WRAPPER}} .all_feature_color:hover .witr_feature_iconf i' => 'color: {{VALUE}}',
					],
				]
			);
			/* border_color */
			$this->add_control(
				'witr_bordear_btn_color',
				[
					'label' => esc_html__( 'Button Border hover Color', 'softd' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_feature_color:hover .witr_feature_btn_3d a,{{WRAPPER}} .em-feature:hover .feature_button a,{{WRAPPER}} .all_feature_color:hover .witr_feature_btn_f a' => 'border-color: {{VALUE}}',
					],
				]
			);			
			
			/* heading */
			$this->add_control(
				'witr_alheadi_color',
				[
					'label' => esc_html__( 'Icon BG Hover color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
				]
			);			
			/* Icon background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_allicon_background',
					'label' => esc_html__( 'Icon Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .em-feature:hover .em_feature-icon i,{{WRAPPER}} .all_feature_color:hover .witr_feature_icon_3d i,{{WRAPPER}} .all_feature_color:hover .witr_feature_iconf i',
				]
			);
			/* heading */
			$this->add_control(
				'witr_alheadeing_color',
				[
					'label' => esc_html__( 'Box BG color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
				]
			);			
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bbgh_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .feature_inner_box,{{WRAPPER}} .witr_feature_front_3d,{{WRAPPER}} .witr_slug_feature',
				]
			);			
			/* heading */
			$this->add_control(
				'witr_bvalheadeing_color',
				[
					'label' => esc_html__( 'Box Overlay BG color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
				]
			);			
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bvbgh_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .em-feature:hover .feature_inner_box::before,{{WRAPPER}} .witr_feature_front_3d:before,{{WRAPPER}} .witr_slug_front_contentf,{{WRAPPER}} .witr_feture_back_con_slugf',
				]
			);
			/* Fontend border_radius */
			$this->add_control(
				'witr_borderf_radius',
				[
					'label' => esc_html__( 'Fontend Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .witr_feature_front_3d,{{WRAPPER}} .witr_feature_front_3d:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_feature' =>['10'],
					],						
				]
			);			
/* =================================================== Bekent Option =================================================================== */
			/* heading2 */
			$this->add_control(
				'witr_heading3_color',
				[
					'label' => esc_html__( 'Box Bekent Option Bottom Look', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'separator'=>'before',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);
			/* heading2 */
			$this->add_control(
				'witr_alheadeing2_color',
				[
					'label' => esc_html__( 'Box BG color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);
			
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bbgh2_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_feature_back_3d',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);			
			/* heading2 */
			$this->add_control(
				'witr_bvalheadeing2_color',
				[
					'label' => esc_html__( 'Box Overlay BG color', 'softd' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);			
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bvbgh2_background',
					'label' => esc_html__( 'Background', 'softd' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_feature_back_3d:before',
					'condition' => [
						'witr_style_feature' =>['10'],
					],					
				]
			);

			/* Fontend border_radius */
			$this->add_control(
				'witr_borderb_radius',
				[
					'label' => esc_html__( 'Bekend Border Radius', 'softd' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .witr_feature_back_3d,{{WRAPPER}} .witr_feature_back_3d:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_style_feature' =>['10'],
					],						
				]
			);			
							
		 
		 $this->end_controls_section();
		/*=== end  All Textt style ====*/

			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	

		/* icone code */
		$migrated = isset( $witrshowdata['__fa4_migrated']['witr_icon_item'] );
		$is_new = empty( $witrshowdata['icon'] ) && Icons_Manager::is_migration_allowed();
		
		
	switch ( $witrshowdata['witr_style_feature'] ) {
		
		case '13':
		?>
		
            <div class="witr_feature_13 sub-border-2 all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
				<!-- image -->
				<?php if($witrshowdata['witr_show_bo_image']=='yes'){?>
					<div class="witr_feature_top13_thumb">
						<?php if(isset($witrshowdata['witr_feature_bo_image']['url']) && ! empty($witrshowdata['witr_feature_bo_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_feature_bo_image']['url'];?>" alt="" />
						<?php } ?>
					</div>
				<?php } ?>			
				<div class="sub-item <?php echo $witrshowdata['witr_Select_whi']; ?>">
				
					<!-- number -->
					<?php if(isset($witrshowdata['witr_feature_number']) && ! empty($witrshowdata['witr_feature_number'])){?>
						<span><?php echo $witrshowdata['witr_feature_number']; ?></span>
					<?php } ?>					
					
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
					<!-- title -->
					<?php if(isset($witrshowdata['witr_feature_title']) && ! empty($witrshowdata['witr_feature_title'])){?>
					<?php if($witrshowdata['witr_feature_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_feature_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_feature_title']; ?> </h3>
					<?php }	?>
					<?php } ?>
					<!-- Sub title -->
					<?php if(isset($witrshowdata['witr_feature_sub_title']) && ! empty($witrshowdata['witr_feature_sub_title'])){?>
						<h2><?php echo $witrshowdata['witr_feature_sub_title']; ?> </h2>
					<?php } ?>
					
					<!-- content -->
					<?php if(isset($witrshowdata['witr_feature_content']) && ! empty($witrshowdata['witr_feature_content'])){?>
						<p><?php echo $witrshowdata['witr_feature_content']; ?> </p>		
					<?php } ?>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>
				</div> <!-- sub item -->		   
            </div> <!-- sub border -->
		<?php 
		
		break;
		case '12':
		?>
		
			<div class="witr_feature_12 sub-item all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
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
					<!-- image Icon-->
					<?php if(isset($witrshowdata['witr_feature_image']['url']) && ! empty($witrshowdata['witr_feature_image']['url'])){?>
						<img src="<?php echo $witrshowdata['witr_feature_image']['url'];?>" alt="" />
					<?php } ?>					
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
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>	
					<!-- image -->
						<?php if($witrshowdata['witr_show_bo_image']=='yes'){?>
						<div class="witr_feature_bo_thumb">
							<?php if(isset($witrshowdata['witr_feature_bo_image']['url']) && ! empty($witrshowdata['witr_feature_bo_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_feature_bo_image']['url'];?>" alt="" />
							<?php } ?>
						</div>
					<?php } ?>
					
			</div> <!-- sub item -->
		<?php 
		
		break;
		
		
		case '11':
		?>
		
		<div class="witr_slug_feature all_feature_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
		
			<!-- image -->
			<?php if($witrshowdata['witr_show_bo_image']=='yes'){?>
			<div class="witr_feature_bo11_thumb">
				<?php if(isset($witrshowdata['witr_feature_bo_image']['url']) && ! empty($witrshowdata['witr_feature_bo_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_feature_bo_image']['url'];?>" alt="" />
				<?php } ?>	
				<div class="witr_slug_front_contentf">			
					<div class="witr_feature_iconf">
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
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
					<div class="witr_content_textf">					
						<!-- title -->
						<?php if(isset($witrshowdata['witr_feature_title']) && ! empty($witrshowdata['witr_feature_title'])){?>
						<?php if($witrshowdata['witr_feature_title_link'] ['url']){?> 
							<h3><a href="<?php echo $witrshowdata['witr_feature_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title']; ?></a></h3>
						<?php }else{ ?>
						<h3><?php echo $witrshowdata['witr_feature_title']; ?> </h3>
						<?php }	?>
						<?php } ?>

					</div>
				</div>

				<div class="witr_feture_back_con_slugf">
					<div class="witr_back_con_slugf">
					
						<div class="witr_content_textf">						
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
						</div>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
							<div class="witr_feature_btn_f">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
							</div>
						<?php } ?>					
					</div>
				</div>
			</div>
			<?php } ?>			
		</div>	

		<?php 
		
		break;
		
		case '10':
		?>
		
		<div class="witr_feature_3d witr_feature_con_3d <?php echo $witrshowdata['witr_xyz']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
			<div class="witr_single_feature_3d all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?>">
				<!-- fontent -->
				<div class="witr_feature_front_3d">
					<div class="witr_feature_position">
						<div class="witr_feature_content_3d">
							<div class="witr_feature_icon_3d">
								<!-- icon -->
								<?php if ( $is_new || $migrated ) :
									Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
								else : ?>
									<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
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
						</div>
						<!-- button -->
						<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
							<div class="witr_feature_btn_3d">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
							</div>
						<?php } ?>	
					</div>
				</div>
				<!-- bekend -->
				<div class="witr_feature_back_3d">
					<div class="witr_feature_position">
						<div class="witr_feature_content_3d">
							<div class="witr_feature_icon_3d">
								<!-- icon -->
								<?php if ( $is_new || $migrated ) :
									Icons_Manager::render_icon( $witrshowdata['witr_icon_item2'], [ 'aria-hidden' => 'true' ] );
								else : ?>
									<i <?php echo $this->get_render_attribute_string( 'icon' ); ?>></i>
								<?php endif; ?>
								<!-- custom icon -->
								<?php if(isset($witrshowdata['witr_feature_custom2']) && ! empty($witrshowdata['witr_feature_custom2'])){?>	
									<i class="<?php echo $witrshowdata['witr_feature_custom2']; ?>"></i>
								<?php } ?>				
								<!-- image -->
								<?php if(isset($witrshowdata['witr_feature_image2']['url']) && ! empty($witrshowdata['witr_feature_image2']['url'])){?>
									<img src="<?php echo $witrshowdata['witr_feature_image2']['url'];?>" alt="" />
								<?php } ?>						
							</div>
							<!-- title -->
							<?php if(isset($witrshowdata['witr_feature_title2']) && ! empty($witrshowdata['witr_feature_title2'])){?>
							<?php if($witrshowdata['witr_feature_title_link2'] ['url']){?> 
								<h3><a href="<?php echo $witrshowdata['witr_feature_title_link2'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title2']; ?></a></h3>
							<?php }else{ ?>
							<h3><?php echo $witrshowdata['witr_feature_title2']; ?> </h3>
							<?php }	?>
							<?php } ?>
							<!-- content -->
							<?php if(isset($witrshowdata['witr_feature_content2']) && ! empty($witrshowdata['witr_feature_content2'])){?>
								<p><?php echo $witrshowdata['witr_feature_content2']; ?> </p>		
							<?php } ?>						
						</div>
						
						<!-- button -->
						<?php if(isset($witrshowdata['witr_feature_button2']) && ! empty($witrshowdata['witr_feature_button2'])){?>
							<div class="witr_feature_btn_3d">
							<a href="<?php echo $witrshowdata['witr_button_link2'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button2']; ?></a>
							</div>
						<?php } ?>					
						
					</div>
				</div>
			</div>
		</div>
			

		<?php 
		
		break;
		
		case '9':
		?>
		
			<div class="singleService boxTop text-center all_feature_color">
				<!-- number -->
				<?php if(isset($witrshowdata['witr_feature_number']) && ! empty($witrshowdata['witr_feature_number'])){?>
					 <h2><?php echo $witrshowdata['witr_feature_number']; ?></h2>
				<?php } ?>
				<div class="box">
					<!-- custom icon -->
					<?php if(isset($witrshowdata['witr_feature_custom']) && ! empty($witrshowdata['witr_feature_custom'])){?>					
						<i class="<?php echo $witrshowdata['witr_feature_custom']; ?>"></i>
					<?php } ?>
					<!-- icon -->
					<?php if ( $is_new || $migrated ) :
						Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
					else : ?>
						<i <?php echo $this->get_render_attribute_string( 'icon' ); ?> ></i>
					<?php endif; ?>						
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
			</div>	

		<?php 
		
		break;
		
		case '8':
		?>
		
			<div class="singleService text-center clearfix all_feature_color">
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
					<div class="box">
						<!-- custom icon -->
						<?php if(isset($witrshowdata['witr_feature_custom']) && ! empty($witrshowdata['witr_feature_custom'])){?>					
							<i class="<?php echo $witrshowdata['witr_feature_custom']; ?>"></i>
						<?php } ?>
						<!-- icon -->
						<?php if ( $is_new || $migrated ) :
							Icons_Manager::render_icon( $witrshowdata['witr_icon_item'], [ 'aria-hidden' => 'true' ] );
						else : ?>
							<i <?php echo $this->get_render_attribute_string( 'icon' ); ?> ></i>
						<?php endif; ?>						
					</div>
				
					<!-- number -->
					<?php if(isset($witrshowdata['witr_feature_number']) && ! empty($witrshowdata['witr_feature_number'])){?>
						 <h2><?php echo $witrshowdata['witr_feature_number']; ?></h2>
					<?php } ?>
			</div>		
		

		<?php 
		
		break;	
		
		case '7':
		?>
		
			<div class="em-feature all_feature_color <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
				<div class="feature_inner_box">
					<div class="feature_inner">						
						<div class="em_feature-icon">
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
						<div class="em-feature-title">
							<!-- title -->
							<?php if(isset($witrshowdata['witr_feature_title']) && ! empty($witrshowdata['witr_feature_title'])){?>
							<?php if($witrshowdata['witr_feature_title_link'] ['url']){?> 
								<h3><a href="<?php echo $witrshowdata['witr_feature_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title']; ?></a></h3>
							<?php }else{ ?>
							<h3><?php echo $witrshowdata['witr_feature_title']; ?> </h3>
							<?php }	?>
							<?php } ?>							
						</div>
					</div>

					<div class="em_content_text">							
						<div class="em-feature-desc">
							<!-- content -->
							<?php if(isset($witrshowdata['witr_feature_content']) && ! empty($witrshowdata['witr_feature_content'])){?>
								<p><?php echo $witrshowdata['witr_feature_content']; ?> </p>		
							<?php } ?>
						</div>
					</div>
		
					
					<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
						<div class="f-readmore">
							<div class="feature_button feature_btn">
								<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
							</div>
						</div>
					<?php } ?>							
				</div>
			</div>		
				
		<?php 
		
		break;	
		
		case '6':
		?>
			<div class="sub-item sub-item-8 all_feature_color <?php echo $witrshowdata['witr_Select_whi']; ?> text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
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
					<div class="feature_btn">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
					</div>
				<?php } ?>				
			</div> <!-- sub item -->		
		<?php 
		break;
		case '5':
		?>
			<div class="sub-item sub-item-6 all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">									
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
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>				
			</div> <!-- sub item -->		
		<?php 
		break;
		case '4':
		?>
			<div class="sub-item all_feature_color <?php echo $witrshowdata['witr_Select_whi']; ?> text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<!-- number -->
					<?php if(isset($witrshowdata['witr_feature_number']) && ! empty($witrshowdata['witr_feature_number'])){?>
						<span><?php echo $witrshowdata['witr_feature_number']; ?></span>
					<?php } ?>					
				
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
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>				
			</div> <!-- sub item -->		
		<?php 
		break;
		case '3':
		?>
            <div class="sub-border-3">
				<div class="sub-item sub-item-3 all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
					<!-- title -->
					<?php if(isset($witrshowdata['witr_feature_title']) && ! empty($witrshowdata['witr_feature_title'])){?>
					<?php if($witrshowdata['witr_feature_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_feature_title_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_feature_title']; ?> </h3>
					<?php }	?>
					<?php } ?>
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
					<!-- content -->
					<?php if(isset($witrshowdata['witr_feature_content']) && ! empty($witrshowdata['witr_feature_content'])){?>
						<p><?php echo $witrshowdata['witr_feature_content']; ?> </p>		
					<?php } ?>
					<!-- button -->
					<?php if(isset($witrshowdata['witr_feature_button']) && ! empty($witrshowdata['witr_feature_button'])){?>
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>				
				</div> <!-- sub item -->
            </div> <!-- sub border -->		
		<?php 
		break;
		
		case '2':
		?>		
			<div class="sub-item all_feature_color <?php echo $witrshowdata['witr_Select_whi']; ?> text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">
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
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>				
			</div> <!-- sub item -->
		<?php 	
			
		break;

		
		default:
		?>
            <div class="sub-border-2 all_feature_color text-<?php echo $witrshowdata['witr_text_ltc']; ?> <?php if($witrshowdata['witr_show_animate']=='yes'){ ?>  single_seivice_ani <?php } ?>">                 
				<div class="sub-item <?php echo $witrshowdata['witr_Select_whi']; ?>">
					<!-- number -->
					<?php if(isset($witrshowdata['witr_feature_number']) && ! empty($witrshowdata['witr_feature_number'])){?>
						<span><?php echo $witrshowdata['witr_feature_number']; ?></span>
					<?php } ?>					
					
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
						<div class="feature_btn">
							<a href="<?php echo $witrshowdata['witr_button_link'] ['url']; ?>"><?php echo $witrshowdata['witr_feature_button']; ?></a>
						</div>
					<?php } ?>
				</div> <!-- sub item -->		   
            </div> <!-- sub border -->
					
		<?php 		
		break;
		
	} 
		

    } // function end
	

}

Plugin::instance()->widgets_manager->register_widget_type( new Witr_Theme_Section_Feature() );
