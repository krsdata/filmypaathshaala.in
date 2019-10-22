@extends('layouts.master') 

@section('content')

<!-- Preloader -->

@include('pages.menu')
<!--Page Title-->
@include('pages.contact.header')
<!--End Page Title-->

<!--Page Title-->
@include('pages.contact.form')
<!--End Page Title-->

    @include('pages.home.partners')
@stop

<style type="text/css">
  .contact-section {
    background: #ffffff;
  }
  .contact-form input[type="text"], .contact-form input[type="email"], .contact-form input[type="password"], .contact-form textarea{
    background: #f2f2f2;
  }
  .bottom-parallax{
    display: none;
  }
</style>