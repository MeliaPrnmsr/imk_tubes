@extends('murid.m_layout')

@section('content')

<div class="bg-gray-100 p-6">
  <div class="container mx-auto">
    <!-- Header -->
    <div class="mb-4">
      <h1 class="text-2xl font-bold">Materi</h1>
      <p class="text-gray-500">Semua Materi</p>
    </div>
    
    <!-- Search Bar and Filter Button -->
    <div class="flex items-center mb-6">
      <!-- Search Bar and Filter Button -->
    <form action="" method="get" class="relative w-full max-w-xs">
    <input type="text" name="keyword" placeholder="Cari Materi" class="w-full border rounded-lg py-2 px-4 pl-10 focus:ring-blue-500 focus:border-blue-500">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
    <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M10 2a8 8 0 016.32 12.905l4.387 4.386a1 1 0 01-1.414 1.415l-4.386-4.387A8 8 0 1110 2zm0 2a6 6 0 100 12A6 6 0 0010 4z"></path>
    </svg>
    </div>
    </form>

      {{-- <button class="ml-4 bg-gray-200 text-gray-700 py-2 px-4 rounded-lg flex items-center hover:bg-gray-300">
        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 4a8 8 0 100 16 8 8 0 000-16zm0 2a6 6 0 110 12A6 6 0 0112 6zm-1 1v4.586l-2.293-2.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L13 11.586V7a1 1 0 00-2 0z"></path>
        </svg>
        Semua
      </button> --}}
    </div>

    <div class="mt-2 flex items-center justify-end rounded bg-white p-2 mb-4">
      {{-- mengirim value agar dapat menampilkan materi berdasarkan sabuk kemudian mengirimnya dengan method get ke url --}}
      <form action="{{ url('murid/' . $murids->user_id . '/materi') }}" method="GET">
        <select name="sabuk" id="sabukSelect" class="form-select rounded p-1 bg-gray-200 text-red-700" onchange="if (this.value === '') { redirectToAllSabuk(); } else { if (this.value) window.location.href = '{{ url()->current() }}'.replace(/\/sabuk-.*/, '') + '/sabuk-' + this.value; }">
              <option value="">Semua Sabuk</option>
              <option value="putih">Sabuk Putih</option>
              <option value="kuning">Sabuk Kuning</option>
              <option value="hijau">Sabuk Hijau</option>
              <option value="biru">Sabuk Biru</option>
              <option value="coklat">Sabuk Coklat</option>
              <option value="hitam">Sabuk Hitam</option>
          </select>
      </form>
    </div>
    
  
  
  
  
    
    <!-- Kihon Section -->
    <div class="mb-6">
      <h2 class="text-xl font-bold mb-4">Kihon (Teknik Dasar)</h2>
      <div class="space-y-4">
        {{-- Melakukan iterasi melalui koleksi $materis, menyaring hanya elemen-elemen dengan kolom 'materi' yang bernilai 'kihon'.
              Kemudian, mengelompokkan elemen-elemen tersebut berdasarkan nilai kolom 'sub_materi', yang artinya elemen-elemen dengan nilai 
            'sub_materi' yang sama akan dikelompokkan bersama ke dalam array assosiative dengan variabel $subMateri.Setiap grup hasil pengelompokan akan disimpan dalam variabel $materiGroup yang berisi 
            semua elemen yang memiliki nilai 'sub_materi' yang sama. 
            --}}  
        @foreach ($materis->where('jenis_materi', 'kihon')->groupBy('judul_sub_materi') as $subMateri => $materiGroup)
        @php
        // Ambil materi dari salah satu item dalam grup
        $materiValue = null;
        $subMateriValue = null;
        foreach ($materiGroup as $materi) {
            $materiValue = $materi->jenis_materi;
            $subMateriValue = $materi->judul_sub_materi;
            break; // Keluar dari loop setelah mendapatkan nilai pertama
        }
      @endphp
        <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
          <div>
            <a href="/murid/{{ $murids->user_id }}/isi_materi/{{ $materiValue }}/{{ $subMateriValue  }}" class="font-semibold text-lg text-black hover:underline">{{ $subMateri }}</a>
            <p class="text-gray-600">
              {{ implode(', ', $materiGroup->pluck('judul_materi')->toArray()) }}
            </p>            
          </div>
          <button class="text-gray-600 hover:text-black">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
          </button>
        </div>
        @endforeach
      </div>
    </div>

    {{-- end kihon --}}

    <!-- Kumite Section -->
    <div class="mb-6">
      <h2 class="text-xl font-bold mb-4">Kumite</h2>
      <div class="space-y-4">
        @foreach ($materis->where('jenis_materi', 'kumite')->groupBy('judul_sub_materi') as $subMateri => $materiGroup)
        @php
        // Ambil materi dari salah satu item dalam grup
        $materiValue = null;
        $subMateriValue = null;
        foreach ($materiGroup as $materi) {
            $materiValue = $materi->jenis_materi;
            $subMateriValue = $materi->judul_sub_materi;
            break; // Keluar dari loop setelah mendapatkan nilai pertama
        }
      @endphp
        <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
          <div>
            <a href="/murid/{{ $murids->user_id }}/isi_materi/{{ $materiValue }}/{{ $subMateriValue  }}" class="font-semibold text-lg text-black hover:underline">{{ $subMateri }}</a>
            <p class="text-gray-600">
              {{ implode(', ', $materiGroup->pluck('judul_materi')->toArray()) }}
            </p>            
          </div>
          <button class="text-gray-600 hover:text-black">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
          </button>
        </div>
        @endforeach
      </div>
    </div>

{{-- end kumite --}}

<!-- Kata Section -->
<div class="mb-6">
  <h2 class="text-xl font-bold mb-4">Kata</h2>
  <div class="space-y-4">
    @foreach ($materis->where('jenis_materi', 'kata')->groupBy('judul_sub_materi') as $subMateri => $materiGroup)
        @php
        // Ambil materi dari salah satu item dalam grup
        $materiValue = null;
        $subMateriValue = null;
        foreach ($materiGroup as $materi) {
            $materiValue = $materi->jenis_materi;
            $subMateriValue = $materi->judul_sub_materi;
            break; // Keluar dari loop setelah mendapatkan nilai pertama
        }
      @endphp
    <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
      <div>
        <a  href="/murid/{{ $murids->user_id }}/isi_materi/{{ $materiValue }}/{{ $subMateriValue  }}" class="font-semibold text-lg text-black hover:underline">{{ $subMateri }}</a>
        <p class="text-gray-600">
          {{ implode(', ', $materiGroup->pluck('judul_materi')->toArray()) }}
        </p>            
      </div>
      <button class="text-gray-600 hover:text-black">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
      </button>
    </div>
    @endforeach
  </div>
</div>
    
{{-- end kata --}}
   
  </div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil nama sabuk dari URL
    const pathArray = window.location.pathname.split('/');
    const sabukName = pathArray[pathArray.length - 1];

    // Set nilai dropdown sesuai dengan sabuk yang dipilih
    if (sabukName && sabukName !== 'materi') {
      // Hapus awalan "sabuk-" dari nama sabuk yang diambil dari URL
      const selectedSabuk = sabukName.replace('sabuk-', '');
      // Set nilai dropdown sesuai dengan nama sabuk yang dipilih
      document.getElementById('sabukSelect').value = selectedSabuk;
    }
  });

  // Fungsi untuk mengarahkan kembali ke URL awal saat opsi "Semua Sabuk" dipilih
  function redirectToAllSabuk() {
    window.location.href = '{{ url()->current() }}'.replace(/\/sabuk-.*/, '');
  }
</script>




@endsection
    