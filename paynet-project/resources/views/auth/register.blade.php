<x-guest-layout>
@vite('resources/js/cep.js')

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="cep" :value="__('CEP')" />

            <x-text-input id="cep" class="block mt-1 w-full"
                            type="text"
                            maxlength="8"
                            name="cep" required autocomplete="new-cep"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')" />

            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- Logradouro -->
        <div class="mt-4">
            <x-input-label for="logradouro" :value="__('Logradouro')" />

            <x-text-input id="logradouro" class="block mt-1 w-full"
                            type="text"
                            name="logradouro" required autocomplete="new-logradouro" />

            <x-input-error :messages="$errors->get('logradouro')" class="mt-2" />
        </div>

        <!-- Numero -->
        <div class="mt-4">
            <x-input-label for="numero" :value="__('Numero')" />

            <x-text-input id="numero" class="block mt-1 w-full"
                            type="number"
                            name="numero" required autocomplete="new-numero" />

            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />

            <x-text-input id="bairro" class="block mt-1 w-full"
                            type="text"
                            name="bairro" required autocomplete="new-bairro" />

            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- Cidade -->
        <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />

            <x-text-input id="cidade" class="block mt-1 w-full"
                            type="text"
                            name="cidade" required autocomplete="new-cidade" readonly="readonly" />

            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div class="mt-4">
            <x-input-label for="estado" :value="__('Estado')" />

            <x-text-input id="estado" class="block mt-1 w-full"
                            type="text"
                            name="estado" required autocomplete="new-estado" readonly="readonly"/>

            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
