<?php
    /* ------------------------------
        TOPBAR AREA WIDTH CONDITION
    -------------------------------*/
    $page_meta_array        = cliper_metabox_value( '_cliper_page_metabox' );
    $enable_header_styling = isset( $page_meta_array['enable_header_styling'] ) ? $page_meta_array['enable_header_styling'] : false;
    if ( is_page() && $enable_header_styling == true ) {
        if ( !empty( $page_meta_array['menu_width'] ) ) {
            $menu_width = $page_meta_array['menu_width'];
        }
    } else {
        $menu_width = cliper_get_option( 'menu_width', 'container container-full-width' );
    }

    /* ----------------------------
        TOPBAR CONDITION
    -------------------------------*/
    if ( is_page() && isset( $page_meta_array['enable_topbar'] ) ) {
        if ( $page_meta_array['enable_topbar'] == true ) {
            $enable_topbar = $page_meta_array['enable_topbar'];
        } else {
            $enable_topbar = cliper_get_option( 'enable_topbar', false );
        }
    } else {
        $enable_topbar = cliper_get_option( 'enable_topbar', false );
    }

?>
<?php if ( $enable_topbar == true ): ?>
<!-- TOP BAR -->
<div class="top-bar">
    <div class="<?php echo esc_attr( $menu_width ); ?>">
        <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-8">
                <div class="top-left-contact">
                    <?php if ( !empty( cliper_get_option( 'phone_number' ) ) ): ?>
                    <p><i class="ti ti-headphone-alt"></i><?php echo esc_html( cliper_get_option( 'phone_number' ) ); ?></p>
                    <?php endif;?>
                    <?php if ( !empty( cliper_get_option( 'email_address' ) ) ): ?>
                    <p><i class="ti ti-email"></i><?php echo esc_html( cliper_get_option( 'email_address' ) ); ?></p>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-4">
                <?php
                    if ( '1' == cliper_get_option( 'enable_social' ) ) {
                        cliper_social_links();
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- TOP BAR END -->
<?php endif;?>