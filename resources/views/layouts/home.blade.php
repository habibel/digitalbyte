<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('dygitalbyte') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset ('assets/img/favicon.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{ asset ('https://use.fontawesome.com/releases/v5.15.1/js/all.js')}}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{ asset ('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700')}}" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
               {{-- toastr alert --}}
    <script src="{{ asset ('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}">
    <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>     
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="nav-link"><i class="fas fa-keyboard"></i></a>
                                    @else
                                        <a href="{{ route('login') }}" class="nav-link"><i class="far fa-user-circle"></i></a>
                                    @endauth
                            @endif
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        {{-- tostr alert --}}
        
        @if(Session::has('message')) 
        <script>
            toastr.options = { "closeButton" : true, }
            toastr.info("{!! session::get('message') !!}");
        </script>
        @endif


        <!-- Bootstrap core JS-->
        <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <script src="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Third party plugin JS-->
        <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js')}}"></script>
        <!-- Contact form JS-->
        <script src="{{ asset ('assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{ asset ('assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset ('js/scripts.js')}}"></script>
    </body>
</html>
