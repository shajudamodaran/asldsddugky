<?php

require 'database.php';

$aadhaar=$_POST['aadhaar'];
$Panchayath=$_POST['panchayath'];
$address=$_POST['address'];
$caste=$_POST['caste'];
$category=$_POST['category'];
$course=$_POST['course'];
$district=$_POST['district'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$gender=$_POST['gender'];
$gmobile=$_POST['gmobile'];
$lastq=$_POST['lastq'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$mstatus=$_POST['mstatus'];
$name=$_POST['name'];
$rcnumber=$_POST['rcnumber'];
$rctype=$_POST['rctype'];
$religion=$_POST['religion'];
$thaluk=$_POST['thaluk'];
$village=$_POST['village'];
$block=$_POST['block'];

if($course=="1")
{
    $course="Software Developer & Support Engineer";
}
else
{
    $course="Hardware Developer & Support Engineer";
}

//$last_id = $conn->insert_id+1;

$sql="SELECT MAX( id ) FROM masterdata;";

$result= mysqli_query($conn,$sql);

$lastid="404";

while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['MAX( id )'];
                $lastid= $C1+1;
            }


 $sql="INSERT INTO `masterdata`(`aadhaar`, `address`, `batch_code`, `caste`, `category`, `course`, `district`, `dob`, `flag_freezing`, `flag_assessment`, `flag_ojt`, `flag_placement`, `flag_training`, `fname`, `gender`, `gmobile`, `lastq`, `mail`, `mname`, `mobile`, `mstatus`, `name`, `panchayath`, `rcnumber`, `rctype`, `registernumber`, `religion`, `thaluk`, `village`, `block`, `jdate`, `pincode`, `id`, `account_number`, `IFSC`, `password`) VALUES ('$aadhaar','$address','','$caste','$category','$course','$district','$dob','','','','','','$fname','$gender','$gmobile','$lastq','$mail','$mname','$mobile','$mstatus','$name','$Panchayath','$rcnumber','$rctype','','$religion','$thaluk','$village','$block','','','$lastid','','','')";           
  

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