@extends('admin.a_layout')

@section('content')
<div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center text-black">
    <h1 class="font-bold text-xl md:text-3xl md:font-bold">Data Murid</h1>
    <a href="">
        <a href="/admin/tambahmurid" class="bg-red-700 p-1 text-sm md:p-4 md:text-base rounded-lg text-white">Tambah
            Data</a>
    </a>
</div>

@if (session('success'))
<div id="session" class="alert alert-success my-2">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div  id="session" class="alert alert-danger my-2">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- search bar start --}}
<div class="mt-4 mb-4  md:mb-8">
    <form action="" method="GET">
        <div class="flex justify-between border border-black rounded-xl p-2">
            <input type="text" name="carimurid" id="carimurid" placeholder="Cari Murid"
                class="w-full border-0 outline-none focus:ring-0" value="{{ request()->input('carimurid') }}">
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
{{-- search bar end --}}



{{-- list data --}}
<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-red-700 text-white">
                            <th scope="col" class="px-6 py-3 text-center text-xs md:text-base font-medium">No</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Nama</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Sabuk</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Dojo</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs md:text-base font-medium">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-black text-black">
                        @foreach ($murid as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">{{ $loop->iteration
                                }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{ $item->nama_murid }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                @switch($item->sabuk)
                                    @case('kuning')
                                        <div class="bg-yellow-400 h-3 rounded-full w-3/5"></div>
                                    @break
                                    @case('hijau')
                                        <div class="bg-green-900 h-3 rounded-full w-3/5"></div>
                                    @break
                                    @case('biru')
                                        <div class="bg-blue-900 h-3 rounded-full w-3/5"></div>
                                    @break
                                    @case('coklat')
                                        <div class="bg-orange-600 h-3 rounded-full w-3/5"></div>
                                    @break
                                    @case('hitam')
                                        <div class="bg-black h-3 rounded-full w-3/5"></div>
                                    @break
                                    @default
                                        <div class="bg-gray-200 h-3 rounded-full w-3/5"></div>
                                @endswitch
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $item->dojo->nama_dojo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a href="/admin/detailmurid/{{ $item->kode_murid }}">
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

<div class="mt-4">
    {{ $murid->withQueryString()->links() }}
</div>

@endsection