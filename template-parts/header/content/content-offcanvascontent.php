<?php

    $page_meta_array = cliper_metabox_value( '_cliper_page_metabox' );
    if ( is_page() && isset( $page_meta_array['enable_offcanvas_content'] ) ) {
        if ( $page_meta_array['enable_offcanvas_content'] == true ) {
            $enable_offcanvas_content = $page_meta_array['enable_offcanvas_content'];
        } else {
            $enable_offcanvas_content = cliper_get_option( 'enable_offcanvas_content', false );
        }
    } else {
        $enable_offcanvas_content = cliper_get_option( 'enable_offcanvas_content', false );
    }

    $page_topbar_switch = isset( $page_meta_array['enable_offcanvas_content'] ) ? $page_meta_array['enable_offcanvas_content'] : false;

    if ( is_page() && '1' == $page_topbar_switch ) {
        $topbar_builder_content = $page_meta_array['elementor_offcanvas_content'];
    } else {
        $topbar_builder_content = cliper_get_option( 'elementor_offcanvas_content' );
    }

    $builder_content = '';
    if ( !empty( $topbar_builder_content ) ) {

        $builder_content = new WP_Query( array(
            'post_type'      => 'elementor_library',
            'posts_per_page' => -1,
            'p'              => $topbar_builder_content,
        ) );
    }

?>
<?php if ( $enable_offcanvas_content == true ): ?>
	<?php if ( $builder_content && is_page() && '1' == $page_topbar_switch ): ?>
        <!-- OFFCANVAS CONTENT WRAP -->
        <div class="offcanvas__content__main__wrap">
            
            <div  class="offcanvas__content__close__trigger">
                <img src="<?php echo CLIPER_ROOT_IMAGE . '/cross.svg'; ?>" alt="<?php bloginfo( 'title' ); ?>">
            </div>

            <div class="offcanvas__content__wrap">
            <?php
                if ( $builder_content->have_posts() ) {
                    while ( $builder_content->have_posts() ):
                        $builder_content->the_post();
                        the_content();
                    endwhile;
                    wp_reset_postdata();
                }
            ?>
            </div>
            
        </div>
        <!-- OFFCANVAS CONTENT WRAP END -->
    <?php elseif ( $builder_content && '1' == cliper_get_option( 'enable_offcanvas_content' ) ): ?>
        <!-- OFFCANVAS CONTENT WRAP -->
        <div class="offcanvas__content__main__wrap">
            
            <div  class="offcanvas__content__close__trigger">
                <img src="<?php echo CLIPER_ROOT_IMAGE . '/cross.svg'; ?>" alt="<?php bloginfo( 'title' ); ?>">
            </div>

            <div class="offcanvas__content__wrap">
            <?php
                if ( $builder_content->have_posts() ) {
                    while ( $builder_content->have_posts() ):
                        $builder_content->the_post();
                        the_content();
                    endwhile;
                    wp_reset_postdata();
                }
            ?>
            </div>
            
        </div>
        <!-- OFFCANVAS CONTENT WRAP END -->
	<?php endif; ?>
<?php endif;?>