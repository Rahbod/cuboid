<?php
namespace Appnegar\Cms\Controllers\Admin;


use Appnegar\Cms\Controllers\AdminController;
use Appnegar\Cms\Traits\AdminFileManager;

class FaqController extends AdminController{
    use AdminFileManager;

    public function __construct(){
        $this->resource='Faq';
    }


    protected function setModel($model)
    {
        if($model->author_id !== null){
            $model->author_id=$model->author->name;
        }
        return $model;
    }

    protected function validationRules($request, $id = null)
    {
        $rules=[
            'question'=>'required',
            'answer'=>'required',
            'order'=>'nullable|numeric|min:1',
            'status'=>'nullable|numeric|min:0|max:1'
        ];
        return $rules;
    }
}