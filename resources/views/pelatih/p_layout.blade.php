<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('asset/img/logo_perguruan.png') }}" rel="shortcut icon" sizes="16x16 32x32">
  <title>Elearning INSHOKAI</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body class="font-poppins">

  <nav class="fixed top-0 z-50 w-full bg-white border-b border-black">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        {{-- Logo and sidebar button --}}
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="#" class="flex ms-2 md:me-24">
            <img src="{{ asset('asset/img/logo_perguruan.png') }}" class="h-12 me-3" alt="Logo" />
            <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap">INSHOKAI</span>
          </a>
        </div>
        {{-- Logo and sidebar button END --}}

        {{-- icon --}}
        <div class="flex items-center ">
          {{-- ICON --}}
          <a href="#" class="flex text-sm border-black border rounded-md p-1 mx-1">
            <label class="swap swap-rotate">
              <!-- this hidden checkbox controls the state -->
              <input type="checkbox" class="theme-controller" value="synthwave" />
              <!-- moon icon -->
              <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
              <!-- sun icon -->
              <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
            </label>
          </a>

          <a href="#" class="flex text-sm border-black border rounded-md p-1 mx-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </a>

          <a href="#" class="flex text-sm border-black border rounded-md p-1 mx-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
          </a>

          <form action="/logout" method="POST" class="flex text-sm border-black border rounded-md p-1 mx-1">
            <button>
                @csrf
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
            </button>
        </form>
        </div>
      </div>

    </div>
  </nav>

  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-18 h-screen pt-24  bg-gray-200 text-white flex-shrink-0 transition-all"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-200 flex flex-col justify-between">
      <ul class="space-y-3 font-medium">
        <li>
          <a href="/pelatih/dashboard"
            class="flex items-center p-3 text-black rounded-2xl  hover:bg-red-700  hover:text-white active:bg-red-700  active:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5 flex-shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Dashboard</span>
          </a>
        </li>

        <li>
          <a href="/pelatih/jadwal"
            class="flex items-center p-3 text-black rounded-2xl  hover:bg-red-700  hover:text-white  active:bg-red-700  active:text-white  group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5 flex-shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
            </svg>
            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Jadwal</span>
          </a>
        </li>

        <li>
          <a href="#"
            class="flex items-center p-3 text-black rounded-2xl hover:bg-red-700 hover:text-white active:bg-red-700 active:text-white group"
            onclick="dropdown()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5 flex-shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
            </svg>
            <span data-toggle="extend" class="ms-2 overflow-y-auto hidden">Kelola Data</span>
            <svg id="arrow" data-toggle="extend" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="ml-1 w-4 h-4 hidden">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </a>
        </li>

        <div class="text-left mt-2 w-4/5 mx-auto hidden" id="sub-keloladata">
          <h1 class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black"><a href="/pelatih/datamurid">Murid</a></h1>
          <h1 class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black"><a href="/pelatih/absensi">Absensi</a></h1>
          <h1 class="text-black p-2 hover:text-red-700 hover:border-l-2 hover:border-black"><a href="/pelatih/evaluasi">Evaluasi</a>
          </h1>
        </div>

        {{-- <li>
          <a href="/pelatih/sertifikat"
            class="flex items-center p-3 text-black rounded-2xl   hover:bg-red-700  hover:text-white  active:bg-red-700  active:text-white  group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5 flex-shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
            </svg>
            <span data-toggle="extend" class="ms-3 overflow-y-auto hidden">Sertifikat</span>
          </a>
        </li> --}}

        <div class="flex justify-center">
          <label class="btn btn-circle swap swap-rotate hover:bg-red-700 hover:text-white" >
            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" id="toggle-btn"/>
            <!-- hamburger icon -->
            <svg class="swap-off fill-current w-5  h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>
            
            <!-- close icon -->
            <svg class="swap-on fill-current w-5  h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
          </label>
        </div>

      </ul>



    </div>

  </aside>

  {{-- MAIN CONTENT --}}
  <div class="py-4 ml-16">
    <div class="p-4 mt-14">
      <div class="grid md:grid-cols-3 md:gap-4 md:mb-4">

        {{-- CONTENT START --}}
        <div class="col-span-2 items-center justify-center h-full ">
          @yield('content')
        </div>
        {{-- CONTENT END --}}


        {{-- CALENDAR SIDE --}}
        <div class="items-center justify-center h-full mt-4 md:mt-0">
          {{-- jangan di isi, ini akan di copy untuk murid dan guru --}}
          <p>even test</p>
        </div>
        {{-- CALENDAR SIDE --}}
      </div>
    </div>
  </div>

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
  <script src="{{asset('asset/js/jquery.js')}}"></script>


</body>

</html>