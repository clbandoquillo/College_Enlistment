<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Enlistment | Ateneo de Davao University</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon
============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Google Fonts
============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<!-- owl.carousel CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
<!-- animate CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!-- normalize CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
<!-- meanmenu icon CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<!-- main CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<!-- educate icon CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/educate-custon-icon.css') }}">
<!-- morrisjs CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
<!-- mCustomScrollbar CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
<!-- modals CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/modals.css') }}">
<!-- metisMenu CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
<!-- calendar CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
<!-- normalize CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-editable.css') }}">
<!-- style CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<!-- responsive CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- modernizr JS
============================================ -->
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- select2 CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/select2/select2.min.css') }}">
<!-- chosen CSS
============================================ -->
<link rel="stylesheet" href="{{ asset('assets/css/chosen/bootstrap-chosen.css') }}">
<!-- modernizr JS
============================================ -->
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>


<style>
    

This CSS effectively hides the spin-button for webkit browsers (have tested it in Chrome 7.0.517.44 and Safari Version 5.0.2 (6533.18.5)):

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}

</style>