	<style type="text/css">
		.nav-link{
			display: inline;	
		}

		button{
			font-size: 50pt;
			margin-top: 4%;
			padding-left:12.5%;

			padding-right:12.5%;
		}
	</style>



  <div class="navbar justify-content-center d-sm-block d-lg-none nb" id="navbarSupportedContent" style="width: 100%; height: 150px; justify-content: end;">
    <div class="navbar-nav "  style="    text-align: center;
    display: inline;
    width: 100%;	
    padding-left: 10%;
    padding-right: 10%;">
      <!-- <li class="nav-item"> -->

  	  <button style="text-align:center;" class="icon-btn add-btn">
		 <i class="fa fa-home" style="font-size: 50px; color: #002855 ;"></i>
		  <a class="nav-link bt" href="index.php" title="Home" ><div class="btn-txt">Home</div> </a>
	  </button>
       
      <!-- </li> -->

      <!-- <li class="nav-item"> -->
        <?php if(!isset($_COOKIE['student_id'])): ?>
    	  <button style="text-align:center;" class="icon-btn add-btn">
			 <i class="fa fa-graduation-cap" style="font-size: 50px; color: #002855 ;"></i>
			  <a class="nav-link bt"  title="Student" data-toggle="modal" data-target="#exampleModal" href="#"  ><div class="btn-txt">Login</div> </a>
		  </button>

        <?php endif; ?>
      <!-- </li> -->

      <?php if(!isset($_SESSION['user_email'])): ?>



  	  <button style="text-align:center;" class="icon-btn add-btn">
		 <i class="fa fa-sign-in" style="font-size: 50px; color: #002855 ;"></i>
		  <a class="nav-link bt" title="Log in" href="login.php"  ><div class="btn-txt">Login</div> </a>
	  </button>

      <?php else: ?>



  	  <button style="text-align:center;" class="icon-btn add-btn">
		 <i class="fa fa-calendar" style="font-size: 50px; color: #002855 ;"></i>
		  <a class="nav-link bt"  href="scheduler.php" title="Scheduler" ><div class="btn-txt">Scheduler</div> </a>
	  </button>


	  <button style="text-align:center;" class="icon-btn add-btn">
		 <i class="fa fa-lock" style="font-size: 50px; color: #002855 ;"></i>
		  <a class="nav-link bt"  href="login.php?signout=true" title="Log out"  ><div class="btn-txt">Log out</div> </a>
	  </button>

      <?php endif; ?>

    </div>
  </div>

<!-- 
<style media="screen">
  .btn-outline-primary {
    color: #002855 !important;
    border-color: #002855 !important;
  }
  .btn:hover{
    background-color:  #002855 !important ;
    color: white !important;
  }
</style> -->