@extends('front.master.profileView')

@section('profile')
    <div class="udb-sec udb-prof">
        @if (session()->has('message'))
            <div class="alert alert-success"align="center">{{session('message')}}</div>
        @endif
        <form class="form" action="{{ route('user.change-password',$user->id) }}" method="POST">
            @csrf
            <div class="box padding-10">

                <div class="box-body backpack-profile-form">
                    <div class="form-group">
                        @php
                            $label = trans('lang.password');
                            $field = 'old_password';
                        @endphp
                        <label class="required">{{ $label }}</label>
                        <input autocomplete="new-password" required class="form-control" type="password" name="{{ $field }}" id="{{ $field }}" value="" placeholder="{{ $label }}">
                    </div>

                    <div class="form-group">
                        @php
                            $label = trans('lang.new_password');
                            $field = 'new_password';
                        @endphp
                        <label class="required">{{ $label }}</label>
                        <input autocomplete="new-password" required class="form-control" type="password" name="{{ $field }}" id="{{ $field }}" value="" placeholder="{{ $label }}">
                    </div>

                    <div class="form-group">
                        @php
                            $label = trans('lang.new_password');
                            $field = 'confirm_password';
                        @endphp
                        <label class="required">{{ $label }}</label>
                        <input autocomplete="new-password" required class="form-control" type="password" name="{{ $field }}" id="{{ $field }}" value="" placeholder="{{ $label }}">
                    </div>

                    <div class="form-group m-b-0">

                        <button type="submit" class="btn col-md-8"><span style="color:#fff;">{{ trans('lang.edit') }}</span></button>
                        <a href="{{ route('user.show',$user->id) }}" class="btn btn-default  col-md-4"><span class="ladda-label">{{ trans('lang.back') }}</span></a>

                    </div>

                </div>

            </div>

        </form>

    </div>
@endsection
