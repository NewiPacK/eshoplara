<?php

use Illuminate\Support\Facades\Auth;

?>

@extends('welcome')

@section("left")

    @include("inc.left")

@endsection

@section("content")

<div class="col-sm-9 padding-right">
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="http://localhost/eshoplara/public/eshop/images/product-details/1.jpg" alt="" />
                <h3>ZOOM</h3>
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar1.jpg" alt=""></a>
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar2.jpg" alt=""></a>
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar3.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar1.jpg" alt=""></a>
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar2.jpg" alt=""></a>
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar3.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar1.jpg" alt=""></a>
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar2.jpg" alt=""></a>
                        <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/similar3.jpg" alt=""></a>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="http://localhost/eshoplara/public/eshop/images/product-details/new.jpg" class="newarrival" alt="" />
                <h2><?php echo $prod_detail->title?></h2>
                <p>Web ID: 1089772</p>
                <img src="http://localhost/eshoplara/public/eshop/images/product-details/rating.png" alt="" />
                <span>
									<span>US $<?php echo $prod_detail->price?></span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> E-SHOPPER</p>
                <a href=""><img src="http://localhost/eshoplara/public/eshop/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
    </div><!--/product-details-->

    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">Подробное описание</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">Отзывы</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details" >
                <div class="col-sm-12">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <h2>Подробное описание</h2>
                                <p><?php echo $prod_detail->text?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade active in" id="reviews" >
                <?php if(Auth::user()){?>
                <div class="col-sm-12">



                    <?php foreach ($comm as $item){?>
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i><?php echo $item->author?></a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i><?php echo $item->created_at?></a></li>
                    </ul>
                    <p><?php echo $item->text?></p>

                     <?php } ?>

                        <br>
                    <p><b>Напишите свой отзыв</b></p>

                    <form action="" method="POST">
                        @csrf
										<span>
											<input type="text" name="author" placeholder="Ваше имя"/>
											<input type="email" name="email" placeholder="Ваша почта"/>
										</span>
                        <textarea name="text" placeholder="Ваш отзыв" ></textarea>
                        <b>Rating: </b> <img src="http://localhost/eshoplara/public/eshop/images/product-details/rating.png" alt="" />
                        <input type="submit" class="btn btn-default pull-right" placeholder="Отправить"/>
                    </form>
                </div>

                <?php } else {?>

                <h2>Авторизуйтесь, чтобы оставить коммнетарий!</h2>

                <?php } ?>
            </div>

        </div>
    </div><!--/category-tab-->

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="http://localhost/eshoplara/public/eshop/images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="http://localhost/eshoplara/public/eshop/images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="http://localhost/eshoplara/public/eshop/images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="http://localhost/eshoplara/public/eshop/images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="http://localhost/eshoplara/public/eshop/images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="http://localhost/eshoplara/public/eshop/images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div><!--/recommended_items-->

</div>
</div>
</div>

@endsection
