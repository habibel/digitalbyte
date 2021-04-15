@extends('layouts.side-bare')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">{{ isset($project)  ? "update Project" : "New Project"}}</h1>
   
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
                <form action="{{ isset($project) ? route('project.update' , $project->id) : route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        @if (isset ($project))
                            @method('PUT')
                        @endif
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input type="text" name="title" class="form-control @error('erreur') is-invalid @enderror" id="title" aria-describedby="titlehelp" 
                        value="{{ isset($project)  ? $project->title : ""}}">
                        <small id="titlehelp" class="form-text text-muted">title is the name of the project.</small>
                    </div>
                    <div class="form-group">
                        <label for="description">description :</label>
                        <input type="text" name="description" class="form-control @error('erreur') is-invalid @enderror" id="description" aria-describedby="descriptionhelp"
                        value="{{ isset($project)  ? $project->description : ""}}">
                        <small id="descriptionhelp" class="form-text text-muted">bref description for the project.</small>
                    </div>
                    <div class="form-group">
                        <label for="category">Category :</label>
                        <select class="form-control @error('erreur') is-invalid @enderror" name="category" id="category">
                        <option value="e-commerce">e-commerce website</option>
                        <option value="web developement">website design</option>
                        <option value="brand identity">brand identity</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="url">URL :</label>
                        <input type="text" name="Link" class="form-control @error('erreur') is-invalid @enderror" id="url" 
                        value="{{ isset($project)  ? $project->Link : ""}}">
                    </div>
                    @if (isset($project))
                        <div class="form-group mb-2">
                            <img src="{{ asset('storage/'.$project->image_project)}}" width="100%" >
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control-file" name="image_project" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">{{ isset($project)  ? "Update" : "Save"}}</button>
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

<!-- Content Row -->
<div class="row">

   <!-- Content Column -->
   <div class="col-lg-6 mb-4">

       <!-- Project Card Example -->
       <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
           </div>
           <div class="card-body">
               <h4 class="small font-weight-bold">Server Migration <span
                       class="float-right">20%</span></h4>
               <div class="progress mb-4">
                   <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <h4 class="small font-weight-bold">Sales Tracking <span
                       class="float-right">40%</span></h4>
               <div class="progress mb-4">
                   <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <h4 class="small font-weight-bold">Customer Database <span
                       class="float-right">60%</span></h4>
               <div class="progress mb-4">
                   <div class="progress-bar" role="progressbar" style="width: 60%"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <h4 class="small font-weight-bold">Payout Details <span
                       class="float-right">80%</span></h4>
               <div class="progress mb-4">
                   <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <h4 class="small font-weight-bold">Account Setup <span
                       class="float-right">Complete!</span></h4>
               <div class="progress">
                   <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                       aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
           </div>
       </div>

       <!-- Color System -->
       <div class="row">
           <div class="col-lg-6 mb-4">
               <div class="card bg-primary text-white shadow">
                   <div class="card-body">
                       Primary
                       <div class="text-white-50 small">#4e73df</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-success text-white shadow">
                   <div class="card-body">
                       Success
                       <div class="text-white-50 small">#1cc88a</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-info text-white shadow">
                   <div class="card-body">
                       Info
                       <div class="text-white-50 small">#36b9cc</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-warning text-white shadow">
                   <div class="card-body">
                       Warning
                       <div class="text-white-50 small">#f6c23e</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-danger text-white shadow">
                   <div class="card-body">
                       Danger
                       <div class="text-white-50 small">#e74a3b</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-secondary text-white shadow">
                   <div class="card-body">
                       Secondary
                       <div class="text-white-50 small">#858796</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-light text-black shadow">
                   <div class="card-body">
                       Light
                       <div class="text-black-50 small">#f8f9fc</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 mb-4">
               <div class="card bg-dark text-white shadow">
                   <div class="card-body">
                       Dark
                       <div class="text-white-50 small">#5a5c69</div>
                   </div>
               </div>
           </div>
       </div>

   </div>

   <div class="col-lg-6 mb-4">

       <!-- Illustrations -->
       <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
           </div>
           <div class="card-body">
               <div class="text-center">
                   <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                       src="img/undraw_posting_photo.svg" alt="">
               </div>
               <p>Add some quality, svg illustrations to your project courtesy of <a
                       target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                   constantly updated collection of beautiful svg images that you can use
                   completely free and without attribution!</p>
               <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                   unDraw &rarr;</a>
           </div>
       </div>

       <!-- Approach -->
       <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
           </div>
           <div class="card-body">
               <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                   CSS bloat and poor page performance. Custom CSS classes are used to create
                   custom components and custom utility classes.</p>
               <p class="mb-0">Before working with this theme, you should become familiar with the
                   Bootstrap framework, especially the utility classes.</p>
           </div>
       </div>

   </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection