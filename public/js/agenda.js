document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('agenda');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",

      headerToolbar: {
          left: 'prev,nex today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,listWeek'
      },

      dateClick:function(info){
          $("#evento").modal("show");
      }

    });
    calendar.render();
  }); 