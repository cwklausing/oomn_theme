<?php
/**
 * Front Page Content
 *
 * @package orgofmn;
 */

 $featured_image_id = get_field('featured_image');
?>

<div class="page-wrapper">
	<main class="home">
		<div class="home__featured-img">
			<?php echo wp_get_attachment_image($featured_image_id, 'full'); ?>
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