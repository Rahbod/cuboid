<?php
return [
    'title'=>'گالری تصاویر',
    'table_title' => 'لیست تمام گالری تصاویر سیستم',
    'create_form_title' => 'فرم ایجاد گالری تصاویر',
    'edit_form_title' => 'فرم ویرایش گالری تصاویر',
    'items' => [
        'author_id' => 'نویسنده',
        'category_id' => 'دسته بندی',
        'tag_id' => 'برچسب ها',
        'id' => 'شناسه',
        'image' => 'تصویر',
        'images' => 'تصاویر گالری',
        'name' => 'نام',
        'description' => 'جزئیات',
        'show_count' => 'تعداد بازدید ها',
        'status' => 'وضعیت نمایش',
        'order' => 'ترتیب نمایش',
        'published_at' => 'تاریخ انتشار',
        'created_at' => 'تاریخ ایجاد',
        'updated_at' => 'تاریخ بروزرسانی',
    ],
    'relations'=>[
        'author'=>'نویسنده',
//        'gallery_items'=>'تصاویر گالری',
        'comments'=>'نظرات',
        'tags'=>'برچسب ها',
    ],
    'values' => [
        'create_new_record' => 'ایجاد گالری تصاویر جدید'
    ],
    'messages' => [
        'table_loading' => 'لیست گالری تصاویر در حال بارگذاری است ...',
        'table_not_found_record' => 'هیچ اطلاعاتی در جدول گالری تصاویر پیدا نشد.'
    ]
];