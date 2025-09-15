<?php
// Enqueue styles & scripts.
function lessonLancer_enqueue_scripts() { 
    // Theme Style CSS
    wp_enqueue_style('style-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0');


    // Responsive CSS
    wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0');


    // Slick Carousel CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');


    // Style CSS
    wp_enqueue_style('LessonLancer-theme-style', get_stylesheet_uri().'../style.css', array(), '1.0');


     // Boxicons
    wp_enqueue_style('boxicons-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');


    //JQuery
    wp_enqueue_script('jquery');
    


    // Slick Carousel JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);  


    // Main JS
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true);


}
add_action( 'wp_enqueue_scripts', 'lessonLancer_enqueue_scripts' ); 