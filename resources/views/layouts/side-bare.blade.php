<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Dashboard') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset ('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap')}}">


    
   <!-- Custom fonts for this template-->
    <link href="{{ asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset ('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
        
    <!-- Custom styles for this template-->
    <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- Trix editor --}}
    <link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css')}}" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
    <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js')}}" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
    
    <!-- Table pagination -->
    <link href="{{ asset ('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css')}}" rel="stylesheet"> 
       {{-- toastr alert --}}
    <script src="{{ asset ('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}">
    <script src="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
                
                <div class="sidebar-brand-text mx-3">Welcom {{ Auth::user()->name }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                {{ __('Interface') }}
            </div>

            <!-- Nav Item - projects -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('project.index') }}">
                    <i class="fas fa-tasks"></i>
                    <span>{{ __('Projects') }}</span>
                </a>
            </li>
            <!-- Nav Item - posts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class="fas fa-newspaper"></i>
                    <span>{{ __('posts') }}</span>
                </a>
            </li>
            <!-- Nav Item - teams -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('team.index') }}">
                    <i class="fas fa-users"></i>
                    <span>{{ __('Teams') }}</span>
                </a>
            </li>
            <!-- Nav Item - newsletter -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('newsletter') }}">
                    <i class="fas fa-at"></i>
                    <span>{{ __('Newsletter') }}</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        Copyright &copy; Habib Azgao
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                    {{-- Topbare Navbare --}}
                    @include('layouts.topbare')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   @yield('content')
                                     
                </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND</button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="btn btn-primary">
                            {{ __('LOGOUT') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- tostr alert --}}
  
        @if(Session::has('message')) 
        <script>
            toastr.options = { "closeButton" : true, }
            toastr.success("{!! session::get('message') !!}");
        </script>
        @endif

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset ('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    {{-- data table --}}
    <script src="{{ asset ('https://code.jquery.com/jquery-3.5.1.js')}}"></script>
    <script src="{{ asset ('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js')}}"></script>
    <script>
            $(document).ready(function() {
               $('#mytable').DataTable( {
                "pagingType": "full_numbers"
               });
            });
    </script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset ('js/sb-admin-2.min.js')}}"></script>

</body>

</html>