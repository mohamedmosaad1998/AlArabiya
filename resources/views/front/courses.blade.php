@extends('front.master.master')
@section('content')
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    @if (isset($categoryName))
                        <h2><span>{{trans('lang.category')}} : {{$categoryName}}</span></h2>
                    @elseif (isset($_GET['search']))
                        <h2><span>البحث عن: {{$_GET['search']}}</span></h2>

                    @else
                        <h2><span>{{trans('lang.all-courses')}}</span></h2>
                    @endif
                </div>
            </div>
            <div class="row">
                @if ($courses->count()>0)
                    @foreach ( $courses as $key => $course)
                        <div class="col-md-6">
                            <div>
                            @if (($key)%2==0)
                                <!--POPULAR COURSES-->
                                    @include('front.master.courseTemp', ['course' => $course])
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                            @if (($key)%2==1)
                                <!--POPULAR COURSES-->
                                    @include('front.master.courseTemp', ['course' => $course])
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-danger text-center">
                       <b> لا يوجد اي دورات تدربية حاليا</b>
                    </div>
                @endif
                <div class="clearfix"></div>
                    {{$courses->links()}}

            </div>
        </div>
    </section>
@endsection
