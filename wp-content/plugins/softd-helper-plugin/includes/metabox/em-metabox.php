<?php

add_action( 'cmb2_admin_init', 'softd_metabox' );
/*
**	Setting up custom fields for custom post types belongs to fantasic child theme for softd
*/ 

if ( !function_exists('softd_metabox') ) {
	function softd_metabox() {
		$prefix = '_softd_';

	//header metabox
	$page_heading_style = new_cmb2_box( array(
	'id'            => $prefix . 'em_header_style_option',
	'title'         => esc_html__( 'Header Style Option', 'softd' ),
	'object_types'  => array( 'page','em_service','em_portfolio','em_event','em_team','em_testimonial','em_tab','post' ), // Post type
	'priority'   => 'high',
	) );
	

	
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Top Menu Style ','softd'),
			'id'      => $prefix . 'softd_header_topa',
			'type'    => 'radio_inline',
			'desc'	  => 'Select menu style. this section work only this page, when you are not select menu in the redux menu area, then it will work.',
			'options' => array(
			'1' => esc_html__( 'Show Top Menu This Page', 'softd' ),
			'2'   => esc_html__( 'Hide Top Menu This Page', 'softd' ),
			),
			'default' =>'2',
		) );
	
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Top Menu Style 2 ','softd'),
			'id'      => $prefix . 'toptsst',
			'type'    => 'radio_inline',
			'desc'	  => 'Select menu style. this section work only this page, when you are not select menu in the redux menu area, then it will work.',
			'options' => array(
			'1' => esc_html__( 'Show Top Menu 2', 'softd' ),
			'2'   => esc_html__( 'Hide Top Menu 2', 'softd' ),
			),
			'default' =>'2',
		) );
	
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Header Style','softd'),
			'id'      => $prefix . 'softd_header_style',
			'show_option_none' => true,
			'desc'   => esc_html__( 'Note: When you select  3,4,5,1-1,8,9,11,12,13,20,21 style menu, that time you need to set top bar menu, otherwise you can not find our real menu style. this section work only this page, when you are not select menu in the redux menu area, then it will work.', 'softd' ), 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( '1 Header Default Menu', 'softd' ),													
				'2' => esc_html__( '2 Header Transparent Menu', 'softd' ),
				'3' => esc_html__( '3 Header Transparent With Sticky Menu', 'softd' ),		
				'4' => esc_html__( '4 Header One Page Menu', 'softd' ),
				'5' => esc_html__( '5 Header One Page Transparent Menu', 'softd' ),				
				'6' => esc_html__( '6 Header One Page Transparent With Sticky  Menu', 'softd' ),
				'7' => esc_html__( '1-1 Header Default with Sticky Menu', 'softd' ),							
				'8' => esc_html__( '8 Header Menu With Search', 'softd' ),
				'9' => esc_html__( '9 Header Menu With Social Icon', 'softd' ),
				'10' => esc_html__( '10 Header Menu With Button', 'softd' ),
				'11' => esc_html__( '11 Header Menu With Button headroom Menu', 'softd' ),
				'12' => esc_html__( '12 Header Menu With Search and no Logo', 'softd' ),
				'13' => esc_html__( '13 Header Transparent Sticky No logo Menu', 'softd' ),					
				'14' => esc_html__( '14 Header One Page With Search Menu', 'softd' ),
				'15' => esc_html__( '15 Header Mini Shop Menu', 'softd' ),										
				'16' => esc_html__( '16 Header Hamburgers Menu', 'softd' ),										
				'17' => esc_html__( '17 Header Box Style Menu', 'softd' ),
				'18' => esc_html__( '18 No Logo,Search, Mini Shop Button', 'softd' ),				
				'19' => esc_html__( '19 Left Logo,Right Search, Mini Shop Button', 'softd' ),	
				'20' => esc_html__( '20 Left Logo,Right Search,Popup Menu,Button', 'softd' ),
				'21' => esc_html__( '21 No Logo,Right Search,Popup Menu,Button', 'softd' ),
				'22' => esc_html__( '22 Header Menu Hide', 'softd' ),			
			),
			'default' =>'1',
		) );
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Select Menu Position','softd'),
			'id'      => $prefix . 'toptsstas1',
			'show_option_none' => true,
			'desc'      => esc_html__('Select menu position. this section work only this page, when you are not select menu position in the redux menu position area, then it will work.  ', 'softd'),	 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( 'Select absolute menu', 'softd' ),				
				'2' => esc_html__( 'All Header absolute ', 'softd' ),				
				'3' => esc_html__( 'Top 2 and Main Menu Header absolute', 'softd' ),
				'4' => esc_html__( 'Main Menu absolute', 'softd' ),		
			),
			'default' =>'1',
		) );		
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Select Box Layout Top Menu','softd'),
			'id'      => $prefix . 'box_menu_style2',
			'show_option_none' => true,
			'desc'      => esc_html__('Select menu box style. this section work only this page, when you are not select menu in the redux menu area, then it will work.', 'softd'),	 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( 'Box Layout', 'softd' ),				
				'2' => esc_html__( 'Box Inner Layout', 'softd' ),
				'3' => esc_html__( 'Full Width', 'softd' ),		
			),
			'default' =>'1',
		) );
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Select Box Layout Menu Top 2','softd'),
			'id'      => $prefix . 'box_menu_style3',
			'show_option_none' => true,
			'desc'      => esc_html__('Select menu box style. this section work only this page, when you are not select menu in the redux menu area, then it will work.', 'softd'),	 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( 'Box Layout', 'softd' ),				
				'2' => esc_html__( 'Box Inner Layout', 'softd' ),
				'3' => esc_html__( 'Full Width', 'softd' ),		
			),
			'default' =>'1',
		) );
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Select Box Layout Main Menu','softd'),
			'id'      => $prefix . 'box_menu_style',
			'show_option_none' => true,
			'desc'      => esc_html__('Select menu box style. this section work only this page, when you are not select menu in the redux menu area, then it will work.', 'softd'),	 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( 'Box Layout', 'softd' ),				
				'2' => esc_html__( 'Box Inner Layout', 'softd' ),
				'3' => esc_html__( 'Full Width', 'softd' ),		
			),
			'default' =>'1',
		) );
		
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Logo And Menu Style','softd'),
			'id'      => $prefix . 'softd_logo_menu_style',
			'show_option_none' => true,
			'desc'      => esc_html__('This option work only, when you select  - 1 and 1-1  style menu', 'softd'),	 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( '1 Logo Left', 'softd' ),				
				'2' => esc_html__( '2 Logo Right', 'softd' ),
				'3' => esc_html__( '3 Logo Top', 'softd' ),		
			),
			'default' =>'1',
		) );


				
		  //page metabox
		  $page_breadcrumb = new_cmb2_box( array(
		   'id'            => $prefix . 'pageid1',
		   'title'         => esc_html__( 'Breadcumb Option', 'softd' ),
		   'object_types'  => array( 'post','page','em_event','em_portfolio' ), // Post type
		   'priority'   => 'high',
		  ) );
		  
		  $page_breadcrumb->add_field( array(
		   'name'    => esc_html__('Page Title','softd'),
		   'id'      => $prefix . 'ptitle',
		   'type'    => 'radio_inline',
		   'options' => array(
			'ptitles' => esc_html__( 'Hide Title', 'softd' ),
			'ptitleh'   => esc_html__( 'Show Title', 'softd' ),
		   ),
		   'default' =>'ptitles',
		  ) );   
		  
		  
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb','softd'),
			'id'      => $prefix . 'breadcrumbs',
			'type'    => 'radio_inline',
			'options' => array(
			'0' => esc_html__( 'Show breadcrumb', 'softd' ),
			'1'   => esc_html__( 'Hide breadcrumb', 'softd' ),
			),
			'default' =>0,
		) );
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb Title','softd'),
			'id'      => $prefix . 'btitle',
			'type'    => 'radio_inline',
			'options' => array(
			'btitles' => esc_html__( 'Show Title', 'softd' ),
			'btitleh'   => esc_html__( 'Hide Title', 'softd' ),
			),
			'default' =>'btitles',
		) );    
		$page_breadcrumb->add_field(array(
			'name' => esc_html__( 'Page Breadcrumb Image', 'softd' ),
			'id'   => $prefix .'pageimagess',
			'desc'       => esc_html__( 'insert image here', 'softd' ),  
			'type' => 'file',
		) );  
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Align','softd'),
			'desc'             => esc_html__('Select an option','softd'),
			'id'   => $prefix .'page_text_align',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'text-center',
			'options'          => array(
			'text-left' => esc_html__( 'Align Left', 'softd' ),
			'text-center'   => esc_html__( 'Align Middle', 'softd' ),
			'text-right'     => esc_html__( 'Alige Right', 'softd' ),
			),
		) );
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Transform','softd'),
			'desc'             => esc_html__('Select an option','softd'),
			'id'   => $prefix .'page_text_transform',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'ccase',
			'options'          => array(
			'lcase' => esc_html__( 'Transform lowercase', 'softd' ),
			'ucase'   => esc_html__( 'Transform uppercase', 'softd' ),
			'ccase'     => esc_html__( 'Transform capitalize', 'softd' ),
			),
		) );


		
		

		//page metabox
		$testimonial = new_cmb2_box( array(
			'id'            => $prefix . 'em_testimonial',
			'title'         => esc_html__( 'Testimonial Option', 'softd' ),
			'object_types'  => array( 'em_testimonial' ), // Post type
			'priority'   => 'high',
		) );
			$testimonial->add_field( array(
				'name'       => esc_html__( 'Degignation', 'softd' ),
				'desc'       => esc_html__( 'insert Degignation here', 'softd' ),
				'id'         => $prefix . 'testi_deg',
				'type'       => 'text',
			) );
			$testimonial->add_field( array(
				'name'    => esc_html__('Rating Style','softd'),
				'id'      => $prefix . 'em_rating',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'Select Rating', 'softd' ),
					'1' => esc_html__( 'Rating 1 Star', 'softd' ),
					'2' => esc_html__( 'Rating 2 Star', 'softd' ),
					'3' => esc_html__( 'Rating 3 Star', 'softd' ),
					'4' => esc_html__( 'Rating 4 Star', 'softd' ),
					'5' => esc_html__( 'Rating 5 Star', 'softd' ),
				),
				'default' =>5,
			) );
			$testimonial->add_field( array(
				'name'       => esc_html__( 'Review Text', 'softd' ),
				'desc'       => esc_html__( 'insert Review Text here', 'softd' ),
				'id'         => $prefix . 'review_text',
				'type'       => 'text',
				'default' =>'Execllent!!',
			) );			
			$testimonial->add_field(array(
				'name' => esc_html__( 'Review Screenshot Image', 'softd' ),
				'id'   => $prefix .'screenshot_img',
				'desc'       => esc_html__( 'insert screenshot image here, Recommenddt Image Size, Example:585*396, Working Style only 13', 'softd' ),  
				'type' => 'file',
			) );			
			$testimonial->add_field(array(
				'name' => esc_html__( 'Logo Image', 'softd' ),
				'id'   => $prefix .'testi_logo',
				'desc'       => esc_html__( 'insert logo image here, Recommenddt Image Size, Example:85*85, Working Style only 4,9,10,12,13', 'softd' ),  
				'type' => 'file',
			) );
