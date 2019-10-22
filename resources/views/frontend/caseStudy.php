@extends('layouts.master') 

@section('content')

<!-- Preloader -->

@include('pages.menu')

<!--Page Title-->
@include('pages.company.header')
<!--End Page Title-->
 

<!--Services Section Two-->
@include('pages.company.service')

<!--End Services Section Two-->

 @include('pages.home.partners')
<!--Marketing Section Two-->
@include('pages.company.marketing')

<!--End Marketing Section-->


<!--Partners Section-->

<!--End Partners Section--> 

@stop