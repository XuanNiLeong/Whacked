<?php

// Add dynamic title tag support
function whackedcode_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'whackedcode_theme_support');

// register css styles
function whackedcode_register_styles(){

    wp_enqueue_style('whackedcode-style', get_template_directory_uri() ."/style.css", array('whackedcode-bootstrap'), '1.0','all');
    wp_enqueue_style('whackedcode-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '1.0','all');
    wp_enqueue_style('whackedcode-cloudflare', "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css", array(), '1.0','all');
    wp_enqueue_style('whackedcode-googleapis', "https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap", array(), '1.0','all');
    wp_enqueue_style('whackedcode-github', "https://md-aqil.github.io/images/swiper.min.css", array(), '1.0','all');

}

add_action('wp_enqueue_scripts', 'whackedcode_register_styles');


// register js
function whackedcode_register_scripts(){

    wp_enqueue_script( 'whackedcode-jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'whackedcode-cloudflare', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'whackedcode-boostrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'whackedcode-github', "https://md-aqil.github.io/images/swiper.min.js", array(), '1.0', 'true');
    wp_enqueue_script( 'whackedcode-js', get_template_directory_uri() ."/assets/js/main.js", array(), '1.0', 'true');


}

add_action('wp_enqueue_scripts', 'whackedcode_register_scripts');

?>
