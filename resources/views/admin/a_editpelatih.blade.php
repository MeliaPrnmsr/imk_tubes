@extends('admin.a_layout')

@section('content')
    <div class="mt-2 mb-4 md:mb-8 md:mt-4 items-center text-center">
        <button class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 md:size-8">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Edit Pelatih</h1>
    </div>

    <div class="w-full">
        <form id="edit-form" action="{{ route('edit.pelatih2', $pelatih->kode_pelatih)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_pelatih" class=" text-sm font-medium mb-3">Nama pelatih</label>
                    <input type="text" id="nama_editpelatih" name="nama_pelatih" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $pelatih->nama_pelatih }}" data-original="{{ $pelatih->nama_pelatih }}" required>
                    <p id="validasi-nama-editpelatih" class="text-gray-600 text-xs mt-1">Hanya boleh diisi dengan huruf (besar atau kecil), spasi, dan titik(.).</p>
                    <span id="validasi-nama-editpelatih"></span>
                </div>

                <div>
                    <label for="tgl_lahir" class=" text-sm font-medium mb-3">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tanggal_lahir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $pelatih->tanggal_lahir }}" data-original="{{ $pelatih->tanggal_lahir }}" required>
                </div>

                <div>
                    <label for="no_telp" class=" text-sm font-medium mb-3">Nomor Telepon</label>
                    <input type="number" id="no_telp_editpelatih" name="nomor_telepon"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $pelatih->nomor_telepon }}" data-original="{{ $pelatih->nomor_telepon }}" required>
                        <p id="validasi-no-telp-editpelatih" class="text-gray-600 text-xs mt-1">Nomor telepon diawali dengan 08. Contoh: 08xxxxxxxx</p>
                        <span id="validasi-no-telp-editpelatih"></span>
                </div>

                <div>
                    <label for="dan" class=" text-sm font-medium mb-3">Dan</label>
                    <select id="dan" name="dan"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="Dan 1" {{ $pelatih->dan == 'Dan 1' ? 'selected' : '' }}>Dan 1</option>
                        <option value="Dan 2" {{ $pelatih->dan == 'Dan 2' ? 'selected' : '' }}>Dan 2</option>
                        <option value="Dan 3" {{ $pelatih->dan == 'Dan 3' ? 'selected' : '' }}>Dan 3</option>
                        <option value="Dan 4" {{ $pelatih->dan == 'Dan 4' ? 'selected' : '' }}>Dan 4</option>
                    </select>
                </div>

                <div>
                    <label for="pengcab" class=" text-sm font-medium mb-3">Pengcab</label>
                    <select id="pengcab" name="pengcab"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="Pengcab Medan" {{ $pelatih->pengcab == 'Pengcab Medan' ? 'selected' : '' }}>Pengcab Medan
                        </option>
                        <option value="Pengcab Deli Serdang" {{ $pelatih->pengcab == 'Pengcab Deli Serdang' ? 'selected' : '' }}>Pengcab Deli Serdang
                        </option>
                        <option value="Pengcab " {{ $pelatih->pengcab == 'Pengcab ' ? 'selected' : '' }}>Pengcab 
                        </option>
                    </select>
                </div>

                <div>
                    <label for="Status" class=" text-sm font-medium mb-3">Status</label>
                    <select id="Status" name="status"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option value="aktif" {{ $pelatih->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="tidak aktif" {{ $pelatih->status == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif
                        </option>
                    </select>
                </div>

                <div>
                    <label for="alamat" class=" text-sm font-medium mb-3">Alamat</label>
                    <textarea rows="3" id="alamat_editpelatih" name="alamat"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">{{ $pelatih->Alamat }}</textarea>
                        <p id="validasi-alamat-editpelatih" class="text-gray-600 text-xs mt-1">Masukkan alamat lengkap</p>
                        <span id="validasi-alamat-editpelatih"></span>
                </div>

                <div>
                    <label for="dojos" class=" text-sm font-medium mb-3">Dojo</label>
                    <ul>
                        @foreach ($dojos as $dojo)
                            <li>
                                <input type="checkbox" id="dojo_{{ $dojo->kode_dojo }}" name="dojos[]"
                                    value="{{ $dojo->kode_dojo }}"
                                    {{ in_array($dojo->kode_dojo, $associatedDojos) ? 'checked' : '' }}>
                                <label for="dojo_{{ $dojo->kode_dojo }}">{{ $dojo->nama_dojo }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="flex justify-center">
            <button id="update-btn" type="button" onclick="my_modal_update.showModal()" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm disabled:opacity-60" disabled>Perbarui</button>
            <button type="button" onclick="my_modal_batal.showModal()" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button>
            </div>
        </form>
    </div>

    {{-- modal validasi tambah --}}
<dialog id="my_modal_update" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="mt-6 flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-20 text-blue-700">
                <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                <path fill-rule="evenodd"
                    d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087ZM12 10.5a.75.75 0 0 1 .75.75v4.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 1 1 1.06-1.06l1.72 1.72v-4.94a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <h3 class="font-bold text-2xl text-center">Perbarui Data Pelatih</h3>
        <p class="py-4 mb-2 text-center text-black">Apakah anda yakin ingin memperbarui data?</p>
        <div class="modal-action flex justify-center text-black">
            <button class="btn bg-red-700 hover:bg-red-800 text-white" type="button" onclick="submitForm()">Ya,
                Perbarui Data</button>
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
        <h3 class="font-bold text-2xl text-center">Batalkan Perbarui Data</h3>
        <p class="py-4 mb-2 text-center text-black">Apakah Anda yakin ingin membatalkan perubahan data pelatih?</p>
        <div class="modal-action flex justify-center text-black">
            <button class="btn bg-red-700 hover:bg-red-800 text-white"><a href="{{route('admin.datapelatih')}}">Ya,
                    Batalkan Perubahan</a></button>
            <form method="dialog">
                <button class="btn bg-gray-300">Tidak, Kembali</button>
            </form>
        </div>
    </div>
</dialog>
{{-- modal validasi batal--}}

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('#edit-form [name]');
        const updateBtn = document.getElementById('update-btn');

        inputs.forEach(input => {
            input.addEventListener('input', function () {
                let isChanged = false;
                inputs.forEach(i => {
                    if (i.value !== i.getAttribute('data-original')) {
                        isChanged = true;
                    }
                });
                updateBtn.disabled = !isChanged;
            });
        });
    });

    function submitForm() {
        document.getElementById('edit-form').submit();
    }
</script>
@endsection
