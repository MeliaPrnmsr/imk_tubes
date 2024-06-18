@extends('murid.m_layout')


@section('content')

    <div class="container mx-auto bg-cover bg-center">
        <div class="bg-red-700 p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl text-white font-bold mb-6">Edit Profil Saya</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-gray-300 rounded-full mb-4"></div>
                    <button
                        class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mb-2">Ubah
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
                        <!-- Bagian form untuk edit profil -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Input Nama -->
                            <div class="md:col-span-2">
                                <label for="nama_murid" class="block font-semibold text-white">Nama</label>
                                <input name="nama_murid" id="nama_murid" type="text" value="{{ $murids->nama_murid }}"
                                    class="form-control w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <!-- Input Tanggal Lahir -->
                            <div>
                                <label for="tanggal_lahir" class="block font-semibold text-white">Tanggal Lahir</label>
                                <input name="tanggal_lahir" id="tanggal_lahir" type="date"
                                    value="{{ $murids->tanggal_lahir }}"
                                    class="form-control w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <!-- Dropdown untuk Sabuk -->
                            <div>
                                <label for="sabuk" class="block font-semibold text-white">Sabuk</label>
                                <select name="sabuk" id="sabuk"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                                    {{-- sabuk murid --}}
                                    <option value="{{ $murids->sabuk }}">{{ $murids->sabuk }}</option>
                                    {{-- sabuk pilihan --}}
                                    @foreach ($sabuk_options as $sabuk)
                                        <option value="{{ $sabuk }}">{{ $sabuk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Dropdown untuk Dojo -->
                            <div class="md:col-span-2">
                                <label for="kode_dojo" class="block font-semibold text-white">Dojo</label>
                                <select name="kode_dojo" id="kode_dojo"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                                    {{-- dojo pilihan murid --}}
                                    <option value="{{ $murids->dojo->kode_dojo }}">{{ $murids->dojo->nama_dojo }}</option>
                                    {{-- dojo pilihan --}}
                                    @foreach ($dojos as $dojo)
                                        <option value="{{ $dojo->kode_dojo }}">{{ $dojo->nama_dojo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Input Email -->
                            <div class="md:col-span-2">
                                <label for="email" class="block font-semibold text-white">Email</label>
                                <input name="email" id="email" type="email"
                                    value="{{ $murids->user->email ?? '' }}"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <!-- Input Nomor Telepon -->
                            <div>
                                <label for="nomor_telepon_rumah" class="block font-semibold text-white">Telepon</label>
                                <input name="nomor_telepon_rumah" id="nomor_telepon_rumah" type="text"
                                    value="{{ $murids->nomor_telepon_rumah }}"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <!-- Tombol Simpan -->
                            <div class="mr-4">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-600 text-white rounded-full hover:bg-green-800 focus:outline-none focus:ring-2">Simpan</button>
                            </div>
                    </form>
                    <!-- Tombol Tutup -->
                    <div>
                        <button
                            class="px-4 py-2 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2">
                            <a href="/murid/{{ $murids->user_id }}/profile"
                                style="color: inherit; text-decoration: none;">Tutup</a>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
