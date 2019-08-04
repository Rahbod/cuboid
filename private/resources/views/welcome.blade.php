<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

<div class="tab-content d-none" id="pills-tabContent2">
    <div class="tab-pane fade show active" id="pills-path" role="tabpanel"
         aria-labelledby="pills-path-tab">

        <div class="card d-none d-xl-inline-block">
            <div class="orangeTitle bg-orange">
                <span class="d-block">نوع القالب</span>
                <span>كيوبويد</span>
            </div>
            <div class="card-title bg-grey-c greyTitle">

                <span>سبان(m)</span>
            </div>

            <div class="card-body">
                <ul>
                    <li>
                        <span>سمك السقف (cm)</span>

                    </li>
                    <li></li>
                    <li>
                        <span class="d-block shortLineHeight">سمك يعادل</span>
                        <span>الخرسانة (cm)</span>

                    </li>
                    <li></li>
                    <li>

                        <span>سمك السقف (cm)</span>

                    </li>
                    <li></li>
                    <li>
                        <span class="d-block shortLineHeight">سمك يعادل</span>
                        <span>الخرسانة (cm)</span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="card">
            <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
                <span class="d-lg-none">نوع القالب</span>

                <span>CU400</span>
            </div>

            <img class="card-img-top"
                 src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                 alt="Card image cap">

            <div class="card-body">
                <ul>
                    <li class="products--firstRow">
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span class="d-lg-none">(m)سبان</span>
                            <span>12</span>
                            <span>16</span>
                        </div>
                    </li>
                    <li></li>

                    <li class="products--thirdRow">
                        <div class="d-flex justify-content-between">

                            <span class="d-lg-none">سمك السقف (cm)</span>
                            <span>46</span>
                            <span>47</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products-fifthRow">
                        <div class="d-flex justify-content-between">

                            <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                            <span>18.9</span>
                            <span>19.9</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--seventhRow">
                        <div class="d-flex justify-content-between">

                            <span class="d-lg-none">سمك السقف (cm)</span>
                            <span>48</span>
                            <span>48</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--ninthRow">
                        <div class="d-flex justify-content-between">

                            <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                            <span>20.9</span>
                            <span>20.9</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end">
                <span class="d-lg-none">نوع القالب</span>

                <span>CU300</span>
            </div>
            <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">
                <span class="d-lg-none">(m)سبان</span>

                <span>10</span>
                <span>12</span>
            </div>

            <img class="card-img-top"
                 src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                 alt="Card image cap">

            <div class="card-body">
                <ul>
                    <li class="products--firstRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك السقف (cm)</span>

                            <span>35</span>
                            <span>36</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products-thirdRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>

                            <span>15.5</span>
                            <span>16.5</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--fifthRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك السقف (cm)</span>

                            <span>38</span>
                            <span>38</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--seventhRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>

                            <span>18.5</span>
                            <span>8.5</span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="card">
            <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end">
                <span class="d-lg-none">نوع القالب</span>

                <span>CU240</span>
            </div>
            <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">
                <span class="d-lg-none">(m)سبان</span>

                <span>8</span>
                <span>10</span>
            </div>

            <img class="card-img-top"
                 src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                 alt="Card image cap">

            <div class="card-body">
                <ul>
                    <li class="products--firstRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك السقف (cm)</span>

                            <span>29</span>
                            <span>30</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products-thirdRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>

                            <span>12.3</span>
                            <span>13.3</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--fifthRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك السقف (cm)</span>

                            <span>29</span>
                            <span>31</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--seventhRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>

                            <span>12.3</span>
                            <span>14.3</span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="card">
            <div class="lastItem orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end">
                <span class="d-lg-none">نوع القالب</span>
                <span>CU180</span>
            </div>

            <div class="btlr bblr card-title bg-grey-c greyTitle  d-flex justify-content-between">
                <span class="d-lg-none">(m)سبان</span>

                <span>6</span>
                <span>8</span>
            </div>

            <img class="card-img-top"
                 src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                 alt="Card image cap">
            <div class="card-body">
                <ul>
                    <li class="products--firstRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك السقف (cm)</span>

                            <span>23</span>
                            <span>24</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products-thirdRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>

                            <span>10.5</span>
                            <span>11.5</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--fifthRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك السقف (cm)</span>

                            <span>23</span>
                            <span>25</span>
                        </div>
                    </li>
                    <li></li>
                    <li class="products--seventhRow">
                        <div class="d-flex justify-content-between">
                            <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>

                            <span>10.5</span>
                            <span>12.5</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @if(isset($rahimi_added_product_attrs))
            @foreach($products as $product)
                <div class="card">
                    <div class="{{$loop->last ? 'lastItem' : ''}} orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
                        <span class="d-lg-none">نوع القالب</span>

                        <span>{{$product['title']}}</span>
                    </div>
                    <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                        <span class="d-lg-none">(m)سبان</span>
                        <span>{{$product['crater'][0]}}</span>
                        <span>{{$product['crater'][1]}}</span>
                    </div>

                    <img class="card-img-top"
                         src="{{asset($product['image'])}}"
                         alt="{{$product['title']}}">

                    <div class="card-body">
                        <ul>
                            <li>
                                <div class="d-flex justify-content-between">

                                    <span class="d-lg-none">سمك السقف (cm)</span>
                                    <span>{{$product['thickness-of-the-ceiling'][0]}}</span>
                                    <span>{{$product['thickness-of-the-ceiling'][1]}}</span>
                                </div>
                            </li>
                            <li></li>
                            <li>
                                <div class="d-flex justify-content-between">

                                    <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                                    <span>{{$product['thickness-equivalent-to-concrete'][0]}}</span>
                                    <span>{{$product['thickness-equivalent-to-concrete'][1]}}</span>
                                </div>
                            </li>
                            <li></li>
                            <li>
                                <div class="d-flex justify-content-between">

                                    <span class="d-lg-none">سمك السقف (cm)</span>
                                    <span>{{$product['thickness-of-the-ceiling'][0]}}</span>
                                    <span>{{$product['thickness-of-the-ceiling'][1]}}</span>
                                </div>
                            </li>
                            <li></li>
                            <li>
                                <div class="d-flex justify-content-between">

                                    <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                                    <span>{{$product['thickness-equivalent-to-concrete'][0]}}</span>
                                    <span>{{$product['thickness-equivalent-to-concrete'][1]}}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
