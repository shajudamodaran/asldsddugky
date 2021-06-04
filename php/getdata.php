<?php

require 'database.php';
$q = $_GET['parametre'];

$U = $_GET['parametreU'];
$A = $_GET['parametreA'];

if($q=='batch_pending')
{
	$sql="SELECT * FROM masterdata WHERE batch_code =''";

echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
            <tr>
              <th height='50' colspan='9'> ASLDS - DDU GKY PROGRAM 2020-21</th>
            </tr>
            <tr>
              <th width='9%' align='center' valign='middle' bgcolor='#2681AC'>Sl.No</th>
              <th width='10%' align='center' valign='middle' bgcolor='#2681AC'>ID</th>
              <th width='16%' align='center' valign='middle' bgcolor='#2681AC'>Name</th>
              <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Mobile</th>
              <th width='10%' align='center' valign='middle' bgcolor='#2681AC'>District</th>
              <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
              <th width='14%' align='center' valign='middle' bgcolor='#2681AC'>Course Prefered</th>
              <th width='19%' align='center' valign='middle' bgcolor='#2681AC'>Assign Batch</th>
            </tr>";
			
			$result = mysqli_query($conn,$sql);
			
			//echo mysqli_num_rows($result);
			$slno=1;
			while($row = mysqli_fetch_array($result)) 
			{
				$id=$row['id'];
				$name=$row['name'];
				$mobile=$row['mobile'];
				$district=$row['district'];
				$gender=$row['gender'];
				$course=$row['course'];
				
				//echo $val;
			 //echo "<option value='$val'>" . $val . "</option>";
			 
			  echo " <tr>";
			   	echo "<td width='5%'>".$slno."</td>";
				echo "<td width='5%'>".$id."</td>";
				echo "<td width='5%'>".$name."</td>";
				echo "<td width='5%'>".$mobile."</td>";
				echo "<td width='5%'>".$district."</td>";
				echo "<td width='5%'>".$gender."</td>";
				echo "<td width='5%'>".$course."</td>";
				echo "<td width='5%'>"."<button onClick='assignBatch(this)'>Assign</button>"."</td>";

			  echo " </tr>";
			  
			  $slno++;
			 	
			}


}//if batch Pending completed ..................................................
else if($q=='assignbatch')
{
	 $sql="UPDATE masterdata SET batch_code = '$A' WHERE id = $U";	
	 $result = mysqli_query($conn,$sql);
	 echo $result;
}
else if($q=='load_batch')
{
	$sql="SELECT * FROM masterdata WHERE batch_code ='$A'";

echo "<table width='100%' border='1' id='customers2'>
            <tr>
              <th height='50' colspan='9'> ASLDS - DDU GKY PROGRAM 2020-21</br>(Student Data)</th>
            </tr>
            <tr>
              <th width='9%' align='center' valign='middle' bgcolor='#2681AC' >Sl.No</th>
              <th width='10%' align='center' valign='middle' bgcolor='#2681AC'>ID</th>
              <th width='16%' align='center' valign='middle' bgcolor='#2681AC'>Name</th>
              <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Mobile</th>
              <th width='10%' align='center' valign='middle' bgcolor='#2681AC'>District</th>
              <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
              <th width='14%' align='center' valign='middle' bgcolor='#2681AC'>Course Prefered</th>
              <th width='19%' align='center' valign='middle' bgcolor='#2681AC'>Details</th>
            </tr>";
			
			$result = mysqli_query($conn,$sql);
			
			//echo mysqli_num_rows($result);
			$slno=1;
			while($row = mysqli_fetch_array($result)) 
			{
				$id=$row['id'];
				$name=$row['name'];
				$mobile=$row['mobile'];
				$district=$row['district'];
				$gender=$row['gender'];
				$course=$row['course'];
				
				//echo $val;
			 //echo "<option value='$val'>" . $val . "</option>";
			 
			  echo " <tr>";
			   	echo "<td width='5%'>".$slno."</td>";
				echo "<td width='5%'>".$id."</td>";
				echo "<td width='5%'>".$name."</td>";
				echo "<td width='5%'>".$mobile."</td>";
				echo "<td width='5%'>".$district."</td>";
				echo "<td width='5%'>".$gender."</td>";
				echo "<td width='5%'>".$course."</td>";
				echo "<td width='5%'>"."<button onClick='shoswStudent(this)'>View</button>"."</td>";

			  echo " </tr>";
			  
			  $slno++;
			 	
			}


}//if batch Pending completed ..................................................

