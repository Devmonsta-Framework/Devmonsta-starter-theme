<?php

use Devmonsta\Libs\Taxonomies;

class Category extends Taxonomies
{

    public function register_controls()
    {

        $this->add_control([
            'name'  => 'icon_picker',
            'type'  => 'icon',
            'value'  => [
                'icon' => 'fas fa-at',
                'type' => 'dm-font-awesome',
            ],
            'label' => esc_html__('Select Icon', 'sassico'),
            'desc'  => esc_html__('Select icon description', 'sassico'),
            'attr'  => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ]);
    }
}
