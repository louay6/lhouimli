<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "softd_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Theme Options', 'softd' ),
        'page_title'           => esc_html__( 'Theme Options', 'softd' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */


    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('General', 'softd'),
        'id'        => 'main_logo_id',
        'desc'      => esc_html__('Welcome Our Theme Option', 'softd'),
        'customizer_width' => '400px',
        'icon'      => 'el-icon-cog',
    ) );


/*========================
softd Typography FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Typography Area', 'softd'),
        'id'         => 'softd_tyfo_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(				
			
				array(
					'id'          => 'softd_body_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Body Typography Style', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'output'      => array('
						body,p						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'softd_heading_all_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Headibg Typography Style', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h1, h2, h3, h4, h5, h6					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				
				array(
					'id'          => 'softd_heading_typographyh1',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H1', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h1				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'softd_heading_typographyh2',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H2', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h2				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'softd_heading_typographyh3',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H3', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h3			
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'softd_heading_typographyh4',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H4', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h4				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'softd_heading_typographyh5',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H5', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h5					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'softd_heading_typographyh6',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H6', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h6					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),					
				

				
								
            ),
    ) );
	
/*========================
END softd Typography FIELD
=========================*/
	
	//total header area
     Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header area', 'softd'),
        'id'        => 'softd_header_area',
        'desc'      => esc_html__('Header options', 'softd'),
        'icon'      => 'el-icon-tasks',      
        'fields'    => array(
		
             array(
                    'id'        => 'softd_header_display_none_hide',
					'desc'      => esc_html__('All Menu OFF/ON section', 'softd'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header Hide', 'softd'),
                    'default'   => false,
                ),
             array(
                    'id'        => 'softd_header_posi_top',
					'desc'      => esc_html__('All Menu Position  OFF/ON section', 'softd'),
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header absolute', 'softd'),
                    'default'   => false,
                ),
				array(
                    'id'        => 'softd_header_posi_top2',
					'desc'      => esc_html__('Top 2 and Main Menu Position  OFF/ON section', 'softd'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Top 2 and Main Menu Header absolute', 'softd'),
                    'default'   => false,
                ),				
				array(
                    'id'        => 'softd_header_posi_top3',
					'desc'      => esc_html__('Main Menu Position  OFF/ON section', 'softd'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Main Header absolute', 'softd'),
                    'default'   => false,
                ),					
             array(
                    'id'        => 'softd_header_display_social_hide',
					'desc'      => esc_html__('Body Social icon OFF/ON section', 'softd'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('Body Social ON/OFF', 'softd'),
                    'default'   => false,
                ),						

				
            )
        ));	
	
     //Header Top 1
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Section 1', 'softd'),
        'id'        => 'softd_header_top',
        'desc'      => esc_html__('Insert header top info', 'softd'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
             array(
                    'id'        => 'softd_header_top_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top style 1 everywhere. But If you want to show header top style 1 your choose page and post. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 1 OFF/ON option. Please select OFF/ON from there.', 'softd'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top', 'softd'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'softd_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 1 Header layout', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htops_box' => esc_html__('Select Layout','softd'),
                        'htopt_box' => esc_html__('Box Layout','softd'),
                        'htopt_boxi' => esc_html__('Box Inner Layout','softd'),
                        'htopt_full' => esc_html__('Full Layout','softd'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'softd_top_right_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top Header Style', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'h_top_l11' => esc_html__('Select Top Menu','softd'),
                        'h_top_l1' => esc_html__('Left Address and Right Icon','softd'),
                        'h_top_l3' => esc_html__('Left Icon and Right Address','softd'),
                        'h_top_l2' => esc_html__('Left Address,Middle Welcome and Right Icon','softd'),
                        'h_top_l4' => esc_html__('Left Icon,Middle Welcome and Right Address','softd'),
                        'h_top_l5' => esc_html__('Left Address and Right Side Menu','softd'),
                        'h_top_l6' => esc_html__('Left Side Menu and Right Address','softd'),
                        'h_top_l7' => esc_html__('Left Address, Middle Social & Right Login','softd'),
                        'h_top_l8' => esc_html__('Left Opening Hours, Middle Social and Right login','softd'),
                        'h_top_l9' => esc_html__('Left Opening Hours, Middle Social and Right Search','softd'),
                        'h_top_20' => esc_html__('Left Address Right Search','softd'),
                        'h_top_21' => esc_html__('Left Address Right Text','softd'),
                        'h_top_22' => esc_html__('Right Address Left Text','softd'),
                        'h_top_23' => esc_html__('Left Address, Icon and Right Menu','softd'),
                    ),
                    'default'   => 'h_top_l1'
                ),				
				array(
                    'id'       => 'softd_header_top_i1',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 1', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="fas fa-home"></i> icofont,font-awesome,themify ', 'softd'),
					'default'	=> esc_html__('<i class="fas fa-home"></i>', 'softd'),
                ),
				array(
                    'id'       => 'softd_header_top_road',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 1', 'softd'),
                    'desc' => esc_html__('Insert Your Text', 'softd'),
					'default'	=> esc_html__('1st Floor New World.', 'softd'),
                ),
				array(
                    'id'       => 'softd_header_top_i3',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 2', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="fas fa-envelope"></i> icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="fas fa-envelope"></i>', 'softd'),
                ),				
                array(
                    'id'       => 'softd_header_top_email',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 2', 'softd'),
                    'desc' => esc_html__('Insert Your Text', 'softd'),
					'default'	=> esc_html__('demo@example.com', 'softd'),					
                ),
				array(
                    'id'       => 'softd_header_top_i2',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 3', 'softd'),
                    'desc' => esc_html__('insert your Phone icon here. ex - <i class="fas fa-phone-alt"></i> icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="fas fa-phone-alt"></i>', 'softd'),
                ),				
                array(
                    'id'       => 'softd_header_top_mobile',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 3', 'softd'),
                    'desc' => esc_html__('Insert Your Phone Number Text', 'softd'),
					'default'	=> esc_html__('+998556778345', 'softd'),					
                ),
				array(
                    'id'       => 'softd_header_top_i4',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Message Icon', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="fas fa-heartbeat"></i> icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="fas fa-heartbeat"></i>', 'softd'),
                ),				
                array(
                    'id'       => 'softd_header_top_wellcome',
                    'type'     => 'textarea',
                    'title'    => esc_html__('Text Message', 'softd'),
                    'desc' => esc_html__('Insert text support - span,a,br,strong,b,em and h2 html tag', 'softd'),
					'default'	=> esc_html__('welcome visit our site', 'softd'),					
                ),
				array(
                    'id'       => 'softd_header_top_i5',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - <i class="far fa-clock"></i> icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="far fa-clock"></i>', 'softd'),
                ),					
                array(
                    'id'       => 'softd_header_top_opening',
                    'type'     => 'text',
                    'title'    => esc_html__('Opening Text', 'softd'),
                    'desc' => esc_html__('Insert Text', 'softd'),
					'default'	=> esc_html__('Open hours: 9.00-24.00 Mon-Sat', 'softd'),					
                ),				
                array(								
                    'id'        => 'softd_header_top_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Top Icon Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p span i, .top-address p a i
					')
                ),				
                array(								
                    'id'        => 'softd_header_top_color',
                    'type'      => 'color',
                    'title'     => esc_html__('All Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p a,
								.top-right-menu ul.social-icons li a,
								.top-address p span,
								.top-address.menu_18 span
					')
                ),
                array(								
                    'id'        => 'softd_header_top_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('All Icon Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-right-menu .social-icons li a:hover,
								.top-right-menu .social-icons li a i:hover,
								.top-address p a i,
								.top-address p span i
					')
                ),
                array(								
                    'id'        => 'softd_header_top_well_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p'
					)
                ),
				array(								
                    'id'        => 'softd_header_top_wella_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p a'
					)
                ),
				array(								
                    'id'        => 'softd_header_hover_Link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p a:hover,.top-welcomet p a:hover'
					)
                ),
				
                array(								
                    'id'        => 'softd_header_opening_bg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Opening BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.top-address.menu_18 span,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),				
                array(								
                    'id'        => 'softd_hoeder_top_bg_color11',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.softd-header-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),

				 array( 
					'id'       => 'top_header_border',
					'type'     => 'border',
					'title'    => __('Header Border Option', 'softd'),
					'subtitle' => __('Only color validation can be done on this field type', 'softd'),
					'output'   => array('.softd-header-top'),
					'desc'     => __('This is the description field, again good for additional info.', 'softd'),
					'default'  => array(
						'border-color'  => '', 
						'border-style'  => 'solid', 
						'border-top'    => '', 
						'border-right'  => '', 
						'border-bottom' => '', 
						'border-left'   => ''
					)
				),


				
				array(
					'id'             => 'softd_header_top_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.softd-header-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );



     //Header Top 2
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Section 2', 'softd'),
        'id'        => 'softd_header_toptwo',
        'desc'      => esc_html__('Insert header top info', 'softd'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
             array(
                    'id'        => 'softd_header_top_two_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top style 2 everywhere. But If you want to show header top style 2 your choose page and post. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 2 OFF/ON option. Please select OFF/ON from there.', 'softd'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top style 2', 'softd'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'softd_box_layouttwo',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 2 Header layout', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
						'htops_box' => esc_html__('Select Layout','softd'),
                        'htopt_box' => esc_html__('Box Layout','softd'),
                        'htopt_boxi' => esc_html__('Box Inner Layout','softd'),
                        'htopt_full' => esc_html__('Full Layout','softd'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'softd_top_two_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 2 Header Style', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'h_top_1' => esc_html__('Select Top Menu','softd'),
                        'h_top_2' => esc_html__('1. Left Logo,Middle Address And Right Button','softd'),
                        'h_top_3' => esc_html__('2. Left Logo,Middle Address And Right Top Menu','softd'),
                        'h_top_4' => esc_html__('3. Left Logo,Middle Address And Right Social Icon','softd'),
                        'h_top_5' => esc_html__('4. Left Social Icon,Middle Logo And Right Address','softd'),
                        'h_top_6' => esc_html__('5. Left Logo And Right Address','softd'),
                        'h_top_7' => esc_html__('6. Left Logo,Middle Address And Right Button','softd'),
                        'h_top_8' => esc_html__('7. Left Logo,Middle Address And Right Mini shop','softd'),
						'h_top_9' => esc_html__('8. Left Social Icon and Menu,Middle Logo And Right Address','softd'),
                    ),
                    'default'   => 'h_top_2'
                ),					
				array(
                    'id'       => 'softd_header_top_ci1',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 1', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="fas fa-map-marker-alt"></i>', 'softd'),
                ),				
				array(
                    'id'       => 'softd_header_top_roadtwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 1', 'softd'),
                    'desc' => esc_html__('Insert Text Here', 'softd'),
					'default'	=> esc_html__('Location', 'softd'),
                ),				
				array(
                    'id'       => 'softd_header_top_roadtwo',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title 1', 'softd'),
                    'desc' => esc_html__('Insert Text Here', 'softd'),
					'default'	=> esc_html__('1st Floor.', 'softd'),
                ),
				array(
                    'id'       => 'softd_header_top_ci2',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 2', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="fa fa-envelope"></i>', 'softd'),
                ),					
                array(
                    'id'       => 'softd_header_top_emailtwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 2', 'softd'),
                    'desc' => esc_html__('insert info', 'softd'),
					'default'	=> esc_html__(' Email', 'softd'),					
                ),					
                array(
                    'id'       => 'softd_header_top_emailtwo',
                    'type'     => 'text',
                    'title'    => esc_html__(' Sub Title 2 ', 'softd'),
                    'desc' => esc_html__('Iinsert info', 'softd'),
					'default'	=> esc_html__('demo@example.com', 'softd'),					
                ),
				array(
                    'id'       => 'softd_header_top_ci3',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 3', 'softd'),
                    'desc' => esc_html__('insert your icon here. ex - icofont,font-awesome,themify', 'softd'),
					'default'	=> esc_html__('<i class="fas fa-phone-volume"></i>', 'softd'),
                ),					
                array(
                    'id'       => 'softd_header_top_mobiletwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 3', 'softd'),
                    'desc' => esc_html__('insert info', 'softd'),
					'default'	=> esc_html__('Phone', 'softd'),					
                ),					
                array(
                    'id'       => 'softd_header_top_mobiletwo',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title 3', 'softd'),
                    'desc' => esc_html__('insert info', 'softd'),
					'default'	=> esc_html__('+998556778345', 'softd'),					
                ),
                array(
                    'id'       => 'softd_header_buttonc1',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'softd'),
                    'desc' => esc_html__('Insert text', 'softd'),
					'default'	=> esc_html__('Get a Quote', 'softd'),					
                ),
                array(
                    'id'       => 'softd_header_button_urlc1',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'softd'),
                    'desc' => esc_html__('Insert url ex: - https://your_site.com/', 'softd'),
					'default'	=>'#',					
                ),			
                array(								
                    'id'        => 'softd_header_top_icon_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__('Top Icon Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.creative_header_icon i
					')
                ),				
               /* array(								
                    'id'        => 'softd_header_top_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__(' Title Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.creative_header_address_text > h3
					')
                ),*/
				array(
					'id'          => 'softd_title_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Title Typography style', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.creative_header_address_text > h3
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),				
				array(
					'id'          => 'softd_suptitle_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Title Typography style', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.creative_header_address_text > p,.creative_header_address_text > p > a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),				
                array(								
                    'id'        => 'softd_header_opening_bg_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__('Angle BG Section Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.em_creative_header::before,.creative_header_button::before,.em_creative_header::after',
					)
                ),				
                array(								
                    'id'        => 'softd_hoeder_top_bg_colortwo',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top 2 Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.em_creative_header,.top_crt_style
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'softd_header_top_section_spacingtwo',
					'type'           => 'spacing',
					'output'         => array('.em_creative_header,.top_crt_style'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );		
	







	
	
     //Header Logo
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Logo', 'softd'),
        'id'        => 'softd_header_logo',
        'desc'      => esc_html__('Header Logo', 'softd'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array( 
                array(
                    'id'        => 'softd_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Default Logo', 'softd'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here.ex: - it is work in default menu.', 'softd'),
                ),
                array(
                    'id'        => 'softd_onepage_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('One Page Menu Logo', 'softd'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex:- it is work in one page menu', 'softd'),
                ),
                array(
                    'id'        => 'softd_ts_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Transparent Menu Logo', 'softd'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in transparent menu', 'softd'),
                ),
                array(
                    'id'        => 'softd_mobile_top_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Mobile Logo', 'softd'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 1801x48px.', 'softd'),
                ),				
                array(
                    'id'        => 'softd_logo_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Height', 'softd'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set height ex-100px', 'softd'),
                ),	
                array(
                    'id'        => 'softd_logo_widget',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Width', 'softd'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set Width ex-100px', 'softd'),
                ),
                array(
                    'id'        => 'softd_line_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Massing your logo spacing to Menu ', 'softd'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set number default-15px', 'softd'),
					'default'   =>'15px',
                ),
                array(
                    'id'       => 'softd_mobile_image_logo',
                    'type'     => 'text',
					'mode'      => false,
                    'title'    => esc_html__('Mobile Text Logo', 'softd'),
                    'desc' => esc_html__('Insert text ex: - "softd", Must be use "" for logo text ', 'softd'),
					'default'	=> esc_html__('"MENU"', 'softd'),	
                ),
				array(								
                    'id'        => 'softd_mobilebg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container .mean-bar,.mean-container .mean-nav',
					)
                ),
				array(								
                    'id'        => 'softd_mobileicon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu Icon Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container a.meanmenu-reveal span',
						'color' => '.mean-container a.meanmenu-reveal,.mean-container .mean-bar::before,.meanmenu-reveal.meanclose:hover'
					)
                ),					
				
            ),
    ) );

     //Header Menu
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Menu', 'softd'),
        'id'        => 'softd_menu',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(
                array(
                    'id'        => 'softd_main_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header Menu layout', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htops_box' => esc_html__('Select Layout','softd'),
                        'hmenul_box' => esc_html__('Box Layout','softd'),
                        'hmenul_boxi' => esc_html__('Box Inner Layout','softd'),
                        'hmenu_full' => esc_html__('Full Layout','softd'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'softd_main_menu_layout',
					'desc'      => esc_html__('This option work only, when you select  - 1 and 1-1  style menu', 'softd'),					
                    'type'      => 'select',
                    'title'     => esc_html__('Logo Position', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'm_menu_1' => esc_html__('Logo Left Style','softd'),
                        'm_menu_2' => esc_html__('Logo Right Style','softd'),
                        'm_menu_3' => esc_html__('Logo Top Style','softd'),
                    ),
                    'default'   => 'm_menu_1'
                ),
				
                array(
                    'id'        => 'softd_defaulth_menu_layout',
					'desc'      => esc_html__('If you select menu from here. It will be showing everywhere and if you want to show different menu different page or post, that time, please don\'t select menu style from here. For this go to your page or post below, there you can see a menu option. Please select menu style from there and when you set the 3,4,5,1-1,8,9,11,12,13,20,21 menu that time please open the top menu.', 'softd'),						
                    'type'      => 'select',
                    'title'     => esc_html__('Select Default Menu For All Single Page', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
						'111' => esc_html__( 'Select Menu Style From Here', 'softd' ),				
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
                    'default'   => '111'
                ),	
                array(
                    'id'       => 'softd_header_button',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'softd'),
                    'desc' => esc_html__('Insert text', 'softd'),
					'default'	=> esc_html__('Buy Now', 'softd'),					
                ),
                array(
                    'id'       => 'softd_header_button_url',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'softd'),
                    'desc' => esc_html__('Insert url ex: - https://your_site.com/', 'softd'),
					'default'	=>'#',					
                ),
                array(								
                    'id'        => 'softd_Button_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
					)
                ),
                array(								
                    'id'        => 'softd_Button_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),
              array(								
                    'id'        => 'softd_Buttonht_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
                array(								
                    'id'        => 'softd_Buttonhtb_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),							
                array(								
                    'id'        => 'softd_menu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Main Menu Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.softd_nav_area,.transprent-menu .softd_nav_area,.hmenu_box_style
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
			
				array(
					'id'          => 'softd_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Menu Font style', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.softd_menu > ul > li > a,
						.heading_style_2 .softd_menu > ul > li > a,
						.heading_style_3 .softd_menu > ul > li > a,
						.heading_style_4 .softd_menu > ul > li > a,
						.witr_search_wh .em-header-quearys .em-quearys-menu i,
						.right_sideber_menu i ,
						.heading_style_5 .softd_menu > ul > li > a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
                array(								
                    'id'        => 'softd_menu_texts_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Hover Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.softd_menu > ul > li:hover > a,.softd_menu > ul > li.current > a,.right_sideber_menu i:hover,.witr_search_wh .em-header-quearys .em-quearys-menu i:hover',
					'background-color' => '.softd_menu > ul > li > a::before,.softd_menu > ul > li.current:hover > a::before,.softd_menu > ul > li.current > a:before'
					)
                ),
                array(								
                    'id'        => 'softd_menu_bg_sticky_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Main Menu Sticky BG Color', 'softd'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => 1
					),
					'output'    => array(
					'background-color' => '
					.softd_nav_area.prefix,
					.hbg2
					'
					)
                ),					
											
                array(								
                    'id'        => 'softd_menu_sticky_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.softd_nav_area.prefix .softd_menu > ul > li > a,.hmenu_box_style.hbg2 .softd_menu > ul > li > a,.hbg2 .softd_menu > ul > li > a,.softd_nav_area.prefix .right_sideber_menu i,.witr_search_wh .prefix  .em-header-quearys .em-quearys-menu i,.softd_nav_area.prefix .softd_menu > ul > li.current > a
					',
					'background-color' => '
					.softd_nav_area.prefix .softd_menu > ul > li > a::before,
					.hbg2 .softd_menu > ul > li > a::before
					
					'
					)
                ),					
                array(								
                    'id'        => 'softd_menu_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Current Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.softd_nav_area.prefix .softd_menu > ul > li.current > a,
					.hbg2 .softd_menu > ul > li.current > a
					',
					'background-color' => '
						.softd_nav_area.prefix .softd_menu > ul > li.current > a::before					
					'
					)
                ),	
                array(								
                    'id'        => 'softd_submenu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Sub Menu BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.softd_menu ul .sub-menu
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
				array(
					'id'          => 'softd_sub_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Menu Font style', 'softd'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.softd_menu ul .sub-menu li a
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
				
                array(								
                    'id'        => 'softd_submenu_hover_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Menu Hover Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.softd_menu ul .sub-menu li:hover > a,
						.softd_menu ul .sub-menu .sub-menu li:hover > a,
						.softd_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
						.softd_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a																'
					)
                ),				
				array(
					'id'             => 'menu_spacing',
					'type'           => 'spacing',
					'output'         => array('.softd_nav_area,.trp_nav_area,.transprent-menu .softd_nav_area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
					
            ),
    ) );

/*========================
END softd HEADER FIELD
=========================*/


/*========================
softd BREADCRUMB FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Breadcrumb Area', 'softd'),
        'id'         => 'softd_bread_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
    array(
     'id'   => 'info_normal',
     'type' => 'info',
     'desc' => esc_html__('Notice:- If you want to more breadcrumb control. Please see every page bottom area. We Added More Field Here','softd')
    ),    
	array(
		'id'        => 'softd_breadcrumb_bg',
		'type'      => 'background',
		'output'    => array('.breadcumb-area,.breadcumb-blog-area'),
		'title'     => esc_html__('Breadcrumb Background', 'softd'),
		'subtitle'  => esc_html__('Breadcrumb background with image, color.', 'softd'),
		'default'  => array(
			'background-color' => '',
		)
	),
	array(								
		'id'        => 'softd_brdov_text_color',
		'type'      => 'color_rgba',
		'title'     => esc_html__('Breadcumb Overlay', 'softd'),
		'default'   => array(
			'color'     => '#000000',
			'alpha'     => 1
		),
		'output'    => array(
		'background-color' => '
		.breadcumb-area::before,
		.breadcumb-blog-area::before
		'
		)
	),		
	array(        
		'id'        => 'softd_bread_title_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Title Color', 'softd'),
		'default'  => '',
		'output'    => array(
			'color' => '.brpt h2,.breadcumb-inner h2'
		)
    ),     
    array(
     'id'          => 'softd_breadcrumb_typography',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Text And Font style', 'softd'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .breadcumb-inner ul,     
      .breadcumb-inner ul span a,     
      .breadcumb-inner li,
      .breadcumb-inner li a      
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),
	array(        
		'id'        => 'softd_bread_current_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Current Text Color', 'softd'),
		'default'  => '',
		'output'    => array(
			'color' => '.breadcumb-inner li:nth-last-child(-n+1)'
		)
	),     
    array(
     'id'             => 'spacing',
     'type'           => 'spacing',
     'output'         => array('.breadcumb-area'),
     'mode'           => 'padding',
     'units'          => array('em', 'px'),
     'units_extended' => 'false',
     'title'          => esc_html__('Padding Option', 'softd'),
     'subtitle'       => esc_html__('Allow your users to choose the spacing or margin they want.', 'softd'),
     'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
     'default'            => array(
      'padding-top'     => '', 
      'padding-right'   => '', 
      'padding-bottom'  => '', 
      'padding-left'    => '',
      'units'          => 'px', 
     )
    ),    
        
            ),
    ) );
/*========================
END softd BREADCRUMB FIELD
=========================*/


/*========================
softd circle FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Default Color', 'softd'),
        'id'         => 'softd_tm_defaultpage',  
        'icon'       => 'el el-circle-arrow-right',
        'fields'    => array(
				array(
				 'id'   => 'thdfinfo_normal',
				 'type' => 'info',
				 'desc' => esc_html__('Notice:- we set our all color option in our Element, But only contact button and scroll button color will be change by below option','softd')
				),  

				array(        
					'id'        => 'thdefhbgctc',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Text Color', 'softd'),
					'default'  => '',
					'output'    => array(
						'color' => '.home-2 .sbuton,.sbuton,#scrollUp'
					)
				),
				array(        
					'id'        => 'thdefhbgcbtbgh',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button BG Color', 'softd'),
					'default'  => '',
					'output'    => array(
						'background' => '.home-2 .sbuton,.sbuton,#scrollUp',
						'border-color' => '.home-2 .sbuton,.sbuton,#scrollUp'
					)
				),				array(        
					'id'        => 'thdefhbgcbth',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Hover BG Color', 'softd'),
					'default'  => '',
					'output'    => array(
						'background' => '.home-2 .sbuton:hover,.sbuton:hover',
						'border-color' => '.home-2 .sbuton:hover,.sbuton:hover'
					)
				),
				array(        
					'id'        => 'tmdfhtcbtnht',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Hover Text Color', 'softd'),
					'default'  => '',
					'output'    => array(
						'color' => '.home-2 .sbuton:hover,.sbuton:hover'
					)
				),						
				
				

        ),
    ) );
/*========================
END softd circle FIELD
=========================*/

/*========================
softd BLOG FIELD
=========================*/
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Area', 'softd' ),
        'id'          => 'softd_blog_section_area',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(
                    'id'        => 'softd_blog_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.softd-single-blog'),
                    'title'     => esc_html__('Blog Item BG Color', 'softd'),
                    'subtitle'  => esc_html__('BG color', 'softd'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),

                array(								
                    'id'        => 'softd_blog_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6,					
						.single-blog-content h1, .single-blog-content h2, .single-blog-content h3, .single-blog-content h4, .single-blog-content h5, .single-blog-content h6,
						.blog-content h2 a,.blog-left-side .widget h2,.blog-page-title a					
					')
                ),	
                array(								
                    'id'        => 'softd_blog_title_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.blog-content h2 a:hover,
					.blog-page-title h2 a:hover
					')
                ),													
                array(
                    'id'        => 'softd_blog_widget_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.blog-left-side.widget > div'),
                    'title'     => esc_html__('Blog Sidebar BG Color', 'softd'),
                    'subtitle'  => esc_html__('BG color', 'softd'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
				 array(	
                    'id'        => 'softd_sidebar_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.blog-left-side .widget h2'
					)
                ),
                array(								
                    'id'        => 'softd_sidebar_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li,
							.blog-left-side .widget ul li a,
							.blog-left-side .widget ul li::before,
							.tagcloud a,
							caption,
							table,
							 table td a,
							cite,
							.rssSummary,
							span.rss-date,
							span.comment-author-link,
							.textwidget p,
							.widget .screen-reader-text
						')
                ),	
                array(								
                    'id'        => 'softd_sidebar_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li a:hover,
							.blog-left-side .widget ul li:hover::before
						')
                ),					
                array(								
                    'id'        => 'softd_blog_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon & Title bar Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.softd-single-icon-inner a,.reply_date span.span_right,.softd_btn',
					'border-color' => '.softd-single-icon-inner a,.softd_btn',
					'background' => '.blog-left-side .widget h2::before,.commment_title h3::before,table#wp-calendar td#today,.footer-middle .widget h2::before',
					)
                ),
				array(								
                    'id'        => 'softd_blog_social_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.softd-single-icon-inner a:hover,.softd_btn:hover',
					'border-color' => '.softd-single-icon-inner a:hover,.softd_btn:hover',
					)
                ),
				
				array(								
                    'id'        => 'softd_blog_pagina_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.paginations a',
					'border-color' => '.paginations a',
					)
                ),				
				
				array(								
                    'id'        => 'softd_blog_pagina_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					'border-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					)
                ),					
				array(
                    'id'        => 'softd_blog_socialsharesh_hide',
                    'type'      => 'switch',
                    'title'     => esc_html__('Blog Social share Show/Hide', 'softd'),
                    'default'   => true,
                ),												
            )
    ) );		
