<?php
/* 
Template Name: Page No title
*/


get_header();
?>
<?php 
    if (have_posts()):
        while (have_posts()): the_post(); ?>
        <h1><?php the_title();?></h1>
        <p><?php the_content();?></p>
        <hr></hr>
        <?php endwhile;
    endif;
?>
<?php 
get_footer();?>