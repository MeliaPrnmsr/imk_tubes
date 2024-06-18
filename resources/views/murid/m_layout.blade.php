<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset/img/logo_perguruan.png') }}" rel="shortcut icon" sizes="16x16 32x32">
    <title>Elearning INSHOKAI</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
                    <a href="/" class="flex ms-2 md:me-24">
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


                    @isset(auth()->user()->id)
                        <a href="/murid/{{ auth()->user()->id }}/profile"
                            class="flex rounded-full bg-gray-300 p-3 mx-1 hover:bg-red-700 hover:text-white tooltip tooltip-bottom dark:bg-black"
                            data-tip="Profil">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </a>
                    @endisset
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


    @isset($murids)
        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-18 h-screen pt-24  bg-white border-r border-black text-white flex-shrink-0 transition-all"
            aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y q-auto bg-white flex flex-col justify-between">
                <ul class="space-y-3 font-medium">
                    <li>

                        <a href="{{ route('murid.dashboard', ['users_id' => auth()->user()->id]) }}"
                            class="flex items-center p-3 text-black rounded-xl  hover:bg-red-700  hover:text-white group {{ request()->routeIS('murid.dashboard') ? 'bg-red-700 text-white' : ' ' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Dashboard</span>
                        </a>
                    </li>

                    <li>

                        <a href="{{ route('murid.jadwal', ['users_id' => auth()->user()->id]) }}"
                            class="flex items-center p-3 text-black rounded-xl  hover:bg-red-700  hover:text-white group {{ request()->routeIS('murid.jadwal') ? 'bg-red-700 text-white' : ' ' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Jadwal</span>
                        </a>

                    </li>

                    <li>
                        <a href="{{ route('murid.materi', ['users_id' => auth()->user()->id]) }}"
                            class="flex items-center p-3 text-black rounded-xl hover:bg-red-700  hover:text-white group {{ request()->routeIS('murid.materi') ? 'bg-red-700 text-white' : ' ' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Materi</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('forum', ['users_id' => auth()->user()->id]) }}"
                            class="flex items-center p-3 text-black rounded-xl hover:bg-red-700  hover:text-white group {{ request()->routeIS('forum') ? 'bg-red-700 text-white' : ' ' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                            </svg>
                            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Evaluasi</span>
                        </a>
                    </li>

                    <div class="flex justify-center">
                        <label class="p-3 rounded-xl text-black swap swap-rotate hover:bg-red-700 hover:text-white">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" class="hidden" id="toggle-btn" />
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
    @endisset


    {{-- MAIN CONTENT --}}
    <div class="py-4 ml-16">
        <div class="p-4 mt-14 ml-0 md:ml-4">
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 md:mb-4">

                {{-- CONTENT START --}}
                <div class="col-span-2 items-center justify-center h-full ">
                    @yield('content')
                </div>
                {{-- CONTENT END --}}


                {{-- CALENDAR SIDE --}}
                <div class="items-center justify-center mt-4 md:mt-0">
                    {{-- event side --}}
                    <div class="px-4 mt-0 md:mt-4 text-black">
                        <div class="bg-gray-200 rounded-lg p-4 shadow-lg">
                            <h3 class="font-bold text-xl text-center border-b border-gray-500 p-2">Event Mendatang</h3>

                            @foreach ($upcomingEvents as $item)
                                <div class="p-2 bg-white my-3 rounded-lg">
                                    <h3 class="font-semibold text-lg my-2">{{$item->nama_informasi}}</h3>
                                    <p class="font-light text-sm">{{$item->tanggal_informasi}}</p>
                                </div>
                            @endforeach

                            {{-- <div class="p-2 bg-white my-3 rounded-lg">
                                <h3 class="font-semibold text-lg my-2">Event 2</h3>
                                <p class="font-light text-sm">00/00/0000</p>
                            </div>

                            <div class="p-2 bg-white my-3 rounded-lg">
                                <h3 class="font-semibold text-lg my-2">Event 3</h3>
                                <p class="font-light text-sm">00/00/0000</p>
                            </div> --}}
                        </div>
                    </div>
                    {{-- event end --}}

                    {{-- calendar side --}}
                    <div class="px-4 mt-6">
                        <div class="bg-black rounded-lg shadow-lg p-4 w-full">
                            <div class="flex justify-between items-center mb-4">
                                <button id="prevMonth" class="text-gray-400 hover:text-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <div id="monthYear" class="text-lg font-medium text-gray-200"></div>
                                <button id="nextMonth" class="text-gray-400 hover:text-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                            <div class="grid grid-cols-7 gap-2 text-center text-gray-300">
                                <div>S</div>
                                <div>M</div>
                                <div>T</div>
                                <div>W</div>
                                <div>T</div>
                                <div>F</div>
                                <div>S</div>
                            </div>
                            <div id="calendar" class="grid grid-cols-7 gap-2 mt-2 text-center text-white"></div>
                        </div>
                    </div>
                    {{-- calendar end --}}

                </div>
                {{-- CALENDAR SIDE --}}
                {{-- CALENDAR SIDE --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/js/extend.js') }}"></script>
    <script src="{{ asset('asset/js/regex-admin.js') }}"></script>
    <script>
        document.getElementById('toggle-btn').addEventListener('click', function() {
            var sidebar = document.getElementById('logo-sidebar');
            var toggleElems = document.querySelectorAll('[data-toggle="extend"]');
            sidebar.classList.toggle('w-18');

            toggleElems.forEach(function(elem) {
                elem.classList.toggle('hidden');
            });
        });

        //FUNCTION UNTUK MENAMPILKAN CALENDAR START

        const monthYearElement = document.getElementById('monthYear');
        const calendarElement = document.getElementById('calendar');
        const prevMonthButton = document.getElementById('prevMonth');
        const nextMonthButton = document.getElementById('nextMonth');

        let currentDate = new Date();

        function renderCalendar(date) {
            const year = date.getFullYear();
            const month = date.getMonth();
            const today = new Date();

            // Get the first and last day of the month
            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();
            const prevLastDate = new Date(year, month, 0).getDate();

            // Set month and year in header
            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ];
            monthYearElement.textContent = `${monthNames[month]} ${year}`;

            // Clear previous calendar content
            calendarElement.innerHTML = '';

            // Fill in the dates
            // Previous month's dates
            for (let i = firstDay; i > 0; i--) {
                calendarElement.innerHTML += `<div class="text-gray-400">${prevLastDate - i + 1}</div>`;
            }

            // Current month's dates
            for (let i = 1; i <= lastDate; i++) {
                const isToday = i === today.getDate() && month === today.getMonth() && year === today.getFullYear();
                const className = isToday ? 'bg-red-700 text-white rounded-full' : '';

                calendarElement.innerHTML += `<div class="${className}">${i}</div>`;
            }

            // Next month's dates to fill the last row
            const nextDays = 42 - (firstDay + lastDate);
            for (let i = 1; i <= nextDays; i++) {
                calendarElement.innerHTML += `<div class="text-gray-400">${i}</div>`;
            }
        }

        prevMonthButton.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar(currentDate);
        });

        nextMonthButton.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar(currentDate);
        });

        renderCalendar(currentDate);
    </script>


</body>

</html>
