<?php

use App\Setting;
use App\SettingGroup;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        SettingGroup::truncate();
        Setting::truncate();

        $setting_group = SettingGroup::create([
            'name' => 'main',
            'display_name' => 'تنظیمات اصلی سایت',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'title',
            'display_name' => 'عنوان سایت',
            'value' => 'سقف وافل کیوبوید',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);

        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'status',
            'display_name' => 'وضعیت سایت',
            'value' => '1',
            'details' => 'فعال:1,
غیر فعال:0',
            'type' => 'radio',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'meta_keywords',
            'display_name' => 'کلمات کلیدی',
            'value' => 'کیوبوید، سقف ، وافل ',
            'type' => 'textarea',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'meta_description',
            'display_name' => 'توضیحات متا',
            'value' => 'سقف وافل کیوبوید',
            'type' => 'textarea',
            'direction' => 'inherit',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'about_us',
            'display_name' => 'درباره ما',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'introduction',
            'display_name' => 'معرفی',
            'value' => 'این متن ازمایشی است',
            'type' => 'textarea',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'email',
            'display_name' => 'email',
            'value' => 'info@cuboid.ir',
            'type' => 'email',
            'direction' => 'ltr',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'telegram',
            'display_name' => 'telegram',
            'value' => 'https://telegram.me/cuboid.ir',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'instagram',
            'display_name' => 'instagram',
            'value' => 'https://www.instagram.com/cuboid.ir',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'facebook',
            'display_name' => 'facebook',
            'value' => 'https://www.facebook.com/cuboid.ir',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'google_plus',
            'display_name' => 'google plus',
            'value' => 'https://plus.google.com/+cuboid.ir',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'twitter',
            'display_name' => 'twitter',
            'value' => 'https://twitter.com/cuboid.ir',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'phone',
            'display_name' => 'تلفن',
            'value' => '۳۲۹۴۱۱۱۵-۰۲۵',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'fax',
            'display_name' => 'فکس',
            'value' => '009823000000',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'address',
            'display_name' => 'آدرس',
            'value' => 'Iran - Tehran',
            'type' => 'textarea',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'longitude',
            'display_name' => 'طول جغرافیایی',
            'value' => '000',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'latitude',
            'display_name' => 'عرض جغرافیایی',
            'value' => '000',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'user',
            'display_name' => 'تنظیمات کاربران',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'avatar_size',
            'display_name' => 'حجم آواتار',
            'value' => '500',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'avatar_width',
            'display_name' => 'طول آواتار',
            'value' => '250',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'avatar_height',
            'display_name' => 'عرض آواتار',
            'value' => '250',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'avatar_extension',
            'display_name' => 'پسوند های مجاز تصویر',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'avatar_destination',
            'display_name' => 'مسیر ذخیره آواتار',
            'value' => "users/avatar/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'content',
            'display_name' => 'تنظیمات مطالب',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_size',
            'display_name' => 'حجم لوگو',
            'value' => '1024',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_width',
            'display_name' => 'طول لوگو',
            'value' => '550',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_height',
            'display_name' => 'عرض لوگو',
            'value' => '550',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_extension',
            'display_name' => 'پسوند های مجاز لوگو',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_destination',
            'display_name' => 'مسیر ذخیره لوگو',
            'value' => "content/logo/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_size',
            'display_name' => 'حجم تصویر',
            'value' => '2048',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_width',
            'display_name' => 'طول تصویر',
            'value' => '800',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_height',
            'display_name' => 'عرض تصویر',
            'value' => '550',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_extension',
            'display_name' => 'پسوند های مجاز تصویر',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_destination',
            'display_name' => 'مسیر ذخیره تصویر',
            'value' => "content/image/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'page',
            'display_name' => 'تنظیمات برگه ها',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_size',
            'display_name' => 'حجم تصویر',
            'value' => '500',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_width',
            'display_name' => 'طول تصویر',
            'value' => '200',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_height',
            'display_name' => 'عرض تصویر',
            'value' => '278',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_extension',
            'display_name' => 'پسوند های مجاز تصویر',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_destination',
            'display_name' => 'مسیر ذخیره تصویر',
            'value' => "page/image/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'slider',
            'display_name' => 'تنظیمات اسلایدر ها',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_size',
            'display_name' => 'حجم تصویر',
            'value' => '2048',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_width',
            'display_name' => 'طول تصویر',
            'value' => '2000',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_height',
            'display_name' => 'عرض تصویر',
            'value' => '767',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_extension',
            'display_name' => 'پسوند های مجاز تصویر',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_destination',
            'display_name' => 'مسیر ذخیره تصویر',
            'value' => "slider/image/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'gallery',
            'display_name' => 'تنظیمات گالری',
        ]);
        $order = 1;

        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_size',
            'display_name' => 'حجم تصویر',
            'value' => '500',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_width',
            'display_name' => 'طول تصویر',
            'value' => '700',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_height',
            'display_name' => 'عرض تصویر',
            'value' => '450',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_extension',
            'display_name' => 'پسوند های مجاز تصویر',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_destination',
            'display_name' => 'مسیر ذخیره تصویر',
            'value' => "gallery/image/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'gallery_item',
            'display_name' => 'تنظیمات تصاویر گالری',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_size',
            'display_name' => 'حجم لوگو',
            'value' => '500',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_width',
            'display_name' => 'طول لوگو',
            'value' => '250',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_height',
            'display_name' => 'عرض لوگو',
            'value' => '250',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_extension',
            'display_name' => 'پسوند های مجاز لوگو',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'logo_destination',
            'display_name' => 'مسیر ذخیره لوگو',
            'value' => "gallery_item/logo/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_size',
            'display_name' => 'حجم تصویر',
            'value' => '500',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_width',
            'display_name' => 'طول تصویر',
            'value' => '700',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_height',
            'display_name' => 'عرض تصویر',
            'value' => '450',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_extension',
            'display_name' => 'پسوند های مجاز تصویر',
            'value' => "jpg, jpeg, png",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'image_destination',
            'display_name' => 'مسیر ذخیره تصویر',
            'value' => "gallery_item/image/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

        $setting_group = SettingGroup::create([
            'name' => 'attachment',
            'display_name' => 'تنظیمات فایل های ضمیمه',
        ]);
        $order = 1;
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'attachment_size',
            'display_name' => 'حجم فایل ضمیمه',
            'value' => '2048',
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'attachment_extension',
            'display_name' => 'پسوند های مجاز فایل ضمیمه',
            'value' => "doc,docx,pdf,zip,rar,txt",
            'details' => '',
            'type' => 'text',
            'direction' => 'inherit',
            'order' => $order++
        ]);
        Setting::create([
            'setting_group_id' => $setting_group->id,
            'name' => 'attachment_destination',
            'display_name' => 'مسیر ذخیره فایل ضمیمه',
            'value' => "attachment/",
            'details' => '',
            'type' => 'text',
            'direction' => 'ltr',
            'order' => $order++
        ]);

    }
}
