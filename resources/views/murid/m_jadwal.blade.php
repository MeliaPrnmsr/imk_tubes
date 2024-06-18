@extends('murid.m_layout')

@section('content')

<div class="text-black">
  <div class="px-3 py-2">
    <h2 class="text-4xl font-bold mb-4 text-center">Jadwal Saya</h2>

    <div class="mt-2 flex items-center justify-end rounded p-2 mb-4">

      <form action="{{ url('murid/' . $murids->user_id . '/jadwal') }}" method="GET">
        <select name="month" id="monthSelect" class="form-select rounded-md p-2 border border-black"
          onchange="location.href='{{ url('murid/' . $murids->user_id . '/jadwal') }}' + '/' + this.value;">
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

    <div class="overflow-x-auto relative shadow-md rounded-md">
      <table class="w-full text-sm text-left text-black dark:text-black">
        <thead class="text-lg text-black uppercase bg-gray-300">
          <tr>
            <th class="py-3 px-6">Hari/Tanggal</th>
            <th class="py-3 px-6">Waktu</th>
            <th class="py-3 px-6">Tempat</th>
            <th class="py-3 px-6">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jadwals as $jadwal)
          <tr class="border-bshadow-md">
            <td class="py-4 px-6">{{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l, d M Y') }}</td>
            <td class="py-4 px-6">{{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</td>
            <td class="py-4 px-6">{{ $jadwal->dojo->nama_dojo }}</td>
            <td class="py-4 px-6">
              <button class="bg-red-700 text-white hover:bg-red-800 p-3 rounded-lg">Detail</button>
            </td>
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