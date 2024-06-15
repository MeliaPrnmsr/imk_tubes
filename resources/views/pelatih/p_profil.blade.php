@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet9.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <h1 class="text-2xl font-bold mb-6">Profil Saya</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-gray-300 rounded-full mb-4"></div>
                    <button
                        class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mb-2">Ubah
                        Foto</button>
                    <button
                        class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Edit
                        Akun</button>
                </div>
                <form action="{{ route('updateProfil', $data->kode_pelatih) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="lg:col-span-2">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="md:col-span-2">
                                <label class="block font-semibold text-gray-900">Nama</label>
                                <input type="text" value="{{ $data->nama_pelatih }}" name="nama_pelatih"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            {{-- <div>
                            <label class="block font-semibold text-gray-900">Tempat Lahir</label>
                            <input type="text" value="{{ $data-> }}"
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                        </div> --}}
                            <div>
                                <label class="block font-semibold text-gray-900">Tanggal Lahir</label>
                                <input type="date" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-900">Pengcab</label>
                                <input type="text" value="{{ $data->pengcab }}" name="pengcab"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-900">Dan</label>
                                <input type="text" value="{{ $data->dan }}" name="dan"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-900">nomor_telepon</label>
                                <input type="text" value="{{ $data->nomor_telepon }}" name="nomor_telepon"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-900">alamat</label>
                                <input type="text" value="{{ $data->alamat }}" name="alamat"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-900">status</label>
                                <input type="text" value="{{ $data->status }}" name="status"
                                    class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                            </div>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="submit"
                                class="px-4 py-2 bg-red-700 text-white rounded-full hover:bg-red-800 focus:outline-none focus:ring-2 mr-2">Update
                                Profil</button>
                            <button
                                class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2">Tutup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
