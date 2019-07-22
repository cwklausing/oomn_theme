<?php
/**
 * Part: Recent Posts
 */

$older_posts = get_field('older_posts_text');
$no_posts = get_field('no_posts_text');
?>

<div class="recent-posts grid-container">
  <h2 class="recent-posts__title"><?php echo esc_html( $older_posts ); ?></h2>
  <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => array('publish'),
      'offset' => 1
    );

    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) :
      while($post_query->have_posts() ) : $post_query->the_post();

      $excerpt = get_field('excerpt');
      $recent_featured_image = get_field('featured_image')['sizes']['large']
    ?>
    <a href="<?php the_permalink(); ?>" class="recent-post grid-item">
      <div class="recent-post__content">
        <h3 class="recent-post__title"><?php the_title(); ?></h3>
        <img src="<?php echo esc_url( $recent_featured_image ); ?>" class="recent-post__image" />
        <div class="recent-post__excerpt">
          <?php echo $excerpt; ?>
        </div>
      </div>
    </a>
  
  <?php endwhile; 
    else :
    ?>
    <div class="recent-post__no-posts">
      <p><?php echo esc_html( $no_posts ); ?></p>
    </div>
    <?php endif; ?>
</div>