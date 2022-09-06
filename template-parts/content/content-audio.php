<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cliper
 */

?>
<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <?php
        if ( function_exists('cliper_audio_preview') ) {
           echo cliper_audio_preview();
        }
    ?>
    <div class="post-details">
        <?php 
            if ( 'post' === get_post_type() && !is_single() ) {
                cliper_single_random_category_retrip();
            }
        ?>
        <?php 
            if ( get_the_title() ) {
                if ( ! is_single() ) {
                    the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
                }
            }
        ?>
        <?php
            if ( 'post' === get_post_type() && is_single() ) {
                cliper_single_post_top_meta();
            }
        ?>
        <?php if ( get_the_content() ) :  ?>
        <div class="post-content fix">
            <?php
                if ( is_single() ) {
                    the_content();
                }else{
                    the_excerpt();
                }
                if ( is_single() ) {
                    cliper_link_pages();
                }
            ?>
        </div>
        <?php endif; ?>
        <?php
            if ( !is_single() ) {
                cliper_posts_bottom_meta();
            }
            if( is_single() ) {            
                if(function_exists('cliper_post_footer_meta')){
                    cliper_post_footer_meta();
                }
            }
        ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->