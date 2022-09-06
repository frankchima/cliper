<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cliper
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>
<div class="col-lg-4 blog__widgets__wrap">
	<div class="widget-area">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</div>
</div>