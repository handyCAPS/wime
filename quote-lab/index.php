<?php 
/*
Plugin Name: Quotes Lab
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A plugin to display quotes randomly from a pool
Version: 0.1.0
Author: Tim Doppenberg | ICT-Lab
Author URI: http://www.timdoppenberg.nl
License:  GPL2
*/

	
	function qula_admin_add_page() {
		add_options_page( 'Quote Lab Options', 'QuoteLab', 'manage_options', 'qula-plugin', 'qula_options_page' );
	}

	function qula_options_page() {
			_e(' 
				<div id="wrap">
				<h2>Quote Lab</h2>
				<form action="options.php" method="POST">
				<input type="text" value="Input" name="input"/>
			');

			settings_fields( 'qula_options_group' );

			do_settings_sections( 'qula' );

			_e('</form>');

			submit_button( 'Opslaan', 'primary', 'submit'  );

			_e('</div>');
	}

	add_action( 'admin_init', 'qula_admin_init' );
	add_action( 'admin_menu','qula_admin_add_page' );

?>