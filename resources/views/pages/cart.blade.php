

<?php

use Gloudemans\Shoppingcart\Facades\Cart;

?>
@extends("welcome")


@section("content")



    {{--<table>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Product</th>--}}
            {{--<th>Qty</th>--}}
            {{--<th>Price</th>--}}
            {{--<th>Subtotal</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}

        {{--<tbody>--}}

        {{--<?php foreach(Cart::content() as $row) :?>--}}

        {{--<tr>--}}
            {{--<td>--}}
                {{--<p><strong><?php echo $row->name; ?></strong></p>--}}
                {{--<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>--}}
            {{--</td>--}}
            {{--<td><input type="text" value="<?php echo $row->qty; ?>"></td>--}}
            {{--<td>$<?php echo $row->price; ?></td>--}}
            {{--<td>$<?php echo $row->total; ?></td>--}}
        {{--</tr>--}}

        {{--<?php endforeach;?>--}}

        {{--</tbody>--}}

        {{--<tfoot>--}}
        {{--<tr>--}}
            {{--<td colspan="2">&nbsp;</td>--}}
            {{--<td>Subtotal</td>--}}
            {{--<td><?php echo Cart::subtotal(); ?></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td colspan="2">&nbsp;</td>--}}
            {{--<td>Tax</td>--}}
            {{--<td><?php echo Cart::tax(); ?></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td colspan="2">&nbsp;</td>--}}
            {{--<td>Total</td>--}}
            {{--<td><?php echo Cart::total(); ?></td>--}}
        {{--</tr>--}}
        {{--</tfoot>--}}
    {{--</table>--}}




<section id="cart_items">
    <div class="container">
        <?php if(Cart::count() > 0){?>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Фото</td>
                    <td class="description">Наименование</td>
                    <td class="price">Цена</td>
                    <td class="quantity">Количество</td>
                    <td class="total">Итог</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php foreach(Cart::content() as $item) :?>
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="" alt="" width="150px"></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href=""><?php echo $item->name?></a></h4>
                        <p>Web ID: 1089772</p>
                    </td>
                    <td class="cart_price">
                        <p>$<?php echo $item->price?></p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href="{{route("cart_plus", ['id'=>$item->rowId, 'qty'=>$item->qty])}}"> + </a>
                            <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $item->qty; ?>" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href="{{route("cart_minus", ['id'=>$item->rowId, 'qty'=>$item->qty])}}"> - </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">$<?php echo $item->total; ?></p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{route("cart_remove", ['id'=>$item->rowId])}}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
        <a class="btn btn-default update" href="{{route("cart_destroy", ['id'=>$item->rowId])}}">Очистить корзину</a>
            <form method="POST">
                @csrf
                <input class="btn btn-default update" type="submit" name="zakaz" value="Заказать"/>

            </form>
        <?php } else {?>

        <h2>Корзина пуста</h2>
        <?php }?>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Use Coupon Code</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Use Gift Voucher</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Estimate Shipping & Taxes</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Country:</label>
                            <select>
                                <option>United States</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field">
                            <label>Region / State:</label>
                            <select>
                                <option>Select</option>
                                <option>Dhaka</option>
                                <option>London</option>
                                <option>Dillih</option>
                                <option>Lahore</option>
                                <option>Alaska</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field zip-field">
                            <label>Zip Code:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Get Quotes</a>
                    <a class="btn btn-default check_out" href="">Continue</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>$59</span></li>
                        <li>Eco Tax <span>$2</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>$61</span></li>
                    </ul>
                    <a class="btn btn-default update" href="">Update</a>
                    <a class="btn btn-default check_out" href="">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
@endsection
