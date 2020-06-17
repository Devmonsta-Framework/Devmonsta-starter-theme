<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */
if(!class_exists( 'WooCommerce' )) return;

$options = [
	'xs_woocommerce_setting' => [
		'title' => esc_html__('WooCommerce', 'sassico'),

		'options' => [
			'xs_shop_banner_setting' => [
				'type'        => 'popup',
				'label'       => esc_html__('Shop banner settings', 'sassico'),
				'popup-title' => esc_html__('Shop banner settings', 'sassico'),
				'button'      => esc_html__('Edit Shop Banner', 'sassico'),
				'size'        => 'medium', // small, medium, large
				'popup-options' => [
					'xs_shop_page_show_banner' => [
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

					'xs_shop_banner_image'	 =>array(
						'label'			 => esc_html__( 'Banner image', 'sassico' ),
						'type'			 => 'upload',
						'images_only'	 => true,
						'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),

					),
					'shop_show_background_overlay_switch' => [
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
                    'shop_show_background_overlay' => array(
                        'type' => 'multi-picker',
                        'picker' => 'shop_show_background_overlay_switch',
                        'choices' => array(
                            'yes' => array(
                                'shop_banner_overlay_style' => [
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

			'xs_single_product_blog_banner_setting' => [
				'type'         => 'popup',
				'label'        => esc_html__('Single Product banner settings', 'sassico'),
				'popup-title'  => esc_html__('Single Product banner settings', 'sassico'),
				'button'       => esc_html__('Edit Single Product Banner', 'sassico'),
				'size'         => 'medium', // small, medium, large
				'popup-options' => [
					'xs_single_product_show_banner' => [
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
					'xs_single_product_banner_blog_image'	 =>[
						'type'  => 'upload',
						'label' => esc_html__('Image', 'sassico'),
						'desc'  => esc_html__('Banner blog image', 'sassico'),
						'images_only' => true,
						'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
					],
					'shop_single_show_background_overlay_switch' => [
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
                    'shop_single_show_background_overlay' => array(
                        'type' => 'multi-picker',
                        'picker' => 'shop_single_show_background_overlay_switch',
                        'choices' => array(
                            'yes' => array(
                                'shop_single_banner_overlay_style' => [
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

			'xs_woo_shop_page_setting' => [
				'type'         => 'radio',
				'value' => 'fluid',
				'label' => __('Shop Page Layout', 'sassico'),
				'desc'  => __('Select shop page layout style', 'sassico'),
				'choices' => [ // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
					'fluid' => __('Fluid', '{domain}'),
					'lidebar' => __('Left Sidebar', 'sassico'),
					'rsidbar' => __('Right Sidebar', 'sassico'),
				],
				// Display choices inline instead of list
				'inline' => true,
			],
		],
	],
];