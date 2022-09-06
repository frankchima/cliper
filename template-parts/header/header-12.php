<?php
	/*-------------------------------
	    MAIN MENU
	--------------------------------*/
	if ( !function_exists('cliper_menu')) {
		function cliper_menu(){
			/*-----------------------
				PAGE META DATA
			-------------------------*/
			$page_meta              = cliper_metabox_value('_cliper_page_metabox');
			$enable_header_styling = isset( $page_meta['enable_header_styling'] ) ? $page_meta['enable_header_styling'] : false;
			$enable_header_category_search = isset( $page_meta['enable_header_category_search'] ) ? $page_meta['enable_header_category_search'] : false;

	        if ( is_page() && $enable_header_styling == true ) {
	        	if ( !empty($page_meta['menu_width']) ) {
	        		$menu_width = $page_meta['menu_width'];
	        	}
	        }else{
	        	$menu_width = cliper_get_option( 'menu_width', 'container container-full-width' );
			}

	    ?>
	    <div class="navifation-top-area">
			 <?php get_template_part( 'template-parts/header/search/search', cliper_get_option( 'header_search_layout', 'one' ) ); ?>
	        
	        <!-- MAINMENU AREA -->
	        <div class="mainnav-area" id="mainnav-area">
	            <div class="mainnav-area-bg"></div>
	            <nav class="navbar">
	                <div class="padding-none <?php echo esc_attr( $menu_width ); ?> container-full-width">
	                    <div class="margin-none row">
	                        <div class="padding-none col-md-12 flex-center-align offcanvas__mobile__nav">
	                        	<div class="push__header__action">
									<div class="navbar-header">
										<?php cliper_logo_with_sticky(); ?>
									</div>
									<div class="push__menu__button">
										<div class="offcanvas__menu__open__trigger">
											<img src="<?php echo CLIPER_ROOT_IMAGE . '/cliper_menu_grid_2.svg'; ?>" alt="<?php bloginfo( 'title' ); ?>">
											<span class="offcanvas_menu_title"><?php echo esc_html__( 'Menu', 'cliper' ) ?> </span>
										</div>
									</div>
	                        	</div>
	                        	<div class="stellarnav d-none d-lg-block"></div>
	                            <?php if( '1' == cliper_get_option( 'enable_header_actions', false ) ) : ?>  
	                            <div class="cliper-action-header d-none d-lg-flex">
									<?php get_template_part( 'template-parts/header/actions/action', 'search' ); ?>
									<?php get_template_part( 'template-parts/header/actions/action', 'currency' ); ?>
									<?php get_template_part( 'template-parts/header/actions/action', 'button_alt' ); ?>
									<?php get_template_part( 'template-parts/header/actions/action', 'button' ); ?>
	                            </div>
	                        	<?php endif; ?>
	                        </div>
	                    </div>
	                </div>
	            </nav>
	        </div>
	        <!-- END MAINMENU AREA END -->

		    <!-- OFFCANVAS MENU START -->
			<div class="offcanvas__mobile__menu__main__wrapper">
		        <div  class="offcanvas__menu__close__trigger">
		            <img src="<?php echo CLIPER_ROOT_IMAGE . '/cross.svg'; ?>" alt="<?php bloginfo( 'title' ); ?>">
		        </div>
		        <div class="offcanvas__menu__wrapper">
		            <div class="offcanvas__menu__inner__content">
					
						<?php if( !empty( cliper_get_option( 'offcanvas_logo' )['url'] ) && '1' == cliper_get_option( 'enable_offcanvas_logo', true ) ) : ?>
						<div class="offcanvas__logo__wrap">
							<?php 
								echo cliper_get_logo_type_tag( cliper_get_option( 'offcanvas_logo' )['url'] );
							?>
						</div>
						<?php endif; ?>
						
						<?php if( has_nav_menu( 'mobile_menu' ) ): ?>
                        <?php
                            wp_nav_menu( array(
								'theme_location'  => 'mobile_menu',
								'menu_id'         => 'offanvas__menu',
								'menu'            => 'ul',
								'menu_class'      => 'offanvas__menu',
								'container'       => 'div',
								'container_class' => 'offcanvas__navigation',
								'container_id'    => 'offcanvas__wrap',
								'fallback_cb'     => 'cliper_menu_default_fallback',
								'walker'          => new cliper_Nav_Menu_Walker(),
                            ) );
                        ?>
						<?php endif; ?>

						<?php if( '1' == cliper_get_option( 'enable_offcanvas_search', true ) ): ?>
						<div class="offcanvas__search__area">
		                    <?php echo get_search_form(); ?>
		                </div>
						<?php endif; ?>
						
						<?php if( '1' == cliper_get_option( 'enable_offcanvas_social' )  ) : ?>
						<div class="offcanvas__social">
							<?php
								cliper_social_links();
							?>
						</div>
						<?php endif; ?>
						
						<?php if( '1' == cliper_get_option( 'enable_offcanvas_description', true ) && !empty( cliper_get_option( 'offcanvas_description' ) ) ): ?>
						<div class="offcanvas__description">
							<p><?php echo cliper_kses( cliper_get_option( 'offcanvas_description' ) ); ?></p>
						</div>
						<?php endif; ?>
						
		            </div>
		        </div>
		    </div>
			<!-- OFFCANVAS MENU END -->

	    </div>
	    <?php
		}
	}

    if (function_exists('cliper_menu')) {
        cliper_menu();
    }
?>