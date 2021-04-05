<?php

namespace App\Http\Controllers\sellercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class OrdersController extends Controller
{
    public function __construct()
    {
    //    if(!Auth::check())
    //    {
    //        return redirect('/login');
    //    }
    }
    public function orderRequest()
    {

        return view('Seller_view.order-request');
    }
    public function orderDetails()
    {
        return view('Seller_view.order-detail');
    }

    public function transactionHistory()
    {
        return view('Seller_view.transaction-history');

    }
    public function orderReturn ()
    {
        return view('Seller_view.order-return');
    }
}
