<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class MentionsController extends BaseController
{

    // Haut de page
    protected $top_mentions;
    protected $texte_mentions;

    public function __construct() {

      // Haut de page
      $this->top_mentions = get_post_meta(get_the_ID(), 'th_top_mentions', true);
      $this->texte_mentions = get_post_meta(get_the_ID(), 'th_texte_mentions', true);
    }


    public function index(Post $model) {
  	  return view('pages.mentions', [

        // Haut de page
        'top_mentions' => $this->top_mentions,
        'texte_mentions' => $this->texte_mentions,

      ]);
    }
}
