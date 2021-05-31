<?php

/**
 * config-application.php - Custom code template config.
 */

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;

add_action('init', 'custom_page_config');
function custom_page_config() {
	// Get the Post ID.
	if(isset($_GET['post']))
		$post_id = $_GET['post'];
	else if(isset($_POST['post_ID']))
		$post_id = $_POST['post_ID'];

	if(!isset($post_id) || empty($post_id))
		return;

	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);

	// Do something for the template
	if($template_file == "config") {
		remove_post_type_support('page','author');
		remove_post_type_support('page','custom-fields');
		remove_post_type_support('page','comments');
		remove_post_type_support('page','excerpt' );
		remove_post_type_support('page','trackbacks');
		remove_post_type_support('page','editor');
		remove_post_type_support('page','revisions');
	}
}

Metabox::make('page_config', 'page')
	->add(new Section('top', 'Haut de la page', [
		  Field::text('titre', ['label' => 'Titre']),
			Field::textarea('intro', ['label' => 'Introduction']),
	]))

	->add(new Section('fixe', 'PC Fixe', [
		  Field::text('titre_pc', ['label' => 'Titre']),
			Field::text('cg', ['label' => 'Carte Graphique']),
			Field::text('cm', ['label' => 'Carte Mère']),
			Field::text('ram', ['label' => 'RAM']),
			Field::text('proco', ['label' => 'Processeur']),
			Field::text('boitier', ['label' => 'Boitier']),
			Field::text('alim', ['label' => 'Alimentation']),
			Field::text('wc', ['label' => 'WaterCooling']),
			Field::text('dd', ['label' => 'Disque Dur']),
			Field::text('ssd1', ['label' => 'SSD']),
			Field::text('ssd2', ['label' => 'SSD 2']),
	]))

	->add(new Section('hardware', 'Périphériques', [
		  Field::text('titre_hardware', ['label' => 'Titre']),
			Field::text('screen', ['label' => 'Écrans']),
			Field::text('souris', ['label' => 'Souris']),
			Field::text('clavier', ['label' => 'Clavier']),
			Field::text('casque', ['label' => 'Casque']),
			Field::text('micro', ['label' => 'Micro']),
			Field::text('cam', ['label' => 'Caméra']),
			Field::text('enceinte', ['label' => 'Enceinte']),
			Field::text('sd', ['label' => 'Stream Deck']),
			Field::text('kl', ['label' => 'Key Light']),
	]))

	->add(new Section('partner', 'Partenaires', [
	    Field::textarea('titre_partenaire', ['label' => 'Titre']),
	]))

	->setTemplate('config')
	->setTitle('Contenu de la page')
	->set();
