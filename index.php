<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content">
	<?php if ( have_posts() ) : ?>
		<div class="zsd-post-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'zsd-panel zsd-post-card' ); ?>>
					<h2 class="zsd-post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="zsd-entry-summary"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		</div>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<section class="zsd-panel"><h1><?php esc_html_e( 'محتوایی پیدا نشد', 'zsd-custom' ); ?></h1></section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