/*========================
END softd BLOG FIELD
=========================*/
	 
/*========================
softd 404 FIELD
=========================*/	 

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('404 Area', 'softd'),
        'id'         => 'softd_error_page',  
        'desc'       => esc_html__('Use this section to upload background images, select background color', 'softd'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
                array(
                    'id'        => 'softd_background_404',
                    'type'      => 'background',
                    'output'    => array('.not-found-area'),
                    'title'     => esc_html__('404 Page Background Color', 'softd'),
                    'subtitle'  => esc_html__('404 background with image, color.', 'softd'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'softd_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner h2,.not-found-inner'
					)
                ),	
                array(								
                    'id'        => 'softd_sub_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Title Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner p,.not-found-inner strong'
					)
                ),
                array(								
                    'id'        => 'softd_not_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Return Link Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner a'
					)
                ),					
                array(
                    'id'        => '404_info',
                    'type'      => 'editor',
                    'title'     => esc_html__('404 Information', 'softd'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'softd'),
                    'default'   => esc_html__('404 Oops! The page you are Looking for does not exist. ', 'softd'),
					'desc'      => esc_html__('Please use title this way. example- <h2>404</h2> and text <p>your text</p>', 'softd'),
                ), 
				array(
					'id'             => 'softd_notfound_spacing',
					'type'           => 'spacing',
					'output'         => array('.not-found-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),

				
            ),
    ) );


