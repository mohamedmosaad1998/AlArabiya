@extends('front.master.master')

@section('content')
    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="log-in-pop-left">
                            <h1>{{trans('lang.hello')}}</h1>
                            <p>
                                {{trans('lang.hello_message')}}
                            </p>
                        </div>
                        <div class="log-in-pop-right">
                            <h4>{{trans('lang.login')}}</h4>
                            @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <form class="s12">
                                <div>
                                    <div class="input-field s12">
                                        <input id="email" type="email" class="validate @error('email') invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label>{{trans('lang.email')}}</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field s12">
                                        <input type="password" class="validate @error('email') invalid @enderror" name="password" required autocomplete="current-password">
                                        <label>{{trans('lang.password')}}</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="s12 log-ch-bx">
                                        <p style="text-align: left !important;">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="test5"/>
                                            <label for="test5">{{trans('lang.remember')}}</label>
                                        </p>
                                    </div>
                                </div>

                                <div>
                                    <div class="input-field s4">
                                        <input type="submit" value="{{trans('lang.login')}}" class="waves-effect waves-light log-in-btn"> </div>
                                </div>
                                <div>
                                    <div class="input-field s12"> <a href="{{route('password.request')}}" >{{trans('lang.forgot')}}</a> | <a href="{{route('register')}}" >{{trans('lang.auth_create')}}</a> </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
@endsection
