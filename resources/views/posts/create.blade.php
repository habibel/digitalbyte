@extends('layouts.side-bare')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">{{ isset($post)  ? "update Post" : "New Post"}}</h1> 
</div>


<div class="row">

   <div class="col-xl-12 col-lg-12 col-md-12">
       <div class="card shadow mb-4">
           <!-- Card Header - Dropdown -->
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              
           </div>
           <!-- Table Body --> 
           <div class="card-body">
            <div class="p-4">
                <form action="{{ isset($post) ? route('post.update' , $post->id) : route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        @if (isset ($post))
                            @method('PUT')
                        @endif
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input type="text" name="title" class="form-control @error('erreur') is-invalid @enderror" id="title" aria-describedby="titlehelp" 
                        value="{{ isset($post)  ? $post->title : ""}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="content">content :</label>
                        <input id="x" type="hidden" name="content" placeholder="add a content" value="{{ isset($post) ? $post->content : "" }}" >
                        <trix-editor input="x"></trix-editor>
                    </div>
                    @if (isset($post))
                        <div class="form-group mb-2">
                            <img src="{{ asset('storage/'.$post->image_post)}}" width="100%" >
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control-file" name="image_post" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">{{ isset($post)  ? "Update" : "Save"}}</button>
                    @error('erreur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </form>
            </div>
            
           </div>
       </div>
   </div>

</div>

@endsection