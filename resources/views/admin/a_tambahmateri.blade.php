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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Tambah Materi</h1>
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
        <form action="{{ route('materi.input') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">
                <div>
                    <label for="sabuk" class="text-sm font-medium mb-3">Sabuk</label>
                    <select id="sabuk" name="sabuk"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        @foreach ($sabuk as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="jenis_materi" class="text-sm font-medium mb-3">Jenis Materi</label>
                    <select id="jenis_materi" name="jenis_materi"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                        <option selected disabled value="">Pilih Jenis Materi</option>
                        <option value="kihon">Kihon</option>
                        <option value="kumite">Kumite</option>
                        <option value="kata">Kata</option>
                    </select>
                </div>

                <div>
                    <label for="judul_materi" class="text-sm font-medium mb-3">Judul Materi</label>
                    <input type="text" id="judul_materi" name="judul_materi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Judul Materi" required>
                </div>

                <div>
                    <label for="judul_sub_materi" class="text-sm font-medium mb-3">Judul Sub Materi</label>
                    <input type="text" id="judul_sub_materi" name="judul_sub_materi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Judul Sub Materi" required>
                </div>

                <div>
                    <label for="deskripsi_materi" class="text-sm font-medium mb-3">deskripsi materi</label>
                    <input type="text" id="deskripsi_materi" name="deskripsi_materi"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Judul Sub Materi" required>
                </div>
            </div>

            <div id="steps-container" class="mx-6">
                <label for="isi_materi" class="text-sm font-medium mb-3">Isi Materi</label>
                <!-- Initial step input group -->
                <div class="step-group mb-4 p-4 bg-gray-50 rounded shadow flex flex-col space-y-2">
                    <div class="flex items-center space-x-2">
                        <span class="step-number bg-gray-300 text-black font-bold py-1 px-3 rounded-full">1</span>
                        <input type="text" name="sub_materi[]" class="flex-1 p-2 border border-gray-300 rounded"
                            placeholder="Sub Materi..." required>
                        <input type="text" name="isi_materi[]" class="flex-1 p-2 border border-gray-300 rounded"
                            placeholder="Isi Materi..." required>
                        <input type="text" name="link_youtube[]"
                            class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Link YouTube (optional)">
                    </div>
                    <input type="file" name="foto[]"
                        class="custom-file-input block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                </div>
            </div>

            <button type="button" id="add-step-button"
                class="mt-4 mx-6 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">+ Langkah</button>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Tambah</button>
                <button type="reset" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('add-step-button').addEventListener('click', function() {
            const stepsContainer = document.getElementById('steps-container');
            const stepCount = stepsContainer.getElementsByClassName('step-group').length + 1;

            const newStepGroup = document.createElement('div');
            newStepGroup.className = 'step-group mb-4 p-4 bg-gray-50 rounded shadow flex flex-col space-y-2';
            newStepGroup.innerHTML = `
                <div class="flex items-center space-x-2">
                    <span class="step-number bg-gray-300 text-black font-bold py-1 px-3 rounded-full">${stepCount}</span>
                    <input type="text" name="sub_materi[]" class="flex-1 p-2 border border-gray-300 rounded"
                        placeholder="Sub Materi..." required>
                    <input type="text" name="isi_materi[]" class="flex-1 p-2 border border-gray-300 rounded"
                        placeholder="Isi Materi..." required>
                    <input type="text" name="link_youtube[]" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Link YouTube (optional)">
                </div>
                <input type="file" name="foto[]" class="custom-file-input block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
            `;

            stepsContainer.appendChild(newStepGroup);
        });
    </script>
@endsection
