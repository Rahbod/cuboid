<?php

namespace App;

class Product extends BaseProduct
{
    protected $table = 'products';


    public function getImageAttribute($photo)
    {
        if ($photo) {
            if(strpos($photo,'http') === false){
                $path = '/storage/' . config('system.product.image_destination') . $photo;
                return $path;
//                return $photo;
            }
            else {
                return $photo;
            }

        }
        return '/storage/' . config('system.product.image_destination') . 'default.jpg';

    }
}
