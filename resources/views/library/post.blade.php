@extends('layouts.app')

@section('title')
{{$post->title}}
 @endsection
@section('content')
<div class="post-details">

    <h1>{{ $post->title }}</h1>
    
    <p>{{ $post->content }}</p>
    
</div>

@endsection