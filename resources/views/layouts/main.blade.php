<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HightSchool</title>
    <link rel="stylesheet" href="css/output.css">
    @vite('resources/css/app.css')
  </head>
  <body>
    <!-- Header Start -->
    @include('partials.navbar')
    <!-- Header End -->

    @yield('main')

    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->
    <script src="js/script.js"></script>
  </body>
</html>
