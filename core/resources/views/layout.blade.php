<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <link rel="stylesheet" href="{{ URL::asset('sidebarjs/dist/sidebarjs.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('bower_components/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('dcalender/dcalendar.picker.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/cine.css')}}" type="text/css" media="screen">


</head>
<body>
@include("partial._header")






<main>
@yield("content")
</main>
{{--@show--}}



    @include("partial._footer")
    {{--@show--}}

</body>
</html>

<script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ URL::asset('sidebarjs/dist/sidebarjs.min.js')}}"></script>
<script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('bower_components/owl-carousel/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('dcalender/dcalendar.picker.js')}}"></script>
<script src="{{ URL::asset('js/script.js')}}"></script>