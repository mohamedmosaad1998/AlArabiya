@extends('front.master.master')

@section('seo')

    <?php $seo=json_decode($course->meta); ?>

    @if ($seo!=null)
        @foreach ($seo as $s)<meta name="{{$s->name}}" content="{{$s->desc}}">@endforeach
    @endif

    @foreach (explode(' ',$course->title) as $s)
        <meta name="keywords" content="{{$s}}">
    @endforeach

    @foreach (explode(' ',$course->description) as $s)
        <meta name="keywords" content="{{$s}}">
    @endforeach

@stop

@section('content')
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-8">
                        <div class="cor-mid-img">
                            <img src="{{asset('uploads/'.$course->image)}}" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>{{$course->title}}</h2>
                                <span>{{trans('lang.category')}}:<a href="{{route('category.show',$course->category->id)}}">{{$course->category->name}}</a></span>
                            </div>
                            <div class="cor-p4">
                                <h3>{{trans('lang.course-details')}}</h3>
                                <p>
                                    {!! $course->description !!}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-2" style="background: url({{asset('uploads/'.$course->user->image)}}) no-repeat">
                                <div class="ho-lat-ev">
                                    <a href="{{route('user.show',$course->user->id)}}">
                                        <h4>{{$course->user->title}}.{{$course->user->name}}</h4>
                                        <p>{{$course->user->des}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->



@stop
