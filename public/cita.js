
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('cita');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",
      
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      
    });

    calendar.render();
  });