else if($q=='mobilisation')
{

	$sql="SELECT * FROM masterdata";
	$result = mysqli_query($conn,$sql);
	$r0=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE gender ='Male'";
	$result = mysqli_query($conn,$sql);
	$r1=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE gender ='Female'";
	$result = mysqli_query($conn,$sql);
	$r2=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE category ='SC'";
	$result = mysqli_query($conn,$sql);
	$r3=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE category ='ST'";
	$result = mysqli_query($conn,$sql);
	$r4=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE category ='OBC'";
	$result = mysqli_query($conn,$sql);
	$r5=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE category ='Minority'";
	$result = mysqli_query($conn,$sql);
	$r6=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE category ='General'";
	$result = mysqli_query($conn,$sql);
	$r7=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE district ='Thiruvananthapuram'";
	$result = mysqli_query($conn,$sql);
	$r8=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE district ='Kollam'";
	$result = mysqli_query($conn,$sql);
	$r9=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE district ='Pathanamthitta'";
	$result = mysqli_query($conn,$sql);
	$r10=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE district ='Kottayam'";
	$result = mysqli_query($conn,$sql);
	$r11=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE course ='Software Developer & Support Engineer'";
	$result = mysqli_query($conn,$sql);
	$r12=mysqli_num_rows ( $result );
	
	$sql="SELECT * FROM masterdata WHERE course ='Hardware Developer & Support Engineer'";
	$result = mysqli_query($conn,$sql);
	$r13=mysqli_num_rows ( $result );
	
	
	
	
	
	echo"<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
          <tr>
            <th height='50' colspan='15'> ASLDS - DDU GKY PROGRAM 2020-21<br />
              <span>(Mobilisation Report)</span></th>
          </tr>
          <tr>
            <th width='86' rowspan='2' align='center' valign='middle' bgcolor='#2681AC'>Total Students</th>
            <th colspan='2' align='center' valign='middle' bgcolor='#2681AC'>Gender Base</th>
            <th colspan='5' align='center' valign='middle' bgcolor='#2681AC'>Category Based</th>
            <th colspan='4' align='center' valign='middle' bgcolor='#2681AC'>District Based</th>
            <th colspan='2' align='center' valign='middle' bgcolor='#2681AC'>Course Based</th>
            </tr>
          <tr>
            <th width='52' align='center' valign='middle' bgcolor='#2681AC'>Girls</th>
            <th width='55' align='center' valign='middle' bgcolor='#2681AC'>Boys</th>
            
            <th width='42' align='center' valign='middle' bgcolor='#2681AC'>SC</th>
            <th width='40' align='center' valign='middle' bgcolor='#2681AC'>ST</th>
            <th width='50' align='center' valign='middle' bgcolor='#2681AC'>OBC</th>
            <th width='73' align='center' valign='middle' bgcolor='#2681AC'>Minority</th>
            <th width='72' align='center' valign='middle' bgcolor='#2681AC'>General</th>
            
            <th width='71' align='center' valign='middle' bgcolor='#2681AC'>TVM</th>
            <th width='72' align='center' valign='middle' bgcolor='#2681AC'>KLM</th>
            <th width='74' align='center' valign='middle' bgcolor='#2681AC'>PTTA</th>
            <th width='80' align='center' valign='middle' bgcolor='#2681AC'>KTYM</th>
            <th width='70' align='center' valign='middle' bgcolor='#2681AC'>SD &amp; SE</th>
            <th width='68' align='center' valign='middle' bgcolor='#2681AC'>HD &amp; SE</th>
          </tr>
    ";
	
	echo "  <tr>
            <td width='52' align='center' valign='middle'>$r0</th>
			 <td width='52' align='center' valign='middle'>$r2</th>
			  <td width='52' align='center' valign='middle'>$r1</th>
			   <td width='52' align='center' valign='middle'>$r3</th>
			    <td width='52' align='center' valign='middle'>$r4</th>
				 <td width='52' align='center' valign='middle'>$r5</th>
				  <td width='52' align='center' valign='middle'>$r6</th>
				   <td width='52' align='center' valign='middle'>$r7</th>
				    <td width='52' align='center' valign='middle'>$r8</th>
					 <td width='52' align='center' valign='middle'>$r9</th>
					  <td width='52' align='center' valign='middle'>$r10</th>
					   <td width='52' align='center' valign='middle'>$r11</th>
					    <td width='52' align='center' valign='middle'>$r12</th>
						 <td width='52' align='center' valign='middle'>$r13</th>
			</tr>
			</table>
			";
			
	
}

