<?php
session_start();
include("../connect.inc.php");
 
$len=$_GET["length"];
$usn=$_SESSION["usn"];
for($x=0;$x<$len;$x++)
{	
	$cid="course_id".$x;
	$dbCid="$_GET[$cid]";
	$sql="Insert into enrolls(usn,course_id) values ('$usn','$dbCid')";
	$check="Select * from enrolls where usn='$usn' and course_id='$dbCid'";
	$r=$conn->query($check);
	echo "<br>";
	if($r->num_rows)
		  {
			
			echo "Duplicate entry! please re-enter un-enrolled courses.";
			exit;
		  }
		  
	else
	{	  
		$result=$conn->query($sql);
		
	}
	
}
echo "Courses Enrolled successfully";

?>