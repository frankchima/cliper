<?php
/**
 * The main template file
 *
 * Template Name: Blog Left Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cliper
 * @since 1.0.0
 * 
 */
get_header();
/*
 * The WordPress Query class.
 *
 * @link http://codex.wordpress.org/Function_Reference/WP_Query
 */
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args  = array(
    'post_type'      => 'post',
    'posts_per_page' => get_option( 'posts_per_page' ),
    'paged'          => $paged,
);
$query = new WP_Query( $args );

?>
<?php
    if (function_exists('cliper_title')) {
        cliper_title();
    }
?>
    <div class="content-area section-padding">
        <div class="container">
            <div class="row">

                <?php get_sidebar(); ?>
                <div class="col-md-8 blog__content__wrap">
                    <div class="blog-posts-list">
                        <div class="row blog-masonry blog__grid">

                            <?php if ( $query->have_posts() ) : ?>  

                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <?php  get_template_part( 'template-parts/content/content', get_post_format() ); ?>
                                </div>
                            <?php endwhile; ?>

                            <?php else: ?> 

                            <div class="col-md-12">
                                <?php get_template_part( 'template-parts/content/content', 'none' ); ?>
                            </div>

                            <?php endif; ?>

                        </div>
                    </div>
                    <?php if( '1' == cliper_get_option( 'show_posts_pagination', true ) ) : ?>
                    <div class="post-pagination">                        
                        <?php cliper_custom_pagination( $query ); ?>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
<?php
get_footer();