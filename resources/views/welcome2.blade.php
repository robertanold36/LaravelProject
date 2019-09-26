@extends('layouts.page')

   @section('content')
   <div class="container">
   <div class="row">
   <div class=" col-sm-9">
   @if(isset($details))
        <p> The Search results for <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Dp</th>
                <th>name</th>
            </tr>
        </thead>
        @foreach($details as $user)
        <tbody>
           
            <tr>
                <td><img src="/storage/{{$user->image}}" alt="img"></td>
               <td> <a href="/welcome/{{ $user->id }}">{{$user->name}}</a></td>
            
            </tr>
         
         
        </tbody>  
        @endforeach      
    </table>
    @else
    <h1 class="pt-5" style="text-align:center !important;">{{ $message }}</h1>
    @endif 
    
 </div>
</div>
</div>
</div>

@endsection

@section('footer')
    

@endsection