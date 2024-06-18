@extends('admin.a_layout')

@section('content')
<div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
    <button class="flex justify-start" onclick="history.back();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
            <path fill-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <h1 class="font-bold text-xl md:text-3xl md:font-bold">Detail Pelatih</h1>
</div>

<div class="w-full">
    <form action="">

        <div class="p-6">
            <img src="{{ asset('asset/img/' . $pelatih->foto) }}" class="border border-black w-1/5 h-auto" alt="Foto Pelatih">
        </div>

        <div class="grid md:grid-cols-2 gap-6 p-6">

            <div>
                <label for="nama_pelatih" class=" text-sm font-medium mb-3">Nama pelatih</label>
                <input readonly type="text" id="nama_pelatih"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                    value="{{ $pelatih->nama_pelatih }}">
            </div>

            <div>
                <label for="tgl_lahir" class=" text-sm font-medium mb-3">Tanggal Lahir</label>
                <input readonly type="date" id="tgl_lahir"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                    value="{{ $pelatih->tanggal_lahir }}">
            </div>

            <div>
                <label for="no_telp" class=" text-sm font-medium mb-3">Nomor Telepon</label>
                <input readonly type="number" id="no_telp"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                    value="{{ $pelatih->nomor_telepon }}">
            </div>

            <div>
                <label for="dan" class=" text-sm font-medium mb-3">Dan</label>
                <input readonly type="text" id="dan"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                    value="{{ $pelatih->dan }}">
            </div>

            <div>
                <label for="dojo" class=" text-sm font-medium mb-3">Dojo</label>
                @foreach ($pelatih->dojo as $value)
                <input readonly type="text" id="dojo"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                    value="{{ $value->nama_dojo }} ">
                @endforeach
            </div>

            <div>
                <label for="pengcab" class=" text-sm font-medium mb-3">Pengcab</label>
                <input readonly type="text" id="pengcab"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                    value="{{ $pelatih->pengcab }}">
            </div>

            <div>
                <label for="alamat" class=" text-sm font-medium mb-3">Alamat</label>
                <textarea readonly rows="3" id="alamat"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "> {{ $pelatih->Alamat }}</textarea>
            </div>

            <div>
                <label for="status" class=" text-sm font-medium mb-3">Status</label>
                <p class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-5 text-green-500 mr-2">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    {{ $pelatih->status }}
                </p>
            </div>

        </div>

        <div class="flex justify-center">
            <a href="{{ route('edit.pelatih', ['id' => $pelatih->kode_pelatih]) }}"  class="text-center bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5">Perbarui Data</a>
            <a href="{{ route('admin.datapelatih')}}"  class="text-center bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5">Tutup</a>
        </div>
    </form>
</div>
</div>
@endsection