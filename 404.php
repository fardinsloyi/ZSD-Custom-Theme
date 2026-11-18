<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content">
	<section class="zsd-panel zsd-not-found">
		<p class="zsd-eyebrow">404</p>
		<h1><?php esc_html_e( 'این صفحه پیدا نشد', 'zsd-custom' ); ?></h1>
		<p><?php esc_html_e( 'ممکن است نشانی تغییر کرده باشد یا صفحه حذف شده باشد.', 'zsd-custom' ); ?></p>
		<?php get_search_form(); ?>
		<a class="zsd-button zsd-button--gold" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'بازگشت به خانه', 'zsd-custom' ); ?></a>
	</section>
</main>
<?php get_footer(); ?>
