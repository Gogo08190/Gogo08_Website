<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class RouletteController extends BaseController
{

    // Haut de page
    protected $top_roulette;
    protected $texte_roulette;

    public function __construct() {

      // Haut de page
      $this->top_roulette = get_post_meta(get_the_ID(), 'th_top_roulette', true);
      $this->texte_roulette = get_post_meta(get_the_ID(), 'th_texte_roulette', true);
    }


    public function index(Post $model) {
  	  return view('pages.roulette', [

        // Haut de page
        'top_roulette' => $this->top_roulette,
        'texte_roulette' => $this->texte_roulette,

      ]);
    }
}
