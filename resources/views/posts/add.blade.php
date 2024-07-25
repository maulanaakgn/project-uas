@extends('layouts.app')
@section('title', 'Tambah Post')
@section('header-title', 'Tambah Post')
@section('content')

    <style>
        .create-post-card {
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .card {
            margin-top: 10rem;
        }

        .form-control,
        .form-control-file {
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus,
        .form-control-file:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
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

        .btn-secondary {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1em;
        }

        .alert-danger {
            margin-top: 10px;
            font-size: 0.875em;
        }

        .custom-file-label::after {
            content: "Browse";
        }
    </style>

    <div class="section full-height">
        <div class="absolute">
            <div class="section">
                <div class="container card-body-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-0 shadow-sm rounded create-post-card">
                                <div class="card-body card-background">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h1>Add Post</h1>
                                    </div>
                                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Judul</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="title" name="title" placeholder="Masukkan Judul Post"
                                                value="{{ old('title') }}">
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Konten</label>
                                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5"
                                                placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>
                                            @error('content')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Gambar</label>
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('image') is-invalid @enderror"
                                                    id="image" name="image">
                                                <label class="custom-file-label" for="image">Pilih gambar...</label>
                                            </div>
                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
