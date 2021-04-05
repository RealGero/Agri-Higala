<?php

namespace App\Http\Controllers\buyercontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class MessagesController extends Controller
{
    public function __construct()
    {
    //    if(!Auth::check())
    //    {
    //        return redirect('/login');
    //    }
    }
    public function index(){

        return view('buyer_pages.inbox');
    }
}
