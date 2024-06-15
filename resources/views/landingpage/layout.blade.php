<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('asset/img/logo_perguruan.png') }}" rel="shortcut icon" sizes="16x16 32x32">
    <title>Elearning INSHOKAI</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- daisyui --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/js/app.js')
</head>

<body class="font-poppins bg-black">
    {{-- navbar start --}}
    <div class="navbar bg-white shadow-gray-300  sticky top-0 z-10 shadow">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-gray-200 rounded-box w-52">
                    <li class="hover:bg-red-700 hover:text-white"><a href="/home">Beranda</a></li>
                    <li class="hover:bg-red-700 hover:text-white"><a href="/home#tentang-kami">Tentang Kami</a></li>
                    <li class="hover:bg-red-700 hover:text-white"><a href="/produk">Produk</a></li>
                </ul>
            </div>
            <a href="#" class="flex ms-2 md:me-24">
                <img src="{{ asset('asset/img/logo_perguruan.png') }}" class="h-10 me-3" alt="Logo" />
                <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap">INSHOKAI</span>
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li class="hover:bg-red-700 hover:text-white rounded-md font-semibold text-lg"><a href="/home">Beranda</a> </li>
                <li class="hover:bg-red-700 hover:text-white rounded-md font-semibold text-lg"><a href="/home#tentang-kami">Tentang Kami</a></li>
                <li class="hover:bg-red-700 hover:text-white rounded-md font-semibold text-lg"><a href="/produk">Produk</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end mr-2">
            <a class="btn hover:bg-red-800 bg-red-700 text-white px-8">Login</a>
        </div>
    </div>
    {{-- navbar end --}}


    @yield('content')


    {{-- footer --}}
    <footer class="footer p-10 bg-base-200 text-base-content text-black">
        <aside>
            <img src="{{asset('asset/img/logos.png')}}" class="w-20" alt="">
            <p class="font-semibold text-xl">Institut Shotokan Karate-Do Indonesia</p>
            <p class="font-semibold text-lg">INSHOKAI</p>
        </aside>
        <nav>
            <h6 class="footer-title">Contact</h6>
            <p>Medan, Sumatera Utara Kode Pos, 20351 Indonesia</p>
            <p class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg> +62 6542 7786 9856
            </p>
            <p class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg> inshokai@gmail.com
            </p>
        </nav>
        <nav>
            <h6 class="footer-title">Feedback</h6>
            <form action="">
                <textarea class="textarea textarea-bordered" placeholder="Berikan Komentar anda disini"></textarea>
                <button class="p-2 bg-red-700 text-white">Kirim</button>
            </form>

        </nav>
    </footer>
</body>

</html>