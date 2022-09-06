<?php

    $page_meta_array = cliper_metabox_value( '_cliper_page_metabox' );
    if ( is_page() && isset( $page_meta_array['enable_topbar'] ) ) {
        if ( $page_meta_array['enable_topbar'] == true ) {
            $enable_topbar = $page_meta_array['enable_topbar'];
        } else {
            $enable_topbar = cliper_get_option( 'enable_topbar', false );
        }
    } else {
        $enable_topbar = cliper_get_option( 'enable_topbar', false );
    }

    $page_topbar_switch = isset( $page_meta_array['add_topbar_template'] ) ? $page_meta_array['add_topbar_template'] : false;

    if ( is_page() && '1' == $page_topbar_switch ) {
        $topbar_builder_content = $page_meta_array['elementor_topbar'];
    } else {
        $topbar_builder_content = cliper_get_option( 'elementor_topbar' );
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
<?php if ( $enable_topbar == true ): ?>

	<?php if ( $builder_content && is_page() && '1' == $page_topbar_switch ): ?>

		<div class="elementor-top-bar">
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

    <?php elseif ( $builder_content && '1' == cliper_get_option( 'add_topbar_template' ) ): ?>

		<div class="elementor-top-bar">
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

	<?php else : ?>
        
        <?php get_template_part( 'template-parts/header/topbar/topbar', cliper_get_option( 'header_topbar_layout', 'one' ) ); ?>

	<?php endif; ?>

<?php endif;?>