<?php
function mijn_thema()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mijn_thema');

add_action('wp_head', 'hook_header');
function hook_header()
{
    // echo 'hallo';
}

add_action('template_include', 'template_suggestions');
function template_suggestions($template)
{
    $segments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $foobar_template = locate_template(['detail_page.php']);
    if (isset($segments[3]) && isset($segments[4]) && $segments[3] === 'producten' && $foobar_template !== '') {
        status_header(200);
        return $foobar_template;
    }
    return $template;
}
