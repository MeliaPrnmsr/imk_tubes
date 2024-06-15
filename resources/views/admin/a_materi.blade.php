@extends('admin.a_layout')

@section('content')
<div class="mt-2 mb-4 md:mb-8 md:mt-4 flex justify-between items-center">
    <h1 class="font-bold text-xl md:text-4xl md:font-bold">Materi</h1>
    <button class="bg-red-700 p-1 text-sm md:p-2 md:text-base rounded-lg text-white flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4 md:w-6 md:h-6 mr-1">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>

        Tambah Data
    </button>
</div>
<div class="grid md:grid-cols-3 gap-8 items-center">
    {{-- sabuk 1 --}}
    <div class="md:m-8">
        <div class="bg-red-700 p-4 flex justify-center rounded-lg mb-4">
            <img src="{{asset('asset/img/sabuk putih.png')}}" alt="" class="object-center w-auto h-28">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h4 class="p-2 font-semibold">Sabuk Putih</h4>
                <p class="p-2 font-light text-sm">Jumlah Materi</p>
            </div>
            <div>
                <button class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>

    {{-- sabuk 1 --}}
    <div class="md:m-8">
        <div class="bg-red-700 p-4 flex justify-center rounded-lg mb-4">
            <img src="{{asset('asset/img/sabuk putih.png')}}" alt="" class="object-center w-auto h-28">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h4 class="p-2 font-semibold">Sabuk Kuning</h4>
                <p class="p-2 font-light text-sm">Jumlah Materi</p>
            </div>
            <div>
                <button class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>

    {{-- sabuk 1 --}}
    <div class="md:m-8">
        <div class="bg-red-700 p-4 flex justify-center rounded-lg mb-4">
            <img src="{{asset('asset/img/sabuk putih.png')}}" alt="" class="object-center w-auto h-28">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h4 class="p-2 font-semibold">Sabuk Hijau</h4>
                <p class="p-2 font-light text-sm">Jumlah Materi</p>
            </div>
            <div>
                <button class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>

    {{-- sabuk 1 --}}
    <div class="md:m-8">
        <div class="bg-red-700 p-4 flex justify-center rounded-lg mb-4">
            <img src="{{asset('asset/img/sabuk putih.png')}}" alt="" class="object-center w-auto h-28">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h4 class="p-2 font-semibold">Sabuk Biru</h4>
                <p class="p-2 font-light text-sm">Jumlah Materi</p>
            </div>
            <div>
                <button class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>

    {{-- sabuk 1 --}}
    <div class="md:m-8">
        <div class="bg-red-700 p-4 flex justify-center rounded-lg mb-4">
            <img src="{{asset('asset/img/sabuk putih.png')}}" alt="" class="object-center w-auto h-28">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h4 class="p-2 font-semibold">Sabuk Coklat</h4>
                <p class="p-2 font-light text-sm">Jumlah Materi</p>
            </div>
            <div>
                <button class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>

    {{-- sabuk 1 --}}
    <div class="md:m-8">
        <div class="bg-red-700 p-4 flex justify-center rounded-lg mb-4">
            <img src="{{asset('asset/img/sabuk putih.png')}}" alt="" class="object-center w-auto h-28">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h4 class="p-2 font-semibold">Sabuk Hitam</h4>
                <p class="p-2 font-light text-sm">Jumlah Materi</p>
            </div>
            <div>
                <button class="btn btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                      </svg>
                      
                </button>
            </div>
        </div>
    </div>

</div>

@endsection