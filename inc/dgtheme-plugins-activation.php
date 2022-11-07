<?php 
function tgmpa_plugin_activation(){

    $plugin = array(
        array(
            'name' => 'contact form 7',
            'slug' => 'contact-form-7',
            'required' => true
        ),
        array(
            'name' => 'Advanced Custom Fields Font Awesome',
            'slug' => 'advanced-custom-fields-font-awesome',
            'required' => true
        ),
        array(
            'name' => 'one click demo import',
            'slug' => 'one-click-demo-import',
            'required' => true
        ),
        array(
            'name' => 'widget import and export',
            'slug' => 'widget-importer-exporter',
            'required' => true
        ),
        array(
            'name' => 'ACF PRO',
            'slug' => 'advanced-custom-fields-pro.zip',
            'source' => get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro.zip',
            'required' => true
        ),
        );
        $config = array(
            'id' => 'DGtheme_plugin',
            'menu' => 'DG theme plugin installation',
            'parent_slug' => 'themes.php',
            'has_notice' => true,

        );        
        tgmpa( $plugin, $config );
}
add_action('tgmpa_register','tgmpa_plugin_activation');