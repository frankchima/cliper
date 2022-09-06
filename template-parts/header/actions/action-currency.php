<?php
    $display_currency_menu    = cliper_get_option('enable_currency_menu');
    $header_style    = cliper_get_option('header_style');
    $currencies      = cliper_get_option('currency_menu_header');
    $active_currency = cliper_get_option('currency_menu_active');
    if (file_exists(CLIPER_ROOT . '/inc/currency_symbol_list.php')) {
        require_once CLIPER_ROOT . '/inc/currency_symbol_list.php';
    }

    if (isset($_COOKIE['cliper_currency'])) {
        $active_currency = $_COOKIE['cliper_currency'];
    }

?>
<?php
    if( $display_currency_menu == true){
        if ('header-13' === $header_style) {
        ?>
        <div class="currency__switcher flex" data-content="<?php echo $currency_symbols[$active_currency]; ?>">
            <div class="currency__switcher__menu">
                <select name="currency__switcher" id="currency__switcher"  >
                    <?php foreach ($currencies as $currency) {?>
                        <option value="<?php echo $currency; ?>"<?php echo $currency === $active_currency ? 'selected' : ''; ?> ><?php esc_html_e($currency, 'cliper');?></option>
                    <?php }?>
                </select>
            </div>
        </div>
    <?php } else {
        ?>
        <div class="currency__switcher flex" data-content="<?php echo $currency_symbols[$active_currency]; ?>">
            <div class="currency__switcher__menu">
                <select name="currency__switcher" id="currency__switcher" >
                <?php foreach ($currencies as $currency) {?>
                        <option value="<?php echo $currency; ?>"<?php echo $currency === $active_currency ? ' selected' : ''; ?> ><?php esc_html_e($currency, 'cliper');?></option>
                    <?php }?>
                </select>
            </div>
        </div>
    <?php
        }
    }
?>