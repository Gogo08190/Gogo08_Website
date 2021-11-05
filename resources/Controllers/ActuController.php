<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class ActuController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $desc;

    // Actu
    protected $shortcode;

    // Partenaire
    protected $titre_partenaire;

    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->desc = get_post_meta(get_the_ID(), 'th_desc', true);

      // Actu
      $this->shortcode = get_post_meta(get_the_ID(), 'th_shortcode', true);

      // Partenaire
      $this->titre_partenaire = get_post_meta(get_the_ID(), 'th_titre_partenaire', true);
    }


    public function index(Post $model) {
  	  return view('actus.actu', [

        // Haut de page
        'titre' => $this->titre,
        'desc' => $this->desc,

        // Actu
        'shortcode' => $this->shortcode,

        // Partenaire
        'titre_partenaire' => $this->titre_partenaire,

        // Post
        'list_partenaires' => $model->get_partenaires(),
      ]);
    }
}
