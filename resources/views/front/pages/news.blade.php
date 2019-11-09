@extends('front.master.master')
@section('content')
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                
                @if ($news->count()>0)
                    @foreach ($news as $new)
                        @include('front.master.newTemp', ['new' => $new])
                    @endforeach
                    <div class="clearfix"></div>
                    {{$news->links()}}
                @else
                    <br><br><br><br>
                    <div class="alert text-center alert-danger">
                        لا يوجد اي اخبار حاليا
                    </div>
                    <br><br><br><br><br>
                @endif

            </div>
        </div>
    </section>
@endsection
