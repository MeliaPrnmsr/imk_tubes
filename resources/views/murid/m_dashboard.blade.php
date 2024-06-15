@extends('murid.m_layout')

@section('content')

    <!-- Top bar -->

    <div class="container mx-auto flex h-60 items-center">
        <!-- Left Column - Text -->
        <div class="w-2/3 p-8 bg-gray-200">
            <div class="text-align">
                <h2 class="md:text-base text-2xl font-bold">Selamat Datang, {{ auth()->user()->name }} </h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        <!-- Right Column - Image -->
        <div class="w-1/3 bg-gray-200">
            <img src="{{ asset('asset/img/welcome.jpg') }}" alt="Gambar Murid" class="w-full">
        </div>
    </div>

    <!-- Progress bar -->
    <div>
        <div class="container mx-auto bg-white px-3 py-3">
            <div class="text-2xl font-bold text-gray-700 px-0 py-2">Tingkatan Sabuk Saat Ini</div>
            {{-- Switch Case untuk membuat warna sabuk di tampilan --}}
            @if ( auth()->user()->murid )
                @switch(auth()->user()->murid->sabuk)
                    @case('kuning')
                        <div class="bg-yellow-300 h-2.5 rounded-full" style="width: 100%"></div>
                    @break

                    @case('hijau')
                        <div class="bg-green-900 h-2.5 rounded-full" style="width: 100%"></div>
                    @break

                    @case('biru')
                        <div class="bg-blue-900 h-2.5 rounded-full" style="width: 100%"></div>
                    @break

                    @case('coklat')
                        <div class="bg-orange-900 h-2.5 rounded-full" style="width: 100%"></div>
                    @break

                    @case('hitam')
                        <div class="bg-black h-2.5 rounded-full" style="width: 100%"></div>
                    @break

                    @default
                        <div class="bg-gray-200 h-2.5 rounded-full" style="width: 100%"></div>
                @endswitch
            @else
                <div class="bg-gray-200 h-2.5 rounded-full" style="width: 100%"></div>
            @endif
        </div>
    </div>

    <div class="container mx-auto bg-white px-3 py-2">
        <h2 class="text-2xl font-bold mb-4 text-left">Recently Accessed Courses</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Course 1 -->
            <div class="bg-gray-200 rounded-lg shadow-md flex overflow-hidden h-48 md:h-40">
                <div class="w-2/5 md:w-1/2 h-full order-2 md:order-none">
                    <img src="course1.jpg" alt="Course 1" class="w-full h-full object-cover">
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
            <!-- Course 2 -->
            <div class="bg-gray-200 rounded-lg shadow-md flex overflow-hidden h-48 md:h-40">
                <div class="w-2/5 md:w-1/2 h-full order-2 md:order-none">
                    <img src="course1.jpg" alt="Course 1" class="w-full h-full object-cover">
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
    <div class="container mx-auto bg-white px-3 py-2">
        <h2 class="text-2xl font-bold mb-4 text-left">Jadwal Saya Hari Ini</h2>
    </div>
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

@endsection
