<?php
/*
Plugin Name: Hide Admin Bar Search
Plugin URI: http://www.helenhousandi.com/wordpress/plugins/hide-admin-bar-search/
Description: Small plugin to hide the search box in the admin bar in both dashboard and site views.
Version: 1.0
Author: Helen Hou-Sandi
Author URI: http://www.helenhousandi.com
*/

if ( !function_exists('hide_admin_bar_search') ) {
	function hide_admin_bar_search () { ?>
		<style type="text/css">
		#wpadminbar #adminbarsearch {
			display: none;
		}
		</style>
		<?php
	}
	add_action('admin_head', 'hide_admin_bar_search');
	add_action('wp_head', 'hide_admin_bar_search');
}

?>