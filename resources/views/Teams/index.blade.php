@extends('layouts.side-bare')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">{{ __('Team') }}</h1>
</div>


<div class="row">


   <div class="col-xl-12 col-lg-12 col-md-12">
       <div class="card shadow mb-4">
           <!-- Card Header - Dropdown -->
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <div class="col-md-4">
                   <a href="#" class="d-sm-inline-block btn btn-sm btn-success shadow-sm">
                         Add New
                    </a>
               </div>
           </div>
           <!-- Table Body --> 
           <div class="card-body">

            <table id="mytable" class="display col-xl-12 col-lg-12 col-md-12" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td> <img src=""></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="d-flex">
                                    <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <form class="ml-2" action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                </div>  
                            </td>
                        </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

           </div>
       </div>
   </div>

 
</div>


@endsection