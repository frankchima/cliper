<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cliper
 * @since 1.0.0
 * 
 */

$page_meta_array = cliper_metabox_value( '_cliper_page_metabox' );

if ( is_page() && isset($page_meta_array['hide_footer']) ) {
	if ( $page_meta_array['hide_footer'] == true ) {
		$hide_footer = $page_meta_array['hide_footer'];
	}else{
		$hide_footer = cliper_get_option( 'hide_footer', false );
	}
}else{
	$hide_footer = cliper_get_option( 'hide_footer', false );
}

$blog_global_footer = cliper_get_option( 'add_global_footer_template', false );
$page_footer_switch = isset( $page_meta_array['add_footer_template'] ) ? $page_meta_array['add_footer_template'] : false;

if( '1' == $blog_global_footer && (is_single() || is_archive() || is_home() || is_search()) ){
	$footer_builder_content = cliper_get_option( 'elementor_footer_style_global' );
}elseif ( is_page() && '1' == $page_footer_switch ) {
	$footer_builder_content = $page_meta_array['elementor_footer_style'];
}else{
	$footer_builder_content = cliper_get_option( 'elementor_footer_style' );
}

$builder_footer = '';
if( !empty( $footer_builder_content ) ) {

    $builder_footer = new WP_Query(array(
        'post_type'      => 'elementor_library',
        'posts_per_page' => -1,
        'p'              => $footer_builder_content,
    ));
}

?>
<?php if( $hide_footer == false ) : ?>
	
	<?php if ( $builder_footer && '1' == $blog_global_footer && (is_single() || is_archive() || is_home() || is_search()) ): ?>

		<footer class="builder-footer">
	        <?php
	            if ( $builder_footer->have_posts() ){
	                while ($builder_footer->have_posts()) : 
	                    $builder_footer->the_post();
	                    the_content();
	                endwhile;
	                wp_reset_postdata();
	            }
	        ?>
		</footer>

	<?php elseif( $builder_footer && is_page() && '1' == $page_footer_switch ) : ?>

		<footer class="builder-footer">
	        <?php
	            if ( $builder_footer->have_posts() ){
	                while ($builder_footer->have_posts()) : 
	                    $builder_footer->the_post();
	                    the_content();
	                endwhile;
	                wp_reset_postdata();
	            }
	        ?>
		</footer>

    <?php elseif( $builder_footer &&  '1' == cliper_get_option( 'add_footer_template' ) ) : ?>
    	
		<footer class="builder-footer">
	        <?php
	            if ( $builder_footer->have_posts() ){
	                while ($builder_footer->have_posts()) : 
	                    $builder_footer->the_post();
	                    the_content();
	                endwhile;
	                wp_reset_postdata();
	            }
	        ?>
		</footer>

	<?php else : ?>

		<footer class="footer-area">
			<div class="footer-area-bg"></div>
			<?php if ( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) || is_active_sidebar( 'footer-sidebar-3' ) || is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
				<div class="footer-top padding-100-50">
					<div class="container">
						<?php get_template_part( 'template-parts/footer/footer-top/columns' ); ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if( function_exists('cliper_copyright') ): ?>
				<div class="footer-bottom">
					<div class="footer-bottom-bg"></div>
					<div class="container">
						<div class="row flex-center-align">
							<?php
								get_template_part( 'template-parts/footer/footer-bottom/bottom', cliper_get_option( 'footer_bottom_style', 'one' ) );
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>

		</footer>

	<?php endif; ?>

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>