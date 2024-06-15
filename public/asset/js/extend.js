document.addEventListener('DOMContentLoaded', (event) => {
  console.log("DOM fully loaded and parsed");

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
  // FUNCTION UNTUK MENAMPILKAN JAM END

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

    document.getElementById("tanggal-hari").innerText = tanggalHari;
  }

  updateDate();
  // FUNCTION UNTUK MENAMPILKAN TANGGAL END

  //FUNCTION UNTUK MENAMPILKAN CALENDAR START
  function calendar() {
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
  }
  calendar();
  //FUNCTION UNTUK MENAMPILKAN CALENDAR END

});