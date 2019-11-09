@extends('front.master.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="col-md-12" style="margin-top: 20px;" role="form" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{__('lang.username')}}</label>
                            <input type="text" class="validate @error('name') 'invalid'  @enderror" value="{{old('name')}}"  name="name" >
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.title')}}</label>
                            <input type="text" class="validate @error('title') 'invalid'  @enderror" value="{{old('title')}}" name="title" >
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.des')}}</label>
                            <textarea type="text" class="materialize-textarea @error('des') 'invalid'  @enderror" name="des">{{old('des')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.bdate')}}</label>
                            <input type="date"  name="bdate" class="validate @error('bdate') 'invalid'  @enderror" value="{{old('bdate')}}">
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.image')}}</label>
                            <input type="file"  name="image" class="validate @error('image') 'invalid'  @enderror" value="{{old('image')}}">
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.email')}}</label>
                            <input type="email"  name="email" class="validate @error('email') 'invalid'  @enderror" value="{{old('email')}}">
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.password')}}</label>
                            <input type="password"  name="password">
                        </div>

                        <div class="form-group">
                            <label >{{__('lang.re-password')}}</label>
                            <input type="password"  name="password_confirmation">
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{__('lang.auth_create')}}
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
