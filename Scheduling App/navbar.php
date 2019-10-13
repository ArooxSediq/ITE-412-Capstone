<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href="#">   
     <img src="img/logo.png" width="10%" style="margin:1%;"> 
        <span style="font-size: 15pt;">
          Exam Scheduling Assistant
        </span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div id="notify"></div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="padding-left: 50%;">
      <li class="nav-item">
        <a class="nav-link" href="index.php" title="Home" ><i class="fa fa-home"></i> </a>
      </li>

      <?php if(!isset($_SESSION['user_email'])): ?>

      <li class="nav-item">
        <a class="nav-link" title="Log in" href="login.php"><i class="fa fa-sign-in"></i></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" title="Scheduler" href="scheduler.php"><i class=" fa fa-calendar"></i></a>
      </li>
      
      <?php else: ?>

      <li class="nav-item">
        <a class="nav-link" href="scheduler.php" title="Scheduler" ><i class=" fa fa-calendar"></i></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="login.php?signout=true" title="Log out" ><i class=" fa fa-lock"></i></a>
      </li>
    
      <?php endif; ?>

    </ul>     
  </div>
</nav>


