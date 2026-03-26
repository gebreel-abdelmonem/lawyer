@extends('layouts.app')
@section('title', 'كل المقالات')
@section('content')

<style>
body {
    background-color: #0f0f0f;
    color: #fff;
    direction: rtl; /* يخلي الصفحة عربي */
    text-align: right;
}

.posts-container {
    width: 80%;
    margin: auto;
}

.post-card {
    background: #1c1c1c;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    transition: 0.3s;
    text-align: right;
}

.post-card:hover {
    transform: translateY(-5px);
}

.post-title {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}

.post-content {
    color: #bbb;
    margin-bottom: 15px;
}

.btns {
    display: flex;
    justify-content: flex-start; /* يخلي الأزرار على الشمال */
    gap: 10px;
}

.btn-edit {
    background: #007bff;
    border: none;
    padding: 8px 15px;
    color: white;
    border-radius: 6px;
    text-decoration: none;
}

.btn-delete {
    background: #dc3545;
    border: none;
    padding: 8px 15px;
    color: white;
    border-radius: 6px;
    cursor: pointer;
}
.top-bar {
    display: flex;
    justify-content: flex-start; /* يخليه شمال */
    margin-bottom: 20px;
}

.btn-add {
    background: #28a745;
    color: white;
    padding: 10px 18px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.btn-add:hover {
    background: #218838;
}

</style>

<div class="posts-container">

    <h1 style="margin-bottom: 30px; color:#bbb; margin-top:30px;">كل المقالات📌</h1>
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-danger">
        Logout
    </button>
</form>
<br>
<br>

<div class="top-bar">
    <a href="{{ route('posts.create') }}" class="btn-add">
        + إضافة مقال
    </a>
</div>
    @foreach($posts as $post)
        <div class="post-card">
            <div class="post-title">{{ $post->title }}</div>
            <div class="post-content">{{ $post->content }}</div>

            <div class="btns">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn-edit">
                    تعديل
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn-delete" onclick="return confirm('هل أنت متأكد ؟')">
                        حذف
                    </button>
                </form>
            </div>
        </div>
    @endforeach

</div>

@endsection