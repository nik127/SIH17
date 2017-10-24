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
    <a id="enlist" class="btn btn-primary" style="width:100%">Enlist Subjects</a> <br>
	</div>
	<div class="card-block">
	<a id="entFaculty" class="btn btn-primary" style="width:100%">Enter Faculty details</a>
	</div>
	<div class="card-block">
	<a id=" " class="btn btn-primary" style="width:100%">Enroll Faculty</a>
	</div>
	<div class="card-block">
	<a href="faculty.php" class="btn btn-primary" style="width:100%">Generate Timetable</a>
	</div>
	<div class="card-block">
	<a href="logout.php" class="btn btn-primary" style="width:100%">Log Out</a>
	</div>
</div>

<div id="output" class="col-md-10">
<br>
<div id="insertCourse" style="display:none">
<p>Enter mode of entering data:</p><input name="group1" type="radio" id="formBased" >Form<br>
								  <input name="group1" type="radio" id="csv"  >Using a CSV file<br>
								  
<br>
	<div id="subIns1" style="display:none";>
		<p>Enter the No. of subjects:(max 10 at a time)<p><input id="numsub"type="text"></input>
		<button id="generate">Generate</button>
		<p id="errmsg" style="display:None; color:red">*Please Enter a Valid number</p>
	</div>
	
	<div id="subIns2" style="display:none";>
	 
	<p>Upload the CSV file<p>
	<form  method="POST" action="uploadFile.php" enctype="multipart/form-data" >		
	   <input id="ipFile" name="ipfile" type="file"></input>
	   <br>
			<button id="upload">Upload</button>
	</form>
	</div>
	
   <div id="innerForm" > 
	<table id="t1" class="table table-striped">
     
	

	
	</table>
    <center><button id="submitSub" size="20" type="button" class="btn btn-primary" style="display:None">Submit</button></center>
   </div>	
</div>
</div>


<script type="text/javascript" src="js/renderOnClick.js"></script>

</body>
</html>