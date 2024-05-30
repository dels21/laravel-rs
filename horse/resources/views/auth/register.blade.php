<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="container p-0">
            <!-- Name -->
            <div class="mt-4 row">
                <x-input-label for="name" :value="__('Nama lengkap')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4 row">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 row">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            
            {{-- Password Confirmation --}}
            <div class="mt-4 row">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            {{-- Testing --}}
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            <div class="row p-0">
                <div class="mt-4 col p-0">
                    <x-input-label for="tempatLahir" :value="__('Tempat lahir')" />
                    <x-text-input id="tempatLahir" class="block mt-1 w-full" type="text" tempatLahir="tempatLahir" :value="old('tempatLahir')" required autofocus autocomplete="tempatLahir" />
                    <x-input-error :messages="$errors->get('tempatLahir')" class="mt-2" />
                </div>
                <div class="p-1"></div>
                <div class="mt-4 col p-0">
                    <x-input-label for="tanggalLahir" :value="__('Tanggal lahir')" />
                    <x-text-input id="tanggalLahir" class="block mt-1 w-full" type="text" tanggalLahir="tanggalLahir" :value="old('tanggalLahir')" required autofocus autocomplete="tanggalLahir" placeholder="DD/MM/YYYY"/>
                    <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
                </div>
            </div>
            
{{--             
            <div class="mt-4 p-0">
                <label for="datepicker">Select a Date:</label>
                <input type="text" class="form-control p-0" id="datepicker" placeholder="MM/DD/YYYY">
            </div> --}}
        
        {{-- end testing --}}


        <div class="flex justify-content-center">
            <div class="d-flex items-center justify-content-center mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="d-flex items-center justify-content-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Sudah punya akun?') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
