<?php

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

//use Illuminate\Routing\UrlGenerator;


Route::get('/', function () {
	if(! auth::check())
	 return redirect()->route('login');
    return view('welcome');
});
Route::get('/deposer_voyage',function(){
	if(! auth::check())
	 return redirect()->route('login');
	return view('deposervoyage');
}
);

Route::get('/posts/{slug}',function($slug){
	$route="http://localhost:8000/posts/".auth()->user()->id;
	
   if($slug != auth()->user()->id  )
    	
     return Redirect::to($route);
     
   return view('mesposts'); 
	
}
);
Route::get('/rechercher_voyage',function(){
	if(! auth::check())
	 return redirect()->route('login');
	return view('recherchervoyage');
}
);
Auth::routes();

Route::post('/posts','PostsController@store')->name('posts');
