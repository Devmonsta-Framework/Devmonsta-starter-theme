<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */

 
$options = [
    'banner_setting' => [
        'title' => esc_html__('Banner settings', 'sassico'),

        'options' => [
            'page_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Page banner settings', 'sassico'),
                'popup-title' => esc_html__('Page banner settings', 'sassico'),
                'button'      => esc_html__('Edit page Banner', 'sassico'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'page_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'sassico' ),
                        'desc'          => esc_html__('Show or hide the banner', 'sassico'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'sassico' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'sassico' ),
                        ],
                    ],
                    'page_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'sassico' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'sassico'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'sassico' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'sassico' ),
                        ],
                    ],
                    'banner_page_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'sassico' ),
                        'value'  => '',
                    ],
                    'banner_page_image'	 =>array(
                        'label'			 => esc_html__( 'Banner image', 'sassico' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),     
                    ),
                    'page_show_background_overlay_switch' => [
                        'type'			   => 'switch',
                        'label'			   => esc_html__( 'Show background overlay', 'sassico' ),
                        'desc'			   => '' ,
                        'value'           => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__('Yes', 'sassico'),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__('No', 'sassico'),
                        ],
                    ],
                    'page_show_background_overlay' => array(
                        'type' => 'multi-picker',
                        'picker' => 'page_show_background_overlay_switch',
                        'choices' => array(
                            'yes' => array(
                                'page_banner_overlay_style' => [
                                    'type'  => 'rgba-color-picker',
                                    'value' => 'rgba(0, 0, 0, 0.4)',
                                    'label' => __('Banner Overlay Color', 'sassico'),
                                ],
                            ),
                            'no' => array(
        
                            )
                        )
                    ),
                ],
            ], 
        
            'blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Blog banner settings', 'sassico'),
                'popup-title'  => esc_html__('Blog banner settings', 'sassico'),
                'button'       => esc_html__('Edit Blog Banner', 'sassico'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blog_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'sassico' ),
                        'desc'          => esc_html__('Show or hide the banner', 'sassico'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'sassico' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'sassico' ),
                        ],
                    ],
                    'blog_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'sassico' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'sassico'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'sassico' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'sassico' ),
                        ],
                    ],
                    'banner_blog_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'sassico' ),
                    ],
                   
                    'banner_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'sassico'),
                        'desc'  => esc_html__('Banner blog image', 'sassico'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                    ),
                    'blog_show_background_overlay_switch' => [
                        'type'			   => 'switch',
                        'label'			   => esc_html__( 'Show background overlay', 'sassico' ),
                        'desc'			   => '' ,
                        'value'           => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__('Yes', 'sassico'),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__('No', 'sassico'),
                        ],
                    ],
                    'blog_show_background_overlay' => array(
                        'type' => 'multi-picker',
                        'picker' => 'blog_show_background_overlay_switch',
                        'choices' => array(
                            'yes' => array(
                                'blog_banner_overlay_style' => [
                                    'type'  => 'rgba-color-picker',
                                    'value' => 'rgba(0, 0, 0, 0.4)',
                                    'label' => __('Banner Overlay Color', 'sassico'),
                                ],
                            ),
                            'no' => array(
        
                            )
                        )
                    ),
                ],
            ],

        ],
    ],
];