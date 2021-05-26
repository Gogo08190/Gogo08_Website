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
}
