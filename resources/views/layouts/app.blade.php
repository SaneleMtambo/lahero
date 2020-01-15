<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>myChannel</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<!--  -->
 <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>myChannel</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    
</head>
<header class="short-header">   

<div class="gradient-block"></div>	

<div class="row header-content">

    <div class="logo">
      <a href="/Dashboard">Author</a>
   </div>

    <nav id="main-nav-wrap">
         <ul class="main-navigation sf-menu">
             <li class="current"><a href="/Dashboard" title="">Home</a></li>									
             
             <li class="has-children">
             <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                 <ul class="sub-menu">
                 <li><a href="/profile">My Uploads</a></li>
                 <li><a href="/profile">My Profile</a></li>

              </ul>
             </li>										
         </ul>
     </nav> <!-- end main-nav-wrap -->

     <div class="search-wrap">
         
         <form role="search" method="get" class="search-form" action="#">
             <label>
                 <span class="hide-content">Search for:</span>
                 <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
             </label>
             <input type="submit" class="search-submit" value="Search">
         </form>

         <a href="#" id="close-search" class="close-btn">Close</a>

     </div> <!-- end search wrap -->	

     <div class="triggers">
         <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
         <a class="menu-toggle" href="#"><span>Menu</span></a>
     </div> <!-- end triggers -->	
    
</div>     		

</header> <!-- end header -->

<body>
    <div id="containor">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <!-- <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar 
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div> -->
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
