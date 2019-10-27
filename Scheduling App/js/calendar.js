
  var calendar;

  document.addEventListener('DOMContentLoaded', function()
  {
    calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {

        title: eventEl.innerText.trim()
        }
      },

    });

    var calendarEl = document.getElementById('calendar');
    
    calendar = new calendar(calendarEl, 
    {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
       defaultView: 'timeGridFourDay',
        views: {
          timeGridFourDay: {
            type: 'timeGrid',
            duration: { days: 15 }
          }
        },
         timeZone: 'local',
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
        if(document.getElementById('autocheck').checked)  Calculate();
      },
      drop: function(arg ) {
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
      }

    });
    calendar.render();

}); //end Dom Document loaded function