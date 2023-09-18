<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sauce page</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="<?= base_url('assets/') ?>https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Welcome <?php
            if($is_login) {
                echo  '<div class="user-info">';
                echo '<h4 class="user-name"><span style="color:blanchedalmond">'.$name.'</span></h4>
                  </div>';

                  if($level == -1){
                    echo '<a class="navbar-brand" href="'.base_url('dashboard').'"> <i class="icon-unlock"></i>Admin Portal</a>';
                  echo'<a class="navbar-brand" href="'.base_url('logout').'">Logout<a/>';
    
               }elseif($level == 0){
                   echo'<a class="navbar-brand" href="'.base_url('logout').'">Logout<a/>';
    
               }
            }
            else{
               echo'<a class="navbar-brand" href="'.base_url('signup_login').'">Sign Up / LOGIN<a/>';

           } ?></a>
                
        
                

                
        
            

               
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('productList') ?>">Product</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('contact') ?>">Contact</a></li>
                    <?php
                   if($is_login){
                    ?>
                   <li class="nav-item "><a class="btn btn-success" href="<?= base_url('cart') ?>"><i class="bi bi-cart "></i></a></li>';
                   <?php
                   }
                   else{

                   }

                    
                    ?>

                </ul>
            </div>
        </div>
    </nav>



     <!-- Page Header
 <header class="masthead img-fluid" style="background-image: url('assets/assets/img/carosell_1.jpg')">
     <div class="container position-relative px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-md-10 col-lg-8 col-xl-7">
                 <div class="site-heading">
                     <h1>Sauce Empire</h1>
                     <span class="subheading">Sauce Empire Manufacturing Sdn Bhd is a Malaysia base company. Supplying majority to food service sectors and introducing Asian Taste to all over the world.</span>
                 </div>
             </div>
         </div>
     </div>
 </header> -->
 
    <div style="background-color:black; height:80px">

    </div>