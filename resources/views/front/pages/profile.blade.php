@extends('front.master.profileView')
@section('profile')
    <div class="udb-sec udb-prof">
        <h4>{{trans('lang.des')}} <img src="{{asset('uploads/'.$user->image)}}" alt="" /> </h4>
        <p>
            {{$user->des}}
        </p>
    </div>
@stop
