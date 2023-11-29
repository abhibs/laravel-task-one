<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Task One</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('user/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('user/assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">


</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        @include('user.layout.header')
        @yield('content')
    </div>

    @include('user.layout.footer')



    <!-- jequery plugins -->
    <script src="{{ asset('user/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.js') }}"></script>
    <script src="{{ asset('user/assets/js/wow.js') }}"></script>
    <script src="{{ asset('user/assets/js/validation.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('user/assets/js/appear.js') }}"></script>
    <script src="{{ asset('user/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('user/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('user/assets/js/nav-tool.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('user/assets/js/script.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    {{-- sweet alert start --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('user/assets/js/code.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</body><!-- End of .page_wrapper -->

</html>
