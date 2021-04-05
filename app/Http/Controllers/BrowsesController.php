<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class BrowsesController extends Controller
{
    public function __construct()
    {
       if(!Auth::check())
       {
           return redirect('/login');
       }
    }
    public function index(){

        return view('welcome_nav.browse');
    }
}
