<?php

/**
 * Template for single posts
 */

$featured_image = get_field('full-width_image')['sizes']['max'];

get_header();
?>

<div class="post-wrapper">
    <?php if ( have_posts() ) :

      while( have_posts() ) : the_post(); ?>

      <div class="post__single">
        <h2 class="post__title"><?php the_title(); ?></h2>
        <img src="<?php echo $featured_image; ?>" class="post__banner-image" />
        <main class="post__content"><?php the_content(); ?></main>
      </div>

    <?php

      endwhile;

      else : ?>

      <div class="post__single">
        <h2 class="post__title"><?php _e( 'Sorry, no posts found' ); ?></h2>
      </div>

      <?php

    endif; ?>

</div>

<?php get_footer(); ?>
