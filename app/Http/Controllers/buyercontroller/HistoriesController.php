<?php

namespace App\Http\Controllers\buyercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class HistoriesController extends Controller
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

        return view('buyer_pages.history');

    }
}
