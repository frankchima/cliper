<?php
    /**
     * The main template file
     *
     * This is the most generic template file in a WordPress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used to display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Cliper
     * @since 1.0.0
     *
     */
    get_header();
?>
<?php
    if (function_exists('cliper_title')) {
        cliper_title();
    }
?>
	<div class="content-area section-padding">
		<div class="container">
			<div class="row">

				<?php if ('left_sidebar' == cliper_blog_layout('sidebar')): ?>
					<?php get_sidebar();?>
				<?php endif;?>

				<div class="<?php echo esc_attr(cliper_blog_layout('columns')); ?>">
					<div class="blog-posts-list">
						<div class="row blog-masonry blog__grid">

							<?php if (have_posts()): ?>

							<?php while (have_posts()): the_post();?>
								<div class="<?php echo esc_attr(cliper_post_layout()); ?>">
								<?php get_template_part('template-parts/content/content', get_post_format());?>
								</div>
							<?php endwhile;?>

							<?php else: ?>

							<div class="col-md-12">
								<?php get_template_part('template-parts/content/content', 'none');?>
							</div>

							<?php endif;?>

						</div>
					</div>
					<?php if ('1' == cliper_get_option('show_posts_pagination', true)): ?>
					<div class="post-pagination">
						<?php cliper_pagination();?>
					</div>
					<?php endif;?>
				</div>

				<?php if ('right_sidebar' == cliper_blog_layout('sidebar')): ?>
					<?php get_sidebar();?>
				<?php endif;?>

			</div>
		</div>
	</div>
<?php
get_footer();