@extends('layouts.side-bare')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">{{ __('Posts') }}</h1>
</div>


<div class="row">

   <div class="col-xl-12 col-lg-12 col-md-12">
       <div class="card shadow mb-4">
           <!-- Card Header - Dropdown -->
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <div class="col-md-4">
                   <a href="{{ route('post.create') }}" class="d-sm-inline-block btn btn-sm btn-success shadow-sm">
                         {{ __('Add New Post') }}
                    </a>
               </div>
           </div>
           <!-- Table Body --> 
           <div class="card-body">

            <table id="mytable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td> <img src="{{ asset('storage/'.$post->post)}}"></td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route ('post.show' , $post->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                                <a href="{{route ('post.edit' , $post->id)}}" class="btn btn-primary ml-2"><i class="fas fa-edit"></i></a>
                            <form class="ml-2" action="{{route ('post.destroy' , $post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </div>  
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

           </div>
       </div>
   </div>

</div>

@endsection