<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content">
	<header class="zsd-page__header">
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<div class="zsd-entry-summary">', '</div>' ); ?>
	</header>
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
		<section class="zsd-panel"><p><?php esc_html_e( 'محتوایی برای نمایش وجود ندارد.', 'zsd-custom' ); ?></p></section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
