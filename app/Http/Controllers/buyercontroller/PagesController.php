<?php

namespace App\Http\Controllers\buyercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{
    public function __construct()
    {
    //    if(!Auth::check())
    //    {
    //        return redirect('/login');
    //    }
    }
    public function aboutUs()
    {
        return view('buyer_pages.aboutus');

    }

    public function contactUs()
    {
        return view('buyer_pages.contactus');

    }
    public function feedback()
    {
        return view ('buyer_pages.feedback');
    }

    public function customerService()
    {
        return view('buyer_pages.customerservice');
    }
}