/*			
			$testimonial->add_field( array(
				'name'       => esc_html__( 'Date Field', 'softd' ),
				'desc'       => esc_html__( 'insert date here ex- 16, November 2018', 'softd' ),
				'id'         => $prefix . 'em_tes_date',
				'type'       => 'text',
			) );					
			$testimonial->add_field( array(
				'name'       => esc_html__( 'Active Class', 'softd' ),
				'desc'       => esc_html__( 'insert class "tactive" here', 'softd' ),
				'id'         => $prefix . 'testi_active',
				'type'       => 'text',
			) );	
*/			
				
			//===================================
			//Team Metaboxes
			//===================================  				
		//em_team metabox
		$team = new_cmb2_box( array(
			'id'            => $prefix . 'em_team',
			'title'         => esc_html__( 'Team Option', 'softd' ),
			'object_types'  => array( 'em_team' ), // Post type
			'priority'   => 'high',
		) );

			$team->add_field( array(
				'name'       => esc_html__( 'Designation', 'softd' ),
				'desc'       => esc_html__( 'insert designation title here ex- Team Information hhere', 'softd' ),
				'id'         => $prefix . 'team_titles',
				'type'       => 'text',
				'default' =>'Funder',
			) );
			   $team->add_field( array(
				'name'       => esc_html__( ' List Text', 'softd' ),
				'desc'       => esc_html__( 'List Working Team Style 8. use list from here, must be use the stcructure ex <ul><li><a href="#"> <i class="icofont-phone"></i> 099 - 563 369 58</a></li><li><a href="#"><i class="icofont-envelope"></i>demo@example.com</a></li></ul> OR <ul><li> <i class="icofont-phone"></i> 099 - 563 369 58</li><li><i class="icofont-envelope"></i>demo@example.com</li></ul>', 'softd' ),
				'id'         => $prefix . 'listt_text',
				'type'       => 'textarea',
				'default' => '<ul><li> <i class="icofont-phone"></i> 099 - 563 369 58</li><li><i class="icofont-envelope"></i>demo@example.com</li></ul>',
			   ) );			

			// class single meta field every day time
				$teamgrop3 = $team->add_field( array(
				  'id'          => $prefix . 'teamgroup',
				  'type'        => 'group',
				  'description' => __( 'Add single Social', 'softd' ),
				  'options'     => array(
				   'group_title'   => __( 'Social Item {#}', 'softd' ), // {#} gets replaced by row number
				   'add_button'    => __( 'Add Item', 'softd' ),
				   'remove_button' => __( 'Remove Icon', 'softd' ),
				   'sortable'      => true, // beta
					),
				) );
				$team->add_group_field( $teamgrop3, array(
					'name'       => __( 'Social Icon Name', 'softd' ),
					'desc'       => esc_html__( 'Enter your Name ex-icofont=icofont-facebook, Themify=ti-star,Font-awesome=fa fa-bell.Suppot Font-awesome,icofont,Themify, icons.', 'softd' ),
					'id'         => $prefix . 'time_i',
					'type'       => 'text',
					'default' =>'icofont-facebook',
				) );
				$team->add_group_field( $teamgrop3, array(
					'name'       => __( 'Social Link', 'softd' ),
					'desc'       => __( 'Enter your Icon Link ex- www.example.com', 'softd' ),
					'id'         => $prefix . 'team_l',
					'type'       => 'text',
					'default' =>'#',
				) );
				
				$team->add_field( array(
					'name'       => esc_html__( 'Team Information Title', 'softd' ),
					'desc'       => esc_html__( 'insert designation title here ex- Team Information hhere', 'softd' ),
					'id'         => $prefix . 'team_Info',
					'default' => 'Team Information',
					'type'       => 'text',
				) );				
			   $team->add_field( array(
				'name'       => esc_html__( 'Single Team List Text', 'softd' ),
				'desc'       => esc_html__( 'List use from here, must be use the stcructure ex <ul><li><a href="#"> <i class="icofont-phone"></i> 099 - 563 369 58</a></li><li><a href="#"><i class="icofont-envelope"></i>demo@example.com</a></li><li><a href="#"> <i class="icofont-google-map"></i>Themexbd Floor New World, UK.</a></li></ul> OR <ul><li><i class="icofont-phone"></i> 099 - 563 369 58</li><li><i class="icofont-envelope"></i>demo@example.com</li><li><i class="icofont-google-map"></i>Themexbd Floor New World, UK.</li></ul>', 'softd' ),
				'id'         => $prefix . 'single_list',
				'type'       => 'textarea',
				'default' => '<ul><li><i class="icofont-phone"></i> 099 - 563 369 58</li><li><i class="icofont-envelope"></i>demo@example.com</li><li><i class="icofont-google-map"></i>Themexbd Floor New World, UK.</li></ul>',
			   ) );
				//Button
				$team->add_field( array(
					'name'       => esc_html__( 'Button Text', 'softd' ),
					'desc'       => esc_html__( 'insert button text here', 'softd' ),
					'id'         => $prefix . 'team_btn',
					'default' => 'Contact Me At',
					'type'       => 'text',
				) );
				$team->add_field( array(
					'name'       => esc_html__( 'Button url', 'softd' ),
					'desc'       => esc_html__( 'insert button text url here', 'softd' ),
					'id'         => $prefix . 'team_btnutl',
					'default' => '#',
					'type'       => 'text_url',
				) );				
			//===================================
			//Portfolio Metaboxes
			//===================================  

			$portfolio = new_cmb2_box( array(
				'id'            => $prefix . 'portfolio',
				'title'         => esc_html__( 'Portfolio Option', 'softd' ),
				'object_types'  => array( 'em_portfolio', ), // Post type
				'priority'   => 'high',
			) );
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Information Title', 'softd' ),
				'desc'       => esc_html__( 'add your title here', 'softd' ),
				'id'         => $prefix . 'pftitle',
				'type'       => 'text',
			   ) );
			 // class single meta field every day time
				$portgrop2 = $portfolio->add_field( array(
				  'id'          => $prefix . 'portgroup',
				  'type'        => 'group',
				  'description' => __( 'Add Feature List', 'softd' ),
				  'options'     => array(
				   'group_title'   => __( 'List Item {#}', 'softd' ), // {#} gets replaced by row number
				   'add_button'    => __( 'Add Item', 'softd' ),
				   'remove_button' => __( 'Remove Icon', 'softd' ),
				   'sortable'      => true, // beta
					),
				) );
				$portfolio->add_group_field( $portgrop2, array(
					'name'       => __( 'List Title', 'softd' ),
					'desc'       => __( 'add title here', 'softd' ),
					'id'         => $prefix . 'pttitle',
					'type'       => 'text',
				) );
				$portfolio->add_group_field( $portgrop2, array(
					'name'       => __( 'List Value', 'softd' ),
					'desc'       => __( 'insert Value', 'softd' ),
					'id'         => $prefix . 'ptvalue',
					'type'       => 'textarea',
				) );

			
			
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide All Option','softd'),			  
			   'id'      => $prefix . 'saloption',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_alshow' => esc_html__( 'Show', 'softd' ),
				'm_alhide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'m_alhide',
			  ) );			
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Image','softd'),			  
			   'id'      => $prefix . 'siimagepop',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_ishow' => esc_html__( 'Show', 'softd' ),
				'm_ihide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'m_ishow',
			  ) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Link Page','softd'),			  
			   'id'      => $prefix . 'sllink',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_lshow' => esc_html__( 'Show', 'softd' ),
				'm_lhide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'m_lshow',
			  ) );				  
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Youtube','softd'),			  
			   'id'      => $prefix . 'shyoutub',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_yshow' => esc_html__( 'Show', 'softd' ),
				'm_yhide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'m_yhide',
			  ) );				
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Youtube Video', 'softd' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'softd' ),
				'id'         => $prefix . 'pyoutube',
				'type'       => 'text_url',
			   ) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Vimeo','softd'),			  
			   'id'      => $prefix . 'svvimeo',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_vshow' => esc_html__( 'Show', 'softd' ),
				'm_vhide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'m_vhide',
			  ) );				   
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Vimeo Video', 'softd' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'softd' ),
				'id'         => $prefix . 'pvimeo',
				'type'       => 'text_url',
			   ) );		   

			  $portfolio->add_field( array(
			   'name'    => esc_html__('Select Multi Gellary','softd'),			  
			   'id'      => $prefix . 'm_g_image_pop',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_gshow' => esc_html__( 'Show', 'softd' ),
				'm_ghide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'m_ghide',
			  ) );				   
				$portfolio->add_field( array(
					'name'       => esc_html__( 'Multiple Gellary Image', 'softd' ),
					'desc'       => esc_html__( 'insert multiple gellary image here for single page and recommended image size- 950x550px', 'softd' ),
					'id'         => $prefix . 'pgellaryu',
					'type'       => 'file_list',
				) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Title','softd'),			  
			   'id'      => $prefix . 'pshow_title',
			   'type'    => 'radio_inline',
			   'options' => array(
				'ptitle_show' => esc_html__( 'Show', 'softd' ),
				'ptitle_hide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'ptitle_show',
			  ) );					
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Category','softd'),			  
			   'id'      => $prefix . 'pshow_cat',
			   'type'    => 'radio_inline',
			   'options' => array(
				'pcat_show' => esc_html__( 'Show', 'softd' ),
				'pcat_hide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'pcat_show',
			  ) );



