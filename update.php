<?php
$rollno=$_POST['roll'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$n=0;
if($rollno==null && $name==null && $address==null && $phone==null && $email==null)
{
	echo "please fill all fields";
}

else{


$con=mysql_connect("localhost","root","");
$db=mysql_select_db("college",$con);
$query="UPDATE `student` SET `rollno`='$rollno',`Name`='$name',`Address`='$address',`phone`='$phone',`Email`='$email' WHERE rollno=$rollno";

$run=mysql_query($query,$con);

if($run==true)
{
	$n=1;
	echo "data has been updated <a href='update.html'>try another</a>";
	
}

if($n==0){
	"tumse na ho payega <a href='update.html'>try another</a>";
}
}

?>