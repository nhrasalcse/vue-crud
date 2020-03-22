<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <title><%= htmlWebpackPlugin.options.title %></title>
    <link rel="stylesheet" href="{{asset('/')}}/backend/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/backend/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('/')}}/backend/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('/')}}/backend/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{asset('/')}}/backend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/')}}/backend/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/')}}/backend/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}/backend/img/favicon.ico">
</head>
<body>
<noscript>
    <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
</noscript>
<div id="app"></div>
<!-- built files will be auto injected -->

<!-- JavaScript files-->
<script src="{{asset('/')}}/backend/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}/backend/vendor/popper.js/umd/popper.min.js"> </script>
<script src="{{asset('/')}}/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/backend/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="{{asset('/')}}/backend/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="{{asset('/')}}/backend/vendor/chart.js/Chart.min.js"></script>
<script src="{{asset('/')}}/backend/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('/')}}/backend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('/')}}/backend/js/charts-home.js"></script>
<script src="{{asset('/')}}/backend/js/charts-custom.js"></script>
<!-- Main File-->
<script src="{{asset('/')}}/backend/js/front.js"></script>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
