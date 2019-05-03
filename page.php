<?php
/**
 * Page template
 *
 * @package orgofmn
 */

get_header();
?>

<div class="primary">

	<?php if ( have_posts() ) :

		while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( '/parts/content', null ); ?>

 	<?php endwhile;

	endif;
	?>

</div>

<?php get_footer(); ?>
