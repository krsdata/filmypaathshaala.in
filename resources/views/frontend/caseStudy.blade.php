@extends('layouts.master') 

@section('content')

<!-- Preloader -->

@include('pages.menu')

<!--Page Title-->
@include('partials.titlebar')
<!--End Page Title-->
 

<!--Services Section Two-->
@include('pages.casestudy.case-study')

<!--End Services Section Two-->

 @include('pages.home.partners')
<!--Marketing Section Two-->
@include('pages.company.marketing')

<!--End Marketing Section-->


<!--Partners Section-->

<!--End Partners Section--> 

@stop