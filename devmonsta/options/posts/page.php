<?php

use Devmonsta\Libs\Posts;

class Page extends Posts
{

    public function register_controls()
    {
        $this->add_box([
            'id' => 'page_box_1',
            'post_type' => 'page',
            'title' => esc_html__('Page Settings', 'sassico'),
        ]);
        /**
         * control for text input
         */
        $this->add_control([
            'box_id' => 'page_box_1',
            'type'   => 'text',
            'name'   => 'header_title',
            'desc'   => esc_html__('Add your Page hero title', 'sassico'),
            'label'  => esc_html__('Banner Title', 'sassico'),
        ]);

        $this->add_control([
            'box_id' => 'page_box_1',
            'type'   => 'upload',
            'name'   => 'header_image',
            'desc'   => esc_html__('Upload a page header image', 'sassico'),
            'label'  => esc_html__('Banner image', 'sassico'),
        ]);
    }
}
