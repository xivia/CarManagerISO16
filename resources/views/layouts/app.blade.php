<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--

Template 2081 Solution

http://www.tooplate.com/view/2081-solution

-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- jquery flexslider -->
    <script src="js/jquery.flexslider.js"></script>
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

    @include('layouts.nav')

    @yield('content')
    
    <!-- isotope -->
    <script src="js/isotope.js"></script>
    <!-- images loaded -->
    <script src="js/imagesloaded.min.js"></script>
    <!-- wow -->
    <script src="js/wow.min.js"></script>
    <!-- smoothScroll -->
    <script src="js/smoothscroll.js"></script>
    <!-- custom -->
    <script src="js/custom.js"></script>

</body>

</html>
