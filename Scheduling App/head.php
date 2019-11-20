  <?php session_start();  ?>

  <title>AUIS Exam Scheduling Application</title>

  <meta charset='utf-8' />
  <meta name="author" content="Arukh Sediq Shkur">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#002855">
  <meta name="msapplication-TileColor" content="#002855">
  <meta name="theme-color" content="#002855">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
  <link href='packages/core/main.css' rel='stylesheet' />
  <link href='packages/daygrid/main.css' rel='stylesheet' />
  <link href='packages/timegrid/main.css' rel='stylesheet' />
  <link href='packages/list/main.css' rel='stylesheet' />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    
    document.addEventListener('DOMContentLoaded', function()
    { 
      if(window.innerWidth<window.innerHeight) 
      {
        $(".nav-link").attr('style','font-size: 30px;');
        $("#notify").attr('style',"width:auto;");
        $("#notify").next().attr('style','padding-right:5%;');
        $("body").next().attr('style','margin-top:20%;')
      } 
      
    }, false);

  </script>