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

if(!is_admin()) {
  add_action(
    'after_setup_theme',
    function() {
      add_theme_support('html5', ['script', 'style']);
    }
  );

  add_action('wp_loaded', 'output_buffer_start');
  function output_buffer_start() {
    ob_start("output_callback");
  }

  function output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
  }

  add_filter('style_loader_tag', 'optimize_style_tags', 10, 4);
  function optimize_style_tags($html, $handle, $href, $media) {
    return '<link rel="stylesheet" href="' . $href . '" media="' . $media . '">' . "\n";
  }

  add_filter('script_loader_tag', 'optimize_script_tags', 10, 3);
  function optimize_script_tags($tag, $handle, $src) {
    return '<script src="' . $src . '"></script>' . "\n";
  }
}

function remove_footer_admin () {
	echo "<p>Contactez <a href='https://www.gogo08.fr' target='_blank'>Gogo08</a> si vous avez besoin d'aide par <a href='mailto:contact@gogo08190.fr'>mail</a></p>";
}

add_filter('admin_footer_text', 'remove_footer_admin');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// remove jquery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
}

?>
