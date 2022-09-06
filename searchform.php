<?php
/**
 * Template for displaying search forms.
 *
 * @package Cliper
 * @since 1.0.0
 *
 */
?>

<?php
add_filter('get_search_form', function ($form) {
    $form = '<form class="search-main-form" action="' . esc_url(home_url('/')) . '">
                <input  name="s" placeholder="' . esc_attr__('Search...', 'cliper') . '" type="search">
                <button type="submit"><i class="ti-search"></i></button>
            </form>';
    return $form;
});