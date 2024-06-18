@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
        <button class="flex justify-start" onclick="history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Tambah Jadwal</h1>
    </div>

    @if (session('success'))
        <div id="notif-login" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-full">
        <form action="/admin/storejadwal" method="POST" id="validasi-form">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">

                <div>
                    <label for="tanggal" class=" text-sm font-medium mb-3">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        placeholder="Nama jadwal" required>
                </div>

                <div>
                    <label for="tgl_lahir" class=" text-sm font-medium mb-3">Dojo</label>
                    <select id="dojo" name="kode_dojo"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                        <option selected disabled value="">Pilih Dojo</option>
                        @foreach ($dojo as $item)
                            <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="start-time" class="block mb-2 text-sm font-medium">Mulai :</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="time" id="start-time" name="jam_mulai"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                value="00:00" required />
                        </div>
                    </div>
                    <div>
                        <label for="end-time" class="block mb-2 text-sm font-medium">Selesai :</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="time" id="end-time" name="jam_selesai"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                value="00:00" required />
                        </div>
                    </div>
                </div>

                <div>
                    <label for="tempat" class=" text-sm font-medium mb-3">Tempat</label>
                    <input type="text" id="tempat" name="tempat"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        placeholder="tempat latihan">
                </div>

                <div>
                    <label for="catatan" class=" text-sm font-medium mb-3">Catatan</label>
                    <textarea rows="3" id="catatan" name="catatan"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        placeholder="jl. Kencana 1"></textarea>
                </div>

            </div>

            <div class="flex justify-center">
                <button type="button" onclick="my_modal_tambah.showModal()" id="validasi-btn"
                class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm disabled:opacity-60"
                disabled>Tambah</button>
            <button type="button" onclick="my_modal_batal.showModal()"
                class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button> 
            </div>
        </form>
    </div>

    {{-- modal validasi tambah --}}
    <dialog id="my_modal_tambah" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <div class="mt-6 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-20 text-blue-700">
                    <path
                        d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                    <path fill-rule="evenodd"
                        d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087ZM12 10.5a.75.75 0 0 1 .75.75v4.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 1 1 1.06-1.06l1.72 1.72v-4.94a.75.75 0 0 1 .75-.75Z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h3 class="font-bold text-2xl text-center">Tambah Jadwal</h3>
            <p class="py-4 mb-2 text-center text-black">Apakah anda yakin ingin menambahkan data?</p>
            <div class="modal-action flex justify-center text-black">
                <button class="btn bg-red-700 hover:bg-red-800 text-white" type="button" onclick="submitForm()">Ya,
                    Tambahkan Jadwal</button>
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
            <h3 class="font-bold text-2xl text-center">Batalkan Tambahkan jadwal</h3>
            <p class="py-4 mb-2 text-center text-black">Apakah Anda yakin ingin membatalkan penambahan data jadwal?
            </p>
            <div class="modal-action flex justify-center text-black">
                <button class="btn bg-red-700 hover:bg-red-800 text-white"><a
                        href="{{route('admin.datajadwal')}}">Ya, Batalkan Penambahan</a></button>
                <form method="dialog">
                    <button class="btn bg-gray-300">Tidak, Kembali</button>
                </form>
            </div>
        </div>
    </dialog>
    {{-- modal validasi batal--}}

    <script>
        function submitForm() {
          document.getElementById('validasi-form').submit();
      }
    </script>
@endsection
