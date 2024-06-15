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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Tambah Pelatih</h1>
    </div>


    <div class="w-full">
        <form action="{{ route('admin.storepelatih') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="nama_pelatih" class="text-sm font-medium mb-3">Nama pelatih</label>
                    <input type="text" name="nama_pelatih" id="nama_pelatih"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Nama pelatih" required>
                </div>

                <div>
                    <label for="email" class="text-sm font-medium mb-3">Email</label>
                    <input type="email" name="email" id="email"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="email@example.com" required>
                </div>

                <div>
                    <label for="password" class="text-sm font-medium mb-3">Password</label>
                    <input type="password" name="password" id="password"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Password" required>
                </div>

                <div>
                    <label for="tgl_lahir" class="text-sm font-medium mb-3">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="no_telp" class="text-sm font-medium mb-3">Nomor Telepon</label>
                    <input type="number" name="no_telp" id="no_telp"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="082233445566" required>
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
                            <select name="dojo[]" class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
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
                    <textarea rows="3" name="alamat" id="alamat"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="jl. Kencana 1" required></textarea>
                </div>

                <div>
                    <label for="foto" class="text-sm font-medium mb-3">Foto</label>
                    <input type="file" id="foto" name="foto"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="status" class="text-sm font-medium mb-3">Status</label>
                    <select id="status" name="status"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option selected disabled value="">Pilih Status</option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Tidak Aktif</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Tambah</button>
                <button type="reset" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button>
            </div>
        </form>
    </div>

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
    </script>
@endsection
