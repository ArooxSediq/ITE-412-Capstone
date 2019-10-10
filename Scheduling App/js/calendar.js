  var calendar;

  document.addEventListener('DOMContentLoaded', function()
  {
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
      },

    });


    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    calendar = new calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
       defaultView: 'timeGridFourDay',
        events:{ duration: '02:00' },
        views: {
          timeGridFourDay: {
            type: 'timeGrid',
            duration: { days: 15 }
          }
        },
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek,timeGridDay,listWeek'
      },
      editable: true,
      defaultTimedEventDuration: '02:00:00',
      events: events ,
      droppable: true, 
       eventDrop: function(info) {
        if(document.getElementById('autocheck').checked)
        {       
          Calculate();
        }
      },
      drop: function(arg ) {
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
      }

    });
    calendar.render();

}); //end Dom Document loaded function