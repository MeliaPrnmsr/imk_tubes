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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Detail Informasi</h1>
    </div>

    <div class="w-full">
        <form action="">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="judul" class=" text-sm font-medium mb-3">Judul</label>
                    <input readonly type="text" id="judul"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        value="{{ $informasi->nama_informasi }}">
                </div>

                <div>
                    <label for="dokumen" class=" text-sm font-medium mb-3">Dokumen</label>
                    <input readonly type="file" id="dokumen"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                </div>

                <div>
                    <label for="deskripsi" class=" text-sm font-medium mb-3">Deskripsi</label>
                    <textarea readonly rows="3" id="deskripsi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">{{ $informasi->deskripsi_informasi }}</textarea>
                </div>

                <div>
                    <label for="tanggal" class=" text-sm font-medium mb-3">Tanggal Informasi</label>
                    <input readonly type="date" id="tanggal"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        value="{{ $informasi->tanggal_informasi }}">
                </div>


            </div>

            <div class="flex justify-center">
                <button class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">
                    <a href="{{ route('edit.informasi', ['id' => $informasi->kode_informasi]) }}"
                        class="text-white no-underline">Edit</a>
                </button>
                <button class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Hapus</button>
            </div>
        </form>
    </div>
    </div>
@endsection
