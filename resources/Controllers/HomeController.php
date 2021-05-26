<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $desc;

    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->desc = get_post_meta(get_the_ID(), 'th_desc', true);

    }


    public function index(Post $model) {
  	  return view('pages.home', [

        // Haut de page
        'titre' => $this->titre,
        'desc' => $this->desc,

        // Post
        'list_modo' => $model->get_modo(),
      ]);
    }
}
