@extends('admin.a_layout')

@section('content')
<div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
    <button class="flex justify-start" onclick="history.back();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8 text-black">
            <path fill-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <h1 class="font-bold text-xl md:text-3xl md:font-bold text-black">Tambah Murid</h1>
</div>

<div class="w-full">
    <form action="/admin/addmurid" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid md:grid-cols-2 gap-6 p-6">
            <div>
                <label for="nama_murid" class="text-sm font-medium mb-3">Nama</label>
                <input type="text" id="nama_murid" name="nama_murid"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="email" class="text-sm font-medium mb-3">Email</label>
                <input type="email" id="email" name="email"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="password" class="text-sm font-medium mb-3">Password</label>
                <input type="password" id="password" name="password"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="tempat_lahir" class="text-sm font-medium mb-3">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="tanggal_lahir" class="text-sm font-medium mb-3">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="nomor_telepon_rumah" class="text-sm font-medium mb-3">Nomor Telepon</label>
                <input type="text" id="nomor_telepon_rumah" name="nomor_telepon_rumah"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="nama_orang_tua_wali" class="text-sm font-medium mb-3">Nama Orang Tua / Wali</label>
                <input type="text" id="nama_orang_tua_wali" name="nama_orang_tua_wali"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="pekerjaan_orang_tua" class="text-sm font-medium mb-3">Pekerjaan Orang Tua / Wali</label>
                <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="pendidikan_terakhir" class="text-sm font-medium mb-3">Pendidikan Terakhir</label>
                <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="sabuk" class="text-sm font-medium mb-3">Sabuk / Kyu Terakhir</label>
                <select id="sabuk" name="sabuk"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
                    @foreach ($sabuk as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="kode_dojo" class="text-sm font-medium mb-3">Dojo</label>
                <select id="kode_dojo" name="kode_dojo"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
                    @foreach ($dojo as $item)
                    <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                    @endforeach
                </select>
            </div>



            <div>
                <label for="foto" class="text-sm font-medium mb-3">Foto</label>
                <input type="file" id="foto" name="foto"
                    class="py-3 px-4 w-full border border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
            </div>


            <input type="hidden" name="status" value="aktif">

        </div>


        <div class="flex justify-center">
            <button onclick="my_modal_tambah.showModal()" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Tambah</button>
            <button onclick="my_modal_batal.showModal()" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button>
        </div>
    </form>

    {{-- modal validasi tambah --}}
    <dialog id="my_modal_tambah" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <div class="mt-6 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-20 text-blue-700">
                    <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                    <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087ZM12 10.5a.75.75 0 0 1 .75.75v4.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 1 1 1.06-1.06l1.72 1.72v-4.94a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                  </svg>
                                  
            </div>
            <h3 class="font-bold text-2xl text-center">Tambah Murid</h3>
            <p class="py-4 mb-2 text-center text-black">Apakah anda yakin ingin menambahkan data?</p>
            <div class="modal-action flex justify-center text-black">
                <button class="btn bg-red-700 hover:bg-red-800 text-white" type="submit">Ya, Tambahkan Murid</button>
                <form method="dialog">
                    <button class="btn bg-gray-300">Tidak, Batalkan</button>
                </form>
            </div>
        </div>
    </dialog>
    {{-- modal validasi tambah--}}

    {{-- modal validasi batal --}}
    <dialog id="my_modal_batal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <div class="mt-6 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-20 text-red-700">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h3 class="font-bold text-2xl text-center">Batalkan Tambahkan Murid</h3>
            <p class="py-4 mb-2 text-center text-black">Apakah Anda yakin ingin membatalkan penambahan data murid?</p>
            <div class="modal-action flex justify-center text-black">
                <button class="btn bg-red-700 hover:bg-red-800 text-white"><a href="{{route('admin.datamurid')}}">Ya, Batalkan Penambahan</a></button>
                <form method="dialog">
                    <button class="btn bg-gray-300">Tidak, Kembali</button>
                </form>
            </div>
        </div>
    </dialog>
    {{-- modal validasi batal--}}

</div>
</div>
@endsection