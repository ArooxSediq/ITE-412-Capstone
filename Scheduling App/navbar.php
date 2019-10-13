<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href="#">   
     <img src="img/logo.png" width="5%" style="margin:1%;"> 
        <span style="font-size: 18pt;">
          Exam Scheduling Assistant
        </span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="padding-left: 50%;">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php if(!isset($_SESSION['user_email'])): ?>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Sign in</a>
      </li>
      
      <?php else: ?>

      <li class="nav-item">
        <a class="nav-link" href="scheduler.php">Scheduler</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="login.php?signout=true">Sign out</a>
      </li>
    
      <?php endif; ?>

    </ul>     
  </div>
</nav>