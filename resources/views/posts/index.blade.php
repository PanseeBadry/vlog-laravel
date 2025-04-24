@extends('layouts.main')

@section('title', 'Posts')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center text-primary">All Posts</h1>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            + Create Post
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse ($posts as $post)
                <div class="card mb-4 shadow-sm border-0 rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">
                                <a href="/posts/{{ $post->id }}" class="text-decoration-none text-dark">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                        </div>

                        <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle bg-secondary text-white text-center" style="width: 35px; height: 35px; line-height: 35px;">
                                {{ strtoupper(substr($post->user->name ?? 'U', 0, 1)) }}
                            </div>
                            <small class="text-muted">
                                {{ $post->user->name ?? 'Unknown' }}
                            </small>
                        </div>

                        <div>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info text-center">No posts found.</div>
            @endforelse
        </div>
    </div>

    @yield('footer')
</div>
@endsection
