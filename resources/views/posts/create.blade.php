@extends('layouts.main')
@section('title', "Create post")

@section('content')
<div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white fw-bold">
                        Create a New Post
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('posts.store') }}" method="POST" class="needs-validation">
    @include('posts._form')
</form>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>

@endSection