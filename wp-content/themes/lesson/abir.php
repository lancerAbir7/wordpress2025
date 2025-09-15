// Lancer Abir
// HTML theme image, style, script function
// path --> index.php
<?php echo get_template_directory_uri(); ?>/assets/images/logo.png


// Enqueue styles & scripts.
// path --> functions.php
<?php
// Enqueue styles & scripts.
function lessonLancer_enqueue_scripts() { 
 
}
add_action( 'wp_enqueue_scripts', 'lessonLancer_enqueue_scripts' ); 
?>


// Theme Language Support
// path --> index.php
<?php language_attributes(); ?>


// UTF-8
// path --> index.php
<meta charset="<?php bloginfo( 'charset' ); ?>">

// Theme Title name 
// path --> index.php
<title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>


// Head Function add
// </head> before
// path --> index.php
<?php wp_head(); ?>


// Footer Function add
// </body> before
// admin bar showing
// path --> index.php
<?php wp_footer(); ?>



// Body Function add
// path --> index.php
<body <?php body_class(); ?>>