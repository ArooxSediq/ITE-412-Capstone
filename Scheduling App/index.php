<html>
<head>

<?php require('main.php'); ?>

<meta charset='utf-8' />
<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<link href='packages/timegrid/main.css' rel='stylesheet' />
<link href='packages/list/main.css' rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id='wrap'>
    <button onclick="saveEvents();">save</button>
    <div id='external-events'>
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
    
  </script>
  
</html>
