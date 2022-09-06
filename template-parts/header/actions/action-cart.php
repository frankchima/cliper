<?php if( '1' == cliper_get_option( 'enable_cart_button', false ) && class_exists( 'Easy_Digital_Downloads' ) ) : ?>
	<?php get_template_part( 'edd/cart/header-cart' ); ?>
<?php endif; ?>

<?php if( '1' == cliper_get_option( 'enable_cart_button', false ) && class_exists( 'WooCommerce' ) ) : ?>
	<a href="#" class="cart-contents cart-button"><i class="ti-shopping-cart"></i></a>
<?php endif; ?>