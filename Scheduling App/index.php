<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
</head>
<body>


<div class="">
  	
  <div class="col-12" style="justify-content: center; text-align: center; align-items: center; background: #f8f8ff; padding: 5%;">
  		<!-- <img src="img/auis_logo.png" width="50%"> -->
  		<img src="img/logo.png" width="5%" style="margin:1%;"> <span style="font-size: 18pt;">Exam Scheduling Assistant</span>
  		<br>
  		<!-- <p>The American University of Iraq, Slemani</p> -->
  </div>

  <div class="col-12" style="justify-content: center; text-align: center; align-items: center; background: #232b2b; padding: 5%;">

  		 <form action="scheduler.php" method="POST" enctype="multipart/form-data">
  		 	<label for="sonis_data" class="text-white">Please import excel datasheet provided by sonis</label>
  		 	<hr>
			<div class="custom-file">
				
				<input type="file" class="custom-file-input" name="sonis_data" id="sonis_data">
				<label class="custom-file-label" for="sonis_data">Choose file</label>
				<br> <br>
				<button type="submit" class="btn btn-outline-info btn-block" style="margin: 0;">Upload</button>

			</div>
		 
		  </form>


  </div>


  
</div>
 

</body>
</html>