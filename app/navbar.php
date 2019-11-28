<nav class="navbar fixed-top navbar-expand-lg navbar-light " style=" background: #c99700;">

  <a class="navbar-brand" href="index.php">
     <img src="img/logo.png" width="15%" style="margin:1%;">
        <span style="font-size: 15pt;">
          AUIS Exam Schedule
        </span>
  </a>

  <?php  if(isset($_COOKIE['student_id'])) $studentSchedule= json_decode($_COOKIE['studentSchedule']); ?>

   <div id="notify">
    <div>
      <span>
        <?php if(isset($studentSchedule)) echo 'Dear student, you currently have '.count($studentSchedule).' exams.' ?>
        </span>
     </div>
     <div>
       <span>
         <?php
           if(isset($studentSchedule))
           foreach ($studentSchedule as $exam)  echo " | ".$exam->title;
         ?>
       </span>
     </div>
   </div>

  <div class="navbar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="  display: inline-flex !important; flex-direction: row !important;">
      <li class="nav-item">
        <a class="nav-link" href="index.php" title="Home" ><i class="fa fa-home"></i> </a>
      </li>

      <li class="nav-item">
        <?php if(!isset($_COOKIE['student_id'])): ?>
           <a class="nav-link" title="Student" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-graduation-cap"></i></a>
        <?php endif; ?>
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


<div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background: rgba(255,255,255,0.75);">
      <div class="modal-header" style="display:block; text-align:center;">
        <h5 class="modal-title" id="exampleModalLabel">Student ID</h5>

      </div>
      <div class="modal-body">
       <form>
         <input type="text" class="form-control" pattern="[0-9]{1,2}-[0-9]{5}" style="text-align:center;" id="student_id" name="student_id" placeholder="eg: 19-00001 " required>
         <br><br>
         <p style="color: rgb(100,100,100);">NOTICE: Please, use this format ( 00-00000 ).</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btm-sm btn-block btn-outline-primary" >Log in</button>
      </div>
        </form>
    </div>
  </div>
</div>

<style media="screen">
  .btn-outline-primary {
    color: #002855 !important;
    border-color: #002855 !important;
  }
  .btn:hover{
    background-color:  #002855 !important ;
    color: white !important;
  }
</style>