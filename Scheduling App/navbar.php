<nav class="navbar fixed-top navbar-expand-lg navbar-light " style=" background: #c99700;">
  
  <a class="navbar-brand" href="index.php">   
     <img src="img/logo.png" width="15%" style="margin:1%;"> 
        <span style="font-size: 15pt;">
          AUIS Exam Scheduling Application
        </span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div id="notify"></div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left: 50%;">
      <li class="nav-item">
        <a class="nav-link" href="index.php" title="Home" ><i class="fa fa-home"></i> </a>
      </li>


      <?php if(!isset($_SESSION['user_email'])): ?>

      <li class="nav-item">
        <a class="nav-link" title="Log in" href="login.php"><i class="fa fa-sign-in"></i></a>
      </li>
<!-- 
      <style type="text/css">
        #id::placeholder{
          color: white;
        }
        .fa-search{
          color: white;
        }
      </style>

      <li class="nav-item" style="margin-left: 5%;">
        <form id="search" method="POST" action="index.php" style="display: inline-flex;">
          <input type="text" class="form-control" autocomplete="off" id="id" name="id" placeholder="Student ID" style="background: none; border: none;">
          <button type="submit" form="search" class="btn btn-sm"><i class="  fa fa-search"></i></button>
        </form>
      </li>
 -->
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


