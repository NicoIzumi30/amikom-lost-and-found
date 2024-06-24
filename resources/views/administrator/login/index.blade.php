<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Login</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="{{asset('images/1.pn')}}g" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
                    Lorem, ipsum.</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet
                    consectetur.</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <form action="login.php" method="post">
                <div class="row align-items-center">
                    <div class="header-text mb-3">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="6LfbKvgpAAAAAHio-sg7U-JeOpfcgo7DdrROIWVK"></div>
                    </div>
                    <div class="input-group mb-4 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                    Me</small></label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <!-- <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Login</button> -->
                        <a class="btn btn-lg btn-primary w-100 fs-6"href="{{route('administrator.dashboard')}}">Login</a>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>