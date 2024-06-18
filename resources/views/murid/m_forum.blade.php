@extends('murid.m_layout')

@section('content')
<div class="mt-4">
    <h1 class="text-4xl text-left text-black font-bold mb-4 mt-4">Diskusi</h1>
</div>

<div>
    <div class="bg-white rounded-lg shadow-lg p-6 mb-4 h-80 overflow-y-auto overflow-hidden">
        @foreach($interaksis as $interaksi)
        <div class="mb-4">
            <div class="{{ $interaksi->users_id_1 == $users_id ? 'bg-blue-100' : 'bg-green-100' }} p-4 rounded-lg">
                <p class="text-sm text-gray-700">{{ $interaksi->pengirim->name }}: {{ $interaksi->isi_pesan }}</p>
                <span class="text-xs text-gray-500">{{ $interaksi->created_at->format('h:i A') }}</span>
            </div>
        </div>
        @endforeach
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6 mb-4 h-80 overflow-y-auto overflow-hidden">
        @foreach($interaksis as $interaksi)
        <div class="mb-4">
            <div class="{{ $interaksi->users_id_1 == $users_id ? 'bg-blue-100' : 'bg-green-100' }} p-4 rounded-lg">
                <p class="text-sm text-gray-700">{{ $interaksi->pengirim->name }}: {{ $interaksi->isi_pesan }}</p>
                <span class="text-xs text-gray-500">{{ $interaksi->created_at->format('h:i A') }}</span>
            </div>
        </div>
        @endforeach
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 justify-between flex items-center">
        <form action="{{ route('forum2', ['users_id' =>$users_id]) }}" method="POST" class="w-full flex items-center">
            @csrf
            <textarea name="isi_pesan" placeholder="Ketik pesan Anda..."
                class="border-gray-300 rounded-lg shadow-sm w-full mr-2"></textarea>
            <button type="submit" class="bg-blue-500 text-white px-2 py-2 rounded-full hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>

            </button>
        </form>
    </div>
</div>

<div class="mt-8">
    <a href="{{route('murid.dashboard')}}" class="p-3 bg-gray-300">Tutup</a>
</div>
@endsection
