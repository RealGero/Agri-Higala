<?php

namespace App\Http\Controllers\buyercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class ProfilesController extends Controller
{
    public function __construct()
    {
    //    if(!Auth::check())
    //    {
    //        return redirect('/login');
    //    }
    }
    public function index()
    {

        return view ('profile');

    }

   
    
}
