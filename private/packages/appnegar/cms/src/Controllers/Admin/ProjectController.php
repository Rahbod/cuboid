<?php

namespace Appnegar\Cms\Controllers\Admin;

class ProjectController extends AdminProductController
{

    public function __construct()
    {
        $this->resource = 'Project';
        $config = config('system.project');
        $this->config = [
            'project' => [
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