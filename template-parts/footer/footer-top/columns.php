<?php if( 'one' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>

	<div class="row">

		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

	</div>

<?php elseif ( 'two' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">

		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

	</div>

<?php elseif ( 'three' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">

		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div>

<?php elseif ( 'four' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">
		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
		</div>
		<?php endif; ?>
	</div>

<?php elseif ( 'five' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">

		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div>

<?php elseif ( 'six' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">

		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div>

<?php elseif ( 'seven' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">

		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div>

<?php elseif ( 'eight' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>
	
	<div class="row">
		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
		<div class="col-md-2 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
		</div>
		<?php endif; ?>
	</div>

<?php elseif ( 'nine' == cliper_get_option( 'footer_top_columns', 'four' ) ) : ?>

	<div class="row">
		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-2 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
		</div>
		<?php endif; ?>
	</div>

<?php else : ?>
	
	<div class="row">
		<?php if ( is_active_sidebar( 'footer-sidebar-1') ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
		</div>
		<?php endif; ?>
	</div>

<?php endif; ?>