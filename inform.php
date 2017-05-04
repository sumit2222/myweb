
<?php
$rollno=$_POST['naam'];
$name=$_POST['tax'];
$n=0;

if($rollno==null && $name==null)
{
	echo "please fill there fields";
}

else{
$con=mysql_connect("localhost","root","");

$db=mysql_select_db("college",$con);

$query="SELECT * FROM `student`";

$run=mysql_query($query,$con);

if($run==true)
{?>
      <table border="2" width="80%" bgcolor="pink" align="center">
	   <tr bgcolor="yellow"><td>ROLL NO</td><td>NAME</td><td>ADDRESS</td><td>PHONE</td><td>EMAIL</td></tr>
	  
	  <?php
	while($data=mysql_fetch_assoc($run)){
    if($data['rollno']==$rollno && $data['Name']==$name)
	{ 

    $n=1;
		echo "Login succesful<br> <a href='inform.html'>try another</a>";
		//echo "<pre>";
		//print_r($data);
		?>
		<tr><td><?php echo $data['rollno']; ?> </td> 
		<td><?php echo $data['Name']; ?> </td> 
		<td><?php echo $data['Address'];?> 
		
		<td><?php echo $data['phone'];?> 
		</td>  <td><?php echo $data['Email']; ?> </td> </tr><?php
	}
	
	}
	if($n==0)
	{
		echo "tumse na ho payega ! pehle roll no or password thik karlo <a href='update.html'>try another</a>";
	}
	
}
?></table><?php
}
?>



