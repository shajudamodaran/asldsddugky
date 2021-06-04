<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="customstyle.css" type="text/css" rel="stylesheet" />
    <link href="custom.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="custom.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="customstyle.css?v=<?php echo time(); ?>">
   
</head>

<?php

require 'database.php';


$para=$_GET['idpara'];



$query = "SELECT * FROM masterdata WHERE id='$para'"; 
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)) 
{


$name=$row['name'];
$panchayath=$row['panchayath'];
$rcnumber=$row['rcnumber'];
$rctype=$row['rctype'];
$registernumber=$row['registernumber'];
$religion=$row['religion'];
$thaluk=$row['thaluk'];
$village=$row['village'];
$aadhaar=$row['aadhaar'];
$address=$row['address'];
$batch_code=$row['batch_code'];
$caste=$row['caste'];
$category=$row['category'];
$course=$row['course'];
$district=$row['district'];
$dob=$row['dob'];
$flag_freezing=$row['flag_freezing'];
$flag_assessment=$row['flag_assessment'];
$flag_ojt=$row['flag_ojt'];
$flag_placement=$row['flag_placement'];
$flag_training=$row['flag_training'];
$fname=$row['fname'];
$gender=$row['gender'];
$gmobile=$row['gmobile'];
$lastq=$row['lastq'];
$mail=$row['mail'];
$mname=$row['mname'];
$mobile=$row['mobile'];
$mstatus=$row['mstatus'];
$block=$row['block'];
$account=$row['account_number'];
$ifsc=$row['IFSC'];
//$image=$row['image'];
}	


//echo $gmobile;



?>

<style>


</style>

