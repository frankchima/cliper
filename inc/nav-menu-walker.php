<?php

class cliper_Nav_Menu_Walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$menu_meta       = get_post_meta( $item->ID, '_cliper_menu', true );
		$add_menu_bedge  = isset( $menu_meta['add_menu_bedge'] ) ? $menu_meta['add_menu_bedge'] : 0;
		$menu_bedge_text = isset( $menu_meta['menu_bedge_text'] ) ? $menu_meta['menu_bedge_text'] : '';
		$bedge_color     = isset( $menu_meta['bedge_color'] ) ? $menu_meta['bedge_color'] : array();

		$enable_megamenu            = isset( $menu_meta['enable_megamenu'] ) ? $menu_meta['enable_megamenu'] : 0;
		$megamenu_content_type      = isset( $menu_meta['megamenu_content_type'] ) ? $menu_meta['megamenu_content_type'] : 'default';
		$megamenu_colums            = isset( $menu_meta['megamenu_colums'] ) ? $menu_meta['megamenu_colums'] : 4;
		if( 'elementor' == $megamenu_content_type ){
			$megamenu_colums = 1;
		}
		$megamenu_elementor_content = isset( $menu_meta['megamenu_elementor_content'] ) ? $menu_meta['megamenu_elementor_content'] : '';

		$bedge_style = '';
		if( isset( $bedge_color['text_color'] ) ){
			$bedge_style .= "color:".$bedge_color['text_color'].";";
		}
		if( isset( $bedge_color['bg_color'] ) ){
			$bedge_style .= "background-color:".$bedge_color['bg_color'].";";
		}
		if( $bedge_style ){
			$bedge_style = 'style='. $bedge_style .'';
		}

		if( '1' ==  $add_menu_bedge && !empty( $menu_bedge_text ) ){
			$menu_bedge = '<span '.esc_attr( $bedge_style ).' class="mainmenu__bedge">'.esc_html( $menu_bedge_text ).'</span>';
		}else{
			$menu_bedge = '';
		}

		global $wp_query;
		$indent      = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes     = empty( $item->classes ) ? array() : (array) $item->classes;

		if( '1' ==  $add_menu_bedge && !empty( $menu_bedge_text ) ){
			$classes[] = 'current_menu_bedge';
		}
		if( '1' ==  $enable_megamenu ){
			$classes[] = 'mega';
		}
		if( '1' ==  $enable_megamenu && !empty( $megamenu_colums ) ){
			$value.= ' data-columns="'.$megamenu_colums.'"';
		}
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';


		$one_page_nav = cliper_get_option('one_page_navigation') ? cliper_get_option('one_page_navigation') : false; 

		if( cliper_detect_homepage() == true ) {
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
		}else{
			if( $item->type_label == 'Custom Link' && $one_page_nav == true ) {
				$attributes .= ! empty( $item->url ) ? ' href="' . get_site_url() .  esc_attr( $item->url ) .'"' : '';
			} else {
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
			}
		}

		$item_output  = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . do_shortcode(  apply_filters( 'the_title', $item->title, $item->ID )) . $args->link_after;
		//$item_output .= '<span class="sub">' . do_shortcode( $item->description ) . '</span>';
		$item_output .= $menu_bedge;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}