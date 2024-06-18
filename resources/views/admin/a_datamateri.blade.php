@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
        <a href="{{ route('admin.materi') }}" class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                    clip-rule="evenodd" />
            </svg>
        </a>

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Data Materi Sabuk {{ ucfirst($sabuk) }}</h1>
    </div>

    <div class="p-6">
        <div class="container mx-auto">
            @foreach ($materis as $jenis_materi => $subMateris)
                <div class="mb-8">
                    <h2 class="md:text-2xl font-bold mb-4">{{ $jenis_materi }}</h2>

                    <div class="space-y-4 mb-6">
                        @foreach ($subMateris as $judul_sub_materi => $items)
                            <div class="collapse collapse-arrow bg-white border border-black rounded-lg shadow p-2">
                                <input type="checkbox" id="collapse-{{ $loop->parent->index }}-{{ $loop->index }}" class="hidden">
                                <label for="collapse-{{ $loop->parent->index }}-{{ $loop->index }}" class="collapse-title md:text-xl font-semibold cursor-pointer"> {{ $judul_sub_materi }} </label>
                                <div class="collapse-content">
                                    <ul class="menu font-medium left-0">
                                        @foreach ($items as $materi)
                                            <li><a href="/admin/detailmateri/{{$materi->kode_materi}}" class="p-3">{{ $materi->judul_materi }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
