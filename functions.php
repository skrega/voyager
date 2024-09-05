<?php
// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/css/style.min.css?' . time(), array(), null);

    // wp_deregister_script('jquery');
    // wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    // wp_enqueue_script( 'jquery' );

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_filter('upload_mimes', 'svg_upload_allow');
add_theme_support('menus');

function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {

        // разрешим
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }

    return $data;
}

// Global ACF Options Page
// include("includes/global/options.php");

// document title 
add_filter('document_title', 'wp_kama_document_title_filter');

/**
 * Function for `document_title` filter-hook.
 * 
 * @param string $title Document title.
 *
 * @return string
 */
function wp_kama_document_title_filter($title)
{
    // filter...
    return $title;
}


// include 'includes/functions/form.php';

