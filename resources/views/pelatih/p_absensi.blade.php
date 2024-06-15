@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet6.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-xl md:text-2xl font-bold mb-6">Data Absensi</h1>
                <div class="flex flex-wrap items-center justify-between">
                    <form method="GET" action="{{ route('showAbsensi') }}">
                        <div class="flex items-center mb-4 sm:mb-0">
                            <label for="dojo" class="text-xs md:text-base mr-2 font-semibold">Pilih Dojo:</label>
                            <select id="dojo" name="dojo"
                                class="text-sm md:text-base border border-gray-300 rounded-lg py-2 px-4 mr-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                                onchange="this.form.submit()">
                                <option value="all">
                                    All</option>
                                @foreach ($dojos as $item)
                                    <option value="{{ $item->kode_dojo }}">
                                        {{ $item->nama_dojo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center mb-4 sm:mb-0">
                            <label for="tanggal" class="text-xs md:text-base mr-2 font-semibold">Pilih Tanggal:</label>
                            <input type="date" id="tanggal" name="tanggal"
                                class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                                onchange="this.form.submit()">
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
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        {{-- {{dd($absensi)}} --}}
                        @foreach ($data as $index => $siswa)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }} hover:bg-gray-200">
                                <td class="border px-4 py-2 text-center">{{ $siswa->users_id }}</td>
                                <td class="border px-4 py-2">{{ $siswa->nama_murid }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->sabuk }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->status_kehadiran }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->nama_dojo }}</td>
                                <td class="border px-4 py-2 text-center">{{ $siswa->tanggal_absensi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex flex-wrap justify-start mt-6 space-y-2 sm:space-y-0 sm:space-x-2 p-2 rounded">
                <button
                    class="text-xs md:text-base flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    Excel
                </button>
                <button
                    class="text-xs md:text-base flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                    </svg>
                    Cetak
                </button>
            </div>
        </div>
    </div>
@endsection
