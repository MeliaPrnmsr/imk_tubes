@extends('pelatih.p_layout')

@section('content')
<div class="mt-4">
    <h1 class="text-xl md:text-4xl font-bold mb-4 text-black">Tambah Absensi</h1>
    @if(session('error'))
        <div id="session" class="bg-red-500 text-white p-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif
    @if(session('success'))
        <div id="session" class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
</div>
    <div class="py-4">
        <div class="mb-4">
     
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
                <table class="min-w-full bg-white rounded-md overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Nama Murid</th>
                            <th scope="col" class="px-6 py-3">Sabuk</th>
                            <th scope="col" class="px-6 py-3">Status Absensi</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($murid as $index => $siswa)
                            <form action="{{ route('storeAbsensi') }}" method="POST">
                                @csrf
                                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }} hover:bg-gray-200">
                                    <td class="px-6 py-3 whitespace-nowrap text-center">{{ $siswa->kode_murid }}</td>
                                    <td class="px-6 py-3 whitespace-nowrap">{{ $siswa->nama_murid }}</td>
                                    <td class="px-6 py-3 whitespace-nowrap">{{ $siswa->sabuk }}</td>
                                    <td class="px-6 py-3 whitespace-nowrap ">
                                        <select name="status_kehadiran" class="p-1 border border-gray-300 rounded-md">
                                            <option value="hadir">Hadir</option>
                                            <option value="tidak hadir">Tidak Hadir</option>
                                        </select>
                                    </td>
                                    <td class="px-6 py-3 whitespace-nowrap text-center">
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

    <div>
        <a class="bg-gray-500 p-3 text-center text-white" href="{{route('showAbsensi')}}">Tutup</a>
    </div>
@endsection
