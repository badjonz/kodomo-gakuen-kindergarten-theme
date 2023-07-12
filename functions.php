<?php

    function kindergarten_files(){
        wp_enqueue_style('kindergarten_styles',get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts','kindergarten_files');
?>