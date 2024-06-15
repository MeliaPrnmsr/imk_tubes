{{-- @extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
            <h1 class="text-2xl font-bold">Forum Diskusi Pribadi</h1>
            <p class="text-gray-600">Berdiskusi dengan Murid disini</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-4 h-96 overflow-y-auto">
            @foreach($interaksis as $interaksi)
                <div class="mb-4">
                    <div class="{{ $interaksi->users_id_1 == Auth::id() ? 'bg-blue-100' : 'bg-green-100' }} p-4 rounded-lg">
                        <p class="text-sm text-gray-700">{{ $interaksi->pengirim->name }}: {{ $interaksi->isi_pesan }}</p>
                        <span class="text-xs text-gray-500">{{ $interaksi->created_at->format('h:i A') }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 flex items-center">
            <form action="{{ route('evaluasi2') }}" method="POST">
                @csrf
                <input type="text" name="isi_pesan" placeholder="Ketik pesan Anda..."
                    class="flex-grow border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 mr-2">
                <input type="hidden" name="users_id_2" value="ID_MURID"> <!-- Ganti dengan ID murid yang sesuai -->
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Kirim</button>
            </form>
        </div>
    </div>
@endsection --}}



@extends('pelatih.p_layout')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
            <h1 class="text-2xl font-bold">Forum Diskusi Pribadi</h1>
            <p class="text-gray-600">Berdiskusi dengan Murid disini</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 mb-4 h-96 overflow-y-auto">
            @foreach($interaksis as $interaksi)
                <div class="mb-4">
                    <div class="{{ $interaksi->users_id_1 == $user_id ? 'bg-blue-100' : 'bg-green-100' }} p-4 rounded-lg">
                        <p class="text-sm text-gray-700">{{ $interaksi->pengirim->name }}: {{ $interaksi->isi_pesan }}</p>
                        <span class="text-xs text-gray-500">{{ $interaksi->created_at->format('h:i A') }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 flex items-center">
            <form action="{{ route('evaluasi2') }}" method="POST">
                @csrf
                <input type="text" name="isi_pesan" placeholder="Ketik pesan Anda..."
                    class="flex-grow border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 mr-2">
                <input type="hidden" name="users_id_1" value="{{ $user_id }}"> <!-- ID pelatih -->
                <input type="hidden" name="users_id_2" value="1"> <!-- ID murid, ganti dengan ID yang sesuai -->
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Kirim</button>
            </form>
        </div>
    </div>
@endsection
