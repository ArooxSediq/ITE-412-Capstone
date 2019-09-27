<html>
<head>

<?php require('main.php'); ?>

<meta charset='utf-8' />
<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<link href='packages/timegrid/main.css' rel='stylesheet' />
<link href='packages/list/main.css' rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <div id='wrap'>
    <div id='external-events'>

      <button onclick="Calculate();" class="btn">Calculate</button>
      <h4>Exams</h4>

      <div id='external-events-list'>

        <?php foreach ($classes as $class): ?>
        
          <div class='fc-event'><?php echo $class ?></div>
        
        <?php endforeach; ?>

      </div>

    </div>

    <div id='calendar'></div>

    <div style='clear:both'></div>

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
      // console.log(exams);
     
      // console.log(exams.length);
        
      for (var i = 0; i < students.length; i++) 
      {
     
        for (var key in exams) 
        {
          var exam = exams[key];
          for (var c = 0; c < exam.length; c++) {
              
              const found = students[i].classes.find(function(element) 
              {
                // Why does this happen?
                console.log("element: "+element+" exam: "+exam[c]);
                if(element == exam[c]) console.log('nigger');
                return element == exam[c];
              });

              console.log(found);

          }
     
        }


      }
    }
  </script>
  
</html>
