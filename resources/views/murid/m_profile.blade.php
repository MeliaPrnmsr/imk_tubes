@extends('murid.m_layout')

@section('content')

<h1 class="text-4xl text-center text-black font-bold mb-8 mt-4">Profil Saya</h1>

<div class="mt-4">
    <div class="p-6 rounded-lg shadow-lg border">
        @if (session('status'))
        <div id="session" class="bg-green-600 text-black p-4 rounded-lg my-4">
            {{ session('message') }}
        </div>
        @endif


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-4">
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
                
            </div>
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="md:col-span-2">
                        <label class="font-semibold text-black">Nama</label>
                        <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black">
                            {{ $murids->nama_murid }}</p>
                    </div>
                    <div>
                        <label class="font-semibold text-black">Tanggal Lahir</label>
                        <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black">
                            {{ $murids->tanggal_lahir }}</p>
                    </div>
                    <div>
                        <label class="font-semibold text-black">Sabuk</label>
                        <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black">
                            {{ $murids->sabuk }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <label class="font-semibold text-black">Dojo</label>
                        <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black">
                            {{ $murids->dojo->nama_dojo }}</p>
                    </div>
                    <div>
                        <label class="font-semibold text-black">Email</label>
                        <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black">
                            {{ $murids->user->email }}</p>
                    </div>
                    <div>
                        <label class="font-semibold text-black">Telepon</label>
                        <p class="w-full border border-black rounded-lg py-4 px-4 mt-1 bg-white text-black">
                            {{ $murids->nomor_telepon_rumah }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <div class="m-3 md:w-2/5">
                <a href="{{ route('editprofile', ['users_id' => auth()->user()->id]) }}" >
                    <button class="p-3 bg-red-700 text-white rounded-lg hover:bg-red-800 w-full">
                        Edit Akun
                    </button>
                </a>
            </div>

            <div class="m-3 md:w-2/5">
                <a href="{{ route('profile', ['users_id' => $murids->user_id]) }}">
                <button  class="p-3 bg-gray-500 text-white rounded-lg hover:bg-gray-700 w-full">
                    Tutup
                </button>
            </a>
            </div>
        </div>
    </div>
</div>

@endsection