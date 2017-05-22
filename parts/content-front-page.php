<?php
/**
 * Front Page Content
 *
 * @package cwkbase;
 */
?>

<main class="home">
	<header class="home__header">
		<h1 class="home__title">
			<?php the_title(); ?>
		</h1>
	</header>
	<div class="home__content">
		<?php the_content(); ?>
	</div>
</main>