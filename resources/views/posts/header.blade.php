<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas Teknologi Bandung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
            width: 100%;
            text-align: center;
            position: fixed;
            bottom: 0;
            background-color: #f1f1f1;
            padding: 10px 0;
            box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <img src="{{ asset('images/254721151_utb_kotak.png') }}" alt="Logo
UTB" class="img-fluid"
                style="max-width: 150px;">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="text-center mb-4">
                    <h3 class="text-primary">@yield('header-title')</h3>
                    <hr class="bg-primary">
                </div>
            </div>
        </div>
