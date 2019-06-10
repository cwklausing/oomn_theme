<?php
/**
 * Front Page Content
 *
 * @package orgofmn;
 */

 $featured_image = get_field('featured_image')['sizes']['max'];
?>

<div class="page-wrapper">
	<main class="home">
		<div class="home__featured-img">
			<img src="<?php echo esc_url( $featured_image ); ?>" />
		</div>
		<div class="home__about">
			<?php the_content(); ?>
		</div>
		<div class="home__content">
			<?php get_template_part( '/parts/front-page', 'latest-post' ); ?>
			<?php get_template_part( '/parts/front-page', 'recent-posts' ); ?>
		</div>
	</main>
</div>