@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto bg-cover bg-center min-h-screen"
        style="background-image: url('{{ asset('asset/img/siluet8.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-xl md:text-2xl font-bold mb-6">Data Murid</h1>
                <form action="{{ route('datamurid') }}" method="GET">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center mb-4 sm:mb-0">
                            <label for="dojo" class="text-sm md:text-base mr-2 font-semibold">Pilih Dojo:</label>
                            <select id="dojo" name="dojo" onchange="this.form.submit()"
                                class="text-sm md:text-base border border-gray-300 rounded-lg py-2 px-4 mr-4 focus:outline-none focus:ring-2 focus:ring-gray-700">
                                <option value="all">
                                    All</option>
                                @foreach ($dojo as $item)
                                    <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full sm:w-auto flex items-center">
                            <div class="relative w-full sm:w-64">
                                <input id="nama" name="nama" type="text" placeholder="Cari nama murid"
                                    class="text-sm md:text-base border border-gray-300 rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-gray-700" />
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-700">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg overflow-hidden text-sm md:text-base">
                    <thead class="bg-red-800 text-white">
                        <tr>
                            <th class="w-1/12 py-2 text-center">ID</th>
                            <th class="w-2/12 py-2 text-center">Nama</th>
                            <th class="w-2/12 py-2 text-center">No Telp</th>
                            <th class="w-2/12 py-2 text-center">Tanggal Lahir</th>
                            <th class="w-2/12 py-2 text-center">Dojo</th>
                            <th class="w-3/12 py-2 text-center">Status</th>
                            <th class="w-2/12 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($data as $item)
                            <tr class="bg-white hover:bg-gray-100 border-b">
                                <td class="border px-4 py-2 text-center">{{ $item['kode_murid'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['nama_murid'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['nomor_telepon_rumah'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['tanggal_lahir'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['dojo']['nama_dojo'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['status'] }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a href="{{ route('editmurid', ['id' => $item['kode_murid']]) }}"
                                        class="text-blue-500 hover:text-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Repeat similar rows for other students -->
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end mt-4">
                <button
                    class="text-sm md:text-base px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none">Tambah
                    murid</button>
            </div>
        </div>
    </div>
@endsection
