<?php

/**
 * Template for single posts
 */

$featured_image_id = get_field('full-width_image');
$show_cta = get_field('show_call_to_action_button');

get_header();
?>

<div class="post-wrapper">
    <?php if ( have_posts() ) :

      while( have_posts() ) : the_post(); ?>

      <div class="post__single" id="post-single">
        <h2 class="post__title"><?php the_title(); ?></h2>
        <?php echo wp_get_attachment_image($featured_image_id, 'full', '', array('class' => 'post__banner-image')); ?>
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
<?php if ( $show_cta ) : ?>
  <div class="post__cta" id="post-cta">
    <?php get_template_part( '/parts/cta-button' ); ?>
    <div class="close-button" id="close-button">
      <div class="first"></div>
      <div class="second"></div>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
