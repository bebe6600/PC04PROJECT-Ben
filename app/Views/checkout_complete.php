<div>
     <h1>Checkout</h1>
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
             <li class="breadcrumb-item active"><a href="#">check out</a></li>

         </ol>
     </nav>
     <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
         <div class="progress-bar" style="width: 100%"></div>
     </div>
     <br />
 </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="card text-center">
          <div class="card-body padding-top-2x">
            <h3 class="card-title">Thank you for your order!</h3>
            <p class="card-text">Your order has been placed and will be processed as soon as possible.</p>
            <p class="card-text">Make sure you make note of your order number, which is <span class="text-medium"><?=$order_serial?></span></p>
            <p class="card-text">You will be receiving an email shortly with confirmation of your order. 
              <u>You can now:</u>
            </p>
            <div class="padding-top-1x padding-bottom-1x"><a class="btn btn-outline-secondary" href="<?=base_url()?>">Go Back Shopping</a></div>
          </div>
        </div>
      </div>