<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
            //  \App\Models\Activity::create([
            //   'type' => 'Login',
            //  'username' => Auth::user()->username,
            //  'details' => 'Logged In',  
            //   ]);
        return view('home');
    }
}