</div>


{{--new--}}
<div class="tab-pane fade show active d-none" id="pills-path" role="tabpanel"
     aria-labelledby="pills-path-tab">

    <div class="card d-none d-xl-inline-block">
        <div class="orangeTitle bg-orange">
            <span class="d-block">نوع القالب</span>
            <span>كيوبويد</span>
        </div>

        <div class="card-body">
            <ul>
                <li class="card-title firstBox">
                    <span>سبان(m)</span>

                </li>

                <li></li>

                <li class="products--thirdRow">
                    <span>سمك السقف (cm)</span>

                </li>
                <li></li>
                <li class="products-fifthRow">
                    <span class="d-block shortLineHeight">سمك يعادل</span>
                    <span>الخرسانة (cm)</span>

                </li>
                <li></li>
                <li class="products--seventhRow">

                    <span>سمك السقف (cm)</span>

                </li>
                <li></li>
                <li class="products--ninthRow">
                    <span class="d-block shortLineHeight">سمك يعادل</span>
                    <span>الخرسانة (cm)</span>
                </li>
            </ul>
        </div>

    </div>
    <div class="card">
        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
            <span class="d-lg-none">نوع القالب</span>

            <span>CU400</span>
        </div>

        <img class="card-img-top"
             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
             alt="Card image cap">

        <div class="card-body">
            <ul>
                <li class="products--firstRow">
                    <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                        <span class="d-lg-none">(m)سبان</span>
                        <span>12</span>
                        <span>16</span>
                    </div>
                </li>
                <li></li>

                <li class="products--thirdRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>46</span>
                        <span>47</span>
                    </div>
                </li>
                <li></li>
                <li class="products-fifthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                        <span>18.9</span>
                        <span>19.9</span>
                    </div>
                </li>
                <li></li>
                <li class="products--seventhRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>48</span>
                        <span>48</span>
                    </div>
                </li>
                <li></li>
                <li class="products--ninthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                        <span>20.9</span>
                        <span>20.9</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
            <span class="d-lg-none">نوع القالب</span>

            <span>CU400</span>
        </div>

        <img class="card-img-top"
             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
             alt="Card image cap">

        <div class="card-body">
            <ul>
                <li class="products--firstRow">
                    <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                        <span class="d-lg-none">(m)سبان</span>
                        <span>12</span>
                        <span>16</span>
                    </div>
                </li>
                <li></li>

                <li class="products--thirdRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>46</span>
                        <span>47</span>
                    </div>
                </li>
                <li></li>
                <li class="products-fifthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                        <span>18.9</span>
                        <span>19.9</span>
                    </div>
                </li>
                <li></li>
                <li class="products--seventhRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>48</span>
                        <span>48</span>
                    </div>
                </li>
                <li></li>
                <li class="products--ninthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                        <span>20.9</span>
                        <span>20.9</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
            <span class="d-lg-none">نوع القالب</span>

            <span>CU400</span>
        </div>

        <img class="card-img-top"
             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
             alt="Card image cap">

        <div class="card-body">
            <ul>
                <li class="products--firstRow">
                    <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                        <span class="d-lg-none">(m)سبان</span>
                        <span>12</span>
                        <span>16</span>
                    </div>
                </li>
                <li></li>

                <li class="products--thirdRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>46</span>
                        <span>47</span>
                    </div>
                </li>
                <li></li>
                <li class="products-fifthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                        <span>18.9</span>
                        <span>19.9</span>
                    </div>
                </li>
                <li></li>
                <li class="products--seventhRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>48</span>
                        <span>48</span>
                    </div>
                </li>
                <li></li>
                <li class="products--ninthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                        <span>20.9</span>
                        <span>20.9</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
            <span class="d-lg-none">نوع القالب</span>

            <span>CU400</span>
        </div>

        <img class="card-img-top"
             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
             alt="Card image cap">

        <div class="card-body">
            <ul>
                <li class="products--firstRow">
                    <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                        <span class="d-lg-none">(m)سبان</span>
                        <span>12</span>
                        <span>16</span>
                    </div>
                </li>
                <li></li>

                <li class="products--thirdRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>46</span>
                        <span>47</span>
                    </div>
                </li>
                <li></li>
                <li class="products-fifthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                        <span>18.9</span>
                        <span>19.9</span>
                    </div>
                </li>
                <li></li>
                <li class="products--seventhRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك السقف (cm)</span>
                        <span>48</span>
                        <span>48</span>
                    </div>
                </li>
                <li></li>
                <li class="products--ninthRow">
                    <div class="d-flex justify-content-between">

                        <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                        <span>20.9</span>
                        <span>20.9</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @if(isset($rahimi_added_product_attrs))
        @foreach($products as $product)
            <div class="card">
                <div class="{{$loop->last ? 'lastItem' : ''}} orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
                    <span class="d-lg-none">نوع القالب</span>

                    <span>{{$product['title']}}</span>
                </div>
                <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                    <span class="d-lg-none">(m)سبان</span>
                    <span>{{$product['crater'][0]}}</span>
                    <span>{{$product['crater'][1]}}</span>
                </div>

                <img class="card-img-top"
                     src="{{asset($product['image'])}}"
                     alt="{{$product['title']}}">

                <div class="card-body">
                    <ul>
                        <li>
                            <div class="d-flex justify-content-between">

                                <span class="d-lg-none">سمك السقف (cm)</span>
                                <span>{{$product['thickness-of-the-ceiling'][0]}}</span>
                                <span>{{$product['thickness-of-the-ceiling'][1]}}</span>
                            </div>
                        </li>
                        <li></li>
                        <li>
                            <div class="d-flex justify-content-between">

                                <span class="d-lg-none">سمك يعادل <br>الخرسانة (cm)</span>
                                <span>{{$product['thickness-equivalent-to-concrete'][0]}}</span>
                                <span>{{$product['thickness-equivalent-to-concrete'][1]}}</span>
                            </div>
                        </li>
                        <li></li>
                        <li>
                            <div class="d-flex justify-content-between">

                                <span class="d-lg-none">سمك السقف (cm)</span>
                                <span>{{$product['thickness-of-the-ceiling'][0]}}</span>
                                <span>{{$product['thickness-of-the-ceiling'][1]}}</span>
                            </div>
                        </li>
                        <li></li>
                        <li>
                            <div class="d-flex justify-content-between">

                                <span class="d-lg-none">سمك يعادل <br> الخرسانة (cm)</span>
                                <span>{{$product['thickness-equivalent-to-concrete'][0]}}</span>
                                <span>{{$product['thickness-equivalent-to-concrete'][1]}}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    @endif

</div>
