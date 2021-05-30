<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class VideoController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $shortcode;

    // Playlist
    protected $titre_playlist;

    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->shortcode = get_post_meta(get_the_ID(), 'th_shortcode', true);

      // Playlist
      $this->titre_playlist = get_post_meta(get_the_ID(), 'th_titre_playlist', true);
    }


    public function index(Post $model) {
  	  return view('pages.video', [

        // Haut de page
        'titre' => $this->titre,
        'shortcode' => $this->shortcode,

        // Playlist
        'titre_playlist' => $this->titre_playlist,

        // Post
        'list_partenaires' => $model->get_partenaires(),
        'list_playlist' => $model->get_playlist(),
      ]);
    }
}
