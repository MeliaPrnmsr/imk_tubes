<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('asset/img/logo_perguruan.png') }}" rel="shortcut icon" sizes="16x16 32x32">
    <title>Elearning INSHOKAI</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/js/app.js')
</head>

<body class="font-sans">

    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="mb-4">
            <img src="{{asset('asset/img/logos.png')}}" alt="" class="w-32">
        </div>

        <div class="p-4 bg-white shadow-lg rounded-xl md:w-2/5 w-4/5">
            <div class="px-4 my-4">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="my-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <input id="email" placeholder="contoh@gmail.com"
                            class="block mt-1 w-full py-2 px-4 border border-black rounded-full" type="email"
                            name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="my-4">
                        <x-input-label for="password" :value="__('Kata Sandi')" />

                        <input id="password" placeholder="kata sandi"
                            class="block mt-1 w-full py-2 px-4 border border-black rounded-full" type="password"
                            name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 px-5">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingat Saya') }}</span>
                        </label>
                    </div>


                    <div class="mt-4">
                        <button class="mt-3 w-full rounded-full py-2 bg-red-700 text-white shadow-lg">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    <div class="mt-6 text-center">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2"
                            href="{{ route('password.request') }}">
                            {{ __('Lupa Kata Sandi?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>