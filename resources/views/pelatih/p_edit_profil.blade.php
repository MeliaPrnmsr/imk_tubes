@extends('pelatih.p_layout')

@section('content')
<div class="container mx-auto bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet7.jpg') }}');">
    <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
        <h1 class="text-2xl font-bold mb-6">Edit Profil</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 bg-gray-300 rounded-full mb-4"></div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mb-2">Ubah Foto</button>
                
            </div>
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2">
                        <label class="block font-semibold text-gray-900">Nama</label>
                        <input type="text" value="Tom Holland" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-900">Tempat Lahir</label>
                        <input type="text" value="Medan" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-900">Tanggal Lahir</label>
                        <input type="date" value="1996-04-12" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-900">Pengcab</label>
                        <input type="text" value="Medan Johor" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-900">Dojo</label>
                        <input type="text" value="Gor Serbaguna" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block font-semibold text-gray-900">Email</label>
                        <input type="email" value="tomholland@gmail.com" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                    <div>
                        <label class="block font-semibold text-gray-900">Telepon</label>
                        <input type="text" value="081234567890" class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 hover:border-red-700 focus:outline-none focus:ring-2 focus:ring-red-700">
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <button class="px-4 py-2 bg-red-700 text-white rounded-full hover:bg-red-800 focus:outline-none focus:ring-2 mr-2">Simpan</button>
                    <a href="{{ route('profil') }}" class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-graay-700 focus:outline-none focus:ring-2 mr-2">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
