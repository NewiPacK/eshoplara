@extends("welcome")




@section("slider")

    @include("inc.slider")

@endsection

@section("left")

    @include("inc.left")

@endsection

@section("content")

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Продукты</h2>

        <?php foreach ($prod as $item){?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="http://localhost/eshoplara/public/eshop/images/home/product1.jpg" alt="" />
                        <h2>$<?php echo $item->price?></h2>
                        <p><?php echo $item->title?></p>
                        <a href="" data-id="<?php echo $item->id?>" data-url="{{ route('addcartajax') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="" data-id="<?php echo $item->id?>" class="fast-view"><i class="fa fa-plus-square"></i>Быстрый просмотр</a></li>
                        <li><a href="{{ route("detail", ['id'=>$item->id]) }}"><i class="fa fa-plus-square"></i>Подробное описание</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>


    </div><!--features_items-->

    <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tshirt" data-toggle="tab">Новинки</a></li>
                <li><a href="#blazers" data-toggle="tab">Хиты</a></li>
                <li><a href="#sunglass" data-toggle="tab">Распродажа</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt" >


                <?php foreach($new as $item){?>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="http://localhost/eshoplara/public/eshop/images/home/gallery1.jpg" alt="" />
                                <h2>$<?php echo $item->price?></h2>
                                <p><?php echo $item->title?></p>
                                <a href="{{route("addcart", ['id'=>$item->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                            </div>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="tab-pane fade" id="blazers" >

                <?php foreach ($hit as $item){?>

                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery4.jpg" alt="" />
                                <h2>$<?php echo $item->price?></h2>
                                <p><?php echo $item->title?></p>
                                <a href="{{route("addcart", ['id'=>$item->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                            </div>

                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>

            <div class="tab-pane fade" id="sunglass" >

                <?php foreach ($sale as $item){?>

                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery3.jpg" alt="" />
                                <h2>$<?php echo $item->price?></h2>
                                <p><?php echo $item->title?></p>
                                <a href="{{route("addcart", ['id'=>$item->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                            </div>

                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div><!--/category-tab-->






</div>
</div>
</div>
@endsection
