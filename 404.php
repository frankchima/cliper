<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cliper
 * @since 1.0.0
 * 
 */
?>

<?php

	if ( is_active_sidebar( 'main-sidebar' ) ) {
		$cliper_layout = 'col-lg-10 offset-lg-1';
	}else{
		$cliper_layout = 'col-lg-10 offset-lg-1';
	}

	if( '1' == cliper_get_option( 'enable_404_blank_header', '1') ) {
		get_header('blank');
	}else {
		get_header();
		if ( function_exists('cliper_title') ) {
			cliper_title();
		}
	}

?>

<div class="content-area section-padding">
    <div class="container">
        <div class="row">
			<div class="<?php echo esc_attr( $cliper_layout ); ?>">
				<div class="error-404 not-found center">

					<?php 
						$error_img  = cliper_get_option( 'error_page_img' );
						if( !empty( $error_img['url'] ) ) : ?>

						<div class="error__page__img">
							<img src="<?php echo esc_url( $error_img['url'] ); ?>" alt="<?php echo esc_attr__('404 Not Found', 'cliper'); ?>">
						</div>
					<?php endif; ?>
					<div class="content-header">
						<?php  if( !empty( cliper_get_option('error_text') ) ) : ?>
							<h3><?php echo esc_html( cliper_get_option('error_text') ); ?></h3>
						<?php else : ?>
							<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cliper' ); ?></h3>
						<?php endif; ?>
					</div>

					<div class="error-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cliper' ); ?></p>
						<div class="page-search">
							<?php
								cliper_search_form( true, cliper_get_option( 'enable_404_search_button',true ) );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	if( '1' == cliper_get_option( 'enable_404_blank_footer', '1') ) {
		get_footer('blank');
	}else {
		get_footer();
	}