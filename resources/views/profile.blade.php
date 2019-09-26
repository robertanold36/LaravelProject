@extends('layouts.page')

   @section('content')
  <div class="container">
  @if(count ($users->posts) > 0)

    <div class="row">
      <div class="col-sm-7 pt-5 position-relative">
      @foreach($users->posts as $post)
      
      <div class="card-deck pb-4 pt-5">
               <div class="card h-100 w-100" >     
                
                     <div class="card-body">   
                           
                         <div class="d-flex">

                   <img src="/storage/{{ $post->imageP }}" alt="img" class="w-50 h-50 pr-3 pt-4">

                     <h5 class="pt-5 w-100">{{ $post->Description }}</a></h5>

                         </div>
        
             <h5 class="pt-5">{{ $post->story }}</h5>
             <p class="align-content-end pt-5 text-primary">posted: {{ $post->created_at->diffForHumans() }}</p>
              
             <p class="align-content-end pt-5 text-primary"></p>

                </div>
             </div>
             </div>
            
            @endforeach
           
         </div>
             @else
             <h1 class="text-center pt-4">Oooops no posts yet!!!!!!</h1>
             @endif 
      </div> <!--end of row-->
     
    </div>  <!--end of container-->   

  @endsection 
 