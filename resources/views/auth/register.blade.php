<x-guest-layout>
    <x-auth-card>
        <!--  <x-slot name="logo">
     
        </x-slot>-->
        <div class="card" style="background: #FFF; max-width:45%; margin-inline:auto;">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="myHead text-center">
                <i class=""></i>
                <p style="color: #5337FF;">Cadastrar</p>
            </div>

            <form method="POST" action="{{ route('storeregister') }}" class="main-form text-center">
                @csrf

                <!-- Name -->
                <div class="form-group my-0">
                    <label for="name" :value="__('Nome')" class="my-0" />
                    <i class="bi bi-person-circle icon-login"></i>
                    <x-input id="name" class="myInput" type="text" name="name" placeholder="Nome" :value="old('name')"
                        required autofocus />
                    </label>
                </div>

                <!-- Email Address -->
                <div class="form-group my-0">
                    <label for="email" :value="__('Email')" class="my-0" />
                    <i class="bi bi-envelope-fill icon-login"></i>
                    <x-input id="email" class="myInput" type="email" name="email" placeholder="Email"
                        :value="old('email')" required />
                    </label>
                </div>

                <!-- Password -->
                <div class="form-group my-0">
                    <label for="password" :value="__('Senha')" class="my-0" />
                    <i class="bi bi-lock-fill icon-login"></i>
                    <x-input id="password" class="myInput" type="password" name="password" placeholder="Senha"
                    autocomplete="new-password" required />
                    </label>
                </div>

                <!-- Confirm Password -->
                <div class="form-group my-0">
                    <label for="password_confirmation" :value="__('Confirmar senha')" class="my-0" />
                    <i class="bi bi-lock-fill icon-login"></i>
                    <x-input id="password_confirmation" class="myInput" type="password" name="password_confirmation"
                     placeholder="Confirmar senha" required />
                    </label>
                </div>



                <div class="flex items-center justify-end mt-4 form-group my-0">

                    <a class="text-sm text-gray-600 hover:text-gray-900" style="text-decoration:none; color: #5337FF;" href="{{ route('login') }}">
                        {{ __('Já possui cadastro?') }}
                    </a>
                    <br>
                    <br>

                    <x-button class="btn btn-success" type="submit">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
            </form>
    </x-auth-card>
</x-guest-layout>