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
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
       defaultView: 'timeGridFourDay',
        views: {
          timeGridFourDay: {
            type: 'timeGrid',
            duration: { days: 10 },
            buttonText: '10 day'
          }
        },
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek,timeGridDay,listWeek'
      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
       eventDrop: function(info) {
        console.clear();
      },
      drop: function(arg ) {
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
      }

    });
    calendar.render();
});