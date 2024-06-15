@extends('pelatih.p_layout')

@section('content')
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet6.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-xl md:text-2xl font-bold mb-4">Tambah Absensi</h1>
                <div class="flex flex-wrap items-center justify-between mb-4">
                    <div class="w-full sm:w-auto flex items-center mb-4 sm:mb-0">
                        <label for="dojo" class="text-xs md:text-base mr-2 font-semibold">Pilih Dojo:</label>
                        <select id="dojo" name="dojo"
                            class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700">
                            <option value="dojo1">dojo 1</option>
                            <option value="dojo2">dojo 2</option>
                            <option value="dojo3">dojo 3</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-auto flex items-center">
                        <label for="date" class="text-xs md:text-base mr-2 font-semibold">Pilih bulan :</label>
                        <input type="date" id="month" name="month"
                            class="text-xs md:text-base border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-gray-700">
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto text-xs md:text-base">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/12 py-2">id</th>
                            <th class="w-3/12 py-2">Nama Murid</th>
                            <th class="w-2/12 py-2 text-center">Sabuk</th>
                            <th class="w-3/12 py-2">Status Absensi</th>
                            <th class="w-2/12 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($absensi as $index => $siswa)
                            <form action="{{ route('storeAbsensi') }}">
                                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }} hover:bg-gray-200">
                                    <td class="border px-4 py-2 text-center">{{ $siswa['users_id'] }}</td>
                                    <td class="border px-4 py-2">{{ $siswa['nama_murid'] }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $siswa['sabuk'] }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <div class="text-xs md:text-base flex justify-center items-center space-x-4">
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="status_kehadiran" value="hadir"
                                                    class="form-radio">
                                                <span class="ml-2">hadir</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="status_kehadiran" value="tidak"
                                                    class="form-radio">
                                                <span class="ml-2">tidak</span>
                                            </label>
                                        </div>
                                    </td>
                                    <input type="hidden" name="tanggal" value="{{ $siswa->tanggal_absensi }}">
                                    <input type="hidden" name="users_id" value="{{ $siswa->users_id }}">
                                    <td class="border px-4 py-2 text-center">
                                        <div class="flex justify-end mt-4">
                                            <button
                                                class="text-xs md:text-base px-4 py-2 text-white bg-red-700 rounded-lg hover:bg-red-800">Simpan</button>
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
