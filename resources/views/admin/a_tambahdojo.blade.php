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
  <h1 class="font-bold text-xl md:text-3xl md:font-bold">Tambah Dojo</h1>
</div>

<div class="w-full">
  <form action="/admin/storedojo" method="POST">
    @csrf
    <div class="grid md:grid-cols-2 gap-6 p-6">
      <div>
        <label for="nama_dojo" class=" text-sm font-medium mb-3">Nama Dojo</label>
        <input type="text" id="nama_dojo" name="nama_dojo"
          class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
          placeholder="Nama Dojo">
      </div>

      <div>
        <label for="tgl_dibentuk" class=" text-sm font-medium mb-3">Tanggal Dibentuk</label>
        <input type="date" id="tgl_dibentuk" name="tanggal_berdiri"
          class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
          placeholder="Nama Dojo">
      </div>

      <div>
        <label for="pengcab" class=" text-sm font-medium mb-3">Pengcab</label>
        <select id="pengcab" name="pengcab"
          class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
          required>
          <option selected disabled value="">Pilih Pengcab</option>
          <option>Pengcab A</option>
          <option>Pengcab B</option>
          <option>Pengcab C</option>
          <option>Pengcab D</option>
        </select>
      </div>

      <div>
        <label for="alamat" class=" text-sm font-medium mb-3">Alamat</label>
        <textarea rows="3" id="alamat" name="alamat_dojo"
          class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
          placeholder="jl. Kencana 1"></textarea>
      </div>

      <input type="hidden" name="status" value="aktif">

    </div>

    <div class="flex justify-center">
      <button class="bg-red-700 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Tambah</button>
      <a href="/admin/datadojo" class="text-center bg-gray-500 p-3 m-2 rounded-lg text-white md:w-1/5 text-sm">Batal</a>
    </div>
  </form>
</div>
</div>
@endsection