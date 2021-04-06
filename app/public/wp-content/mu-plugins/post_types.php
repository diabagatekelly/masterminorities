<?php 

function post_types() {
    register_post_type('videos', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'comments', 'author', 'custom-fields'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-video-alt2',
        'labels' => array(
            'name' => 'Videos',
            'add_new_item' => 'Add New Video',
            'edit_item' => 'Edit Video',
            'all_items' => 'All Videos',
            'singular_name' => 'Video'
        )
    ));
}
add_action('init', 'post_types')




?>