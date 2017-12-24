<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */

		wp_register_style('bootstrap', get_parent_theme_file_uri('assets/css/bootstrap.css'), null, '3.3.7', null);

		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version'), 'screen');

		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		wp_register_style('flexslider', get_parent_theme_file_uri('/assets/css/flexslider.css'),null, null, null);
		
		
		/* Enqueue Scripts */
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('reset');
		wp_enqueue_style('mainStyle');
		
		if(is_page('galeria')){
		wp_enqueue_style('flexslider');
		}
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
	
?>