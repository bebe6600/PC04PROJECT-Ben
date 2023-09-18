  <!-- Footer-->
  <footer class="border-top" style="background-color:black;">
      <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="row">
                  <div class="col-md-4 ">
                      <h2 style="color:bisque;">Why Us</h2>
                      <br />

                      <p style="color:white;">Professionally Supplying To Food Service Sector For Over 20 Years
                          Effective Cost Control With Minimum Preparation Wastage
                          Minimize Manpower With Minimum Training & Skill Required
                          Effective Quality Control
                          Convenience, Time Saving & Space Saving
                          Provide Professional Consultation, Knowledge Sharing & Supports
                          Accept OEM & Contract Manufacturing</p>
                  </div>

                  <div class="col-md-4">

                      <h2 style="color:bisque;">Who are we</h2>
                      <br />


                      <p style="color:white;">Our Company
                      Sauce King Manufacturing Sdn Bhd was established since year 2000
                      Sauce King Manufacturing Sdn Bhd is a Malaysia base company. The Company was established since year 2000 as a family oriented business and slowly evolved into an organisation with corporate management. Supplying majority to food service sectors and introducing Asian Taste to all over the world. Nyolike’s product, the Company flagship brand is celebrated by major hotels, restaurants, middle and upper class cafes, and evenhawkers stalls in Malaysia due to its versatility.</p>
                  </div>

                  <div class="col-md-4">

                      <h2 style="color:bisque;">Contact Us</h2>
                      <br />


                      <p style="color:white;">Sauce King Manufacturing Sdn Bhd.
                          No 666, Jalan 666, ,
                          Taman Bukit industri,
                          56100, Cheras, Kuala Lumpur,
                          Malaysia.<br /><br />

                          Tel: +6017-800-8888/ +603 – 1000 8888
                          Fax: +603 – 10008888<br />
                          Email: sauseking888.info@gmail.com</p>
                  </div>
              </div>
              <div class="col-md-10 col-lg-8 col-xl-7">

                  <div class="small text-center text-muted fst-italic">Copyright &copy;sauce 2023 All Rights Reserved</div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


  <script>

var token = '<?= isset($token) ? $token : '' ?>';


function addCart(product_id, qty) {

  if (token == '') {
    alert("Please login first");
  } else {

    //endpoint
    $.post("<?=base_url('api/addCart')?>", {
      "product_id": product_id,
      "qty": qty,
      "token": token
    }, function(res) {

      if (res == "OK") {
        alert('Add successful');
        getCart();
      } else {
        alert(res);
      }

    });

  }

}


function getCart() {

  $("#cartList").html("");
  $(".subtotal").html("$0");

  if (token != '') {

    $.getJSON("<?= base_url('api/getCart') ?>/" + token, function(res) {
      // success then render view

      $("#cartList").html("");
      var total_amount = 0;
      for (var i = 0; i < res.length; i++) {

        var html = $("<div>").html(`<div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="#"><img src="${res[i].image_url}" 
                  alt="Product"></a>
                    <div class="dropdown-product-info"><a class="dropdown-product-title" href="#">${res[i].title}</a><span class="dropdown-product-details">${res[i].qty} x $${res[i].price}</span></div>
                  </div>`);
        $("#cartList").append(html);

        total_amount += res[i].qty * res[i].price;

      }

      $(".subtotal").html("$" + total_amount.toFixed(2));

    });

  }

}

getCart();
  </script>
  </body>

  </html>