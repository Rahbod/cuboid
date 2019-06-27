<?php
return [
    'title'=>'تصاویر گالری',
    'table_title' => 'لیست تصاویر گالری',
    'create_form_title' => 'فرم ایجاد تصویر گالری',
    'edit_form_title' => 'فرم ویرایش تصویر گالری',
    'items' => [
        'author_id' => 'نویسنده',
        'gallery_id' => 'گالری',
        'id' => 'شناسه',
        'image' => 'تصویر',
        'logo' => 'لوگو',
        'name' => 'نام',
        'description' => 'جزئیات',
        'status' => 'وضعیت نمایش',
        'order' => 'ترتیب نمایش',
        'created_at' => 'تاریخ ایجاد',
        'updated_at' => 'تاریخ بروزرسانی',
    ],
    'relations'=>[
        'author'=>'نویسنده',
        'gallery'=>'گالری',
    ],
    'values' => [
        'create_new_record' => 'ایجاد تصویر گالری جدید'
    ],
    'messages' => [
        'table_loading' => 'لیست تصاویر گالری در حال بارگذاری است ...',
        'table_not_found_record' => 'هیچ اطلاعاتی در جدول تصاویر گالری پیدا نشد.'
    ]
];