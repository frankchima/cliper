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
			<?php get_template_part( 'template-parts/header/topbar/topbar', 'elementor' ); ?>
			
			<!-- MAINMENU AREA -->
			<div class="mainnav-area" id="mainnav-area">
				<div class="mainnav-area-bg"></div>
				<nav class="navbar">
					<div class="<?php echo esc_attr( $menu_width ); ?> container-full-width">
						<div class="row">
							<div class="col-md-12 flex-center-align">
								<div class="navbar-header">
									<?php cliper_logo_with_sticky(); ?>
								</div>
								<svg class="humberger__menu__toggle ham hamRotate ham8" viewBox="0 0 100 100" width="60">
									<path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
									<path class="line middle" d="m 30,50 h 40" />
									<path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
								</svg>
								<?php
									wp_nav_menu( array(
										'theme_location'  => 'mainmenu',
										'menu_id'         => 'cliper-nav',
										'menu'            => 'ul',
										'menu_class'      => 'cliper-pull-right navbar-nav nav',
										'container'       => 'div',
										'container_class' => 'stellarnav',
										'container_id'    => 'cliper-main-navigation',
										'fallback_cb'     => 'cliper_menu_default_fallback',
										'walker'          => new cliper_Nav_Menu_Walker(),
									) );
								?>

								<?php if( '1' == cliper_get_option( 'enable_header_actions', false ) ) : ?>
									<div class="cliper-action-header d-none d-xl-flex">
										<?php get_template_part( 'template-parts/header/actions/action', 'button' ); ?>
										<?php get_template_part( 'template-parts/header/actions/action', 'currency' ); ?>
										<?php if( '1' == cliper_get_option( 'enable_offcanvas_content' ) ) : ?>
											<div class="offcanvas__content__open__trigger">
												<img src="<?php echo esc_url( CLIPER_ROOT_IMAGE . '/cliper_menu_grid.svg' ) ?>" alt="<?php bloginfo( 'title' ); ?>">
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>

								<?php if( 'offcanvas' == cliper_get_option('mobile_menu_style', 'static') ): ?>
									<div class="push__menu__button d-block d-lg-none">
										<div class="offcanvas__menu__open__trigger">
											<i class="ti ti-menu"></i>
										</div>
									</div>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</nav>
			</div>
			<!-- END MAINMENU AREA END -->

			<!-- OFFCANVAS CONTENT WRAP -->
			<?php get_template_part( 'template-parts/header/content/content', 'offcanvascontent' ); ?>
			<!-- OFFCANVAS CONTENT WRAP END -->

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