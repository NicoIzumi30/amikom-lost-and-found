<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('main')}}/auth/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('main')}}/auth/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('main')}}/auth/css/all.min.css">
    <link rel="stylesheet" href="{{asset('main')}}/auth/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <style type="text/css">
        #customBtn {
            display: inline-block;
            background: white;
            color: #444;
            width: 190px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
        }

        #customBtn:hover {
            cursor: pointer;
        }

        span.label {
            font-family: serif;
            font-weight: normal;
        }

        span.icon {
            background: url('{{asset('main')}}/image/g-normal.png') transparent 5px 50% no-repeat;
            display: inline-block;
            vertical-align: middle;
            width: 42px;
            height: 42px;
        }

        span.buttonText {
            display: inline-block;
            vertical-align: middle;
            padding-left: 42px;
            padding-right: 42px;
            font-size: 14px;
            font-weight: bold;
            /* Use the Roboto font that is loaded in the <head> */
            font-family: 'Roboto', sans-serif;
        }
        .btn-primary {
            background-color: #4A1B9D;
        }
        .btn-primary:hover {
            background-color: #4A1B9D;
        }
    </style>
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox pb-4 px-3">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Amikom Lost and Found</p>
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                {{ $errors->first() }}
                                </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">NIK</label>
                                    <input type="number" name="nik" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <button name="login" class="btn btn-lg btn-block btn-primary w-100 mt-2"
                                    type="submit">Login</button>
                                <div id="gSignInWrapper" class="mt-3">
                                    <span class="label">Sign in with:</span>
                                    <a href="{{route('callback')}}" id="customBtn" class="customGPlusSignIn">
                                        <span class="icon"></span>
                                        <span class="buttonText">Google</span>
                                    </a>
                                </div>
                                <div id="name"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('main')}}/auth/jquery-3.6.0.min.js"></script>

    <script src="{{asset('main')}}/auth/bootstrap.bundle.min.js"></script>

    <script src="{{asset('main')}}/auth/feather.min.js"></script>

    <script src="{{asset('main')}}/auth/script.js"></script>
</body>

</html>
