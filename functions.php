<?php

// Variables

// Includes 
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));

// Hooks
add_action('wp_enqueue_scripts', 'hl_enqueue');
add_action('wp_head', 'hl_head', 5);
add_action('after_setup_theme', 'hl_setup_theme');
