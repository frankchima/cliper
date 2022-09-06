<?php
	/*-----------------------
		PAGE META DATA
	-------------------------*/
	$page_meta_array   = cliper_metabox_value('_cliper_page_metabox');
	$header_cat_search = isset( $page_meta_array['enable_header_category_search'] ) ? $page_meta_array['enable_header_category_search'] : false;

?>
<?php if( true == $header_cat_search ) : ?>
<!-- CATEGORY SEARCBAR AREA -->
<div class="header-category-search d-none d-lg-block">
    <div class="padding-none container width100p">
        <div class="margin-none row">
            <div class="padding-none col-md-12 col-xs-12">
				<?php
					$taxonomies = array('category');
			        $args       = array( 
			           'orderby'    =>'count',
			           'hide_empty' => true,
			           'parent'     => 0,
			        );
					$input_value  = ( isset($_GET['s']) ) ? $_GET['s']: null;
				?>
				<form id="header__search__form" class="header__search__form" method="GET" action="<?php echo esc_url(home_url('/')); ?>">
					<div class="row margin-none">
						<div class="col-md-2 padding-none">
							<div class="search__categories">
								<?php echo cliper_get_terms_dropdown( $taxonomies, $args ); ?>
							</div>
						</div>
						<div class="col-md-8 padding-none">
							<input class="download__search__input" name="s" value="<?php echo esc_attr( $input_value ) ?>" type="search" placeholder="Type your keyword......">
			            	<input type="hidden" name="post_type" value="download">
						</div>
						<div class="col-md-2 padding-none">
							<button type="submit" class="header-search-submit"><i class="fa fa-search"></i> Search</button>
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
<!-- CATEGORY SEARCBAR AREA END -->
<?php endif; ?>