@extends('pelatih.p_layout')

@section('content')
<div class="mt-4">
    <h1 class="text-4xl font-bold mb-6">Data Absensi</h1>
</div>

@if (session('error'))
<div id="session" class="bg-red-500 text-white p-2 rounded mb-4">
    {{ session('error') }}
</div>
@endif
@if (session('success'))
<div id="session" class="bg-green-500 text-white p-2 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="p-6 rounded-lg shadow-lg">
    <div class="mb-4">
        <div class="flex flex-wrap items-center justify-between">
            <form method="GET" action="{{ route('showAbsensi') }}">
                <div class="grid grid-cols-2 gap-2">
                    {{-- FILTER DOJO --}}
                <label for="dojo" class="text-xs md:text-base mr-2 font-semibold">Pilih Dojo:</label>
                <select id="dojo" name="dojo"
                    class="text-sm md:text-base border border-gray-300 rounded-lg py-2 px-4 mr-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                    onchange="this.form.submit()">
                    <option value="all">All</option>
                    @foreach ($dojos as $item)
                    <option value="{{ $item->kode_dojo }}" {{ request('dojo')==$item->kode_dojo ? 'selected' : '' }}>
                        {{ $item->nama_dojo }}</option>
                    @endforeach
                </select>

                {{-- FILTER BULAN --}}
                <label for="bulan" class="text-xs md:text-base mr-2 font-semibold">Pilih Bulan:</label>
                <input type="month" id="bulan" name="bulan"
                    class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                    value="{{ request('bulan') }}" onchange="this.form.submit()">

                {{-- FILTER TANGGAL --}}
                <label for="tanggal" class="text-xs md:text-base mr-2 font-semibold">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal"
                    class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                    value="{{ request('tanggal') }}" onchange="this.form.submit()">
                </div>
            </form>
            <a href="{{ route('tambahAbsensi') }}"
                class="text-xs md:text-base flex items-center px-4 py-2 bg-red-700 text-white rounded-lg hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Tambah absensi
            </a>
        </div>
        <div class="flex items-center mb-4 sm:mb-0 mt-4">
            {{-- <a href="{{ route('exportExcel') }}"
                class="text-xs md:text-base flex items-center px-4 py-2 bg-green-700 text-white rounded-lg hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h18M3 21h18M9 3v18m6-18v18M3 9h18M3 15h18" />
                </svg>
                Export to Excel
            </a> --}}
            <a href="{{ route('exportPdf') }}"
                class="text-xs md:text-base flex items-center px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Export to PDF
            </a>
        </div>
    </div>
    <div class="overflow-x-auto mt-8">
        <table class="min-w-full overflow-hidden">
            <thead class="bg-red-700 text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nama Murid</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Dojo</th>
                    <th scope="col" class="px-6 py-3">Tanggal</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-500 text-black">
                @foreach ($data as $index => $siswa)
                    <tr class="{{ $index % 2 == 0 ? 'bg-white' : '' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $siswa->kode_murid }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->nama_murid }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $siswa->status_kehadiran }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $siswa->nama_dojo }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $siswa->tanggal_absensi }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <a href="/pelatih/delete/{{ $siswa->kode_absensi }}">
                            <button class="p-2 bg-gray-300 hover:bg-gray-400 rounded-md">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection