<?php
/**
 * The template for displaying archive pages
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
        
        <?php if ( isset($_GET['author_downloads'] ) && $_GET['author_downloads'] == 'true' ) : ?>
            <?php
            /*
                get_template_part( 'edd/author/author-download-top-meta' );
                Here Will Be Your All FIlter For Search & Query.
            */
            ?>
            <?php
                $edd_per_page    = cliper_get_option( 'edd_product_per_page', 6 );
                $author          = get_user_by( 'id', get_query_var( 'author' ) );
                $author_id       = get_the_author_meta( 'ID' );
                $author_download = get_the_author_meta( 'ID', $author->ID );
                $paged           = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args            = array(
                    'order'          => 'DESC',
                    'post_type'      => 'download',
                    'posts_per_page' => $edd_per_page,
                    'author'         => $author_download,
                    'paged'          => $paged,
                );

                $temp     = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query( $args );
            ?>

            <?php  if ( $wp_query->have_posts() ) : ?>

                <div class="row download__grid">
                <?php while ( $wp_query->have_posts() ) : ?>
                    <?php $wp_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <?php
                            /*****************************************************************************************
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php ( where ___ is the Post Type name) and that will be used instead.
                             *****************************************************************************************/
                            get_template_part( 'edd/content/content-download', get_post_format() );
                        ?>
                    </div>
                <?php endwhile; ?>
                </div>

                <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-pagination">                   
                            <?php cliper_custom_pagination(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

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

                    <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content/content', get_post_format() );

                            endwhile; ?>

                            <div class="page-pagination">                   
                                <?php cliper_navigation(); ?>
                            </div>
                    <?php
                        else :
                            get_template_part( 'template-parts/content/content', 'none' );
                        endif;
                    ?>

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
