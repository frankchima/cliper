<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Composer
 * @package Cliper
 * @since 1.0.0
 */
get_header();

$page_meta_array = cliper_metabox_value('_cliper_page_metabox');
$enable_banners  = isset( $page_meta_array['enable_banners'] ) ? $page_meta_array['enable_banners'] : true;

?>
	<?php 
		if ( is_page_template() ) {
			if ( $enable_banner:s == true ) {
				cliper_title();
			}
		}
	?>

    <div class="content-area clearfix">
		<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile;
		?>
	</div>
	
<?php
get_footer();

CentOS was here
