<?php

function sassico_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'http://wp.xpeedstudio.com/demo-content/sassico';
	$demos_array			 = array(
		'default'			 => array(
			'title'			 => esc_html__( '1-12 Demos with one pages', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/default/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'home-agency'			 => array(
			'title'			 => esc_html__( 'Home Agency', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/home-agency/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'home-travel-app'			 => array(
			'title'			 => esc_html__( 'Home Travel App', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/home-travel-app/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'home-saas'			 => array(
			'title'			 => esc_html__( 'Home SAAS', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/home-saas/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'saas-app'			 => array(
			'title'			 => esc_html__( 'SAAS App', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/saas-app/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'software-tools'			 => array(
			'title'			 => esc_html__( 'Software Tools', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/software-tools/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'saas-business'			 => array(
			'title'			 => esc_html__( 'SAAS Business', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/saas-business/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'modern-agency'			 => array(
			'title'			 => esc_html__( 'Modern Agency', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/modern-agency/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'rtl'			 => array(
			'title'			 => esc_html__( 'RTL Demos with one pages', 'sassico' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/rtl/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', 'sassico_fw_ext_backups_demos' );