<?php
namespace App\Hooks;

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

PostType::make('slug-playlist', 'Playlist', 'Playlist')
    ->setArguments([
      'label' => 'Gestion des playlist',
      'public' => false,
    	'show_ui' => true,
    	'supports' => ['title'],
    	'rewrite' => false,
    	'show_in_menu'	=> "plugin_options",
    	'query_var' => false,
    	'labels' => ""
    ])
  ->setTitlePlaceholder('Ajouter playlist')
  ->set();

  Metabox::make('playlist', 'slug-playlist')
  ->add(Field::text('url', ['label' => 'URL']))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
