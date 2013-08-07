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

	$quote_pool = array(
                      'Logica brengt je van A naar B. Verbeelding brengt je overal. <br><span id="imageErkenning">- Albert Einstein</span>',
                      'Als je troebel water met rust laat, wordt het vanzelf helder. <br><span id="imageErkenning">- Lao-Tse</span>',
                      'De aarde biedt voldoende om ieders behoefte te bevredigen maar niet ieders hebzucht. <br><span id="imageErkenning">- Mahatma Gandhi</span>',
                      'De ergste vorm van ongelijkheid is proberen ongelijke dingen gelijk te maken. <br><span id="imageErkenning">- Aristoteles</span>',
                      'Kostbaar is de wijsheid die door ervaring wordt verkregen. <br><span id="imageErkenning">- R. Ascham</span>',
                      'Een mens heeft twee oren en een mond om twee keer meer te luisteren dan te praten. <br><span id="imageErkenning">- Confucius</span>',
                      'Te weten dat je onwetend bent is het begin van alle wijsheid. <br><span id="imageErkenning">- Viviane van Avelon</span>',
                      'Geluk hangt af van wat men kan geven, niet van wat men kan krijgen. <br><span id="imageErkenning">- Mahatma Gandhi</span>',
                      'Schildpadden kunnen meer over de weg vertellen dan hazen. <br><span id="imageErkenning">- Kahlil Gibran</span>',
                      'Boeken hebben, net als mensen, hun succes vaak aan hun titel te danken.<br><span id="imageErkenning">- Peter Sirius</span>'
                    );
	$zoek = floor(mt_rand(0, count($quote_pool)-1));
	$front_quote = $quote_pool[$zoek];

	function qula_echo_quote() {
		global $front_quote;
		echo $front_quote;
	}

	add_shortcode( 'quote', 'qula_echo_quote' );

	
	// function qula_admin_add_page() {
	// 	add_options_page( 'Quote Lab Options', 'QuoteLab', 'manage_options', 'qula-plugin', 'qula_options_page' );
	// }

	// function qula_options_page() {
	// 		_e(' 
	// 			<div id="wrap">
	// 			<h2>Quote Lab</h2>
	// 			<form action="options.php" method="POST">
	// 			<input type="text" value="Input" name="input"/>
	// 		');

	// 		settings_fields( 'qula_options_group' );

	// 		do_settings_sections( 'qula' );

	// 		_e('</form>');

	// 		submit_button( 'Opslaan', 'primary', 'submit'  );

	// 		_e('</div>');
	// }

	// add_action( 'admin_init', 'qula_admin_init' );
	// add_action( 'admin_menu','qula_admin_add_page' );

?>