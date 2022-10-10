
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> @yield('title')</title>
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap_icon.css') }}" rel="stylesheet">
     <link href="{{ asset('css/custom/app.css') }}" rel="stylesheet">
 </head>
<body style="background:rgb(255, 255, 255)">
<header>

@include('layouts.header')
@yield('nav')

</header>     


<section class="container " id="main">


             
    @yield('content')

</section>


<script type="text/javascript" rel="javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html><!-- JQuery -->

