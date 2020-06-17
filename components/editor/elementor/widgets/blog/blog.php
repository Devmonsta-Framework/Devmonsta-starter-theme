<?php

namespace Elementor;
use \ElementsKit\Modules\Controls\Controls_Manager as ElementsKit_Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit;

class Sassico_Blog_Widget extends Widget_Base {

    public function get_name() {
        return 'sassico-blog';
    }

    public function get_title() {
        return esc_html__( 'SASSICO Blog', 'sassico' );
    }

    public function get_icon() {
        return 'eicon-icon-box';
    }

    public function get_categories() {
        return [ 'sassico-elements' ];
    }

    protected function _register_controls() {
        // Main Controls
        $this->start_controls_section(
			'sassico_blog_content_section',
			[
				'label' => __( 'Content', 'sassico' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
        );
        
        $this->add_control(
            'xs_blog_style',
            [
                'label' => esc_html__('Choose Style', 'sassico'),
                'type' => ElementsKit_Controls_Manager::IMAGECHOOSE,
                'default' => 'style_one',
                'options' => [
                    'style_one' => [
                        'title' => esc_html__( 'Style One', 'sassico' ),
                        'imagelarge' => SASSICO_IMG . '/imagechoose/blog/blog-1.png',
                        'imagesmall' => SASSICO_IMG . '/imagechoose/blog/blog-1.png',
                        'width' => '100%',
                    ],
                    'style_two' => [
                        'title' => esc_html__( 'Style Two', 'sassico' ),
                        'imagelarge' => SASSICO_IMG . '/imagechoose/blog/blog-2.png',
                        'imagesmall' => SASSICO_IMG . '/imagechoose/blog/blog-2.png',
                        'width' => '100%',
                    ],
                ],
            ]
        );
        
        $this->add_control(
			'blog_style_changer',
			[
				'label' => __( 'Blog style', 'sassico' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'image_only',
				'options' => [
					'image_only'  => __( 'Image Only', 'sassico' ),
					'text_only' => __( 'Text Only', 'sassico' ),
					'mixed_up' => __( 'Mixed up', 'sassico' ),
                ],
                'condition' => [
                    'xs_blog_style' => 'style_two'
                ]
			]
		);
		
		$this->add_control(
            'sassico_blog_posts_order_by',
            [
                'label'   => esc_html__( 'Order by', 'sassico' ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'date'          => esc_html__( 'Date', 'sassico' ),
                    'title'         => esc_html__( 'Title', 'sassico' ),
                    'author'        => esc_html__( 'Author', 'sassico' ),
                    'modified'      => esc_html__( 'Modified', 'sassico' ),
                    'comment_count' => esc_html__( 'Comments', 'sassico' ),
                ],
                'default' => 'date',
            ]
        );
 
        $this->add_control(
            'sassico_blog_posts_sort',
            [
                'label'   => esc_html__( 'Order', 'sassico' ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'sassico' ),
                    'DESC' => esc_html__( 'DESC', 'sassico' ),
                ],
                'default' => 'DESC',
            ]
        );
 
        $this->add_control(
            'sassico_blog_posts_clumnn',
            [
                'label'   => esc_html__( 'Order', 'sassico' ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    '4'  => esc_html__( '3 Column', 'sassico' ),
                    '6' => esc_html__( '2 Column', 'sassico' ),
                ],
                'default' => '4',
            ]
        );

        $this->add_control(
            'sassico_blog_posts_num',
            [
                'label'     => esc_html__( 'Posts Count', 'sassico' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 1,
                'max'       => 100,
                'default'   => 1,
            ]
        );

        $this->add_control(
            'sassico_blog_posts_offset',
            [
                'label'     => esc_html__( 'Offset', 'sassico' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 0,
                'max'       => 20,
                'default'   => 0,
            ]
        );

        $this->add_control('sassico_post_cat',
            [
                'label'     => esc_html__( 'Category', 'sassico' ),
                'type'      => \Elementor\Controls_Manager::SELECT2,
                'multiple'  => true,
                'default'   => '',
                'options'   => $this->getCategories(),
            ]
        );

        $this->end_controls_section();
        
        // Container
        $this->start_controls_section(
			'sassico_blog_container',
			[
				'label' => __( 'Container', 'sassico' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'sassico_blog_container_bg',
			[
				'label' => __( 'Background Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sassico-blog-post' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .xs_blog_text_card' => 'background-color: {{VALUE}}',
				],
			]
        );
        
        $this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'sassico_blog_overlay_bg',
				'label' => __( 'Overlay', 'sassico' ),
				'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .xs_blog_image_card::before',
                'explode' => [
                    'image',
                ],
                'condition' => [
                    'xs_blog_style' => 'style_two',
                    'blog_style_changer!' => 'text_only'
                ]
			]
		);


        $this->end_controls_section();
        
        // Content
        $this->start_controls_section(
			'blog_title_style_tab',
			[
				'label' => __( 'Content', 'sassico' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'blog_title_content_typography',
				'label' => __( 'Title Typography', 'sassico' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .sassico-post-body .entry-title, {{WRAPPER}} .xs_blog_image_card .entry-title',
                'condition' => [
                    'blog_style_changer!' => 'text_only',
                ]
			]
        );
        
        $this->add_responsive_control(
			'blog_title_color',
			[
                'label' => __( 'Title Color', 'sassico' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .entry-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style_changer!' => 'text_only',
                ]
            ]
        );
        
		$this->add_control(
            'blog_content_hr',
            [
            'type' => Controls_Manager::DIVIDER,
            'condition' => [
                'blog_style_changer!' => 'image_only',
                'xs_blog_style' => 'style_two'
                ]
            ]
        );
            
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
            'name' => 'blog_exerpt_typography',
            'label' => __( 'Exerpt Typography', 'sassico' ),
            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .xs_blog_text_card .entry-content>p',
            'condition' => [
                    'blog_style_changer!' => 'image_only',
                    'xs_blog_style' => 'style_two'
                ]
            ]
        );
                
        $this->add_responsive_control(
            'blog_exerpt_color',
            [
                'label' => __( 'Exerpt Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
                    '{{WRAPPER}} .xs_blog_text_card .entry-content>p' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style_changer!' => 'image_only',
                    'xs_blog_style' => 'style_two'
                ]
			]
		);

		$this->end_controls_section();
        
        // Meta
        $this->start_controls_section(
			'sassico_blog_meta',
			[
				'label' => __( 'Meta', 'sassico' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'sassico_blog_category_color',
			[
				'label' => __( 'Category Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sassico-blog-post .post-cat' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'xs_blog_style!' => 'style_two',
                ]
			]
        );
        
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sassico_blog_category_typography',
				'label' => __( 'Typography', 'sassico' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .sassico-blog-post .post-cat',
                'separetor' => 'before',
                'condition' => [
                    'xs_blog_style!' => 'style_two',
                ]
			]
		);

		$this->add_responsive_control(
			'sassico_blog_author_color',
			[
				'label' => __( 'Author Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .post-author-info .author-name' => 'color: {{VALUE}}',
				],
			]
        );
        
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sassico_blog_author_typography',
				'label' => __( 'Typography', 'sassico' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .post-author-info .author-name',
                'separetor' => 'before',
			]
		);

		$this->add_responsive_control(
			'sassico_blog_date_color',
			[
				'label' => __( 'Date Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .post-author-info .post-meta-date' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'xs_blog_style!' => 'style_two',
                ]
			]
        );
        
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sassico_blog_date_typography',
				'label' => __( 'Date Typography', 'sassico' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .post-author-info .post-meta-date',
                'separetor' => 'before',
                'condition' => [
                    'xs_blog_style!' => 'style_two',
                ]
			]
		);

        $this->end_controls_section();
        
        // Button
        $this->start_controls_section(
			'blog_button_style_section',
			[
				'label' => __( 'Button', 'sassico' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'xs_blog_style!' => 'style_one',
                    'blog_style_changer!' => 'image_only',
                ]
			]
		);

		$this->add_control(
			'blog_button_title_color',
			[
				'label' => __( 'Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .xs_blog_text_card .entry-footer .btn' => 'color: {{VALUE}}',
				],
			]
		);
        
        $this->add_control(
			'blog_button_title_bg_color',
			[
				'label' => __( 'Background Color', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .xs_blog_text_card .entry-footer .btn' => 'background-color: {{VALUE}}',
				],
			]
        );
        
        
		$this->add_control(
			'blog_button_hr',
			[
				'type' => Controls_Manager::DIVIDER,
			]
        );
        
        $this->add_control(
			'blog_button_title_color_hover',
			[
				'label' => __( 'Color Hover', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .xs_blog_text_card .entry-footer .btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
        
        $this->add_control(
			'blog_button_title_bg_color_hover',
			[
				'label' => __( 'Background Color Hover', 'sassico' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .xs_blog_text_card .entry-footer .btn:hover' => 'background-color: {{VALUE}}',
				],
			]
        );

		$this->end_controls_section();

    }

    protected function render( ) {
       $settings = $this->get_settings_for_display();

       extract($settings);
       $sassico_blog_posts_offset = ($sassico_blog_posts_offset == '') ? 0 : $sassico_blog_posts_offset;

       $default    = [
           'orderby'           => array( $sassico_blog_posts_order_by => $sassico_blog_posts_sort ),
           'posts_per_page'    => $sassico_blog_posts_num,
           'offset'            => $sassico_blog_posts_offset,
           'cat'               => $sassico_post_cat,
       ];

        $post_query = new \WP_Query( $default );
        
        include SASSICO_SHORTCODE_DIR_WIDGETS.'/blog/style/'.$settings['xs_blog_style'].'.php'; 
    }
    protected function _content_template() { }

    public function getCategories(){
        $terms = get_terms( array(
            'taxonomy'    => 'category',
            'hide_empty'  => false,
        ) );


        $cat_list = [];
        if(is_array($terms) && '' != $terms) :
        foreach($terms as $post) {

            $cat_list[$post->term_id]  = [$post->name];
        }
       endif;
        return $cat_list;
    }
}