<!DOCTYPE html>
<html lang="en">
    <head>
        @include('website.includes.head')
    </head>
    <body>
        <!-- Responsive navbar-->
       @include('website.includes.nav')
        @yield('abcd')
        <!-- Footer-->
        @include('website.includes.footer')
        @yield('1234')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('website/js/scripts.js')}}"></script>
     
    </body>
</html>
