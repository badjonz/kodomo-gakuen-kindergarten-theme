<?php

    function kindergarten_files(){
        wp_enqueue_script('kindergarten_main-js', get_theme_file_uri('/js/main.js'),array('jquery'),'1.0',true);
        wp_enqueue_script('kindergarten_jquery', get_theme_file_uri('/js/mobile-menu.js'),array('jquery'),'1.0',true);
        wp_enqueue_style('kindergarten_styles', get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('kindergarten__utility_styles', get_theme_file_uri('/css/utilities.css'));
        wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
        wp_enqueue_style('flag', '//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.css');
    }

    add_action('wp_enqueue_scripts','kindergarten_files');
?>