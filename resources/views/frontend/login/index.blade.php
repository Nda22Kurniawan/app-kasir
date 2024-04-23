<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title> <?= $title ?> </title>
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
<link href="/assets/theme/css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <!--*******************
Preloader start
********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" strokemiterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
Preloader end
********************-->
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="">
                                    <h4> SELAMAT DATANG DI APLIKASI KASIR <br> TOKO SUKAMART </h4>
                                </a>
                                @if(!empty($pesan = session()->get('pesan')))
                                <div class="alert alert-{{ session()->get('style') }} text-center"> {{ $pesan }} </div>
                                @endif
                                <form class="mt-5 mb-5 login-input" method="POST" action="/login_proses">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->

    <script src="/assets/theme/plugins/common/common.min.js"></script>
    <script src="/assets/theme/js/custom.min.js"></script>
    <script src="/assets/theme/js/settings.js"></script>
    <script src="/assets/theme/js/gleek.js"></script>
    <script src="/assets/theme/js/styleSwitcher.js"></script>
</body>

</html>