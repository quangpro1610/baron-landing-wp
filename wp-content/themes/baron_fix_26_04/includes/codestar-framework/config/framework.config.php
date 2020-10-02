<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Framework',
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
$options = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]	 = array(
	'name'     => 'section_work',
	'title'    => 'Work',
	'icon'     => 'fa fa-font',
  	'fields' => array(
		array(
			'id'        => 'ele_work',
			'type'      => 'fieldset',
			'fields'    => array(
			    array(
			      	'id'    => 'work_heading',
			      	'type'  => 'text',
			      	'title' => 'Title',
			    ),
			    array(
			      	'id'    => 'work_logo',
			      	'type'  => 'image',
			      	'title' => 'Image',
			    ),
			    array(
			      	'id'    => 'work_content',
			      	'type'  => 'wysiwyg',
			      	'title' => 'Content',
			      	'settings' => array(
    					'textarea_rows' => 5,
    				)
			    ),
		  	),
		),
	)
);
$options[]   = array(
	'name'     => 'slider',
	'title'    => 'Slider',
	'icon'     => 'fa fa-picture-o',
  	'fields' => array(
    	array(
	      	'id'              => 'slider_group',
	      	'type'            => 'group',
	      	'button_title'    => 'Add new',
	      	'accordion_title' => 'Add new slide',
	      	'fields'          => array(
		        array(
		          	'id'          => 'image',
		          	'type'        => 'image',
		          	'title'       => 'Image',
		        ),
		        array(
		          'id'          => 'title',
		          'type'        => 'text',
		          'title'       => 'Title',
		        ),
		        array(
		          'id'          => 'subtitle',
		          'type'        => 'text',
		          'title'       => 'Subtitle',
		        )
      		)
    	),
  	)
);
$options[]   = array(
	'name'     => 'properties',
	'title'    => 'Properties',
	'icon'     => 'fa fa-list-alt',
  	'fields' => array(
    	array(
	      	'id'              => 'properties_group',
	      	'type'            => 'group',
	      	'button_title'    => 'Add new',
	      	'accordion_title' => 'Add new property',
	      	'fields'          => array(
		        array(
		          	'id'          => 'image',
		          	'type'        => 'image',
		          	'title'       => 'Image',
		        ),
		        array(
		          'id'          => 'title',
		          'type'        => 'text',
		          'title'       => 'Title',
		        ),
		        array(
		          'id'          => 'subtitle',
		          'type'        => 'text',
		          'title'       => 'Subtitle',
		        ),
		        array(
		          'id'          => 'content',
		          'type'        => 'wysiwyg',
		          'title'       => 'Content',
		        ),
      		)
    	),
  	)
);
$options[]   = array(
	'name'     => 'approach',
	'title'    => 'Approach',
	'icon'     => 'fa fa-header',
  	'fields' => array(
    	array(
	      	'id'              => 'approach_group',
	      	'type'            => 'group',
	      	'button_title'    => 'Add new',
	      	'accordion_title' => 'Add new',
	      	'fields'          => array(
		        array(
		          'id'          => 'approach_title',
		          'type'        => 'text',
		          'title'       => 'title',
		        ),
		        array(
		          'id'          => 'approach_content',
		          'type'        => 'wysiwyg',
		          'title'       => 'Content',
		        ),
      		)
    	),
  	)
);
$options[]	 = array(
	'name'     => 'section_about',
	'title'    => 'About us',
	'icon'     => 'fa fa-users',
  	'fields' => array(
		array(
			'id'        => 'ele_about',
			'type'      => 'fieldset',
			'fields'    => array(
			    array(
			      	'id'    => 'about_heading',
			      	'type'  => 'text',
			      	'title' => 'Title',
			    ),
			    array(
			      	'id'    => 'about_image',
			      	'type'  => 'image',
			      	'title' => 'Image',
			    ),
			    array(
			      	'id'    => 'about_content',
			      	'type'  => 'wysiwyg',
			      	'title' => 'Content',
			      	'settings' => array(
    					'textarea_rows' => 5,
    				)
			    ),
		  	),
		),
	)
);
$options[]   = array(
  'name'        => 'baron_social_links',
  'title'       => 'Social Links',
  'icon'        => 'fa fa-link',

  // begin: fields
  'fields'      => array(
   	array(
		'id'      => 'baron_facebook',
		'type'    => 'text',
		'title'   => 'Facebook',
	),
   	array(
		'id'      => 'baron_google',
		'type'    => 'text',
		'title'   => 'Google',
	),
	array(
		'id'      => 'baron_twitter',
		'type'    => 'text',
		'title'   => 'Twitter',
	),
	array(
		'id'      => 'baron_youtube',
		'type'    => 'text',
		'title'   => 'Youtube',
	),
  ), // end: fields
);
$options[]   = array(
	'name'     => 'other',
	'title'    => 'Other',
	'icon'     => 'fa fa-cogs',
  	'fields' => array(
    	array(
	      	'id'              => 'contact_group',
	      	'type'            => 'group',
	      	'title' 		  => 'Contact',
	      	'button_title'    => 'Add new',
	      	'accordion_title' => 'Add new',
	      	'fields'          => array(
		        array(
		          'id'          => 'contact_name',
		          'type'        => 'text',
		          'title'       => 'Name',
		        ),
		        array(
		          'id'          => 'contact_position',
		          'type'        => 'text',
		          'title'       => 'Position',
		        ),
		        array(
		          'id'          => 'contact_location',
		          'type'        => 'text',
		          'title'       => 'Location',
		        ),
		        array(
		          'id'          => 'contact_email',
		          'type'        => 'text',
		          'title'       => 'Email',
		        ),
      		)
    	),
	 	array(
	      	'id'    => 'footer_log',
	      	'type'  => 'image',
	      	'title' => 'Footer Logo',
	    ),
  	)
);
CSFramework::instance( $settings, $options );
