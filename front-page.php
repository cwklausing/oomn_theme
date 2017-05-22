<?php
/**
 * Template Name: Front Page
 *
 * @package cwkbase
 */

get_header();
?>

<div class="primary">

  <?php if ( have_posts() ) :

    while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( '/parts/content', 'front-page' ); ?>

  <?php endwhile;

  endif;
  ?>

</div>

<?php get_footer(); ?>