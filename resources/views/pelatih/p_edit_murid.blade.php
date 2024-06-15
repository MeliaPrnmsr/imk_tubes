@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet9.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen flex justify-center">
            <div class="w-full max-w-lg">
                <h1 class="text-xl md:text-2xl font-bold mb-6">Edit Murid</h1>
                <form action="{{ route('updatemurid', $data->kode_murid) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block font-semibold text-gray-900">Nama</label>
                            <input type="text" value="{{ $data->nama_murid }}" name="nama_murid" id="nama_murid"
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                        </div>
                        <div>
                            <label class="block font-semibold text-gray-900">No Telepon</label>
                            <input type="text" value="{{ $data->nomor_telepon_rumah }}" name="nomor_telepon_rumah"
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                        </div>
                        <div>
                            <label class="block font-semibold text-gray-900">Tanggal Lahir</label>
                            <input type="text" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir"
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                        </div>
                        <div>
                            <label class="block font-semibold text-gray-900">Status Aktif</label>
                            <select name="status"
                                class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                                <option value="aktif" {{ $data->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak aktif" {{ $data->status == 'tidak aktif' ? 'selected' : '' }}>Tidak
                                    Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-red-700 text-white rounded-full hover:bg-red-800 focus:outline-none focus:ring-2 mr-2">Simpan</button>
                        <a href="{{ route('datamurid') }}"
                            class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
