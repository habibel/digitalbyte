@extends('layouts.side-bare')
@section('content')
    

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Newsletter') }}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-envelope-open-text fa-sm text-white-50"></i>
                {{ __('Message all emails') }}
        </a>
    </div>

    <div class="row">


        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="col-md-4">

                    </div>
                </div>
                <!-- Table Body --> 
                <div class="card-body">
     
                 <table id="mytable" class="display col-xl-12 col-lg-12 col-md-12" style="width:100%">
                     <thead>
                         <tr>
                            <th>email</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($newsletters as $newsletter)
                             <tr>
                                 <td>{{ $newsletter->email }}</td>
                             </tr>
                         @endforeach
                     </tbody>
                     <tfoot>
                         <tr>
                             <th></th>
                         </tr>
                     </tfoot>
                 </table>
     
                </div>
            </div>
        </div>
     
      
     </div>
@endsection