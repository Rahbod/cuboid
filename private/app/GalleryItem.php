<?php

namespace App;

use Appnegar\Cms\Traits\GetImageAttributesTrait;
use Appnegar\Cms\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Gallery;

class GalleryItem extends Model
{
    use ModelTrait;

    protected $fillable=['author_id','gallery_id','name','description','image','order','status'];


    public static function mainFields(){
        return [
            'name' => static ::getTableName(),
            'items' => [
                [
                    'name' => 'id',
                    'type' => 'numeric',
                    'input_type' => 'hidden',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => true,
                    'show_in_sub_table' => false,
                    'show_in_form' => true
                ],
                [
                    'name' => 'author_id',
                    'type' => 'numeric',
                    'input_type' => 'disable',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => false,
                    'show_in_form' => true,
                ],
                [
                    'name' => 'gallery_id',
                    'type' => 'select',
                    'input_type' => 'select',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => false,
                    'show_in_form' => true,
                ],
                [
                    'name' => 'name',
                    'type' => 'string',
                    'input_type' => 'text',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => true,
                    'show_in_form' => true
                ],
                [
                    'name' => 'description',
                    'type' => 'string',
                    'input_type' => 'textarea',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => true,
                    'show_in_form' => true
                ],
                [
                    'name' => 'image',
                    'type' => 'string',
                    'input_type' => 'image',
                    'orderable' => false,
                    'searchable' => false,
                    'show_in_table' => false,
                    'show_in_form' => true,
                    'has_logo'=>true
                ],
                [
                    'name' => 'order',
                    'type' => 'numeric',
                    'input_type' => 'number',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => true,
                    'show_in_form' => true
                ],
                [
                    'name' => 'status',
                    'type' => 'select',
                    'input_type' => 'radio',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => false,
                    'show_in_form' => true,
                    'options' => [['id' => 0, 'text' => 'inactive'], ['id' => 1, 'text' => 'active']]
                ],
                [
                    'name' => 'created_at',
                    'type' => 'date',
                    'input_type' => 'date',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => false,
                    'show_in_form' => false,
                ],
                [
                    'name' => 'updated_at',
                    'type' => 'date',
                    'input_type' => 'date',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => false,
                    'show_in_form' => false,
                ],
            ]
        ];
    }

    public static function  relatedFields(){
        return [
            [
                'name' => 'gallery',
                'table' => Gallery::getTableName(),
                'items' => Gallery::getSubFields(),
                'show_in_form' => false,
                'show_in_table' => false,
            ],
            [
                'name' => 'author',
                'table' => User::getTableName(),
                'items' => User::getSubFields(),
                'show_in_form' => false,
                'show_in_table' => false,

            ],
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id','id');
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class,'gallery_id','id');
    }

    public function getImageAttribute($photo)
    {
        $resource_name = str_singular($this->getTable());
        if ($photo) {
            if(strpos($photo,'http') === false){
                $path = '/storage/' . config('system.' . $resource_name . '.image_destination') . $photo;
                return $path;
            }
            else {
                return $photo;
            }

        }
        return '/storage/' . config('system.' . $resource_name . '.image_destination') . 'default.jpg';

    }

    public function getLogAttribute(): string
    {
        $resource_name = str_singular($this->getTable());
        $photo=$this->image;
        if ($photo) {
            if(strpos($photo,'http') === false){
                $path = '/storage/' . config('system.' . $resource_name . '.logo_destination') . $photo;
                return $path;
            }
            else {
                return $photo;
            }

        }
        return '/storage/' . config('system.' . $resource_name . '.logo_destination') . 'default.jpg';

    }
}
