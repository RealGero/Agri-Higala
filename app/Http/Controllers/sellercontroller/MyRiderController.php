<?php

namespace App\Http\Controllers\sellercontroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MyRiderController extends Controller
{
    
    public function index()
    {
        return view('Seller_view.myrider');
    }
}
