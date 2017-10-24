<?php  
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
   
	<link rel="icon" href="">
	<!--CSS-->	
	<link href="../commonResources/css/bootstrap.min.css" rel="stylesheet">
	<link href="../commonResources/css/bootstrap1.min.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
    
	
</head>
<body>



<div class="col-md-12 top" > 
	<center><h1 class="h1-responsive">ACADEMIC TIMETABLE SCHEDULER<h1></center>
</div>
<div class="card col-md-2">
    <h3 class="card-header primary-color white-text">Welcome </h3>
    <div class="card-block">
    <a id="enroll" class="btn btn-primary" style="width:100%">Enroll subjects</a> <br>
	</div>
	<div class="card-block">
	<a href="faculty.php" class="btn btn-primary" style="width:100%">See Timetable</a>
	</div>
	<div class="card-block">
	<a href="logout.php" class="btn btn-primary" style="width:100%">Log Out</a>
	</div>
</div>

<div id="output" class="col-md-10">

	<div id="subIns1" style="display:none";>
		<br>
			<p><u>Select the courses you want to enroll for</u></p>
				<table class="table table-striped" id="t1">

				</table>
		
	</div>
	<div id="msgFrmSvr" style="display:none";>
	
	  
	
	</div>

<br>

     
	 <center><button id="submitSub" size="20" type="button" class="btn btn-primary" style="display:None">Submit</button></center>


	

</div>

<input type="text" id="usn" value="1" style="display:none"> </input>  
<script type="text/javascript" src="js/renderOnClick2.js"></script>

</body>
</html>