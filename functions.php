<?php

function ardipi_files(){
  wp_enqueue_style('ardipi_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','ardipi_files');

add_action('entry_content','custom_fields');
