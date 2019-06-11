<?php
/**
 * Part: CTA Button
 */
$button_text = get_field('call_to_action_button_text');
$button_link = get_field('call_to_action_button_link');
?>

<a href="<?php echo esc_url( $button_link ); ?>" class="cta-button" id="cta-button">
  <?php echo esc_html( $button_text ); ?>
</a>
