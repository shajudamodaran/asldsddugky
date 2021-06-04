<?php


$para=$_POST['parametre'];

    if ( 0 < $_FILES['file']['error'] ) 
	{
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else 
	{
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $para.'.jpeg');
		//echo $para;
		echo 1;
		
    }

?>