//===================================
//service  metabox
//===================================
		$service = new_cmb2_box( array(
			'id'            => $prefix . 'service',
			'title'         => esc_html__( 'service Option', 'softd' ),
			'object_types'  => array( 'em_service', ), // Post type
			'priority'   => 'high',
		) );
			  $service->add_field( array(
			   'name'    => esc_html__('Show/Hide Icon Image','softd'),			  
			   'id'      => $prefix . 'service_icon_img',
			   'type'    => 'radio_inline',
			   'options' => array(
				'icon_img_show' => esc_html__( 'Show', 'softd' ),
				'icon_img_hide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'icon_img_hide',
			  ) );	
				$service->add_field(array(
					'name' => esc_html__( 'Icon Image', 'softd' ),
					'id'   => $prefix .'img_s',
					'desc'       => esc_html__( 'insert icon image here', 'softd' ),  
					'type' => 'file',
				) );
				
				$service->add_field( array(
			   'name'    => esc_html__('Show/Hide Custom Icon','softd'),			  
			   'id'      => $prefix . 'service_icon',
			   'type'    => 'radio_inline',
			   'options' => array(
				'c_icon_show' => esc_html__( 'Show', 'softd' ),
				'c_icon_hide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'c_icon_show',
			  ) );	
			   $service->add_field( array(
				'name'       => esc_html__( 'Icon Name Here', 'softd' ),
				'desc'       => esc_html__( 'Enter your Name ex-icofont=icofont-addons, Themify=ti-star,Font-Awesome=fa fa-bell.Suppot Font-awesome,icofont,Themify, icons.', 'softd' ),
				'id'         => $prefix . 'icon_text',
				'type'       => 'text',
				'default' =>'icofont-addons',
			   ) );
			   
			   $service->add_field( array(
				'name'       => esc_html__( 'Sub Title', 'softd' ),
				'desc'       => esc_html__( 'Not use title, remove the text from field, Sub Title Working Style 11', 'softd' ),
				'id'         => $prefix . 'subtitle',
				'type'       => 'text',
				'default' =>'Sub title here',
			   ) );
			   
				$service->add_field( array(
			   'name'    => esc_html__('Show/Hide List','softd'),			  
			   'id'      => $prefix . 'show_list',
			   'type'    => 'radio_inline',
			   'options' => array(
				'c_list_show' => esc_html__( 'Show', 'softd' ),
				'c_list_hide'   => esc_html__( 'Hide', 'softd' ),
			   ),
			   'default' =>'c_list_show',
			  ) );			  
			  
			   $service->add_field( array(
				'name'       => esc_html__( ' List', 'softd' ),
				'desc'       => esc_html__( 'List Working Style 10,11. use list from here, must be use the stcructure ex <ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li></ul> OR TEXT USE EX-<ul><li><p>Text List</p></li></ul> OR TEXT USE EX-<ul><li><span>Text List</span></li></ul> OR TEXT USE EX-<ul><li>Text List</li></ul> when icon use ex <ul><li><i class="fas fa-check"></i></li><li><i class="fas fa-times-circle"></i></li></ul>', 'softd' ),
				'id'         => $prefix . 'list_text',
				'type'       => 'textarea',
				'default' => '<ul><li><i class="fas fa-check"></i></li><li><i class="fas fa-check"></i></li></ul><ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li></ul>',
			   ) );				
				
			   $service->add_field( array(
				'name'       => esc_html__( 'Service Information Title', 'softd' ),
				'desc'       => esc_html__( 'add your title here', 'softd' ),
				'id'         => $prefix . 'infotitle',
				'type'       => 'text',
				'default' =>'Service Information',
			   ) );
			 // class single meta field every day time
				$service2 = $service->add_field( array(
				  'id'          => $prefix . 'portgroup',
				  'type'        => 'group',
				  'description' => __( 'Add Feature List', 'softd' ),
				  'options'     => array(
				   'group_title'   => __( 'List Item {#}', 'softd' ), // {#} gets replaced by row number
				   'add_button'    => __( 'Add Item', 'softd' ),
				   'remove_button' => __( 'Remove Icon', 'softd' ),
				   'sortable'      => true, // beta
					),
				) );
				$service->add_group_field( $service2, array(
					'name'       => __( 'List Title', 'softd' ),
					'desc'       => __( 'add title here', 'softd' ),
					'id'         => $prefix . 'pttitle',
					'type'       => 'text',
					'default' =>'Name:',
				) );
				$service->add_group_field( $service2, array(
					'name'       => __( 'List Text', 'softd' ),
					'desc'       => esc_html__( 'insert Your Text, Support- a,example:<a href="#">text here</a>', 'softd' ),
					'id'         => $prefix . 'ptvalue',
					'type'       => 'textarea',
					'default' =>'Business Plan',
				) );




			  
//===================================
//Pricing table metabox
//===================================
		$pricing = new_cmb2_box( array(
			'id'            => $prefix . 'pricing',
			'title'         => esc_html__( 'Price Option', 'softd' ),
			'object_types'  => array( 'em_pricing', ), // Post type
			'priority'   => 'high',
		) );
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Currency', 'softd' ),
					'desc'       => esc_html__( 'insert Currency here e.g $', 'softd' ),
					'id'         => $prefix . 'currency',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Amount', 'softd' ),
					'desc'       => esc_html__( 'insert Amount here', 'softd' ),
					'id'         => $prefix . 'price_amount',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Delay', 'softd' ),
					'desc'       => esc_html__( 'insert Year, Month, Week or Day here', 'softd' ),
					'id'         => $prefix . 'day',
					'type'       => 'text',
				) );						
				$pricing->add_field( array(
					'name'       => esc_html__( 'pricing content', 'softd' ),
					'desc'       => esc_html__( 'insert pricing Item', 'softd' ),
					'id'         => $prefix . 'pricing_item_loop',
					'type'       => 'text',
					'repeatable'      => true,
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Text', 'softd' ),
					'desc' => esc_html__( 'Insert Text Here', 'softd' ),
					'id'   => $prefix . 'button_text',
					'type' => 'text',
				) );					
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Link', 'softd' ),
					'desc' => esc_html__( 'Insert register Link', 'softd' ),
					'id'   => $prefix . 'button_link',
					'type' => 'text_url',
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Active Class', 'softd' ),
					'desc' => esc_html__( 'Add Active Class here "active"', 'softd' ),
					'id'   => $prefix . 'active',
					'type' => 'text',
				) );

			//post tab metabox
			$emtab = new_cmb2_box( array(
				'id'            => $prefix . 'em_tab',
				'title'         => esc_html__( 'Tab Option', 'softd' ),
				'object_types'  => array( 'em_tab' ), // Post type
				'priority'   => 'high',
			) );

				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Name', 'softd' ),
					'desc'       => esc_html__( 'insert tab menu here', 'softd' ),
					'id'         => $prefix . 'em_tab_menu',
					'type'       => 'text',
					'default' => 'Tab One',					
				) );					
									
				$emtab->add_field(array(
					'name' => esc_html__( 'Tab Menu Image', 'softd' ),
					'id'   => $prefix .'em_tab_image',
					'desc'       => esc_html__( 'insert image here', 'softd' ),  
					'type' => 'file',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Button Text 1', 'softd' ),
					'desc'       => esc_html__( 'insert button text here', 'softd' ),
					'id'         => $prefix . 'em_tab_btn1',
					'type'       => 'text',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Button url 1', 'softd' ),
					'desc'       => esc_html__( 'insert button text url here', 'softd' ),
					'id'         => $prefix . 'em_tab_btn1utl',
					'type'       => 'text_url',
					'default' => '#',
				) );			
				$emtab->add_field( array(
					'name'       => esc_html__( 'Button Text 2', 'softd' ),
					'desc'       => esc_html__( 'insert button text here', 'softd' ),
					'id'         => $prefix . 'em_tab_btn2',
					'type'       => 'text',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Button url 2', 'softd' ),
					'desc'       => esc_html__( 'insert button text url here', 'softd' ),
					'id'         => $prefix . 'em_tab_btn2url',
					'type'       => 'text_url',
					'default' => '#',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Active', 'softd' ),
					'desc'       => esc_html__( 'must be set "active show" class into one post from all post, for active tab item', 'softd' ),
					'id'         => $prefix . 'em_tab_active',
					'type'       => 'text',
				) );	


		//em_event metabox
		$event = new_cmb2_box( array(
			'id'            => $prefix . 'em_event',
			'title'         => esc_html__( 'Event Option', 'softd' ),
			'object_types'  => array( 'em_event' ), // Post type
			'priority'   => 'high',
		) );
			$event->add_field( array(
				'name'       => esc_html__( 'Day', 'softd' ),
				'desc'       => esc_html__( 'insert time here ex- 28', 'softd' ),
				'id'         => $prefix . 'event_day',
				'type'       => 'text',
			) );
			$event->add_field( array(
				'name'       => esc_html__( 'Month', 'softd' ),
				'desc'       => esc_html__( 'insert time here ex- May', 'softd' ),
				'id'         => $prefix . 'event_month',
				'type'       => 'text',
			) );
			$event->add_field( array(
				'name'       => esc_html__( 'Year', 'softd' ),
				'desc'       => esc_html__( 'insert time here ex- 2020', 'softd' ),
				'id'         => $prefix  . 'event_year',
				'type'       => 'text',
			) );			
			$event->add_field( array(
				'name'       => esc_html__( 'Time', 'softd' ),
				'desc'       => esc_html__( 'insert time here ex- 10PM-12PM', 'softd' ),
				'id'         => $prefix . 'event_time',
				'type'       => 'text',
			) );					
			$event->add_field( array(
				'name'       => esc_html__( 'Address', 'softd' ),
				'desc'       => esc_html__( 'insert address here ex- Rangpur, Bangladesh', 'softd' ),
				'id'         => $prefix . 'event_address',
				'type'       => 'text',
			) );
			$event->add_field( array(
				'name'       => esc_html__( 'Title', 'softd' ),
				'desc'       => esc_html__( 'insert title here ex- Event Informationh', 'softd' ),
				'id'         => $prefix . 'event_titles',
				'type'       => 'text',
			) );			
				
			 // class single meta field every day time
				$eventgrop3 = $event->add_field( array(
				  'id'          => $prefix . 'eventgroup',
				  'type'        => 'group',
				  'description' => __( 'Add single address', 'softd' ),
				  'options'     => array(
				   'group_title'   => __( 'Address Item {#}', 'softd' ), // {#} gets replaced by row number
				   'add_button'    => __( 'Add Item', 'softd' ),
				   'remove_button' => __( 'Remove Icon', 'softd' ),
				   'sortable'      => true, // beta
					),
				) );
				$event->add_group_field( $eventgrop3, array(
					'name'       => __( 'Address key', 'softd' ),
					'desc'       => __( 'insert key', 'softd' ),
					'id'         => $prefix . 'etime1',
					'type'       => 'text',
				) );
				$event->add_group_field( $eventgrop3, array(
					'name'       => __( 'Address Value', 'softd' ),
					'desc'       => __( 'insert Value', 'softd' ),
					'id'         => $prefix . 'etime2',
					'type'       => 'text',
				) );
			
			$event->add_field( array(
				'name'       => esc_html__( 'Admin Title', 'softd' ),
				'desc'       => esc_html__( 'insert Degignation here, This Option Working Style 7', 'softd' ),
				'id'         => $prefix . 'admin_title',
				'type'       => 'text',
			) );
			$event->add_field( array(
				'name'       => esc_html__( 'Admin Degignation', 'softd' ),
				'desc'       => esc_html__( 'insert Degignation here, This Option Working Style 7', 'softd' ),
				'id'         => $prefix . 'admin_deg',
				'type'       => 'text',
			) );
			$event->add_field(array(
				'name' => esc_html__( 'Admin Image', 'softd' ),
				'id'   => $prefix .'admin_img',
				'desc'       => esc_html__( 'insert admin image here, This Option Working Style 7', 'softd' ),  
				'type' => 'file',
			) );			
			
			$event->add_field( array(
				'name'       => esc_html__( 'Google map', 'softd' ),
				'desc'       => esc_html__( 'insert your google map embed link', 'softd' ),
				'id'         => $prefix . 'map_event',
				'type'       => 'textarea_code',
			) );	
				
				
				
