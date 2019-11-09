<div class="home-top-cour">
    <!--POPULAR COURSES IMAGE-->
    <div class="col-md-3"> <img src="{{asset('uploads/'.$course->image)}}" alt=""> </div>
    <!--POPULAR COURSES: CONTENT-->
    <div class="col-md-9 col-xs-12 home-top-cour-desc">
        <a href="{{route('course.show',['course'=>$course->id])}}">
            <h3>{{$course->title}}</h3>
        </a>
        <p>

            {{substr($course->description,0,100)}}
        </p>
        <span class="home-top-cour-rat" style="background-color: {{($course->active)?'green':'red'}}">{{($course->active)?'مؤكد':'غير مؤكد'}}</span>
        <div class="hom-list-share">
            <ul>
                <li style="width: 100%;"><a href="{{route('course.show',$course)}}"><i class="fa fa-bar-chart" aria-hidden="true"></i>{{trans('lang.see-details')}}</a> </li>
                <li style="width: 100%;"><a href="#"><i class="fa fa-calendar-times-o" aria-hidden="true"></i>{{\Carbon\Carbon::parse($course->startDate)->format('M d')}}</a> </li>
            </ul>
        </div>
    </div>
</div>

