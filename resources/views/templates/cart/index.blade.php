@extends ('layouts/master')

@section ('content')

<div class="container">
   <table class="table table-borderless shadow-sm">
      <thead>
         <tr class="border">
            <td><input type="checkbox"></td>
            <td>Product</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
            <td>Action</td>
         </tr>
      </thead>
   </table>

   <table class="table table-borderless shadow-sm">
      <thead>
         <tr class="border-bottom">
            <th><input type="checkbox"></th>
            <th colspan="5">Philips</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><input type="checkbox"></td>
            <td>Coffee maker</td>
            <td>P100</td>
            <td>
               <button class="btn">
                  <i class="fas fa-minus fa-sm text-muted"></i>
               </button>
               2
               <button class="btn">
                  <i class="fas fa-plus fa-sm text-muted"></i></button>
            </td>
            <td>P200</td>
            <td>Delete</td>
         </tr>
      </tbody>
   </table>
   <div class="card">
      <div class="card-body">
         <h5 class="card-title font-weight-bold border-bottom">Voucher</h5>
         <div class="row">
            <label class="col-2 text-muted text-right">Coins</label>
            <p class="card-text col-10">J DelaCruz</p>
         </div>
         <div class="row">
            <label class="col-2 text-muted text-right">Coins</label>
            <p class="card-text col-10">J DelaCruz</p>
         </div>
      </div>
   </div>
</div>

@endsection