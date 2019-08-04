@foreach($projects as $project)
    <div class="col-12 col-md-3">
        <div class="card" style="margin-bottom: 10px;">
            <img class="card-img-top" src="{{$project->image}}"
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
                    {!! $project->description !!}
                </p>
                <div class="text-right moreBtn">
                    <a title="{{$project->title}}"
                       href="{{url('/'.str_plural($type).'/show/'.$project->id)}}"
                       class="btn btn-outline-light">
                        اكثر من
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach