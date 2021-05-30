<?php
namespace App\Hooks;

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

PostType::make('slug-partenaires', 'Partenaires', 'Partenaires')
    ->setArguments([
      'label' => 'Gestion des partenaires',
      'public' => false,
    	'show_ui' => true,
    	'supports' => ['title'],
    	'rewrite' => false,
    	'show_in_menu'	=> "plugin_options",
    	'query_var' => false,
    	'labels' => ""
    ])
  ->setTitlePlaceholder('Ajouter partenaire')
  ->set();

  Metabox::make('partenaires', 'slug-partenaires')
  ->add(Field::textarea('desc', ['label' => 'Description']))
  ->add(Field::text('url', ['label' => 'URL']))
  ->add(Field::media('logo', ['label' => 'Logo']))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
