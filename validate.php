<?php
require 'database.php';

$user=$_GET['user_select'];
$uname=$_GET['userid'];
$pword=$_GET['password'];

//echo $user;

$sql="SELECT id from masterdata WHERE `registernumber`='$uname' AND `password`='$pword'";
$result = mysqli_query($conn,$sql);
$flag=mysqli_num_rows($result);




if($user=='Student' & $flag==1)
{
	echo 2;
}
else
{
	if($user=='Admin'& $uname=='admin'& $pword=='admin123')
	{
	 echo 1;
	}

	else if($user=='State'& $uname=='stateadmin'& $pword=='admin1234')
	{
	 echo 1;
	}
	else
	{
		echo "Invalid User ID or Password !!!";
	}
	
}





?>