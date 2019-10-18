
<html>
<head>
  <?php
  
      include 'head.php';
      include 'database.php';
      $DB = new database();
      $events = $DB->fetch('events');

   ?>
  <style type="text/css">
    #calendar{
      margin: 5%;
      /*margin-right:10%;*/
      width: 90%;
    }
  </style>
</head>
<body>

 
<?php include('navbar.php'); ?>

    <div id='calendar'>
      
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src='packages/timegrid/main.js'></script>
  <script src='packages/list/main.js'></script>
  
  <script type="text/javascript">

  var events = <?php echo json_encode($events); ?>;

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
       defaultDate: '<?php echo substr($events[0]['start'], 0,10) ; ?>' ,
        views: {
          timeGridFourDay: {
            type: 'timeGrid',
            duration: { days: 5 }
          }
        },
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek,timeGridDay,listWeek'
      },
      editable: false,
      eventRender: function (info) {
        $(info.el).tooltip({ title: info.event.extendedProps.location });     
      },
      defaultTimedEventDuration: '02:00:00',
      events: events 

    });
    calendar.render();
    // calendar.gotoDate(  );

  }); //end Dom Document loaded function

</script>   
<script type="text/javascript">
 $(document).ready(function(){
  var w = window.innerWidth;
  var h = window.innerHeight;

  if(w<h)
  {
    $(".nav-link").attr('style','font-size: 30px;');
    $(".nav-link")[0].append(" Home");
    $(".nav-link")[1].append("  Log in");
  }
 });

</script> 
<div style="padding-top: 90%; background-color: #002855;"></div>
<div class="col-12 text-white" style="background: #222c36  ;padding:5%;text-align: center;vertical-align: middle;">
    
      <a href="https://auis.edu.krd" style="color: white;"><img src="img/auis.png" width="10%">The American University of Iraq, Slemani</a>
      
      <br><br>

      <p>Exam Scheduling Assistant</p> 
      <br>
      2019 © <a href="https://www.linkedin.com/in/arukh-s-216181138/">@aroox</a>
      
      <a href="https://github.com/ArooxSediq/ITE-412-Capstone">Github</a>
      
    </div>
</body>
</html>