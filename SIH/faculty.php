<?php
/*this will connect to sql database*/
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


$txt="";
$fp=fopen("file.txt","w") or die("Unable to open file");

$query = "SELECT course_id FROM `course`";
$course = $conn->query($query);
$i=0;
while($row = mysqli_fetch_array($course))
{
	$courseArray[$i]=$row['course_id'];
	$i=$i+1;
}
$n = mysqli_num_rows($course);
$txt=$txt.$n."\n";
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$n;$j++)
	{
		if($i!=$j)
		{
			$x=$courseArray[$i];
		$y=$courseArray[$j];
		$query = "select a.usn from ( select * from enrolls where course_id = '$x') a where a.usn in (select usn from enrolls where course_id='$y')";
		$run = $conn->query($query);
		if(mysqli_num_rows($run)==0)
			$txt=$txt."0 ";
		else
			$txt=$txt."1 ";
		}
		else
			$txt=$txt."0 ";
	}
	$txt=$txt."\n";
}
$query = "SELECT `course_id`,`faculty_id` from course";
$result = $conn->query($query);


while ($row = mysqli_fetch_array($result)) 
{
	$txt = $txt.$row['course_id']." ".$row['faculty_id']."\n";
}

fwrite($fp,$txt);
fclose($fp);

$answer = shell_exec("finalAlgo2.exe < file.txt");
//echo $answer."</br>";
header ('Location: timetable.php');
exit;
?>