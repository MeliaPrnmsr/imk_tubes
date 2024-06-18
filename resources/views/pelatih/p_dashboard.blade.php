@extends('pelatih.p_layout')

@section('content')

<div class="flex items-center border p-4 border-black mt-4 rounded-lg shadow-lg">
    <!-- Left Column - Text -->
    <div class="p-4 ">
        <div class="text-align">
            <h2 class="text-lg text-black md:text-2xl font-bold">Halo, Pelatih {{ auth()->user()->name }} !</h2>
            <p class="text-base text-black">Semangat melatih dan membimbing para murid dalam perjalanan karate mereka. Osu!</p>
        </div>
    </div>
    <!-- Right Column - Image -->
    <div class="hidden md:block">
        <img src="{{ asset('asset/img/welcome.jpg') }}" alt="Gambar Murid" class="w-80 flex justify-end">
    </div>
</div>


<br>

<!-- Recently Accesss Course -->
<div class="text-black py-2 mt-4">
    <h2 class="text-2xl font-bold mb-4 text-left">Baru Saja Diakses</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Course 1 -->
        <div class="bg-gray-200 rounded-lg shadow-md flex overflow-hidden h-48 md:h-40">
            <div class="w-2/5 md:w-1/2 order-2 md:order-none">
                <img src="{{asset('asset/img/sabuk putih.png')}}" alt="Course 1" class="">
            </div>
            <div class="w-3/5 md:w-1/2 p-4 flex flex-col justify-between order-1 md:order-none">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Jenis Materi 1</h3>
                    <p class="text-xs gray-800 mb-4">This is a brief description of course. It offers advanced insights
                    </p>
                </div>
                <a href="course1.html"
                    class="inline-block bg-red-700 text-white py-1 px-4 rounded text-center hover:bg-red-800">Go to
                    Course</a>
            </div>
        </div>
        <!-- Course 2 -->
        <div class="bg-gray-200 rounded-lg shadow-md flex overflow-hidden h-48 md:h-40">
            <div class="w-2/5 md:w-1/2 order-2 md:order-none">
                <img src="{{asset('asset/img/sabuk putih.png')}}" alt="Course 1" class="">
            </div>
            <div class="w-3/5 md:w-1/2 p-4 flex flex-col justify-between order-1 md:order-none">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Course Title 1</h3>
                    <p class="text-xs gray-800 mb-4">This is a brief description of course. It offers advanced insights
                    </p>
                </div>
                <a href="course1.html"
                    class="inline-block bg-red-700 text-white py-1 px-4 rounded text-center hover:bg-red-800">Go to
                    Course</a>
            </div>
        </div>
    </div>
</div>

<br>
<div class="mt-4">
    <header class="bg-white text-black p-5">
        <h1 class="text-2xl font-bold text-left border-b-4 border-red-700 pb-2">Jadwal Saya Hari Ini</h1>
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-1 gap-1 mt-0">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left  dark:">
                <thead class="text-xs  uppercase bg-gray-50 dark:bg-red-700 dark:">
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