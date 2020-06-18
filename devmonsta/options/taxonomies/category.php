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
            'label' => __('Select Icon', '{domain}'),
            'desc'  => __('Select icon description', '{domain}'),
            'attr'  => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ]);
    }
}
