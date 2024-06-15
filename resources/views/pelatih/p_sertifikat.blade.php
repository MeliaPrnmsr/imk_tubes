@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto bg-cover bg-scroll" style="background-image: url('{{ asset('asset/img/siluet4.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-2xl font-bold mb-6">Sertifikat Saya</h1>
                <div class="flex flex-wrap items-center justify-between mb-6">
                    <div class="relative w-full sm:w-64 mb-4 sm:mb-0">
                        <input id="search" name="search" type="text" placeholder="Cari sertifikat"
                            class="text-xs md:text-xl border border-gray-300 rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-gray-700" />
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 25" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-red-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35m1.35-6.65a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <button
                            class="text-xs md:text-base flex items-center px-4 py-2 bg-white border border-gray-300 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h18m-10 6h10M4 15h16" />
                            </svg>
                            Semua
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4 ml-2 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($data as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="#" class="block hover:bg-gray-100">
                            <div class="bg-gray-300 h-48 flex items-center justify-center">
                                <span class="text-gray-500 text-lg">{{ $item->jenis_sertifikat }}</span>
                            </div>
                            <div class="p-4">
                                <h2 class="text-xl font-semibold hover:text-red-800">{{ $item->kode_sertifikat }}</h2>
                                <p class="text-gray-500">Tanggal: {{ $item->created_at }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
