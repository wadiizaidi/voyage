<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notifcationsController extends Controller
{
    public usernotif(){
    	   $notes = DB::table('users')
                    ->leftJoin('notifcations', 'users.id', 'notifcations.user_logged')
                    ->where('user_hero', Auth::user()->id)
                    ->orderBy('notifcations.created_at', 'desc')
                    ->get();
            return view('profile.notifcations')->with('notes'=>$notes);        
            
    }
}
