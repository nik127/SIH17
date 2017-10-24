<?php
$file = fopen("output.txt", "r");
$i = 0;
$conn_error = 'Could not connect. ';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'universitytimetable';
$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
/*while (!feof($file)) {

$line_of_text = fgets($file);
$elements = explode(' ', $line_of_text);
$query = "insert into `output` values ('$elements[0]','$elements[1]','$elements[2]')";
$result = $conn->query($query);

}*/
fclose($file);

$query = "select distinct slot from output";
$result = $conn->query($query);
$n = mysqli_num_rows($result);
$timeSlots = array("Monday 8am - 9am","Monday 9am - 10am","Monday 11am - 12am","Monday 12noon - 1pm","Tuesday 8am - 9am","Tuesday 9am - 10am","Tuesday 11am - 12am","Tuesday 12noon - 1pm","Wednesday 8am - 9am","Wednesday 9am - 10am","Wednesday 11am - 12am","Wednesday 12noon - 1pm","Thursday 8am - 9am","Thursday 9am - 10am","Thursday 11am - 12am","Thursday 12noon - 1pm","Friday 8am - 9am","Friday 9am - 10am","Friday 11am - 12am","Friday 12noon - 1pm");
$table1="<table border=2>		
			<tr>
				<th>Time Slot</th>
				<th>Course Name</th>
				<th>Faculty Incharge</th> 
			</tr>";
$table2="<table border=2>		
			<tr>
				<th>Day/Time</th>
				<th>8am - 9am</th>
				<th>9am - 10am</th>
				<th>11am - 12am</th>
				<th>12noon - 1pm</th>
			</tr>";
			$s=0;
			$color = array("#FF000","#00FF00","0088FF","FFFF00","00FFFF","FF00FF");
			$c = 0;
$day = array("Monday","Tuesday","Wednesday","Thursday","Friday");
	for($j=0;$j<5;$j++)
	{
	$table2=$table2."<tr><td>$day[$j]</td>";
	for($i=0;$i<4;$i++)
	{
	$result = $conn->query("select f.name as fname,c.name as cname from output o,faculty f,course c where slot=$s and o.faculty_id=f.faculty_id and o.course_id = c.course_id");
	$txt="";
	$s++;
	while($row = mysqli_fetch_array($result))
	{
		$cn = $row["cname"];
		$txt= $txt.$cn."/";
	}
	@$table2=$table2."<td bgcolor=$color[$c]>$txt</td>";
	$c++;
	}
	$table2=$table2."</tr>";
	}
	

$table2 = $table2."</table><br>";
echo "Student Specific Table: <br><br>".$table2;
for($i=0;$i<$n;$i++)
{
	$result = $conn->query("select f.name as fname,c.name as cname from output o,faculty f,course c where slot=$i and o.faculty_id=f.faculty_id and o.course_id = c.course_id");
	while($row = mysqli_fetch_array($result))
	{
		$ts = $timeSlots[$i];
		$fn = $row["fname"];
		$cn = $row["cname"];
		$table1 = $table1."<tr>
				<td>$ts</td>
				<td>$cn</td>
				<td>$fn</td>
			</tr>";
		//echo $timeSlots[$i]." ".$row["cname"]." ".$row["fname"]."<br>";
		
	}
	
}
$table1 = $table1."</table><br>";
	echo "General TimeTable: <br><br>".$table1;
?>