<body class="bg-white" style="margin: 0; padding: 0;">






    <! –– Start of Head ...............................................................................-->



        <div class="row m-0">

            <div class="col-md-2 col-2 bg-topbar text-white p-1">

                <div class=" d-flex align-items-center " style="width: 100%; height: 100%; ">
                    <img src="Logos/mord.png" class="img-mord img-fluid  ms-3" />
                </div>

            </div>

            <div class="col-md-10 col-10 bg-topbar d-flex  flex-column text-white p-2 justify-content-center">

                <div class=" d-flex   justify-content-center">
                    <span class="head1">Ministry of Rural Development, Government of India</span>
                </div>
                <div class=" d-flex   justify-content-center">
                    <span class="head2">ASLDS - DEEN DAYAL UPADHYAYA GRAMEEN KAUSHALYA YOJANA (DDU-GKY)</span>

                </div>

            </div>
        </div>

        <div class="container-fluid">

            <div class="row shadow-sm  mb-0 bg-body rounded  d-flex align-items-center shadow">

                <div class="col-md-8 col-12 p-0   " style="min-height: 4vw;">


                </div>

                <div class="col-md-4 col-12 pr-2  d-flex align-items-center justify-content-center "
                    style="min-height: 4vw;">

                    <img src="Logos/logo.png" alt="" class="img-fluid img-dd">
                    <img src="Logos/ddu main.jpg" alt="" class="img-fluid img-dd">
                    <img src="Logos/kudumbasree main.png" alt="" class="img-fluid img-kd">
                </div>

            </div>

        </div>





        <div class="row m-0" style="z-index:-1; max-width: 100%;">

            <div class="col-md-12 bg-light2  d-flex align-items-center justify-content-left " style="min-height: 3vw;">



            </div>

        </div>
        </div>


        <!––End of Head ...............................................................................-->


            <div class="row p-0 m-0 bg-light">

                <div class="col-md-4 col-sm-4 col-12 d-block align-items-center justify-content-center p-4"
                    style=" border-right: 1px solid rgb(187, 187, 187);">


                    <div class="card shadow-lg w-100 p-2 pb-3 d-flex align-items-center justify-content-center bg-light">

                        <div class="card w-100 d-flex align-items-center justify-content-center p-3">

                        <div class="outer d-flex justify-content-center shadow">
                            <img class="inner d-flex align-items-center justify-content-center"
                            src="" style="  
                          background-image: url('<?php echo 'uploads/'.$para.'.jpeg'?>');
                            background-repeat: no-repeat;
                            background-position: 60% 60%;
                            background-clip: padding-box;" />

                            
                        </div>

                        <label class="mt-2" style="font-size: 1.3rem; font-weight: 500;"><?php echo $name?></label>

                        </div>

                       

                        <div class="form-group" style="width:80%;">
                            <label for="exampleInputPassword1">Candidate Name</label>
                            <input type="text" class="form-control mt-1 <?php if($name == '') {echo"novalue";} ?>" onChange="(validateData(this))" id="c_name" placeholder="" value="<?php if($name!=""){echo $name;}else{echo "";}?>" >
                        </div>

                        <div class="form-group mt-1" style="width:80%;">
                            <label for="exampleInputPassword1">Course</label>
                                <select class="form-control mt-1 <?php if($course == '') {echo"novalue";} ?>" id="c_course" onChange="(validateData(this))">
                                <option value="" <?php if($course == null){echo ' selected="selected"'; }?>>--Select Course--</option>
          <option value="1" <?php if($course == 'Software Developer & Support Engineer'){ echo ' selected="selected"'; } ?>>Software developer & Support Engineer</option>
          <option value="2" <?php if($course == 'Hardware Developer & Support Engineer'){ echo ' selected="selected"'; } ?>>Hardware Developer & Support Engineer</option>
                                </select>
                        </div>

                        <div class="form-group mt-1" style="width:80%;">
                            <label for="exampleInputPassword1">Register Number</label>
                            <input type="text" class="form-control mt-1 <?php if($registernumber == '') {echo"novalue";} ?>" id="c_registernumber" placeholder="" value="<?php echo $registernumber?>" onChange="(validateData(this))" >
                        </div>

                        <div class="form-group mt-1" style="width:80%;">
                            <label for="exampleInputPassword1">Mobile Number</label>
                            <input type="text" class="form-control mt-1 <?php if($mobile == '') {echo"novalue";} ?>" id="c_mobile" placeholder="" value="<?php echo $mobile?>" onChange="(validateData(this))" >
                        </div>

                        <div class="form-group mt-1" style="width:80%;">
                            <label for="exampleInputPassword1">E-mail Id</label>
                            <input type="text" class="form-control mt-1 <?php if($mail == '') {echo"novalue";} ?>" id="c_mail" placeholder="" value="<?php echo $mail?>" onChange="(validateData(this))" >
                        </div>

                        <div class="form-group mt-1" style="width:80%;">
                            <label for="exampleInputPassword1">Date of Birth</label>
                            <input type="text" class="form-control mt-1 <?php if($dob == '0000-00-00') {echo"novalue";} ?>"  id="c_dob" placeholder="yyyy-mm-dd" value="<?php echo $dob?>" onChange="(validateData(this))" >
                        </div>


                        <div class=" mt-2 custom-control-inline d-flex" style="width:80%;" >

                        <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" <?php if($gender=="Male"){echo "checked";}?> value="Male">
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" <?php if($gender=="Female"){echo "checked";}?> value="Female">
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>

                        </div>

                       
                          
                    </div>


                  <div class="card mt-3">
                      
                     <div class="card-header">
                            Bank Account Details
                      </div>

                      <div class="card-body">


                        <div class="form-group mt-3" style="width:100%;">
                            <label for="exampleInputPassword1">Account Number</label>
                            <input type="text" class="form-control mt-1 <?php if($account == '') {echo"novalue";} ?>" id="c_account" placeholder="" value="<?php if($account!=""){echo $account;}else{echo "";}?>" onChange="(validateData(this))">
                        </div>

                        <div class="form-group mt-3" style="width:100%;">
                            <label for="exampleInputPassword1">IFSC Code</label>
                            <input type="text" class="form-control mt-1 <?php if($ifsc == '') {echo"novalue";} ?>" id="c_ifsc" placeholder="" value="<?php echo $ifsc?>" onChange="(validateData(this))">
                        </div>

                        
                    </div>
                    
                   </div>
                  

                </div>

                <div class="col-md-4 col-sm-4 col-12 p-3"
                    style=" border-right: 1px solid rgb(187, 187, 187); font-size: .8rem;">
                    <h5>Edit Details</h5>




                    <div class="card mt-4">

                        <div class="card-header">
                            Location Details
                        </div>

                        <div class="card-body">

                            <div class="form-group mt-1">
                                <label for="dst_select">District</label>
                                <select class="form-control mt-1 <?php if($district == '') {echo"novalue";} ?>" id="c_district" onChange="(validateData(this));  showLsg();">
                                <option value="null" <?php if($district == null){ echo ' selected="selected"'; } ?>>--Select district--</option>
          <option <?php echo ($district == "Thiruvananthapuram") ? 'selected = "selected"' : '' ;?>value="Thiruvananthapuram">Thiruvananthapuram</option>
          <option <?php echo ($district == "Kollam") ? 'selected = "selected"' : '' ;?>value="Kollam">Kollam</option>
          <option <?php echo ($district == "Pathanamthitta") ? 'selected = "selected"' : '' ;?>value="Pathanamthitta">Pathanamthitta</option>
          <option <?php echo ($district == "Alappuzha") ? 'selected = "selected"' : '' ;?>value="Alappuzha">Alappuzha</option>
          <option <?php echo ($district == "Kottayam") ? 'selected = "selected"' : '' ;?>value="Kottayam">Kottayam</option>
          <option <?php echo ($district == "Idukki") ? 'selected = "selected"' : '' ;?>value="Idukki">Idukki</option>
          <option <?php echo ($district == "Ernakulam") ? 'selected = "selected"' : '' ;?>value="Ernakulam">Ernakulam</option>
          <option <?php echo ($district == "Thrissur") ? 'selected = "selected"' : '' ;?>value="Thrissur">Thrissur</option>
          <option <?php echo ($district == "Palakkad") ? 'selected = "selected"' : '' ;?>value="Palakkad">Palakkad</option>
          <option <?php echo ($district == "Malappuram") ? 'selected = "selected"' : '' ;?>value="Malappuram">Malappuram</option>
          <option <?php echo ($district == "Calicut") ? 'selected = "selected"' : '' ;?>value="Calicut">Kozhikkod</option>
          <option <?php echo ($district == "Wayanad") ? 'selected = "selected"' : '' ;?>value="Wayanad">Wayanad</option>
          <option <?php echo ($district == "Kannur") ? 'selected = "selected"' : '' ;?>value="Kannur">Kannur</option>
          <option <?php echo ($district == "Kasargod") ? 'selected = "selected"' : '' ;?>value="Kasargod">Kasaragod</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Grama Panchayath</label>
                                <select class="form-control mt-1 <?php if($panchayath == '') {echo"novalue";} ?>" id="c_lsg" onChange="(validateData(this)); showThaluk()">
                                <option value="<?php echo $panchayath?>"><?php echo $panchayath?></option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Thaluk</label>
                                <select class="form-control mt-1 <?php if($thaluk == '') {echo"novalue";} ?>" id="c_thaluk" onChange="(validateData(this)); showVillage();">
                                <option value="<?php echo $thaluk?>"><?php echo $thaluk?></option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Village</label>
                                <select class="form-control mt-1 <?php if($village == '') {echo"novalue";} ?>" id="c_village" onChange="(validateData(this)); getBlock()">
                                <option value="<?php echo $village?>"><?php echo $block?></option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Block Panchayath</label>
                                <select class="form-control mt-1 <?php if($block == '') {echo"novalue";} ?>" id="c_block" onChange="(validateData(this)) ">
                                <option value="<?php echo $block?>"><?php echo $block?></option>
                                </select>
                            </div>

                           

                            <div class="form-group mt-2">
                                <label for="dst_select">Address</label>
                                <textarea class="form-control mt-1 <?php if($address == '') {echo"novalue";}?>" id="c_address"
                                    placeholder="" onChange="(validateData(this))" ><?php echo $address?></textarea>
                            </div>


                        </div>

                    </div>

                    <div class="card mt-3">

                        <div class="card-header">
                            Ration Card & Aadhaar Card Details
                        </div>

                        <div class="card-body">

                            <div class="form-group mt-3">
                                <label for="dst_select">Ration Card type</label>
                                <select class="form-control mt-1 <?php if($rctype == '') {echo"novalue";} ?>" id="c_rctype"  onchange="(validateData(this))" >
                                <option value="null" <?php if($rctype == null){ echo ' selected="selected"'; } ?>>--Select Type--</option>
          <option value="APL"  <?php if($rctype == 'APL'){ echo ' selected="selected"'; } ?>>APL</option>
          <option value="BPL"  <?php if($rctype == 'BPL'){ echo ' selected="selected"'; } ?>>BPL</option>
                                </select>
                            </div>

                            
                        <div class="form-group mt-3" style="width:100%;">
                            <label for="exampleInputPassword1">Ration Card Number</label>
                            <input type="text" class="form-control mt-1 <?php if($rcnumber == '') {echo"novalue";}?>" id="c_rcnumber" placeholder="" value="<?php echo $rcnumber?>"  onchange="(validateData(this))">
                        </div>

                        <div class="form-group mt-3" style="width:100%;">
                            <label for="exampleInputPassword1">Aadhaar Card Number</label>
                            <input type="text" class="form-control mt-1 <?php if($aadhaar == '') {echo"novalue";} ?>" id="c_aadhaar" placeholder="" value="<?php echo $aadhaar?>"  onchange="(validateData(this))">
                        </div>

                        </div>
                    </div>


                </div>
                <div class="col-md-4 col-sm-4 col-12 p-3">
                    <div class="card mt-5">

                        <div class="card-header">
                            Personal Details
                        </div>

                        <div class="card-body">

                            <div class="form-group mt-1" style="width:100%;">
                                <label for="exampleInputPassword1">Father Name</label>
                                <input type="text" class="form-control mt-1 <?php if($fname == '') {echo"novalue";} ?>" id="c_fname" placeholder="" value="<?php echo $fname?>"  onchange="(validateData(this))">
                            </div>

                            <div class="form-group mt-1" style="width:100%;">
                                <label for="exampleInputPassword1">Mother Name</label>
                                <input type="text" class="form-control mt-1 <?php if($mname == '') {echo"novalue";} ?>" id="c_mname" placeholder="" value="<?php echo $mname?>"  onchange="(validateData(this))">
                            </div>

                            <div class="form-group mt-1" style="width:100%;">
                                <label for="exampleInputPassword1 ">Guardian Contact Number</label>
                                <input type="text" class="form-control mt-1 <?php if($gmobile == '') {echo"novalue";} ?>" id="c_gmobile" placeholder="" value="<?php echo $gmobile?>"  onchange="(validateData(this))">
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Marital Status</label>
                                <select class="form-control mt-1 <?php if($mstatus == '') {echo"novalue";} ?>" id="c_mstatus" onChange="validateData(this)" >
                                <option value="null">--Select Marital Status--</option>
          <option value="Single" <?php if($mstatus == 'Single'){ echo ' selected="selected"'; } ?>>Single</option>
          <option value="Married" <?php if($mstatus == 'Married'){ echo ' selected="selected"'; } ?>>Married</option>
          <option value="Widow" <?php if($mstatus == 'Widow'){ echo ' selected="selected"'; } ?>>Widow</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Religion</label>
                                <select class="form-control mt-1 <?php if($religion == '') {echo"novalue";} ?>" id="c_religion"  onchange="validateData(this); getCaste()">
                                <option value="null" <?php if($religion == null){ echo ' selected="selected"'; } ?>>--Select Religion--</option>
          <option value="Hindu" <?php if($religion == 'Hindu'){ echo ' selected="selected"'; } ?>>Hindu</option>
          <option value="Muslim" <?php if($religion == 'Muslim'){ echo ' selected="selected"'; } ?>>Muslim</option>
          <option value="Christian" <?php if($religion == 'Christian'){ echo ' selected="selected"'; } ?>>Christian</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Caste</label>
                                <select class="form-control mt-1 <?php if($caste == '') {echo"novalue";} ?>"id="c_caste"  onchange="(validateData(this) )" >
                                <option value="<?php echo $caste?>"><?php echo $caste?></option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Category</label>
                                <select class="form-control mt-1 <?php if($category == '') {echo"novalue";} ?>" id="c_category"  onchange="(validateData(this))">
                                <option value="General" <?php if($category == 'General'){ echo ' selected="selected"'; } ?>>General</option>
          <option value="OBC" <?php if($category == 'OBC'){ echo ' selected="selected"'; } ?>>OBC</option>
          <option value="Minority" <?php if($category == 'Minority'){ echo ' selected="selected"'; } ?>>Minority</option>
          <option value="SC" <?php if($category == 'SC'){ echo ' selected="selected"'; } ?>>SC</option>
          <option value="ST" <?php if($category == 'ST'){ echo ' selected="selected"'; } ?>>ST</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="dst_select">Last Education Qualification</label>
                                <select class="form-control mt-1 <?php if($lastq == '') {echo"novalue";} ?>" id="c_lastq"  onchange="(validateData(this))">
                                <option value="null" <?php if($lastq == null){ echo ' selected="selected"'; } ?>>--Select Qualification--</option>
          <option value="SSLC" <?php if($lastq == 'SSLC'){ echo ' selected="selected"'; } ?>>SSLC</option>
          <option value="Plus Two" <?php if($lastq == 'Plus Two'){ echo ' selected="selected"'; } ?>>Plus Two</option>
          <option value="Degree" <?php if($lastq == 'Degree'){ echo ' selected="selected"'; } ?>>Degree</option>
          <option value="Diploma" <?php if($lastq == 'Diploma'){ echo ' selected="selected"'; } ?>>Diploma</option>
          <option value="Other" <?php if($lastq == 'Other'){ echo ' selected="selected"'; } ?>>Other</option>
                                </select>
                            </div>


                        </div>
                    </div>

                    <button type="button" class="btn btn-success btn-lg mt-3 w-100 " onClick="Update()" ><i class="fas fa-edit"></i>UPDATE</button>
                    <button type="button" class="btn btn-primary btn-lg mt-3 w-100 <?php if($account != '') {echo"d-none";} ?>" onclick="(addBank())" ><i class="fas fa-university"></i>Link Bank Account</button>
                    <button type="button" class="btn btn-danger btn-lg mt-3 w-100" > <i class="fas fa-trash-alt"></i>Delete Student</button>
                </div>
            </div>










            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
                integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
                crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/e17c58b6d5.js" crossorigin="anonymous"></script>
            <script src="JQ.js" type="text/javaScript"></script>
            

            <script>

