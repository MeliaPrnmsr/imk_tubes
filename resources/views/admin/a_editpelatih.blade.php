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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Edit Pelatih</h1>
    </div>

    @if (session('success'))
        <div id="notif-login" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-full">
        <form action="{{ route('edit.pelatih2', $pelatih->kode_pelatih) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_pelatih" class=" text-sm font-medium mb-3">Nama pelatih</label>
                    <input type="text" id="nama_pelatih" name="nama_pelatih"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $pelatih->nama_pelatih }}" required>
                </div>

                <div>
                    <label for="tgl_lahir" class=" text-sm font-medium mb-3">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tanggal_lahir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $pelatih->tanggal_lahir }}" required>
                </div>

                <div>
                    <label for="no_telp" class=" text-sm font-medium mb-3">Nomor Telepon</label>
                    <input type="number" id="no_telp" name="nomor_telepon"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $pelatih->nomor_telepon }}" required>
                </div>

                <div>
                    <label for="dan" class=" text-sm font-medium mb-3">Dan</label>
                    <select id="dan" name="dan"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="Dan 1" {{ $pelatih->dan == 'Dan 1' ? 'selected' : '' }}>Dan 1</option>
                        <option value="Dan 2" {{ $pelatih->dan == 'Dan 2' ? 'selected' : '' }}>Dan 2</option>
                        <option value="Dan 3" {{ $pelatih->dan == 'Dan 3' ? 'selected' : '' }}>Dan 3</option>
                    </select>
                </div>

                <div>
                    <label for="pengcab" class=" text-sm font-medium mb-3">Pengcab</label>
                    <select id="pengcab" name="pengcab"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="Pengcab A" {{ $pelatih->pengcab == 'Pengcab A' ? 'selected' : '' }}>Pengcab A
                        </option>
                        <option value="Pengcab B" {{ $pelatih->pengcab == 'Pengcab B' ? 'selected' : '' }}>Pengcab B
                        </option>
                        <option value="Pengcab C" {{ $pelatih->pengcab == 'Pengcab C' ? 'selected' : '' }}>Pengcab C
                        </option>
                        <option value="Pengcab D" {{ $pelatih->pengcab == 'Pengcab D' ? 'selected' : '' }}>Pengcab D
                        </option>
                    </select>
                </div>

                <div>
                    <label for="alamat" class=" text-sm font-medium mb-3">Alamat</label>
                    <textarea rows="3" id="alamat" name="alamat"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">{{ $pelatih->alamat }}</textarea>
                </div>

                <div>
                    <label for="Status" class=" text-sm font-medium mb-3">Status</label>
                    <select id="Status" name="status"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="aktif" {{ $pelatih->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="tidak aktif" {{ $pelatih->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif
                        </option>
                    </select>
                </div>

                <div>
                    <label for="dojos" class=" text-sm font-medium mb-3">Dojo</label>
                    <ul>
                        @foreach ($dojos as $dojo)
                            <li>
                                <input type="checkbox" id="dojo_{{ $dojo->kode_dojo }}" name="dojos[]"
                                    value="{{ $dojo->kode_dojo }}"
                                    {{ in_array($dojo->kode_dojo, $associatedDojos) ? 'checked' : '' }}>
                                <label for="dojo_{{ $dojo->kode_dojo }}">{{ $dojo->nama_dojo }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="flex justify-center">
                <button class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Simpan</button>
                <button class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button>
            </div>
        </form>
    </div>
@endsection
