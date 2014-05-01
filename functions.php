<?php

/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */	

function alx_load() {
		// Load theme languages
		load_theme_textdomain( 'hueman', get_template_directory().'/languages' );
		
		// Load theme options and meta boxes
		load_template( get_stylesheet_directory() . '/functions/theme-options.php' );
		load_template( get_template_directory() . '/functions/meta-boxes.php' );
		
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

?>