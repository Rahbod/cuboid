<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        Content::truncate();
        $order=1;

        Content::create([
            'author_id'=>1,
            'category_id'=>5,
            'type'=>'news',
            'title'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'summary'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'text'=>'تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن',
            'image'=>'content_01.jpg',
            'logo'=>'content_01.jpg',
            'order'=>$order++,
            'status'=>1,
            'show_count'=>0,
        ]);
        Content::create([
            'author_id'=>1,
            'category_id'=>5,
            'type'=>'news',
            'title'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'summary'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'text'=>'تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن',
            'image'=>'content_02.jpg',
            'logo'=>'content_02.jpg',
            'order'=>$order++,
            'status'=>1,
            'show_count'=>0,
        ]);
        Content::create([
            'author_id'=>1,
            'category_id'=>5,
            'type'=>'news',
            'title'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'summary'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'text'=>'تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن',
            'image'=>'content_03.jpg',
            'logo'=>'content_03.jpg',
            'order'=>$order++,
            'status'=>1,
            'show_count'=>0,
        ]);
        Content::create([
            'author_id'=>1,
            'category_id'=>5,
            'type'=>'news',
            'title'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'summary'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'text'=>'تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن',
            'image'=>'content_04.jpg',
            'logo'=>'content_04.jpg',
            'order'=>$order++,
            'status'=>1,
            'show_count'=>0,
        ]);
        Content::create([
            'author_id'=>1,
            'category_id'=>5,
            'type'=>'news',
            'title'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'summary'=>'حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء',
            'text'=>'تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن',
            'image'=>'content_05.jpg',
            'logo'=>'content_05.jpg',
            'order'=>$order++,
            'status'=>1,
            'show_count'=>0,
        ]);
    }
}
