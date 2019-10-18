<nav class="navbar fixed-top navbar-expand-lg navbar-light " style=" background: #c99700;">
  
  <a class="navbar-brand" href="#">   
     <img src="img/auis.png" width="15%" style="margin:1%;"> 
        <span style="font-size: 15pt;">
          AUIS Exam Scheduling Application
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

     
      <?php else: ?>

      <li class="nav-item">
        <a class="nav-link" href="scheduler.php" title="Scheduler" ><i class=" fa fa-calendar"></i></a>
        <span></span>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="login.php?signout=true" title="Log out" ><i class=" fa fa-lock"></i></a>
        <span></span>
      </li>
    
      <?php endif; ?>

    </ul>     
  </div>
</nav>


