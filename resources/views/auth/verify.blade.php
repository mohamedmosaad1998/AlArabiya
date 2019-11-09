@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">انت بحاجه الي تفعيل حسابك</div>

                <div class="card-body text-right">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            تم ارسال ربط التفعيل الي بريدك الالكتروني
                        </div>
                    @endif
                     . تاكد من صندوق الرسائل بالبريد الالكتروني المسجل بالموقع<br>
                     <a href="{{ route('verification.resend') }}">ارسال البريد مرة اخري</a>.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
