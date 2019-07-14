<?php

namespace Appnegar\Cms\Controllers\Admin;

use App\Gallery;
use App\Tag;
use Appnegar\Cms\Controllers\AdminController;
use Appnegar\Cms\Traits\AdminComment;
use Appnegar\Cms\Traits\AdminFileManager;
use Appnegar\Cms\Traits\AdminSettingTrait;

class AdminProductController extends AdminController
{
    use AdminComment;
    use AdminFileManager;
    use AdminSettingTrait;

    public function index(): array
    {
        $actions = getActions(session('department'), $this->resource);
        $fields = $this->getFields();
        $lang_resource = $this->getTrans(null, $fields);
        return ['actions' => $actions, 'lang_resource' => $lang_resource, 'fields' => $fields];
    }

    protected function getTableConditions()
    {
        return ['type' => $this->getResourceName(null,true)];
    }

    protected function getOrderScopes()
    {
        return ['type'];
    }

    protected function setRequest($request, $model)
    {
        $request['type'] = $this->getResourceName(null,true);
        $additional_fields = $this->getAditionalParams();
        $attributes=[];
        $request['attributes']=null;
        foreach ($additional_fields as $field){
            if($request[$field['name']]){
                $attributes[$field['name']]=$request[$field['name']];
            }
        }
        if(count($attributes)>0){
            $request['attributes']=json_encode($attributes);
        }
        return $request;
    }

    protected function setModel($model)
    {
        $model->type = $this->getResourceName(null,true);
        if ($model->author_id !== null) {
            $model->author_id = $model->author->name;
        }
        return $this->mergeModelData($model);
    }

    protected function validationRules($request, $id = null)
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'gallery_id' => 'nullable|exists:galleries,id',
//            'type' => 'required|in:products,projects',
            'tag_id' => 'nullable|array',
            'title' => 'required',
            'image' => 'nullable|image|max:' . $this->config[$this->getResourceName(null,true)]['image']['size'] . '|mimes:' . trimArrayString($this->config[$this->getResourceName(null,true)]['image']['extension']),
            'description' => 'nullable',
            'attributes' => 'nullable',
            'order' => 'nullable|numeric|min:1',
            'status' => 'nullable|numeric|min:0|max:1'
        ];
        return $rules;
    }

    protected function getFormData($data)
    {
        return [
            'model' => $data,
            'options' => [
                'category_id' => $this->getCategories([], 'Category', [$this->getResourceName(null,true)]),
                'tag_id' => Tag::select('id', 'name as text')->get(),
                'gallery_id' => Gallery::select('id', 'name as text')->get()
            ]
        ];
    }

    protected function getAditionalParams(){
        return config('dynamic_attributes.'.$this->getResourceName());
    }

    protected function getFields(): array
    {
        $model_name = '\\App\\' . $this->resource;
        $fields = $model_name::getFields();
        $temp_fields = [];
        foreach ($fields as $index => $field) {
            if ($field['name'] === $model_name::getTableName()) {
                $fields[$index] = $this->getMainFields($fields[$index]);
            }

            $temp_fields[] = $fields[$index];
        }

        return $temp_fields;
    }

    /**
     * @param $fields
     * @return array
     */
    protected function getMainFields($fields): array
    {

        $additional_fields = $this->getAditionalParams();
        foreach ($additional_fields as $additional_field) {
            switch ($additional_field['input_type']) {
                case 'number':
                    $additional_field['type'] = 'numeric';
                    break;
                default:
                    $additional_field['type'] = 'string';
                    break;
            }
            $additional_field['is_related_field']=true;
            $additional_field['orderable']=false;
            $additional_field['searchable']=false;
            $additional_field['show_in_table']=false;
            $additional_field['show_in_form']=true;

            $fields['items'][]=$additional_field;
        }
        return $fields;
    }

    protected function mergeModelData($model){
        $additional_fields = $this->getAditionalParams();
        if($model->attributes){
            $attributes= json_decode($model->attributes, true);
            foreach ($additional_fields as $additional_field){
                $key=$additional_field['name'];
                $model->$key=null;
                if (isset($attributes[$key])){
                    $model->$key=$attributes[$key];
                }
            }
        }
        return $model;
    }
}