//slider table metabox
	$slider = new_cmb2_box( array(
		'id'            => $prefix . 'softd_slider',
		'title'         => esc_html__( 'Slider Option', 'softd' ),
		'object_types'  => array( 'em_slider', ), // Post type
		'priority'   => 'high',
	) );
	
	
			$slider->add_field( array(
				'name'       => esc_html__( 'Title', 'softd' ),
				'desc'       => esc_html__( 'insert title here. for highlight text use <span> ex-<span>Design</span>', 'softd' ),
				'id'         => $prefix . 'em_slide_title',
				'type'       => 'textarea_small',
			) );

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate','softd'),
				'id'      => $prefix . 'em_aimate_title',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'softd' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'softd' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'softd' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'softd' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'softd' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'softd' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'softd' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'softd' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'softd' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'softd' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'softd' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'softd' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'softd' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'softd' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'softd' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'softd' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'softd' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'softd' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'softd' ),				
					'rollIn' => esc_html__( 'rollIn', 'softd' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'softd' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'softd' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'softd' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'softd' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'softd' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'softd' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'softd' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'softd' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'softd' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Duration','softd'),
				'id'      => $prefix . 'em_durations_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Delay','softd'),
				'id'      => $prefix . 'em_dealy_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'softd' ),							
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'0',
			) );		

		
		
		
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Sub Title', 'softd' ),
				'desc'       => esc_html__( 'insert sub-title here. for highlight text use <span> ex-<span>website</span>', 'softd' ),
				'id'         => $prefix . 'em_slide_subtitle',
				'type'       => 'textarea_small',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate','softd'),
				'id'      => $prefix . 'em_aimate_subtitle',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'softd' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'softd' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'softd' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'softd' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'softd' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'softd' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'softd' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'softd' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'softd' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'softd' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'softd' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'softd' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'softd' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'softd' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'softd' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'softd' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'softd' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'softd' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'softd' ),				
					'rollIn' => esc_html__( 'rollIn', 'softd' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'softd' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'softd' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'softd' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'softd' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'softd' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'softd' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'softd' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'softd' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'softd' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Duration','softd'),
				'id'      => $prefix . 'em_durations_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Delay','softd'),
				'id'      => $prefix . 'em_dealy_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'softd' ),							
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'0',
			) );


			
			$slider->add_field( array(
				'name'       => esc_html__( 'Content', 'softd' ),
				'desc'       => esc_html__( 'use insert content here', 'softd' ),				
				'id'         => $prefix . 'em_slide_textarea',
				'type'       => 'textarea',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate','softd'),
				'id'      => $prefix . 'em_aimate_content',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'softd' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'softd' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'softd' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'softd' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'softd' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'softd' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'softd' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'softd' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'softd' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'softd' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'softd' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'softd' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'softd' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'softd' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'softd' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'softd' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'softd' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'softd' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'softd' ),				
					'rollIn' => esc_html__( 'rollIn', 'softd' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'softd' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'softd' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'softd' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'softd' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'softd' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'softd' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'softd' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'softd' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'softd' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Duration','softd'),
				'id'      => $prefix . 'em_durations_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Delay','softd'),
				'id'      => $prefix . 'em_dealy_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'softd' ),							
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'0',
			) );				
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 1', 'softd' ),
				'desc'       => esc_html__( 'insert button text here', 'softd' ),
				'id'         => $prefix . 'em_slide_btn1',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 1', 'softd' ),
				'desc'       => esc_html__( 'insert button text url here', 'softd' ),
				'id'         => $prefix . 'em_slide_btn1utl',
				'type'       => 'text_url',
			) );			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 2', 'softd' ),
				'desc'       => esc_html__( 'insert button text here', 'softd' ),
				'id'         => $prefix . 'em_slide_btn2',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 2', 'softd' ),
				'desc'       => esc_html__( 'insert button text url here', 'softd' ),
				'id'         => $prefix . 'em_slide_btn2url',
				'type'       => 'text_url',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate','softd'),
				'id'      => $prefix . 'em_aimate_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'softd' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'softd' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'softd' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'softd' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'softd' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'softd' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'softd' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'softd' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'softd' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'softd' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'softd' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'softd' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'softd' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'softd' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'softd' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'softd' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'softd' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'softd' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'softd' ),				
					'rollIn' => esc_html__( 'rollIn', 'softd' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'softd' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'softd' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'softd' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'softd' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'softd' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'softd' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'softd' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'softd' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'softd' ),				
				),
				'default' =>'bounceInUp',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Duration','softd'),
				'id'      => $prefix . 'em_durations_btn',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Delay','softd'),
				'id'      => $prefix . 'em_dealy_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'softd' ),							
					'0.1' => esc_html__( 'point 1s', 'softd' ),							
					'0.2' => esc_html__( 'point 2s', 'softd' ),							
					'0.3' => esc_html__( 'point 3s', 'softd' ),							
					'0.4' => esc_html__( 'point 4s', 'softd' ),							
					'0.5' => esc_html__( 'point 5s', 'softd' ),							
					'0.6' => esc_html__( 'point 6s', 'softd' ),							
					'0.7' => esc_html__( 'point 7s', 'softd' ),							
					'0.8' => esc_html__( 'point 8s', 'softd' ),							
					'0.9' => esc_html__( 'point 9s', 'softd' ),							
					'1.2' => esc_html__( '1 point 2s', 'softd' ),							
					'1.3' => esc_html__( '1 point 3s', 'softd' ),							
					'1.4' => esc_html__( '1 point 4s', 'softd' ),							
					'1.5' => esc_html__( '1 point 5s', 'softd' ),							
					'1.8' => esc_html__( '1 point 8s', 'softd' ),							
					'2' => esc_html__( '2s', 'softd' ),							
					'2.2' => esc_html__( '2 point 2s', 'softd' ),							
					'2.3' => esc_html__( '2 point 5s', 'softd' ),							
					'3' => esc_html__( '3s', 'softd' ),							
				),
				'default' =>'1',
			) );				
			
			$slider->add_field(array(
				'name' => esc_html__( 'Slider Left & Right Image', 'softd' ),
				'id'   => $prefix .'slider_lr',
				'desc'       => esc_html__( 'insert image here', 'softd' ),  
				'type' => 'file',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Note:- Slider Left & Right Image only work on slider style 2', 'softd' ),
				'id'         => $prefix . 'title_imageh_line',
				'type'       => 'title',
			) );			
			$slider->add_field( array(
				'name'    => esc_html__('Text Alignment Style','softd'),
				'id'      => $prefix . 'em_slider_posi',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'' => esc_html__( 'Select alignment', 'softd' ),
					'text-left' => esc_html__( 'Left Alignment', 'softd' ),
					'text-center' => esc_html__( 'Center Alignment', 'softd' ),
					'text-right' => esc_html__( 'Right Alignment', 'softd' ),
				),
				'default' =>'text-center',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'More Sliders Option, Please see slider widget area', 'softd' ),
				'id'         => $prefix . 'title_heading_line',
				'type'       => 'title',
			) );				
	
			
	}
}


