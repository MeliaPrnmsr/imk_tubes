@extends('pelatih.p_layout')

@section('content')
<div class="container mx-auto bg-cover bg-scroll" style="background-image: url('{{ asset('asset/img/siluet4.jpg') }}');">
    <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
        <div class="mb-4">
            <h1 class="text-2xl font-bold mb-6">Detail Sertifikat</h1>
            <div class="flex flex-wrap items-center justify-between mb-6">
                <div class="relative w-full sm:w-64 mb-4 sm:mb-0">
                    
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gray-300 h-64 flex items-center justify-center">
                    <img src="{{ asset('asset/img/sample-certificate.jpg') }}" alt="Gambar Sertifikat" class="object-cover h-full w-full">
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Nama Sertifikat</h2>
                <p class="text-gray-500 mb-4">Diberikan kepada: <span class="font-semibold">Nama Pelatih</span></p>
                <p class="text-gray-500 mb-4">Tanggal Penerbitan: <span class="font-semibold">00/00/0000</span></p>
                <p class="text-gray-500 mb-6">Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.</p>
                <a href="{{ route('sertifikat') }}" class="px-4 py-2 bg-gray-500 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
