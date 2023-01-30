<?php
require("connect_db.php");

$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$marry_status=$_POST["marry_status"];

//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
$sql="UPDATE survey set f_name='$fname',l_name='$lname',age='$age',sex='$sex',married_status='$marrystatus' WHERE id=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>