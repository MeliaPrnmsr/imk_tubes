@extends('murid.m_layout')

@section('content')

<div class="bg-white p-4">
  <div class="container mx-auto bg-white px-3 py-2">
    <h2 class="text-2xl font-bold mb-4 text-left">Jadwal Saya</h2>
    <div class="mt-2 flex items-center justify-end rounded bg-white p-2 mb-4">
      {{--Membuat form yang dapat memilih berdasarkan value bulan dan mengirimnya berdasrkan method get url  --}}
      <form action="{{ url('murid/' . $murids->user_id . '/jadwal') }}" method="GET">
          <select name="month" id="monthSelect" class="form-select rounded p-1 bg-gray-200 text-red-700" onchange="location.href='{{ url('murid/' . $murids->user_id . '/jadwal') }}' + '/' + this.value;">
              <option value="">Semua</option>
              <option value="january">Januari</option>
              <option value="february">Februari</option>
              <option value="march">Maret</option>
              <option value="april">April</option>
              <option value="may">Mei</option>
              <option value="june">Juni</option>
              <option value="july">Juli</option>
              <option value="august">Agustus</option>
              <option value="september">September</option>
              <option value="october">Oktober</option>
              <option value="november">November</option>
              <option value="december">Desember</option>
          </select>
      </form>
    </div>
  
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-red-700 dark:text-gray-100">
          <tr>
            <th scope="col" class="py-3 px-6">Hari/Tanggal</th>
            <th scope="col" class="py-3 px-6">Waktu</th>
            <th scope="col" class="py-3 px-6">Tempat</th>
          </tr>
        </thead>
        <tbody>
          {{-- Looping jadwal yang tersedia berdasarkan kondisi --}}
          @foreach ($jadwals as $jadwal)
          <tr class="bg-white border-b dark:bg-gray-300 shadow-md dark:text-black">
            <td class="py-4 px-6">{{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, d M Y') }}</td>
            <td class="py-4 px-6">{{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</td>
            <td class="py-4 px-6">{{ $jadwal->dojo->nama_dojo }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil nama bulan dari URL
    const pathArray = window.location.pathname.split('/');
    const monthName = pathArray[pathArray.length - 1];

    // Set nilai dropdown sesuai dengan bulan yang dipilih
    if (monthName && monthName !== 'jadwal') {
      document.getElementById('monthSelect').value = monthName;
    }
  });
</script>

@endsection
