@extends('layouts.app')
@section('title', 'View Post')
@section('header-title', 'View Post')
@section('content')

    <style>
        .post-view-card {
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            overflow: hidden;
        }

        .post-view-card:hover {
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-10px);
        }

        .post-image {
            max-height: 720px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.3s;
        }

        .post-image:hover {
            transform: scale(1.05);
        }

        .card-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }

        .footer {
            z-index: 2;
            left: 0;
            width: 100%;
            position: absolute;
            height: 130px;
            bottom: -170px;
        }

        .card {
            margin-top: 4rem;
            margin-bottom: 7rem;
        }

        .card-body {
            position: relative;
        }

        .btn-primary {
            position: relative;
            z-index: 2;
            background-color: #007bff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .card-text {
            margin-bottom: 20px;
            /* Tambahkan margin-bottom untuk memberikan ruang */
        }
    </style>

    <div class="card post-view-card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid post-image mb-3" alt="Post Image">
            @else
                <p class="text-muted">No Image Available</p>
            @endif
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>


@endsection
