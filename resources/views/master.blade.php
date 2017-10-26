<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>{{ Lang::get('auth.title') }}</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/ico" href="{{ URL::asset('uploads/favicon.ico') }}"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Raleway' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('assets/css/app.css') }}"/>
    <script type="text/javascript" src="{{ URL::asset('assets/js/all.js') }}"></script>
</head>
<body>
<header>
    @include('front.top')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('front.footer')
</footer>
</body>
</html>