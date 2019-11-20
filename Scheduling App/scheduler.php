<html>
<head> 
  <?php 

    include('head.php');
    require('main.php'); 
    if(!isset($_SESSION['user_email'])) header('Location: index.php'); 
    
   ?>
</head>
<body>
  <?php include 'navbar.php' ?>
  <div id='wrap'>
 

    <!-- <hr> -->
    
    <div id='external-events'>
      <h3 style="border-bottom:2px #c99700 solid;">Courses</h3>
      <br>  
      <div id='external-events-list'>
        <!-- <form style="display: inline-flex;">
          <input type="text" placeholder="Search .." id="search" name="search" style="background: none; color:white; border:none; border-bottom:1px solid #c99700; width: 75%;">
          <button type="submit" style="background: none; border:none;color: #c99700;"><i class="fa fa-search"> </i></button>
        </form> -->
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

        <p>AUIS Exam Schedule</p> 
        <br>
        2019 © <a href="https://www.linkedin.com/in/arukh-s-216181138/">@aroox</a>
        
        <a href="https://github.com/ArooxSediq/ITE-412-Capstone">Github</a>
        
      </div>
</body>
  


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src='packages/timegrid/main.js'></script>
  <script src='packages/list/main.js'></script>
  <script type="text/javascript" src="js/calendar.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript"> 

      $(document).ready(function(){

        var exams= $(".fc-event");

        for (var i = 0; i <   exams.length; i++) {
             console.log(exams[i]);      
        }
    
      });

  </script>
  <script type="text/javascript">

    var events = <?php echo json_encode($events); ?>;

    function Calculate()
    {
       console.clear();
      $('#notify').empty();
     
      var notifications = []; 
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

        if(document.getElementById('multipleExams').checked)  cond=2;   

        if(conflicts['number']>cond)
          {

            var notification = { "id":students[i].id , "number":conflicts['number'] , "classes":conflicts['classes'], "date":conflicts['date'] };

            notifications.push(notification);

          } 
        }
      }


      /** 

      The Following code has been obtained from:
      https://stackoverflow.com/questions/14446511/most-efficient-method-to-groupby-on-an-array-of-dataects

       **/

      var len = notifications.length;

      var groupBy = function(xs, key) {
        return xs.reduce(function(rv=[], x) {
          (rv[x[key]] = rv[x[key]] || []).push(x);
          return rv;
        }, {});
      };

      var data = groupBy(notifications, 'date');
    
     
     for (let key in data)
     {
       if(data.hasOwnProperty(key))
       {
      
        for (let k in data[key])
        {
         if(data[key].hasOwnProperty(k))
         { 
            var notification = "ID: "+data[key][k]['id']+"\nExams Count: "+data[key][k]['number']+" \nDate: "+data[key][k]['date']+"\nExams: "+data[key][k]['classes'];

              var str= "<span  data-container=\"body\" data-toggle=\"tooltip\" data-placement=\"top\" title=\" " + notification.toString() + "  \"><i style=\"cursor: help;color: #002855; font-size:17pt;\" class=\"fa  fa-id-badge\"></i> </span> ";

               $('#notify').append(str);
              console.log(data[key][k]);
           }
         }   
           
       }
    }
  
    }//Document ready
  </script>
  
</html>
