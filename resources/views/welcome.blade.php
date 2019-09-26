@extends('layouts.page')

  @section('content')
<div class="container"> 
<div class="row">
         <div class="col-sm-7">
         @foreach($posts as $post)
         <div class="card-deck pb-4 pt-5">
               <div class="card" style="height:30rem;">     
                
                     <div class="card-body">   
                           
                         <div class="d-flex card-header w-100 border-info">

                    <img src="/storage/{{ $post->user->image }}" alt="img"
                   style="border-radius:50%;">

              <h2 class="pl-3 pt-2"><a style="text-decoration:none; color:#85004f" href="/show/{{ $post->id }}">{{ $post->title }}</a></h2>

                         </div>

      <center>  <p class="pt-5 card-text" id="animation" onmouseover="style.color='red'" onmouseout="style.color='black'" >{{ $post->Description }}</p>
      

       </center>
              
            </div><!--end of card body-->

         </div><!--end of card-->
        </div> 
         @endforeach 
         </div> <!--end of col-->
       
      
         <div class="col-sm-4 sidenav justify-content-lg-start pl-5">
         <h3 class="pt-5 text-primary">FIND ON MY PAGE</h3>


         <div class="card pt-3">
           <img src="image/lenss.jpeg" style="width:100%;" alt="img">

              <div class="card-body">
              <h4 class="card-title text-primary">SHARE WITH PEOPLE</h4>
                  <p class="card-text text-uppercase">
                  HOW TO COMPOSE A TEXT MESSAGE ON YOUR ANDROID PHONE Open the phone's texting app. ... 
                  If you see the name of the person you want to text, choose it from the list   
                  </p>
              
              </div>
           
           </div>
           <img src="image/ideas.jpeg" style="width:100%;" alt="img" class="pb-4">


         <img src="image/world.jpg" style="width:100%;" alt="img" class="pt-4">
 
    </div>
  </div>
  
  <div class="text-md-center">
      {{ $posts->links() }}
  </div>
     
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@endsection