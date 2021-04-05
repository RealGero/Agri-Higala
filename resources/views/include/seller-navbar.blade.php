
    <div class="col-6 right-side">
        <a href="/buyer/browse"><i class="fa fa-search  fa-2x fontawesome-color"></i></a>
       

        <div class="dropdown ">
          <button  type="button" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user  fa-2x fontawesome-color"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/buyer/profile/edit">Profile</a>
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
          </div>


          <div class="dropdown ">
            <button  type="button" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bell  fa-2x fontawesome-color"></i>
            </button>
            
            </div>
       

        <i class="fa fa-shopping-cart  fa-2x fontawesome-color"></i>

        <div id="mySidenav" class="sidenav">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

           <div>
                <a class="" data-toggle="collapse" href="#product-items" aria-expanded="false" aria-controls="product-items">
                    <i class="fas fa-shopping-cart pr-2"></i>Product
                </a>
           </div>
           <div class="collapse" id="product-items">
                <div class="d-flex flex-column navigation-items text-white">
                   <a href="/seller/product/my-product"> My product</a> 
                    <a href="/seller/product/add-new-product">Add product</a>
                </div>
            </div>


            <div>
                <a class="" data-toggle="collapse" href="#order-items" aria-expanded="false" aria-controls="order-items">
                    <i class="fas fa-box pr-2"></i>Order
                </a>
           </div>
           <div class="collapse" id="order-items">
                <div class="d-flex flex-column navigation-items text-white">
                   <a href="/seller/order/order-request"> My orders</a> 
                    <a href="/seller/history">History</a> 
                    <a href="/seller/return">Return</a> 
                </div>
            </div>
         
          
           <a href="/buyer/discount"> <i class="fas fa-star pr-2"></i>Ratings</a>
           <a href="/buyer/message"> <i class="fas fa-chart-bar pr-2"></i>Earnings</a>
           <a href="/feedback"> <i class="fa fa-envelope pr-2"></i>Inbox</a>
           <a href="/seller/rider"> <i class="fas fa-motorcycle pr-2"></i>Rider</a>
           <a href="/customer-service"> <i class="fas fa-headset pr-2"></i>Customer Service </i></a>
         </div>
         
         <span style="cursor:pointer" onclick="openNav()">
           <i class="fa fa-bars fa-2x fontawesome-color"></i></span>
   </div> 


