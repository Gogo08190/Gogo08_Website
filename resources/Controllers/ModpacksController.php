<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class ModpacksController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $intro_modpack;

    // Partenaire
    protected $titre_partenaire;


    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->intro_modpack = get_post_meta(get_the_ID(), 'th_intro_modpack', true);

      // Haut de page
      $this->titre_partenaire = get_post_meta(get_the_ID(), 'th_titre_partenaire', true);


    }


    public function index(Post $model) {
  	  return view('pages.modpack', [

        // Haut de page
        'titre' => $this->titre,
        'intro_modpack' => $this->intro_modpack,

        // Partenaire
        'titre_partenaire' => $this->titre_partenaire,

        // Post
        'list_partenaires' => $model->get_partenaires(),
        'list_modpack' => $model->get_modpack(),

      ]);
    }
}
