<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Dashcode - HTML Template</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("assets/css/rt-plugins.css") }}">
  <link href="../unpkg.com/aos%402.3.0/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../unpkg.com/leaflet%401.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
  <!-- START : Theme Config js-->
  <script src="{{ asset("assets/js/settings.js") }}" sync></script>
  <!-- END : Theme Config js-->
</head>

<body class=" font-inter skin-default">
  <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

  <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="right-column relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index-2.html">
                <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-4">
              <h4 class="font-medium">Sign in</h4>
              <div class="text-slate-500 dark:text-slate-400 text-base">
                Sign in to your account
              </div>
            </div>
            <!-- BEGIN: Login Form -->
            <form class="space-y-4" action='https://dashcode-html.codeshaper.tech/index.html'>
              <div class="fromGroup">
                <label class="block capitalize form-label">email</label>
                <div class="relative ">
                  <input type="email" name="email" class="  form-control py-2" placeholder="Add placeholder" value="dashcode@gmail.com">
                </div>
              </div>
              <div class="fromGroup       ">
                <label class="block capitalize form-label  ">passwrod</label>
                <div class="relative "><input type="password" name="password" class="form-control py-2 " placeholder="Add placeholder" value="dashcode">
                </div>
              </div>
              <button class="btn btn-dark block w-full text-center">Sign in</button>
            </form>
            <!-- END: Login Form -->
          </div>
          <div class="auth-footer text-center">
            Copyright 2023, CAMC
          </div>
        </div>
      </div>
      <div class="left-column bg-cover bg-no-repeat bg-center " style="background-image: url(assets/images/all-img/login-bg.png);">
        <div class="flex flex-col h-full justify-center">
          <div class="flex-1 flex flex-col justify-center items-center">
            <a href="#">
              <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="" class="mb-10">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/rt-plugins.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
