<?php

namespace App\Http\Controllers\sellercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class RatingsController extends Controller
{
    public function __construct()
    {
       if(!Auth::check())
       {
           return redirect('/login');
       }
    }
    public function index()
    {

        return view ('Seller_view.ratings');
    }
}
