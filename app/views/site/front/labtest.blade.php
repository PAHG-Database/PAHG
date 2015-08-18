@extends('site.layouts.default')
{{-- Content --}}
@section('content')

@foreach ($posts as $post)
  <h1> {{$post->GeneFamilyName}} </h1>
@endforeach

@stop