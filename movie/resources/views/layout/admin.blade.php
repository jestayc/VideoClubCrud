<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Mobike</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('custom-font/fonts.css')}}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <!-- Bootsnav -->
    <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css?v=2.1.5')}}" media="screen" />
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link href="{{asset('css/menuUser.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">


    <header>
        <!-- Top Navbar -->

        <div class="top_nav">
            <div class="container">
                <ul class="list-inline info">
                    <li><a href="#"><span class="fa fa-phone"></span> 1234567</a></li>
                    <li><a href="#"><span class="fa fa-envelope"></span> videoclub@movie.cl</a></li>
                </ul>
            </div>
        </div>
        <!-- Top Navbar end -->
        <!-- Navbar -->
        <nav class="navbar bootsnav">
            <!-- Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> </div>
                </div>
            </div>
            <div class="container">
                <!-- Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                            class="fa fa-bars"></i> </button>
                    <br>
                    <img src="{{asset('public/images/logo.png')}}" alt="">
                </div>
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav menu">
                        <li><a href="{{URL::action('CatalogController@index')}}">Catálogo</a></li>
                        <li><a href="{{URL::action('CatalogController@create')}}">Crear Película</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar end -->
    </header>
    <!-- Header end -->
</head>
<div class="container">
    <div class="row profile">
        <div class="col-sm-12">
             @yield('contenido')
        </div>
    </div>
</div>

<!-- end peril usuario -->
