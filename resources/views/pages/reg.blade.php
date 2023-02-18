@extends("welcome")


@section("content")
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Зарегистрироваться</h2>
                        <form action="{{ route('register') }}" method="POST">

                            @csrf

                            <x-input-label for="name" :value="__('Имя')" />

                            <x-text-input id="name"  type="text" name="name" :value="old('name')" required autofocus />

                            <x-input-error :messages="$errors->get('name')"  />


                            <x-input-label for="email" :value="__('Почта')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                            <x-input-error :messages="$errors->get('email')"  />


                            <x-input-label for="password" :value="__('Пароль')" />

                            <x-text-input id="password"
                                          type="password"
                                          name="password"
                                          required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')"  />


                            <x-input-label for="password_confirmation" :value="__('Подтвердите пароль')" />

                            <x-text-input id="password_confirmation"
                                          type="password"
                                          name="password_confirmation" required />

                            <x-input-error :messages="$errors->get('password_confirmation')"  />


                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="">
                                    {{ __('Уже есть аккаунт?') }}
                                </a>

                                <x-primary-button class="ml-4">
                                    {{ __('Зарегистрировать') }}
                                </x-primary-button>

                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

@endsection