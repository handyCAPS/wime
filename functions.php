<?php

	define(VLUCHTPAD, get_stylesheet_directory_uri());

	function wime_menus() {

	$locations = array(
			'header_menu'  => __( 'Hoofd Menu', 'text_domain' ),
			'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
			'mobile_footer'  => __( 'Footer Menu on mobile devices', 'text_domain' ),
		);
		register_nav_menus( $locations );

	}

	// Hook into the 'init' action
	add_action( 'init', 'wime_menus' );

	// Enable thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(200, 200, true); // Normal post thumbnails


	// Enable admin to set custom background images in 'appearance > background'
	add_custom_background();


	// Randomly chosen placeholder text for post/page edit screen
	function wpfme_writing_encouragement( $content ) {
		global $post_type;
		if($post_type == "post"){
		$encArray = array(
			// Placeholders for the posts editor
			"Test post message one.",
			"Test post message two.",
			"<h1>Test post heading!</h1>"
			);
			return $encArray[array_rand($encArray)];
		}
		else{ $encArray = array(
			// Placeholders for the pages editor
			"Test page message one.",
			"Test page message two.",
			"<h1>Test Page Heading</h1>"
			);
			return $encArray[array_rand($encArray)];
		}
	}
	add_filter( 'default_content', 'wpfme_writing_encouragement' );


	// Stop images getting wrapped up in p tags when they get dumped out with the_content() for easier theme styling
	function wpfme_remove_img_ptags($content){
		return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
	add_filter('the_content', 'wpfme_remove_img_ptags');


	// Call Googles HTML5 Shim, but only for users on old versions of IE
	function wpfme_IEhtml5_shim () {
		global $is_IE;
		if ($is_IE)
		echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
	}
	add_action('wp_head', 'wpfme_IEhtml5_shim');


	// Remove the version number of WP
	// Warning - this info is also available in the readme.html file in your root directory - delete this file!
	remove_action('wp_head', 'wp_generator');


	// Obscure login screen error messages
	function wpfme_login_obscure(){ return '<strong>Sorry</strong>: Inlog gegevens kloppen niet!';}
	add_filter( 'login_errors', 'wpfme_login_obscure' );


?>