<?php
namespace Appnegar\Cms\Controllers\Admin;

use Appnegar\Cms\Controllers\AdminController;
use Appnegar\Cms\Traits\AdminFileManager;
use Appnegar\Cms\Traits\AdminSettingTrait;

class SliderController extends AdminController{
    use AdminFileManager;
    use AdminSettingTrait;

    public function __construct(){
        $this->resource='Slider';

        $config=config('system.slider');
        $this->config=[
            'slider'=>[
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

    protected function getOrderScopes(){
        return ['group_id'];
    }

    protected function getFormData($data)
    {
        return[
            'model'=>$data,
            'options'=>[
                'group_id' => $this->getCategories([],'SliderGroup')
            ]
        ];
    }
}