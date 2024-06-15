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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Detail Pendaftar</h1>
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
        <form action="/admin/storemurid" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_murid" class="text-sm font-medium mb-3">Nama</label>
                    <input type="text" id="nama_murid" name="nama_murid"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="email" class="text-sm font-medium mb-3">Email</label>
                    <input type="email" id="email" name="email"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="password" class="text-sm font-medium mb-3">Password</label>
                    <input type="password" id="password" name="password"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="tanggal_lahir" class="text-sm font-medium mb-3">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="nomor_telepon_rumah" class="text-sm font-medium mb-3">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon_rumah" name="nomor_telepon_rumah"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="nama_orang_tua_wali" class="text-sm font-medium mb-3">Nama Orang Tua / Wali</label>
                    <input type="text" id="nama_orang_tua_wali" name="nama_orang_tua_wali"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="pekerjaan_orang_tua" class="text-sm font-medium mb-3">Pekerjaan Orang Tua / Wali</label>
                    <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="pendidikan_terakhir" class="text-sm font-medium mb-3">Pendidikan Terakhir</label>
                    <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="foto" class="text-sm font-medium mb-3">Foto</label>
                    <input type="file" id="foto" name="foto"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <input type="hidden" name="sabuk" value="putih">
                <input type="hidden" name="status" value="aktif">

            </div>

            <h3 class="font-semibold ml-6">Bagi Yang Pernah Mengikuti Karate:</h3>

            <div class="grid md:grid-cols-2 gap-6 p-6">

                <div>
                    <label for="kode_dojo" class="text-sm font-medium mb-3">Dojo</label>
                    <select id="kode_dojo" name="kode_dojo"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($dojo as $item)
                            <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="sabuk_terakhir" class="text-sm font-medium mb-3">Sabuk / Kyu Terakhir</label>
                    <select id="sabuk_terakhir" name="sabuk_terakhir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($sabuk as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="dojo_terakhir" class="text-sm font-medium mb-3">Dojo Terakhir</label>
                    <select id="dojo_terakhir" name="dojo_terakhir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($dojo as $item)
                            <option value="{{ $item->nama_dojo }}">{{ $item->nama_dojo }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="perguruan" class="text-sm font-medium mb-3">Asal Perguruan</label>
                    <select id="perguruan" name="perguruan"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($dojo as $item)
                            <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Tambah</button>
                <button class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm" type="reset">Hapus</button>
            </div>
        </form>

    </div>
    </div>
@endsection
