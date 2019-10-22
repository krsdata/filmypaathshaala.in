@extends('layouts.master') 
 
@section('content')

    <!-- Preloader -->

    @include('pages.menu')

    <!--End Main Header -->
    
    <!--Main Slider-->
     @include('pages.services.header')
    <!--End Main Slider-->
    
    <!--Featured Section-->
     @include('pages.services.service')
    <!--End Featured Section-->
    
    
    <!--End Marketing Section-->
       @include('pages.services.marketing')
    <!--Case Section-->
  
     @include('pages.services.casestudy')

    <!--End Case Section-->
    
 @stop