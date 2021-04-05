<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buyer;
use App\User;
use App\Seller;
use App\Brgy;
use Hash;
use Auth;
use Illuminate\Validation\Rule;
class UsersController extends Controller
{

    // public function __construct()
    // {
    // //    if(!Auth::check())
    // //    {
    // //        return redirect('/login');
    // //    }
    // }
    public function index(){

        

    

        // dd($user);
        // dd($seller);
        // $buyer = Buyer::where('usertype', '=','4')->get();

        // dd($buyer);       
        // 
        // dd($user->buyer()->exists());
        // dd(count());
       
      
        // dd($buyer);
        
        // return view('profile');
    }

    public function store(Request $request){

        // $username = $request->input('organization_name');
        // $mobile_number = $request->input('mobile_number');

        // $user= new User();
        // $user->username = $username;
        // $user->usertype = 2;
        // $user->password = Hash::make($mobile_number);

      
        // $seller = new Seller();
        // $seller->organization_name = 'asdasdasd';
        // $seller->email = 'gfasfasd@gmail.com';
        // $seller->mobile_number = 'gasdasd2';
        // $seller->street = 'asdasdasd';
        // $seller->barangay= '5123123';
        // $seller->schedule_online_time = 'gasdasdasd';
        // $seller->seller_image = 'lansones.jpg';
        // $seller->seller_description= 'asdfgasd';

        // $user->save();
        // $user->seller()->save($seller);
        

    }

    private function getValidation(){

        
    }


    public function updateUserImage(Request $request)
    {
        
        $id = Auth::id();
        $user = User::find($id);
        
        if($request->hasFile('user_image'))
        {
            $filenameWithExt = $request->file('user_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('user_image')->getClientOriginalExtension();
            $filenameToStore = $filename.'.'.time().'.'.$extension;
            $path = $request->file('user_image')->storeAs('public/user',$filenameToStore); 

             $user->user_image = $filenameToStore;
            
        };
      
       $user->save();

        return redirect('/buyer/profile/edit')->with('success','Successfully uploaded an image');

    }

    public function update(Request $request)
    {
        
      
        $id = Auth::id();
        $user = User::find($id);
    
         $this->validate($request,[
            'first_name' => ['required', 'string', 'min:2','regex:/^[\pL\s\-]+$/u'],
            'middle_name' => ['required', 'string', 'min:2' ,'regex:/^[\pL\s\-]+$/u'],
            'last_name' => ['required', 'string', 'min:2', 'regex:/^[\pL\s\-]+$/u'],
            'mobile_number' => ['required', 'string', 'digits:11'],

            'brgy' => ['required'],
            'address' => ['required'],
            // 'email' => "required|unique:users,email",
            'email' => ['required',Rule::unique('users')->ignore($id, 'user_id')],
            'birthdate' =>['required','date_format:Y-m-d','before:today'],
            'gender' =>['required'],
         ]);

      
        $buyer = User::find($id)->buyer;


        $user->f_name = $request->input('first_name');
        $user->m_name = $request->input('middle_name');
        $user->l_name = $request->input('last_name');
        $user->mobile_number = $request->input('mobile_number');
        $user->email = $request->input('email');


        $buyer->address = $request->input('address');
        $buyer->birthdate = $request->input('birthdate');
        $buyer->gender = $request->input('gender');
        $buyer->brgy_id =$request->input('brgy');

        $user->save();
        $buyer->save();
        // $brgys = Brgy::all();


        return redirect()->back()->with('success','Successfully uploaded a details');;
    }

    public function edit()
    {
        $id = Auth::id();
        $user = User::find($id);
        $brgys = Brgy::all();
      

        $buyer = User::find($id)->buyer;

        // return $user;
        // return $buyer;
        return view('buyer_subpages.create_profile',compact('user','brgys','buyer'));
    }
    

    // public function update(){

    //     return view('showprofile.edit-profile');
    // }

    public function userAccount()
    {
        
        // $id = Auth::id();
        // $user = User::find($id);
       
        return view('showprofile.user-account');
    }

    public function updateAccountUsername(Request $request)
    {
        
        $this->validate($request,[
        'username' => ['required', 'string', 'max:50','unique:users'],
        ]);
        
        $id = Auth::id();
        $user = User::find($id);
        
        $user->username = $request->input('username');
        $user->save();

        return redirect()->back()->with('username','Successfully Edited your username!');
    }

    public function updateAccountPassword(Request $request)
    {
        $this->validate($request,[

            'current_password'=> 'required',
            'new_password'=>'required|string|min:8',
            'password_confirmation' =>'required|min:8|same:new_password'
    
            ]);

        if(!(Hash::check($request->get('current_password'),Auth::user()->password)))
        {
            return redirect('/buyer/user/account')->with('error','The current password does not match with your old password');
        }

        if(strcmp($request->get('current_password'),$request->get('new_password'))==0)
        {
            return redirect('/buyer/user/account')->with('error','The current password cannot be the same with the new password');
        }



        $user = Auth::user();

        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return redirect('/buyer/user/account')->with('password','Password successfully changed');
    }

    public function updateValidId()
    {
        return 123;
    }

    public function sellerIndex(){

        return view('Seller_view.seller-dashboard');
    }

    public function sellerProfile()
    {

        return view ('Seller_view.seller-profile');
    }
    public function sellerAccount()
    {
        return view('Seller_view.seller-account');
    }
}
