@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center">
        <h1 class="font-bold text-xl md:text-4xl md:font-bold text-black">Data Jadwal</h1>
        <a href="/admin/tambahjadwal" class="bg-red-700 p-1 text-sm md:p-2 md:text-base rounded-lg text-white flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-4 h-4 md:w-6 md:h-6 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            Tambah Data
        </a>
    </div>

    {{-- Button Menu Start --}}
    <form action="{{ route('filter.jadwal') }}" method="GET">
        <div class="flex justify-between items-center mb-4">
            <div class="flex">
                <select name="dojo" id="dojo" class="p-2 bg-gray-300 mr-3 text-xs md:text-base">
                    <option value="">Semua Dojo</option>
                    @foreach ($dojo as $item)
                        <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                    @endforeach
                </select>
                <select name="waktu" id="waktu" class="p-2 bg-gray-300 mr-3 text-xs md:text-base">
                    <option value="minggu">Minggu</option>
                    <option value="bulan">Bulan</option>
                    <option value="tahun">Tahun</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-3 py-1 md:px-4 md:py-2 rounded-lg hover:bg-blue-600">Filter</button>
            </div>
        </div>
    </form>

    {{-- Button Menu End --}}

    {{-- list jadwal --}}
    <div class="flex flex-col mt-4 md:mt-8">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm md:text-base font-light text-surface ">
                        <thead class="border-b border-neutral-200 font-medium md:text-l bg-red-700">
                            <tr class="text-white">
                                <th scope="col" class="px-6 py-4">Tanggal</th>
                                <th scope="col" class="px-6 py-4 text-center">Waktu</th>
                                <th scope="col" class="px-6 py-4">Lokasi</th>
                                <th scope="col" class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $item)
                                @if (!$filter || ($filter['dojo'] == $item->kode_dojo && $filter['waktu'] == 'minggu'))
                                    <tr class="border-b border-neutral-200">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->tanggal }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium text-center">
                                            {{ $item->jam_mulai }} -
                                            {{ $item->jam_selesai }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->tempat }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <a href="/admin/detailjadwal/{{ $item->kode_jadwal }}">
                                                <button type="button"
                                                    class="inline-flex p-2 items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 hover:bg-gray-200 md:w-3/5">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- list jadwal --}}
    <div class="flex items-center justify-center mt-8">
        {{ $jadwal->links() }}
    </div>

    {{-- pagination menampilkan 1 minggu --}}
@endsection
