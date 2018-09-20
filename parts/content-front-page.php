<?php
/**
 * Front Page Content
 *
 * @package cwkbase;
 */
?>

<div class="wrapper">
	<main class="home">
		<div class="home__content">
			<?php the_content(); ?>
		</div>
		<div class="recent-posts grid-container">
			<h2 class="recent-posts__title">Latest Posts</h2>
			<?php
				$args = array(
					'post_type' => 'post'
				);

				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) :
					while($post_query->have_posts() ) : $post_query->the_post()
				?>
				<a href="<?php the_permalink(); ?>" class="recent-post grid-item">
					<div class="recent-post__content">
						<h3 class="recent-post__title"><?php the_title(); ?></h3>
						<img src="<?php the_post_thumbnail_url(); ?>" class="recent-post__image" />
						<div class="recent-post__excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</a>
			
			<?php endwhile; 
			endif; ?>
		</div>
	</main>
</div>