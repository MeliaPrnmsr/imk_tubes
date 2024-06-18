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

        <h1 class="font-bold text-xl md:text-3xl md:font-bold">Edit Jadwal</h1>
    </div>

    <div class="w-full">
        <form action="">
            @csrf
            <div class="grid md:grid-cols-2 gap-6 p-6">

                <div>
                    <label for="tanggal" class=" text-sm font-medium mb-3">Tanggal</label>
                    <input read-only type="date" id="tanggal"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        value="{{ $jadwal->tanggal }}">
                </div>

                <div>
                    <label for="tgl_lahir" class=" text-sm font-medium mb-3">Dojo</label>
                    <input read-only type="text" id="tanggal"
                        class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                        value="{{ $jadwal->dojo->nama_dojo }}">
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
                            <input read-only type="time" id="start-time"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                min="09:00" max="18:00" value="{{ $jadwal->jam_mulai }}" required />
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
                            <input read-only type="time" id="end-time"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                min="09:00" max="18:00" value="{{ $jadwal->jam_selesai }}" required />
                        </div>
                    </div>
                </div>

                <div>
                    <label for="tempat" class=" text-sm font-medium mb-3">Tempat</label>
                    <input read-only type="text" id="tempat" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none " value="{{ $jadwal->tempat }}" required>
                </div>

                <div>
                    <label for="catatan" class=" text-sm font-medium mb-3">Catatan</label>
                    <textarea read-only rows="3" id="catatan" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none " required>{{ $jadwal->catatan }}</textarea>
                </div>

            </div>

            <div class="flex justify-center">
                <a href="{{ route('edit.jadwal', ['id' => $jadwal->kode_jadwal]) }}" class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-center">Perbarui</a>
                <a href="{{route('admin.datajadwal')}}" class="bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-center">Tutup</a>
            </div>
        </form>
    </div>
    </div>
@endsection