else if($q=='all')
{
	
	$sql="SELECT * FROM masterdata";
	$result = mysqli_query($conn,$sql);
	
	
	
	
	echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF; display:none; ' id='customers'>
          <tr>
            <th height='50' colspan='25' bgcolor='#2681AC' style='color:#FFF;'> ASLDS-DDU GKY PROGRAM 2020-21</th>
          </tr>
          <tr>
            <th width='5%' align='center' valign='middle' bgcolor='#2681AC'  style='color:#FFF;'>Sl.No</th>
            <th width='8%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Candidate Name</th>
            <th width='7%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>District</th>
            <th width='8%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Thaluk</th>
            <th width='7%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Village</th>
            <th width='9%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Panchayath</th>
            <th width='7%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Block</th>
            <th width='7%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Religion</th>
            <th width='7%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Caste</th>
            <th width='7%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Category</th>
            <th width='8%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>APL/ BPL</th>
            <th width='9%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Gender</th>
            <th width='10%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Date of Birth</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Personal Contact Number</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Email ID</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Father's Name</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Mother's Name</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Parent's Contact Number</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Address</th>
            <th width='12%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Aadhar Number</th>
            <th width='10%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Qualification</th>
             <th width='10%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Bank Name</th>
              <th width='10%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Branch Name</th>
              <th width='10%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>IFSC Code</th>
             <th width='10%' align='center' valign='middle' bgcolor='#2681AC' style='color:#FFF;'>Account Number</th>
              
          </tr>";
		  
		  $result = mysqli_query($conn,$sql);
			
			//echo mysqli_num_rows($result);
			$slno=0;
			while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['name'];
                $C2=$row['district'];
                 $C3=$row['thaluk'];
                  $C4=$row['village'];
                   $C5=$row['panchayath'];

                $C6=$row['block'];
                 $C7=$row['religion'];
                  $C8=$row['caste'];
                   $C9=$row['category'];

                $C10=$row['rctype'];
                 $C11=$row['gender'];
                  $C12=$row['dob'];
                   $C13=$row['mobile'];

                $C14=$row['mail'];
                 $C15=$row['fname'];
                  $C16=$row['mname'];
                   $C17=$row['gmobile'];

                $C18=$row['address'];
                 $C19=$row['aadhaar'];
                  $C20=$row['lastq'];
                   
                   $C21="";
                     $C22="";
                       $C23="";
                         $C24="";

                         $slno++;

            echo" <tr>
                        <td width='5%' align='center' valign='middle' >$slno</td>
                          <td width='5%' align='center' valign='middle' >$C1</td>
                            <td width='5%' align='center' valign='middle'  >$C2</td>
                              <td width='5%' align='center' valign='middle' >$C3</td>
                                <td width='5%' align='center' valign='middle'  >$C4</td>
                        
                        <td width='5%' align='center' valign='middle'  >$C5</td>
                          <td width='5%' align='center' valign='middle'  >$C6</td>
                            <td width='5%' align='center' valign='middle' >$C7</td>
                              <td width='5%' align='center' valign='middle'  >$C8</td>
                                <td width='5%' align='center' valign='middle'  >$C9</td>
                        
                        <td width='5%' align='center' valign='middle'  >$C10</td>
                          <td width='5%' align='center' valign='middle'  >$C11</td>
                            <td width='5%' align='center' valign='middle'  >$C12</td>
                              <td width='5%' align='center' valign='middle'  >$C13</td>
                                <td width='5%' align='center' valign='middle' >$C14</td>
                        
                        <td width='5%' align='center' valign='middle'  >$C15</td>
                          <td width='5%' align='center' valign='middle' >$C16</td>
                            <td width='5%' align='center' valign='middle'  >$C17</td>
                              <td width='5%' align='center' valign='middle'  >$C18</td>
                                <td width='5%' align='center' valign='middle'  >$C19</td>
                        
                        <td width='5%' align='center' valign='middle' >$C20</td>
                          <td width='5%' align='center' valign='middle' >$C21</td>
                            <td width='5%' align='center' valign='middle' >$C22</td>
                              <td width='5%' align='center' valign='middle'  >$C23</td>
                                <td width='5%' align='center' valign='middle'  >$C24</td>
                        
                        
                  </tr>";



                         
                
            

			}

            echo "</table>";
		  
		  
	
}

