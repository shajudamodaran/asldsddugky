<?php

require "database.php";

$district=$_POST['district'];
$panchayath=$_POST['panchayath'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$mobile=$_POST['mobile'];
$lastq=$_POST['lastq'];
$lastqs=$_POST['lastqs'];
$course=$_POST['course'];
$status=$_POST['status'];
$date=$_POST['date'];

$sql="SELECT MAX( id ) FROM mobilisation;";

$result= mysqli_query($conn,$sql);

$lastid="404";

while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['MAX( id )'];
                $lastid= $C1+1;
            }


$sql="INSERT INTO `mobilisation`(`id`, `age`, `category`, `contact_number`, `course`, `district`, `gender`, `grama_panchayat`, `name`, `q_status`, `qualification`, `status`, `Date`, `ffs`, `admission`) VALUES ('$lastid','$age','$category','$mobile','$course','$district','$gender','$panchayath','$name','$lastqs','$lastq','$status','$date','','')";

if ($conn->query($sql) === TRUE) 
 {
 echo '1';
 //Header("Location: Successfull.php?user=".$name.'&course='.$course);
 }
 else 
 {
   echo 'Error: '. $conn->error;
 }
 $conn->close();



?>