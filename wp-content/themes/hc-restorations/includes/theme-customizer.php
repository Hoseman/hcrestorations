<?php
function ah_customize_register( $wp_customize ){

    $wp_customize->add_setting( 'ah_twitter_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_instagram_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_address_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_telephone_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_mobile_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_email_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_strapline_handle', [
        'default'  =>  ''
    ]);

    // $wp_customize->add_setting( 'ah_terms_of_trade', [
    //     'default'  =>  ''
    // ]);

    // $wp_customize->add_setting( 'ah_terms_of_trade_link', [
    //     'default'  =>  ''
    // ]);

    // $wp_customize->add_setting( 'ah_terms_of_use', [
    //     'default'  =>  ''
    // ]);

    // $wp_customize->add_setting( 'ah_terms_of_use_link', [
    //     'default'  =>  ''
    // ]);

    $wp_customize->add_setting( 'ah_privacy', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_privacy_link', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_cookie', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_cookie_link', [
        'default'  =>  ''
    ]);

    $wp_customize->add_section( 'ah_social_section', [
        'title' =>  __('HC Restorations Social Settings', 'hc-restorations'),
        'priority'  =>  30
    ]);

    $wp_customize->add_section( 'ah_address_section', [
        'title' =>  __('HC Restorations Address', 'hc-restorations'),
        'priority'  =>  33
    ]);

    $wp_customize->add_section( 'ah_strapline_section', [
        'title' =>  __('HC Restorations Header Strapline', 'hc-restorations'),
        'priority'  =>  34
    ]);

    $wp_customize->add_section( 'ah_footer_links', [
        'title' =>  __('HC Restorations Footer Links', 'hc-restorations'),
        'priority'  =>  35
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_social_twitter_input',
        array(
            'label' => __('Twitter URL', 'hc-restorations'),
            'section' => 'ah_social_section',
            'settings' => 'ah_twitter_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_social_instagram_input',
        array(
            'label' => __('Instagram URL', 'hc-restorations'),
            'section' => 'ah_social_section',
            'settings' => 'ah_instagram_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_telephone_input',
        array(
            'label' => __('Company Telephone', 'hc-restorations'),
            'section' => 'ah_address_section',
            'settings' => 'ah_telephone_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_mobile_input',
        array(
            'label' => __('Company Mobile', 'hc-restorations'),
            'section' => 'ah_address_section',
            'settings' => 'ah_mobile_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_address_input',
        array(
            'label' => __('Company Address', 'hc-restorations'),
            'section' => 'ah_address_section',
            'settings' => 'ah_address_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_email_input',
        array(
            'label' => __('Company Email', 'hc-restorations'),
            'section' => 'ah_address_section',
            'settings' => 'ah_email_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_strapline_input',
        array(
            'label' => __('Header Strapline', 'hc-restorations'),
            'section' => 'ah_strapline_section',
            'settings' => 'ah_strapline_handle'
        )
    ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom',
    //     array(
    //         'label' => __('Footer Terms Of Trade', 'hc-restorations'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_terms_of_trade'
    //     )
    // ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_link',
    //     array(
    //         'label' => __('Footer Terms Of Trade Link', 'hc-restorations'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_terms_of_trade_link'
    //     )
    // ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_use',
    //     array(
    //         'label' => __('Footer Website Terms Of Use', 'hc-restorations'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_terms_of_use'
    //     )
    // ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_use_link',
    //     array(
    //         'label' => __('Footer Website Terms Of Use Link', 'hc-restorations'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_terms_of_use_link'
    //     )
    // ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_footer_links_bottom_privacy',
        array(
            'label' => __('Footer Privacy Policy', 'hc-restorations'),
            'section' => 'ah_footer_links',
            'settings' => 'ah_privacy'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_footer_links_bottom_privacy_link',
        array(
            'label' => __('Footer Privacy Policy Link', 'hc-restorations'),
            'section' => 'ah_footer_links',
            'settings' => 'ah_privacy_link'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_footer_links_bottom_cookie',
        array(
            'label' => __('Footer Cookie Policy', 'hc-restorations'),
            'section' => 'ah_footer_links',
            'settings' => 'ah_cookie'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_footer_links_bottom_cookie_link',
        array(
            'label' => __('Footer Cookie Policy Link', 'hc-restorations'),
            'section' => 'ah_footer_links',
            'settings' => 'ah_cookie_link'
        )
    ));
}