function validateData(x)
{
    //alert(x.value);

    console.log(x.value);

    if(x.value=="" || x.value=="null")
    {
        x.classList.remove("valueupdated");
        x.classList.add("novalue");
       //x.classList.add("valueupdated");
       
    }
    else if(x.value!="")
    {
        x.classList.remove("novalue");
        x.classList.add("valueupdated");
    }
   

    
}

function showLsg()
{
	var selected_dst=document.getElementById("c_district").value;
	//alert(selected_dst);
	document.getElementById("c_lsg").options.length = 0;
	
	//console.log(selected_dst);
	
	 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
	{
      if (this.readyState == 4 && this.status == 200) 
	  {
       //document.getElementById().innerHTML = this.responseText;
	   //$('#c_lsg').append(this.responseText);
	    $('#c_lsg').append(this.responseText);
	   //alert(this.responseText);
	   //console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","php/getlsg.php?parametre="+selected_dst,true);
    xmlhttp.send();
	
	
}

function showThaluk()
{
	var selected_dst=document.getElementById("c_district").value;
	//alert(selected_dst);
	document.getElementById("c_thaluk").options.length = 0;
	
	//console.log(selected_dst);
	
	 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
	{
      if (this.readyState == 4 && this.status == 200) 
	  {
       //document.getElementById().innerHTML = this.responseText;
	   //$('#c_lsg').append(this.responseText);
	    $('#c_thaluk').append(this.responseText);
	   //alert(this.responseText);
	   //console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","php/getthaluk.php?parametre="+selected_dst,true);
    xmlhttp.send();
	
	
}

function showVillage()
{
	var selected_dst=document.getElementById("c_thaluk").value;
	//alert(selected_dst);
	document.getElementById("c_village").options.length = 0;
	
	//console.log(selected_dst);
	
	 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
	{
      if (this.readyState == 4 && this.status == 200) 
	  {
       //document.getElementById().innerHTML = this.responseText;
	   //$('#c_lsg').append(this.responseText);
	    $('#c_village').append(this.responseText);
	   //alert(this.responseText);
	   //console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","php/getvillage.php?parametre="+selected_dst,true);
    xmlhttp.send();
	
	
}

function getBlock()
{
	var selected_dst=document.getElementById("c_district").value;
	//alert(selected_dst);
	document.getElementById("c_block").options.length = 0;
	
	//console.log(selected_dst);
	
	 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
	{
      if (this.readyState == 4 && this.status == 200) 
	  {
       //document.getElementById().innerHTML = this.responseText;
	   //$('#c_lsg').append(this.responseText);
	    $('#c_block').append(this.responseText);
	   //alert(this.responseText);
	   //console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","php/getBlock.php?parametre="+selected_dst,true);
    xmlhttp.send();
	
	
}

function getCaste()
{
	var selected_dst=document.getElementById("c_religion").value;
	//alert(selected_dst);
	document.getElementById("c_caste").options.length= 0;
	
	//console.log(selected_dst);
	
	 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
	{
      if (this.readyState == 4 && this.status == 200) 
	  {
       //document.getElementById().innerHTML = this.responseText;
	   //$('#c_lsg').append(this.responseText);
	    $('#c_caste').append(this.responseText);
	  // alert(this.responseText);
	   //console.log(this.responseText);
      }
    };
    xmlhttp.open("GET","php/getcategory.php?parametre="+selected_dst,true);
    xmlhttp.send();
	
	
}


function Update()
{
   
var gen="";


    if(document.getElementById("flexRadioDefault1").checked)
    {
        gen="Male";
    }
    else{
        gen="Female";
    }



    


    var formData = 
	{
      aadhaar: $("#c_aadhaar").val(),
      address: $("#c_address").val(),
	  caste: $("#c_caste").val(),
	  category: $("#c_category").val(),
	  course: $("#c_course").val(),
	  district: $("#c_district").val(),
	  dob: $("#c_dob").val(),
	  fname: $("#c_fname").val(),
	  mname: $("#c_mname").val(),
	  gender: gen,
	  gmobile: $("#c_gmobile").val(),
	  lastq: $("#c_lastq").val(),
	  mail: $("#c_mail").val(),
	  mobile: $("#c_mobile").val(),
	  mstatus: $("#c_mstatus").val(),
	  name: $("#c_name").val(),
	  panchayath: $("#c_lsg").val(),
	  rcnumber: $("#c_rcnumber").val(),
	  rctype: $("#c_rctype").val(),
	  religion: $("#c_religion").val(),
	  thaluk: $("#c_thaluk").val(),
	  village: $("#c_village").val(),
      redisternumber: $("#c_registernumber").val(),
      account: $("#c_account").val(),
      ifsc: $("#c_ifsc").val(),
      block: $("#c_block").val(),
	  id: "<?php echo $para ?>"
    };
    

	$.ajax({
      type: "POST",
      url: "edit_ajax.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) 
	{
      //console.log(data);
	  //alert(data);
	  if(data=="1")
	  {
		 alert("Updated Successfully"); 
         location.reload();
	  }
	  else
	  {
		  alert(data);
	  }
	  
	
    });





    console.log(formData);

}

function addBank()
{
    var person = prompt("Please enter your Bank Name", "");

        if (person !=="" || person !==null) 
        {
            if(person===null || person==="" )
            {

            }
            else
            {
                var person2 = prompt("Please enter your Account Number", "");

                if(person2===null || person2==="")
                    {

                    }
                    else
                    {
                        if(person2 !== "")
                            {
                 
                                        var xmlhttp = new XMLHttpRequest();
                                        xmlhttp.onreadystatechange = function() 
                                        {
                                        if (this.readyState == 4 && this.status == 200) 
                                        {
                                        //document.getElementById().innerHTML = this.responseText;
                                        //$('#c_lsg').append(this.responseText);
                                            //$('#c_caste').append(this.responseText);
                                         //alert(this.responseText);
                                        //console.log(this.responseText);

                                        if(this.responseText=="1")
                                        {
                                                alert("Success");
                                        }
                                        else
                                        {
                                                alert(this.responseText);
                                        }

                                        }
                                        };
                                        xmlhttp.open("GET","getCData.php?parametre="+"bank"+"&U="+"<?php echo $para?>"+"&A="+person+"&A2="+person2,true);
                                        xmlhttp.send();


                            }

                    }

               

            }
           
        
        }

}



</script>

            

            
</body>

</html>