  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Pixel Code -->


    <meta charset="UTF-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

    <meta name="format-detection" content="tel">
    @yield("title")
    <meta name="description" content="A Mumbai-based fashion photographer with a diverse work portfolio and client base across the world.">


  <meta http-equiv="X-UA-Compatible" content="IE=edge" >

  @yield('css')
  @include('frontend.layouts.header-css')
</head>

<body>
  @include('frontend.layouts.navbar')
  <!-- collpase menu for mobile end -->

  @yield('main')

  <!-- footer section starts -->
  @include('frontend.layouts.footer')
  <!-- footer section ends -->
  @include('frontend.layouts.footer-js')
  @yield('js')
  @yield('script')
</body>

</html>
