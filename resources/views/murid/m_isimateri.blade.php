@extends('murid.m_layout')

@section('content')
<div class="bg-gray-100 p-4">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <div class="flex items-center justify-between">
            <button class="text-2xl font-bold" onclick="window.location.href='{{ route('murid.materi', ['users_id' => $murids->user_id]) }}'">&larr;</button>
            @php
            // Ambil materi dari salah satu item dalam grup
            $materiValue = null;
            $subMateriValue = null;
            foreach ($materis as $materi) {
                $materiValue = $materi->jenis_materi; 
                $subMateriValue = $materi->judul_sub_materi;
                break; // Keluar dari loop setelah mendapatkan nilai pertama
            }
            @endphp
            <h1 class="text-2xl lg:text-3xl font-bold flex-grow ml-4">{{ $materiValue }}</h1>
            <button class="ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 2L18 2L12 10L6 2Z" />
                </svg>
            </button>
        </div>

        <h2 class="text-lg lg:text-xl font-semibold mt-4">{{ $subMateriValue = $materi->judul_sub_materi }}</h2>
        <div class="carousel overflow-hidden relative" style="width: 100%; height: auto;">
            {{-- looping isi array materis --}}
            @foreach ($materis as $index => $materi)
            <div class="carousel-item" style="width: 100%; display: none;">
                <h3 class="text-md lg:text-lg font-semibold mt-2">{{ $index + 1 }}. {{ $materi->judul_materi }}</h3>
                <p class="mt-2 text-sm lg:text-base">
                    {{-- looping isi tabel submateri yang diambil dari relasi tabel materi ke tabel submateri --}}
                    @foreach($materi->submateri as $submateri)
                    {{ $submateri->isi_materi }}
                </p>
                <div class="mt-2" style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="{{ $submateri->link_youtube }}" frameborder="0" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        <div class="flex justify-between mt-6">
            <button id="prevButton" class="px-4 py-2 bg-blue-400 text-white rounded-full hover:bg-blue-500 focus:outline-none focus:ring-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextButton" class="px-4 py-2 bg-blue-400 text-white rounded-full hover:bg-blue-500 focus:outline-none focus:ring-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    document.getElementById('prevButton').addEventListener('click', () => {
        items[currentIndex].style.display = 'none';
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        items[currentIndex].style.display = 'block';
    });

    document.getElementById('nextButton').addEventListener('click', () => {
        items[currentIndex].style.display = 'none';
        currentIndex = (currentIndex + 1) % totalItems;
        items[currentIndex].style.display = 'block';
    });

    // Initialize the carousel by displaying the first item
    items[currentIndex].style.display = 'block';
</script>
@endsection
    