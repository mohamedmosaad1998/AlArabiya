@extends('front.master.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <br>

                <div class="card-body">

                @if (session('status'))
                        <br><br><br>

                    <div class="alert alert-success text-center" role="alert">
                        <h4 class="text-center">{{ __('lang.mail-send') }}</h4>
                    </div>
                        <br><br><br>
                @else
                    <h1 class="text-center">{{trans('lang.forgot')}}</h1>
                    <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('lang.email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="@error('email') invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center offset-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('lang.forget-password') }}
                                    </button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                    </form>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
