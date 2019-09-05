<?php
/**
 * Part: latest post
 */

$latest_text = get_field('latest_post_text');
$read_more_text = get_field('read_more_text', 'option')
?>

<div class="latest-post__wrap">
  <div class="latest-post">
    <h2 class="latest-post__header"><?php echo esc_html($latest_text); ?></h2>
    <?php
      $args = array(
        'category__not_in' => array('hidden'),
        'numberposts' => 1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post__not_in' => get_option('sticky_posts'),
        'post_status' => array('publish'),
        'post_type' => 'post',
      );

      $latest_post = wp_get_recent_posts($args);
      
      foreach( $latest_post as $latest ) :
      $organizer_image_id = get_field('featured_image', $latest['ID']);
      $latest_excerpt = get_field('excerpt', $latest['ID']);
    ?>
    <div class="latest-post__content">
      <div class="latest-post__columns">
        <a href="<?php echo esc_url( $latest['guid']); ?>" class="latest-post__link">
          <?php echo wp_get_attachment_image($organizer_image_id, 'large'); ?>
        </a>
        <div class="latest-post__text-wrap">
          <div class="latest-post__text">
            <h3 class="latest-post__title"><?php echo esc_html( $latest['post_title'] ); ?></h3>
            <div class="latest-post__excerpt">
              <?php echo $latest_excerpt; ?>
            </div>
            <a href="<?php echo esc_url( $latest['guid']); ?>" class="latest-post__read-more">
              <span><?php echo $read_more_text ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>