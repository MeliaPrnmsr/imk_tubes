@extends('murid.m_layout')



@section('content')
    <div class="container mx-auto bg-cover bg-center">
        <div class="bg-red-700 p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl text-white font-bold mb-6">Profil Saya</h1>


            @if (session('status'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('message') }}
                </div>
            @endif


            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-gray-300 rounded-full mb-4"></div>
                    <a href="{{ route('editprofile', ['users_id' => auth()->user()->id]) }}" class="flex justify-end mt-6">
                        <button
                            class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                            Edit Akun
                        </button>
                    </a>
                </div>
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <label class="block font-semibold text-white">Nama</label>
                            <p class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100">
                                {{ $murids->nama_murid }}</p>
                        </div>
                        <div>
                            <label class="block font-semibold text-white">Tanggal Lahir</label>
                            <p class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100">
                                {{ $murids->tanggal_lahir }}</p>
                        </div>
                        <div>
                            <label class="block font-semibold text-white">Sabuk</label>
                            <p class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100">
                                {{ $murids->sabuk }}</p>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block font-semibold text-white">Dojo</label>
                            <p class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100">
                                {{ $murids->dojo->nama_dojo }}</p>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block font-semibold text-white">Email</label>
                            <p class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100">
                                {{ $murids->user->email }}</p>
                        </div>
                        <div>
                            <label class="block font-semibold text-white">Telepon</label>
                            <p class="w-full border border-gray-300 rounded-lg py-2 px-4 mt-1 bg-gray-100">
                                {{ $murids->nomor_telepon_rumah }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <div>
                            <button
                                class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2">
                                <a href="/murid/dashboard" class="text-white">Tutup</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
