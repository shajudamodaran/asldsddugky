<?php
$user=$_POST['user_select'];
$uname=$_POST['userid'];
$pword=$_POST['password'];

if($user=='Admin')
{
  Header("Location: adminpage.php");
}
else if($user=='State')
{
Header("Location: statepage.php");	
}
else if($user=='Student')
{
Header("Location: student_home.php");	
}



?>