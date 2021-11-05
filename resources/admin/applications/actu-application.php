<?php

/**
 * actu-application.php - Custom code template actu.
 */

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;

add_action('init', 'custom_page_actu');
function custom_page_actu() {
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
	if($template_file == "actu") {
		remove_post_type_support('page','author');
		remove_post_type_support('page','custom-fields');
		remove_post_type_support('page','comments');
		remove_post_type_support('page','excerpt' );
		remove_post_type_support('page','trackbacks');
		remove_post_type_support('page','editor');
		remove_post_type_support('page','revisions');
	}
}

Metabox::make('page_actu', 'page')
	->add(new Section('top', 'Haut de la page', [
	    Field::textarea('titre', ['label' => 'Titre']),
			Field::textarea('desc', ['label' => 'Description']),
	]))

	->add(new Section('actus', 'Actu', [
	    Field::text('shortcode', ['label' => 'Shortcode']),
	]))

	->add(new Section('partner', 'Partenaires', [
	    Field::textarea('titre_partenaire', ['label' => 'Titre']),
	]))
	->setTemplate('actu')
	->setTitle('Contenu de la page')
	->set();
