<?php
include("../connect.inc.php");
$course_id= $_GET["course_id"];
$name = $_GET["name"];
$type = $_GET["type"];
$credits = $_GET["credits"];
$faculty_id = $_GET["faculty_id"];

if(!(is_numeric($credits)))
	exit("Credits must be numeric");

$sql="SELECT * from faculty WHERE faculty_id LIKE '$faculty_id'";
$result = $conn->query($sql);

if($result){

$sql="INSERT INTO course (course_id,name,type,credits,faculty_id) VALUES ('$course_id','$name','$type','$credits','$faculty_id')";
$conn->query($sql);

}
else
	 echo "Error";
	
?>