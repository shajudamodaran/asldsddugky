<style type="text/css">
body {
	background-color: #FFFFFF;
}
</style>
<?php

require 'database.php';


$parametre=$_GET['para'];

//echo $parametre;

$sql="";


if($parametre=='Under Training')
{
	$sql= "SELECT * FROM masterdata WHERE flag_freezing != '0000-00-00' AND flag_training = '0000-00-00'";
	//$result = mysqli_query($conn,$sql);
	//echo $result;

			//echo $result.'result is';
			//echo mysqli_num_rows($result);	
}
else if($parametre=="Waiting for Examination")
{
	$sql= "SELECT * FROM masterdata WHERE flag_training != '0000-00-00' AND flag_assessment = '0000-00-00'";
}
else if($parametre=="Waiting for OJT")
{
	$sql= "SELECT * FROM masterdata WHERE flag_training != '0000-00-00' AND flag_ojt = '0000-00-00'";
	
}
else if($parametre=="Waiting for Placement")
{
	$sql= "SELECT * FROM masterdata WHERE flag_ojt != '0000-00-00' AND flag_placement = '0000-00-00'";
	
}
else if($parametre=="All")
{
	$sql= "SELECT * FROM masterdata";
}

			$result = mysqli_query($conn,$sql);
			//echo $result;

			//echo $result.'result is';
			//echo mysqli_num_rows($result);

echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
        <tr>
          <th height='50' colspan='15'> ASLDS -DDU GKY PROGRAM 2020-21</th>
        </tr>
        <tr>
          <th  align='center' valign='middle' bgcolor='#2681AC'>Sl.No</th>
          <th  align='center' valign='middle' bgcolor='#2681AC'>ID</th>
          <th  align='center' valign='middle' bgcolor='#2681AC'>Name</th>
          <th  align='center' valign='middle' bgcolor='#2681AC'>Mobile</th>
        
          <th  align='center' valign='middle' bgcolor='#2681AC'>District</th>
        
          <th  align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
          <th  align='center' valign='middle' bgcolor='#2681AC'>DOB</th>
          <th align='center' valign='middle' bgcolor='#2681AC'>Course Prefered</th>
          <th align='center' valign='middle' bgcolor='#2681AC'>Qualification</th>
        
          <th align='center' valign='middle' bgcolor='#2681AC'>View</th>
          <th align='center' valign='middle' bgcolor='#2681AC'>Status</th>
        </tr>";	

$slno=1;
while($row = mysqli_fetch_array($result)) 
{
	$id=$row['id'];
	$name=$row['name'];
	$mobile=$row['mobile'];
	$mail=$row['mail'];
	$district=$row['district'];
	$panchayath=$row['panchayath'];
	$gender=$row['gender'];
	$dob=$row['dob'];
	$course=$row['course'];
	$lastq=$row['lastq'];
	$gmobile=$row['gmobile'];
	$name=$row['name'];
  echo " <tr>";
   echo "<td width='5%'>".$slno."</td>";
    echo "<td width='5%'>".$id."</td>";
	 echo "<td width='5%'>".$name."</td>";
	  echo "<td width='5%'>".$mobile."</td>";
	  
	    echo "<td width='5%'>".$district."</td>";
		
		  echo "<td width='5%'>".$gender."</td>";
		   echo "<td width='5%'>".$dob."</td>";
		    echo "<td width='5%'>".$course."</td>";
			 echo "<td width='5%'>".$lastq."</td>";
			
			   echo "<td width='5%'><button class='button1' onclick='shoswStudent(this)'>View</button></td>";
			   if($parametre=="All")
			   {
				     echo "<td width='5%'>---</td>";
			   }
			   else{
				     echo "<td width='5%'><button class='button1' onclick='Update_collected(this)'>completed ✔</button></td>";
				   }
			  
    echo " <tr>";
	
	$slno++;
}

echo"</table></br>"		

		



?>