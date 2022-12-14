<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cliper
 */

?>

<article class="no-results not-found center">
	<div class="content-header">
		<h3><?php esc_html_e( 'Nothing Found', 'cliper' ); ?></h3>
	</div>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<?php 
			printf(
				'<p>' . wp_kses(
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cliper' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
		?>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cliper' ); ?></p>
			<div class="page-search">
				<?php cliper_search_form(); ?>
			</div>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cliper' ); ?></p>
			<div class="page-search">
				<?php cliper_search_form(); ?>
			</div>

		<?php endif; ?>
	</div>
</article>
