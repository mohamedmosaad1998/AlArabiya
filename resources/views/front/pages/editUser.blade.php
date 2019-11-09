@extends('front.master.profileView')

@section('profile')

    <div class="udb-sec udb-prof">
        @if (session()->has('message'))
            <div class="alert alert-success"align="center">{{session('message')}}</div>
        @endif
        <form action="{{route('user.update',auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="">{{trans('lang.title')}}</label>
                <input type="text" class="validate" name="title" value="{{$user->title}}" required>
            </div>

            <div class="form-group">
                <label for="">{{trans('lang.username')}}</label>
                <input type="text"  class="validate" name="name" value="{{$user->name}}" required>
            </div>

            <div class="form-group">
                <label for="">{{trans('lang.email')}}</label>
                <input type="email"  class="validate" name="email" value="{{$user->email}}" required>
            </div>
            <div class="form-group">
                <label for="">{{trans('lang.des')}}</label>
                <textarea class="materialize-textarea" name="des" id="" rows="3">{{$user->des}}</textarea>
            </div>

            <div class="form-group">
                <label for="">{{trans('lang.image')}}</label>
                <input type="file"  class="validate" name="image" value="{{$user->image}}">
            </div>

            <button type="submit" class="btn btn-warning col-md-12">{{trans('lang.edit')}}</button>

        </form>
    </div>

@endsection
