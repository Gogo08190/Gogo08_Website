<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $intro_contact;

    // Formulaire
    protected $contact_shortcode;

    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->intro_contact = get_post_meta(get_the_ID(), 'th_intro_contact', true);

      // Formulaire
      $this->contact_shortcode = get_post_meta(get_the_ID(), 'th_contact_shortcode', true);
    }


    public function index(Post $model) {
  	  return view('pages.contact', [

        // Haut de page
        'titre' => $this->titre,
        'intro_contact' => $this->intro_contact,

        // Formulaire
        'contact_shortcode' => $this->contact_shortcode,
      ]);
    }
}
