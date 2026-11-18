<?php
/**
 * Initial homepage shell. This is a safe foundation, not a recreation
 * of the live Elementor homepage. Existing homepage content must be audited
 * and migrated before this template is activated on production.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main">
	<section class="zsd-hero">
		<div class="zsd-container zsd-hero__inner">
			<p class="zsd-eyebrow"><?php esc_html_e( 'ZSD GAMING STORE', 'zsd-custom' ); ?></p>
			<h1><?php esc_html_e( 'تجربه‌ای سریع و مطمئن برای خرید محصولات بازی', 'zsd-custom' ); ?></h1>
			<p class="zsd-hero__description"><?php esc_html_e( 'محصولات و خدمات دیجیتال بازی را با پشتیبانی ZSD تهیه کنید.', 'zsd-custom' ); ?></p>
			<?php if ( function_exists( 'wc_get_page_permalink' ) ) : ?>
				<a class="zsd-button zsd-button--gold" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"><?php esc_html_e( 'مشاهده فروشگاه', 'zsd-custom' ); ?></a>
			<?php endif; ?>
		</div>
	</section>
	<section class="zsd-container zsd-section">
		<div class="zsd-section__heading">
			<h2><?php esc_html_e( 'محصولات فروشگاه', 'zsd-custom' ); ?></h2>
		</div>
		<?php
		if ( function_exists( 'do_shortcode' ) && class_exists( 'WooCommerce' ) ) {
			echo do_shortcode( '[products limit="8" columns="4" orderby="date" order="DESC"]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			echo '<p>' . esc_html__( 'فروشگاه ووکامرس پس از فعال‌سازی نمایش داده می‌شود.', 'zsd-custom' ) . '</p>';
		}
		?>
	</section>
</main>
<?php get_footer(); ?>
