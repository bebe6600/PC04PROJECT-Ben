 <!-- Page Title-->

 <div>
     <h1>Checkout</h1>
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
             <li class="breadcrumb-item active"><a href="#">check out</a></li>

         </ol>
     </nav>
     <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
         <div class="progress-bar" style="width: 75%"></div>
     </div>
     <br />
 </div>



 <div class="container">
     <div class="padding-top-2x hidden-lg-up"></div>
     <!-- Order Summary Widget-->
     <h3 class="widget-title">Order Summary</h3>
     <table class="table table-bordered">
         <tr>
             <td>Cart Subtotal:</td>
             <td class="text-medium">$289.68</td>
         </tr>
         <tr>
             <td>Shipping:</td>
             <td class="text-medium">$22.50</td>
         </tr>
         <tr>
             <td>Estimated tax:</td>
             <td class="text-medium">$3.42</td>
         </tr>
         <tr>
             <td></td>
             <td class="text-lg text-medium">$315.60</td>
         </tr>
     </table>
     <br/>
     <form method="POST" action="<?= base_url('checkout_submit') ?>">

         <h4>Shipping Address</h4>
         <div class="row mb-3">
             <div class="col-6 ">
                 <lable for="F_Name">First Name</lable>
                 <input name="firstname" id="F_Name" class="form-control" />
             </div>
             <div class="col-6">
                 <lable for="L_Name">Last Name</lable>
                 <input name="lastname" id="L_Name" class="form-control" />
             </div>
         </div>

         <div class="row mb-3">
             <div class="col-6">
                 <lable for="Email">Email Address</lable>
                 <input name="Email" id="Email" class="form-control" />
             </div>
             <div class="col-6">
                 <lable for="Phone">Phone number</lable>
                 <input name="Phone" id="Phone" class="form-control" />
             </div>
         </div>

         <div class="row mb-3">
             <div class="col-6">
                 <lable for="remarks">remarks</lable>
                 <textarea name="remarks" id="remarks" class="form-control"></textarea>
             </div>
             <div class="col-6">
                 <lable for="country">Country</lable>
                 <select name="country" class="form-control"  id="country">
                    <option>Malaysia</option>
                    <option>Singapore</option>
                    <option>Thailand</option>
                    <option>China</option>
                    <option>Indonesia</option>
                 </select>
             </div>
         </div>

         <div class="row mb-3">
             <div class="col-6">
                 <lable for="City">City</lable>
                 <select name="City" class="form-control" id="City">
                    <option>Johor</option>
                    <option>Melaka</option>
                    <option>Penang</option>
                    <option>Kuala Lumpur</option>
                    <option>Selangor</option>
                    <option>Sabah</option>
                    <option>Sarawak</option>
                 </select>
             </div>
             <div class="col-6">
                 <lable for="Postcode">Postcode</lable>
                 <input name="Postcode" id="Postcode" class="form-control" />
             </div>
         </div>

         <div class="row mb-3">
             <div class="col-6">
                 <lable for="Address1">Address 1</lable>
                 <input name="Address1" id="Address1" class="form-control" />
             </div>
             <div class="col-6">
                 <lable for="Address2">Address2</lable>
                 <input name="Address2" id="Address2" class="form-control" />
             </div>
         </div>
         
         <div class="row mt-5">
             <div class="col-6">
                 <a class="btn btn-danger" href="<?=base_url('cart')?>">CART</a>
             </div>
             <div class="col-6" style="text-align:end">
                 <input type="submit" value="CHECK OUT" class="btn btn-primary  " />
             </div>
         </div>
     </form>
 </div>
 <br/>




         
  
         
