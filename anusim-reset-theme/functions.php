

<?php

function anusimh_files() {
    wp_enqueue_script('anusimh-script-file', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0',true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome-link', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('anusimh-main-styles', get_theme_file_uri('/build/style.css'));
    wp_enqueue_style('interior-page-styles', get_theme_file_uri('/build/interior.css'));
}

add_action('wp_enqueue_scripts', 'anusimh_files');

function anusimh_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','anusimh_features');

?>