@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center">
        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Data Dojo</h1>
        <a href="/admin/tambahdojo" class="bg-red-700 p-1 text-sm md:p-4 md:text-base rounded-lg text-white">Tambah Data</a>
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
            <div class="flex justify-between border-2 border-red-700 rounded-xl p-2">
                <input type="text" name="caridojo" id="caridojo" placeholder="Cari Dojo"
                    class="w-full border-0 outline-none focus:ring-0" value="{{ request()->input('caridojo') }}">
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
     <div class="mt-4 mb-4  md:mb-8">

     </div>
    {{-- list data --}}
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-red-700 text-white">
                                <th scope="col" class="px-6 py-3 text-center text-xs md:text-base font-medium">No</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Nama Dojo
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Pengcab
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs md:text-base font-medium">Alamat</th>
                                <th scope="col" class="px-6 py-3 text-center  text-xs md:text-base font-medium">Action
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($dojo as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                        {{ $loop->iteration + ($dojo->currentPage() - 1) * $dojo->perPage() }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $item->nama_dojo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm ">{{ $item->pengcab }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm ">{{ $item->alamat_dojo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <a href="detaildojo/{{ $item->kode_dojo }}">
                                            <button type="button"
                                                class="inline-flex p-2 items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 hover:bg-gray-200 md:w-3/5">
                                                Detail</button>
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

    {{-- pagination --}}
    <div class="mt-4">
        {{ $dojo->withQueryString()->links() }}
    </div>
    {{-- pagination end --}}
@endsection