else if($q=='infollowup')
{
	
	$sql="SELECT * FROM mobilisation WHERE `status`='Not Conformed'";
	$result = mysqli_query($conn,$sql);
	
	echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
  <tr>
    <th height='50' colspan='12'> ASLDS DDU-GKY PROGRAM 2020-21<br />
      (List of Students Leads) </th>
  </tr>
  <tr>
    <th width='6%' align='center' valign='middle' bgcolor='#2681AC'>Sl.No</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>ID</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>District</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>Grama Panchayath</th>
    <th width='9%' align='center' valign='middle' bgcolor='#2681AC'>Category</th>
    <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Name</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
    <th width='5%' align='center' valign='middle' bgcolor='#2681AC'>Age</th>
    <th width='12%' align='center' valign='middle' bgcolor='#2681AC'>Number</th>
    <th width='10%' align='center' valign='middle' bgcolor='#2681AC'>Interested</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>Not Interested</th>
  </tr>";
	
	
	

		  
		  $result = mysqli_query($conn,$sql);
			
		//echo mysqli_num_rows($result);
	
		$slno=1;
	
			while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['id'];
				$C2=$row['district'];
				$C3=$row['grama_panchayat'];
				$C4=$row['category'];
				$C5=$row['name'];
				$C6=$row['gender'];
				$C7=$row['age'];
				$C8=$row['contact_number'];
				
				echo "<tr>
						<td width='6%' align='center' valign='middle' >$slno</td>
						<td width='7%' align='center' valign='middle' >$C1</td>
						<td width='8%' align='center' valign='middle' >$C2</td>
						<td width='8%' align='center' valign='middle' >$C3</td>
						<td width='9%' align='center' valign='middle' >$C4</td>
						<td width='11%' align='center' valign='middle'>$C5</td>
						<td width='7%' align='center' valign='middle' >$C6</td>
						<td width='5%' align='center' valign='middle' >$C7</td>
						<td width='12%' align='center' valign='middle'>$C8</td>
						<td width='10%' align='center' valign='middle'><button onClick='Update3(".$C1.",".'1'.",".$slno.");'> Interested ✔️</button></td>
						<td width='8%' align='center' valign='middle' ><button onClick='Update3(".$C1.",".'0'.",".$slno.");'> Not Interested </td>
					  </tr>";
				
				$slno++;
				
				
			}
	
	
	
	
			

            echo "</table>";
			
			echo "
			<script>
			function Update(x)
	{
		console.log(x);
		alert(x);
	}
	
	</script>";
	
	
		  
		  
	
}

