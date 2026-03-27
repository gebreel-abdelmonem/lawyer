@extends('layouts.app')

@section('content')

<style>
    body{
            background-color: #0f0f0f;

    }
.edit-container {
    width: 50%;
    margin: 50px auto;
    background: #1c1c1c;
    padding: 30px;
    border-radius: 12px;
    color: white;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    background: #2a2a2a;
    border: none;
    color: white;
    border-radius: 6px;
}

button {
    background: #007bff;
    border: none;
    padding: 10px 20px;
    color: white;
    border-radius: 6px;
    cursor: pointer;
    margin-left: 43%;
}
h2 {
    color: rgb(134, 131, 131);
    text-align: center
    
}
.cc{
margin-left: 100%;
}
</style>

<div class="edit-container">

    <h2>تعديل المقال</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf

        <label class="cc">العنوان</label>
        <input type="text" name="title" value="{{ $post->title }}">

        <label class="cc">المحتوى</label>
        <textarea name="content">{{ $post->content }}</textarea>

        <button type="submit">Update</button>
    </form>

</div>

@endsection