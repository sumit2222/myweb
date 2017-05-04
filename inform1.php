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
$query="INSERT INTO `student`(`rollno`, `Name`, `Address`, `phone`, `Email`) VALUES ('$rollno','$name','$address','$phone','$email')";

$run=mysql_query($query,$con);

if($run==true)
{
	echo "data has been inserted <a href='inform1.html'>try another</a>";
	$n=1;
}

if($n==0){
	"tumse na ho payega";
}
}

?>