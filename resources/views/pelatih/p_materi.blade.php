{{-- @extends('pelatih.p_layout')

@section('content')
<div class="flex justify-between ">
    <h1 class="text-xl text-red-900 font-bold">Materi</h1>
    <p>Tanggal</p>
</div>

<div>
    <img src="{{ asset('asset/img/logo_perguruan.png') }}" alt="" class="w-1/4 object-center">
</div>
@endsection --}}

@extends('murid.m_layout')

@section('content')
    <div class="bg-gray-100 p-6">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="mb-4">
                <h1 class="text-2xl font-bold">Materi</h1>
                <p class="text-gray-500">Sabuk Putih</p>
            </div>

            <!-- Search Bar and Filter Button -->
            <div class="flex items-center mb-6">
                <form action="{{ route('materiPelatih') }}">
                    <div class="relative w-full max-w-xs">
                        <input type="text" placeholder="Cari Jenis Materi" name="materi" value="{{ request()->get('materi') }}"
                            class="w-full border rounded-lg py-2 px-4 pl-10 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M10 2a8 8 0 016.32 12.905l4.387 4.386a1 1 0 01-1.414 1.415l-4.386-4.387A8 8 0 1110 2zm0 2a6 6 0 100 12A6 6 0 0010 4z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <button type="submit">Filter</button>
                </form>
            </div>
            <!-- Kumite Section -->
            @foreach ($data as $item)
                <h2 class="text-xl font-bold mb-4">{{ $item->jenis_materi }}</h2>
                <div class="space-y-4">
                    @foreach ($item->subMateri as $item)
                        <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
                            <div>
                                <a href="#"
                                    class="font-semibold text-lg text-black hover:underline">{{ $item->sub_materi }}</a>
                                <p class="text-gray-600">{{ $item->isi_materi }}</p>
                            </div>
                            <button class="text-gray-600 hover:text-black">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
