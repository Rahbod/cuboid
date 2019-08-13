<div class="smallHeader">
    <div class="container px-md-4">
        <div class="row">
            <div class="col-12 col-sm-9 text-center text-sm-right">
                <div class="smallHeader__title">
                    <p class="upTitle">سقف الوفل</p>
                    <h1 class="title">كيوبويد</h1>
                    @if(isset($type))
                        @if($type == 'project')
                            <h2 class="sectionTitle">  / المشاريع</h2>
                        @elseif($type == 'product')
                            <h2 class="sectionTitle">  / المنتجات</h2>
                        @elseif($type == 'news')
                            <h2 class="sectionTitle">  / الأخبار</h2>
                        @elseif($type == 'article')
                            <h2 class="sectionTitle">  / مقالة</h2>
                        @endif
                    @endif

                    <span class="subTitle  float-sm-left">الإختيار الطبيعي</span>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="text-left h-100 d-flex align-items-center">
                    <a href="{{url('/')}}" class="mr-auto smallHeader__logo">
                        <img class="img-fluid" src="{{asset('/assets/site/media/images/cuboid-logo.png')}}" alt="">
                    </a>
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
