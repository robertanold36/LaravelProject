@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pt-3">
           
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              <form action="/post" enctype="multipart/form-data" method="post">
                 @csrf
            <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
             <h1>Add A new Post</h1>
             </div>
          <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label">Post Caption</label>
            
           <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                  title="title" value="{{ old('title') }}" 
                   autocomplete="title" autofocus>

          @error('title')
          <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
                 </span>
                     @enderror
                 </div>

               <div class="form-group row">
          <label for="Description" class="col-md-4 col-form-label">Little Description</label>
            
           <input id="Description" type="text" name="Description" class="form-control @error('Description') is-invalid @enderror"
                  Description="Description" value="{{ old('Description') }}" 
                   autocomplete="Description" autofocus>

          @error('Description')
          <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
                 </span>
                     @enderror
               </div>
           
         
               
           <div class="form-group row">
          <label for="story" class="col-md-4 col-form-label">What About</label>
            
          <textarea name="story" id="story" class="form-control @error('story') is-invalid @enderror" class="w-100"></textarea>

          @error('story')
          <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
                 </span>
                     @enderror

                     
               </div>

         <div class="row">
         <label for="imageP" class="col-md-4 col-form-label">Post Image</label>
         <input type="file" id="imageP" class="form-control-file" name="imageP">
         
         @error('imageP')
           <span>
               <strong>{{ $message }}</strong>
                 </span>
                     @enderror
             </div>


             <div class="row pt-4">
               <button  class="btn btn-primary">Add New Post</button>
               </div>
</div>
                </div>
            </div>
       </form>
      </div>
   </div>
</div>
@endsection
