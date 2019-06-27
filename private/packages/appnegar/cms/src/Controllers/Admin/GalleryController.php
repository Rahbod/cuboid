<?php
namespace Appnegar\Cms\Controllers\Admin;

use App\GalleryItem;
use App\Tag;
use Appnegar\Cms\Controllers\AdminController;
use Appnegar\Cms\Traits\AdminComment;
//use Appnegar\Cms\Traits\AdminFileManager;
use Appnegar\Cms\Traits\AdminSettingTrait;
use Illuminate\Http\Request;

class GalleryController extends AdminController{
    use AdminComment;
//    use AdminFileManager;
    use AdminSettingTrait;

    public function __construct(){
        $this->resource='Gallery';

        $gallery_config=config('system.gallery');
        $gallery_item_config=config('system.gallery_item');
        $this->config=[
            'gallery'=>[
                'image' => [
                    'size' => $gallery_config['image_size'],
                    'width' => $gallery_config['image_width'],
                    'height' => $gallery_config['image_height'],
                    'extension' => $gallery_config['image_extension'],
                    'destination' => $gallery_config['image_destination'],
                ],
            ],
            'gallery_item'=>[
                'logo' => [
                    'size' => $gallery_item_config['logo_size'],
                    'width' => $gallery_item_config['logo_width'],
                    'height' => $gallery_item_config['logo_height'],
                    'extension' => $gallery_item_config['logo_extension'],
                    'destination' => $gallery_item_config['logo_destination'],
                ],
                'image' => [
                    'size' => $gallery_item_config['image_size'],
                    'width' => $gallery_item_config['image_width'],
                    'height' => $gallery_item_config['image_height'],
                    'extension' => $gallery_item_config['image_extension'],
                    'destination' => $gallery_item_config['image_destination'],
                ],
            ]
        ];
    }


    protected function validationRules($request, $id = null)
    {
        $rules=[
            'category_id'=>'required|exists:gallery_categories,id',
            'name'=>'required|unique:galleries,name',
            'description'=>'nullable',
            'image'=>'nullable|image|max:'.$this->config['gallery']['image']['size'] . '|mimes:' . trimArrayString($this->config['gallery']['image']['extension']),
            'show_count'=>'nullable|numeric|min:0',
            'order'=>'nullable|numeric|min:1',
            'status'=>'nullable|numeric|min:0|max:1',
            'published_at'=>'nullable',
//            'gallery_items.*.name'=>'required',
//            'gallery_items.*.description'=>'nullable',
//            'gallery_items.*.logo'=>'required|image|max:'.$this->config['gallery_item']['logo']['size'] . '|mimes:' . trimArrayString($this->config['gallery_item']['logo']['extension']),
//            'gallery_items.*.image'=>'required|image|max:'.$this->config['gallery_item']['image']['size'] . '|mimes:' . trimArrayString($this->config['gallery_item']['image']['extension']),
//            'gallery_items.*.order'=>'required|numeric|min:1',
//            'gallery_items.*.status'=>'nullable|numeric|min:0|max:1',
        ];
//        if(isset($request->gallery_items)){
//            $orders=[];
//            foreach ($request->gallery_items as $index=>$gallery_item){
//                if(in_array($gallery_item['order'],$orders)){
//                    $rules['gallery_items.'.$index.'.order']='required|numeric|min:1|not_in:'.implode(',',$orders);
//                }else{
//                    $orders[]=$gallery_item['order'];
//                }
//            }
//        }
        if($id){
            $rules['name'].=",".$id;
//            if(isset($request->gallery_items)){
//                foreach ($request->gallery_items as $index=>$gallery_item){
//                    if($gallery_item['image_src'] !== null){
//                        $rules['gallery_items.'.$index.'.image']='nullable|image|max:'.$this->config['gallery_item']['image']['size'] . '|mimes:' . trimArrayString($this->config['gallery_item']['image']['extension']);
//                    }
//                    if($gallery_item['logo_src'] !== null){
//                        $rules['gallery_items.'.$index.'.logo']='nullable|image|max:'.$this->config['gallery_item']['logo']['size'] . '|mimes:' . trimArrayString($this->config['gallery_item']['logo']['extension']);
//                    }
//                }
//            }
        }
        return $rules;
    }

    protected function setModel($model)
    {
        $model->tag_id=$model->tags()->pluck('id');
        if($model->author_id !== null){
            $model->author_id=$model->author->name;
        }
        return $model;
    }

    protected function getFormData($data)
    {
        return[
            'model'=>$data,
            'options'=>[
                'tag_id'=>Tag::select('id','name as text')->get()
            ]
        ];
    }

    public function storeImage(Request $request){
        $gallery_id=null;
        if($request->id !== 0){
            $gallery_id=$request->id;
        }
       foreach ($request->files as $file){

               $file_status = $this->saveImageWithLogo($file, $this->config['gallery']['gallery_item']['image'],$this->config['gallery']['gallery_item']['logo']);
           if ($file_status['status'] === false) {
               $errors = implode(', ', $file_status['data']);
               throw new \Exception($errors);
           }
           $file_name = $file_status['data'];

//           GalleryItem::create([
//               'gallery_id'=>$gallery_id,
//               'name'=>$file_name,
//               'image'=>$file_name,
//               'order'=>
//           ]);
       }
    }
}