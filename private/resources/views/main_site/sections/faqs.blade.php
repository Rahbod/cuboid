<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex align-items-center mb-50">
                    <div class="questionMark ml-3">
                        <img src="{{asset('/assets/site/media/images/faq/question-mark.png')}}" class="img-fluid"
                             alt="">
                    </div>
                    <div class="faq__descriptions flex-fill">
                        <h2 class="sectionTitle">
                            أسئلة مكررة
                        </h2>
                        <p class="m-0 sectionDescription">
                            معظم الأسئلة التي طرحها عملاؤنا هي إجاباتنا
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="owl-carousel" id="faqCarousel">
                    @foreach($faqs as $faq)
                        <div class="faq--item">
                            <h5 class="faq--item__title">{{$faq->question}}</h5>
                            <p class="faq--item__answer quotation">{!! $faq->answer !!} <span></span></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 mb-5 mt-5 mb-md-0">
                <div class="text-center text-md-left">
                    <a href="{{url('/faqs')}}" class="btn btn-outline-light">
                        كل الأسئلة
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>