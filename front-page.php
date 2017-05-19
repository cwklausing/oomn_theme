<?php
/**
 * Template Name: Front Page
 */

get_header();
?>

<div class="flexing margin-edge">
  <?php if ( have_posts() ) :

    while( have_posts() ) : the_post();

    $title = get_the_title();

  ?>

  <div class="width-half">  
    <h2><?php echo $title; ?></h2>
  </div>

  <?php

    endwhile;

  endif;

  ?>

</div>

<?php get_footer(); ?>
