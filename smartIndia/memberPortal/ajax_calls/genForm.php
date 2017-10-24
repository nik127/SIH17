<?php  
$num=$_GET['number'];

$str="<tr><th>Course Id</th>
     <th>Course Name</th>
	 <th>Course Type</th>
	 <th>Credits</th>
	 <th>Faculty Id</th>
	</tr>";
echo $str;
for($x=0;$x<$num;$x++)
	echo "<tr><td><input></input></td><td><input></input></td><td><input></input></td><td><input></input></td><td><input></input></td></tr>";
	
?>
