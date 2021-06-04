<?php

$q = $_GET['parametre'];

require 'database.php';
//echo $q.'Responce';

$sql="SELECT * FROM block WHERE district='$q'";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) 
{
	$val=$row['block'];
  echo "<option value='$val'>" . $val . "</option>";
}

?>