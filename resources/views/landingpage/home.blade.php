@extends('landingpage.layout')

@section('content')
{{-- hero section --}}
<div class="w-full bg-black text-white">
    <div class="grid grid-cols-1 md:grid-cols-2 p-20 items-center">
        <div>
            <h1 class="font-bold text-3xl md:text-5xl my-4">Selamat Datang!</h1>
            <h4 class="font-semibold text-lg">E-LEARNING INSHOKAI</h4>
            <a href="/pendaftaran">
                <button class="p-3 bg-red-700 hover:bg-red-800 text-white rounded-md my-4">
                    Daftar Sekarang
                </button>
            </a>
        </div>

        <div class="flex justify-center">
            <img src="{{asset('asset/img/home.jpg')}}" class="md:w-3/5" alt="">
        </div>
    </div>
</div>

{{-- tentang section --}}
<div class="w-full bg-white text-black" id="tentang-kami">
    <div class="bg-white grid grid-cols-1 md:grid-cols-2 p-20 items-center">
        <div class="flex justify-center">
            <img src="{{asset('asset/img/logos.png')}}" class="md:w-3/5" alt="">
        </div>

        <div>
            <h1 class="font-bold text-xl md:text-3xl my-4">INSHOKAI</h1>
            <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla accusantium ab corporis ipsa
                harum cum officia maiores. Corrupti dolores tempora aut hic quis necessitatibus facere veritatis
                maiores eaque, dignissimos tenetur.</p>
        </div>
    </div>
</div>

{{-- Team Section --}}
<section class="py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-10 text-white">PENGURUS</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 px-10 md:px-0 gap-10 items-center">
            <div class="bg-white p-2">
                <img src="{{ asset('asset/img/pengurus3.jpg') }}" class="w-full rounded-lg mb-6" alt="Team Member">
            </div>
            <div class="bg-white p-2">
                <img src="{{ asset('asset/img/pengurus1.jpg') }}" class="w-full rounded-lg mb-6" alt="Team Member">
            </div>
            <div class="bg-white p-2">
                <img src="{{ asset('asset/img/pengurus2.jpg') }}" class="w-full rounded-lg mb-6" alt="Team Member">
            </div>
        </div>
    </div>
</section>

{{-- Programs Section --}}
<section class="py-20 bg-gray-800">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-10 text-white">Program</h2>
        <div class="md:hidden px-6">
            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                    <div class="bg-white text-black p-6 rounded-lg">
                        <img src="{{ asset('asset/img/karate_siluet.png') }}" class="w-full rounded-lg mb-6" alt="News">
                        <h3 class="text-2xl font-semibold mb-2">Program 1</h3>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="text-black">❮</a>
                        <a href="#slide2" class="text-black">❯</a>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <div class="bg-white text-black p-6 rounded-lg">
                        <img src="{{ asset('asset/img/karate_siluet.png') }}" class="w-full rounded-lg mb-6" alt="News">
                        <h3 class="text-2xl font-semibold mb-2">Program 2</h3>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="text-black">❮</a>
                        <a href="#slide3" class="text-black">❯</a>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <div class="bg-white text-black p-6 rounded-lg">
                        <img src="{{ asset('asset/img/karate_siluet.png') }}" class="w-full rounded-lg mb-6" alt="News">
                        <h3 class="text-2xl font-semibold mb-2">Program 3</h3>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="text-black">❮</a>
                        <a href="#slide1" class="text-black">❯</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden md:block">
            <div class="grid grid-cols-1 md:grid-cols-3 px-10 md:px-0 gap-10">
                <div class="bg-white text-black p-6 rounded-lg">
                    <img src="{{ asset('asset/img/karate_siluet.png') }}" class="w-full rounded-lg mb-6" alt="News">
                    <h3 class="text-2xl font-semibold mb-2">Program 1</h3>
                    <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white text-black p-6 rounded-lg">
                    <img src="{{ asset('asset/img/karate_siluet.png') }}" class="w-full rounded-lg mb-6" alt="News">
                    <h3 class="text-2xl font-semibold mb-2">Program 2</h3>
                    <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white text-black p-6 rounded-lg">
                    <img src="{{ asset('asset/img/karate_siluet.png') }}" class="w-full rounded-lg mb-6" alt="News">
                    <h3 class="text-2xl font-semibold mb-2">Program 3</h3>
                    <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Latest News Section --}}
<section class="py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-10 text-white">Berita Terkini</h2>
        <div class="md:hidden px-6">
            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                    <div class="bg-white text-black p-6 rounded-lg">
                        <img src="{{ asset('asset/img/berita 1.jpeg') }}" class="w-full rounded-lg mb-6" alt="News">
                        <h3 class="text-2xl font-semibold mb-2">Judul Berita 1</h3>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="text-black">❮</a>
                        <a href="#slide2" class="text-black">❯</a>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <div class="bg-white text-black p-6 rounded-lg">
                        <img src="{{ asset('asset/img/berita 2.jpeg') }}" class="w-full rounded-lg mb-6" alt="News">
                        <h3 class="text-2xl font-semibold mb-2">Judul Berita 2</h3>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="text-black">❮</a>
                        <a href="#slide3" class="text-black">❯</a>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <div class="bg-white text-black p-6 rounded-lg">
                        <img src="{{ asset('asset/img/berita 3.jpeg') }}" class="w-full rounded-lg mb-6" alt="News">
                        <h3 class="text-2xl font-semibold mb-2">Judul Berita 3</h3>
                        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="text-black">❮</a>
                        <a href="#slide1" class="text-black">❯</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden md:block">
            <div class="grid grid-cols-1 md:grid-cols-3 px-10 md:px-0 gap-10">
                <div class="bg-white text-black p-6 rounded-lg">
                    <img src="{{ asset('asset/img/berita 1.jpeg') }}" class="w-full rounded-lg mb-6" alt="News">
                    <h3 class="text-2xl font-semibold mb-2">Judul Berita</h3>
                    <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white text-black p-6 rounded-lg">
                    <img src="{{ asset('asset/img/berita 2.jpeg') }}" class="w-full rounded-lg mb-6" alt="News">
                    <h3 class="text-2xl font-semibold mb-2">Judul Berita</h3>
                    <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white text-black p-6 rounded-lg">
                    <img src="{{ asset('asset/img/berita 3.jpeg') }}" class="w-full rounded-lg mb-6" alt="News">
                    <h3 class="text-2xl font-semibold mb-2">Judul Berita</h3>
                    <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection