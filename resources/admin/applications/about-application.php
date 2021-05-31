<?php

/**
 * contact-application.php - Custom code template contact.
 */

use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Section;

add_action('init', 'custom_page_about');
function custom_page_about() {
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
	if($template_file == "about") {
		remove_post_type_support('page','author');
		remove_post_type_support('page','custom-fields');
		remove_post_type_support('page','comments');
		remove_post_type_support('page','excerpt' );
		remove_post_type_support('page','trackbacks');
		remove_post_type_support('page','editor');
		remove_post_type_support('page','revisions');
	}
}

Metabox::make('page_about', 'page')
	->add(new Section('top', 'Haut de la page', [
		  Field::text('titre', ['label' => 'Titre']),
			Field::textarea('intro_about', ['label' => 'Introduction']),
			Field::media('logo', ['label' => 'Logo']),
	]))

	->add(new Section('faq', 'FAQ', [
		  Field::text('titre_faq', ['label' => 'Titre']),
			Field::text('faq_shortcode', ['label' => 'FAQ Shortcode']),
	]))

	->add(new Section('partner', 'Partenaires', [
	    Field::textarea('titre_partenaire', ['label' => 'Titre']),
	]))

	->setTemplate('about')
	->setTitle('Contenu de la page')
	->set();
