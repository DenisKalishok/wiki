<?php
function wiki_customize_register($wp_customize){
/*======================HEADER SECTION======================*/
$wp_customize->add_section("Header Settings", array(
        "title" => __("Header Settings"),
        "priority" => 20,
    ));

/*======================PHONE======================*/
$wp_customize->add_setting( 'phone_setting', array(
        'default'        => '(029) 745-02-22 (МТС)',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('header_phone', array(
        'label'      => __('Phone'),
        'section'    => 'Header Settings',
        'settings'   => 'phone_setting',
    ));

/*======================EMAIL======================*/
$wp_customize->add_setting( 'email_setting', array(
        'default'        => 'info@wikilink.by',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
$wp_customize->add_control('header_email', array(
        'label'      => __('Email'),
        'section'    => 'Header Settings',
        'settings'   => 'email_setting',
    ));
    
/*=====================LOGO TITLE===================*/
$wp_customize->add_setting( 'logo_title_setting' );
 
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_title',array(
            'label' => 'Изображение логотипа шапки',
            'section' => 'Header Settings',
            'settings' => 'logo_title_setting',
        )));

/*=====================LOGO MENU====================*/
$wp_customize->add_setting( 'logo_menu_setting' );
 
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_menu',array(
            'label' => 'Изображение логотипа меню',
            'section' => 'Header Settings',
            'settings' => 'logo_menu_setting',
        )));

/*======================INDEX SECTION======================*/
$wp_customize->add_section("Index Settings", array(
        "title" => __("Index Settings"),
        "priority" => 40,
    ));

/*=======================SLIDER=====================*/
$wp_customize->add_setting( 'first_slider_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'first_slider',array(
            'label' => 'Изображение слайдера №1',
            'section' => 'Index Settings',
            'settings' => 'first_slider_setting',
        )));

$wp_customize->add_setting( 'second_slider_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'second_slider',array(
            'label' => 'Изображение слайдера №2',
            'section' => 'Index Settings',
            'settings' => 'second_slider_setting',
        )));

$wp_customize->add_setting( 'third_slider_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'third_slider',array(
            'label' => 'Изображение слайдера №3',
            'section' => 'Index Settings',
            'settings' => 'third_slider_setting',
        )));
/*======================SIDEBAR SECTION======================*/
$wp_customize->add_section("Sidebar Settings", array(
        "title" => __("Sidebar Settings"),
        "priority" => 50,
    ));
/*=======================PARTNER=====================*/
$wp_customize->add_setting( 'first_link_setting', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('sidebar_link_first', array(
        'label'      => __('Ссылка картинки'),
        'section'    => 'Sidebar Settings',
        'settings'   => 'first_link_setting',
    ));
    
$wp_customize->add_setting( 'first_sidebar_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'first_sidebar',array(
            'label' => 'Изображение №1',
            'section' => 'Sidebar Settings',
            'settings' => 'first_sidebar_setting',
        )));
    
$wp_customize->add_setting( 'second_link_setting', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('sidebar_link_second', array(
        'label'      => __('Ссылка картинки'),
        'section'    => 'Sidebar Settings',
        'settings'   => 'second_link_setting',
    ));

$wp_customize->add_setting( 'second_sidebar_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'second_sidebar',array(
            'label' => 'Изображение №2',
            'section' => 'Sidebar Settings',
            'settings' => 'second_sidebar_setting',
        )));
    
$wp_customize->add_setting( 'third_link_setting', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('sidebar_link_third', array(
        'label'      => __('Ссылка картинки'),
        'section'    => 'Sidebar Settings',
        'settings'   => 'third_link_setting',
    ));

$wp_customize->add_setting( 'third_sidebar_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'third_sidebar',array(
            'label' => 'Изображение №3',
            'section' => 'Sidebar Settings',
            'settings' => 'third_sidebar_setting',
        )));
    
$wp_customize->add_setting( 'fourth_link_setting', array(
        'default'        => '',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('sidebar_link_fourth', array(
        'label'      => __('Ссылка картинки'),
        'section'    => 'Sidebar Settings',
        'settings'   => 'fourth_link_setting',
    ));

$wp_customize->add_setting( 'fourth_sidebar_setting' );
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'fourth_sidebar',array(
            'label' => 'Изображение №4',
            'section' => 'Sidebar Settings',
            'settings' => 'fourth_sidebar_setting',
        )));
/*======================FOOTER SECTION======================*/
$wp_customize->add_section("Footer Settings", array(
        "title" => __("Footer Settings"),
        "priority" => 60,
    ));
/*======================ADDRESS======================*/
$wp_customize->add_setting( 'address_setting', array(
        'default'        => 'г. Брест ул. Колесника 17-79',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('footer_address', array(
        'label'      => __('Address'),
        'section'    => 'Footer Settings',
        'settings'   => 'address_setting',
    ));

/*======================SKYPE======================*/
$wp_customize->add_setting( 'skype_setting', array(
        'default'        => 'wikilinkbrest',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
$wp_customize->add_control('footer_skype', array(
        'label'      => __('Skype'),
        'section'    => 'Footer Settings',
        'settings'   => 'skype_setting',
    ));
/*======================VIBER======================*/
$wp_customize->add_setting( 'viber_setting', array(
        'default'        => '+375 33 335-63-43',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
$wp_customize->add_control('footer_viber', array(
        'label'      => __('Viber'),
        'section'    => 'Footer Settings',
        'settings'   => 'viber_setting',
    ));
/*======================Company======================*/
$wp_customize->add_setting( 'company_setting', array(
        'default'        => 'ООО "Городские сетевые системы."',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ));
 
$wp_customize->add_control('company_address', array(
        'label'      => __('Company'),
        'section'    => 'Footer Settings',
        'settings'   => 'company_setting',
    ));


}

/*registration customize*/
add_action('customize_register', 'wiki_customize_register'); 
?>