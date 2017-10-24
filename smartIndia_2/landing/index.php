<?php
session_start();
require_once 'connect.inc.php';

$username=$_POST['email'];
$password=$_POST['password'];

$sql="Select * from student where usn='$username' and password='$password' ";
echo $sql;

$result=$conn->query($sql);
echo mysqli_num_rows($result);
if(mysqli_num_rows($result)==1)
{
  $_SESSION["usn"]=$username;
 
  header("Location: ../memberPortal/student.php");
}
else
{
  header("Location: first.php");
  
}	




?>