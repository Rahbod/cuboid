<?php

namespace Appnegar\Cms\Controllers\Admin;

class ProductController extends AdminProductController
{

    public function __construct()
    {
        $this->resource = 'Product';
        $config = config('system.product');
        $this->config = [
            'product' => [
                'image' => [
                    'size' => $config['image_size'],
                    'width' => $config['image_width'],
                    'height' => $config['image_height'],
                    'extension' => $config['image_extension'],
                    'destination' => $config['image_destination'],
                ],
            ]
        ];
    }

}