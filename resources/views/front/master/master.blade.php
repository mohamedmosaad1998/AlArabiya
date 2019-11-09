<!DOCTYPE html>
<html lang="ar-EG">
<head>
    <title>{{trans('lang.site-title')}}</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('seo')

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>*{font-family: 'Cairo', sans-serif,'FontAwesome' !important;}</style>
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('/css/style-mob.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/ltrStyle.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/ltr.css')}}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    @stack('css')
</head>

<body>

@include('front.master.header')

@yield('content')


@include('front.master.footer')

<!--Import jQuery before materialize.js-->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('')}}"></script>--}}
<script src="{{asset('/js/materialize.min.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>

@stack('js')

</body>


</html>
