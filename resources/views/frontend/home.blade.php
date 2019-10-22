@extends('layouts.master') 

@section('content')

<!-- Preloader -->

@include('pages.menu')

    <!--End Main Header -->
    
    <!--Main Slider-->
     @include('pages.home.main-slider')
    <!--End Main Slider-->
    
    <!--Featured Section-->
     @include('pages.home.featured-section')
    <!--End Featured Section-->
    
    <!--Services Section-->
     @include('pages.home.service')
    <!--End Services Section-->
    
    <!--Score Section-->
     @include('pages.home.seo')
    <!--End Score Section-->
    
    <!--Featured Section Two-->
     @include('pages.home.featured')

    <!--End Featured Section Two-->
        

    <!--End Marketing Section-->
    
    <!--Case Section-->
  
     @include('pages.home.case-study')

    <!--End Case Section-->
    
    <!--Testimonial Section-->
     @include('pages.home.testimonial')
    <!--End Testimonial Section-->
     
    
    <!--Partners Section-->
    @include('pages.home.partners')
    
    <!--End Partners Section--> 
   
 @stop