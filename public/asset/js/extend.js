document.addEventListener('DOMContentLoaded', (event) => {
  console.log("DOM fully loaded and parsed");

  // FUNCTION UNTUK MENAMPILKAN JAM START
  // FUNCTION UNTUK MENAMPILKAN JAM START
  function updateTime() {
    console.log("updateTime called");
    var currentTime = new Date();

    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;

    var timeString = hours + ":" + minutes + ":" + seconds;

    var deviceTimeElement = document.getElementById("device-time");
    if (deviceTimeElement) {
      deviceTimeElement.textContent = timeString;
    } else {
      console.log("Element with ID 'device-time' not found");
    }
  }

  updateTime();
  setInterval(updateTime, 1000);

  // FUNCTION UNTUK MENAMPILKAN TANGGAL START
  // FUNCTION UNTUK MENAMPILKAN TANGGAL START
  function updateDate() {
    const namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    const namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    const sekarang = new Date();

    const hari = namaHari[sekarang.getDay()];
    const tanggal = sekarang.getDate();
    const bulan = namaBulan[sekarang.getMonth()];
    const tahun = sekarang.getFullYear();

    const tanggalHari = `${hari}, ${tanggal} ${bulan} ${tahun}`;

    var tanggalHariElement = document.getElementById("tanggal-hari");
    if (tanggalHariElement) {
      tanggalHariElement.innerText = tanggalHari;
    } else {
      console.log("Element with ID 'tanggal-hari' not found");
    }
  }

  updateDate();

  // FUNCTION UNTUK MENGATUR TIME SESSION
  // FUNCTION UNTUK MENGATUR TIME SESSION
  var sessionAlert = document.getElementById('session');
  if (sessionAlert) {
    console.log("Session alert found");
    // Set timeout untuk menyembunyikan elemen setelah 5 detik
    setTimeout(function () {
      sessionAlert.style.display = 'none';
    }, 5000); // 5000 milidetik = 5 detik
  } else {
    console.log("Element with ID 'session' not found");
  }

  // FUNCTION UNTUK DARK MODE
  // FUNCTION UNTUK DARK MODE
  const darkModeBtn = document.getElementById('darkModeBtn');
  const lightModeBtn = document.getElementById('lightModeBtn');

  function changeToDark() {
    lightModeBtn.classList.remove('hidden');
    darkModeBtn.classList.add('hidden');
    document.documentElement.classList.add('dark');
    localStorage.setItem('darkMode', 'true');
  }

  function changeToLight() {
    darkModeBtn.classList.remove('hidden');
    lightModeBtn.classList.add('hidden');
    document.documentElement.classList.remove('dark');
    localStorage.setItem('darkMode', 'false');
  }

  darkModeBtn.onclick = function () {
    changeToDark();
  };
  lightModeBtn.onclick = function () {
    changeToLight();
  };

  const isDarkMode = localStorage.getItem('darkMode') === 'true';
  if (isDarkMode) {
    changeToDark();
  } else {
    changeToLight();
  }

  // FUNCTION UNTUK TOMBOL DISABLED TAMBAH
  // FUNCTION UNTUK TOMBOL DISABLED TAMBAH
  const form = document.getElementById('validasi-form');
  const inputs = form.querySelectorAll('input[required], select[required]');
  const tambahBtn = document.getElementById('validasi-btn');

  function validateForm() {
    let valid = true;
    inputs.forEach(input => {
      const span = document.getElementById(`validasi-${input.id}`);
      if (!input.value || (span && span.textContent === "Invalid")) {
        valid = false;
      }
    });
    tambahBtn.disabled = !valid;
  }

  inputs.forEach(input => {
    input.addEventListener('input', validateForm);
  });

  validateForm(); // initial check     
  
  // FUNCTION UNTUK TOMBOL DISABLED TAMBAH
  // FUNCTION UNTUK TOMBOL DISABLED TAMBAH
  // const inputsup = document.querySelectorAll('#edit-form [name]');
  // const updateBtn = document.getElementById('update-btn');

  // inputsup.forEach(input => {
  //     input.addEventListener('input', function () {
  //         let isChanged = false;
  //         inputsup.forEach(i => {
  //             if (i.value !== i.getAttribute('data-original')) {
  //                 isChanged = true;
  //             }
  //         });
  //         updateBtn.disabled = !isChanged;
  //     });
  // });

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
      const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
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
});
  