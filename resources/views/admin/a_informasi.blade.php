@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center">
        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Informasi</h1>
        <button class="bg-red-700 p-1 text-sm md:p-4 md:text-base rounded-lg text-white">Tambah Data</button>
    </div>

    {{-- search bar start --}}
    <div class="mt-4 mb-4  md:mb-8">
        <form action="">
            <div class="flex justify-between border-2 border-red-700 rounded-xl p-2">
                <input type="text" name="cariinformasi" id="cariinformasi" placeholder="Cari informasi"
                    class="w-full border-0 outline-none focus:ring-0">
                <button class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
    {{-- search bar start --}}


    {{-- list data --}}
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-red-700 text-white">
                                <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">No</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Nama</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3 text-center  text-xs md:text-base font-medium">Action
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($informasi as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $item->nama_informasi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">
                                        {{ $item->deskripsi_informasi }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <a href="/admin/detailinformasi/{{ $item->kode_informasi }}">
                                            <button type="button"
                                                class="inline-flex p-2 items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 hover:bg-gray-200 md:w-3/5">Detail</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- list data --}}
@endsection
