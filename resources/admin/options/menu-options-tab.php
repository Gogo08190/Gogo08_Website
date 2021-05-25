<?php

/*Ajout du menu des options*/
function menu_options_tab(){
	add_menu_page('gestion_options', 'Options', 'manage_options', 'plugin_options');
	add_submenu_page('plugin_options', 'Footer', 'Footer', 'manage_options', 'admin.php?page=page-theme-footer');
}

add_action('admin_menu', 'menu_options_tab');

function hide_menu_footer() {
	remove_menu_page('page-theme-footer');
}
add_action('admin_menu', 'hide_menu_footer', 999);
