@extends('layouts.app')
@section('title', 'Login')
@section('header-title', 'Login')
@section('content')

    <style>
        Copy code body {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
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
            border-radius: 10px;
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

        .btn-danger {
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
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
                                        <h1>Login</h1>
                                    </div>
                                    <div class="post-card">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="nama"
                                                    placeholder="Email Address" name="email" value="{{ old('email') }}"
                                                    required>
                                                @error('email')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Password" name="password" required>
                                                @error('password')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        {{ old('remember') ? 'checked' : '' }} name="remember"
                                                        id="remember">
                                                    <label class="form-check-label" for="remember">
                                                        Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="window.location='{{ route('profile.register') }}'">Register</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
