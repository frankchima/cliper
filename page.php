<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cliper
 * @since 1.0.0
 * 
 */

get_header();

$page_meta_array = cliper_metabox_value('_cliper_page_metabox');
$enable_banner   = isset( $page_meta_array['enable_banner'] ) ? $page_meta_array['enable_banner'] : true;

?>
	<?php 
		if ( $enable_banner == true ) {
			if (function_exists('cliper_title')) {
			    cliper_title();
			}
		}
	?>
    <div class="content-area section-padding">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content/content', 'page' );

						if ( cliper_get_option( 'disable_page_navigation',false ) == false ) :
						cliper_post_navigation();
						endif;

						cliper_pagination();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();