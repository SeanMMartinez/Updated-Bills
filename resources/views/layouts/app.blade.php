<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DormPanion | @yield('title')</title>
    <link rel="icon" href="{{asset('img/logo.png')}}"/>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">

    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">

    <link href="{{asset('css/compiled.min.css')}}" rel="stylesheet">
</head>
<body style="background-color:#64e7d3">
@yield('sidenav')

@yield('content')

</body>

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

<script src="{{asset('js/compiled.min.js')}}"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">
    var onloadCallback = function () {
        grecaptcha.render('https://www.google.com/recaptcha/api/siteverify', {
            'sitekey': 'your_site_key'
        });
    };
</script>

<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace( 'announce-message' );
</script>

<script src="{{asset('js/forms.js')}}"></script>

<script type="text/javascript">
    var onloadCallback = function () {
        grecaptcha.render('https://www.google.com/recaptcha/api/siteverify', {
            'sitekey': 'your_site_key'
        });
    };
</script>
<script>
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);

    // Data Picker Initialization
    $('.datepicker').pickadate({
        min: new Date(1900, 1, 31),
        max: new Date(2099, 12, 31), selectYears: 5000, closeOnClear: false, closeOnSelect: false
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Time Picker Initialization
    $('#input_starttime').pickatime({});

    // Time Picker Initialization
    $('#input_endtime').pickatime({});

    new WOW().init();
</script>
</html>
