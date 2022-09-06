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

<body <?php body_class(); ?>  data-spy="scroll" data-target=".mainnav-area" data-offset="90">
	
	<?php 
		if( function_exists( 'wp_body_open' ) ){
			wp_body_open();
		}
	?>