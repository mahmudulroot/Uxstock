<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Remix Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'sorter_section',
  'title'       => 'General Setting Section',
  'icon'        => 'fa fa-cog',
	'fields'      => array(
		array(
		'id'             => 'remix_sorter',
		'type'           => 'sorter',
		'title'          => 'Sorter',
		'default'        => array(
			'enabled'      => array(
			'blog'        => 'Blog',
			'about'   => 'About',
			'work' => 'Work',
			'add'    => 'Add',
			'video'    => 'Video',			
			'clients'        => 'Clients',
			'portfolio'   => 'Portfolio',
			'pricing' => 'Pricing',
			'service'    => 'service',
			'slider'    => 'Slider',
			'team'    => 'Team',
			),
			'disabled'     => array(
	
			),
		 ),
	   ),
	),
);


$options[]      = array(
  'name'        => 'header_section',
  'title'       => 'Header Section',
  'icon'        => 'fa fa-home',
	'fields'      => array(
    array(
      'id'      => 'logo_upload',
      'type'    => 'upload',
      'title'   => 'Logo Image Upload Here',
    ),
	array(
	'type'    => 'heading',
	'content' => 'Menu Bar Section',
	),
	array(
      'id'      => '1_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),	
	array(
      'id'      => '2_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),
    array(
      'id'      => '3_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),

	array(
      'id'      => '4_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),	

	array(
      'id'      => '5_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),	

	array(
      'id'      => '6_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),	
	array(
      'id'      => '7_menu_name',
      'type'    => 'text',
      'title'   => 'Write Your Manu Name',
    ),
    	
	
   ),
 );
$options[]      = array(
  'name'        => 'slider_section',
  'title'       => 'Slider Section',
  'icon'        => 'fa fa-user',

  // begin: fields
  'fields'      => array(
			array(
				'id'              => 'slider_section_group',
				'type'            => 'group',
				'title'           => 'Group Field',
				'button_title'    => 'Add New Slider',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'slider_title',
				'type'  => 'text',
				'title' => 'Write Your Slider Title',
				),	
		
				array(
				'id'    => 'slider_sub_title',
				'type'  => 'text',
				'title' => 'Write Your Slider Sub Title',
				),	
				array(
				'id'    => 'slider_description',
				'type'  => 'textarea',
				'title' => 'Writet Your Slider Description',
				),
				
								
				array(
				'id'    => 'slider_upload',
				'type'  => 'upload',
				'title' => 'Upload Your Slider Image',
				),	
				array(
				'id'    => 'slider_button',
				'type'  => 'text',
				'title' => 'Write Your Slider Button Name',
				),
			),
		
		)
	),
);
 $options[]      = array(
  'name'        => 'about_section',
  'title'       => 'About Section',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(
	array(
      'id'      => 'about_title',
      'type'    => 'text',
      'title'   => 'Write Your About Section Title Here',
    ),

	array(
      'id'      => 'about_description',
      'type'    => 'textarea',
      'title'   => 'Write Your About Section Description Here',
    ),	
	array(
      'id'      => 'about_2nd_title',
      'type'    => 'text',
      'title'   => 'Write Your About Sub Section Title Here',
    ),

	array(
      'id'      => 'about_2nd_description',
      'type'    => 'textarea',
      'title'   => 'Write Your About Sub Section Description Here',
    ),
		
  
array(
	'type'    => 'heading',
	'content' => 'About Section Content',
	),
  
  
  
			array(
			'id'              => 'about_section_group',
			'type'            => 'group',
			'title'           => 'Group Field',
			'button_title'    => 'Add New blog Post',
			'accordion_title' => 'Add New Field',
			'fields'          => array(
				array(
				'id'    => 'about_group_icon',
				'type'  => 'icon',
				'title' => 'Upload Your Icon Here',
				),
				array(
				'id'    => 'about_group_title',
				'type'  => 'text',
				'title' => 'Write Your About Content Title',
				),
				array(
				'id'    => 'about_group_des',
				'type'  => 'textarea',
				'title' => 'Write Your About Content Description',
				),
			),
		),	
		
		array(
			'id'              => 'about_content_group',
			'type'            => 'group',
			'title'           => 'Group Field',
			'button_title'    => 'Add New Content Post',
			'accordion_title' => 'Add New Field',
			'fields'          => array(
				array(
				'id'    => 'about_content_Image',
				'type'  => 'upload',
				'title' => 'Upload Your Post Image Here',
				),
				array(
				'id'    => 'about_content_title',
				'type'  => 'text',
				'title' => 'Write Your About Post Title',
				),
				array(
				'id'    => 'about_content_des',
				'type'  => 'textarea',
				'title' => 'Write Your About Posts Description',
				),	
				array(
				'id'    => 'about_content_buttonb',
				'type'  => 'text',
				'title' => 'Write Your About Content Read More BGutton Name',
				),	
				array(
				'id'    => 'about_content_link',
				'type'  => 'text',
				'title' => 'Write Your About Content post Link',
				),
			),
		),
	)
);
$options[]      = array(
  'name'        => 'services_section',
  'title'       => 'Services Section',
  'icon'        => 'fa fa-cogs',

  // begin: fields
  'fields'      => array(
			array(
			'id'      => 'services_title',
			'type'    => 'text',
			'title'   => 'Write Your services Section Title Here',
			),

			array(
			'id'      => 'services_description',
			'type'    => 'textarea',
			'title'   => 'Write Your services Section Description Here',
			),
  
  
  
			array(
				'id'              => 'service_section_group',
				'type'            => 'group',
				'title'           => 'Group Field',
				'button_title'    => 'Add New Services',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'service_group_icon',
				'type'  => 'icon',
				'title' => 'Upload Your Icon Here',
				),
				array(
				'id'    => 'service_group_title',
				'type'  => 'text',
				'title' => 'Write Your About Content Title',
				),
				array(
				'id'    => 'service_group_des',
				'type'  => 'textarea',
				'title' => 'Write Your About Content Description',
				),
				array(
				'id'    => 'service_content_link',
				'type'  => 'text',
				'title' => 'Write Your About Content post Link',
				),
			),
		)
	),
);

$options[]      = array(
  'name'        => 'team_section',
  'title'       => 'Team Section',
  'icon'        => 'fa fa-user',

  // begin: fields
  'fields'      => array(
			array(
			'id'      => 'team_title',
			'type'    => 'text',
			'title'   => 'Write Your services Section Title Here',
			),

			array(
			'id'      => 'team_description',
			'type'    => 'textarea',
			'title'   => 'Write Your services Section Description Here',
			),
  
  
  
			array(
				'id'              => 'team_section_group',
				'type'            => 'group',
				'title'           => 'Group Field',
				'button_title'    => 'Add New Team',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'team_group_Image',
				'type'  => 'upload',
				'title' => 'Upload Your Image Here',
				),
				array(
				'id'    => 'team_group_title',
				'type'  => 'text',
				'title' => 'Write Your Team Content Title',
				),	
				array(
				'id'    => 'team_group_sub_title',
				'type'  => 'text',
				'title' => 'Write Your Team Content Sub Title',
				),
				array(
				'id'    => 'team_group_des',
				'type'  => 'textarea',
				'title' => 'Write Your Team Content Description',
				),	
				array(
				'id'    => 'team_group_color',
				'type'  => 'color_picker',
				'title' => 'Write Your Team Content Description',
				),
				array(
				'id'    => 'team_social_fb_link',
				'type'  => 'icon',
				'title' => 'Upload Your facebook Icon Here',
				),	
				array(
				'id'    => 'team_social_tw_link',
				'type'  => 'icon',
				'title' => 'Upload Your Twitter Icon Here',
				),	array(
				'id'    => 'team_social_googleplus_link',
				'type'  => 'icon',
				'title' => 'Upload Your Google Plus Icon Here',
				),
			),
		)
	),
);
$options[]      = array(
  'name'        => 'pricing_section',
  'title'       => 'Pricing Section',
  'icon'        => 'fa fa-usd',

  // begin: fields
  'fields'      => array(
  
			array(
			'id'      => 'pricing_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Title Here',
			),

			array(
			'id'      => 'pricing_description',
			'type'    => 'textarea',
			'title'   => 'Write Your Pricing Section Description Here',
			),
			
			array(
				'id'              => 'pricing_text_section_group',
				'type'            => 'group',
				'title'           => 'Group Field',
				'button_title'    => 'Add New Team',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
			array(
			'id'      => 'content_P_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Title Here',
			),

			array(
			'id'      => 'content_doler_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Doler Sign',
			),
			array(
			'id'      => 'contne_number_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section How Much Doler You sell Here',
			),

			array(
			'id'      => 'content_yaer_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Month Here',
				),
			)
	
		),
		array(
				'id'              => 'pricing_section_group',
				'type'            => 'group',
				'title'           => 'Group Field',
				'button_title'    => 'Add New Team',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'pricing_group_title',
				'type'  => 'text',
				'title' => 'Write Your Pricing Content Title',
				),	
				array(
				'id'    => 'pricing_condition',
				'type'  => 'checkbox',
				'title' => 'Select Your Condition',
				'label' => 'Yes, Please do it.'
				),
			),
		),		
		array(
				'id'              => 'pricing2_text_section_group',
				'type'            => 'group',
				'title'           => 'Group Field Pricing standard Section',
				'button_title'    => 'Add New standard',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
			array(
			'id'      => 'content_P_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Title Here',
			),

			array(
			'id'      => 'content_doler_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Doler Sign',
			),
			array(
			'id'      => 'contne_number_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section How Much Doler You sell Here',
			),

			array(
			'id'      => 'content_yaer_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Month Here',
				),
			)
	
		),
		array(
				'id'              => 'pricing2_section_group',
				'type'            => 'group',
				'title'           => 'Group Field Pricing standard Section',
				'button_title'    => 'Add New standard',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'pricing_group_title',
				'type'  => 'text',
				'title' => 'Write Your Pricing Content Title',
				),	
				array(
				'id'    => 'pricing_condition',
				'type'  => 'checkbox',
				'title' => 'Select Your Condition',
				'label' => 'Yes, Please do it.'
				),
			),
		),	
		array(
				'id'              => 'pricing3_text_section_group',
				'type'            => 'group',
				'title'           => 'Group Field Pricing Profesonal Section',
				'button_title'    => 'Add New Profesonal',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
			array(
			'id'      => 'content_P_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Title Here',
			),

			array(
			'id'      => 'content_doler_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Doler Sign',
			),
			array(
			'id'      => 'contne_number_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section How Much Doler You sell Here',
			),

			array(
			'id'      => 'content_yaer_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Month Here',
				),
			)
	
		),
		array(
				'id'              => 'pricing3_section_group',
				'type'            => 'group',
				'title'           => 'Group Field Pricing Profesonal Section',
				'button_title'    => 'Add New Profesonal',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'pricing_group_title',
				'type'  => 'text',
				'title' => 'Write Your Pricing Content Title',
				),	
				array(
				'id'    => 'pricing_condition',
				'type'  => 'checkbox',
				'title' => 'Select Your Condition',
				'label' => 'Yes, Please do it.'
				),
			),
		),	
		array(
				'id'              => 'pricing4_text_section_group',
				'type'            => 'group',
				'title'           => 'Group Field Pricing premium Section',
				'button_title'    => 'Add New premium',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
			array(
			'id'      => 'content_P_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Title Here',
			),

			array(
			'id'      => 'content_doler_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Doler Sign',
			),
			array(
			'id'      => 'contne_number_title',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section How Much Doler You sell Here',
			),

			array(
			'id'      => 'content_yaer_description',
			'type'    => 'text',
			'title'   => 'Write Your Pricing Section Month Here',
				),
			)
	
		),
		array(
				'id'              => 'pricing4_section_group',
				'type'            => 'group',
				'title'           => 'Group Field Pricing premium Section',
				'button_title'    => 'Add New premium',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'pricing_group_title',
				'type'  => 'text',
				'title' => 'Write Your Pricing Content Title',
				),	
				array(
				'id'    => 'pricing_condition',
				'type'  => 'checkbox',
				'title' => 'Select Your Condition',
				'label' => 'Yes, Please do it.'
				),
			),
		)
	),
 );
