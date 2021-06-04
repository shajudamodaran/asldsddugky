<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="custom.css?v=0.001" type="text/css" rel="stylesheet">
  <link href="customstyle.css?v=0.001" type="text/css" rel="stylesheet">
</head>

<body style="margin:0; max-width: 100%;">

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

        <div class="col-md-8 col-12 p-0  " style="min-height: 4vw;">

          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="container-fluid h-100  p-0">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-si"></span>
              </button>
              <div class="collapse navbar-collapse h-100" id="navbarTogglerDemo01">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h-100 ">

                  <li class="nav-item nav1 d-flex align-items-center justify-content-center  ">
                    <a class="nav-link  navitem" aria-current="page" href="statepage.php">Home</a>
                  </li>

                  <li class="nav-item nav1 d-flex align-items-center justify-content-center">
                    <a class="nav-link" href="State Batch Report.php">Batch Report</a>
                  </li>

                  <li class="nav-item nav1 d-flex align-items-center justify-content-center">
                    <a class="nav-link active" href="State Mobilisation.php">Mobilisation</a>
                  </li>

                </ul>


              </div>
            </div>
          </nav>
        </div>
        <div class="col-md-4 col-12 d-flex align-items-center justify-content-center " style="min-height: 4vw;">

          <img src="Logos/logo.png" alt="" class="img-fluid img-dd">
          <img src="Logos/ddu main.jpg" alt="" class="img-fluid img-dd">
          <img src="Logos/kudumbasree main.png" alt="" class="img-fluid img-kd me-3">
        </div>

      </div>

    </div>





    <div class="row m-0" style="z-index:-1; max-width: 100%;">

      <div class="col-md-12 bg-light2  d-flex align-items-center justify-content-left " style="min-height: 3vw;">

      </div>

    </div>
    </div>


    <!––End of Head ...............................................................................-->


      <div class="container-fluid p-0">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
              role="tab" aria-controls="home" aria-selected="true">Dash Board</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
              role="tab" aria-controls="profile" aria-selected="false">Add Entry</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
              role="tab" aria-controls="contact" aria-selected="false">Primary Follow-up Pending</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab2" data-bs-toggle="tab" data-bs-target="#contact2" type="button"
              role="tab" aria-controls="contact2" aria-selected="false">In followup</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact3" type="button"
              role="tab" aria-controls="contact3" aria-selected="false">Waiting for Admission</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab4" data-bs-toggle="tab" data-bs-target="#contact4" type="button"
              role="tab" aria-controls="contact4" aria-selected="false">Admitted</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active pt-1" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>


          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container-fluid">

              <div class="row">

                <div class="col-md-2 col-sm-12 col-12">

                </div>

                <div class="col-md-8 col-sm-12 col-12 d-flex justify-content-center mt-2">
                  <form class="needs-validation w-100">

                    <div class="card">


                      <div class="card-header p-2 bg-info text-white d-flex justify-content-center">
                        <h5>Add New Entry</h5>
                      </div>

                      <div class="card-body p-4">


                        <div class="row p-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-map-marker-alt"></i> &nbsp; Select District :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <select class="form-select" aria-label="Default select example" id="district"
                              onchange="showLsg()">
                              <option selected value="">-- Select District --</option>
                              <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                              <option value="Kollam">Kollam</option>
                              <option value="Pathanamthitta">Pathanamthitta</option>
                              <option value="Alappuzha">Alappuzha</option>
                              <option value="Kottayam">Kottayam</option>
                              <option value="Idukki">Idukki</option>
                              <option value="Ernakulam">Ernakulam</option>
                              <option value="Thrissur">Thrissur</option>
                              <option value="Palakkad">Palakkad</option>
                              <option value="Malappuram">Malappuram</option>
                              <option value="Calicut">Kozhikkod</option>
                              <option value="Wayanad">Wayanad</option>
                              <option value="Kannur">Kannur</option>
                              <option value="Kasargod">Kasaragod</option>

                            </select>
                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-street-view"></i>&nbsp; Select Panchayath :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <select class="form-select" aria-label="Default select example" id="lsg">
                              <option selected value="">-- Select Panchayath --</option>
                            </select>
                          </div>

                        </div>


                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-user"></i>&nbsp; Name :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <input class="form-control" type="text" placeholder="Enter name"
                              aria-label="default input example" id="name"></input>
                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-person-booth"></i>&nbsp; Age :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <input class="form-control" type="text" placeholder="Enter age"
                              aria-label="default input example" id="age"></input>
                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-user-friends"></i>&nbsp; Gender :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <i class="fas fa-male"></i> &nbsp;
                            <div class="form-check form-check-inline">

                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="Male">
                              <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <i class="fas fa-female"></i> &nbsp;
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="Female">
                              <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>

                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-address-card"></i>&nbsp; Category :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <select class="form-select" aria-label="Default select example" id="category">
                              <option selected value="">-- Select Category --</option>
                              <option value="SC">SC</option>
                              <option value="ST">ST</option>
                              <option value="Minority">Minority</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-mobile-alt"></i> &nbsp; Contact Number :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <input class="form-control" type="text" placeholder="Enter contact number"
                              aria-label="default input example" id="mobile"></input>
                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-graduation-cap"></i>&nbsp; Qualification :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <select class="form-select" aria-label="Default select example" id="lastq">
                              <option selected value="">-- Select Qualification --</option>
                              <option value="Degree">Degree</option>
                              <option value="Plus Two">Plus Two</option>
                              <option value="SSLC">SSLC</option>
                              <option value="Diploma">Diploma</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>

                        </div>

                        <div class="row p-2  mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-question-circle"></i>&nbsp; Qualification Status :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <select class="form-select" aria-label="Default select example" id="lastqs">
                              <option selected value="">-- Select Qualification Status --</option>
                              <option value="Completed">Completed</option>
                              <option value="Drop Out">Drop Out</option>
                              <option value="On Going">On Going</option>
                            </select>
                          </div>

                        </div>

                        <div class="row p-2 mt-2">

                          <div class="col-md-3 col-12 form-text d-flex align-items-center">
                            <i class="fas fa-user-graduate"></i>&nbsp; Course :
                          </div>

                          <div class="col-md-9 col-12  form-text">
                            <select class="form-select" aria-label="Default select example" id="course">
                              <option selected value="">-- Select Course --</option>

                              <option value=" Software Developer & Support Engineer">Software
                                Developer & Support Engineer</option>
                              <option value="Hardware Developer & Support Engineer">Hardware Engineer
                                & Support Engineer</option>
                            </select>
                          </div>

                        </div>

                        <div class="row p-2 mt-5">
                          <div class="col-md-12 col-12">

                            <div class="alert alert-danger alert-dismissible fade show p-4 = " role="alert" id="myAlert"
                              style="display:none;">

                              <div class="row">

                                <div class="col-md-2 col-2">
                                  <i class="fas fa-exclamation-triangle" style=" font-size: 1.5rem;"></i>
                                </div>
                                <div class="col-md-10 col-10" id="Message">

                                </div>

                              </div>


                            </div>


                            <button class="btn btn-primary btn-lg w-100" class="close" data-dismiss="alert"
                              type="button" onClick="validateData();">Applay</button>

                          </div>
                        </div>




                      </div>

                    </div>
                  </form>
                </div>

                <div class="col-md-2 col-sm-12 col-12">

                </div>

              </div>
            </div>

          </div>


          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

            <div class="card mt-2">

              <div class="card-body" id="table-card">



              </div>

            </div>

          </div>
          <!--.Primary Followup Starts.............................................................................................................................-->
          <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">

            <div class="card mt-2">

              <div class="card-body" id="table-card2">



              </div>

            </div>


          </div>
          <!--.Primary Followup Ends.............................................................................................................................-->
          
          <!--.W Admission Starting.............................................................................................................................-->

          <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
            
            <div class="card mt-2">

              <div class="card-body" id="table-card3">



              </div>

            </div>
          
          </div>
          <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
            <div class="card mt-2">

              <div class="card-body" id="table-card4">



              </div>

            </div>
          
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
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->

        <script type="text/javascript">

          window.onload = onloads();

          function onloads() {
            //$("#myAlert").hide();
            document.getElementById("myAlert").style.display = "none";
            //alert("ok");
            loadPrimaryPending();
            loadInfollowup();
            wAdmission();
            admitted();
            
          }

          function admitNow(x)
          {

          }

          function admitted() 
          {
            
            //var selBatch = document.getElementById("status_select").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                //var myObj = JSON.parse(this.responseText);
                //console.log(myObj.a1);
                //alert(his.responseText);
                document.getElementById("table-card4").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getCData.php?parametre=" + "admitted"+"&U=&A=", true);
            xmlhttp.send();


          }

          function wAdmission() 
          {
            
            //var selBatch = document.getElementById("status_select").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                //var myObj = JSON.parse(this.responseText);
                //console.log(myObj.a1);
                //alert(his.responseText);
                document.getElementById("table-card3").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getCData.php?parametre=" + "wadmission"+"&U=&A=", true);
            xmlhttp.send();


          }


          function loadPrimaryPending() 
          {
            
            //var selBatch = document.getElementById("status_select").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                //var myObj = JSON.parse(this.responseText);
                //console.log(myObj.a1);
                //alert(his.responseText);
                document.getElementById("table-card").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getCData.php?parametre=" + "primary"+"&U=&A=", true);
            xmlhttp.send();


          }

          function loadInfollowup() 
          {
            
            //var selBatch = document.getElementById("status_select").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                //var myObj = JSON.parse(this.responseText);
                //console.log(myObj.a1);
                //alert(his.responseText);
                document.getElementById("table-card2").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getCData.php?parametre=" + "infollowup"+"&U=&A=", true);
            xmlhttp.send();


          }

          function validateData() {
            //var sel_gen=$('input[name="inlineRadioOptions"]:checked').val();
            var sel1 = $('#inlineRadio1').prop('checked');
            var sel2 = $('#inlineRadio2').prop('checked');
            //console.log(sel);
            //alert(sel_gen);
            //alertNow('Please Enter Name');
            // alert( $('#Message').val());

            if ($('#district').val() == "") {
              alertNow('District is Empty. Please selcet the district.');
            }
            else if ($('#lsg').val() == "") {
              alertNow('Panchayath is Empty. Please selcet the panchayath.');
            }
            else if ($('#name').val() == "") {
              alertNow('Name is Empty. Please emter candidate name.');
            }

            else if ($('#age').val() == "") {
              alertNow('Age is Empty. Please emter candidate Age.');
            }
            else if (sel1 == false && sel2 == false) {
              alertNow('Gender is Empty. Please selcet the last gender.');
            }
            else if ($('#category').val() == "") {
              alertNow('Category is Empty. Please selcet the Category.');
            }

            else if ($('#number').val() == "") {
              alertNow('Contact Number is Empty. Please enter Contact Number is.');
            }
            else if ($('#lastq').val() == "") {
              alertNow('Qualification is Empty. Please selcet the last qualification.');
            }
            else if ($('#lastqs').val() == "") {
              alertNow('Qualification status is Empty. Please selcet the last qualification status.');

            }
            else if ($('#course').val() == "") {
              alertNow('Course is Empty. Please selcet the last course.');
            }
            else {
              var gen = "";
              if ($("#inlineRadio1").prop("checked")) {
                gen = $("#inlineRadio1").val();
              }
              else {
                gen = $("#inlineRadio2").val();
              }

              var today = new Date();
              var dd = String(today.getDate()).padStart(2, '0');
              var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
              var yyyy = today.getFullYear();

              today = yyyy + '/' + mm + '/' + dd;


              //console.log(gen);
              var formData =
              {
                district: $("#district").val(),
                panchayath: $("#lsg").val(),
                name: $("#name").val(),
                age: $("#age").val(),
                gender: gen,
                category: $("#category").val(),
                mobile: $("#mobile").val(),
                lastq: $("#lastq").val(),
                lastqs: $("#lastqs").val(),
                course: $("#course").val(),
                status: "Primary Follow-Up",
                date: today

              };

              console.log(formData);

              $.ajax({
                type: "POST",
                url: "applay_code.php",
                data: formData,
                dataType: "json",
                encode: true,
              }).done(function (data) {
                //console.log(data);
                //alert(data);
                if (data == "1") {
                  alert("Updated Successfully");
                  location.reload();
                }
                else {
                  alert(data);
                }


              });


            }


          }



          function showLsg() {
            var selected_dst = document.getElementById("district").value;
            //alert(selected_dst);
            document.getElementById("lsg").options.length = 0;

            //console.log(selected_dst);

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                //document.getElementById().innerHTML = this.responseText;
                //$('#c_lsg').append(this.responseText);
                $('#lsg').append(this.responseText);
                //alert(this.responseText);
                //console.log(this.responseText);
              }
            };
            xmlhttp.open("GET", "php/getlsg.php?parametre=" + selected_dst, true);
            xmlhttp.send();


          }
          function alertNow(x) {
            document.getElementById("myAlert").style.display = "block";
            $('#Message').html(x);
            $('#myAlert').show();
          }

        </script>
</body>

</html>