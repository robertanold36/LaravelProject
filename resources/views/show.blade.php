@extends('layouts.page')

   @section('content')
  <div class="container pt-5">
  
    <div class="row">
      <div class="col-sm-7 position-relative">
               <div class="card h-100 w-100" >     
                
                     <div class="card-body">   
                           
                         <div class="d-flex">

                    <img src="/storage/{{ $posts->imageP }}" alt="img" class="w-50 h-50 pr-3 pt-4">

                     <h5 class="pt-5 w-100">{{ $posts->Description }}</a></h5>

                         </div>
        
             <h5 class="pt-5">{{ $posts->story }}</h5>
             <p class="align-content-end pt-5 text-primary">posted: {{ $posts->created_at->diffForHumans() }}</p>
              
             <p class="align-content-end pt-5 text-primary"></p>

      

             </div>
            </div>
            </div> 

   
      </div> <!--end of row-->
    </div>  <!--end of container-->   

  @endsection 
 