<?php

/*
 * Load assets
 */
function assets()
{
  // Load theme css
  wp_enqueue_style('impactsix_css', get_template_directory_uri().'/dist/css/screen.css', array(), null, false);
}

add_action('wp_enqueue_scripts', 'assets');

/**
 * This function will register the nav menu.
 *
 * @method register_my_menus
 */
function register_my_menus()
{
    register_nav_menus(
    array(
      'header-menu' => __('Header')
    )
  );
}
add_action('init', 'register_my_menus');

add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}



//add_action( 'admin_menu', 'impact_six_change_post_menu_label' );
//add_action( 'init', 'impact_six_change_post_object_label' );
function impact_six_change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Works';
	$submenu['edit.php'][5][0] = 'Works';
	$submenu['edit.php'][10][0] = 'Add Works';
	$submenu['edit.php'][16][0] = 'Works Tags';
	echo '';
}
function impact_six_change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Works';
	$labels->singular_name = 'Works';
	$labels->add_new = 'Add Work';
	$labels->add_new_item = 'Add Work';
	$labels->edit_item = 'Edit Work';
	$labels->new_item = 'Works';
	$labels->view_item = 'View Works';
	$labels->search_items = 'Search Works';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
}

/*
 * Custom Post type
 */

function post_type_work()
{
    $labels = array(
        'name' => 'Works',
        'singular_name' => 'Work',
        'menu_name' => 'Work',
        'name_admin_bar' => 'work',
        'add_new' => 'Add New',
        'add_new_item' => 'Add work',
        'new_item' => 'New work',
        'edit_item' => 'Edit work',
        'view_item' => 'View work',
        'all_items' => 'All works',
        'search_items' => 'Search works',
        'parent_item_colon' => 'Parent works:',
        'not_found' => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'rewrite' => array('slug' => 'work'),
        'has_archive' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title'),
    );
    register_post_type('works', $args);
}
add_action('init', 'post_type_work');


function post_type_client()
{
    $labels = array(
        'name' => 'Team',
        'singular_name' => 'Member',
        'menu_name' => 'Team',
        'name_admin_bar' => 'Team',
        'add_new' => 'Add New',
        'add_new_item' => 'Add member to team',
        'new_item' => 'New member',
        'edit_item' => 'Edit member',
        'view_item' => 'View member',
        'all_items' => 'All members',
        'search_items' => 'Search members',
        'parent_item_colon' => 'Parent members:',
        'not_found' => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'rewrite' => array('slug' => 'members'),
        'has_archive' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        //'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        'taxonomies'          => array( '' ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    );
    register_post_type('teams', $args);
}
add_action('init', 'post_type_client');

/*
 * Allow svg files
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
/*
 * ACF Pro Functions
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Global Settings',
        'menu_title' => 'Global',
        'menu_slug' => 'global-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}

add_theme_support( 'post-thumbnails' );
