<?php 
/*
Plugin Name: Quotes Lab
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A plugin to dispplay quotes randomly from a pool
Version: 0.1.0
Author: Tim Doppenberg | ICT-Lab
Author URI: http://www.timdoppenberg.nl
License:  GPL2
*/
?>

<?php

	add_action( 'admin-menu','qula_admin_add_page' );

	function qula_admin_add_page() {
		add_options_page( 'Quote Lab', 'QuoteLab', 'manage_options', 'qula-plugin', 'qula_make_page' );
	}

	function qula_make_page() {
		?>
		<div>
			<h2>Quotes Lab</h2>
			<form action="options.php" method="POST">
				<?php settings_fields( 'qula_options' ); ?>
				<?php do_settings_sections( 'qula-plugin' ); ?>
				<input name="Submit" type="submit" value="<?php esc_attr_e( 'Opslaan' ); ?>"/>
			</form>
		</div>
	<?php }

?>