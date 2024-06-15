@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center">
        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Edit Materi</h1>
    </div>


    @if (session('success'))
        <div id="notif-login" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- form start --}}
    <form action="{{ route('edit.materi2', $materi->kode_materi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="judul_materi" class="block text-sm font-medium text-gray-700">Judul Materi</label>
            <input type="text" name="judul_materi" id="judul_materi" value="{{ $materi->judul_materi }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="judul_sub_materi" class="block text-sm font-medium text-gray-700">Judul Sub Materi</label>
            <input type="text" name="judul_sub_materi" id="judul_sub_materi" value="{{ $materi->judul_sub_materi }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="deskripsi_materi" class="block text-sm font-medium text-gray-700">Deskripsi Materi</label>
            <textarea name="deskripsi_materi" id="deskripsi_materi"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $materi->deskripsi_materi }}</textarea>
        </div>

        <div class="mb-4">
            <label for="jenis_materi" class="block text-sm font-medium text-gray-700">Jenis Materi</label>
            <select name="jenis_materi" id="jenis_materi"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @foreach (['kihon', 'kumite', 'kata'] as $jenis)
                    <option value="{{ $jenis }}" {{ $materi->jenis_materi === $jenis ? 'selected' : '' }}>
                        {{ ucfirst($jenis) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="sabuk" class="block text-sm font-medium text-gray-700">Sabuk</label>
            <select name="sabuk" id="sabuk"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @foreach (['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam'] as $sabuk)
                    <option value="{{ $sabuk }}" {{ $materi->sabuk === $sabuk ? 'selected' : '' }}>
                        {{ ucfirst($sabuk) }}</option>
                @endforeach
            </select>
        </div>

        <h2 class="font-bold text-xl md:text-2xl md:font-bold mb-4">Sub Materi</h2>
        @foreach ($sub_materi as $sub)
            <div class="mb-4">
                <label for="sub_materi_{{ $sub->id }}" class="block text-sm font-medium text-gray-700">Sub
                    Materi</label>
                <input type="text" name="sub_materi[{{ $sub->id }}][sub_materi]"
                    id="sub_materi_{{ $sub->id }}" value="{{ $sub->sub_materi }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="link_youtube_{{ $sub->id }}" class="block text-sm font-medium text-gray-700">Link
                    YouTube</label>
                <input type="text" name="sub_materi[{{ $sub->id }}][link_youtube]"
                    id="link_youtube_{{ $sub->id }}" value="{{ $sub->link_youtube }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="isi_materi_{{ $sub->id }}" class="block text-sm font-medium text-gray-700">Isi
                    Materi</label>
                <textarea name="sub_materi[{{ $sub->id }}][isi_materi]" id="isi_materi_{{ $sub->id }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $sub->isi_materi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="foto_{{ $sub->id }}" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="sub_materi[{{ $sub->id }}][foto]" id="foto_{{ $sub->id }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @if ($sub->foto)
                    <img src="{{ asset('storage/' . $sub->foto) }}" alt="Foto" class="mt-2 w-32 h-32 object-cover">
                @endif
            </div>
        @endforeach

        <div class="mb-4">
            <button type="submit" class="bg-red-700 p-2 rounded-lg text-white">Update</button>
        </div>
    </form>
    {{-- form end --}}
@endsection
