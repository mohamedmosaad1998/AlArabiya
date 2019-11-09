@extends('front.master.master')
@section('content')
    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp ">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-2 home-top-cour" style="height: 300px">
                        <div class="col-md-12"><a href="{{route('category.show',$category)}}"><h4 class="text-center">{{$category->name}}</h4></a>
                            <hr></div>
                        <div class="col-md-12"><img src="{{asset('uploads/'.$category->image)}}" height="100%" width="100%"  alt=""></div>
                        <div class="home-top-cour-desc">
                            <span class="home-top-cour-rat" style="background-color: {{($category->active)?'green':'red'}};bottom: 0;top: auto;">{{($category->active)?'مؤكد':'غير مؤكد'}}</span>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
                {{$categories->links()}}
            </div>
        </div>
    </section>
@endsection
