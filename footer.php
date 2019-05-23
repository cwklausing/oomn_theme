<?php
/**
 * Template for the Footer
 */

$facebook_link = get_field('facebook_link', 'option');
$instagram_link = get_field('instagram_link', 'option');
$email = get_field('email', 'option');

$menu_array = array(
  'menu'            => 'Footer Menu',
  'container'       => false,
  'theme_location'  => 'secondary',
)

/** <?php wp_nav_menu( $menu_array ); ?> can be added back once there are more pages */

?>

<footer class="footer">
  <div class="social-media">
    <a href="<?php echo esc_url( $facebook_link ); ?>" class="social-media__link" target="_blank">
      <svg aria-labelledby="icon-facebook" class="social-media__icon">
        <use xlink:href="#icon-facebook"></use>
      </svg>
    </a>
    <a href="<?php echo esc_url( $instagram_link ); ?>" class="social-media__link" target="_blank">
      <svg aria-labelledby="icon-instagram" class="social-media__icon">
        <use xlink:href="#icon-instagram"></use>
      </svg>
    </a>
    <a href="mailto:<?php echo $email; ?>" class="social-media__link" target="_blank">
      <svg aria-labelledby="icon-email" class="social-media__icon">
        <use xlink:href="#icon-email"></use>
      </svg>
    </a>
  </div>

  <?php wp_footer(); ?>
</footer>

</body>
</html>
