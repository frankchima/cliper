<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cliper
 * @since 1.0.0
 */

get_header();


$related_posts_show =  cliper_get_option( 'related_posts_show', false );
$blog_post_nav =  cliper_get_option( 'blog_post_nav', true );

?>
<?php 
    if (function_exists('cliper_title')) {
        cliper_title();
    }
?>
<div class="content-area section-padding">
    <div class="container">
        <div class="row">

                <?php if( 'left_sidebar' == cliper_blog_details_layout('sidebar') ) : ?>
                    <?php get_sidebar(); ?>
                <?php endif; ?>

			<div class="<?php echo esc_attr( cliper_blog_details_layout('columns') ); ?>">
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php
    					get_template_part( 'template-parts/content/content', get_post_format() );
						
						
						
						if ($related_posts_show == true) {
							cliper_related_posts_query();
						}						
						
						
                        get_template_part( 'template-parts/post/author-bio' );
						
                        if ( comments_open() || get_comments_number() ) :
                            comments_template(); 
                        endif;
						
						
						if ($blog_post_nav == true) {
							
                        if ( wp_count_posts('post')->publish > 1 ) {
                            cliper_post_navigation();
                        }
						
						}
	
						
                    ?>
                <?php endwhile; ?>
			</div>

                <?php if( 'right_sidebar' == cliper_blog_details_layout('sidebar') ) : ?>
                    <?php get_sidebar(); ?>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();