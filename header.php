<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cliper
 * @since 1.0.0
 * 
 */

$header_style       = cliper_get_option( 'header_style', CLIPER_HEADER_LAYOUT );
$page_meta_array    = cliper_metabox_value( '_cliper_page_metabox' );
$page_header_switch = isset( $page_meta_array['overwrite_page_header'] ) ? $page_meta_array['overwrite_page_header'] : false;
if ( is_page() && '1' == $page_header_switch ) {
	$header_style    = isset( $page_meta_array['header_style'] ) ? $page_meta_array['header_style'] : $header_style;
}
$profile_url     = '//gmpg.org/xfn/11';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( $profile_url ); ?>">
        <meta name="theme-color" content="#319197">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  data-spy="scroll" data-target=".mainnav-area" data-offset="90">
	
	<?php 
		if( function_exists( 'wp_body_open' ) ){
			wp_body_open();
		}
	?>

	<header class="navigation-area" id="scrolltop">
		<?php get_template_part( 'template-parts/header/' . $header_style ); ?>
	</header>
