<?php

/*
 * Load assets
 */
function assets()
{
  // Load theme css
  wp_enqueue_style('impactsix_css', get_template_directory_uri().'/dist/css/screen.css', array(), null, false);

  // Load theme js
  wp_enqueue_script('impactsix_js', get_template_directory_uri().'/dist/js/script.js', array(), null, true);
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



add_action( 'admin_menu', 'impact_six_change_post_menu_label' );


add_action( 'init', 'impact_six_change_post_object_label' );
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

function announcementPostType()
{
    $labels = array(
        'name' => 'Announcement',
        'singular_name' => 'Announcement',
        'menu_name' => 'Announcement',
        'name_admin_bar' => 'Announcement',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Announcement',
        'new_item' => 'New Announcement',
        'edit_item' => 'Edit Announcement',
        'view_item' => 'View Announcement',
        'all_items' => 'All Announcements',
        'search_items' => 'Search Announcements',
        'parent_item_colon' => 'Parent Announcement:',
        'not_found' => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'rewrite' => array('slug' => 'announcement'),
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-status',
        //'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        //'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
    register_post_type('announcement', $args);
}
add_action('init', 'announcementPostType');

function photosPostType()
{
    $labels = array(
        'name' => 'Photos',
        'singular_name' => 'Photography',
        'menu_name' => 'Photography',
        'name_admin_bar' => 'Photos',
        'add_new' => 'Add New',
        'add_new_item' => 'Add photos to gallery',
        'new_item' => 'New photo',
        'edit_item' => 'Edit photo',
        'view_item' => 'View photo',
        'all_items' => 'All photos',
        'search_items' => 'Search photos',
        'parent_item_colon' => 'Parent photos:',
        'not_found' => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'rewrite' => array('slug' => 'gallery'),
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        //'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    );
    register_post_type('photos', $args);
}
add_action('init', 'photosPostType');


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
