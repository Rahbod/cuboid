<?php

namespace App;

use Appnegar\Cms\Traits\ModelTrait;
use Appnegar\Cms\Traits\SetAndGetDateAttributesTrait;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use ModelTrait;
    use SetAndGetDateAttributesTrait;

    protected $fillable=['author_id','name','lang','description','image','order','show_count','status','published_at'];


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
                    'show_in_form' => true
                ],
                [
                    'name' => 'images',
                    'type' => 'array',
                    'input_type' => 'dropzone_images',
                    'orderable' => false,
                    'searchable' => false,
                    'show_in_table' => false,
                    'show_in_form' => true
                ],
                [
                    'name' => 'show_count',
                    'type' => 'numeric',
                    'input_type' => 'number',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => true,
                    'show_in_form' => true
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
                    'name' => 'published_at',
                    'type' => 'date',
                    'input_type' => 'date',
                    'orderable' => true,
                    'searchable' => true,
                    'show_in_table' => false,
                    'show_in_form' => true,
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
                'name' => 'author',
                'table' => User::getTableName(),
                'items' => User::getSubFields(),
                'show_in_form' => false,
                'show_in_table' => false,

            ],
            [
                'name' => 'gallery_items',
                'table' => GalleryItem::getTableName(),
                'items' => GalleryItem::getSubFields(),
                'show_in_form' => true,
                'show_in_table' => false,
            ]
        ];
    }

    public function author()
    {
        return $this->belongsTo('App\User','author_id','id');
    }
    public function gallery_items()
    {
        return $this->hasMany('App\GalleryItem','gallery_id','id');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
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
}
