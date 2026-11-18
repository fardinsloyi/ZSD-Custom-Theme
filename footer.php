<?php
/**
 * Site footer.
 */
defined( 'ABSPATH' ) || exit;
?>
<footer class="zsd-footer">
	<div class="zsd-container zsd-footer__inner">
		<div>
			<strong class="zsd-footer__brand"><?php bloginfo( 'name' ); ?></strong>
			<p><?php esc_html_e( 'فروشگاه محصولات و خدمات دیجیتال بازی.', 'zsd-custom' ); ?></p>
		</div>
		<nav aria-label="<?php esc_attr_e( 'منوی پایین سایت', 'zsd-custom' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'container'      => false,
				'menu_class'     => 'zsd-footer-menu',
				'fallback_cb'    => false,
			) );
			?>
		</nav>
		<small>© <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></small>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
