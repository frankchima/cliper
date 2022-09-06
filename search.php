<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Cliper
 * @since 1.0.0
 */

get_header();

?>
<?php 
	if ( function_exists('cliper_title') ) {
		cliper_title();
	}
?>
<div class="content-area section-padding">
    <div class="container">

		<?php if ( 'download' === get_post_type() ) :?>

			<?php if ( have_posts() ) : ?>
				<div class="row download__grid">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<?php get_template_part( 'edd/content/content-download', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="post-pagination">					
							<?php cliper_pagination(); ?>
						</div>
					</div>
				</div>

			<?php else : ?>
				<div class="row">
					<div class="col-md-12">
						<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
					</div>
				</div>
			<?php endif; ?>

		<?php else: ?>

			<div class="row">

                <?php if( 'left_sidebar' == cliper_blog_layout('sidebar') ) : ?>
                    <?php get_sidebar(); ?>
                <?php endif; ?>

				<div class="<?php echo esc_attr( cliper_blog_layout('columns') ); ?>">
					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : ?>
							<?php the_post(); ?>
							<?php get_template_part( 'template-parts/content/content','search' ); ?>
						<?php endwhile; ?>
						
						<div class="page-pagination">					
							<?php cliper_navigation(); ?>
						</div>

					<?php else : ?>
						
						<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

					<?php endif; ?>
				</div>

                <?php if( 'right_sidebar' == cliper_blog_layout('sidebar') ) : ?>
                    <?php get_sidebar(); ?>
                <?php endif; ?>

			</div>

		<?php endif; ?>
	</div>
</div>
<?php
get_footer();