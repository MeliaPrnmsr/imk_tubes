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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Data Materi</h1>
    </div>

    <div class="p-6">
        <div class="container mx-auto">
            <!-- Header -->

            <!-- Search Bar and Filter Button -->
            <div class="md:flex items-center mb-8 justify-between">
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-3 ">
                        <path class="text-green-600" fill-rule="evenodd"
                            d="M3 2.25a.75.75 0 0 1 .75.75v.54l1.838-.46a9.75 9.75 0 0 1 6.725.738l.108.054A8.25 8.25 0 0 0 18 4.524l3.11-.732a.75.75 0 0 1 .917.81 47.784 47.784 0 0 0 .005 10.337.75.75 0 0 1-.574.812l-3.114.733a9.75 9.75 0 0 1-6.594-.77l-.108-.054a8.25 8.25 0 0 0-5.69-.625l-2.202.55V21a.75.75 0 0 1-1.5 0V3A.75.75 0 0 1 3 2.25Z"
                            clip-rule="evenodd" />
                    </svg>

                    <p class=" font-semibold text-2xl">Sabuk Hijau</p>
                </div>
                {{-- search bar --}}
                <div class="relative">
                    <input type="text" placeholder="Cari Materi"
                        class="w-full border border-black rounded-lg py-2 px-4 pl-10 focus:ring-blue-500 focus:border-blue-500">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M10 2a8 8 0 016.32 12.905l4.387 4.386a1 1 0 01-1.414 1.415l-4.386-4.387A8 8 0 1110 2zm0 2a6 6 0 100 12A6 6 0 0010 4z">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>

            <!-- Kihon Section -->

            @foreach ($materis as $jenis_materi => $subMateris)
                <div class="mb-8">
                    <h2 class="md:text-2xl font-bold mb-4">{{ $jenis_materi }}</h2> {{-- jenis materi --}}

                    <div class="space-y-4 mb-6">

                        {{-- sub materi --}}
                        <div class="collapse collapse-arrow bg-white border border-black rounded-lg shadow p-2">
                            @foreach ($subMateris as $judul_sub_materi => $items)
                                <input type="radio" name="my-accordion-{{ $loop->parent->index }}" />
                                <div class="collapse-title md:text-xl font-semibold"> {{ $judul_sub_materi }}
                                    {{-- judul sub materi --}} </div>
                                <div class="collapse-content">
                                    <ul class="menu font-medium left-0">
                                        @foreach ($items as $materi)
                                            <li><a href="/admin/detailmateri/{{$materi->kode_materi}}" class="p-3">{{ $materi->judul_materi }}</a></li>
                                            {{-- judul materi --}}
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
