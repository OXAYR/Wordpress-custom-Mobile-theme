<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ) ?> <?php wp_title('')?></title>
    <meta name="description" content="<?php bloginfo( 'description' )?>"
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php 
if (is_front_page()) {
    $practice_class = array('practice-class', 'my-class');
} else {
    $practice_class = array('no-practice-class');
}
?>

<body <?php body_class($practice_class);?>>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav ml-auto pr-auto',
            'walker'=>  new Walker_Nav_Primary()
        ));
        ?>
    </div>
</nav>


    <div class="container mt-5">
        <img src="<?php header_image(); ?>" alt="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="img-fluid" alt=""/>
    </div>
    <div>
        <?php
        get_search_form( ); ?>

    </div>