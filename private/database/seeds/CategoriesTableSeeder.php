<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        Category::truncate();
        $order=1;

        Category::create([
           'author_id'=>1,
           'parent_id'=>null,
           'name'=>'الفندق',
           'special_name'=>'hotel',
           'type'=>'project',
           'status'=>1,
            'order'=>$order++
        ]);
        Category::create([
           'author_id'=>1,
           'parent_id'=>null,
           'name'=>'اداریه / تجاریه',
           'special_name'=>'office / trade',
           'type'=>'project',
           'status'=>1,
            'order'=>$order++
        ]);
        Category::create([
           'author_id'=>1,
           'parent_id'=>null,
           'name'=>'سکني',
           'special_name'=>'residential',
           'type'=>'project',
           'status'=>1,
            'order'=>$order++
        ]);
        Category::create([
           'author_id'=>1,
           'parent_id'=>null,
           'name'=>'الفندق',
           'special_name'=>'hotel',
           'type'=>'project',
           'status'=>1,
            'order'=>$order++
        ]);
        Category::create([
           'author_id'=>1,
           'parent_id'=>null,
           'name'=>'اخبار',
           'special_name'=>'news',
           'type'=>'news',
           'status'=>1,
            'order'=>1
        ]);
    }
}
