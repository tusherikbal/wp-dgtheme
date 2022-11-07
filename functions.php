<?php
        require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';
        require_once get_template_directory(). '/inc/dgtheme-plugins-activation.php';
        require_once get_template_directory(). '/inc/dgtheme-demo-import.php';

        load_theme_textdomain( 'dgtheme', get_template_directory() . '/languages' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support( 'custom-logo' );



        function dgtheme_custom_logo_setup() {
            $defaults = array(
                'height'               => 100,
                'width'                => 200,
                'flex-height'          => true,
                'flex-width'           => true,
                'header-text'          => array( 'site-title', 'site-description' ),
                'unlink-homepage-logo' => false, 
            );
            add_theme_support( 'custom-logo', $defaults );
        }
        add_action( 'after_setup_theme', 'dgtheme_custom_logo_setup' );

//post excerpt limit:
function dgtheme_post_excerpt_limit( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'dgtheme_post_excerpt_limit', 999 );



    // navbar 


    function dgtheme() {
        register_nav_menus( array(
            'primary-menu'=>__('Navigation Menu'),
           
        ));
    }
                    add_action('after_setup_theme', 'dgtheme');
    


function dgtheme_enque(){

    wp_enqueue_style( 'font-poppins-first', 'https://fonts.googleapis.com', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-poppins-second', 'https://fonts.gstatic.com', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-poppins-third', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), '1.0.0', 'all');

    //css

    wp_enqueue_style( 'dg-bootstrap-main', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'dg-fontawesome-icon', get_template_directory_uri().'/assets/css/fontawesome.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'dg-digimedia-css', get_template_directory_uri().'/assets/css/templatemo-digimedia-v1.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'dg-animated-css', get_template_directory_uri().'/assets/css/animated.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'dg-owl-css', get_template_directory_uri().'/assets/css/owl.css',array(), '1.0.0', 'all' );


    wp_enqueue_style( 'style-name', get_stylesheet_uri() );



    //script

    wp_enqueue_script( 'dg-main-jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'dg-jquery', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'owl-jquery', get_template_directory_uri().'/assets/js/owl-carousel.js',array(), '1.0.0', true );
    wp_enqueue_script( 'dg-animation-js', get_template_directory_uri().'/assets/js/animation.js',array(), '1.0.0', true );
    wp_enqueue_script( 'dg-imageloaded', get_template_directory_uri().'/assets/js/imagesloaded.js',array(), '1.0.0', true );
    wp_enqueue_script( 'dg-custom-js', get_template_directory_uri().'/assets/js/custom.js',array(), '1.0.0', true );

}


add_action( 'wp_enqueue_scripts', 'dgtheme_enque' );


// customizer api

function dgtheme_customize($wp_customize){

    $wp_customize->add_panel('footer_area', array(
        'title'    => __('Footer', 'dgtheme'),
        'capability' => 'edit_theme_options',
        'priority' => 120,
    ));

    //copyright area

    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer area', 'dgtheme'),
        'capability'     => 'edit_theme_options',
        'panel' => 'footer_area'

    ));

    $wp_customize->add_setting( 'footer_copyright_setting',array(

        'default' => __('copyright footer area')
    ));


    $wp_customize->add_control('copyright_footer', array(
        'label'      => __('Footer Copyright', 'dgtheme'),
        'section'    => 'footer_section',
        'settings'   => 'footer_copyright_setting',
        'type'        => 'textarea',
        'default' => __('Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved.')
        ));
   


        //website author name
       


        $wp_customize->add_setting( 'footer_author_setting',array(

            'default' => __('DEV To Digital')
        ));


        $wp_customize->add_control('copyright_author_footer', array(
            'label'      => __('Footer Copyright', 'dgtheme'),
            'section'    => 'footer_section',
            'settings'   => 'footer_author_setting',
            'type'        => 'text',
            'default' => __('')
            ));







            //social media link facebook

            $wp_customize->add_setting( 'footer_social_facebook',array(

                'default' => __('www.facebook.com')
            ));
    
    
            $wp_customize->add_control('footer_social_link_fb', array(
                'label'      => __('facebook link', 'dgtheme'),
                'section'    => 'footer_section',
                'settings'   => 'footer_social_facebook',
                'type'        => 'url',
                'default' => __('')
                ));





            //social media link twitter

        $wp_customize->add_setting( 'footer_social_twitter',array(

            'default' => __('www.twitter.com')
        ));


        $wp_customize->add_control('footer_social_link_twt', array(
            'label'      => __('twitter link', 'dgtheme'),
            'section'    => 'footer_section',
            'settings'   => 'footer_social_twitter',
            'type'        => 'url',
            'default' => __('www.twitter.com')
            ));



            //social media link instagram

        $wp_customize->add_setting( 'footer_social_insta',array(

            'default' => __('www.instagram.com')
        ));


        $wp_customize->add_control('footer_social_link_ig', array(
            'label'      => __('instagram link', 'dgtheme'),
            'section'    => 'footer_section',
            'settings'   => 'footer_social_insta',
            'type'        => 'url',
            'default' => __('www.instagram.com')
            ));




            //social media link linkedin

        $wp_customize->add_setting( 'footer_social_linkdin',array(

            'default' => __('www.linkdin.com')
        ));


        $wp_customize->add_control('footer_social_linkdin', array(
            'label'      => __('linkdin link', 'dgtheme'),
            'section'    => 'footer_section',
            'settings'   => 'footer_social_linkdin',
            'type'        => 'url',
            'default' => __('www.linkdin.com')
            ));
   





            //contact us section info change

          

                $wp_customize->add_panel('contact_info', array(
                    'title'    => __('contact info', 'dgtheme'),
                    'capability' => 'edit_theme_options',
                    'priority' => 120,
                ));
            
                //contact info
            
                $wp_customize->add_section('contact_section', array(
                    'title'    => __('contact info', 'dgtheme'),
                    'capability'     => 'edit_theme_options',
                    'panel' => 'contact_info'
            
                ));
            
                $wp_customize->add_setting( 'email_setting',array(
            
                    'default' => __('')
                ));
            
            
                $wp_customize->add_control('contact_email', array(
                    'label'      => __('email number', 'dgtheme'),
                    'section'    => 'contact_section',
                    'settings'   => 'email_setting',
                    'type'        => 'text',
                    'default' => __(' ')
                    ));



                    // contact email
                $wp_customize->add_setting( 'phone_setting',array(
            
                    'default' => __('')
                ));
            
            
                $wp_customize->add_control('contact_phone', array(
                    'label'      => __('Phone number', 'dgtheme'),
                    'section'    => 'contact_section',
                    'settings'   => 'phone_setting',
                    'type'        => 'text',
                    'default' => __('example@email.com')
                    ));


                    //contact address
                $wp_customize->add_setting( 'address_setting',array(
            
                    'default' => __('')
                ));
            
            
                $wp_customize->add_control('contact_address', array(
                    'label'      => __('address', 'dgtheme'),
                    'section'    => 'contact_section',
                    'settings'   => 'address_setting',
                    'type'        => 'text',
                    'default' => __('example@email.com')
                    ));



                    //google map source
                $wp_customize->add_setting( 'gmap',array(
            
                    'default' => __('')
                ));
            
            
                $wp_customize->add_control('contact_address', array(
                    'label'      => __('google map location', 'dgtheme'),
                    'section'    => 'contact_section',
                    'settings'   => 'gmap',
                    'type'        => 'url',
                    'default' => __('example@email.com')
                    ));

      
            

    





}


add_action('customize_register', 'dgtheme_customize');







// acf 

if( function_exists('acf_add_options_page')){
    

    acf_add_options_page(array(
        'page_title' => 'Theme options',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Hero Section',
        'menu_title'    => 'Hero_Section',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'ABOUT US',
        'menu_title'    => 'ABOUT_US',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Our Services',
        'menu_title'    => 'Our_Services',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Get Qoutation',
        'menu_title'    => 'Get_Qoutation',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'portfolio',
        'menu_title'    => 'Portfolio',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Blog_section',
        'menu_title'    => 'Our Blog',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'contacts',
        'menu_title'    => 'contact us',
        'parent_slug'   => 'theme-general-settings',
    ));
}


