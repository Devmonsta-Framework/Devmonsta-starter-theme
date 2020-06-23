<?php

class Customizer extends \Devmonsta\Libs\Customizer
{

    public function builder_template_id() {
        $header_settings = sassico_option('header_builder_select');
        $header_id = '';
        $header_builder_enable = sassico_option('header_builder_control_enable');
        if($header_builder_enable=='yes'){
            $header_id =   $header_settings;
        }
        echo $header_id;
        return $header_id;
    }

    public function register_controls()
    {

        /**
         * Add parent panels
         */

        include_once(get_template_directory(  ) . '/core/helpers/functions/global.php');
        $this->add_panel([
            'id'             => 'xs_theme_option_panel',
            'priority'       => 0,
            'theme_supports' => '',
            'title'          => __('Theme settings', 'sassico'),
            'description'    => __('Theme options panel', 'sassico'),
        ]);


        /**
         * General settings here
         */
        $this->add_section([
            'id'       => 'general_settings_section',
            'title'    => __('General Settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);

        $this->add_control([
            'id'      => 'general_main_logo',
            'type'    => 'media',
            'section' => 'general_settings_section',
            'label'   => esc_html__('Main Logo', 'sassico'),
            'desc'   => esc_html__("It's the main logo, mostly it will be shown on dark or coloreful type area.
            ", 'sassico'),
        ]);
        // $this->add_control([
        //     'id'              => 'general_social_links',
        //     'label'           => esc_html__('Social Links', 'sassico'),
        //     'type'            => 'repeater',
        //     'section'         => 'general_settings_section',
        //     'add_button_text' => esc_html__('Add new Social', 'sassico'),
        //     'fields'          => [
        //         [
        //             'id'    => 'title',
        //             'label' => esc_html__('Title', 'sassico'),
        //             'type'  => 'text',
        //         ],

        //         [
        //             'id'    => 'icon_class',
        //             'label' => esc_html__('Social icon', 'sassico'),
        //             'type'  => 'icon',
        //         ],
        //         [
        //             'id'    => 'url',
        //             'label' => esc_html__('Social Link', 'sassico'),
        //             'type'  => 'text',
        //         ],

        //     ],
        // ]);

        /**
         * Header settings here
         */
        $this->add_section([
            'id'       => 'xs_header_settings_section',
            'title'    => __('Header Settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);

        /**
         * Header builder switch here
         */
        $this->add_control([
            'id'      => 'header_builder_control_enable',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Header builder Enable ?', 'sassico'),
            'desc'    => esc_html__('Do you want to enable n in header ?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_builder_select',
            'type'    => 'select',
            'value'   => '1',
            'label' => esc_html__('Header', 'sassico'),
            'section' => 'xs_header_settings_section',
            'choices' => sassico_ekit_headers(),
            'conditions' => [
                [
                    'control_name'  => 'header_builder_control_enable',
                    'operator' => '==',
                    'value'    => "yes",
                ]
            ],
        ]);

        $this->add_control([
            'id'      => 'header_builder_select_html',
            'section' => 'xs_header_settings_section',
            'label'   => __('Html Input', 'sassico'),
            'desc'    => __('html description goes here', 'sassico'),
            'type'    => 'html',
            'value'   => '<h2 class="header_builder_edit"><a class="xs_builder_edit_link" style="text-transform: uppercase; color:green" target="_blank" href='. admin_url( 'post.php?action=elementor&post='.$this->builder_template_id() ). '>'. esc_html('Edit content here.'). '</a><h2>',
            'conditions' => [
                [
                    'control_name'  => 'header_builder_control_enable',
                    'operator' => '==',
                    'value'    => "",
                ]
            ],
        ]);

        $this->add_control([
            'id'      => 'header_contact_mail',
            'type'    => 'text',
            'default' => esc_html__('contact@domain.com', 'sassico'),
            'label'   => __('Contact mail', 'sassico'),
            'section' => 'xs_header_settings_section',
            'conditions' => [
                [
                    'control_name'  => 'header_builder_control_enable',
                    'operator' => '==',
                    'value'    => "",
                ]
            ],
        ]);

        $this->add_control([
            'id'      => 'header_contact_address',
            'type'    => 'text',
            'default' => esc_html__('105 Roosevelt Street CA', 'sassico'),
            'label'   => esc_html__('Contact address title', 'sassico'),
            'section' => 'xs_header_settings_section',
        ]);

        $this->add_control([
            'id'      => 'header_contact_address_url',
            'type'      => 'url',
            'label'      => esc_html__('Address link', 'sassico'),
            'desc'      => esc_html__('Navigation address link.', 'sassico'),
            'default' => esc_url('#'),
            'section' => 'xs_header_settings_section',
        ]);

        $this->add_control([
            'id'      => 'header_Contact_number',
            'type'      => 'text',
            'label'      => esc_html__('Contact number', 'sassico'),
            'default' => esc_html__('+1 212-554-1515', 'sassico'),
            'section' => 'xs_header_settings_section',
        ]);

        $this->add_control([
            'id'      => 'header_nav_search_section',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Search button show', 'sassico'),
            'desc'    => esc_html__('Do you want to show search button in header ?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_nav_sticky',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Sticky header', 'sassico'),
            'desc'    => esc_html__('Do you want to enable sticky nav?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_top_info_show',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Show Topbar', 'sassico'),
            'desc'    => esc_html__('Do you want to enable show topbar?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_nav_search_section',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Search button show', 'sassico'),
            'desc'    => esc_html__('Do you want to show search button in header ?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_quota_button',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Show Quote button', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_quota_text',
            'type'      => 'text',
            'label'      => esc_html__('Quote text', 'sassico'),
            'desc'      => esc_html__('Navigation quote text.', 'sassico'),
            'default' => esc_html__('Get a quote', 'sassico'),
            'section' => 'xs_header_settings_section',
            'conditions' => [
                [
                    'control_name'  => 'header_quota_button',
                    'operator' => '==',
                    'value'    => "yes",
                ]
            ],
        ]);

        $this->add_control([
            'id'      => 'header_quota_url',
            'type'      => 'url',
            'label'      => esc_html__('Quote link', 'sassico'),
            'desc'      => esc_html__('Navigation quote link.', 'sassico'),
            'default' => esc_url('#'),
            'section' => 'xs_header_settings_section',
            'conditions' => [
                [
                    'control_name'  => 'header_quota_button',
                    'operator' => '==',
                    'value'    => "yes",
                ]
            ],
        ]);


        /**
         * Banner settings here
         */
        $this->add_section([
            'id'       => 'banner_settings_section',
            'title'    => esc_html__('Banner settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);

        /**
         * body background control
         */

        $this->add_control([
            'id'      => 'page_show_banner',
            'type'    => 'switcher',
            'default' => 'yes',
            'label'   => esc_html__('Show banner?', 'sassico'),
            'desc'    => esc_html__('Show or hide the banner', 'sassico'),
            'section' => 'banner_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'page_show_breadcrumb',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Show Breadcrumb?', 'sassico'),
            'desc'    => esc_html__('Show or hide the Breadcrumb', 'sassico'),
            'section' => 'banner_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'    => 'page_banner_title',
            'type'  => 'text',
            'label' => esc_html__('Banner Title', 'sassico'),
            'section' => 'banner_settings_section',
        ]);

        $this->add_control([
            'id'      => 'banner_page_image',
            'type'    => 'media',
            'section' => 'banner_settings_section',
            'label'   => esc_html__('Media', 'sassico'),
        ]);

        $this->add_control([
            'id'      => 'show_page_banner_overlay',
            'type'    => 'switcher',
            'default' => 'yes',
            'label'   => esc_html__('Show background overlay', 'sassico'),
            'section' => 'banner_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);


        $this->add_control([
            'id'       => 'page_banner_overlay_color',
            'section'  => 'banner_settings_section',
            'type'     => 'rgba-color-picker',
            'label'    => esc_html__('Banner Overlay Color', 'sassico'),
            'conditions' => [
                [
                    'control_name'  => 'show_page_banner_overlay',
                    'operator' => '==',
                    'value'    => "yes",
                ]
            ],
        ]);

        /**
         * Typography settings here
         */
        $this->add_section([
            'id'       => 'typography_settings_section',
            'title'    => esc_html__('Style settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);

        /**
         * body background control
         */
        $this->add_control([
            'id'      => 'style_body_bg',
            'label'   => esc_html__('Body background', 'sassico'),
            'type'    => 'color',
            'section' => 'typography_settings_section',
            'default' => '#FFFFFF',
        ]);

        /**
         * primary color control
         */
        $this->add_control([
            'id'      => 'style_primary',
            'label'      => esc_html__('Primary color', 'sassico'),
            'type'    => 'color',
            'section' => 'typography_settings_section',
            'default' => '#042ff8',
        ]);

        /**
         * secondary color control
         */
        $this->add_control([
            'id'      => 'secondary_color',
            'label'      => esc_html__('Secondary color', 'sassico'),
            'type'    => 'color',
            'section' => 'typography_settings_section',
            'default' => '#f3bc3f',
        ]);

        /**
         * Control for body Typography Input
         */
        $this->add_control([
            'id'         => 'body_font',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Roboto',
                'weight'         => 400,
                'size'           => 16,
                'line_height'    => 26,
                'color'          => '#777777',
                'letter_spacing' => 0
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Body Typhography', 'sassico'),
        ]);

        /**
         * Control for H1 Typography Input
         */
        $this->add_control([
            'id'         => 'heading_font_one',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Poppins',
                'weight'         => 700,
                'size'           => 36,
                'color'          => '#1a1a1a',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Heading H1 Typhography', 'sassico'),
        ]);

        /**
         * Control for H2 Typography Input
         */
        $this->add_control([
            'id'         => 'heading_font_two',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Poppins',
                'weight'         => 700,
                'size'           => 30,
                'color'          => '#1a1a1a',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Heading H2 Typhography', 'sassico'),
        ]);

        /**
         * Control for H3 Typography Input
         */
        $this->add_control([
            'id'         => 'heading_font_three',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Poppins',
                'weight'         => 700,
                'size'           => 24,
                'color'          => '#1a1a1a',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Heading H3 Typhography', 'sassico'),
        ]);

        /**
         * Control for H4 Typography Input
         */
        $this->add_control([
            'id'         => 'heading_font_four',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Poppins',
                'weight'         => 700,
                'size'           => 18,
                'color'          => '#1a1a1a',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Heading H4 Typhography', 'sassico'),
        ]);

        /**
         * Control for H5 Typography Input
         */
        $this->add_control([
            'id'         => 'heading_font_five',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Poppins',
                'weight'         => 700,
                'size'           => 16,
                'color'          => '#1a1a1a',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Heading H5 Typhography', 'sassico'),
        ]);

        /**
         * Control for H6 Typography Input
         */
        $this->add_control([
            'id'         => 'heading_font_six',
            'section'    => 'typography_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Poppins',
                'weight'         => 700,
                'size'           => 14,
                'color'          => '#1a1a1a',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'weight'         => true,
                'color'          => true,
            ],
            'label'      => __('Heading H6 Typhography', 'sassico'),
        ]);


        /**
         * Blog settings here
         */
        $this->add_section([
            'id'       => 'blog_settings_section',
            'title'    => esc_html__('Blog settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);

        /**
         * Blog settings body controls here
         */
        $this->add_control([
            'id'      => 'blog_sidebar',
            'type'    => 'select',
            'value'   => '1',
            'label' => esc_html__('Sidebar', 'sassico'),
            'section' => 'blog_settings_section',
            'choices' => [
                '1' => esc_html__('No sidebar', 'sassico'),
                '2' => esc_html__('Left Sidebar', 'sassico'),
                '3' => esc_html__('Right Sidebar', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'blog_author',
            'type'    => 'switcher',
            'default' => 'yes',
            'label'   => esc_html__('Blog author', 'sassico'),
            'desc'    => esc_html__('Do you want to show blog author?', 'sassico'),
            'section' => 'blog_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'blog_related_post',
            'type'    => 'switcher',
            'default' => 'no',
            'label'      => esc_html__('Blog related post', 'sassico'),
            'desc'      => esc_html__('Do you want to show single blog related post?', 'sassico'),
            'section' => 'blog_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'blog_related_post_number',
            'type'    => 'text',
            'label'   => esc_html__('Related post count', 'sassico'),
            'default' => '3',
            'section' => 'blog_settings_section',
        ]);


        /**
         * Footer Settings here
         */
        $this->add_section([
            'id'       => 'footer_settings_section',
            'title'    => esc_html__('Footer settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);
        $this->add_control([
            'id'       => 'xs_footer_bg_color',
            'label'    => esc_html__('Background color', 'sassico'),
            'type'     => 'color',
            'section'  => 'footer_settings_section',
            'default'  => '#042ff8',
            'desc'     => esc_html__('description of rgba-color-picker goes here', 'sassico'),

        ]);

        $this->add_control([
            'id'      => 'xs_footer_text_color',
            'label'   => esc_html__('Text color', 'sassico'),
            'type'    => 'color',
            'section' => 'footer_settings_section',
            'default' => '#666',
            'desc'    => esc_html__('You can change the text color with rgba color or solid color', 'sassico'),

        ]);
        $this->add_control([
            'id'         => 'xs_footer_link_color',
            'label'      => esc_html__('Link Color', 'sassico'),
            'type'       => 'color',
            'section'    => 'footer_settings_section',
            'default'    => '#666',
            'desc'       => esc_html__('You can change the text color with rgba color or solid color', 'sassico'),

        ]);
        $this->add_control([
            'id'        => 'xs_footer_widget_title_color',
            'label'     => esc_html__('Widget Title Color', 'sassico'),
            'type'      => 'color',
            'section'   => 'footer_settings_section',
            'default'   => '#142355',
            'desc'      => esc_html__('You can change the text color with rgba color or solid color', 'sassico'),

        ]);
        $this->add_control([
            'id'        => 'copyright_bg_color',
            'label'     => esc_html__('Copyright Background Color', 'sassico'),
            'type'      => 'color',
            'section'   => 'footer_settings_section',
            'default'   => '#142355',
            'desc'      => esc_html__('You can change the copyright background color with rgba color or solid color', 'sassico'),

        ]);
        $this->add_control([
            'id'        => 'footer_copyright_color',
            'label'     => esc_html__('Copyright Text Color', 'sassico'),
            'type'      => 'color',
            'section'   => 'footer_settings_section',
            'desc'      => esc_html__('You can change the copyright background color with rgba color or solid color', 'sassico'),

        ]);
        $this->add_control([
            'id'          => 'footer_copyright',
            'type'        => 'textarea',
            'section'     => 'footer_settings_section',
            'value'       =>  esc_html__('&copy; 2019, Sassico. All rights reserved', 'sassico'),
            'label'       =>  esc_html__('Copyright text', 'sassico'),
            'desc'        =>  esc_html__('This text will be shown at the footer of all pages.', 'sassico'),
        ]);


        $this->add_control([
            'id'        => 'footer_padding_top',
            'label'     => esc_html__('Footer Padding Top', 'sassico'),
            'desc'      => esc_html__('Use Footer Padding Top', 'sassico'),
            'type'      => 'text',
            'section'   => 'footer_settings_section',
            'default'   => '100px',
        ]);

        $this->add_control([
            'id'        => 'footer_padding_bottom',
            'label'	    => esc_html__( 'Footer Padding Bottom', 'sassico' ),
            'desc'	    => esc_html__( 'Use Footer Padding Bottom', 'sassico' ),
            'type'      => 'text',
            'section'   => 'footer_settings_section',
            'default'   => '100px',
        ]);

        $this->add_control([
            'id'      => 'back_to_top',
            'type'    => 'switcher',
            'default' => 'no',
            'label'   => esc_html__('Back to top', 'sassico'),
            'section' => 'footer_settings_section',
            'left-choice'  => [
                'no' => esc_html__('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => esc_html__('Yes', 'sassico'),
            ],
        ]);


        $this->add_section([
            'id'       => 'dm_new_controls',
            'title'    => esc_html__('Footer settings', 'sassico'),
            'panel'    => 'xs_theme_option_panel',
            'priority' => 10,
        ]);

        $this->add_control([
            'id'      => 'dm_toggle',
            'label'   => __('Toggle', 'sassico'),
            'section' => 'dm_new_controls',
            'type'    => 'toggle',
        ]);

    }
}
