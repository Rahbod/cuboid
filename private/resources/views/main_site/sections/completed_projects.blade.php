<section class="completedProjects">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="content--header sectionTitle">المشاريع المنجزة</h2>

                <p class="content--text">المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                    المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                </p>
            </div>
            <div class="col-md-6 my-md-auto">
                <ul class="nav nav-pills" id="pills-tab" role="tablist" style="justify-content: flex-end;">
                    <li class="nav-item">
                        <a class="nav-link active"
                           id="pills-all-projects-tab" data-toggle="pill" href="#pills-all-projects" role="tab"
                           aria-controls="pills-all-projects" aria-selected="true">جمیع المشاریع</a>
                    </li>

                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link"
                               id="pills-{{$category->id}}-tab" data-toggle="pill" href="#pills-{{$category->id}}"
                               role="tab"
                               aria-controls="pills-{{$category->id}}" aria-selected="false">{{$category->name}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all-projects" role="tabpanel"
                 aria-labelledby="pills-all-projects-tab">
                <div id="completedProjects--all-projects" class="owl-carousel">
                    @foreach($categories as $category)
                        @foreach($category->projects as $project)
                            <div class="card">
                                <img class="card-img-top" src="{{asset($project->image)}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$project->title}}</h4>
                                    <h5 class="card-sub-title">{{$project->sub_title}}</h5>
                                    <p class="card-text">
                                        {{$project->summary}}
                                    </p>
                                </div>
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">{{$project->title}}</h4>
                                    <h5 class="card-sub-title text-white">{{$project->sub_title}}</h5>
                                    <p class="card-text">
                                        {{$project->description}}
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="{{url('/projects/'.$project->id)}}" class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>


            @foreach($categories as $category)
                <div class="tab-pane fade" id="pills-{{$category->id}}" role="tabpanel"
                     aria-labelledby="pills-{{$category->id}}-tab">
                    <div id="completedProjects--{{$category->id}}" class="owl-carousel">
                        @foreach($category->projects as $project)
                            <div class="card">
                                <img class="card-img-top" src="{{asset($project->image)}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$project->title}}</h4>
                                    <h5 class="card-sub-title">{{$project->sub_title}}</h5>
                                    <p class="card-text">
                                        {{$project->summary}}
                                    </p>
                                </div>
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">{{$project->title}}</h4>
                                    <h5 class="card-sub-title text-white">{{$project->sub_title}}</h5>
                                    <p class="card-text">
                                        {{$project->description}}
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="{{url('/projects/show/'.$project->id)}}"
                                           class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
