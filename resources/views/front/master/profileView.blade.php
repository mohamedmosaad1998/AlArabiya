@extends('front.master.master')
@section('content')
    <!--SECTION START-->
    <section>
        <div class="pro-cover" style=" background:url('{{asset('images/pro-bg.jpg')}}') no-repeat center center"></div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-8 col-md-offset-4">
                    <ul>
                        <li><a href="{{route('user.show',$user->id)}}" class="{{(url()->current()==route('user.show',$user->id))?'pro-act':'' }}">{{trans('lang.profile')}}</a></li>
                        @if (Auth::user()->id === $user->id)
                            <li><a href="{{route('user.edit',$user->id)}}" class="{{(url()->current()==route('user.edit',$user->id))?'pro-act':'' }}">{{trans('lang.edit')}}</a></li>
                            <li><a href="{{route('user.change',$user->id)}}" class="{{(url()->current()==route('user.change',$user->id))?'pro-act':'' }}">{{trans('lang.change-password')}}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-4">
                    <div class="pro-user" style="background-color: #fff">
                        <img src="{{asset('uploads/'.$user->image)}}" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>{{trans('lang.username')}}</h4><p>{{$user->name}}</p>
                            </li>
                            <li>
                                <h4>{{trans('lang.bdate')}}</h4><p>{{date_format($user->bdate,'Y-m-d')}}</p>
                            </li>
                            <li>
                                <h4>{{trans('lang.email')}}</h4><p>{{$user->email}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="udb">
                        @yield('profile')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

@stop
