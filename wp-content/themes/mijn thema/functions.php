<?php
function mijn_thema()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueu_script', 'mijn_thema');


// hier add ik iets bij wp_head in dit geval is dat hallo
add_action('wp_head', 'hook_header');
function hook_header()
{
    echo 'hallo';
}
