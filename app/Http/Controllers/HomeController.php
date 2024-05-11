<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TypeRequestController;
use App\Http\Controllers\Route;
use App\Models\type__requests;

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
        $role=Auth::user()->role;
        if($role=='1'){
            
            return view('admin');  

        }
        else{
            $TypeRequests = type__requests::all(); // تم تغيير اسم المتغير هنا
            return view('users.user')->with('TypeRequests',$TypeRequests);// تم تغيير اسم المتغير هنا أيضًا
            
            
        }
        
    }
}