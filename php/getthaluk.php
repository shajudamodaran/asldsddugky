<?php

require 'database.php';

$q = $_GET['parametre'];

$sql="SELECT * FROM thaluk WHERE district='$q'";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) 
{
	$val=$row['thaluk'];
  echo "<option value='$val'>" . $val . "</option>";
}

?>