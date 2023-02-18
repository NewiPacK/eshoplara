@extends("welcome")


@section("left")

    @include("inc.left")

@endsection

@section("content")

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Продукты</h2>
            <?php if(!count($search)>0){?>
            <h2 align="center">Ничего не найдено</h2>
            <?php } ?>
            <?php foreach ($search as $item){?>
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


    </div>
@endsection
