<?php

use Themosis\Support\Facades\Action;
use Themosis\Support\Facades\Filter;

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
Filter::add('body_class', function ($classes) {
    // Adds a class of hfeed to non-singular pages.
    if (! is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (! is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
});

/**
 * Add function save post / draft
*/

add_action("save_post", "save_metabox");
add_action("save_draft", "save_metabox");
function save_metabox() {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	} else {
		$options = array();

		foreach ($_POST as $key => $value) {
			if(substr($key, 0, 3) === 'th_') {
				$options[] = $key;
			}
		}

		foreach ($options as $O) {
			update_post_meta(get_the_ID(), $O, $_POST[$O]);
		}
	}
}

/**
 * Add function autosave
*/

add_action('admin_footer', 'admin_custom_script');
function admin_custom_script() {
  echo '<script>
          jQuery(document).ready(function($) {
          $(document).on("click", ".themosis__tabs__menu button, .supports-drag-drop, .themosis__collection__button--remove, .themosis__input__radio", function() {
            $(".themosis__metabox__footer button").click();
          });

          $(document).on("mouseup", ".themosis__collection__item.selected", function() {
            $(".themosis__metabox__footer button").click();
          });

          $(document).on("touchstart", function(e) {
            if(($(e.target).text() == "Insert") || ($(e.target).text() == "Remove Selected")) {
              setTimeout(
                function() {
                  $(".themosis__metabox__footer button").click();
                }, 500);
            }
          });
        });
  </script>';
}

/**
 * Remove save button metabox themosis
*/

add_action('admin_footer', 'admin_custom_footer');
function admin_custom_footer() {
	echo '<style>.themosis__metabox__footer button { display : none !important; }</style>';
}

/**
 * Remove head and footer links
 */

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'index_rel_link' );
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'rel_canonical');
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter( 'embed_oembed_discover', '__return_false' );
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	}

	else {
		return array();
	}
}

add_filter('show_admin_bar', '__return_false');

function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}
