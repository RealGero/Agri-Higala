<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/buyer/browse';
  
    public function redirectTo()
    {
        
        $usertype = Auth::user()->user_type;
        switch($usertype)
        {
            case 1:
                return '/admin';
            case 2:
                // $seller_id = Seller::find
                // session(['seller_id',''])
                return '/seller/dashboard';
            case 3:
                return  '/rider/dashboard';
            case 4:
                return 'buyer/browse'   ;
            break;

            default:
            return '/';
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
     return 'username';
    }
   

}
