<html>
<head>

  <?php require('main.php'); ?>

  <title>Exam Scheduling Assitant</title>

  <meta charset='utf-8' />
  <meta name="author" content="Arukh Sediq Shkur">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#0B4F6C">

  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">

  <link href='packages/core/main.css' rel='stylesheet' />
  <link href='packages/daygrid/main.css' rel='stylesheet' />
  <link href='packages/timegrid/main.css' rel='stylesheet' />
  <link href='packages/list/main.css' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <div id='wrap'>
    <button onclick="Calculate();" class="btn">Check students</button>
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
