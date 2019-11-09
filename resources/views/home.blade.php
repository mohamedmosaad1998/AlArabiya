@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Name: {{auth()->user()->name}}<br>
                        Email: {{auth()->user()->email}}<br>
                    <h1>All Pages service</h1>
                    @foreach (\Backpack\PageManager\app\Models\Page::all() as $page)
                        <ul class="text-left">
                            <li>
                                <a href="{{url('/'.$page->slug)}}">{{$page->title}}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
