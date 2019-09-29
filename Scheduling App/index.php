<html>
<head> <?php include('head.php'); ?> </head>
<body>
  <div id='wrap'>
    <button onclick="Calculate();" class="btn">Check students</button>
    <span>Autocheck?</span>
    <input type="checkbox" id="autocheck">  
    <div id='external-events'>
      <h3>Exams</h3>
      <div id='external-events-list'>

        <?php foreach ($classes as $class): ?>
        
          <div class='fc-event'><?php echo $class ?></div>
        
        <?php endforeach; ?>

      </div>

    </div>

    <div id='calendar'></div>

    <div style='clear:both'></div>

  </div>
  <div class="col-12" style="background: #F8F8FF ;padding:10%;text-align: center;vertical-align: middle;">
    
    <img src="img/auis_logo.png" width="50%">
    
    <br><br>

    <p>Exam Scheduling Assistant</p> 
    <br>
    Developed by <a href="https://github.com/ArooxSediq">@aroox</a>
    
  </div>
</body>
  
  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src='packages/timegrid/main.js'></script>
  <script src='packages/list/main.js'></script>
  <script type="text/javascript" src="js/calendar.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript">
    

    function Calculate()
    {
      console.clear();
      
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
          
          if(conflicts['number']>1)
          {
            console.log("Student with id: "+students[i].id+" has "+conflicts['number']+" exams on "+conflicts['date']+"\n the exams are: "+conflicts['classes']);

          } 

        }


      }
    }
  </script>
  
</html>
