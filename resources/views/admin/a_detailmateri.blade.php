@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
        <button class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <h1 class="text-2xl md:text-3xl font-bold flex-grow">{{ $materi->jenis_materi }}</h1>
    </div>


    <div class=" bg-white shadow-md rounded-lg p-6">
        <h2 class="text-lg lg:text-xl font-semibold mt-4">{{ $materi->judul_sub_materi }}</h2>
        <h3 class="text-md lg:text-lg font-semibold mt-2">{{ $materi->judul_materi }}</h3>
        <p class="mt-2 text-sm lg:text-base">
            {{ $materi->deskripsi_materi }}
        </p>
        <ul class="list-disc list-inside mt-2 text-sm lg:text-base">
            @foreach ($materi->subMateri as $item)
                <li class="mt-2">
                    <strong>{{ $item->sub_materi }}</strong>
                    <p class="ml-4">{{ $item->isi_materi }}</p>
                    <div class="flex justify-center mt-4">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Heisoku-dachi" class="mr-4">
                    </div>
                    <div class="flex justify-center mt-4">
                        <link rel="stylesheet" href="{{ $item->link_youtube }}" alt="{{ $item->link_youtube }}">
                    </div>

                </li>
            @endforeach
        </ul>

    </div>
    <div class="flex justify-center mt-6">
        <button class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">
            <a href="{{ route('edit.materi', ['id' => $materi->kode_materi]) }}" class="text-white no-underline">Edit</a>
        </button>
        <button class="p-2 md:w-1/5 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2">
            Hapus
        </button>
    </div>
@endsection
