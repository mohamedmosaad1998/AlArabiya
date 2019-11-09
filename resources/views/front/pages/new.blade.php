@extends('front.master.master')
@section('content')
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="text-center">
                        {{$new->title}}
                    </h3>
                    
                    <div class="col-md-12">
                        <hr>
                        <img src="{{asset('uploads/'.$new->image)}}" width="100%">
                    </div>

                    <div class="col-md-12">
                        <hr>
                        <p>
                            {!! $new->content !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