else if($q=='wadmission')
{
	
	$sql="SELECT * FROM mobilisation WHERE `status`='Interested' AND `admission`=''";
	$result = mysqli_query($conn,$sql);
	
	echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
  <tr>
    <th height='50' colspan='12'> ASLDS DDU-GKY PROGRAM 2020-21<br />
      (List of Students Leads - Waiting for Admission) </th>
  </tr>
  <tr>
    <th width='6%' align='center' valign='middle' bgcolor='#2681AC'>Sl.No</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>ID</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>District</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>Grama Panchayath</th>
    <th width='9%' align='center' valign='middle' bgcolor='#2681AC'>Category</th>
    <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Name</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
    <th width='5%' align='center' valign='middle' bgcolor='#2681AC'>Age</th>
    <th width='12%' align='center' valign='middle' bgcolor='#2681AC'>Number</th>
    <th width='10%' align='center' valign='middle' bgcolor='#2681AC'>Admit</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>Not Interested</th>
  </tr>";
	
	
	

		  
		  $result = mysqli_query($conn,$sql);
			
		//echo mysqli_num_rows($result);
	
		$slno=1;
	
			while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['id'];
				$C2=$row['district'];
				$C3=$row['grama_panchayat'];
				$C4=$row['category'];
				$C5=$row['name'];
				$C6=$row['gender'];
				$C7=$row['age'];
				$C8=$row['contact_number'];
				
				echo "<tr>
						<td width='6%' align='center' valign='middle' >$slno</td>
						<td width='7%' align='center' valign='middle' >$C1</td>
						<td width='8%' align='center' valign='middle' >$C2</td>
						<td width='8%' align='center' valign='middle' >$C3</td>
						<td width='9%' align='center' valign='middle' >$C4</td>
						<td width='11%' align='center' valign='middle'>$C5</td>
						<td width='7%' align='center' valign='middle' >$C6</td>
						<td width='5%' align='center' valign='middle' >$C7</td>
						<td width='12%' align='center' valign='middle'>$C8</td>
							<td width='10%' align='center' valign='middle'><button onClick='Update4(".$C1.",".'2'.",".$slno.");'> Admit ✔️</button></td>
						<td width='8%' align='center' valign='middle' ><button onClick='Update4(".$C1.",".'0'.",".$slno.");'> Not Interested </td>
					  </tr>";
				
				$slno++;
				
			}
	
	
	
	
			

            echo "</table>";
	
	
		  
		  
	
}
else if($q=='admitted')
{
	
	$sql="SELECT * FROM mobilisation WHERE `admission`='yes'";
	$result = mysqli_query($conn,$sql);
	
	echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
  <tr>
    <th height='50' colspan='12'> ASLDS DDU-GKY PROGRAM 2020-21<br />
      (List of Students Leads - Waiting for Admission) </th>
  </tr>
  <tr>
    <th width='6%' align='center' valign='middle' bgcolor='#2681AC'>Sl.No</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>ID</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>District</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>Grama Panchayath</th>
    <th width='9%' align='center' valign='middle' bgcolor='#2681AC'>Category</th>
    <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Name</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
    <th width='5%' align='center' valign='middle' bgcolor='#2681AC'>Age</th>
    <th width='12%' align='center' valign='middle' bgcolor='#2681AC'>Number</th>
  </tr>";
	
	
	

		  
		  $result = mysqli_query($conn,$sql);
			
		//echo mysqli_num_rows($result);
	
		$slno=1;
	
			while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['id'];
				$C2=$row['district'];
				$C3=$row['grama_panchayat'];
				$C4=$row['category'];
				$C5=$row['name'];
				$C6=$row['gender'];
				$C7=$row['age'];
				$C8=$row['contact_number'];
				
				echo "<tr>
						<td width='6%' align='center' valign='middle' >$slno</td>
						<td width='7%' align='center' valign='middle' >$C1</td>
						<td width='8%' align='center' valign='middle' >$C2</td>
						<td width='8%' align='center' valign='middle' >$C3</td>
						<td width='9%' align='center' valign='middle' >$C4</td>
						<td width='11%' align='center' valign='middle'>$C5</td>
						<td width='7%' align='center' valign='middle' >$C6</td>
						<td width='5%' align='center' valign='middle' >$C7</td>
						<td width='12%' align='center' valign='middle'>$C8</td>
					  </tr>";
				
				$slno++;
				
			}
	
	
	
	
			

            echo "</table>";
	
	
		  
		  
	
}

