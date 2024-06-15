@extends('admin.a_layout')

@section('content')

{{-- welcoming word start --}}

<div class="mt-2 mb-4 grid grid-cols-2 text-black">
    <h1 class="font-bold text-left text-base md:text-3xl md:font-bold">Selamat Datang, Admin</h1>
    <p class="text-right font-semibold text-sm md:text-lg" id="device-time"></p>
</div>
{{-- welcoming word start --}}

<div class="border-2 border-black shadow-xl rounded-lg p-4 text-black">
    <br>
    {{-- cardboard start --}}
    <h1 class="text-center m-2 font-bold md:text-2xl">Data Karate INSHOKAI</h1>
    
    <div class="mt-3 md:mt-8 md:mb-8 grid grid-cols-2  md:grid-cols-4 gap-6">
        {{-- murid --}}
        <div class="rounded-xl p-4 text-center  bg-red-700">
            <div class="flex justify-between">
                <div class="bg-white border p-1 md:p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>

                <a href="/admin/tambahmurid">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 h-4 w-4 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a>

            </div>
            <h1 class="font-bold m-3 tracking-wider text-l md:text-3xl text-white">{{ $muridCount }}</h1>
            <p class="border-t-2 mt-2 text-sm md:mt-3 p-2 md:text-base text-white">Murid</p>
        </div>

        {{-- guru --}}
        <div class="rounded-xl p-4 text-center  bg-red-700">
            <div class="flex justify-between">
                <div class="bg-white border p-1 md:p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </div>

                <a href="/admin/tambahpelatih">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 h-4 w-4 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a>

            </div>
            <h1 class="font-bold m-3 tracking-wider text-l md:text-3xl text-white">{{ $pelatihCount }}</h1>
            <p class="border-t-2 mt-2 text-sm md:mt-3 p-2 md:text-base text-white">Pelatih</p>
        </div>

        {{-- dojo --}}
        <div class="rounded-xl p-4 text-center  bg-red-700">
            <div class="flex justify-between">
                <div class="bg-white border p-1 md:p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </div>


                <a href="/admin/tambahdojo">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 h-4 w-4 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a>

            </div>
            <h1 class="font-bold m-3 tracking-wider text-l md:text-3xl text-white">{{ $dojoCount }}</h1>
            <p class="border-t-2 mt-2 text-sm md:mt-3 p-2 md:text-base text-white">Dojo</p>
        </div>

        {{-- materi --}}
        <div class="rounded-xl p-4 text-center  bg-red-700">
            <div class="flex justify-between">
                <div class="bg-white border p-1 md:p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
                    </svg>
                </div>


                <a href="/admin/tambahmateri">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="md:w-6 md:h-6 h-4 w-4 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a>

            </div>
            <h1 class="font-bold m-3 tracking-wider text-l md:text-3xl text-white">{{ $materiCount }}</h1>
            <p class="border-t-2 mt-2 text-sm md:mt-3 p-2 md:text-base text-white">Materi</p>
        </div>
    </div>
    {{-- cardboard end --}}
</div>


{{-- upcoming event & pendaftaran start --}}
<div class="grid md:grid-cols-3 gap-4 mt-8">
    {{-- upcoming event start --}}
    <div class="md:col-span-2 rounded-lg p-1 md:p-4  bg-gray-200 shadow-xl">
        <h3 class="font-bold text-base md:text-xl p-2">Event Mendatang</h3>
        <ul class="m-2">
            <li class="drop-shadow-md">
                <div class="border p-2 bg-white my-3 rounded-lg">
                    <p class="font-semibold">Nama Event</p>
                    <p class="font-light text-sm">Jadwal Event</p>
                </div>
            </li>
            <li class="drop-shadow-md">
                <div class="border p-2 bg-white my-3 rounded-lg">
                    <p class="font-semibsemiold">Nama Event</p>
                    <p class="font-light text-sm">Jadwal Event</p>
                </div>
            </li>
        </ul>
    </div>
    {{-- upcoming event end --}}

    {{-- pendaftaran event start --}}
    <div class="border-2 rounded-lg p-1 md:p-4 mt-4 md:mt-0  bg-gray-200 shadow-xl">
        <h3 class="font-bold text-base md:text-xl p-2">Form Pendaftaran</h3>
        <ul class="m-2">
            <li class="drop-shadow-md">
                <div class="border p-2 bg-white my-3 rounded-lg">
                    <p class="font-semibold">Nama Event</p>
                    <p class="font-light text-sm">Tanggal</p>
                </div>
            </li>
            <li class="drop-shadow-md">
                <div class="border p-2 bg-white my-3 rounded-lg">
                    <p class="font-semibold">Nama Event</p>
                    <p class="font-light text-sm">Tanggal</p>
                </div>
            </li>
        </ul>
    </div>
    {{-- pendaftaran event end --}}
</div>
{{-- upcoming event & pendaftaran end --}}


@endsection