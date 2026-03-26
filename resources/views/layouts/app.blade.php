<!doctype html>
<html lang="ar" dir="rtl" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    {{-- Header --}}
    @include('layouts.header')

    {{-- محتوى الصفحة --}}
{{-- <div class="@yield('page-class')"> --}}
    @yield('content')
{{-- </div> --}}
    {{-- Footer --}}
    @include('layouts.footer')
    <!-- JS here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

    <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                // disableDaysOfWeek: [0, 0],
            //     icons: {
            //      rightIcon: '<span class="fa fa-caret-down"></span>'
            //  }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
            var timepicker = $('#timepicker').timepicker({
             format: 'HH.MM'
         });
        </script>

</body>
</html>