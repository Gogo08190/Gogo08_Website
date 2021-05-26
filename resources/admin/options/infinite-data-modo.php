<?php
namespace App\Hooks;

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

PostType::make('slug-modo', 'Modo', 'Modo')
    ->setArguments([
      'label' => 'Gestion des modos',
      'public' => false,
    	'show_ui' => true,
    	'supports' => ['title'],
    	'rewrite' => false,
    	'show_in_menu'	=> "plugin_options",
    	'query_var' => false,
    	'labels' => ""
    ])
  ->setTitlePlaceholder('Ajouter modo')
  ->set();

  Metabox::make('modo', 'slug-modo')
  ->add(Field::text('twitter', ['label' => 'Twitter']))
  ->add(Field::text('youtube', ['label' => 'Youtube']))
  ->add(Field::text('twitch', ['label' => 'Twitch']))
  ->add(Field::text('github', ['label' => 'GitHub']))
  ->add(Field::textarea('desc', ['label' => 'Description']))
  ->add(Field::media('logo', ['label' => 'Image de profil']))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
