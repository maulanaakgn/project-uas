@extends('layouts.app')
@section('title', 'Data Posts')
@section('header-title', 'Data Posts')
@section('content')

    <style>
        .post-card {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card {
            margin-top: 10rem
        }

        .post-image {
            max-height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .pagination-custom {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination-custom li {
            margin: 0 5px;
        }
    </style>

    <div class="container card-body-container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body card-background">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            @if (isset($user))
                                <h5 class="text">Hello {{ $user->name }}</h5>
                            @else
                                <h5 class="text">Welcome, Guest</h5>
                            @endif
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="text">Data Post</h1>
                            <div>
                                <a href="{{ route('posts.add', 1) }}" class="btn btn-success">ADD POST</a>
                                <a href="{{ route('posts.pdf') }}" class="btn btn-primary">Generate PDF</a>
                            </div>
                        </div>
                        @forelse ($posts as $post)
                            <div class="post-card card-item"
                                onclick="window.location='{{ route('posts.view', $post->id) }}'">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                                class="post-image">
                                        @else
                                            <img src="https://via.placeholder.com/200" alt="No Image" class="post-image">
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                                            <div class="card-actions">
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="btn btn-primary btn-sm">EDIT</a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">HAPUS</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger text-center">Data post belum tersedia.</div>
                        @endforelse

                        <!-- Pagination -->
                        @if ($posts->lastPage() > 1)
                            <nav aria-label="Page navigation example">
                                <ul class="pagination-custom">
                                    <li class="page-item {{ $posts->currentPage() == 1 ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $posts->url(1) }}">Previous</a>
                                    </li>
                                    @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                        <li class="page-item {{ $posts->currentPage() == $i ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="page-item {{ $posts->currentPage() == $posts->lastPage() ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $posts->url($posts->currentPage() + 1) }}">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
