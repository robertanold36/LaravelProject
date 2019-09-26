<?php
use App\Post;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);



Route::get('/', function (Auth $user, Post $post) {

     
    $posts = App\Post::latest()->paginate(1);

    $user=  User::all();

    return view('welcome',compact('user','posts'));

});


Route::get('/show/{id}','ShowController@show');
    

Auth::routes();

Route::post('/post','PostController@store');

Route::get( '/search', function (Request $request) {

     $post=App\Post::all();
     $user=App\User::all();     
     $search =Input::get ( 'search' );

     $user = User::Where('name','LIKE','%'.$search .'%') ->orWhere ('email','LIKE','%'.$search .'%')->get();

     if (count($user) > 0){
         return view( 'welcome2' )->withDetails($user)->withQuery($search);
       }
      
       else
           {
           return view( 'welcome2' )->withMessage ( 'No Details found. Try to search again !');

           }


   } );

//Route::post('/posts/{posts}/comment','CommentController@store');
Route::get('/welcome/{id}' ,'ProfileController@fetch');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');




