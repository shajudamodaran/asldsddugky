<?php

$q = $_GET['parametre'];

require 'database.php';

$sql="SELECT * FROM village WHERE Thaluk='$q'";


$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) 
{
	$val=$row['Village'];
    echo $val;
  echo "<option value='$val'>" . $val . "</option>";
}

?>