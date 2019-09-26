<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="image/story.jpeg" rel="icon">

        <title>LookOut</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

          <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Add icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/content.css" rel="stylesheet">


    <!--javascript to validate the search bar-->

   <script type="text/javascript">
   function success() {
	 if(document.getElementById('textsend').value ===null) { 
         
            document.getElementById('button').disabled = true; 
        }
       
         else { 
            document.getElementById('button').disabled = false;
        }
    }

    function check(){
            var query=document.getElementById('textsend').value
            window.alert('click ok to check your search for '+query);
    }


  
</script>
<style>

      @media screen and (max-width: 600px) {
      .sidenav {
        display:none;
      }
      .container{

        text-align:center;
      }
      
     }
   #page{
  min-height: 100vh;
}

#footer {
  bottom:0;
}

  
</style>
</head>
<body>
<div id="page" class="pt-3">
 <div class="container badge-primary">  
     <nav class="navbar navbar-expand-md navbar-dark">
             
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
               <div>

                   <img src="/image/R.jpeg" style="height:30px; border-right:1px solid grey" class="pr-3">

               </div>

               <div class="pl-2 pt-1" style="font-family: 'Lobster', cursive; color:rgb(0,0,0);">LookOut</div>
                </a>
               
                <button class="navbar-toggler badge-info" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon "></span>
                </button>

                 <div class="collapse navbar-collapse " id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                                     
                 <div class="search-container">
                                
                 <form class="form-inline my-2 my-lg-0"  action="/search" method="get">
                       <input class="form-control mr-sm-2"  id="textsend" onkeyup="success();"  name="search" type="search" placeholder="Search" aria-label="Search">
                       <button class="btn btn-outline-default  my-2 my-sm-0" id="button" onclick="check();" disabled type="submit">Search</button>
                 </form>
             </div>          
         </li>
       </ul>
   </nav>    
 </div>

 <section>
       
            @yield('content')
      
            
</section>
            @include('footer')  
</body>
</html>