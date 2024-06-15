@extends('pelatih.p_layout')

@section('content')

<div class="max-w-5xl mx-auto bg-gray-300 p-4 rounded-lg shadow-lg flex items-start space-x-20 ">
    <!-- Konten Utama -->
    <div class="w-2/3">
        <h2 class="md:text-2xl text-sm font-semibold mb-4">SELAMAT DATANG, {{ auth()->user()->name }}</h2>
        <p class="text-gray-700 mb-4 text-base ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </p>
    </div>
    <!-- Gambar di Sisi Kanan -->
    <div class="flex-shrink m-4">
        <img src="{{ asset('asset/img/PELATIH.png') }}" alt="Pelatih"
            class="md:h-40 md:w-autow-4 h-4 md object-cover rounded-lg">
    </div>
</div>


<br>

<!-- Recently Accesss Course -->
<h1 class="text-3xl font-bold ml-4">Recently Access Course</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-12 mt-5">
    <div class="bg-gray-200 p-2 rounded-3xl shadow-md flex items-start space-x-4 ">
        <div class="flex-grow">
            <div class="bg-red-700 p-4 rounded-2xl shadow-md text-white">
                <h2 class="text-xl font-bold mb-2">Kihon (Gerakan Dasar)</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    Praesent libero.</p>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex-shrink-0 mt-6">
                <img src="{{ asset('asset/img/kihon.png') }}" alt="Pelatih"
                    class="h-20 w-full sm:w-80 object-cover rounded-lg">
            </div>
            <div class="mt-2">
                <a href="/pelatih/materi" class="text-red-700 hover:underline">Masuk</a>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 p-2 rounded-3xl shadow-md flex items-start space-x-4 ">
        <div class="flex-grow">
            <div class="bg-red-700 p-4 rounded-2xl shadow-md text-white">
                <h2 class="text-xl font-bold mb-2">Kihon (Gerakan Dasar)</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                    Praesent libero.</p>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex-shrink-0 mt-6">
                <img src="{{ asset('asset/img/kihon.png') }}" alt="Pelatih"
                    class="h-20 w-full sm:w-80 object-cover rounded-lg">
            </div>
            <div class="mt-2">
                <a href="#" class="text-red-700 hover:underline">Masuk</a>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container mx-auto">
    <header class="bg-white text-black p-5">
        <h1 class="text-3xl font-bold text-left border-b-4 border-red-700 pb-2">Jadwal Saya Hari Ini</h1>
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-1 gap-1 mt-0">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-red-700 dark:text-gray-100">
                    <tr>
                        <th scope="col" class="py-3 px-6">Hari/Tanggal</th>
                        <th scope="col" class="py-3 px-6">Waktu</th>
                        <th scope="col" class="py-3 px-6">Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Mengecek dari jadwal hari ini, jika kosong maka akan menampilkan tidak ada jadwal --}}
                    @if ($jadwals->isEmpty())
                        <tr class="bg-white border-b dark:bg-gray-300 shadow-md dark:text-black">
                            <td colspan="3" class="py-4 px-6 text-center">Tidak ada jadwal untuk hari ini.</td>
                        </tr>
                    @else
                        {{-- kondisi jika jadwal ada --}}
                        @foreach ($jadwals as $jadwal)
                            <tr class="bg-white border-b dark:bg-gray-300 shadow-md dark:text-black">
                                <td class="py-4 px-6">
                                    {{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, d M Y') }}</td>
                                <td class="py-4 px-6">{{ $jadwal->jam_mulai }} – {{ $jadwal->jam_selesai }}</td>
                                <td class="py-4 px-6">{{ $jadwal->dojo->nama_dojo }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        
    </div>



</div>

@endsection