<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('login_data/css/bootstrap.css'); }}">
    <link rel="stylesheet" href="{{ asset('login_data/css/custom.css'); }}">
    <link rel="stylesheet" href="{{ asset('login_data/css/custom.min.css'); }}">

    <link rel="stylesheet" href="{{ asset('login_data/css/animate.css'); }}">
    <script src="{{ asset('login_data/js/wow.min.js'); }}"></script>
    <script>
        new WOW().init();
    </script>

</head>
<body class="body_bg_image">

<div class="container">

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">

            <div class="wow fadeInLeft" style="text-align: center;">
                <img src="{{ asset('login_data/img/Army_Logo_my.png'); }}" width="200px" align="centere">
                <p width="350px" align="centere"
                   style="color:rgb(255, 165, 0); font-size:35px; text-align: center; font-family: sans-serif; text-shadow: 1px 1px 2px black;">

                    {{ config('app.name') }}</p>
            </div>
            <br>
        </div>
        <div class="col-lg-4 align-self-center wow fadeInRight">

            <form method="post" action="{{ url('/login') }}" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label class="form-label mt-4 login_title">Login </label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                               id="floatingInput" placeholder="User name" name="username" autocomplete="off"
                               value="{{ old('username') }}">
                        <label for="floatingInput">User name</label>
                        @error('username')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <br>
                    <input type="submit" class="btn btn-outline-info" value="Login">
                    <span class="text_white" title="" data-bs-container="body" data-bs-toggle="popover"
                          data-bs-placement="bottom"
                          data-bs-content="Please type your valid user informations to login to system."
                          data-bs-original-title="Help box">
                 Help
              </span>

                </div>

            </form>
        </div>
        <!-- <div class="col-lg-12">
             <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

              <strong>මෙම පද්ධතියේ පිවිසුම් ද්වාරය ( LOGIN PAGE ) 2022.06.22 දින සිට යාවත්කාලීන කර ඇති අතර දැනට ඔබ සතු පරිශීලක ගිණුම් නාමයන් සහ මුරපද භාවිතයෙන් පද්ධතියට ප්‍රවිෂ්ඨ විය හැක .
            </div>


        </div> -->
    </div>

</div>
<div class="newstyle fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <center><a href="#" class="footer_text">Software Solution by Dte of IT - SL Army</a></center>
            </div>
            <div class="col-lg-2 "><a href="#" class="footer_text"> Version 1.0 </a></div>
        </div>
    </div>

</div>


</body>
<script src="{{ asset('login_data/js/jquery.min.js') }}"></script>
<script src="{{ asset('login_data/js/bootstrap.bundle.min.js'); }}"></script>
<script src="{{ asset('login_data/js/prism.js'); }}" data-manual></script>
<script src="{{ asset('login_data/js/custom.js'); }}"></script>

</html>
