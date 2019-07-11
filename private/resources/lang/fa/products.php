<?php
return [
    'title'=>'محصولات',
    'table_title' => 'لیست تمام محصولات سیستم',
    'create_form_title' => 'فرم ایجاد محصولات',
    'edit_form_title' => 'فرم ویرایش محصولات',
    'items' => [
        'author_id' => 'نویسنده',
        'category_id' => 'دسته بندی',
        'tag_id' => 'برچسب ها',
        'gallery_id' => 'گالری تصاویر',
        'type' => 'نوع ',
        'id' => 'شناسه',
        'image' => 'تصویر',
        'title' => 'عنوان',
        'sub_title' => 'زیر عنوان',
        'summary' => 'چکیده',
        'description' => 'توضیحات',
        'attributesَ' => 'ویژگی ها',
        'status' => 'وضعیت نمایش',
        'order' => 'ترتیب نمایش',
        'published_at' => 'تاریخ انتشار',
        'created_at' => 'تاریخ ایجاد',
        'updated_at' => 'تاریخ بروزرسانی',
    ],
    'relations'=>[
        'author'=>'نویسنده',
        'category'=>'دسته بندی',
        'gallery'=>'گالری تصاویر',
        'comments'=>'نظرات',
        'tags'=>'برچسب ها',
        'attachments' => 'فایل های ضمیمه',
    ],
    'values' => [
        'select_items' => 'گزینه ها ی مورد نظر خود را انتخاب کنید',
        'create_new_record' => 'ایجاد محصول جدید'
    ],
];