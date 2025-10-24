<?php
function mi_tema_enqueue_styles()
{
    wp_enqueue_style('estilos-principales', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');
