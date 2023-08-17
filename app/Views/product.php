


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Product<?=$single_p['product_id']?></li>
  </ol>
</nav>
<!-- Page Content-->
<div class="container ">
    <div class="row">
        <!-- Poduct Gallery-->
        <div class="col-md-6">
            <img class="img-fluid btn btn-danger" src="<?= $single_p['image_url'] ?>" />
        </div>
        <!-- Product Info-->
        <div class="col-md-6">
            <div></div>
            <h2 class="padding-top-1x text-normal"><?= $single_p['title'] ?></h2><span class="h2 d-block">
                &nbsp; RM<?= $single_p['price'] ?></span>
            <br />
            <h5>description :</h5>
            <p><?= $single_p['short_desc'] ?></p>

            <h5>Taste :</h5>

            <p><?= $single_p['Taste'] ?></p>


            <div class="row margin-top-1x">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <select class="form-control" id="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="pt-1 mb-2"><span class="text-medium">SKU:</span> #<?= $single_p['sku'] ?></div>
            <hr class="mb-3">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                    <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                </div>
                <div class="sp-buttons mt-2 mb-2">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-primary" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Tabs-->
    <div class="row padding-top-3x mb-3">
        <div class="col-lg-10 offset-lg-1">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">Description</a></li>
                <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">Reviews (3)</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <p><?= $single_p['short_desc'] ?></p>
                    <div class="row">
                        <div class="col-sm-6">
                            <dl>
                                <dt>Ingredients:</dt>
                                <dd><?= $single_p['Ingredients'] ?></dd>
                                <dt>Weight:</dt>
                                <dd><?= $single_p['Weight'] ?>g</dd>

                            </dl>
                        </div>
                        <div class="col-sm-6">
                            <dl>
                                <dt>Taste</dt>
                                <dd><?= $single_p['Taste'] ?></dd>
                                <dt>Manufacturer:</dt>
                                <dd><?= $single_p['manufacturer'] ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <!-- Review-->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="<?= base_url('assets/assets/img/review/r1.jpg') ?>" alt="Review author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <h4 class="comment-title">Average quality for the price</h4>
                                <div class="mb-2">
                                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                            <div class="comment-footer"><span class="comment-meta">Francis Burton</span></div>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="<?= base_url('assets/assets/img/review/r2.jpg') ?>" alt="Review author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <h4 class="comment-title">My husband love his new...</h4>
                                <div class="mb-2">
                                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="comment-footer"><span class="comment-meta">Maggie Scott</span></div>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="<?= base_url('assets/assets/img/review/r3.png') ?>" alt="Review author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <h4 class="comment-title">Soft, comfortable, quite durable...</h4>
                                <div class="mb-2">
                                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="comment-footer"><span class="comment-meta">Jacob Hammond</span></div>
                        </div>
                    </div>
                    <!-- Review Form-->
                    <h5 class="mb-30 padding-top-1x">Leave Review</h5>
                    <form class="row" method="post">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_name">Your Name</label>
                                <input class="form-control form-control-rounded" type="text" id="review_name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_email">Your Email</label>
                                <input class="form-control form-control-rounded" type="email" id="review_email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_subject">Subject</label>
                                <input class="form-control form-control-rounded" type="text" id="review_subject" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_rating">Rating</label>
                                <select class="form-control form-control-rounded" id="review_rating">
                                    <option>5 Stars</option>
                                    <option>4 Stars</option>
                                    <option>3 Stars</option>
                                    <option>2 Stars</option>
                                    <option>1 Star</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="review_text">Review </label>
                                <textarea class="form-control form-control-rounded" id="review_text" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-outline-primary" type="submit">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Carousel    这里问下能用for loop 吗 ？
    <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3> -->
    <!-- Carousel-->
    <!-- <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }"> -->
        <!-- Product-->
        <!-- <div class="grid-item">
            <div class="product-card">
                <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="<?= base_url('dist') ?>/img/shop/products/09.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
                <h4 class="product-price">
                    <del>$44.95</del>$34.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div> -->
        <!-- Product-->
        <!-- <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="<?= base_url('dist') ?>/img/shop/products/03.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
                <h4 class="product-price">$155.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div> -->
        <!-- Product-->
        <!-- <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?= base_url('dist') ?>/img/shop/products/12.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
                <h4 class="product-price">$49.50</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div> -->
        <!-- Product-->
        <!-- <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="<?= base_url('dist') ?>/img/shop/products/11.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
                <h4 class="product-price">$90.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div> -->
        <!-- Product-->
        <!-- <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?= base_url('dist') ?>/img/shop/products/04.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
                <h4 class="product-price">$47.00</h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div> -->
        <!-- Product-->
        <!-- <div class="grid-item">
            <div class="product-card">
                <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="<?= base_url('dist') ?>/img/shop/products/01.jpg" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
                <h4 class="product-price">
                    <del>$99.99</del>$49.99
                </h4>
                <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div> -->