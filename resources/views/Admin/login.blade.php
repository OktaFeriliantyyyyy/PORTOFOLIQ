<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/pages/auth.css') }}">
    <style>
        body, html {
            height: 100%;
        }
        #auth {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-title {
            text-align: center;
            margin-bottom: 2rem;
        }
        ..auth-left {
            width: 100%;
            max-width: 700px;
        }

    </style>
</head>

<body>
    <div id="auth">
        <div id="auth-left">
            @include('Admin.pages.partials.komponen.pesan')
            <h3 class="auth-title">Login</h3>
            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" name="email" class="form-control form-control-xl" placeholder="Email...">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Password...">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
        </div>
    </div>
</b
