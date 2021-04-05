<?php

namespace App\Http\Controllers\sellercontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class ProductsController extends Controller
{
    public function __construct()
    {
    //    if(!Auth::check())
    //    {
    //        return redirect('/login');
    //    }
    }
    public function productMyProduct()
    {
        return view ('Seller_view.my-product');

    }

    public function addNewProduct()
    {
        return view ('Seller_view.add-new-prod');

    }
}
