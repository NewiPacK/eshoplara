@extends("welcome")


@section("menu")

    @include("inc.menu")

@endsection


@section("content")


    {{--<table>--}}
        {{--<tr>--}}
            {{--<td>Имя</td>--}}
            {{--<td>Почта</td>--}}
            {{--<td>Пароль</td>--}}
        {{--</tr>--}}

        {{--<tr>--}}
            {{--<td><input type=""/></td>--}}
            {{--<td>Почта</td>--}}
            {{--<td>Пароль</td>--}}
        {{--</tr>--}}

    {{--</table>--}}

    <div class="container">
        <div class="row">
            <table class="col-sm-4 col-sm-offset-3" border="1">
                <tr>
                    <td>Аватарка</td>
                    <td>Информация</td>
                    <td>Пароль</td>
                    <td>Редактировать</td>
                    <td>Удалить аккаунт</td>
                </tr>
                <tr>
                    <td></td>
                    <td>@include('profile.partials.update-profile-information-form')</td>
                    <td>@include('profile.partials.update-password-form')</td>
                    <td><a href="{{route('profile.edit')}}">Изменить</a> </td>
                    <td>@include('profile.partials.delete-user-form')</a> </td>
                </tr>
            </table>
            <div class="col-sm-12 pusto"></div>
            <div class="col-sm-12"></div>
        </div>
    </div>


    {{--<x-app-layout>--}}


        {{--<div class="py-12">--}}
            {{--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
                {{--<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
                    {{--<div class="max-w-xl">--}}
                        {{--@include('profile.partials.update-profile-information-form')--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
                    {{--<div class="max-w-xl">--}}
                        {{--@include('profile.partials.update-password-form')--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
                    {{--<div class="max-w-xl">--}}
                        {{--@include('profile.partials.delete-user-form')--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</x-app-layout>--}}


@endsection