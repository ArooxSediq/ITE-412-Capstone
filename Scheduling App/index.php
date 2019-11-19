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
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
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
        right: 'timeGridWeek,timeGridDay'
      },
      editable: false,
      eventRender: function (info) {
        $(info.el).append('<span>'+info.event.extendedProps.location+'</span>');     
      },
      defaultTimedEventDuration: '02:00:00',
      events: events 

    });
    calendar.render();
      calendar.next();
  }); //end Dom Document loaded function

</script>   


<!-- The following code has been obtained from: -->
<!-- http://javascriptkit.com/javatutors/touchevents2.shtml -->

  <script>
 
window.addEventListener('load', function(){
 
    var touchsurface = document.getElementById('calendar'),
        startX,
        startY,
        dist,
        threshold = 150, //required min distance traveled to be considered swipe
        allowedTime = 200, // maximum time allowed to travel that distance
        elapsedTime,
        startTime
 
    function handleswipe(isrightswipe){
        if (isrightswipe)
            calendar.prev();
        else{
            calendar.next();
        }
    }
 
    touchsurface.addEventListener('touchstart', function(e){
        var touchobj = e.changedTouches[0]
        dist = 0
        startX = touchobj.pageX
        startY = touchobj.pageY
        startTime = new Date().getTime() // record time when finger first makes contact with surface
        e.preventDefault()
    }, false)
 
    touchsurface.addEventListener('touchmove', function(e){
        e.preventDefault() // prevent scrolling when inside DIV
    }, false)
 
    touchsurface.addEventListener('touchend', function(e){
        var touchobj = e.changedTouches[0]
        dist = touchobj.pageX - startX // get total dist traveled by finger while in contact with surface
        elapsedTime = new Date().getTime() - startTime // get time elapsed
        // check that elapsed time is within specified, horizontal dist traveled >= threshold, and vertical dist traveled <= 100
        var swiperightBol = (elapsedTime <= allowedTime && dist >= threshold && Math.abs(touchobj.pageY - startY) <= 100)
        handleswipe(swiperightBol)
        e.preventDefault()
    }, false)
 
}, false) // end window.onload
</script>

<!-- http://javascriptkit.com/javatutors/touchevents2.shtml -->

<div style="padding-top: 90%; background-color: #002855;">  </div>

<div class="col-12 text-white" id="footer" style="background: #222c36  ;padding:5%;text-align: center;vertical-align: middle;">
    
      <a href="https://auis.edu.krd" style="color: white;"><img src="img/auis.png" width="10%">The American University of Iraq, Slemani</a>
      
      <br><br>

      <p>AUIS Exam Schedule</p> 
      <br>
      2019 © <a href="https://www.linkedin.com/in/arukh-s-216181138/">@aroox</a>
      
      <a href="https://github.com/ArooxSediq/ITE-412-Capstone">Github</a>
      
    </div>
</body>
</html>