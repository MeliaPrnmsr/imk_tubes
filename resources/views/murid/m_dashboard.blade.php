@extends('murid.m_layout')

@section('content')

<!-- Top bar -->

<div class="flex items-center border p-4 border-black mt-4 rounded-lg shadow-lg">
    <!-- Left Column - Text -->
    <div class="p-4 ">
        <div class="text-align">
            <h2 class="text-lg text-black md:text-2xl font-bold">Halo, {{ auth()->user()->name }} !</h2>
            <p class="text-base text-black">Temukan materi pelajaran, jadwal latihan, dan evaluasi untuk mendukung
                perjalanan
                Anda dalam karate. Osu!</p>
        </div>
    </div>
    <!-- Right Column - Image -->
    <div class="hidden md:block">
        <img src="{{ asset('asset/img/welcome.jpg') }}" alt="Gambar Murid" class="w-80 flex justify-end">
    </div>
</div>

<!-- Progress bar -->
<div class="text-black">
    <div class="bg-white py-3">
        <div class="text-2xl font-bold px-0 py-2">Tingkatan Sabuk Saat Ini</div>
        {{-- Switch Case untuk membuat warna sabuk di tampilan --}}
        <div class="bg-gray-300  p-4 h-10 flex items-center shadow-2xl rounded-lg">
            @if ( auth()->user()->murid )
            @switch(auth()->user()->murid->sabuk)
            @case('kuning')
            <div class="bg-yellow-300 h-5 w-full"></div>
            @break

            @case('hijau')
            <div class="bg-green-900 h-5 w-full"></div>
            @break

            @case('biru')
            <div class="bg-blue-900 h-5 w-full"></div>
            @break

            @case('coklat')
            <div class="bg-orange-900 h-5 w-full"></div>
            @break

            @case('hitam')
            <div class="bg-black h-5 w-full"></div>
            @break

            @default
            <div class="bg-white h-5 w-full"></div>
            @endswitch
            @else
            <div class="bg-white h-5 w-full"></div>
            @endif
        </div>
    </div>
</div>

<div class="text-black py-2">
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

<!--jadwal-->
<div class="text-black py-2">
    <h2 class="text-2xl font-bold mb-4 text-left">Jadwal Saya Hari Ini</h2>
</div>

<div class="overflow-x-auto relative shadow-md rounded-md bg-gray-200">
    <table class="w-full text-sm text-left text-black">
        <thead class="uppercase">
            <tr>
                <th scope="col" class="py-3 px-6">Hari/Tanggal</th>
                <th scope="col" class="py-3 px-6">Waktu</th>
                <th scope="col" class="py-3 px-6">Tempat</th>
            </tr>
        </thead>
        <tbody>
            {{-- Mengecek dari jadwal hari ini, jika kosong maka akan menampilkan tidak ada jadwal --}}
            @if ($jadwals->isEmpty())
            <tr class="bg-white border-b shadow-md ">
                <td colspan="3" class="py-4 px-6 text-center">Tidak ada jadwal untuk hari ini.</td>
            </tr>
            @else
            {{-- kondisi jika jadwal ada --}}
            @foreach ($jadwals as $jadwal)
            <tr class="bg-white border-b shadow-md">
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

@endsection