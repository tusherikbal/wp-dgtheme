<?php 
function dgtheme_import_files() {
	return array(
		array(
			'import_file_name'             => 'Demo Data Import',
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-data/dgtheme.demodata.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo-data/dgmedia-widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . '/demo-data/acf-demo-data.php',
			
			'import_preview_image_url'     => trailingslashit(get_template_directory() ). '/demo-data/first-demo.png',
			
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'dgtheme' ),

			'preview_url'                  => 'http://www.tusherikbal.com',
		),


		
	);
}


add_filter( 'ocdi/import_files', 'dgtheme_import_files' );