@extends('admin.a_layout')

@section('content')
<div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
    <button class="flex justify-start" onclick="history.back();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
            <path fill-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <h1 class="font-bold text-xl md:text-3xl md:font-bold">Tambah Pelatih</h1>
</div>


<div class="w-full">
    <form action="{{ route('admin.storepelatih') }}" method="POST" enctype="multipart/form-data" id="validasi-form">
        @csrf
        <div class="grid md:grid-cols-2 gap-6 p-6">
            <div>
                <label for="nama_pelatih" class="text-sm font-medium mb-3">Nama pelatih</label>
                <input type="text" name="nama_pelatih" id="nama_pelatih"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Nama pelatih" required>
                <p id="validasi-nama-pelatih" class="text-gray-600 text-xs mt-1">Hanya boleh diisi dengan huruf (besar
                    atau kecil), spasi, dan titik(.).</p>
                <span id="validasi-nama-pelatih"></span>
            </div>

            <div>
                <label for="email" class="text-sm font-medium mb-3">Email</label>
                <input type="email" name="email" id="email_pelatih"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="email@example.com" required>
                <p id="validasi-email_pelatih" class="text-gray-600 text-xs mt-1">Masukkan alamat email Anda yang valid.
                    <br> Contoh: example@example.com
                </p>
                <span id="validasi-email_pelatih"></span>

            </div>

            <div>
                <label for="password" class="text-sm font-medium mb-3">Password</label>
                <input type="password" name="password" id="password_pelatih"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Password" required>
                <p id="validasi-password-pelatih" class="text-gray-600 text-xs mt-1">Minimal terdiri dari delapan karakter, setidaknya
                    satu huruf besar, satu huruf kecil, satu angka, dan dapat menggunakan underscore(_). </p>
                <span id="validasi-password-pelatih"></span>
            </div>

            <div>
                <label for="tgl_lahir" class="text-sm font-medium mb-3">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="no_telp" class="text-sm font-medium mb-3">Nomor Telepon</label>
                <input type="number" name="no_telp" id="no_telp_pelatih"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="082233445566" required>
                <p id="validasi-no-telp" class="text-gray-600 text-xs mt-1">Nomor telepon diawali dengan 08. Contoh:
                    08xxxxxxxx</p>
                <span id="validasi-no-telp"></span>
            </div>

            <div>
                <label for="dan" class="text-sm font-medium mb-3">Dan</label>
                <select id="dan" name="dan"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
                    <option selected disabled value="">Pilih Dan</option>
                    <option value="Dan 1">Dan 1</option>
                    <option value="Dan 2">Dan 2</option>
                    <option value="Dan 3">Dan 3</option>
                    <option value="Dan 4">Dan 4</option>
                </select>
            </div>

            <div>
                <label for="dojos" class="text-sm font-medium mb-3">Dojo</label>
                <div id="dojo-container">
                    <div class="flex items-center space-x-2 dojo-group ">
                        <select name="dojo[]"
                            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                            required>
                            <option selected disabled value="">Pilih Dojo</option>
                            @foreach ($dojo as $item)
                            <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                            @endforeach
                        </select>
                        <button type="button"
                            class="remove-dojo bg-red-500 text-white px-3 py-2 rounded-lg">Hapus</button>
                    </div>
                </div>
                <button type="button" id="add-dojo-button"
                    class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg">Tambah Dojo</button>
            </div>


            <div>
                <label for="pengcab" class="text-sm font-medium mb-3">Pengcab</label>
                <select id="pengcab" name="pengcab"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
                    <option selected disabled value="">Pilih Pengcab</option>
                    <option value="Pengcab A">Pengcab A</option>
                    <option value="Pengcab B">Pengcab B</option>
                    <option value="Pengcab C">Pengcab C</option>
                    <option value="Pengcab D">Pengcab D</option>
                </select>
            </div>

            <div>
                <label for="alamat" class="text-sm font-medium mb-3">Alamat</label>
                <textarea rows="3" name="alamat" id="alamat_pelatih"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="jl. Kencana 1" required></textarea>
                <p id="validasi-alamat-pelatih" class="text-gray-600 text-xs mt-1">Masukkan alamat lengkap</p>
                <span id="validasi-alamat-pelatih"></span>
            </div>

            <div>
                <label for="foto" class="text-sm font-medium mb-3">Foto</label>
                <input type="file" id="foto" name="foto"
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <input type="hidden" name="status" value="aktif">
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
        <h3 class="font-bold text-2xl text-center">Tambah Pelatih</h3>
        <p class="py-4 mb-2 text-center text-black">Apakah anda yakin ingin menambahkan data?</p>
        <div class="modal-action flex justify-center text-black">
            <button class="btn bg-red-700 hover:bg-red-800 text-white" type="button" onclick="submitForm()">Ya,
                Tambahkan Pelatih</button>
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
        <h3 class="font-bold text-2xl text-center">Batalkan Tambahkan Pelatih</h3>
        <p class="py-4 mb-2 text-center text-black">Apakah Anda yakin ingin membatalkan penambahan data pelatih?
        </p>
        <div class="modal-action flex justify-center text-black">
            <button class="btn bg-red-700 hover:bg-red-800 text-white"><a href="{{route('admin.datapelatih')}}">Ya,
                    Batalkan Penambahan</a></button>
            <form method="dialog">
                <button class="btn bg-gray-300">Tidak, Kembali</button>
            </form>
        </div>
    </div>
</dialog>
{{-- modal validasi batal--}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
            const addDojoButton = document.getElementById('add-dojo-button');
            const dojoContainer = document.getElementById('dojo-container');

            addDojoButton.addEventListener('click', function() {
                const newDojoGroup = document.createElement('div');
                newDojoGroup.className = 'flex items-center space-x-2 dojo-group';
                newDojoGroup.innerHTML = `
                  <select name="dojo[]" class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                      <option selected disabled value="">Pilih Dojo</option>
                      @foreach ($dojo as $item)
                            <option value="{{ $item->kode_dojo }}">{{ $item->nama_dojo }}</option>
                        @endforeach
                  </select>
                  <button type="button" class="remove-dojo bg-red-500 text-white px-3 py-2 rounded-lg">Hapus</button>
              `;
                dojoContainer.appendChild(newDojoGroup);
            });

            dojoContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-dojo')) {
                    event.target.parentElement.remove();
                }
            });
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            
        });


        function submitForm() {
            document.getElementById('validasi-form').submit();
        }
</script>
@endsection