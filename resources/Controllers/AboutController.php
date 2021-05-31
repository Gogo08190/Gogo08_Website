<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $intro_about;
    protected $logo;

    // FAQ
    protected $titre_faq;
    protected $faq_shortcode;

    // Partenaire
    protected $titre_partenaire;

    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->intro_about = get_post_meta(get_the_ID(), 'th_intro_about', true);
      $this->logo = get_post_meta(get_the_ID(), 'th_logo', true);

      // FAQ
      $this->titre_faq = get_post_meta(get_the_ID(), 'th_titre_faq', true);
      $this->faq_shortcode = get_post_meta(get_the_ID(), 'th_faq_shortcode', true);

      // Partenaire
      $this->titre_partenaire = get_post_meta(get_the_ID(), 'th_titre_partenaire', true);
    }


    public function index(Post $model) {
  	  return view('pages.about', [

        // Haut de page
        'titre' => $this->titre,
        'intro_about' => $this->intro_about,
        'logo' => $this->logo,

        // FAQ
        'titre_faq' => $this->titre_faq,
        'faq_shortcode' => $this->faq_shortcode,

        // Partenaire
        'titre_partenaire' => $this->titre_partenaire,

        // Post
        'list_partenaires' => $model->get_partenaires(),
      ]);
    }
}
