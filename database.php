<?php

/*$host='sql213.epizy.com';
$user='epiz_28625040';
$pass='Aslds12';
$dbname='epiz_28625040_asldsddugky';*/

$host='localhost';
$user='root';
$pass='';
$dbname='asldsddugky';

$conn = new mysqli($host, $user, $pass, $dbname);
       // check connection
       if (mysqli_connect_errno())
       {
          exit('Connect failed: '. mysqli_connect_error());
       }
	   else
	   {
		  //echo 'Connection OK';
	   }

?>