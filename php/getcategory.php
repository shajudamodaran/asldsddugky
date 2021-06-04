<?php

$q = $_GET['parametre'];

require 'database.php';

$sql="SELECT * FROM rcsystem WHERE religion='$q'";
$result = mysqli_query($conn,$sql);





while($row = mysqli_fetch_array($result)) 
{
	$val=$row['caste'];
  echo "<option value='$val'>" . $val . "</option>";
}

?>