/*========================
END softd NOT FOUND FIELD
=========================*/	 
/*========================
softd Shop FIELD
=========================*/
if( class_exists( 'WooCommerce' ) ) {

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Shop Area', 'softd'),
        'id'         => 'softd_woocom_page',  
        'desc'       => esc_html__('Set your shop style option here', 'softd'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
			   /* Title And Price box color area */
                array(								
                    'id'        => 'softd_woocommerce_count',
                    'type'      => 'color',
                    'title'     => esc_html__('Showing Count Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .woocommerce-result-count, .nice-select span.current,.nice-select .option'
					)
                ),				   
			   
               array(
                    'id'        => 'softd_background_woocommerce',
                    'type'      => 'background',
                    'output'    => array('.tbd_product_content'),
                    'title'     => esc_html__('Background Color', 'softd'),
                    'subtitle'  => esc_html__('background, color.', 'softd'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'softd_woocommerce_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product_title h2,.woocommerce div.product .product_title'
					)
                ),	
                array(								
                    'id'        => 'softd_price_woocommerce',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price ins, .woocommerce div.product span.price ins'
					)
                ),					 
				array(
					'id'             => 'softd_woocommerce_spacing',
					'type'           => 'spacing',
					'output'         => array('.tbd_product_content'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Title And Price Box Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
				/* Button Text color area*/
				array(
                    'id'       => 'softd_woocommerce_button',
                    'type'     => 'text',
                    'title'    => esc_html__('Add to cart Text', 'softd'),
                    'desc' => esc_html__('Change add to cart button text', 'softd'),
					'default'	=> esc_html__('Add to cart', 'softd'),					
                ),
                array(								
                    'id'        => 'softd_Button_color_wooco',
                    'type'      => 'color',
                    'title'     => esc_html__('Button Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_product_cart button, .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.woocommerce a.added_to_cart:hover,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.softd_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active,.paginations a:hover, .paginations a.current, .page-numbers span.current,.curosel-style .owl-nav div,.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover'
					)
                ),
              array(								
                    'id'        => 'softd_Buttonht_woocommerce',
                    'type'      => 'color',
                    'title'     => esc_html__('Button Text Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce .witr_product_cart button:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce a.button:hover,.woocommerce div.product form.cart .button,.softd_btn:hover'
					)
                ),				
                array(								
                    'id'        => 'softd_Button_bgw',
                    'type'      => 'color',
                    'title'     => esc_html__('Button BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_product_cart button, .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.woocommerce a.added_to_cart:hover,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,.softd_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active,.paginations a:hover, .paginations a.current, .page-numbers span.current,.curosel-style .owl-nav div,.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover',
					
					'border-left-color' => 'nav.woocommerce-MyAccount-navigation ul li.is-active:after',
					'border-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_product_cart button, .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.woocommerce a.added_to_cart:hover,.woocommerce div.product form.cart .button,.softd_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active,.paginations a:hover, .paginations a.current, .page-numbers span.current,.curosel-style .owl-nav div,.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover',
					
					)
                ),

                array(								
                    'id'        => 'softd_Buttonhtb_bgwh',
                    'type'      => 'color',
                    'title'     => esc_html__('Button BG Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					
					'background-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce .witr_product_cart button:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce a.button:hover,.woocommerce div.product form.cart .button,.softd_btn:hover',
					
					'border-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce .witr_product_cart button:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce a.button:hover,.woocommerce div.product form.cart .button,.softd_btn:hover'
					
					)
                ),							
				array(
					'id'             => 'w_btn_spacing',
					'type'           => 'spacing',
					'output'         => array('.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_product_cart button, .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Button Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
                array(								
                    'id'        => 'softd_Button_color_sale',
                    'type'      => 'color',
                    'title'     => esc_html__('Sale Button Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner '
					)
                ),			
                array(								
                    'id'        => 'softd_Button_bgsale',
                    'type'      => 'color',
                    'title'     => esc_html__('Sale Button BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'background-color' =>'.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner',
					'border-color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner'
					)
                ),
					
				
				
            ),		
    ) );


	
}	
/*========================
END softd Shop FIELD
=========================*/	
/*========================
softd social FIELD
=========================*/	
    //footer social section
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Social Icon Section', 'softd' ),
        'id'         => 'softd_social_icons_sec',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
	
                array(
                    'id'       => 'softd_social_icons',
                    'type'     => 'sortable',
                    'title'    => esc_html__('Insert Social Icons', 'softd'),
                    'subtitle' => esc_html__('Enter social links', 'softd'),
                    'desc'     => esc_html__('Drag/drop to re-arrange', 'softd'),
                    'mode'     => 'text',
					'label'    => true,
                    'options'  => array(        
                        'facebook-f'     => '',
                        'twitter'      => '',
                        'instagram'    => '',
                        'tumblr'       => '',
                        'pinterest-p'    => '',
                        'google-plus-g'  => '',
                        'linkedin-in'     => '',
                        'behance'      => '',
                        'dribbble'     => '',
                        'youtube'      => '',
                        'vimeo-v'        => '',
                        'apple'          => '',
                   
                    ),
					'default' => array(
						'facebook-f'     => esc_url('#'),
						'twitter'     => esc_url('#'),
						'instagram'	=> esc_url('#'),
						'tumblr'     => '',
						'pinterest-p'     => '',
						'google-plus-g'     => esc_url('#'),
						'linkedin-in'     => '',
						'behance'     => '',
						'dribbble'     => esc_url('#'),
						'youtube'     => '',
						'vimeo-v'     => '',
						'apple'     => '',
					
					),
                ),			
                array(								
                    'id'        => 'softd_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a,.top_crmenu_i_list li a i',
					)
                ),
                array(								
                    'id'        => 'softd_social_icon_bgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a',
					'background-color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a,.top_crmenu_i_list li a i',
					)
                ),
                array(								
                    'id'        => 'softd_social_icon_thbgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon hover Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.top_crmenu_i_list li a i:hover',
					)
                ),					
                array(								
                    'id'        => 'softd_social_icon_hbgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon hover BG Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.em_slider_social a:hover',
					'background-color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.em_slider_social a:hover,.top_crmenu_i_list li a i:hover',
					)
                ),					
                /*array(								
                    'id'        => 'softd_social_bg2_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Social Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.footer-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	*/										
				
            )
    ) );

 
