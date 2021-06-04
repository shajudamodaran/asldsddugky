<?php

$q = $_GET['parametre'];

require 'database.php';
//echo $q.'Responce';

$sql="SELECT * FROM lsg WHERE district='$q'";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) 
{
	$val=$row['panchayath'];
  echo "<option value='$val'>" . $val . "</option>";
}

?>