<?php
    $page_meta_array        = cliper_metabox_value( '_cliper_page_metabox' );
    $enable_header_styling = isset( $page_meta_array['enable_header_styling'] ) ? $page_meta_array['enable_header_styling'] : false;
    if ( is_page() && $enable_header_styling == true ) {
        if ( !empty( $page_meta_array['menu_width'] ) ) {
            $menu_width = $page_meta_array['menu_width'];
        }
    } else {
        $menu_width = cliper_get_option( 'menu_width', 'container container-full-width' );
    }
    
?>
<?php if ( '1' == cliper_get_option( 'enable_topbar', false ) ): ?>
<!-- TOP BAR -->
<div class="top-bar d-none d-lg-block">
    <div class="<?php echo esc_attr( $menu_width ); ?>">
        <div class="row flex-center-align">
            <div class="col-md-6 col-xs-12 col-sm-8">
                <div class="top-left-contact">
                    <?php if ( !empty( cliper_get_option( 'phone_number' ) ) ): ?>
                    <div class="topbar-single-contact">
                        <div class="topbar-contact-icon"><i class="ti ti-headphone-alt"></i></div>
                        <h4><?php echo esc_html__( 'Call Us', 'cliper' ) ?></h4>
                        <p><?php echo esc_html( cliper_get_option( 'phone_number' ) ); ?></p>
                    </div>
                    <?php endif;?>
                    <?php if ( !empty( cliper_get_option( 'email_address' ) ) ): ?>
                    <div class="topbar-single-contact">
                        <div class="topbar-contact-icon"><i class="ti ti-email"></i></div>
                        <h4><?php echo esc_html__( 'Mail To', 'cliper' ) ?></h4>
                        <p><?php echo esc_html( cliper_get_option( 'email_address' ) ); ?></p>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-2 col-xs-12">
                <div class="navbar-header topbar-logo">
                    <?php cliper_logo_with_sticky();?>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-4">
                <div class="cliper-action-header d-none d-lg-flex">

                    <?php get_template_part( 'template-parts/header/actions/action', 'cart' );?>
                    <?php get_template_part( 'template-parts/header/actions/action', 'offcanvas' );?>
                    <?php get_template_part( 'template-parts/header/actions/action', 'search' );?>
                    <?php get_template_part( 'template-parts/header/actions/action', 'button' );?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- TOP BAR END -->
<?php endif;?>