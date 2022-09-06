<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cliper
 * @since 1.0.0
 */

$profile_url     = '//gmpg.org/xfn/11';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( $profile_url ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

    <div class="content-area clearfix">
		<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile;
		?>
	</div>
	
	<?php wp_footer(); ?>

</body>
</html>