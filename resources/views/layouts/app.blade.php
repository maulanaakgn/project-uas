{{-- @include('posts.header', ['user' => Auth::user()])

<div class="row justify-content-center">
    @guest
        <div class="col-md-12">
            <div class="text-left mb-4">
                <h3 class="text-primary">@yield('header-title')</h3>
            </div>
        </div>
    @endguest
    @auth
        <div class="col-md-10">
            <div class="text-left mb-4">
                <h3 class="text-primary">@yield('header-title')</h3>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
            <button type="button" class="btn btn-danger"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
        </div>
    @endauth
    <hr class="bg-primary">
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
        @yield('content')
    </div>
</div>

@include('posts.footer') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('posts.header', ['user' => Auth::user()])

    <div class="wrapper">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                    </div>

                    @guest
                        <!-- Guest users will see this part -->
                    @endguest

                    @auth
                        <!-- Authenticated users will see the logout button -->
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    @endauth
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('posts.footer')
</body>
</html>


