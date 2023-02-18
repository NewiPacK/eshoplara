<?php

use Illuminate\Support\Facades\Auth;

?>
    <?php if(Cart::count() > 0){?>

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
                        <a  class="cart_quantity_up" style="cursor:pointer" onclick="plus('<?php echo $item->rowId ?>','<?php echo route("plus")?>', '<?php echo $item->qty?>')"> + </a>
                        <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $item->qty; ?>" autocomplete="off" size="2">
                        <a class="cart_quantity_down" onclick="minus('<?php echo $item->rowId ?>','<?php echo route("minus")?>', '<?php echo $item->qty?>')"> - </a>
                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">$<?php echo $item->total; ?></p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete" onclick="remove('<?php echo $item->rowId ?>','<?php echo route("remove")?>')" ><i class="fa fa-times"></i></a>
                </td>
            </tr>
            <?php endforeach;?>

            </tbody>
        </table>
    </div>
    <a class="btn btn-default update" onclick="destroy('<?php echo route("destroy")?>')">Очистить корзину</a>
    <?php if(Auth::user()){?>
    <form method="POST">
        @csrf
        <input class="btn btn-default update" type="submit" name="zakaz" value="Заказать"/>

    </form>
    <?php } else {?>
   <h4>Для заказа авторизуйтесь!</h4>
    <?php } ?>
    <?php } else {?>

    <h2>Корзина пуста</h2>
    <?php }?>
