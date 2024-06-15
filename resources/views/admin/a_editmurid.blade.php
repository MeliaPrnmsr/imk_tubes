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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Edit Murid</h1>
    </div>

    @if (session('success'))
        <div id="notif-login" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-full">
        <form action="{{ route('edit.murid2', ['id' => $murid->kode_murid]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_murid" class="text-sm font-medium mb-3">Nama Murid</label>
                    <input type="text" id="nama_murid" name="nama_murid"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $murid->nama_murid }}" required>
                </div>
        
                <div>
                    <label for="tgl_lahir" class="text-sm font-medium mb-3">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tanggal_lahir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $murid->tanggal_lahir }}" required>
                </div>
        
                <div>
                    <label for="sabuk" class="text-sm font-medium mb-3">Sabuk</label>
                    <select id="sabuk" name="sabuk"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($sabuk as $item)
                            <option value="{{ $item }}" {{ $murid->sabuk == $item ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div>
                    <label for="dojo" class="text-sm font-medium mb-3">Dojo</label>
                    <select id="dojo" name="kode_dojo"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($dojo as $d)
                            <option value="{{ $d->kode_dojo }}" {{ $murid->kode_dojo == $d->kode_dojo ? 'selected' : '' }}>{{ $d->nama_dojo }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div>
                    <label for="no_telp" class="text-sm font-medium mb-3">Nomor Telepon</label>
                    <input type="text" id="no_telp" name="nomor_telepon_rumah"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $murid->nomor_telepon_rumah }}" required>
                </div>
        
                <div>
                    <label for="status" class="text-sm font-medium mb-3">Status</label>
                    <select id="status" name="status"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="aktif" {{ $murid->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="tidak aktif" {{ $murid->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>
        
                <div>
                    <label for="alamat" class="text-sm font-medium mb-3">Nama Wali</label>
                    <textarea rows="3" id="alamat" name="nama_orang_tua_wali"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>{{ $murid->nama_orang_tua_wali }}</textarea>
                </div>
            </div>
        
            <div class="flex justify-center">
                <button type="submit" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Update</button>
                <a href="{{ route('edit.murid', ['id' => $murid->kode_murid]) }}" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm text-center">Batal</a>
            </div>
        </form>
        
    </div>
    </div>
@endsection
