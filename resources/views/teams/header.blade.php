
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}">

    <title >Customers </title>

    <link rel="stylesheet" href="{{asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>

    <script src="assets/js/ie8-responsive-file-warning.js"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



</head>
<body class="page-body  page-fade" data-url="http://neon.dev">
<a class="btn " href="{{url('/customers')}}" >
    <img src="{{asset('assets/images/thumb-1@2x.png')}}" alt="" class="img-circle" width="44" />
    Customer Admin
</a>
@guest
    <a class="btn btn-black " href="{{url('/register')}}">Register</a>

    <a class="btn btn-black" href="{{url('/login')}}" >Login</a>

@else
    <a class="btn btn-black" href="{{url('/logout')}}" >Logout</a>


@endguest

<div class="page-container">


