<?php

namespace App\Http\Controllers\sellercontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class EarningsController extends Controller
{
    public function __construct()
    {
    //    if(!Auth::check())
    //    {
    //        return redirect('/login');
    //    }
    }
    public function index ()
    {
        return view ('Seller_view.earnings');

    }
}
