<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karate School</title>
    <link href="{{ asset('asset/img/logo_perguruan.png') }}" rel="shortcut icon" sizes="16x16 32x32">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite('resources/js/app.js')
</head>

<body class="font-poppins bg-black text-white">
    {{-- Navbar --}}
    <nav class="bg-white text-black shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('asset/img/logo_perguruan.png') }}" class="h-10 mr-3" alt="Logo" />
                <span class="font-bold text-xl">Karate School</span>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="#" class="hover:text-red-700">Home</a>
                <a href="#" class="hover:text-red-700">About</a>
                <a href="#" class="hover:text-red-700">Program</a>
                <a href="#" class="hover:text-red-700">News</a>
                <a href="#" class="hover:text-red-700">Products</a>
                <a href="#" class="hover:text-red-700">Contact</a>
                <a href="#" class="text-red-700">Login/Register</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="h-screen bg-cover bg-center relative"
        style="background-image: url('{{ asset('asset/img/hero_bg.jpeg') }}');">
        <div class="container mx-auto h-full flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-4">ABOUT FIGHT SCHOOL</h1>
                <p class="text-lg md:text-2xl mb-8">Lorem ipsum is simply dummy text of the printing and typesetting
                    industry.</p>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="bg-white text-black py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-10">About Fight School</h2>
            <p class="text-lg leading-8 mx-auto max-w-3xl">Lorem ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
    </section>

    {{-- Programs Section --}}
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-10 text-white">Programs</h2>
            <div x-data="{ current: 0, items: ['1', '2', '3'] }" class="relative">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 overflow-hidden">
                    <template x-for="(item, index) in items" :key="index">
                        <div x-show="current === index" class="bg-white text-black p-6 rounded-lg">
                            <img :src="`{{ asset('asset/img/program${item}.jpg') }}`" class="w-full rounded-lg mb-6"
                                :alt="'Program ' + item">
                            <h3 class="text-2xl font-semibold mb-2">Judul Program</h3>
                            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </template>
                </div>
                <button @click="current = (current === 0) ? items.length - 1 : current - 1"
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-l-lg">‹</button>
                <button @click="current = (current === items.length - 1) ? 0 : current + 1"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-r-lg">›</button>
            </div>
        </div>
    </section>

    {{-- Latest News Section --}}
    <section class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-10 text-white">Berita Terkini</h2>
            <div x-data="{ current: 0, items: ['1', '2', '3'] }" class="relative">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 overflow-hidden">
                    <template x-for="(item, index) in items" :key="index">
                        <div x-show="current === index" class="bg-white text-black p-6 rounded-lg">
                            <img :src="`{{ asset('asset/img/news${item}.jpg') }}`" class="w-full rounded-lg mb-6"
                                :alt="'News ' + item">
                            <h3 class="text-2xl font-semibold mb-2">Judul Berita</h3>
                            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </template>
                </div>
                <button @click="current = (current === 0) ? items.length - 1 : current - 1"
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-l-lg">‹</button>
                <button @click="current = (current === items.length - 1) ? 0 : current + 1"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-r-lg">›</button>
            </div>
        </div>
    </section>
</body>

</html>
