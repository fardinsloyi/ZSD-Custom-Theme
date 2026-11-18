<?php
/**
 * Site header.
 */
defined( 'ABSPATH' ) || exit;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="zsd-skip-link" href="#zsd-main"><?php esc_html_e( 'رفتن به محتوای اصلی', 'zsd-custom' ); ?></a>
<header class="zsd-header">
	<div class="zsd-container zsd-header__inner">
		<div class="zsd-brand">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="zsd-brand__name" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>
		<button class="zsd-menu-toggle" type="button" aria-expanded="false" aria-controls="zsd-primary-nav">
			<span class="screen-reader-text"><?php esc_html_e( 'باز کردن منو', 'zsd-custom' ); ?></span>
			<span aria-hidden="true">☰</span>
		</button>
		<nav class="zsd-primary-nav" id="zsd-primary-nav" aria-label="<?php esc_attr_e( 'منوی اصلی', 'zsd-custom' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'zsd-menu',
				'fallback_cb'    => false,
			) );
			?>
		</nav>
		<div class="zsd-header__actions">
			<?php if ( function_exists( 'wc_get_page_permalink' ) ) : ?>
				<a class="zsd-button zsd-button--outline" href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'حساب کاربری', 'zsd-custom' ); ?></a>
				<a class="zsd-button zsd-button--gold" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><?php esc_html_e( 'سبد خرید', 'zsd-custom' ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</header>
