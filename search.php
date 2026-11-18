<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content">
	<header class="zsd-page__header">
		<h1><?php printf( esc_html__( 'نتایج جستجو برای: %s', 'zsd-custom' ), esc_html( get_search_query() ) ); ?></h1>
		<?php get_search_form(); ?>
	</header>
	<?php if ( have_posts() ) : ?>
		<div class="zsd-post-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'zsd-panel zsd-post-card' ); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		</div>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<section class="zsd-panel"><p><?php esc_html_e( 'نتیجه‌ای پیدا نشد. عبارت دیگری را جستجو کنید.', 'zsd-custom' ); ?></p></section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
