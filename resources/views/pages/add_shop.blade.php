@extends("welcome")

@section("menu")

    @include("inc.menu")

@endsection


@section("content")
    <style>
        .pusto{
            height: 300px;
        }
    </style>


    <?php  if(!$shop){?>


    <div class="container">
        <div class="row">
            <form action="" method="POST">
                @csrf
            <table class="col-sm-4 col-sm-offset-4" border="1">
                <tr>
                    <td>Аватарка</td>
                    <td>Имя</td>
                    <td>Описание</td>
                </tr>
                <tr>
                    <td>Фото</td>
                    <td><input type="text" name="title" placeholder="Имя"/> </td>
                    <td><input type="text" name="text" placeholder="Описание"/></td>
                </tr>
            </table>
            <br><br>
            <input type="submit" placeholder="Добавить"/>
            </form>

            <div class="col-sm-12 pusto"></div>
            <div class="col-sm-12"></div>
        </div>
    </div>

    <?php } else{?>

        <h1>У вас уже есть магазин</h1>
        <h2>Чтобы добавлять больше магазинов, нужна подписка!</h2>

    <?php }?>

@endsection