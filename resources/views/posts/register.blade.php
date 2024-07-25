@extends('layouts.app')
@section('title', 'Register')
@section('header-title', 'Register')
@section('content')

    <style>
        .register-form-container {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            max-width: 500px;
            margin: auto;
        }

        .card {
            margin-top: 10rem;
            border-radius: 0.25rem;
            padding: 1rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
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
            color: #dc3545;
        }
    </style>

    <div class="section full-height">
        <div class="absolute">
            <div class="section">
                <div class="container card-body-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body card-background">
                                    <div class="d-flex justify-content-between align-items-center mb-3 first-card">
                                        <h1>Register</h1>
                                    </div>
                                    <div>
                                        <form method="POST" action="{{ route('profile.register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="nama"
                                                    placeholder="Nama" name="nama" value="{{ old('name') }}" required
                                                    autofocus>
                                                @error('name')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    placeholder="Email Address" name="email" value="{{ old('email') }}"
                                                    required>
                                                @error('email')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" placeholder="Password" name="password" required>
                                                @error('password')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="cpassword" class="form-label">Konfirmasi Password</label>
                                                <input type="password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="cpassword" placeholder="Confirm Password"
                                                    name="password_confirmation" required>
                                                @error('password_confirmation')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Register</button>
                                                <button type="button" class="btn btn-secondary"
                                                    onclick="window.location='{{ route('login') }}'">Kembali</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="switch">
                                <div id="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 py-5">
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

@endsection
