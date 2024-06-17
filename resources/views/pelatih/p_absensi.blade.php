@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet6.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-xl md:text-2xl font-bold mb-6">Data Absensi</h1>

                @if (session('error'))
                    <div class="bg-red-500 text-white p-2 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-500 text-white p-2 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex flex-wrap items-center justify-between">
                    <form method="GET" action="{{ route('showAbsensi') }}">
                        <div class="flex items-center mb-4 sm:mb-0">
                            <label for="dojo" class="text-xs md:text-base mr-2 font-semibold">Pilih Dojo:</label>
                            <select id="dojo" name="dojo"
                                class="text-sm md:text-base border border-gray-300 rounded-lg py-2 px-4 mr-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                                onchange="this.form.submit()">
                                <option value="all">All</option>
                                @foreach ($dojos as $item)
                                    <option value="{{ $item->kode_dojo }}"
                                        {{ request('dojo') == $item->kode_dojo ? 'selected' : '' }}>
                                        {{ $item->nama_dojo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center mb-4 sm:mb-0">
                            <label for="bulan" class="text-xs md:text-base mr-2 font-semibold">Pilih Bulan:</label>
                            <input type="month" id="bulan" name="bulan"
                                class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                                value="{{ request('bulan') }}" onchange="this.form.submit()">
                        </div>
                        <div class="flex items-center mb-4 sm:mb-0">
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
                    <a href="{{ route('exportExcel') }}"
                        class="text-xs md:text-base flex items-center px-4 py-2 bg-green-700 text-white rounded-lg hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18M3 21h18M9 3v18m6-18v18M3 9h18M3 15h18" />
                        </svg>
                        Export to Excel
                    </a>
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
            <div class="overflow-x-auto bg-white bg-opacity-75 p-2 rounded text-xs md:text-base">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/12 py-2">ID</th>
                            <th class="w-2/12 py-2">Nama Murid</th>
                            <th class="w-2/12 py-2 text-center">Sabuk</th>
                            <th class="w-3/12 py-2">Status Absensi</th>
                            <th class="w-2/12 py-2">Dojo</th>
                            <th class="w-2/12 py-2">Tanggal</th>
                            <th class="w-2/12 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($data as $index => $siswa)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }} hover:bg-gray-200">
                                <td class="border px-4 py-2 text-center">{{ $siswa->kode_murid }}</td>
                                <td class="border px-4 py-2">{{ $siswa->nama_murid }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->sabuk }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->status_kehadiran }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->nama_dojo }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->tanggal_absensi }}</td>
                                <td>
                                    <a href="/pelatih/delete/{{ $siswa->kode_absensi }}">
                                        <button>Delete</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
