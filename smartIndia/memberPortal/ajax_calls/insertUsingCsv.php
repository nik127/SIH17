<?php
require "conn.php";
$file=fopen("sampleExcel.csv","r");
while(($empData = fgetcsv($file,1000,","))!== FALSE)
{
	$sql = "insert into course values ('$empData[0]','$empData[1]','empData[2]','empData[3]','empData[4]')";
	msql_query($sql);
}
fclose($file);