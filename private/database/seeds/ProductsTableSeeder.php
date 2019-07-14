<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        Product::truncate();
        $order=1;

        Product::create([
            'author_id'=>1,
            'category_id'=>1,
            'type'=>'project',
            'title'=>'فندق شوموس',
            'sub_title'=>'مشهد / امام الرضا بلفد',
            'summary'=>'إنها حقيقة ثابتة منذ فترة طويلة وهي أن القارئ سيصرف انتباهه عن المحتوى المقروء للصفحة عند النظر في تصميمها.',
            'description'=>'إنها حقيقة ثابتة منذ فترة طويلة وهي أن القارئ سيصرف انتباهه عن المحتوى المقروء للصفحة عند النظر في تصميمها. إن الهدف من استخدام هو أنه يحتوي على توزيع طبيعي إلى حد ما للرسائل ، بدلاً من استخدام "المحتوى هنا ، المحتوى هنا" ، مما يجعله يبدو مقروءًا باللغة الإنجليزية. تستخدم الآن العديد من حزم نشر سطح المكتب ومحرري صفحات الويب كنص نموذجهم الافتراضي ، وسيكشف البحث عن العديد من المواقع التي لا تزال في بدايتها. تطورت الإصدارات المختلفة على مر السنين ، وأحيانًا عن طريق الصدفة ، وأحيانًا عن قصد (الفكاهة المحقونة وما شابه ذلك).',
            'image'=>'project_01.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'مشهد / امام الرضا بلفد',
                'skeleton'=>'الخرسانه',
                'opening'=>'14 مترا',
                'ceiling_thickness'=>'90،000 متر مربع',
                'operating_time'=>'صیف 95',
            ])
        ]);
        Product::create([
            'author_id'=>1,
            'category_id'=>2,
            'type'=>'project',
            'title'=>'مشروع التجاری الزمزم',
            'sub_title'=>'طهران / نیاوران بلفد',
            'summary'=>'تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 24000 متر مربع',
            'description'=>'مشروع التجاری الزمزم - تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 24000 متر مربع',
            'image'=>'project_02.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'طهران / نیاوران بلفد',
                'skeleton'=>'المعدنية',
                'opening'=>'40 مترا',
                'ceiling_thickness'=>'16،000 متر مربع',
                'operating_time'=>'شتاء 95',
            ])
        ]);
        Product::create([
            'author_id'=>1,
            'category_id'=>2,
            'type'=>'project',
            'title'=>'مشروع سیاحی البدیده المشهد',
            'sub_title'=>'مشهد / شاندیز',
            'summary'=>'تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 250000 متر مربع',
            'description'=>'مشروع سیاحی البدیده المشهد- تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 250000 متر مربع',
            'image'=>'project_03.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'مشهد / شاندیز',
                'skeleton'=>'الخرسانه',
                'opening'=>'16 مترا',
                'ceiling_thickness'=>'50،000 متر مربع',
                'operating_time'=>'شتاء 95',
            ])
        ]);
        Product::create([
            'author_id'=>1,
            'category_id'=>3,
            'type'=>'project',
            'title'=>'مشروع سكني',
            'sub_title'=>'طهران / مخابرات بلفد',
            'summary'=>'تتصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 8000 متر مربع',
            'description'=>'تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 8000 متر مربع - تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 8000 متر مربع',
            'image'=>'project_03.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'طهران / مخابرات بلفد',
                'skeleton'=>'الخرسانه',
                'opening'=>'40 مترا',
                'ceiling_thickness'=>'8،000 متر مربع',
                'operating_time'=>'صیف 94',
            ])
        ]);

        Product::create([
            'author_id'=>1,
            'category_id'=>1,
            'type'=>'project',
            'title'=>'فندق شوموس',
            'sub_title'=>'مشهد / امام الرضا بلفد',
            'summary'=>'إنها حقيقة ثابتة منذ فترة طويلة وهي أن القارئ سيصرف انتباهه عن المحتوى المقروء للصفحة عند النظر في تصميمها.',
            'description'=>'إنها حقيقة ثابتة منذ فترة طويلة وهي أن القارئ سيصرف انتباهه عن المحتوى المقروء للصفحة عند النظر في تصميمها. إن الهدف من استخدام هو أنه يحتوي على توزيع طبيعي إلى حد ما للرسائل ، بدلاً من استخدام "المحتوى هنا ، المحتوى هنا" ، مما يجعله يبدو مقروءًا باللغة الإنجليزية. تستخدم الآن العديد من حزم نشر سطح المكتب ومحرري صفحات الويب كنص نموذجهم الافتراضي ، وسيكشف البحث عن العديد من المواقع التي لا تزال في بدايتها. تطورت الإصدارات المختلفة على مر السنين ، وأحيانًا عن طريق الصدفة ، وأحيانًا عن قصد (الفكاهة المحقونة وما شابه ذلك).',
            'image'=>'project_01.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'مشهد / امام الرضا بلفد',
                'skeleton'=>'الخرسانه',
                'opening'=>'14 مترا',
                'ceiling_thickness'=>'90،000 متر مربع',
                'operating_time'=>'صیف 95',
            ])
        ]);
        Product::create([
            'author_id'=>1,
            'category_id'=>2,
            'type'=>'project',
            'title'=>'مشروع التجاری الزمزم',
            'sub_title'=>'طهران / نیاوران بلفد',
            'summary'=>'تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 24000 متر مربع',
            'description'=>'مشروع التجاری الزمزم - تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 24000 متر مربع',
            'image'=>'project_02.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'طهران / نیاوران بلفد',
                'skeleton'=>'المعدنية',
                'opening'=>'40 مترا',
                'ceiling_thickness'=>'16،000 متر مربع',
                'operating_time'=>'شتاء 95',
            ])
        ]);
        Product::create([
            'author_id'=>1,
            'category_id'=>2,
            'type'=>'project',
            'title'=>'مشروع سیاحی البدیده المشهد',
            'sub_title'=>'مشهد / شاندیز',
            'summary'=>'تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 250000 متر مربع',
            'description'=>'مشروع سیاحی البدیده المشهد- تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 250000 متر مربع',
            'image'=>'project_03.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'مشهد / شاندیز',
                'skeleton'=>'الخرسانه',
                'opening'=>'16 مترا',
                'ceiling_thickness'=>'50،000 متر مربع',
                'operating_time'=>'شتاء 95',
            ])
        ]);
        Product::create([
            'author_id'=>1,
            'category_id'=>3,
            'type'=>'project',
            'title'=>'مشروع سكني',
            'sub_title'=>'طهران / مخابرات بلفد',
            'summary'=>'تتصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 8000 متر مربع',
            'description'=>'تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 8000 متر مربع - تصميم وتنفيذ أسطح الوافل بجميع الطوابق بمساحة 8000 متر مربع',
            'image'=>'project_03.jpg',
            'order'=>$order++,
           'status'=>1,
            'attributes'=>json_encode([
                'address'=>'طهران / مخابرات بلفد',
                'skeleton'=>'الخرسانه',
                'opening'=>'40 مترا',
                'ceiling_thickness'=>'8،000 متر مربع',
                'operating_time'=>'صیف 94',
            ])
        ]);
    }
}
