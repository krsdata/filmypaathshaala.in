@extends('layouts.master') 

@section('content')

<!-- Preloader -->

@include('pages.menu')

<!--Page Title-->
@include('pages.company.header')
<!--End Page Title-->

<!--Mission Section-->
@include('pages.company.mission')

<!--End Mission Section-->

<!--We Are Section-->
@include('pages.company.whoweare')

<!--End We Are Section-->

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