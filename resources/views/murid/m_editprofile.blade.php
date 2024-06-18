@extends('murid.m_layout')


@section('content')
<h1 class="text-4xl text-center text-black font-bold mb-8 mt-4">Profil Saya</h1>

<div class="bg-cover bg-center">
    <div class="p-6 rounded-lg shadow-lg">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <div class="flex justify-center">
                    @if ($murids->foto == null)
                    <img src="{{ asset('asset/img/pp.jpg') }}" class="border border-black w-3/5 h-auto"
                        alt="Foto Murid">
                    @else
                    <img src="{{ asset('asset/img/' . $murids->foto) }}" class="border border-black w-3/5 h-auto"
                        alt="Foto Murid">
                    @endif
                </div>

                <button
                    class="mt-6 px-4 py-2 bg-blue-500 text-black rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mb-2">Ubah
                    Foto</button>
            </div>
            <div class="lg:col-span-2">

                @if ($errors->any())
                <div class="alert alert-danger bg-white text-dark">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <form action="/murid/{{ auth()->user()->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!--- Bagian form untuk edit profil -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!--- Input Nama -->
                        <div class="md:col-span-2">
                            <label for="nama_murid" class="block font-semibold text-black">Nama</label>
                            <input name="nama_murid" id="editprofile_nama" type="text" value="{{ $murids->nama_murid }}"
                                class="form-control w-full border border-black rounded-lg py-4 px-4 mt-1">
                            <p id="validasi-editprofile-nama" class="text-gray-700 text-xs mt-1">Hanya boleh diisi
                                dengan huruf (besar atau kecil), spasi, dan titik(.).</p>
                            <span id="validasi-editprofile-nama"></span>
                        </div>
                        <!--- Input Tanggal Lahir -->
                        <div>
                            <label for="tanggal_lahir" class="block font-semibold text-black">Tanggal Lahir</label>
                            <input name="tanggal_lahir" id="tanggal_lahir" type="date"
                                value="{{ $murids->tanggal_lahir }}"
                                class="form-control w-full border border-black rounded-lg py-4 px-4 mt-1">
                        </div>
                        <!--- Dropdown untuk Sabuk -->
                        <div>
                            <label for="sabuk" class="block font-semibold text-black">Sabuk</label>
                            <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black"> {{
                                $murids->sabuk }}</p>
                            <p class="text-gray-700 text-xs mt-1">Anda tidak bisa mengubah sabuk</p>
                        </div>
                        <!--- Dropdown untuk Dojo -->
                        <div class="md:col-span-2">
                            <label for="kode_dojo" class="block font-semibold text-black">Dojo</label>
                            <select name="kode_dojo" id="kode_dojo"
                                class="w-full border border-black rounded-lg py-4 px-4 mt-1">
                                {{-- dojo pilihan murid --}}
                                <option value="{{ $murids->dojo->kode_dojo }}">{{ $murids->dojo->nama_dojo }}</option>
                                {{-- dojo pilihan --}}
                                @foreach ($dojos as $dojo)
                                <option value="{{ $dojo->kode_dojo }}">{{ $dojo->nama_dojo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--- Input Email -->
                        <div>
                            <label for="email" class="block font-semibold text-black">Email</label>
                            <input name="email" id="editprofile_email" type="email" value="{{ $murids->user->email }}"
                                class="w-full border border-black rounded-lg py-4 px-4 mt-1">
                            <p id="validasi-editprofile-email" class="text-gray-700 text-xs mt-1">Masukkan email yang
                                valid.
                                <br>Contoh: example@example.com
                            </p>
                            <span id="validasi-editprofile-email"></span>
                        </div>
                        <!--- Input Nomor Telepon -->
                        <div>
                            <label for="nomor_telepon_rumah" class="block font-semibold text-black">Telepon</label>
                            <input name="nomor_telepon_rumah" id="editprofile_notelp" type="text"
                                value="{{ $murids->nomor_telepon_rumah }}"
                                class="w-full border border-black rounded-lg py-4 px-4 mt-1">
                            <p id="validasi-editprofile-notelp" class="text-gray-700 text-xs mt-1">Nomor telepon diawali
                                dengan 08</p>
                            <span id="validasi-editprofile-notelp"></span>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <!-- Tombol Simpan -->
                        <div class="m-3 md:w-2/5">
                            <button type="submit" class="p-3 bg-red-700 text-white rounded-lg hover:bg-red-800 w-full">Simpan</button>
                        </div>
                        <div class="m-3 md:w-2/5">
                            <button class="p-3 bg-gray-500 text-white rounded-lg hover:bg-gray-700 w-full">
                                <a href="/murid/{{ $murids->user_id }}/profile">Tutup</a>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Tombol Tutup -->

            </div>

        </div>
    </div>
</div>
@endsection