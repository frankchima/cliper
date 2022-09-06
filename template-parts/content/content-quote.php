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
    <div class="post-details post-quote-custom">
        <div class="post-quote d-none"><div class="fa fa-quote-left"></div></div>
        <?php 
            if ( get_the_title() ) {
                the_title( '<h3 class="post-title">', '</h3>' );
            }
        ?>
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