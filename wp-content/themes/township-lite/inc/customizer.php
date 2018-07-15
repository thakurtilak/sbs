<?php
/**
 * Township Lite Theme Customizer
 *
 * @package Township Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function township_lite_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'township_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'township-lite' ),
	    'description' => __( 'Description of what this panel does.', 'township-lite' )
	) );

	//Layouts
	$wp_customize->add_section( 'township_lite_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'township-lite' ),
		'priority'   => 30,
		'panel' => 'township_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('township_lite_theme_options',array(
	        'default' => '',
	        'sanitize_callback' => 'township_lite_sanitize_choices'
	    )
    );

	$wp_customize->add_control('township_lite_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => 'Do you want this section',
	        'section' => 'township_lite_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','township-lite'),
	            'Right Sidebar' => __('Right Sidebar','township-lite'),
	            'One Column' => __('One Column','township-lite'),
	            'Three Columns' => __('Three Columns','township-lite'),
	            'Four Columns' => __('Four Columns','township-lite'),
	            'Grid Layout' => __('Grid Layout','township-lite')
	        ),
	    )
    );

	//Topbar section
	$wp_customize->add_section('township_lite_topbar_icon',array(
		'title'	=> __('Topbar Section','township-lite'),
		'description'	=> __('Add Header Content here','township-lite'),
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	));

	$wp_customize->add_setting('township_lite_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_contact',array(
		'label'	=> __('Add Phone Number','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('township_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_email',array(
		'label'	=> __('Add Email','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_email',
		'type'		=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('township_lite_topbar_header',array(
		'title'	=> __('Social Icon Section','township-lite'),
		'description'	=> __('Add Header Content here','township-lite'),
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	));

	$wp_customize->add_setting('township_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_youtube_url',array(
		'label'	=> __('Add Youtube link','township-lite'),
		'section'	=> 'township_lite_topbar_header',
		'setting'	=> 'township_lite_youtube_url',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('township_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_facebook_url',array(
		'label'	=> __('Add Facebook link','township-lite'),
		'section'	=> 'township_lite_topbar_header',
		'setting'	=> 'township_lite_facebook_url',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('township_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_twitter_url',array(
		'label'	=> __('Add Twitter link','township-lite'),
		'section'	=> 'township_lite_topbar_header',
		'setting'	=> 'township_lite_twitter_url',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('township_lite_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_rss_url',array(
		'label'	=> __('Add RSS link','township-lite'),
		'section'	=> 'township_lite_topbar_header',
		'setting'	=> 'township_lite_rss_url',
		'type'	=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'township_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'township-lite' ),
		'priority'   => 30,
		'panel' => 'township_lite_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'township_lite_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'township_lite_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'township-lite' ),
			'section'  => 'township_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}

	//Our Amenities
	$wp_customize->add_section('township_lite_amenities_section',array(
		'title'	=> __('Our Amenties','township-lite'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	));
	
	$wp_customize->add_setting('township_lite_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));

	$wp_customize->add_control('township_lite_main_title',array(
		'label'	=> __('Title','township-lite'),
		'section'	=> 'township_lite_amenities_section',
		'type'	=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('township_lite_blogcategory_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('township_lite_blogcategory_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category to display Latest Post','township-lite'),
		'section' => 'township_lite_amenities_section',
	));










	//home page setting pannel
	$wp_customize->add_section('township_lite_footer_section',array(
		'title'	=> __('Copyright','township-lite'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	));
	
	$wp_customize->add_setting('township_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	));
	
	$wp_customize->add_control('township_lite_footer_copy',array(
		'label'	=> __('Copyright Text','township-lite'),
		'section'	=> 'township_lite_footer_section',
		'type'		=> 'textarea'
	));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'township_lite_customize_register' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class township_lite_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );
		
		// Register custom section types.
		$manager->register_section_type( 'township_lite_customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new township_lite_customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'title'    => esc_html__( 'Township Pro', 'township-lite' ),
					'pro_text' => esc_html__( 'Go Pro',         'township-lite' ),
					'pro_url'  => 'http://www.themescaliber.com/premium/township-construction-wordpress-theme'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'township-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'township-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
township_lite_customize::get_instance();