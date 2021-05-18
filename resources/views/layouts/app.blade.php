<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugin/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugin/bootstrap-toastr/toastr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugin/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../assets/plugin/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/plugin/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/plugin/bootstrap-fileinput/bootstrap-fileinput.css"/>

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link href="{{ url('assets/css/components-rounded.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>


    {{-- <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" type="text/css"> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script src="{{ url('assets/plugin/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ url('assets/plugin/uniform/jquery.uniform.js') }}"></script>
    <script src="{{ url('assets/plugin/bootstrap-toastr/toastr.js') }}"></script>
    <script src="{{ url('assets/plugin/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/plugin/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/plugin/select2/select2.min.js') }}"></script>
    <script type="text/javascript" src="../../assets/plugin/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script src="{{ url('assets/js/metronic.js') }}" type="text/javascript"></script>

    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
            var owl = $(".owl-carousel");
            $(".sl_next").click(function(){
                owl.trigger('owl.next');
            })
            $(".sl_prev").click(function(){
                owl.trigger('owl.prev');
            })
            
        });
    </script>
</head>
<body>
    @include('layouts.navbar')

    <div class="header-fix"></div>
    
    @yield('page-content')

    @include('layouts.footer')
</body>
</html>
