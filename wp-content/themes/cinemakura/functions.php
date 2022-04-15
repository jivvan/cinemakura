<?php
/**
*Loads stylesheets and scripts
*/
function load_stylesheets(){
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().' /css/bootstrap.css');
wp_enqueue_style('customStylesheet', get_stylesheet_directory_uri().' /css/style.css');

wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().' /js/bootstrap.js');

}
add_action('wp_enqueue_scripts','load_stylesheets');

/**
*There is 32 px top margin in html in wordpress. This removes it.
*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
