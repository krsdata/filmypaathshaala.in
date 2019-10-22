<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    <title> {{$title or ''}} |  {{ $tagLine or ''}} </title>
    {!! $meta1 or ''!!}
    {!!$meta2 or ''!!}

    <link href="{{ asset('public/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('public/assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('public/assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('public/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/assets/images/favicon.png')}}" type="image/x-icon"> 
       
</head>

<body>
 

<div class="page-wrapper">