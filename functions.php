<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles', 11);
function enqueue_parent_styles() {
   wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css');
}