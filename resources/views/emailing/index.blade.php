@extends('layouts.side-bare')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">{{ __('Projects') }}</h1>
</div>


<div class="row">


   <div class="col-xl-12 col-lg-12 col-md-12">
       <div class="card shadow mb-4">
           <!-- Card Header - Dropdown -->
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <div class="col-md-4">
                   <a href="{{ route('project.create') }}" class="d-sm-inline-block btn btn-sm btn-success shadow-sm">
                         Add New Project
                    </a>
               </div>
           </div>
           <!-- Table Body --> 
           <div class="card-body">



           </div>
       </div>
   </div>

 
</div>


@endsection