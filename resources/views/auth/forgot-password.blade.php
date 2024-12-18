


<!DOCTYPE html>
<html lang="en" class="h-100">


<head>

    <!-- Title -->
    <title>Forgot Password  Bitmergecashoutprocedureswing </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('/homepage/img/OWB-LOGO-CC.png') }}" type="image/x-icon">


    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Interactive Achivers, Funds Platform, Artificial Intelligence, Fund Allocation">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">




    <!-- Mobile Specific -->
    <meta name="/viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link href="/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ route('login') }}"><img src="/homepage/assets44/images/logo.png" width="50%"
                                                alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Forgot your password? No problem. Just let us know your
                                        email address and we will email you a password reset link that will allow you to
                                        choose a new one.</h4>

                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label" :value="__('Email')">Email</label>
                                            <input class="form-control" placeholder="Email" id="email"
                                                type="email" name="email" :value="old('email')" required autofocus>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />




                                        <div class="text-center">
                                            <button class="btn btn-primary btn-block">Send Reset Link</button>
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

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>


</body>

<!-- Mirrored from eres.dexi->

</html>
