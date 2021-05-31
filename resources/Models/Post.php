<?php

namespace Theme\Models;

use Illuminate\Database\Eloquent\Model;
use \WP_Query;

/**
 * Class Post.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class Post extends Model
{

  public function get_modo() {
    $args = array(
      'post_type' => 'slug-modo',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'order' => 'ASC'
    );

    $posts = new WP_Query($args);

    $modo = array();
    foreach ($posts->get_posts() as $key => $val) {
      $modo[$key]['title'] = get_the_title($val->ID);
      $modo[$key]['twitter'] = get_post_meta($val->ID, 'th_twitter', true);
      $modo[$key]['youtube'] = get_post_meta($val->ID, 'th_youtube', true);
      $modo[$key]['twitch'] = get_post_meta($val->ID, 'th_twitch', true);
      $modo[$key]['github'] = get_post_meta($val->ID, 'th_github', true);
      $modo[$key]['desc'] = get_post_meta($val->ID, 'th_desc', true);
      $modo[$key]['logo'] = get_post_meta($val->ID, 'th_logo', true);
    }
    return $modo;
  }

  public function get_partenaires() {
    $args = array(
      'post_type' => 'slug-partenaires',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'order' => 'ASC'
    );

    $posts = new WP_Query($args);

    $partenaires = array();
    foreach ($posts->get_posts() as $key => $val) {
      $partenaires[$key]['title'] = get_the_title($val->ID);
      $partenaires[$key]['desc'] = get_post_meta($val->ID, 'th_desc', true);
      $partenaires[$key]['url'] = get_post_meta($val->ID, 'th_url', true);
      $partenaires[$key]['logo'] = get_post_meta($val->ID, 'th_logo', true);
    }
    return $partenaires;
  }

  public function get_playlist() {
    $args = array(
      'post_type' => 'slug-playlist',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'order' => 'DESC'
    );

    $posts = new WP_Query($args);

    $playlist = array();
    foreach ($posts->get_posts() as $key => $val) {
      $playlist[$key]['title'] = get_the_title($val->ID);
      $playlist[$key]['url'] = get_post_meta($val->ID, 'th_url', true);
    }
    return $playlist;
  }

  public function get_modpack() {
    $args = array(
      'post_type' => 'slug-modpack',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'order' => 'ASC'
    );

    $posts = new WP_Query($args);

    $modpack = array();
    foreach ($posts->get_posts() as $key => $val) {
      $modpack[$key]['title'] = get_the_title($val->ID);
      $modpack[$key]['titre'] = get_post_meta($val->ID, 'th_titre', true);
      $modpack[$key]['categorie'] = get_post_meta($val->ID, 'th_categorie');
      $modpack[$key]['desc'] = get_post_meta($val->ID, 'th_desc', true);
      $modpack[$key]['url'] = get_post_meta($val->ID, 'th_url', true);
      $modpack[$key]['logo'] = get_post_meta($val->ID, 'th_logo', true);
    }
    return $modpack;
  }
}
