<!-- Page Title-->
<div>
    <div class="container">
        <div>
            <h1>Cart</h1>
        </div>



        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Subtotal</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $total_amount = 0;
                foreach ($cartList as $v) {
                ?>
                    <tr>
                        <td>
                            <div><a href="<?= base_url('product/' . $v['product_id']) ?>"><img width="200px" src="<?= $v['image_url'] ?>"></a>
                                <div>
                                    <h5><a href="<?= base_url('product/' . $v['product_id']) ?>"><?= $v['title'] ?></a></h5>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <div>
                                <?= $v['qty'] ?>
                            </div>
                        </td>

                        <td class="text-center text-lg text-medium">$<?= $v['price'] * $v['qty'] ?></td>
                        <!-- <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td> -->
                    </tr>
                <?php
                    $total_amount += $v['price'] * $v['qty'];
                }
                ?>

            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="column">
            <!-- <form class="coupon-form" method="post">
                     <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
                     <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
                   </form> -->
        </div>
        <div style="text-align:right" class="column text-lg">Subtotal: <span style="color:blueviolet">$<?= $total_amount ?></span></div>

        <div>
            <div>
                <a class="btn btn-outline-secondary" href="<?= base_url('productList') ?>">Back to Shopping</a>
                <a style="text-align:right" class="btn btn-success" href="<?= base_url('checkout_address') ?>">Checkout</a>
            </div>

        </div>
    </div>

    </tbody>
    </table>



</div>
</div>
<!-- Page Content-->

<!-- Shopping Cart-->