$options[]      = array(
  'name'        => 'clients_section',
  'title'       => 'Clients Section',
  'icon'        => 'fa fa-user',

  // begin: fields
  'fields'      => array(
			array(
			'id'      => 'clients_title',
			'type'    => 'text',
			'title'   => 'Write Your Clients Title Here',
			),
  
			array(
				'id'              => 'clients_section_group',
				'type'            => 'group',
				'title'           => 'Add New Clients Information',
				'button_title'    => 'Add New Slider Section',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				
				array(
				'id'    => 'clients_upload',
				'type'  => 'upload',
				'title' => 'Upload Your Clients Image',
				'label' => 'Yes, Please do it.'
				),
				
				array(
				'id'    => 'clients_group_title',
				'type'  => 'textarea',
				'title' => 'Write Your Clients Motto',
				),	
		
				array(
				'id'    => 'clients_company',
				'type'  => 'text',
				'title' => 'Write Your Company Name',
				),	
				array(
				'id'    => 'clients_position',
				'type'  => 'text',
				'title' => 'Writet Your Position Of Company',
				'label' => 'Yes, Please do it.'
				),
			),
		
		),
		array(
				'id'              => 'clients_section_image_group',
				'type'            => 'group',
				'title'           => 'Company Logo Section',
				'button_title'    => 'Add New Company Logo',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				
				array(
				'id'    => 'clients_image_upload',
				'type'  => 'upload',
				'title' => 'Upload Your Clients Image',
				'label' => 'Yes, Please do it.'
				)

			),
		)
	),
);
$options[]      = array(
  'name'        => 'working_section',
  'title'       => 'Working Section',
  'icon'        => 'fa fa-cogs',

  // begin: fields
  'fields'      => array(
			array(
			'id'      => 'working_title',
			'type'    => 'text',
			'title'   => 'Write Your Working Section Title Here',
			),

			array(
			'id'      => 'working_description',
			'type'    => 'textarea',
			'title'   => 'Write Your Working Section Description Here',
			),
			array(
			'id'      => 'working_image',
			'type'    => 'upload',
			'title'   => 'Upload Your Working Section Image Here',
			),
  
			array(
				'id'              => 'working_section_group',
				'type'            => 'group',
				'title'           => 'Group Field',
				'button_title'    => 'Add New Services',
				'accordion_title' => 'Add New Field',
				'fields'          => array(
				
				array(
				'id'    => 'working_group_icon',
				'type'  => 'icon',
				'title' => 'Upload Your Icon Here',
				),
				array(
				'id'    => 'working_group_title',
				'type'  => 'text',
				'title' => 'Write Your About Content Title',
				),
				
			),
		)
	),
);


CSFramework::instance( $settings, $options );
