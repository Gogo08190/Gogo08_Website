<?php
namespace App\Hooks;

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

PostType::make('slug-modpack', 'Modpacks', 'Modpacks')
    ->setArguments([
      'label' => 'Gestion des modpacks',
      'public' => false,
    	'show_ui' => true,
    	'supports' => ['title'],
    	'rewrite' => false,
    	'show_in_menu'	=> "plugin_options",
    	'query_var' => false,
    	'labels' => ""
    ])
  ->setTitlePlaceholder('Ajouter modpack')
  ->set();

  Metabox::make('data_modpack', 'slug-modpack')
  ->add(Field::textarea('titre', ['label' => 'Version']))
  ->add(Field::choice('categorie', ['label' => 'Catégorie', 'choices' => ['Technologie', 'Exploration', 'Magie', 'Aventure & RPG', 'Mini-Jeux', 'Skyblock', 'Science Fiction', 'Quêtes'], 'multiple' => true]))
  ->add(Field::textarea('desc', ['label' => 'Description']))
  ->add(Field::text('url', ['label' => 'URL']))
  ->add(Field::media('logo', ['label' => 'Logo']))
  ->addTranslation('done', 'Enregistrement effectué !')
	->addTranslation('error', 'Veuillez vérifier que les champs ont été correctement complétés')
	->addTranslation('submit', 'Enregistrer')
	->setTitle('Informations')
	->set();
