@extends('landingpage.layout')

@section('content')
<div class="bg-white py-4">
    <h1 class="h1 text-center text-3xl font-bold">Form Pendaftaran</h1>

    <div class="p-4 md:py-6 md:px-4">
        @if ($errors->any())
        <div class="alert alert-danger bg-red text-dark">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/pendaftaran" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_murid" class="text-sm font-medium mb-3">Nama</label>
                    <input type="text" id="nama_murid" name="nama_murid"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="email" class="text-sm font-medium mb-3">Email</label>
                    <input type="email" id="email" name="email"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="tanggal_lahir" class="text-sm font-medium mb-3">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="nomor_telepon_rumah" class="text-sm font-medium mb-3">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon_rumah" name="nomor_telepon_rumah"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="nama_orang_tua_wali" class="text-sm font-medium mb-3">Nama Orang Tua / Wali</label>
                    <input type="text" id="nama_orang_tua_wali" name="nama_orang_tua_wali"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="pekerjaan_orang_tua" class="text-sm font-medium mb-3">Pekerjaan Orang Tua / Wali</label>
                    <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="pendidikan_terakhir" class="text-sm font-medium mb-3">Pendidikan Terakhir</label>
                    <input type="text" id="pendidikan_terakhir" name="Pendidikan_terakhir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="foto" class="text-sm font-medium mb-3">Foto</label>
                    <input type="file" id="foto" name="foto"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>


            </div>

            <h3 class="font-semibold ml-6">Bagi Yang Pernah Mengikuti Karate:</h3>

            <div class="grid md:grid-cols-2 gap-6 p-6">

                <div>
                    <label for="dojo_terakhir" class="text-sm font-medium mb-3">Asal Dojo</label>
                    <input type="text" id="dojo_terakhir" name="dojo_terakhir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="sabuk_terakhir" class="text-sm font-medium mb-3">Sabuk / Kyu Terakhir</label>
                    <select id="sabuk_terakhir" name="sabuk_terakhir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="belum_pernah">Tidak Pernah</option>
                        <option value="putih">Putih</option>
                        <option value="kuning">Kuning</option>
                        <option value="hijau">Hijau</option>
                        <option value="biru">Biru</option>
                        <option value="coklat">Coklat</option>
                        <option value="hitam">Hitam</option>
                    </select>
                </div>

                <div>
                    <label for="perguruan" class="text-sm font-medium mb-3">Asal Perguruan</label>
                    <input type="text" id="perguruan" name="perguruan"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Daftar</button>
                <button class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm" type="reset">Batal</button>
            </div>
        </form>
    </div>

</div>
@endsection