let selectedDate;
  let events = [];
  let currentMonth = new Date().getMonth();
  let currentYear = new Date().getFullYear();

  function showEventInput(date) {
    selectedDate = date;
    document.getElementById('event-date').value = date;
    document.getElementById('event-input').style.display = 'block';
  }

  function addEvent() {
    const eventDescription = document.getElementById('event-description').value;
    if (eventDescription.trim() !== "") {
      events.push({ date: selectedDate, description: eventDescription });
      document.getElementById('event-description').value = ''; // Limpar a caixa de texto
    }
  }

  function finishAddingEvents() {
    if (events.length > 0) {
      // Armazenar os eventos em localStorage para acessar na próxima página
      localStorage.setItem('events', JSON.stringify(events));
      
      // Redirecionar para a página de verificação de eventos
      window.location.href = 'vereventos.php';
    }
  }

  function generateCalendar() {
    const firstDay = new Date(currentYear, currentMonth, 1);
    const lastDay = new Date(currentYear, currentMonth + 1, 0);
    const daysInMonth = lastDay.getDate();

    const tableBody = document.getElementById('calendar-body');
    tableBody.innerHTML = ''; // Limpe o conteúdo anterior

    document.getElementById('month-year').textContent = `${getMonthName(currentMonth)} ${currentYear}`;

    let day = 1;
    for (let i = 0; i < 6; i++) {
      const row = tableBody.insertRow();

      for (let j = 0; j < 7; j++) {
        if (i === 0 && j < firstDay.getDay()) {
          const cell = row.insertCell();
          cell.textContent = "";
        } else if (day > daysInMonth) {
          break;
        } else {
          const cell = row.insertCell();
          cell.textContent = day;

          const date = new Date(currentYear, currentMonth, day);
          cell.addEventListener('click', () => showEventInput(date.toLocaleDateString()));

          day++;
        }
      }
    }
  }

  function getMonthName(month) {
    const monthNames = [
      "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
      "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];
    return monthNames[month];
  }

  function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    generateCalendar();
  }

  function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    generateCalendar();
  }

  generateCalendar();