<?php
/**
 * Template Name: Front Page
 *
 * @package cwkbase
 */

get_header();
?>

<?php if ( have_posts() ) :

  while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( '/parts/content', 'front-page' ); ?>

<?php endwhile;

endif;
?>

<?php get_footer(); ?>