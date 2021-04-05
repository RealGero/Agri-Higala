
    <div class="col-6 right-side">
        <a href="/buyer/browse"><i class="fa fa-search  fa-2x fontawesome-color"></i></a>
       
{{-- 
        <div class="dropdown ">
          <button  type="button" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user  fa-2x fontawesome-color"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/buyer/profile">Profile</a>
            <a class="dropdown-item" href="/buyer/user/account">Account</a>
            <a class="dropdown-item"  href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
          </div> --}}


          <div class="dropdown ">
            <button  type="button" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bell  fa-2x fontawesome-color"></i>
            </button>
            
            </div>
       

        <i class="fa fa-shopping-cart  fa-2x fontawesome-color"></i>

      <div id="mySidenav" class="sidenav">
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
         </form>
           <div>
            <a class="" data-toggle="collapse" href="#account-items" aria-expanded="false" aria-controls="product-items">
              <i class="fas fa-user pr-2"></i>Account
            </a>
          </div>
          <div class="collapse" id="account-items">
            <div class="d-flex flex-column navigation-items text-white">
                <a href="/buyer/profile/edit"> Profile</a> 
                <a href="/buyer/user/account">Account</a>
               
            </div>
        </div>
           <a href="/buyer/order"> <i class="fas fa-box pr-2"></i>Order </a>
           <a href="/buyer/discount"> <i class="fa fa-tags pr-2"></i>Discount</a>
           <a href="/buyer/message"> <i class="fa fa-envelope pr-2"></i>Inbox</a>
           <a href="/feedback"> <i class="fas fa-thumbs-up pr-2"></i>Feedback</a>
           <a href="/buyer/history" > <i class="fas fa-history pr-2"></i>History</a>
           <a href="/about"><i class="fas fa-info-circle pr-2"></i>About Us</a>
           <a href="/contact"><i class="fas fa-phone pr-2"></i>Contact Us</a>
           <a href="/customer-service"> <i class="fas fa-headset pr-2"></i>Customer Service </i></a>
            {{-- <div class="login-word ">
              <span class="pl-5 text-white">Login as a</span>
              <a href="#"  class="d-inline p-2 font-italic  h6" id="seller-word"> Seller</a> 
            </div> --}}
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{ route('logout') }}"  class="logout ml-5 font-italic" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
           {{ __('Logout') }}</a>
         </div>
         
         <span style="cursor:pointer" onclick="openNav()">
           <i class="fa fa-bars fa-2x fontawesome-color"></i></span>
   </div> 


