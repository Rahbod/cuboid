<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <div class="questionMark ml-3">
                        <img src="{{asset('/assets/site/media/images/faq/question-mark.png')}}" class="img-fluid"
                             alt="">
                    </div>
                    <div class="faq__descriptions flex-fill">
                        <h2 class="sectionTitle">
                            أسئلة مكررة
                        </h2>
                        <p class="m-0">
                            معظم الأسئلة التي طرحها عملاؤنا هي إجاباتنا
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="owl-carousel" id="faqCarousel">
                    @foreach($faqs as $faq)
                        <div class="faq--item">
                            <h5 class="sectionTitle">{{$faq->question}}</h5>
                            <p class="quotation">{!! $faq->answer !!}</p>

                            <div class="text-left">
                                <a href="" class="btn btn-outline-light">
                                    اکثر من
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>