else if($q=='primarypending')
{
	
	$sql="SELECT * FROM mobilisation WHERE `status`='Primary Follow-Up'";
	$result = mysqli_query($conn,$sql);
	
	echo "<table width='100%' border='1' style='border-collapse: collapse; font-family: Arial; font-size: 14px; font-weight: bold; color: #FFF;' id='customers2'>
  <tr>
    <th height='50' colspan='12'> ASLDS DDU-GKY PROGRAM 2020-21<br />
      (List of Students Leads - Waiting for Admission) </th>
  </tr>
  <tr>
    <th width='6%' align='center' valign='middle' bgcolor='#2681AC'>Sl.No</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>ID</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>District</th>
    <th width='8%' align='center' valign='middle' bgcolor='#2681AC'>Grama Panchayath</th>
    <th width='9%' align='center' valign='middle' bgcolor='#2681AC'>Category</th>
    <th width='11%' align='center' valign='middle' bgcolor='#2681AC'>Name</th>
    <th width='7%' align='center' valign='middle' bgcolor='#2681AC'>Gender</th>
    <th width='5%' align='center' valign='middle' bgcolor='#2681AC'>Age</th>
    <th width='12%' align='center' valign='middle' bgcolor='#2681AC'>Number</th>
	 <th width='5%' align='center' valign='middle' bgcolor='#2681AC'>Interested</th>
    <th width='12%' align='center' valign='middle' bgcolor='#2681AC'>Not Interested</th>

  </tr>";
	
	
	

		  
		  $result = mysqli_query($conn,$sql);
			
		//echo mysqli_num_rows($result);
	
		$slno=1;
	
			while($row = mysqli_fetch_array($result)) 
			{
				$C1=$row['id'];
				$C2=$row['district'];
				$C3=$row['grama_panchayat'];
				$C4=$row['category'];
				$C5=$row['name'];
				$C6=$row['gender'];
				$C7=$row['age'];
				$C8=$row['contact_number'];
				
				echo "<tr>
						<td width='6%' align='center' valign='middle' >$slno</td>
						<td width='7%' align='center' valign='middle' >$C1</td>
						<td width='8%' align='center' valign='middle' >$C2</td>
						<td width='8%' align='center' valign='middle' >$C3</td>
						<td width='9%' align='center' valign='middle' >$C4</td>
						<td width='11%' align='center' valign='middle'>$C5</td>
						<td width='7%' align='center' valign='middle' >$C6</td>
						<td width='5%' align='center' valign='middle' >$C7</td>
						<td width='12%' align='center' valign='middle'>$C8</td>
							<td width='10%' align='center' valign='middle'><button onClick='Update(".$C1.",".'1'.",".$slno.");'> Admit ✔️</button></td>
						<td width='8%' align='center' valign='middle' ><button onClick='Update(".$C1.",".'0'.",".$slno.");'> Not Interested </td>
					  </tr>";
				
				$slno++;
				
			}
	

            echo "</table>";
	
	
		  
		  
	
}

else if($q=='Update')
{
	$query="UPDATE `mobilisation` SET `status`='$A' WHERE `id`='$U'";
	
	 if ($conn->query($query) === TRUE) 
	   {
       		echo '1';
	  // Header("Location: Successfull.php?user=".$name.'&course='.$course);
       }
       else 
	   {
         echo 'Error: '. $conn->error;
       }
}

else if($q=='Admitt')
{
	$query='';
	
	if($A=='Admitted')
	{
		$query="UPDATE `mobilisation` SET `status`='$A',`admission`='yes' WHERE `id`='$U'";
	}
	else
	{
		$query="UPDATE `mobilisation` SET `status`='$A' WHERE `id`='$U'";
	}
	
	 if ($conn->query($query) === TRUE) 
	   {
       		echo '1';
	  // Header("Location: Successfull.php?user=".$name.'&course='.$course);
       }
       else 
	   {
         echo 'Error: '. $conn->error;
       }
}



?>