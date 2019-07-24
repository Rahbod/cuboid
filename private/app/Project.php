<?php

namespace App;

class Project extends BaseProduct
{
    protected $table = 'products';

//    public function getImageAttribute($photo)
//    {
//        if ($photo) {
//            if(strpos($photo,'http') === false){
//                $path = '/storage/' . config('system.project.image_destination') . $photo;
//                return $path;
////                return $photo;
//            }
//            else {
//                return $photo;
//            }
//
//        }
//
//        return '/storage/' . config('system.project.image_destination') . 'default.jpg';
//
//    }
}
