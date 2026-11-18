<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'zsd-panel zsd-single-post' ); ?>>
			<header class="zsd-page__header"><h1><?php the_title(); ?></h1></header>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="zsd-featured-image"><?php the_post_thumbnail( 'large' ); ?></div>
			<?php endif; ?>
			<div class="zsd-entry-content"><?php the_content(); ?></div>
			<?php wp_link_pages(); ?>
		</article>
		<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
