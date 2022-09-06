<?php

/*-----------------------------------
Currency Menu
------------------------------------*/
require_once CLIPER_ROOT . '/Options/Settings/Header/Currency-Array.php';
CSF::createSection(CLIPER_OPTION_KEY,
    array(
        'parent' => 'Header_Tab',
        'title'  => esc_html__('Currency Menu', 'cliper'),
        'icon'   => 'fa fa-align-right',
        'fields' => array(
            
            array(
                'id'      => 'enable_currency_menu',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Currency Menu', 'cliper' ),
                'desc'    => esc_html__( 'If you want to enable or disable currency menu ( YES / NO )', 'cliper' ),
                'default' => true,
            ),
            array(
                'id'       => 'currency_menu_header',
                'type'     => 'button_set',
                'title'    => esc_html__('Currency List', 'cliper'),
                'multiple' => true,
                'options'  => $currency_list,
                'default'  => array('AUD', 'USD', 'CAD', 'GBP'),
                'dependency' => array( 'enable_currency_menu', '==', 'true' )
            ),
            array(
                'id'       => 'currency_menu_active',
                'type'     => 'button_set',
                'title'    => esc_html__('Currency List Active', 'cliper'),
                'multiple' => false,
                'options'  => $currency_list,
                'default'  => array('USD'),
                'dependency' => array( 'enable_currency_menu', '==', 'true' )
            ),
        ),
    )
);
