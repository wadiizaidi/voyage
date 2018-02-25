<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        return view('home');
    }


    public function store(Request $request)
    {
        
       Posts::create([
         "lieu_dep" => $request->lieu_dep,
         "lieu_arr" =>$request->lieu_arr,
         "datevo"=>$request->datevo,
          "tempvo"=>$request->tempvo,
          "description"=>$request->description,
          "user_id"=>"1"
        ]); 

	$route="http://localhost:8000/posts/".auth()->user()->id;
        
        return (redirect()->to($route));
        
    
        
    }
}
