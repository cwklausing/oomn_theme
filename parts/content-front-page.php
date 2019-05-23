<?php
/**
 * Front Page Content
 *
 * @package orgofmn;
 */

 $featured_image = get_field('featured_image')['sizes']['max'];
 $latest_text = get_field('latest_post_text');
 $older_posts = get_field('older_posts_text');
 $read_more_text = get_field('read_more_text', 'option')
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
			<div class="latest-post__wrap">
				<div class="latest-post">
					<h2 class="latest-post__header"><?php echo esc_html($latest_text); ?></h2>
					<?php
						$args = array(
							'post_type' => 'post',
							'numberposts' => 1,
							'orderby' => 'post_date',
							'order' => 'DESC',
						);
		
						$latest_post = wp_get_recent_posts($args);
						
						foreach( $latest_post as $latest ) :
						$organizer_image = get_field('featured_image', $latest['ID'])['sizes']['large'];
						$latest_excerpt = get_field('excerpt', $latest['ID']);
					?>
					<div class="latest-post__content">
						<div class="latest-post__columns">
							<a href="<?php echo esc_url( $latest['guid']); ?>" class="latest-post__link">
								<img src="<?php echo esc_url( $organizer_image ); ?>" class="latest-post__image" />
							</a>
							<div class="latest-post__text-wrap">
								<div class="latest-post__text">
									<h3 class="latest-post__title"><?php echo esc_html( $latest['post_title'] ); ?></h3>
									<p class="latest-post__excerpt">
										<?php echo $latest_excerpt; ?>
									</p>
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
			<div class="recent-posts grid-container">
				<h2 class="recent-posts__title"><?php echo esc_html( $older_posts ); ?></h2>
				<?php
					$args = array(
						'post_type' => 'post',
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
				endif; ?>
			</div>
		</div>
	</main>
</div>