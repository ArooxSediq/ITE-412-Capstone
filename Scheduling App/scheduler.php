<html>
<head> 
  <?php include('head.php'); ?> 
  <?php require('main.php'); ?>
</head>
<body>
  <?php include 'navbar.php' ?>
  <div id='wrap'>
 

    <!-- <hr> -->
    
    <div id='external-events'>
      <h3>Exams</h3>
      <div id='external-events-list'>

        <?php foreach ($classes as $class): ?>
        
          <div class='fc-event'><?php echo $class ?></div>
        
        <?php endforeach; ?>

      </div>

    </div>

   <br>
    <div id="buttons" style="justify-content: center; text-align: center;">
         
    <span >Autocheck?</span>
    <input type="checkbox" id="autocheck" checked> 
    
    <br>

    <span >Only show more than 2 exams per day </span>
    <input type="checkbox" id="multipleExams">  
   
    <br><br>

    <button onclick="Calculate();" class="btn btn-outline-light">Check</button>  
    <a href="scheduler.php?export=true" class="btn btn-outline-light">Export</a>
    <a href="addLocation.php" class="btn btn-outline-light">Locations</a>
    <button class="btn btn-outline-light" onclick="save(calendar.getEvents());"> Save</button>
    <a href="scheduler.php?reset=true" class="btn btn-outline-light"> Reset</a>


    </div>
      <br><br>
    <div id='calendar'>
      
    </div>

    <div style='clear:both'></div>

  </div>
     <div class="col-12 text-white" style="background: #222c36  ;padding:5%;text-align: center;vertical-align: middle;">
      
        <a href="https://auis.edu.krd" style="color: white;"><img src="img/auis.png" width="10%">The American University of Iraq, Slemani</a>
        
        <br><br>

        <p>Exam Scheduling Assistant</p> 
        <br>
        2019 © <a href="https://www.linkedin.com/in/arukh-s-216181138/">@aroox</a>
        
        <a href="https://github.com/ArooxSediq/ITE-412-Capstone">Github</a>
        
      </div>
</body>
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src='packages/timegrid/main.js'></script>
  <script src='packages/list/main.js'></script>
  <script type="text/javascript" src="js/calendar.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript">

    var events = <?php echo json_encode($events); ?>;

    function Calculate()
    {
       console.clear();
      $('#notify').empty();
     
      var conflict = [];
      var students = <?php echo json_encode($students); ?>;
      var exams = saveExams();

      
      for (var i = 0; i < students.length; i++) 
      {
        
        for (var key in exams) 
        {
          var exam = exams[key];
          var conflicts = [];
         
          conflicts['number']=0;
          conflicts['classes']=[];
          conflicts['date']="";
          
          for (var c = 0; c < exam.length; c++) {
              
              const found = students[i].classes.find(function(element) {
                return element.trim() == exam[c].trim() ;
              });

              if(found) 
                {
                  conflicts['number']++;
                  conflicts['classes'].push(found);
                  conflicts['date']=key;
                }

          }
          
          var cond=1;

         if(document.getElementById('multipleExams').checked)
          {       
            cond=2
          }

          if(conflicts['number']>cond)
          {
            var notification = "ID: "+students[i].id+"\nExams Count: "+conflicts['number']+" \nDate: "+conflicts['date']+"\nExams: "+conflicts['classes'];

            var data= "<span  data-container=\"body\" data-toggle=\"tooltip\" data-placement=\"top\" title=\" " + notification.toString() + "  \"><i style=\"cursor: help;color: #002855; font-size:17pt;\" class=\"fa  fa-id-badge\"></i> </span> ";

            $('#notify').append(data);

            console.log("Student with id: "+students[i].id+" has "+conflicts['number']+" exams on "+conflicts['date']+"\n the exams are: "+conflicts['classes']);

          } 

        }


      }
    }
  </script>
  
</html>
