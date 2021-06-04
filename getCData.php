<?php

require 'database.php';

$para = $_GET['parametre'];
$U = $_GET['U'];
$A = $_GET['A'];


if ($para == 'course') 
{
    $sql = "SELECT * FROM course";
    $result = mysqli_query($conn, $sql);
    //echo  $result;

    //echo mysqli_num_rows($result);


    while ($row = mysqli_fetch_array($result)) {
        $val = $row['name'];
        $val2 = $row['code'];
        //echo $val;
        echo "<option value='$val2'>" . $val . "</option>";
    }
}

else if ($para == 'batch') 
{
    $sql = "SELECT * FROM batch Where `coursecode`='$A'";
    $result = mysqli_query($conn, $sql);
    //echo  $result;

    echo $sql;
    echo mysqli_num_rows($result);


    while ($row = mysqli_fetch_array($result)) 
    {
        $val = $row['code'];
        //echo $val;
        echo "<option value='$val'>" . $val . "</option>";
    }
}

else if ($para=="batchView") 
{
    $course="";
    if($U=="1")
    {
        $course="Software Developer & Support Engineer";
    }
    else
    {
        $course="Hardware Developer & Support Engineer";
    }
    $sql = "SELECT * FROM masterdata Where `course`='$course' AND `batch_code`='$A'";
    $result = mysqli_query($conn, $sql);

    
    $len=mysqli_num_rows($result);
    //echo $sql;

    if($len==0)
    {
        echo "<div class='alert alert-danger ' role='alert'>
        No Candidates are assigned to this ($A) batch !!!
      </div>";
    }
    else
    {

        echo "<table border='1' class='customers2' id='developer'>

        <tr class=''>
          <th class='p-3 '>Sl No</th>
          <th class='p-3'>Name</th>
          <th class='p-3'>District</th>
          <th class='p-3'>Contact Number</th>
          <th class='p-3'>Assign Batch</th>
        </tr>";
    
        $slno=1;
        while ($row = mysqli_fetch_array($result)) 
        {
            $val = $row['name'];
            $val2 = $row['district'];
            $val3 = $row['mobile'];
            $val4 = $row['id'];
    
            echo "<tr class='' id='$val4'>
              <td class='p-3 '>$slno</td>
              <td class='p-3'>$val</td>
              <td class='p-3'>$val2</td>
              <td class='p-3'>$val3</td>
              <td class='p-3'><button class='btn btn-primary' style='font-size:13px;)'  onclick='viewStudent($val4)';>View</button></td>
            </tr>";
    
            $slno++;
        }

    }

    
   
    
}
else if($para=="bank")
{
    $A2 = $_GET['U'];

    //echo $U.$A.$A2;

    $sql="UPDATE `masterdata` SET `IFSC`='$A2',`account_number`='$A' WHERE `id`='$A2'";

    if ($conn->query($sql) === TRUE) 
	   {
       		echo '1';
	  // Header("Location: Successfull.php?user=".$name.'&course='.$course);
       }
       else 
	   {
         echo 'Error: '. $conn->error;
       }


}
else if ($para=="batchPending") 
{
   
    $sql = "SELECT * FROM masterdata Where `batch_code`=''";
    $result = mysqli_query($conn, $sql);

    
    $len=mysqli_num_rows($result);
    //echo $sql;

    if($len==0)
    {
        echo "<div class='alert alert-danger ' role='alert'>
        No Candidates are pending to assign batch !!!
      </div>";
    }
    else
    {

        echo "<table border='1' class='customers2' id='bp'>

        <tr class=''>
          <th class='p-3 '>Sl No</th>
          <th class='p-3'>Name</th>
          <th class='p-3'>District</th>
          <th class='p-3'>Contact Number</th>
          <th class='p-3'>Assign Batch</th>
        </tr>";
    
        $slno=1;
        while ($row = mysqli_fetch_array($result)) 
        {
            $val = $row['name'];
            $val2 = $row['district'];
            $val3 = $row['mobile'];
            $val4 = $row['id'];
    
            echo "<tr class='' id='$val4'>
              <td class='p-3 '>$slno</td>
              <td class='p-3'>$val</td>
              <td class='p-3'>$val2</td>
              <td class='p-3'>$val3</td>
              <td class='p-3'><button class='btn btn-primary' style='font-size:13px;)'  onclick='assignBatch($val4)';>Assign</button></td>
            </tr>";
    
            $slno++;
        }

    }

    
   
    
}

else if($para=="assignBatch")
{
    
    //echo $U.$A.$A2;

    $sql="UPDATE `masterdata` SET `batch_code`='$A' WHERE `id`='$U'";

    if ($conn->query($sql) === TRUE) 
	   {
       		echo '1';
	  // Header("Location: Successfull.php?user=".$name.'&course='.$course);
       }
       else 
	   {
         echo 'Error: '. $conn->error;
       }


}

