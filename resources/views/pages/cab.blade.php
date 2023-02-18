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



    <div class="container">
       <div class="row">
            <table class="col-sm-4 col-sm-offset-4" border="1">
                <tr>
                    <td>Аватарка</td>
                    <td>Имя</td>
                    <td>Почта</td>
                    <td>Редактировать</td>
                    <td>Выход</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ Auth::user() ->name}}</td>
                    <td>{{ Auth::user() ->email}}</td>
                    <td><a href="{{route('profile.edit')}}">Изменить</a> </td>
                    <td><a href="{{route('logout')}}">Выйти</a> </td>
                </tr>
            </table>

           <br>
           <br>


           <h3 align="center"><a href="{{route('add_shop')}}">Добавить магазин</a></h3>


           <table class="col-sm-4 col-sm-offset-4" border="1">
               <tr>
                   <td>Название</td>
                   <td>Описание</td>
               </tr>

               <?php foreach ($shop as $item){?>
               <tr>
                   <td><?php echo $item->title?></td>
                   <td><?php echo $item->text?></td>
               </tr>
               <?php } ?>

           </table>


       </div>
    </div>


@endsection