@extends('pelatih.p_layout')

@section('content')
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet6.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-xl md:text-2xl font-bold mb-4">Tambah Absensi</h1>
                @if(session('error'))
                    <div class="bg-red-500 text-white p-2 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if(session('success'))
                    <div class="bg-green-500 text-white p-2 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-4 flex items-center justify-between">
                    <form method="GET" action="{{ route('tambahAbsensi') }}" class="flex items-center">
                        <label for="dojo" class="text-xs md:text-base mr-2 font-semibold">Pilih Dojo:</label>
                        <select id="dojo" name="dojo"
                            class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                            onchange="this.form.submit()">
                            <option value="all">All</option>
                            @foreach ($dojos as $item)
                                <option value="{{ $item->kode_dojo }}" {{ request('dojo') == $item->kode_dojo ? 'selected' : '' }}>
                                    {{ $item->nama_dojo }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="overflow-x-auto text-xs md:text-base">
                    <table class="min-w-full bg-white rounded-lg overflow-hidden">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/12 py-2">ID</th>
                                <th class="w-3/12 py-2">Nama Murid</th>
                                <th class="w-2/12 py-2 text-center">Sabuk</th>
                                <th class="w-3/12 py-2">Status Absensi</th>
                                <th class="w-2/12 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800">
                            @foreach ($murid as $index => $siswa)
                                <form action="{{ route('storeAbsensi') }}" method="POST">
                                    @csrf
                                    <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }} hover:bg-gray-200">
                                        <td class="border px-4 py-2 text-center">{{ $siswa->kode_murid }}</td>
                                        <td class="border px-4 py-2">{{ $siswa->nama_murid }}</td>
                                        <td class="border px-4 py-2 text-center">{{ $siswa->sabuk }}</td>
                                        <td class="border px-4 py-2 text-center">
                                            <select name="status_kehadiran" class="py-1 px-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-700">
                                                <option value="hadir">Hadir</option>
                                                <option value="tidak hadir">Tidak Hadir</option>
                                            </select>
                                        </td>
                                        <td class="border px-4 py-2 text-center">
                                            <input type="hidden" name="kode_murid" value="{{ $siswa->kode_murid }}">
                                            <input type="hidden" name="tanggal_absensi" value="{{ now()->format('Y-m-d') }}">
                                            <button type="submit" class="px-2 py-1 bg-red-700 text-white rounded hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500">Tambah</button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
