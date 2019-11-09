@extends('errors.layout')
<style>

</style>
@php
  $error_number = 404;
@endphp

@section('title')
  {{trans('lang.Please404 ')}}
@endsection

@section('description')
  @php
    $default_error_message = trans('lang.goback')."<a href='".url('')."'> ".trans('lang.homepage')."</a>.";
  @endphp
  {!! isset($exception)? $default_error_message: $default_error_message !!}
@endsection
