<?php

/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */	

function alx_load() {
		// Load theme languages
		load_theme_textdomain( 'hueman', get_template_directory().'/languages' );
		
		// Load theme options and meta boxes
		load_template( get_stylesheet_directory() . '/functions/theme-options.php' );
	
		// Load custom widgets
		load_template( get_template_directory() . '/functions/widgets/alx-tabs.php' );
		load_template( get_template_directory() . '/functions/widgets/alx-video.php' );
		load_template( get_template_directory() . '/functions/widgets/alx-posts.php' );
		
		// Load custom shortcodes
		load_template( get_template_directory() . '/functions/shortcodes.php' );

		// Load dynamic styles
		load_template( get_template_directory() . '/functions/dynamic-styles.php' );
		
		// Load TGM plugin activation
		load_template( get_template_directory() . '/functions/class-tgm-plugin-activation.php' );
	}

		
/*  Register sidebars
/* ------------------------------------ */	
if ( ! function_exists( 'alx_sidebars' ) ) {

	function alx_sidebars()	{
		register_sidebar(array( 'name' => 'Primary','id' => 'primary','description' => "Normal full width sidebar", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
		register_sidebar(array( 'name' => 'Secondary','id' => 'secondary','description' => "Normal full width sidebar", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
		register_sidebar(array( 'name' => 'Home Left','id' => 'home-left','description' => "Homepage Block Left", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
		register_sidebar(array( 'name' => 'Home Right','id' => 'home-right','description' => "Homepage Block Right", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
		if ( ot_get_option('footer-widgets') >= '1' ) { register_sidebar(array( 'name' => 'Footer 1','id' => 'footer-1', 'description' => "Widetized footer", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
		if ( ot_get_option('footer-widgets') >= '2' ) { register_sidebar(array( 'name' => 'Footer 2','id' => 'footer-2', 'description' => "Widetized footer", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
		if ( ot_get_option('footer-widgets') >= '3' ) { register_sidebar(array( 'name' => 'Footer 3','id' => 'footer-3', 'description' => "Widetized footer", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
		if ( ot_get_option('footer-widgets') >= '4' ) { register_sidebar(array( 'name' => 'Footer 4','id' => 'footer-4', 'description' => "Widetized footer", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
	}
	
}
add_action( 'widgets_init', 'alx_sidebars' );

?>