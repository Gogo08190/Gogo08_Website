<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class ConfigController extends BaseController
{

    // Haut de page
    protected $titre;
    protected $intro;

    // PC Fixe
    protected $titre_pc;
    protected $cg;
    protected $cm;
    protected $ram;
    protected $proco;
    protected $boitier;
    protected $alim;
    protected $wc;
    protected $dd;
    protected $ssd1;
    protected $ssd2;

    // Périphériques
    protected $titre_hardware;
    protected $screen;
    protected $souris;
    protected $clavier;
    protected $casque;
    protected $micro;
    protected $cam;
    protected $enceinte;
    protected $sd;
    protected $kl;

    // Partenaire
    protected $titre_partenaire;

    public function __construct() {

      // Haut de page
      $this->titre = get_post_meta(get_the_ID(), 'th_titre', true);
      $this->intro = get_post_meta(get_the_ID(), 'th_intro', true);

      // PC Fixe
      $this->titre_pc = get_post_meta(get_the_ID(), 'th_titre_pc', true);
      $this->cg = get_post_meta(get_the_ID(), 'th_cg', true);
      $this->cm = get_post_meta(get_the_ID(), 'th_cm', true);
      $this->ram = get_post_meta(get_the_ID(), 'th_ram', true);
      $this->proco = get_post_meta(get_the_ID(), 'th_proco', true);
      $this->boitier = get_post_meta(get_the_ID(), 'th_boitier', true);
      $this->alim = get_post_meta(get_the_ID(), 'th_alim', true);
      $this->wc = get_post_meta(get_the_ID(), 'th_wc', true);
      $this->dd = get_post_meta(get_the_ID(), 'th_dd', true);
      $this->ssd1 = get_post_meta(get_the_ID(), 'th_ssd1', true);
      $this->ssd2 = get_post_meta(get_the_ID(), 'th_ssd2', true);

      // Périphériques
      $this->titre_hardware = get_post_meta(get_the_ID(), 'th_titre_hardware', true);
      $this->screen = get_post_meta(get_the_ID(), 'th_screen', true);
      $this->souris = get_post_meta(get_the_ID(), 'th_souris', true);
      $this->clavier = get_post_meta(get_the_ID(), 'th_clavier', true);
      $this->casque = get_post_meta(get_the_ID(), 'th_casque', true);
      $this->micro = get_post_meta(get_the_ID(), 'th_micro', true);
      $this->cam = get_post_meta(get_the_ID(), 'th_cam', true);
      $this->enceinte = get_post_meta(get_the_ID(), 'th_enceinte', true);
      $this->sd = get_post_meta(get_the_ID(), 'th_sd', true);
      $this->kl = get_post_meta(get_the_ID(), 'th_kl', true);

      // Partenaire
      $this->titre_partenaire = get_post_meta(get_the_ID(), 'th_titre_partenaire', true);
    }


    public function index(Post $model) {
  	  return view('pages.config', [

        // Haut de page
        'titre' => $this->titre,
        'intro' => $this->intro,

        // PC Fixe
        'titre_pc' => $this->titre_pc,
        'cg' => $this->cg,
        'cm' => $this->cm,
        'ram' => $this->ram,
        'proco' => $this->proco,
        'boitier' => $this->boitier,
        'alim' => $this->alim,
        'wc' => $this->wc,
        'dd' => $this->dd,
        'ssd1' => $this->ssd1,
        'ssd2' => $this->ssd2,

        // Périphériques
        'titre_hardware' => $this->titre_hardware,
        'screen' => $this->screen,
        'souris' => $this->souris,
        'clavier' => $this->clavier,
        'casque' => $this->casque,
        'micro' => $this->micro,
        'cam' => $this->cam,
        'enceinte' => $this->enceinte,
        'sd' => $this->sd,
        'kl' => $this->kl,

        // Partenaire
        'titre_partenaire' => $this->titre_partenaire,

        // Post
        'list_partenaires' => $model->get_partenaires(),
      ]);
    }
}
