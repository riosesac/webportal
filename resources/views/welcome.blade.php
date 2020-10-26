<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Komando Operasi TNI AU III</title>
  </head>
    @include('front/temp/icon')
    @include('front/inc/js')
    @include('front/inc/css')
    @include('front/temp/header')
    @yield('content')
    <div class="scroll-up" style="display: block;"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    @include('front/temp/contentfooter')
    @include('front/temp/footer')

</html>
