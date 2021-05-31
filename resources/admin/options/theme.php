<?php

/**
 * Define your theme custom code.
*/

/* Support thumbnails sur toutes les pages */
add_theme_support('post-thumbnails');

/* Suppression des pages inutiles sur le menu lateral */
add_action('admin_menu', 'wpc_admin_menu' );
function wpc_admin_menu(){
  remove_menu_page("edit-comments.php");
}

add_action( 'wp_before_admin_bar_render', 'admin_bar_links' );
function admin_bar_links() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
	$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
	$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
	$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
	$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
	$wp_admin_bar->remove_menu('updates');          // Remove the updates link
	$wp_admin_bar->remove_menu('comments');         // Remove the comments link
	$wp_admin_bar->remove_menu('new-content');      // Remove the content link
	$wp_admin_bar->remove_menu('revisr');      		// Remove revisr
	$wp_admin_bar->remove_menu('view');
}

function remove_footer_admin () {
	echo "<p>Contactez <a href='https://www.gogo08.fr' target='_blank'>Gogo08</a> si vous avez besoin d'aide par <a href='mailto:contact@gogo08190.fr'>mail</a></p>";
}

add_filter('admin_footer_text', 'remove_footer_admin');

?>
