@extends('pelatih.p_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center">
        <h1 class="font-bold text-xl md:text-4xl md:font-bold text-black">Data Jadwal</h1>
    </div>

    {{-- Button Menu Start --}}
    <form action="{{ route('filter.jadwal.pelatih') }}" method="GET">
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
                <button type="submit"
                    class="bg-blue-500 text-white px-3 py-1 md:px-4 md:py-2 rounded-lg hover:bg-blue-600">Filter</button>
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
                                <th scope="col" class="px-6 py-4 ">Waktu</th>
                                <th scope="col" class="px-6 py-4">Lokasi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $item)
                                @if (!$filter || ($filter['dojo'] == $item->kode_dojo && $filter['waktu'] == 'minggu'))
                                    <tr class="border-b border-neutral-200">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->tanggal }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                            {{ $item->jam_mulai }} -
                                            {{ $item->jam_selesai }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->tempat }}</td>

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
