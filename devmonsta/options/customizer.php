<?php

class Customizer extends \Devmonsta\Libs\Customizer
{

    public function register_controls()
    {

        /**
         * Add parent panels
         */
        $this->add_panel([
            'id'             => 'devmonsta_panel',
            'priority'       => 0,
            'theme_supports' => '',
            'title'          => __('Theme settings', 'devmonsta'),
            'description'    => __('Theme options panel', 'devmonsta'),
        ]);


        /**
         * Header settings here
         */
        $this->add_section([
            'id'       => 'xs_header_settings_section',
            'title'    => __('Header Control', 'devmonsta'),
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ]);

        $this->add_control([
            'id'      => 'header_contact_mail',
            'type'    => 'text',
            'default' => esc_html__('contact@domain.com', 'sassico'),
            'label'   => __('Contact mail', 'devmonsta'),
            'section' => 'xs_header_settings_section',
        ]);

        $this->add_control([
            'id'      => 'header_contact_address',
            'type'    => 'text',
            'default' => esc_html__('105 Roosevelt Street CA', 'sassico'),
            'label'   => __('Contact address title', 'devmonsta'),
            'section' => 'xs_header_settings_section',
        ]);

        $this->add_control([
            'id'      => 'header_contact_address_url',
            'type'	  => 'url',
            'label'	  => esc_html__( 'Address link', 'sassico' ),
            'desc'	  => esc_html__( 'Navigation address link.', 'sassico' ),
            'default' => esc_url( '#' ),
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
            'label'   => __('Search button show', 'sassico'),
            'desc'    => __('Do you want to show search button in header ?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => __('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => __('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_nav_sticky',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => __('Sticky header', 'sassico'),
            'desc'    => __('Do you want to enable sticky nav?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => __('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => __('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_top_info_show',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => __('Show Topbar', 'sassico'),
            'desc'    => __('Do you want to enable show topbar?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => __('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => __('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_nav_search_section',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => __('Search button show', 'sassico'),
            'desc'    => __('Do you want to show search button in header ?', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => __('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => __('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_quota_button',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => __('Show CTA button', 'sassico'),
            'section' => 'xs_header_settings_section',
            'left-choice'  => [
                'no' => __('No', 'sassico'),
            ],
            'right-choice' => [
                'yes' => __('Yes', 'sassico'),
            ],
        ]);

        $this->add_control([
            'id'      => 'header_quota_text',
            'type'      => 'text',
            'label'      => esc_html__('Quote text', 'sassico'),
            'desc'      => esc_html__('Navigation quote text.', 'sassico'),
            'default' => esc_html__('Get a quote', 'sassico'),
            'section' => 'xs_header_settings_section',
        ]);

        $this->add_control([
            'id'      => 'header_quota_url',
            'type'      => 'url',
            'label'      => esc_html__('Quote link', 'sassico'),
            'desc'      => esc_html__('Navigation quote link.', 'sassico'),
            'default' => esc_url('#'),
            'section' => 'xs_header_settings_section',
        ]);


        /**
         * Banner settings here
         */
        $this->add_section([
            'id'       => 'banner_settings_section',
            'title'    => esc_html__('Banner settings', 'sassico'),
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ]);


        $this->add_control([
            'id'      => 'page_show_banner',
            'type'    => 'switcher',
            'default' => 'right-choice',
            'label'   => esc_html__('Show banner?', 'sassico'),
            'desc'          => esc_html__('Show or hide the banner', 'sassico'),
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
            'id'      => 'page_banner_title',
            'type'      => 'text',
            'label'      => esc_html__('Banner Title', 'sassico'),
            'section' => 'banner_settings_section',
        ]);

        $this->add_control([
            'id'      => 'banner_page_image',
            'type'    => 'media',
            'section' => 'banner_settings_section',
            'label'   => esc_html__('Media', 'sassico'),
        ]);

        $this->add_control([
            'id'      => 'page_show_background_overlay_switch',
            'type'    => 'switcher',
            'default' => 'right-choice',
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
            'id'       => 'page_banner_overlay_style',
            'section'  => 'banner_settings_section',
            'type'     => 'rgba-color-picker',
            'label'    => esc_html__('Banner Overlay Color', 'sassico'),
            'conditions' => [
                [
                    'control_name'  => 'page_show_background_overlay_switch',
                    'operator' => '==',
                    'value'    => "yes",
                ]
            ],
        ]);



        /**
         * test controls
         */
        $this->add_section([
            'id'       => 'devmonsta_text_settings_section',
            'title'    => __('Text settings', 'devmonsta'),
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ]);

        $this->add_section([
            'id'       => 'dm_repeater_section',
            'title'    => 'Devmonsta repeater section',
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ]);

        $this->add_section([
            'id'       => 'dm_new_controls',
            'title'    => 'New controls',
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ]);



        /**
         * ===========================================
         *      Customizer default control start
         * ===========================================
         */

        // /**
        //  * Control for text input
        //  */
        // $this->add_control( [
        //     'id'      => 'dm_ctrl_text_1',
        //     'type'    => 'text',
        //     'value'   => 'default text',
        //     'label'   => __( 'Text Input', 'devmonsta' ),
        //     'section' => 'devmonsta_text_settings_section',
        // ] );

        // /**
        //  * control for checkbox input
        //  */
        // $this->add_control( [
        //     'id'      => 'dm_checkbox',
        //     'section' => 'devmonsta_text_settings_section',
        //     'type'    => 'checkbox',
        //     'value'   => false, // checked/unchecked
        //     'label'   => __( 'Checkbox example', 'sassico' ),
        //     'desc'    => __( "checkbox example details", 'sassico' ),
        //     'text'    => __( 'Yes', 'sassico' ),
        // ] );

        // /**
        //  * control for radio input
        //  */
        // $this->add_control( [
        //     'type'        => 'radio',
        //     'id'          => 'dm_test_readio',
        //     'label'       => __( 'Custom Radio Selection' ),
        //     'description' => __( 'This is a custom radio input.' ),
        //     'choices'     => [
        //         'red'   => __( 'Red' ),
        //         'blue'  => __( 'Blue' ),
        //         'green' => __( 'Green' ),
        //     ],
        //     'section'     => 'devmonsta_text_settings_section',
        // ] );

        // /**
        //  * control for dropdown select
        //  */
        // $this->add_control( [
        //     'id'      => 'select',
        //     'section' => 'devmonsta_text_settings_section',
        //     'type'    => 'select',
        //     'value'   => 'choice-3',
        //     'label'   => __( 'Select Single', 'sassico' ),
        //     'desc'    => __( 'select description goes here', 'sassico' ),
        //     'choices' => [
        //         ''         => '---',
        //         'choice-1' => __( 'Choice One', 'sassico' ),
        //         'choice-2' => __( 'Choice Two', 'sassico' ),
        //         'choice-3' => __( 'Choice Three', 'sassico' ),
        //     ],
        // ] );

        // /**
        //  * control for textarea input
        //  */
        // $this->add_control( [
        //     'id'          => 'dm_textarea',
        //     'type'        => 'textarea',
        //     'section'     => 'devmonsta_text_settings_section',
        //     'label'       => __( 'Text area' ),
        //     'description' => __( 'This is text area desctription' ),
        //     "value"       => 'default value for text area',
        // ] );

        // /**
        //  * Control for dropdown-page input
        //  */
        // $this->add_control( [
        //     'id'          => 'dm_dropdown_pages',
        //     'type'        => 'dropdown-pages',
        //     'section'     => 'devmonsta_text_settings_section', // Add a default or your own section
        //     'label'       => __( 'Custom Dropdown Pages' ),
        //     'description' => __( 'This is a custom dropdown pages option.' ),
        // ] );

        // /**
        //  * control for url input
        //  */
        // $this->add_control( [
        //     'id'      => 'dm_url',
        //     'section' => 'devmonsta_text_settings_section',
        //     'type'    => 'url',
        //     'value'   => 'http://www.xs.com',
        //     'label'   => __( 'Enter valid URL', 'sassico' ),
        //     'desc'    => __( 'Url Description', 'sassico' ),
        // ] );

        // /**
        //  * Control for color-picker input
        //  */
        // $this->add_control( [
        //     'id'      => 'person_hair_color',
        //     'label'   => __( 'Hair Color', 'devmonsta' ),
        //     'type'    => 'color',
        //     'section' => 'devmonsta_text_settings_section',
        //     'default' => '#eeee22',
        // ] );

        // /**
        //  * Control for media-select input
        //  */
        // $this->add_control( [
        //     'id'      => 'dm_media',
        //     'type'    => 'media',
        //     'section' => 'devmonsta_text_settings_section',
        //     'label'   => __( 'Media', 'devmonsta' ),
        // ] );

        /**
         * ===========================================
         *      Default control end
         * ===========================================
         */



        /**
         * ===========================================
         *      Custom control start
         * ===========================================
         */


        /**
         * control for date-picker input
         */
        $this->add_control([
            'id'           => 'start_date',
            'section'      => 'devmonsta_text_settings_section',
            'type'         => 'date-picker',
            'value'        => '2020/05/10',
            'label'        => __('Date Picker', 'sassico'),
            'desc'         => __('date picker description goes here', 'sassico'),
            'monday-first' => true,         // The week will begin with Monday; for Sunday, set to false
            'min-date'     => "10-05-2020", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
            'max-date'     => null,         // By default there is not maximum date. Set a date in format Y-m-d as a start date
        ]);

        /**
         * control for datetime-picker input
         */
        $this->add_control([
            'id'              => 'dm_date_time',
            'section'         => 'devmonsta_text_settings_section',
            'type'            => 'datetime-picker',
            'label'           => __('Date Time Picker', 'sassico'),
            'value'           => '10-05-2020 12:00',
            'desc'            => __('date time picker description', 'sassico'),
            'datetime-picker' => [
                'date-format'  => 'Y-m-d',            // Format datetime.
                'time-format'  => 'H:i',              // Format datetime.
                'min-date'     => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'     => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'   => true,               // Show timepicker.
                'default-time' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ]);

        /**
         * control for datetime-range input
         */
        $this->add_control([
            'id'              => 'date_time_range_picker',
            'section'         => 'devmonsta_text_settings_section',
            'type'            => 'datetime-range',
            'value'           => [
                'from' => '10-05-2020 12:00',
                'to'   => '15-05-2020 04:00',
            ],
            'label'           => __('Date Time Range Picker', 'sassico'),
            'desc'            => __('date time range picker description', 'sassico'),
            'datetime-picker' => [
                'date-format' => 'Y-m-d',            // Format datetime.
                'time-format' => 'H:i',              // Format datetime.
                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'  => true,               // Show timepicker.
                'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ]);

        /**
         * control for dimension input
         */
        $this->add_control([
            'id'      => 'padding_dimension',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'dimensions',
            'label'   => __('Dimension Input', 'sassico'),
            'desc'    => __('Dimension text description', 'sassico'),
            'value'   => [
                'top'      => '2',
                'right'    => '3',
                'bottom'   => '4',
                'left'     => '56',
                'isLinked' => true,
            ],
        ]);

        /**
         * Control for switcher input
         */
        $this->add_control([
            'section'      => 'devmonsta_text_settings_section',
            'type'         => 'switcher',
            'id'           => 'dm_switcher',
            'value'        => 'hello',
            'label'        => __('Switcher', 'sassico'),
            'desc'         => __('Description', 'sassico'),
            'left-choice'  => [
                'goodbye' => __('Go Now', 'sassico'),
            ],
            'right-choice' => [
                'hello' => __('Hi', 'sassico'),
            ],
            'attr'         => ['class' => 'custom-class', 'data-foo' => 'bar'],
            // 'conditions'   => [
            //     [
            //         'control_name' => 'setting_1',
            //         'operator'     => '==',
            //         'value'        => true,
            //     ],
            //     [
            //         'control_name' => 'setting_3',
            //         'operator'     => '==',
            //         'value'        => true,
            //     ],
            // ],
        ]);

        /**
         * control for multiple-checkbox input
         */
        $this->add_control([
            'section' => 'devmonsta_text_settings_section',
            'id'      => 'multiple_checkboxes',
            'type'    => 'checkbox-multiple',
            'value'   => [
                'choice-1' => true,
                'choice-2' => true,
            ],
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'label'   => __('Multiple Chekbox', 'sassico'),
            'desc'    => __('Multi checkbox Description', 'sassico'),
            'choices' => [
                'choice-1' => __('Choice 1', 'sassico'),
                'choice-2' => __('Choice 2', 'sassico'),
                'choice-3' => __('Choice 3', 'sassico'),
            ],
            'inline'  => false,
        ]);

        /**
         * Control for Image picker Input
         */
        $this->add_control([
            'id'      => 'i_p',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'image-picker',
            'value'   => 'value-5',
            'label'   => __('Thumbnail Image Picker', 'sassico'),
            'desc'    => __('Description', 'sassico'),
            'choices' => [
                'value-1' => [
                    'small' => get_template_directory_uri() . '/images/thumbnail.jpg',
                    'large' => get_template_directory_uri() . '/images/thumbnail.jpg',
                ],
                'value-2' => [
                    'small' => get_template_directory_uri() . '/images/preview.png',
                    'large' => get_template_directory_uri() . '/images/preview.png',
                ],
                'value-3' => [
                    'small' => get_template_directory_uri() . '/images/a.jpg',
                    'large' => get_template_directory_uri() . '/images/a.jpg',
                ],
                'value-4' => [
                    'small' => get_template_directory_uri() . '/images/b.jpg',
                    'large' => get_template_directory_uri() . '/images/b.jpg',
                ],
                'value-5' => [
                    'small' => get_template_directory_uri() . '/images/c.jpg',
                    'large' => get_template_directory_uri() . '/images/c.jpg',
                ],
            ],
        ]);

        /**
         * Control for Html input
         */
        $this->add_control([
            'id'      => 'html',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __('Html Input', 'sassico'),
            'desc'    => __('html description goes here', 'sassico'),
            'type'    => 'html',
            'value'   => 'My <b>custom</b> <em>HTML</em> <i>Italic<i> <p>Paragraph</p>',
        ]);

        /**
         * control for gradient input
         */
        $this->add_control([
            'id'         => 'gradient',
            'section'    => 'devmonsta_text_settings_section',
            'type'       => 'gradient',
            'label'      => __('Wp Gradient Picker Example', 'sassico'),
            'desc'       => __('description of gradient-picker goes here', 'sassico'),
            'value'      => [
                'primary'   => '#FF00FF',
                'secondary' => '#0000FF',
            ]
        ]);

        /**
         * control for multiple select
         */
        $this->add_control([
            'id'      => 'select_multiple',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'multiselect',
            'label'   => __('Select Multiple', 'sassico'),
            'desc'    => __('multiple select description goes here', 'sassico'),
            'value'   => [
                'choice-3',
                'choice-2',
            ],
            'choices' => [
                'choice-1' => __('Choice One', 'sassico'),
                'choice-2' => __('Choice Two', 'sassico'),
                'choice-3' => __('Choice Three', 'sassico'),
            ],
        ]);

        /**
         * control for color-picker input
         */
        $this->add_control([
            'id'      => 'color_one',
            'section' => 'devmonsta_text_settings_section',
            'type'     => 'color-picker',
            'label'    => __('Wp Color Picker One', 'sassico'),
            'desc'     => __('description of color-picker goes here', 'sassico'),
            'value'    => '#FF0000',
            'palettes' => ['#ba4e4e', '#0ce9ed', '#941940'],
        ]);

        /**
         * control for oembed input
         */
        $this->add_control([
            'id'      => 'oembed_field',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'oembed',
            'label'   => __('Oembed Input', 'sassico'),
            'desc'    => __('Oembed text description', 'sassico'),
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'   => 'https://www.youtube.com/watch?v=0Nh11GI4-Gc',
            // 'value'   => 'https://soliloquywp.com/wordpress-best-practices/',
            'preview' => [
                'width'      => 200, // optional, if you want to set the fixed width to iframe
                'height'     => 100, // optional, if you want to set the fixed height to iframe
                'keep_ratio' => true,
            ],
        ]);

        /**
         * control for wp-editor input
         */
        $this->add_control([
            'id'            => 'wp_editor',
            'section'       => 'devmonsta_text_settings_section',
            'type'          => 'wp-editor',
            'value'         => 'default value',
            'label'         => __('Wp Editor Example', 'sassico'),
            'desc'          => __('description of wp-editor goes here', 'sassico'),
            'size'          => 'small',
            'editor_height' => 400,
            'wpautop'       => true,
            'editor_type'   => true, // tinymce, false: HTML
        ]);

        /**
         * control for rgba-color-picker input
         */
        $this->add_control([
            'id'       => 'rgba_color',
            'section'  => 'devmonsta_text_settings_section',
            'type'     => 'rgba-color-picker',
            'label'    => __('Wp RGBA Color Picker Example', 'sassico'),
            'desc'     => __('description of rgba-color-picker goes here', 'sassico'),
            'value'    => 'rgba(255,255,0,0.95)',
            'palettes' => ['#ba4e4e', '#5f9419', '#381994'],
        ]);

        /**
         * control for icon-picker input
         */
        $this->add_control([
            'id'      => 'icon_picker',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'icon',
            'value'  => [
                'icon' => 'fas fa-at',
                'type' => 'dm-font-awesome',
            ],
            'label'   => __('Select Icon', 'sassico'),
            'desc'    => __('Select icon description', 'sassico'),
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ]);

        /**
         * control for slider input
         */
        $this->add_control([
            'type'       => 'slider',
            'id'         => 'slider_widget',
            'section'    => 'devmonsta_text_settings_section',
            'label'      => __('Wp Slider Example', 'sassico'),
            'desc'       => __('description of slider goes here', 'sassico'),
            'value'      => 33,
            'properties' => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
        ]);

        /**
         * control for range-slider input
         */
        $this->add_control([
            'id'         => 'range_slider_widget',
            'section'    => 'devmonsta_text_settings_section',
            'type'       => 'range-slider',
            'label'      => __('Wp Range Slider Example', 'sassico'),
            'desc'       => __('description of range slider goes here', 'sassico'),
            'value'      => [
                'from' => 10,
                'to'   => 33,
            ],
            'properties' => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
        ]);

        /**
         * Control for Typography Input
         */
        $this->add_control([
            'id'         => 'typo',
            'section'    => 'devmonsta_text_settings_section',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Amarante',
                'style'          => 'italic',
                'weight'         => 700,
                'subset'         => 'latin-ext',
                'variation'      => 'regular',
                'size'           => 14,
                'line_height'    => 13,
                'letter_spacing' => -2,
                'color'          => '#FF0000',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'color'          => true,
            ],
            'label'      => __('Typhography', 'sassico'),
            'desc'       => __('Description', 'sassico'),
        ]);

        /**
         * ===========================================
         *      Custom control end
         * ===========================================
         */

        // New controls

        $this->add_control([
            'id'      => 'dm_toggle',
            'label'   => __('Toggle', 'devmonsta'),
            'section' => 'dm_new_controls',
            'type'    => 'toggle',
        ]);

        $this->add_control([
            'id'      => 'dm_accordion',
            'lable'   => __('Accordion', 'devmonsta'),
            'section' => 'dm_new_controls',
            'type'    => 'toggle',
        ]);

        $this->add_control([
            'id'          => 'dm_accordion',
            'lable'       => __('Accordion', 'devmonsta'),
            'section'     => 'dm_new_controls',
            'type'        => 'accordion',
            'description' => [
                'Title' => 'Sotry fo title',
            ],
        ]);

        $this->add_control([
            'id'          => 'dm_html_editor',
            'lable'       => __('HTML Editor', 'devmonsta'),
            'section'     => 'dm_new_controls',
            'type'        => 'html-editor',
        ]);

        $this->add_control([
            'id'              => 'devmonsta_repeater_control',
            'label'           => 'List',
            'type'            => 'repeater',
            'section'         => 'dm_repeater_section',
            'add_button_text' => __('Add new', 'devmonsta'),
            'fields'          => [
                [
                    'id'    => 'person_name',
                    'label' => __('Name', 'devmonsta'),
                    'type'  => 'text',
                ],
                [
                    'id'    => 'person_email',
                    'label' => __('Email', 'devmonsta'),
                    'type'  => 'email',
                ],
                [
                    'id'    => 'person_birht_date',
                    'label' => __('Date of birth', 'devmonsta'),
                    'type'  => 'date',
                ],

                [
                    'id'    => 'person_child',
                    'label' => __('Child', 'devmonsta'),
                    'type'  => 'number',
                ],
                [
                    'id'    => 'person_color',
                    'label' => __('Awesome Color', 'devmonsta'),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_hair_color',
                    'label' => __('Hair Color', 'devmonsta'),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_image',
                    'type'  => 'media',

                    'label' => __('Media'),

                ],
                [
                    'id'          => 'dm_sum_test_control_kk',
                    'type'        => 'test-control',
                    'section'     => 'devmonsta_text_settings_section', // Add a default or your own section
                    'label'       => __('Custom Dropdown Pages'),
                    'description' => __('This is a custom dropdown pages option.'),
                ],
                [
                    'type'        => 'radio',
                    'id'          => 'dm_test_readio_for_repeater',
                    'label'       => __('Custom Radio Selection'),
                    'description' => __('This is a custom radio input.'),
                    'choices'     => [
                        'red'   => __('Red'),
                        'blue'  => __('Blue'),
                        'green' => __('Green'),
                    ],
                ],

            ],
        ]);

        $this->add_control([
            'id'              => 'devmonsta_repeater_popup_control',
            'label'           => 'Popup',
            'type'            => 'addable-popup',
            'section'         => 'dm_repeater_section',
            'add_button_text' => __('Add new', 'devmonsta'),
            'fields'          => [
                [
                    'id'    => 'person_name_popup',
                    'label' => __('Name', 'devmonsta'),
                    'type'  => 'text',
                ],
                [
                    'id'    => 'person_email_popup',
                    'label' => __('Email', 'devmonsta'),
                    'type'  => 'email',
                ],
                [
                    'id'    => 'person_birht_date_popup',
                    'label' => __('Date of birth', 'devmonsta'),
                    'type'  => 'date',
                ],

                [
                    'id'    => 'person_child_popup',
                    'label' => __('Child', 'devmonsta'),
                    'type'  => 'number',
                ],
                [
                    'id'    => 'person_color_popup',
                    'label' => __('Awesome Color', 'devmonsta'),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_hair_color_popup',
                    'label' => __('Hair Color', 'devmonsta'),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_image_popup',
                    'type'  => 'media',

                    'label' => __('Media'),

                ],
                [
                    'id'          => 'dm_sum_test_control_kk_popup',
                    'type'        => 'test-control',
                    'section'     => 'devmonsta_text_settings_section', // Add a default or your own section
                    'label'       => __('Custom Dropdown Pages'),
                    'description' => __('This is a custom dropdown pages option.'),
                ],
                [
                    'type'        => 'radio',
                    'id'          => 'dm_test_readio_for_repeater_popup',
                    'label'       => __('Custom Radio Selection'),
                    'description' => __('This is a custom radio input.'),
                    'choices'     => [
                        'red'   => __('Red'),
                        'blue'  => __('Blue'),
                        'green' => __('Green'),
                    ],
                ],

            ],
        ]);

        $this->add_tab([
            'id'      => 'first_tab',
            'section' => 'devmonsta_text_settings_section',
            'tabs'    => [
                [
                    'id'       => 'tab_1',
                    'label'    => 'Tab 1',
                    'controls' => [
                        'control_id_1',
                        'control_id_2',
                        'control_id_3',
                    ],
                ],
            ],
        ]);

        $control_1 = [
            'id'      => 'dm_media',
            'type'    => 'media',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __('Media'),
        ];

        $control_2 = [
            'id'      => 'dm_media',
            'type'    => 'media',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __('Media'),
        ];

        $this->add_tab([
            'id'      => 'first_tab',
            'section' => 'devmonsta_text_settings_section',
            'tabs'    => [
                [
                    'id'       => 'tab_1',
                    'label'    => 'Tab 1',
                    'controls' => [$control_1, $control_2],
                ],
            ],
        ]);


        // format: dm_theme_option($option_name)
        // dm_print(dm_theme_option('dm_date_time'));
        // dm_print(dm_theme_option('slider_widget'));
    }
}
