<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'zsd-panel zsd-page' ); ?>>
			<header class="zsd-page__header"><h1><?php the_title(); ?></h1></header>
			<div class="zsd-entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
