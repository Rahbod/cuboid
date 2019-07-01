<?php
namespace Appnegar\Cms\Controllers\Admin;

use App\Gallery;
use Appnegar\Cms\Controllers\AdminController;

class GalleryItemController extends AdminController{

    public function __construct(){
        $this->resource='GalleryItem';

        $config=config('system.gallery_item');
        $this->config=[
            'gallery_item'=>[
                'logo' => [
                    'size' => $config['logo_size'],
                    'width' => $config['logo_width'],
                    'height' => $config['logo_height'],
                    'extension' => $config['logo_extension'],
                    'destination' => $config['logo_destination'],
                ],
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
        return ['gallery_id'];
    }

    protected function validationRules($request, $id = null)
    {
        $rules=[
            'gallery_id'=>'required|exists:galleries,id',
            'name'=>'required',
            'description'=>'nullable',
            'image'=>'required|image|max:'.$this->config['gallery_item']['image']['size'] . '|mimes:' . trimArrayString($this->config['gallery_item']['image']['extension']),
            'order'=>'nullable|numeric|min:1',
            'status'=>'nullable|numeric|min:0|max:1'
        ];
        if($id){
            if($request['image_src'] !== null){
                $rules['image']='nullable|image|max:'.$this->config['gallery_item']['image']['size'] . '|mimes:' . trimArrayString($this->config['gallery_item']['image']['extension']);
            }

        }
        return $rules;
    }

    protected function getFormData($data)
    {
        return[
            'model'=>$data,
            'options'=>[
                'gallery_id' => Gallery::select(['id','name as text'])->get()
            ]
        ];
    }
}