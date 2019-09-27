  var calendar;

  document.addEventListener('DOMContentLoaded', function() {
    calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });


    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    calendar = new calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek,timeGridDay,listWeek'
      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
       eventDrop: function(info) {
        // var date = info.event.title + " was dropped on " + info.event.start.toISOString();
        // console.log(date);
        console.clear();
      },
      drop: function(arg ) 
      {
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
      }

    });
    calendar.render();
});