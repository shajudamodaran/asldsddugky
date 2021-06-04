<?php

require 'php/database.php';

$name=$_POST['name'];
$panchayath=$_POST['panchayath'];
$rcnumber=$_POST['rcnumber'];
$rctype=$_POST['rctype'];
$religion=$_POST['religion'];
$thaluk=$_POST['thaluk'];
$village=$_POST['village'];
$aadhaar=$_POST['aadhaar'];
$address=$_POST['address'];
$caste=$_POST['caste'];
$category=$_POST['category'];
$course=$_POST['course'];
$district=$_POST['district'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$gmobile=$_POST['gmobile'];
$lastq=$_POST['lastq'];
$mail=$_POST['mail'];
$mname=$_POST['mname'];
$mobile=$_POST['mobile'];
$mstatus=$_POST['mstatus'];
$id=$_POST['id'];
$redisternumber=$_POST['redisternumber'];
$account=$_POST['account'];
$ifsc=$_POST['ifsc'];
$block=$_POST['block'];

if($course=="1")
    {
        $course="Software Developer & Support Engineer";
    }
    else
    {
        $course="Hardware Developer & Support Engineer";
    }



$sql="UPDATE `masterdata` SET 
`aadhaar`='$aadhaar',
`address`='$address',
`caste`='$caste',
`category`='$category',
`course`='$course',
`district`='$district',
`dob`='$dob',
`fname`='$fname',
`mname`='$mname',
`gender`='$gender',
`gmobile`='$gmobile',
`lastq`='$lastq',
`mail`='$mail',
`mobile`='$mobile',
`mstatus`='$mstatus',
`name`='$name',
`panchayath`='$panchayath',
`rcnumber`='$rcnumber',
`rctype`='$rctype',
`religion`='$religion',
`thaluk`='$thaluk',
`village`='$village',
`registernumber`='$redisternumber',
`account_number`='$account',
`IFSC`='$ifsc',
`block`='$block'
 WHERE `id`='$id'";



if (mysqli_query($conn, $sql)) 
{
 echo 1;
 
} 
else 
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





?>