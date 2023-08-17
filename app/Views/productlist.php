<!-- 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head> -->
  <body>
     <!-- Page Header-->
 <header class="masthead img-fluid" style="background-image: url('assets/assets/img/carosell_1.jpg')">
     <div class="container position-relative px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-md-10 col-lg-8 col-xl-7">
                 <div class="site-heading">
                     <h1>Our Product</h1>
                     <span class="subheading">Sauce Empire Manufacturing Sdn Bhd is a Malaysia base company. Supplying majority to food service sectors and introducing Asian Taste to all over the world.</span>
                 </div>
             </div>
         </div>
     </div>
 </header>
    <<main class="container">
    <h1 style="text-align:center">Product LIST</h1>
    <?php
    if (!empty($productlist)) {
        ?>

 
   <?php
   echo'<div class="row">';
        foreach ($productlist as $v) {
           
            ?>
        
            <div class="col-4">
                <div class="product-card p-3">
                    <a class="product-thumb btn btn-danger" href="<?= base_url('product/' . $v['product_id']) ?>"><img class="img-fluid" src="<?= $v['image_url'] ?>" alt="Product"></a>
                    <br/>
                    
                    <div class="product-title "><a  href="<?= base_url('product/' . $v['product_id']) ?>"><?= $v['title'] ?></a></div>
                    <div class="product-price" style="color:red">
                        $<?= $v['price'] ?>
                    </div>
                </div>
            </div>
       
        <?php
        
    }
    ?>
    <?php 
    } 
echo '</div>';
    ?>
    


</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

