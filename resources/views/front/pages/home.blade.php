@extends('front.master.master')

@section('content')

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>University</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">{{trans('lang.all-courses')}}</a><a href="#" class="bann-btn-2">{{trans('lang.read-more')}}</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">{{trans('lang.all-courses')}}</a><a href="#" class="bann-btn-2">{{trans('lang.read-more')}}</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">{{trans('lang.all-courses')}}</a><a href="#" class="bann-btn-2">{{trans('lang.read-more')}}</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>University</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">{{trans('lang.all-courses')}}</a><a href="#" class="bann-btn-2">{{trans('lang.read-more')}}</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">{{trans('lang.read-more')}}</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">{{trans('lang.all-courses')}}</a><a href="#" class="bann-btn-2">{{trans('lang.read-more')}}</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>



    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>
                         <span>{{trans('lang.discover')}}</span>
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="ed-course">

                    @foreach ($events as $event)
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="ed-course-in home-top-cour">
                                <a class="course-overlay" href="{{route('course.show',$event)}}">
                                    <img src="{{asset('uploads/'.$event->image)}}" alt="">
                                    <span>{{$event->title}}</span>
                                </a>
                                <div class="ho-ev-date pos-r">
                                    <span>{{date_format($event->startDate,'M')}}</span>
                                    <span>{{date_format($event->startDate,'d')}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="clearfix"></div>

                <div class="text-center">
                    <a class="btn btn-success" href="{{route('course.index').'?active=true'}}">الدورات التدربية المؤكدة</a>
                </div>
            </div>
        </div>
    </section>

    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>
                         <span>استعرض الدورات التدريبية التي نقدمها</span>
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="ed-course">

                    @foreach ($newEvents as $event)
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="ed-course-in home-top-cour">
                                <a class="course-overlay" href="{{route('course.show',$event)}}">
                                    <img src="{{asset('uploads/'.$event->image)}}" alt="">
                                    <span>{{$event->title}}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                <div class="text-center">
                    {{$newEvents->links()}}
                </div>
            </div>
        </div>
    </section>



    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>
                        <span>الاقسام المؤكدة</span>
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="ed-course">

                    @foreach ($categories as $cat)
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="ed-course-in  home-top-cour">
                                <a class="course-overlay" href="{{route('category.show',$cat)}}">
                                    <img src="{{asset('uploads/'.$cat->image)}}" alt="">
                                    <span>
                                         <span style="color: {{($cat->active)?'/* var(--secColor) */':'red'}};">{{$cat->name}}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="clearfix"></div>
                <div class="text-center">
                    <a class="btn btn-success" href="{{route('category.index').'?active=true'}}">الاقسام المؤكدة</a>
                </div>
            </div>
        </div>
    </section>


    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2><span>{{trans('lang.popular')}}</span></h2>
                </div>
            </div>
            <div class="row">
            @foreach ($courses as $course)
                    <div class="col-md-6">
                        <div>
                            @include('front.master.courseTemp', ['course' => $course])
                        </div>
                    </div>
            @endforeach
            </div>
            <div class="clearfix"></div>
            {{$courses->links()}}
        </div>
    </section>
{{--    @if ($news->count()>0)--}}
{{--        <!-- UPCOMING EVENTS -->--}}
{{--        <section>--}}
{{--            <div class="container com-sp pad-bot-0">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-md-12">--}}

{{--                        <div class="ho-ev-latest ho-ev-latest-bg-2">--}}
{{--                            <div class="ho-lat-ev">--}}
{{--                                <h4>الاخبار</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="ho-event ho-event-mob-bot-sp">--}}
{{--                            <ul>--}}
{{--                                @foreach ($news as $new)--}}
{{--                                    <li>--}}

{{--                                        <div class="ho-ev-img"><img src="{{asset('uploads/'.$new->image)}}" alt=""></div>--}}

{{--                                        <div class="ho-ev-link">--}}

{{--                                            <a href="{{route('news.show',$new)}}"><h4>{{$new->title}}</h4></a>--}}

{{--                                            <p>{{htmlspecialchars(substr($new->content,0,50))}}</p>--}}

{{--                                            <span>{{\Carbon\Carbon::parse($new->created_at)->format('Y-M-d')}}</span>--}}

{{--                                        </div>--}}

{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                            {{$news->links()}}--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endif--}}

    <!-- SLIDER -->
    <section class="container">
        <h2 class="text-center">

        </h2>
        <div class="row">
            <div class="con-title">
                <h2>
                    <span>اراء المتدربين</span>
                </h2>
            </div>
        </div>
        <br>
        <div id="myOpaion" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: 300px;">
                <div class="item slider active">
                    <div class="carousel-caption slider-con " style="top:5%">
                        <h3>الاسم </h3>
                        <p>
                            التعليق
                        </p>
                    </div>
                </div>
                <div class="item slider">
                    <div class="carousel-caption slider-con " style="top:5%">
                        <h3>الاسم </h3>
                        <p>
                            التعليق
                        </p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myOpaion" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myOpaion" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- SLIDER -->
    <section class="container">
        <h2 class="text-center">

        </h2>
        <div class="row">
            <div class="con-title">
                <h2>
                    <span> تشرفن بمتدربين من :</span>
                </h2>
            </div>
        </div>
        <br>
        <div id="mylogs" class="carousel slide" data-ride="carousel" data-interval="2000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: 300px;">
                <div class="item active">
                    <div class="text-center">
                        <img src="{{asset('images/logo1.png')}}">
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <img src="{{asset('images/logo1.png')}}">
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <img src="{{asset('images/logo.png')}}">
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <img src="{{asset('images/logo11.png')}}">
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mylogs" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#mylogs" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>
    <!-- SLIDER -->
    <section class="container">
        <h2 class="text-center">

        </h2>
        <div class="row">
            <div class="con-title">
                <h2>
                    <span>
                        الخطة التدربية
                    <i class="fa fa-file-pdf-o"></i>
                    </span>
                </h2>
                <a href="{{asset('الخطة التدربية للشركة العربية للستشارات التربوية و التدريب.pdf')}}" download="الخطة التدربية للشركة العربية للستشارات التربوية و التدريب.pdf" class="btn">تحميل الخطة التدربية</a>
            </div>
        </div>
        <br>
    </section>

    @push('js')
        <script>
            $('#mylogs').
        </script>
    @endpush

@stop
