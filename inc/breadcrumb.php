<?php
/**
 * Breadcrumbs
 *
 * Echoes the current breadcrumbs. Supports EDD built in taxs.
 *
 * @package Cliper
 * 
 * @since    1.0.0
 * 
 * @access   private
 *
 * @return string
 * 
 */

if ( !function_exists( 'cliper_breadcrumbs' ) ) {
    function cliper_breadcrumbs() {
        global $wp_query, $post, $paged;
        $space          = ' ';
        $on_front       = get_option( 'show_on_front' );
        $blog_page      = get_option( 'page_for_posts' );
        $separator      = $space . '<span class="bredcrumb-separator active">' . apply_filters( 'cliper_breadcrumb_separator', '>' ) . '</span>' . $space;
        $link           = apply_filters( 'cliper_breadcrumb_link', '<a href="%1$s" title="%2$s" rel="bookmark" class="breadcrumb-item">%2$s</a>' );
        $current        = apply_filters( 'cliper_breadcrumb_current', '<span class="active">%s</span>' );
        $show_home_link = false;
        $show_current   = false;
        $before         = '';
        $after          = '';
        $sep            = '';
        $text           = array();
        if (  ( $on_front == 'page' && is_front_page() ) || ( $on_front == 'posts' && is_home() ) ) {
            return;
        }
        $out = '<div class="cliper__theme__breadcrumb">';
        if ( $on_front == "page" && is_home() ) {
            $blog_title = isset( $blog_page ) ? get_the_title( $blog_page ) : esc_html__( 'Our Blog', 'cliper' );
            $out .= sprintf( $link, home_url(), esc_html__( 'Home', 'cliper' ) ) . $separator . sprintf( $current, $blog_title );
        } else {
            $out .= sprintf( $link, home_url(), esc_html__( 'Home', 'cliper' ) );
        }
        if ( is_singular() ) {
            if ( is_singular( 'post' ) && $blog_page > 0 ) {
                $out .= $separator . sprintf( $link, get_permalink( $blog_page ), esc_attr( get_the_title( $blog_page ) ) );
            }
            if ( $post->post_parent > 0 ) {
                if ( isset( $post->ancestors ) ) {
                    if ( is_array( $post->ancestors ) ) {
                        $ancestors = array_values( $post->ancestors );
                    } else {
                        $ancestors = array( $post->ancestors );
                    }
                } else {
                    $ancestors = array( $post->post_parent );
                }
                foreach ( array_reverse( $ancestors ) as $key => $value ) {
                    $out .= $separator . sprintf( $link, get_permalink( $value ), esc_attr( get_the_title( $value ) ) );
                }
            }
            $post_type = get_post_type();
            if ( get_post_type_archive_link( $post_type ) ) {
                $post_type_obj = get_post_type_object( $post_type );
                $out .= $separator . sprintf( $link, get_post_type_archive_link( $post_type ), esc_attr( $post_type_obj->labels->menu_name ) );
            }
            $out .= $separator . sprintf( $current, get_the_title() );
        } else {
            if ( is_post_type_archive() ) {
                $post_type     = get_post_type();
                $post_type_obj = get_post_type_object( $post_type );
                $out .= $separator . sprintf( $current, $post_type_obj->labels->menu_name );
            } else if ( is_tax() ) {
                if ( is_tax( 'download_tag' ) || is_tax( 'download_category' ) ) {
                    $post_type     = get_post_type();
                    $post_type_obj = get_post_type_object( $post_type );
                    $out .= $separator . sprintf( $link, get_post_type_archive_link( $post_type ), esc_attr( $post_type_obj->labels->menu_name ) );
                }
                $out .= $separator . sprintf( $current, $wp_query->queried_object->name );
            } else if ( is_category() ) {
                $out .= $separator . sprintf( '<span class="active">%s ></span> ', esc_html__( 'Category', 'cliper' ) ) . sprintf( $current, $wp_query->queried_object->name );
            } else if ( is_tag() ) {
                $out .= $separator . esc_html__( 'Tag: ', 'cliper' ) . sprintf( $current, $wp_query->queried_object->name );
            } else if ( is_date() ) {
                $out .= $separator;
                if ( is_day() ) {
                    global $wp_locale;
                    $out .= sprintf( $link, get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) ), $wp_locale->get_month( get_query_var( 'monthnum' ) ) . ' ' . get_query_var( 'year' ) );
                    $out .= $separator . sprintf( $current, get_the_date() );
                } else if ( is_month() ) {
                    $out .= sprintf( $current, single_month_title( ' ', false ) );
                } else if ( is_year() ) {
                    $out .= sprintf( $current, get_query_var( 'year' ) );
                }
            } else if ( is_404() ) {
                $out .= $separator . sprintf( $current, esc_html__( 'Error 404', 'cliper' ) );
            } elseif ( is_search() ) {
                if ( have_posts() ) {
                    if ( $show_home_link && $show_current ) {
                        echo '<span class="sep">' . $sep . '</span>';
                    }
                    if ( $show_current ) {
                        echo '<span>' . $before . '</span>' . sprintf( $text['search'], get_search_query() ) . $after;
                    }

                } else {
                    if ( $show_home_link ) {
                        echo '<span class="sep">' . $sep . '</span>';
                    }
                    echo '<span>' . $before . '</span>' . sprintf( $text['search'], get_search_query() ) . $after;
                }
            }
        }
        $out .= '</div>';
        echo apply_filters( 'cliper_breadcrumbs_out', $out );
    }
}
add_action( 'cliper_breadcrumbs', 'cliper_breadcrumbs' );