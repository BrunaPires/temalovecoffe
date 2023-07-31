<?php

    function themabrubru(){
        wp_enqueue_style( 'themabrubru', get_stylesheet_uri());
        
    }

    add_action( 'wp_enqueue_scripts', 'themabrubru' );

    add_theme_support( 'align-wide' );

//  menus
register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu'
	)
);


