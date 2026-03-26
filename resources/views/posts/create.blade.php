@extends('layouts.app')
@section('title', 'اضافة بوست')
@section('content')
<style>
    body{
    background-color: #0f0f0f;
    }

    </style>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="top-bar">
            <a href="{{ route('posts.index') }}" class="btn-add2">
                كل المقالات📌
            </a>
            </div>

            <div class="card form-card">

                <div class="card-body">
                    <h3 class="text-center mb-4">إضافة مقال جديد</h3>

                    {{-- رسالة نجاح --}}
                    @if(session('success'))
                        <div class="success alert alert-success">
                            {{ session('posts added') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">العنوان</label>
                            <input type="text" name="title" class="form-control" placeholder="اكتب العنوان">
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label class="form-label">المحتوى</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="اكتب المحتوى"></textarea>
                        </div>

                        <!-- Button -->
                        <button type="submit" class="btn btn-submit w-100">
                            حفظ البيانات
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection