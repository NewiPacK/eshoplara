<?php
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Категории</h2>
                <div class="panel-group category-products" id="accordian"><!--category-products-->


                    <?php foreach ($cat as $item){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="#"><?php
                                    if(LaravelLocalization::getCurrentLocale() == 'ru'){
                                        echo $item->title_ru;
                                    }else{
                                        echo $item->title_en;
                                    }?>
                                </a></h4>
                        </div>
                    </div>
                    <?php } ?>

                </div><!--/category-products-->

                <div class="brands_products"><!--brands_products-->
                    <h2>Brands</h2>
                    <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">



                            <?php foreach($brands as $item){ ?>

                            <li><a href="#"> <span class="pull-right">(50)</span><?php
                                    if(LaravelLocalization::getCurrentLocale() == 'ru'){
                                        echo $item->title_ru;
                                    }else{
                                        echo $item->title_en;
                                    }?></a></li>
                                <?php } ?>
                        </ul>
                    </div>
                </div><!--/brands_products-->

                <div class="price-range"><!--price-range-->
                    <h2>Price Range</h2>
                    <div class="well text-center">
                        <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                        <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                    </div>
                </div><!--/price-range-->

                <div class="shipping text-center"><!--shipping-->
                    <img src="images/home/shipping.jpg" alt="" />
                </div><!--/shipping-->

            </div>
        </div>
