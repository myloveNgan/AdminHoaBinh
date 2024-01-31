<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/pages/add-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 09:15:48 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-M8S4MT3EYG');
 </script>



<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="">


<!-- Libs CSS -->
<link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css')}}">
<link href="{{ asset('assets/libs/dropzone/dist/dropzone.css')}}" rel="stylesheet">
@yield('header-js-custom')
<title>Trang chủ</title>
</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @include('backend.includes.header')
    @include('backend.includes.sidebar')
    <div id="app-content">
      <div class="app-content-area">
        <div class="container-fluid ">
            @yield('content')
        </div>
      </div>
    </div>
  </main>
 
  <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
  <script src="{{ asset('assets/libs/quill/dist/quill.min.js')}}"></script>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/js/theme.min.js')}}"></script>

<script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js')}}"></script>
  <!-- tippy js -->
  <script src="{{ asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/tooltip.js')}}"></script>
  <!-- choices -->
  <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/choice.js')}}"></script>
@yield('footer-js-custom')
</body>
</html>