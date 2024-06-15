@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
        <button class="flex justify-start" onclick="window.history.back();">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Tambah Informasi</h1>
    </div>

    @if (session('success'))
        <div id="notif-login" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-full">
        <form action="{{ route('informasi.input') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_informasi" class="text-sm font-medium mb-3">Judul</label>
                    <input type="text" id="nama_informasi" name="nama_informasi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Judul Informasi">
                </div>

                <div>
                    <label for="dokumen" class="text-sm font-medium mb-3">Dokumen</label>
                    <input type="file" id="dokumen" name="dokumen"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="deskripsi_informasi" class="text-sm font-medium mb-3">Deskripsi</label>
                    <textarea rows="3" id="deskripsi_informasi" name="deskripsi_informasi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Deskripsi Informasi"></textarea>
                </div>

                <div>
                    <label for="tanggal_informasi" class="text-sm font-medium mb-3">Tanggal Informasi</label>
                    <input type="date" id="tanggal_informasi" name="tanggal_informasi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Tambah</button>
                <button type="reset" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button>
            </div>
        </form>
    </div>
@endsection
