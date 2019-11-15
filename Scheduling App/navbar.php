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

   <div id="notify"> <div><span><?php if(isset($studentSchedule)) echo 'Dear student, you currently have '.count($studentSchedule).' exams.' ?></span></div> </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left: 50%;">
      <li class="nav-item">
        <a class="nav-link" href="index.php" title="Home" ><i class="fa fa-home"></i> </a>
      </li>

      <li class="nav-item">

         <a class="nav-link" title="Student" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-graduation-cap"></i></a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student ID</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
        <br>
         <input type="text" class="form-control" id="student_id" name="student_id" placeholder="ID: eg( 19-00001 )">
         <br>
         <span style="color: grey">NOTE: Please don't forget the hiphen '-'.</span>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btm-sm btn-outline-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btm-sm btn-outline-primary">Log in</button>
      </div>
        </form> 
    </div>
  </div>
</div>