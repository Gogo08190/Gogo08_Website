<?php

/**
 * contact-application.php - Custom code template contact.
 */

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;

add_action('init', 'custom_page_contact');
function custom_page_contact() {
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
	if($template_file == "contact") {
		remove_post_type_support('page','author');
		remove_post_type_support('page','custom-fields');
		remove_post_type_support('page','comments');
		remove_post_type_support('page','excerpt' );
		remove_post_type_support('page','trackbacks');
		remove_post_type_support('page','editor');
		remove_post_type_support('page','revisions');
	}
}

Metabox::make('page_contact', 'page')
	->add(new Section('top', 'Haut de la page', [
		  Field::text('titre', ['label' => 'Titre']),
			Field::textarea('intro_contact', ['label' => 'Introduction']),
	]))

	->add(new Section('form', 'Formulaire', [
		Field::text('contact_shortcode', ['label' => 'Shortcode']),
	]))

	->setTemplate('contact')
	->setTitle('Contenu de la page')
	->set();
