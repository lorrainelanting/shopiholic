@extends ('layouts/master')

@section ('content')

<div class="container">
   <div class="row">
      <!-- Navigation Column -->
      <div class="col-2">
         <div id="myAccount" class="">
            <a href="/user/profile" class="font-weight-bold text-decoration-none">My Account</a>
            <div><a href="/user/profile" class="text-muted text-decoration-none ml-4">Profile</a></div>
            <div><a href="/user/address" class="text-muted text-decoration-none ml-4">Address Book</a></div>
            <div><a href="/user/password" class="text-muted text-decoration-none ml-4">Change Password</a></div>
         </div>
         <div id="myOrders" class="">
            <a href="/user/orders" class="font-weight-bold text-decoration-none">My Orders</a>
         </div>
      </div>
      <!-- Card column -->
      <form class="col-10">
         <div class="card border-0 shadow-sm">
            <div class="card-body">
               <h5 class="card-title font-weight-bold border-bottom">Profile Information</h5>
               <div class="row">
                  <label class="col-2 text-muted text-right">Username</label>
                  <p class="card-text col-10">J DelaCruz</p>
               </div>
               <form>
                  <div class="form-group row">
                     <label for="fullName" class="col-sm-2 col-form-label text-muted text-right">Full Name</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" id="fullName">
                     </div>
                  </div>
               </form>
               <div class="row">
                  <label class="text-muted col-2 text-right">Email</label>
                  <div class="d-inline col-10">
                     <p class="card-text d-inline">email@example.com</p>
                     <a href="#todo" class="d-inline"><u>Change</u></a>
                  </div>
               </div>
               <div class="row">
                  <label class="text-muted col-2 text-right">Mobile Number</label>
                  <div class="d-inline col-10">
                     <p class="card-text d-inline">0000-000-0012</p>
                     <a href="#todo" class="d-inline"><u>Change</u></a>
                  </div>
               </div>
               <div class="row">
                  <button type="button" class="btn btn-primary mx-auto">Save Changes</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

@endsection