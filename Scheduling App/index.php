<html>
<head>
  <?php
  
      include 'head.php';
      include 'database.php';
      $DB = new database('public');
      $events = $DB->fetch('events');
      $students = $DB->fetch('students');

      if(isset($_GET['student_id']))
      {
        $found;
        foreach ($students as $student) {
          if(ltrim($student['auis_id'],'0')==trim($_GET['student_id'])) 
            {
              $found=$student;
              break;
            }
        }
       
        if(isset($found))
        {
          $studentSchedule=[];
          foreach ($events as $event) {
              foreach (json_decode($found['classes']) as $class) {
                if(trim($event['title'])==trim($class)) array_push($studentSchedule, $event);
              }
          }
        }
        

        
      }
   ?>
  <style type="text/css">
    #calendar{
      margin: 5%;
      width: 90%;
    }
    body{
      background: #222c36;
    }
  </style>
</head>
<body>

<?php include('navbar.php'); ?>
  
  <div id='calendar'></div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src='packages/timegrid/main.js'></script>
  <script src='packages/list/main.js'></script>
  <script type="text/javascript">

  var events = <?php if(isset($studentSchedule)) echo json_encode($studentSchedule); else echo json_encode($events); ?>;

  var calendar;

  document.addEventListener('DOMContentLoaded', function()
  {

    calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    var calendarEl = document.getElementById('calendar');
    
    calendar = new calendar(calendarEl, 
    {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid','list' ],
       defaultView: 'timeGridFourDay',
       defaultDate: '<?php if(isset($studentSchedule)) echo  substr($studentSchedule[0]['start'],0,10); else echo substr($events[0]['start'], 0,10) ; ?>' ,
        views: {
          timeGridFourDay: {
            type: 'timeGrid',
            duration: { days: 7 }
          }
        },
      header: {
        left: 'prev,next',
        center: 'title',
        right: 'timeGridWeek,timeGridDay,listMonth'
      },
      editable: false,
      eventRender: function (info) {
        $(info.el).find(".fc-list-item-marker").remove();
        $(info.el).append('<td id=\"fc-location\" style=\"border:none;color:#002855;font-weight:bold;\"> '+info.event.extendedProps.location+'</td>');
      },
      defaultTimedEventDuration: '02:00:00',
      events: events 

    });
    calendar.render();

  }); //end Dom Document loaded function

</script>   


<!-- The following code has been obtained from: -->
<!-- https://stackoverflow.com/questions/2264072/detect-a-finger-swipe-through-javascript-on-the-iphone-and-android -->

  <script>
 
window.addEventListener('load', function(){
 
document.addEventListener('touchstart', handleTouchStart, false);        
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;                                                        
var yDown = null;

function getTouches(evt) {
  return evt.touches ||             // browser API
         evt.originalEvent.touches; // jQuery
}                                                     

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];                                      
    xDown = firstTouch.clientX;                                      
    yDown = firstTouch.clientY;                                      
};                                                

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
        if ( xDiff > 0 ) {
            calendar.next();
        } else {
            calendar.prev();
        }                       
    } else
    /* reset values */
    xDown = null;
    yDown = null;                                             
};

}, false) // end window.onload
</script>

<!-- http://javascriptkit.com/javatutors/touchevents2.shtml -->

<div style="padding-top: 90%; background-color: #002855;">  </div>

<div class="col-12 text-white" id="footer">
    
      <a href="https://auis.edu.krd" style="color: white;"><img src="img/auis.png" width="10%">The American University of Iraq, Slemani</a>
      
      <br><br>

      <p>AUIS Exam Schedule</p> 
      <br>
      2019 © <a href="https://www.linkedin.com/in/arukh-s-216181138/">@aroox</a>
      
      <a href="https://github.com/ArooxSediq/ITE-412-Capstone">Github</a>
      
    </div>
</body>
</html>