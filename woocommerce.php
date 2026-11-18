<?php
/**
 * WooCommerce page wrapper.
 *
 * Keep WooCommerce's own template loader and hooks in charge of product,
 * cart, account, and order behavior. Pinova's standalone checkout URL does
 * not use this wrapper.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="zsd-main" class="zsd-container zsd-content zsd-woocommerce">
	<?php woocommerce_content(); ?>
</main>
<?php get_footer(); ?>
