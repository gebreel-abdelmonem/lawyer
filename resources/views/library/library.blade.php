@extends('layouts.app')
@section('title', 'المكتبة القانونية')
@section('content')

<div class="container py-5">
    <div class="row g-4">

        @foreach($posts as $post)
            <div class="col-12 col-md-4">
                <div class="card fancy-card h-100">
                    
                    <div class="card-body d-flex flex-column">
                        
                        <h5 class="card-title">
                            {{ $post->title }}
                        </h5>

                        <p class="card-text">
                            {{ Str::limit($post->content, 120) }}
                        </p>

                        <div class="mt-auto">
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-custom w-100">
                                اعرف المزيد
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        @endforeach
            <div class="pagination-container">
                {{ $posts->links() }}
            </div>
    


    </div>
</div>

@endsection