/*========================
softd FOOTER FIELD
=========================*/	 
	
      //Footer area
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Area', 'softd'),
        'id'        => 'footer_area_id',
        'desc'      => esc_html__('Insert style for top address area', 'softd'),
        'icon'      => 'el-icon-cog',
        'fields'    => array(      
				 array(
                    'id'       => 'softd_address_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer Address Section Show/Hide', 'softd'),
                    'default'  => false,
                ),
				array(
                    'id'       => 'softd_social_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer Logo Section Show/Hide', 'softd'),
                    'default'  => false,
                ),
                 array(
                    'id'       => 'softd_widget_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Widget Section Hide/show', 'softd'),
                    'default'  => false,
                ),				
				array(
                    'id'       => 'softd_copyright_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Copyright Section Show/Hide', 'softd'),
					'desc'      => esc_html__('If you not show copyright section true or on. Then It will be show default widget and copyright option', 'softd'),	
                    'default'  => true,
                ),
                array(
                    'id'        => 'softd_footer_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Footer layout', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'footer_box' => esc_html__('Box Layout','softd'),
                        'footer_full' => esc_html__('Full Layout','softd'),
                    ),
                    'default'   => 'footer_box'
                ),							
								
            )
    ) );

	 //footer Address Section 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Address Section', 'softd' ),
        'id'          => 'softd_address_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
		
                array(
                    'id'        => 'softd_address_logo_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Logo Style', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        's_logo_s1' => esc_html__('Show Text Logo','softd'),
                        's_logo_s2' => esc_html__('Show Image Logo','softd'),
                    ),
                    'default'   => 's_logo_s1'
                ),				
						
                array(
                    'id'        => 'softd_address_title_text',
                    'type'      => 'text',
                    'title'     => esc_html__('Address Title Text Logo', 'softd'),
                    'default'   => esc_html__('softd', 'softd'),
                    'desc'      => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'softd'),					
                ),
                array(
                    'id'        => 'softd_address_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Address Image Logo', 'softd'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'softd'),
                ),			
                array(
                    'id'       => 'softd_address_road',
                    'type'     => 'text',
                    'title'    => esc_html__('Address Area Name', 'softd'),
                    'desc' => esc_html__('insert area name ex:- house, road-4.', 'softd'),
					'default'	=> esc_html__('1st Floor New World Tower Rang.', 'softd'),
                ),		
                array(
                    'id'       => 'softd_address_email',
                    'type'     => 'text',
                    'title'    => esc_html__('Email Number', 'softd'),
                    'desc' => esc_html__('Insert email number', 'softd'),
					'default'	=> esc_html__('demo@example.com', 'softd'),					
                ),		
                array(
                    'id'       => 'softd_address_mobile',
                    'type'     => 'text',
                    'title'    => esc_html__('Phone Number', 'softd'),
                    'desc' => esc_html__('Insert phone number', 'softd'),
					'default'	=> esc_html__('+998 556 778 345', 'softd'),					
                ),			
                array(								
                    'id'        => 'softd_address_title_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Title Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-address h2'
					)
                ),
                array(								
                    'id'        => 'softd_address_title2_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Title Text Color 2', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-address h2 span'
					)
                ),				
                array(								
                    'id'        => 'softd_address_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top_address_content a,.top_address_content span'
					)
                ),				
                array(								
                    'id'        => 'softd_address_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Address Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.top-address-area
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'softd_address_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.top-address-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),						
            )
    ) );
    //footer logo section
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Footer Logo Section', 'softd' ),
        'id'         => 'softd_social_section',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'     => array(
                array(
                    'id'        => 'softd_social_logo_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Logo Style', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        's_logo_s1' => esc_html__('Show Text Logo','softd'),
                        's_logo_s2' => esc_html__('Show Image Logo','softd'),
                    ),
                    'default'   => 's_logo_s1'
                ),				
						
                array(
                    'id'        => 'softd_social_title_text',
                    'type'      => 'text',
                    'title'     => esc_html__('Footer Title Text Logo', 'softd'),
                    'default'   => esc_html__('softd', 'softd'),
                    'desc'      => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'softd'),
                ),
                array(
                    'id'        => 'softd_social_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Footer Image Logo', 'softd'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'softd'),
                ),				
                array(
                    'id'        => 'softd_social_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Footer logo section information', 'softd'),
                    'default'	=> esc_html__('Lorem ipsum dolor sit amet, consectetur ahkl adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud' , 'softd'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),		
                array(								
                    'id'        => 'softd_social_title_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer logo section Title Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-top-inner h2'
					)
                ),
                array(								
                    'id'        => 'softd_social_title2_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer logo section Title Text Color 2', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-top-inner h2 span'
					)
                ),				
                array(								
                    'id'        => 'softd_social_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer log section Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-inner p'
					)
                ),								
                array(								
                    'id'        => 'softd_social_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Footer logo Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.footer-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'softd_social_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),					
				
            )
    ) );
	 // footer widget area 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Widget Section', 'softd' ),
        'id'          => 'softd_widget_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(								
                    'id'        => 'softd_wmb_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Together Widget and Cppyright Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
									.witrfm_area
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
				array(								
					'id'        => 'softd_wmbov_bg_color',
					'type'      => 'color_rgba',
					'title'     => esc_html__('Widget and Cppyright Overlay', 'softd'),
					'default'   => array(
						'color'     => '#00509f',
						'alpha'     => 0
					),
					'output'    => array(
					'background-color' => '
					.witrfm_area:before
					'
					)
				),				
                array(
                    'id'        => 'softd_widget_column_count',
                    'type'      => 'select',
                    'title'     => esc_html__('Widget Column Count', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1','softd'),
                        '2' => esc_html__('Column 2','softd'),
                        '3' => esc_html__('Column 3','softd'),
                        '4' => esc_html__('Column 4','softd'),
                        '6' => esc_html__('Column 6','softd'),
                    ),
                    'default'   =>'4'
                ),		
				 array(	
                    'id'        => 'softd_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Title Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-middle .widget h2'
					)
                ),
                array(								
                    'id'        => 'softd_copyright_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li,
							.footer-middle .widget ul li a,
							.footer-middle .widget ul li::before,
							.footer-middle .tagcloud a,
							.footer-middle caption,
							.footer-middle table,
							.footer-middle table td a,
							.footer-middle cite,
							.footer-middle .rssSummary,
							.footer-middle span.rss-date,
							.footer-middle span.comment-author-link,
							.footer-middle .textwidget p,
							.footer-middle .widget .screen-reader-text,
							mc4wp-form-fields p,
							.mc4wp-form-fields,
							.footer-m-address p,
							.footer-m-address,
							.footer-widget.address,
							.footer-widget.address p,
							.mc4wp-form-fields p,
							.softd-description-area p, 
							.softd-description-area .phone a,
							.softd-description-area .social-icons a,
							.recent-review-content h3,
							.recent-review-content h3 a,
							.recent-review-content p,
							.footer-middle .softd-description-area p,
							.footer-middle .recent-post-text h4 a,
							.footer-middle .recent-post-text .rcomment,
							.witr_sub_table span
							
						')
                ),	
                array(								
                    'id'        => 'softd_copyright_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li a:hover,
							.footer-middle .widget ul li:hover::before,
							.footer-middle .sub-menu li a:hover, 
							.footer-middle .nav .children li a:hover,
							.footer-middle .tagcloud a:hover,
							#today
						')
                ),		
				array(								
                    'id'        => 'softd_widget_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Widget Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
									.footer-middle
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				array(
					'id'             => 'softd_widget_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-middle'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
            )
    ) );	

    //footer copyright text
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Copyright Info', 'softd'),
        'id'        => 'softd_copyright',
        'desc'      => esc_html__('Insert your copyright style', 'softd'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'    => array(
                array(
                    'id'        => 'softd_footer_copyright_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Copyright Style Layout', 'softd'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'copy_s1' => esc_html__('Copyright Text Style','softd'),
                        'copy_s2' => esc_html__('Copyright Text and Right Menu','softd'),
                        'copy_s3' => esc_html__('Copyright Text and Left Menu','softd'),
                        'copy_s4' => esc_html__('Copyright Text and Social Icon','softd'),
                    ),
                    'default'   => 'copy_s2'
                ),
                array(								
                    'id'        => 'softd_wftp_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Top Boeder Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
						.footer-bottom:before
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				
                array(
                    'id'        => 'softd_copyright_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Copyright information', 'softd'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'softd'),
                    'default'	=> esc_html__('Copyright &copy; softd all rights reserved.', 'softd'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),
                array(								
                    'id'        => 'softd_copyright_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text p,.footer-menu ul li a'
					)
                ),
                array(								
                    'id'        => 'softd_copyright_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text a, .footer-menu ul li a:hover'
					)
                ),				
                array(								
                    'id'        => 'softd_copyright_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Copyright Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
					.footer-bottom
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),						
				
				array(
					'id'             => 'softd_copyright_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-bottom'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				

				
				
				
            ),
    ) );


