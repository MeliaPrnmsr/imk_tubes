@extends('pelatih.p_layout')

@section('content')
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('asset/img/siluet8.jpg') }}');">
        <div class="bg-white bg-opacity-75 p-6 rounded-lg shadow-lg min-h-screen">
            <div class="mb-4">
                <h1 class="text-2xl font-bold mb-6">Jadwal Saya</h1>
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <form method="GET" action="{{ route('jadwal.index') }}">
                            <label for="dojo" class="mr-2 font-semibold text-sm md:text-xl">Pilih Dojo:</label>
                            <select id="dojo" name="dojo"
                                class="text-sm md:text-xl border border-gray-300 rounded-lg py-2 px-4 mr-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                                onchange="this.form.submit()">
                                <option value="all" {{ !isset($kode_dojo) || $kode_dojo == 'all' ? 'selected' : '' }}>
                                    All</option>
                                @foreach ($dojo as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($kode_dojo) && $kode_dojo == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_dojo }}</option>
                                @endforeach
                            </select>

                            <label for="bulan" class="mr-2 font-semibold text-sm md:text-xl">Pilih Bulan:</label>
                            <select id="bulan" name="bulan"
                                class="text-sm md:text-xl border border-gray-300 rounded-lg py-2 px-4 mr-4 focus:outline-none focus:ring-2 focus:ring-gray-700"
                                onchange="this.form.submit()">
                                <option value="">Pilih Bulan</option>
                                @foreach ($bulan as $item)
                                    <option value="{{ $item['value'] }}"
                                        {{ isset($selected_month) && $selected_month == $item['value'] ? 'selected' : '' }}>
                                        {{ $item['label'] }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-red-800 text-white">
                        <tr>
                            <th class="w-3/12 py-2">Hari</th>
                            <th class="w-3/12 py-2">Tanggal</th>
                            <th class="w-3/12 py-2">Waktu</th>
                            <th class="w-3/12 py-2">Dojo</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-900">
                        @foreach ($data as $item)
                            <tr class="bg-white border-b">
                                <td class="border px-4 py-2 text-center">{{ $item->catatan }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item->tanggal }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item->jam_mulai }} - {{ $item->jam_selesai }}
                                </td>
                                <td class="border px-4 py-2 text-center">{{ $item->dojo->nama_dojo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