else if ($para=="primary") 
{

  $sql = "SELECT * FROM mobilisation Where `status`='Primary Follow-Up'";
  $result = mysqli_query($conn, $sql);

  
  $len=mysqli_num_rows($result);
  //echo $sql;

  if($len==0)
  {
      echo "<div class='alert alert-danger ' role='alert'>
      No Candidates are pending in primary followup !!!
    </div>";
  }
  else
  {

      echo "<table border='1' class='customers2' id='bp'>

      <tr class=''>
        <th class='p-3 '>Sl No</th>
        <th class='p-3'>Name</th>
        <th class='p-3'>District</th>
        <th class='p-3'>Panchayath</th>
        <th class='p-3'>Number</th>
        <th class='p-3'>Interested</th>
        <th class='p-3'>Not Interested</th>
        <th class='p-3'>In Followup</th>
      </tr>";
  
      $slno=1;
      while ($row = mysqli_fetch_array($result)) 
      {
          $val = $row['name'];
          $val2 = $row['district'];
          $val3 = $row['grama_panchayat'];
          $val4 = $row['contact_number'];
          $val0 = $row['id'];
  
          echo "<tr class='' id='$val0'>
            <td class='p-3 '>$slno</td>
            <td class='p-3'>$val</td>
            <td class='p-3'>$val2</td>
            <td class='p-3'>$val3</td>
            <td class='p-3'>$val4</td>
            <td class='p-3'><button class='btn btn-success' style='font-size:13px;)'  onclick='assignBatch($val4)';>Interested</button></td>
            <td class='p-3'><button class='btn btn-danger' style='font-size:13px;)'  onclick='assignBatch($val4)';>Not Interested</button></td>
            <td class='p-3'><button class='btn btn-info' style='font-size:13px;)'  onclick='assignBatch($val4)';>In Followup</button></td>
          </tr>";
  
          $slno++;
      }

  }


}

else if ($para=="infollowup") 
{

  $sql = "SELECT * FROM mobilisation Where `status`='In Follow-up'";
  $result = mysqli_query($conn, $sql);

  
  $len=mysqli_num_rows($result);
  //echo $sql;

  if($len==0)
  {
      echo "<div class='alert alert-danger ' role='alert'>
      No Candidates are pending in primary followup !!!
    </div>";
  }
  else
  {

      echo "<table border='1' class='customers2' id='bp'>

      <tr class=''>
        <th class='p-3 '>Sl No</th>
        <th class='p-3'>Name</th>
        <th class='p-3'>District</th>
        <th class='p-3'>Panchayath</th>
        <th class='p-3'>Number</th>
        <th class='p-3' width='15%'>Interested</th>
        <th class='p-3' width='15%'>Not Interested</th>
      </tr>";
  
      $slno=1;
      while ($row = mysqli_fetch_array($result)) 
      {
          $val = $row['name'];
          $val2 = $row['district'];
          $val3 = $row['grama_panchayat'];
          $val4 = $row['contact_number'];
          $val0 = $row['id'];
  
          echo "<tr class='' id='$val0'>
            <td class='p-3 '>$slno</td>
            <td class='p-3'>$val</td>
            <td class='p-3'>$val2</td>
            <td class='p-3'>$val3</td>
            <td class='p-3'>$val4</td>
            <td class='p-3'><button class='btn btn-success' style='font-size:13px;)'  onclick='assignBatch($val4)';>Interested</button></td>
            <td class='p-3'><button class='btn btn-danger' style='font-size:13px;)'  onclick='assignBatch($val4)';>Not Interested</button></td>
          </tr>";
  
          $slno++;
      }

  }


}

else if ($para=="wadmission") 
{

  $sql = "SELECT * FROM mobilisation Where `status`='Interested' AND `admission`='' ";
  $result = mysqli_query($conn, $sql);

  
  $len=mysqli_num_rows($result);
  //echo $sql;

  if($len==0)
  {
      echo "<div class='alert alert-danger ' role='alert'>
      No Candidates are pending in primary followup !!!
    </div>";
  }
  else
  {

      echo "<table border='1' class='customers2' id='bp'>

      <tr class=''>
        <th class='p-3 '>Sl No</th>
        <th class='p-3'>Name</th>
        <th class='p-3'>District</th>
        <th class='p-3'>Panchayath</th>
        <th class='p-3'>Number</th>
        <th class='p-3' width='15%'>Admitted</th>
        <th class='p-3' width='15%'>Not Interested</th>
      </tr>";
  
      $slno=1;
      while ($row = mysqli_fetch_array($result)) 
      {
          $val = $row['name'];
          $val2 = $row['district'];
          $val3 = $row['grama_panchayat'];
          $val4 = $row['contact_number'];
          $val0 = $row['id'];
  
          echo "<tr class='' id='$val0'>
            <td class='p-3 '>$slno</td>
            <td class='p-3'>$val</td>
            <td class='p-3'>$val2</td>
            <td class='p-3'>$val3</td>
            <td class='p-3'>$val4</td>
            <td class='p-3'><button class='btn btn-success' style='font-size:13px;)'  onclick='assignBatch($val4)';>Admit</button></td>
            <td class='p-3'><button class='btn btn-danger' style='font-size:13px;)'  onclick='assignBatch($val4)';>Not Interested</button></td>
          </tr>";
  
          $slno++;
      }

  }


}

else if ($para=="admitted") 
{

  $sql = "SELECT * FROM mobilisation Where `admission`='yes' ";
  $result = mysqli_query($conn, $sql);

  
  $len=mysqli_num_rows($result);
  //echo $sql;

  if($len==0)
  {
      echo "<div class='alert alert-danger ' role='alert'>
      No Candidates are pending in primary followup !!!
    </div>";
  }
  else
  {

      echo "<table border='1' class='customers2' id='bp'>

      <tr class=''>
        <th class='p-3 '>Sl No</th>
        <th class='p-3'>Name</th>
        <th class='p-3'>District</th>
        <th class='p-3'>Panchayath</th>
        <th class='p-3'>Number</th>
      </tr>";
  
      $slno=1;
      while ($row = mysqli_fetch_array($result)) 
      {
          $val = $row['name'];
          $val2 = $row['district'];
          $val3 = $row['grama_panchayat'];
          $val4 = $row['contact_number'];
          $val0 = $row['id'];
  
          echo "<tr class='' id='$val0'>
            <td class='p-3 '>$slno</td>
            <td class='p-3'>$val</td>
            <td class='p-3'>$val2</td>
            <td class='p-3'>$val3</td>
            <td class='p-3'>$val4</td>
          </tr>";
  
          $slno++;
      }

  }


}