/*========================
softd Shortcode Option FIELD
=========================*/	 

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Shortcode Option', 'softd'),
        'id'         => 'softd_shortcode',  
        'desc'       => esc_html__('Use this section to Title,Content,Shortcode  And color Option', 'softd'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
				array(
                    'id'       => 'witr_show_hide_shortcode',
                    'type'     => 'switch',
                    'title'    => esc_html__('Shortcode Section Show/Hide', 'softd'),
                    'default'  => false,
                ),
                array(								
                    'id'        => 'softd_shortcode_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__(' Section BG Color', 'softd'),
                    'default'  => '',
                    'output'    => array('
					.witr_shortcode_inner'
					),
					'default'  => array(
						'background-color' => '',
					)					
                ),										
				array(
					'id'             => 'softd_shortcode_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_inner'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' Box Padding Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				array(
					'id'             => 'softd_shortcode_section_margin',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_inner'),
					'mode'           => 'margin',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' Box Margin Option', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing margin they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'margin-top'     => '', 
						'margin-right'   => '', 
						'margin-bottom'  => '', 
						'margin-left'    => '',
						'units'          => 'px', 
					)
				),				
				
				/* title */	
				array(
					'title'     => esc_html__( 'Title Text', 'softd' ),
					'subtitle'  => esc_html__('HTML tags allowed: br,span', 'softd'),
					'id'        => 'witr_title_shortcode',
					'default'   => 'Add your title here',
					'type'      => 'text',
					'desc'       => esc_html__('Please use this way Example ex-<span>Add your text here</span>, <a href="#">text</a>, </br>', 'softd'),
				),				
				array(
				 'id'          => 'softd_shortcode_color',
				 'type'        => 'typography', 
				 'title'       => esc_html__('Title Typography', 'softd'),
				 'google'      => true, 
				 'font-backup' => true,
				 'line-height'   => false,
				 'text-align'   => false,
				 'units'       =>'px',
				 'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
				 'default'     => array(
					  'color'       => '', 
					  'font-style'  => '', 
					  'font-family' => '', 
					  'google'      => true,
					  'font-size'   => '', 
					 ),
				 'output'      => array('
				  .shortcode_content h2'      
				 ),					 
				),				
                array(								
                    'id'        => 'softd_shortcode_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Hover Color', 'softd'),
                    'default'  => '',
					'output'    => array(
					'color' => '.shortcode_content h2:hover'
					)
                ),				
				
				/* Content */	
                array(
                    'id'        => 'witr_content_shortcode',
                    'type'      => 'textarea',
                    'title'     => esc_html__('Content Text', 'softd'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong,span,b', 'softd'),
                    'default'   => esc_html__('Lorem ipsum dolor sit met conjectural ', 'softd'),
					'desc'       => esc_html__('Please use this way Example ex-<span>text</span>, <a href="#">text</a>, <strong>text</strong>, <em>text</em>, <b>text</b>, </br>', 'softd'),
                ),
				array(
				 'id'          => 'softd_short_typo_content',
				 'type'        => 'typography', 
				 'title'       => esc_html__('Content Typography', 'softd'),
				 'google'      => true, 
				 'font-backup' => true,
				 'line-height'   => false,
				 'text-align'   => false,
				 'units'       =>'px',
				 'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'softd'),
				 'default'     => array(
					  'color'       => '', 
					  'font-style'  => '', 
					  'font-family' => '', 
					  'google'      => true,
					  'font-size'   => '', 
					 ),
				 'output'      => array('
				  .shortcode_content p'      
				 ),					 
				),


				/* Shortcode */
				array(
					'title'     => esc_html__( 'Shortcode', 'softd' ),
					'subtitle'  => esc_html__( 'Add your shortcode form field here.', 'softd' ),
					'id'        => 'witr_footre_shortcode',
					'type'      => 'text',
					'desc'       => esc_html__('Please use this way Example ex-[mc4wp_form id="831"]', 'softd'),
				),
				array(
					'id'             => 'softd_shortcode_form_margin',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_form'),
					'mode'           => 'margin',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' shortcode Form Margin', 'softd'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing margin they want.', 'softd'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'softd'),
					'default'            => array(
						'margin-top'     => '', 
						'margin-right'   => '', 
						'margin-bottom'  => '', 
						'margin-left'    => '',
						'units'          => 'px', 
					)
				),


				
            ),
    ) );




	
	
			
/* ========================
END softd FOOTER FIELD
=========================*/	

    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => esc_html__( 'Customizer Only', 'softd' ),
        'desc'            => esc_html__( 'This Section should be visible only in Customizer', 'softd' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => esc_html__( 'Customizer Only Option', 'softd' ),
                'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'softd' ),
                'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'softd' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => esc_html__('Opt 1','softd'),
                    '2' => esc_html__('Opt 2','softd'),
                    '3' => esc_html__('Opt 3','softd')
                ),
                'default'         => '2'
            ),
        )
    ) );   	 
	 
	 
	 

    /*
     * <--- END SECTIONS
     */
