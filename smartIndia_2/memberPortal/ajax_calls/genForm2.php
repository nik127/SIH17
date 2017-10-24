<?php
include("../connect.inc.php");   
$sql="Select * from course";
$str="<tr><th>Course</th><th>Select</th></tr>";
echo $str;

$result=$conn->query($sql);
if($result)
{	
 while($row = mysqli_fetch_array($result))
 {echo "<tr>";
   if($row['type'])
	$str="<td>".$row['name']."</td>"."<td><input id=".$row['course_id']." type='checkbox'></input></td>";
   else 
	$str="<td>".$row['name']."</td>"."<td><input id=".$row['course_id']." type='checkbox' checked></input></td>";
 echo $str;
 echo "</tr>";
}
}

?>