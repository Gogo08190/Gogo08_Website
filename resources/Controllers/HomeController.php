<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $twitch_desc;
    protected $twitch_url;
    protected $twitch_don;

    // Team
    protected $titre_team;

    // Partenaire
    protected $titre_partenaire;


    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->twitch_desc = get_post_meta(get_the_ID(), 'th_twitch_desc', true);
      $this->twitch_url = get_post_meta(get_the_ID(), 'th_twitch_url', true);
      $this->twitch_don = get_post_meta(get_the_ID(), 'th_twitch_don', true);

      // Haut de page
      $this->titre_team = get_post_meta(get_the_ID(), 'th_titre_team', true);

      // Haut de page
      $this->titre_partenaire = get_post_meta(get_the_ID(), 'th_titre_partenaire', true);

    }


    public function index(Post $model) {
  	  return view('pages.home', [

        // Haut de page
        'titre' => $this->titre,
        'twitch_desc' => $this->twitch_desc,
        'twitch_url' => $this->twitch_url,
        'twitch_don' => $this->twitch_don,

        // Team
        'titre_team' => $this->titre_team,

        // Partenaire
        'titre_partenaire' => $this->titre_partenaire,

        // Post
        'list_modo' => $model->get_modo(),
        'list_partenaires' => $model->get_partenaires(),
      ]);
    }
}
