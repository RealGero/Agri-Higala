<?php

namespace App\Http\Controllers\buyercontroller;

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
    
    public function index (){

        return view('buyer_pages.order');
        
    }

    public function cartIndex(){

        return view('buyer_subpages.cart');
    }

    public function checkoutIndex()
    {
        return view('buyer_subpages.checkout');
    }

    public function orderReceivedIndex()
    {
        return view('buyer_subpages.order-received');

    }

    public function orderReturn()
    {
        return view('buyer_subpages.orders-return');
    }

    public function viewOrderDetails()
    {
        return view ('buyer_subpages.view-order-details');
    }


    public function orderMyOrder ()
    {

        return view('buyer_subpages.myorders-order');
    }

    public function orderMyReturn()
    {

        return view('buyer_subpages.myorders-return');

    }
    public function orderMyCancellation()
    {
        return view('buyer_subpages.myorders-cancellation');

    }

}
