@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title($post->title) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
<meta name="description" content="{{{ $post->meta_description() }}}" />

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
<meta name="keywords" content="{{{ $post->meta_keywords() }}}" />

@stop

@section('meta_author')
<meta name="author" content="{{{ $post->author->username }}}" />
@stop

{{-- Content --}}
@section('content')
<h3>{{ $post->title }}</h3>

<p>{{ $post->content() }}</p>



@stop
