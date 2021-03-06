<?php
/**
 * Part: Recent Posts
 */

$older_posts = get_field('older_posts_text');
$no_posts = get_field('no_posts_text');
$read_more_text = get_field('read_more_text', 'option')
?>

<div class="recent-posts grid-container">
  <h2 class="recent-posts__title"><?php echo esc_html( $older_posts ); ?></h2>
  <?php
    $args = array(
      'offset' => 1,
      'order' => 'DESC',
      'orderby' => 'post_date',
      'post__not_in' => get_option( 'sticky_posts' ),
      'post_status' => array('publish'),
      'post_type' => 'post',
    );

    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) :
      while($post_query->have_posts() ) : $post_query->the_post();

      $excerpt = get_field('excerpt');
      $recent_featured_image_id = get_field('featured_image')
    ?>
    <a href="<?php the_permalink(); ?>" class="recent-post grid-item">
      <div class="recent-post__content">
        <h3 class="recent-post__title"><?php the_title(); ?></h3>
        <?php echo wp_get_attachment_image($recent_featured_image_id, 'large', '', ['class' => 'recent-post__image']); ?>
        <div class="recent-post__excerpt">
          <?php echo $excerpt; ?>
        </div>
        <span class="recent-post__read-more">
          <?php echo $read_more_text; ?>
        </span>
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