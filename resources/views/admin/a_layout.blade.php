<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset/img/logo_perguruan.png') }}" rel="shortcut icon" sizes="16x16 32x32">
    <link rel="stylesheet" href="{{ asset('asset/css/pagination.css')}}">
    <title>Elearning INSHOKAI</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-black dark:bg-black">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                {{-- Logo and sidebar button --}}
                <div class="flex items-center justify-start rtl:justify-end">
                    <a href="#" class="flex ms-2 md:me-24">
                        <img src="{{ asset('asset/img/logo_perguruan.png') }}" class="h-12 me-3" alt="Logo" />
                        <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap">INSHOKAI</span>
                    </a>
                </div>
                {{-- Logo and sidebar button END --}}

                {{-- icon --}}
                <div class="flex items-center ">
                    {{-- ICON --}}
                    <a href="javascript:void(0);"
                        class="flex rounded-full bg-gray-300 p-3 mx-1 hover:bg-red-700 hover:text-white tooltip tooltip-bottom"
                        data-tip="Mode Gelap">
                        <label class="swap swap-rotate">
                            <!-- moon icon -->
                            <svg id="darkModeBtn" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                            </svg>
                            <!-- sun icon -->
                            <svg id="lightModeBtn" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                            </svg>
                        </label>
                    </a>

                    <button onclick="my_modal_3.showModal()"
                        class="flex rounded-full bg-gray-300 p-3 mx-1 hover:bg-red-700 hover:text-white tooltip tooltip-bottom"
                        data-tip="Keluar">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </nav>

    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="my_modal_3" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="mt-6 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-20 text-red-700">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>

            </div>
            <h3 class="font-bold text-2xl text-center">Keluar Aplikasi</h3>
            <p class="py-4 mb-2 text-center text-black">Apakah anda yakin ingin keluar dari aplikasi?</p>
            <div class="modal-action flex justify-center text-black">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn bg-red-700 hover:bg-red-800 text-white" type="submit">Ya, Keluar</button>
                </form>
                <form method="dialog">
                    <button class="btn bg-gray-300">Tidak</button>
                </form>
            </div>
        </div>
    </dialog>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-18 h-screen pt-24 bg-white border-r border-black text-black flex-shrink-0 transition-all"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white flex flex-col justify-between">
            <ul class="space-y-3 font-medium">
                <li>
                    <a href="{{route('admin.dashboard')}}"
                        class=" flex items-center p-3 text-black rounded-xl hover:bg-red-700 hover:text-white {{ request()->routeIS('admin.dashboard') ? 'bg-red-700 text-white' : ' ' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <span data-toggle="extend" class="ms-2 overflow-y-auto hidden">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-3 text-black rounded-xl hover:bg-red-700 hover:text-white group
                    {{ request()->routeIs('admin.datamurid') || request()->routeIs('admin.datapelatih') || request()->routeIs('admin.datadojo') || request()->routeIs('admin.datajadwal') || request()->routeIs('admin.datamateri') ? 'bg-red-700 text-white' : '' }}"
                        onclick="dropdown()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>
                        <span data-toggle="extend" class="ms-2 overflow-y-auto hidden">Kelola Data</span>
                        <svg id="arrow" data-toggle="extend" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-1 w-4 h-4 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>
                </li>

                <div class="text-left mt-2 w-4/5 mx-auto hidden" id="sub-keloladata">
                    <h1
                        class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black {{ request()->routeIS('admin.datamurid') ? 'text-red-700 border-l-2 border-black' : ' ' }}">
                        <a href="{{route('admin.datamurid')}}">Murid</a>
                    </h1>
                    <h1
                        class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black {{ request()->routeIS('admin.datapelatih') ? 'text-red-700 border-l-2 border-black' : ' ' }}">
                        <a href="{{route('admin.datapelatih')}}">Pelatih</a>
                    </h1>
                    <h1
                        class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black {{ request()->routeIS('admin.datadojo') ? 'text-red-700 border-l-2 border-black' : ' ' }}">
                        <a href="{{route('admin.datadojo')}}">Dojo</a>
                    </h1>
                    <h1
                        class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black {{ request()->routeIS('admin.datajadwal') ? 'text-red-700 border-l-2 border-black' : ' ' }}">
                        <a href="{{route('admin.datajadwal')}}">Jadwal</a>
                    </h1>
                    <h1
                        class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black {{ request()->routeIS('admin.datamateri') ? 'text-red-700 border-l-2 border-black' : ' ' }}">
                        <a href="{{route('admin.datamateri')}}">Materi</a>
                    </h1>
                </div>

                <li>
                    <a href="{{route('admin.datapendaftaran')}}"
                        class="flex items-center p-3 text-black rounded-xl   hover:bg-red-700  hover:text-white  {{ request()->routeIS('admin.datapendaftaran') ? 'bg-red-700 text-white' : ' ' }}  group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                        </svg>
                        <span data-toggle="extend" class="ms-2 overflow-y-auto hidden">Pendaftaran</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.informasi')}}"
                        class="flex items-center p-3 text-black rounded-xl   hover:bg-red-700  hover:text-white  {{ request()->routeIS('admin.informasi') ? 'bg-red-700 text-white' : ' ' }}  group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                        </svg>
                        <span data-toggle="extend" class="ms-2 overflow-y-auto hidden">Informasi</span>
                    </a>
                </li>

                <div class="flex justify-center">
                    <label class="p-3 rounded-xl text-black swap swap-rotate hover:bg-red-700 hover:text-white">
                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" id="toggle-btn" class="hidden"/>
                        <!-- hamburger icon -->
                        <svg class="swap-off fill-current w-5  h-5 " xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                        </svg>

                        <!-- close icon -->
                        <svg class="swap-on fill-current w-5  h-5 " xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <polygon
                                points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                        </svg>
                    </label>
                </div>

            </ul>

        </div>

    </aside>

    {{-- MAIN CONTENT --}}
    <div class="py-4 ml-16">
        <div class="p-4 mt-14 mx-4 borde">
            @yield('content')
        </div>
    </div>
    {{-- MAIN CONTENT END --}}

    <script>
        document.getElementById('toggle-btn').addEventListener('click', function() {
            var sidebar = document.getElementById('logo-sidebar');
            var toggleElems = document.querySelectorAll('[data-toggle="extend"]');
            sidebar.classList.toggle('w-18');

            toggleElems.forEach(function(elem) {
                elem.classList.toggle('hidden');
            });

            if (!sidebar.classList.contains('w-18')) {
                document.getElementById('sub-keloladata').classList.add('hidden');
                document.getElementById('arrow').classList.remove('rotate-0');
            }
        });

        function dropdown() {
            var sidebar = document.getElementById('logo-sidebar');
            var subMenu = document.getElementById('sub-keloladata');
            var arrowIcon = document.getElementById('arrow');

            subMenu.classList.toggle('hidden');
            arrowIcon.classList.toggle('rotate-0');

            if (!subMenu.classList.contains('hidden')) {
                sidebar.classList.add('w-18');
                document.querySelectorAll('[data-toggle="extend"]').forEach(function(elem) {
                    elem.classList.remove('hidden');
                });
            }
        }
    </script>

    <script src="{{asset('asset/js/extend.js')}}"></script>
    <script src="{{asset('asset/js/regex-admin.js')}}"></script>
    <script src="{{asset('asset/js/jquery.js')}}"></script>




</body>

</html>