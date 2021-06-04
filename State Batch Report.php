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
                    <a class="nav-link navitem" aria-current="page" href="statepage.php">Home</a>
                  </li>

                  <li class="nav-item nav1 d-flex align-items-center justify-content-center">
                    <a class="nav-link active navitem" href="State Batch Report.php">Batch Report</a>
                  </li>

                  <li class="nav-item nav1 d-flex align-items-center justify-content-center">
                    <a class="nav-link" href="State Mobilisation.php">Mobilisation</a>
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

        <div class="card p-3 mt-2 ddu-back m-3">

          <div class="class-fluid card shadow-lg" style="background-color: whitesmoke;">

            <div class="row p-3">




              <div class="col-md-4 col-sm-4 col-12 d-flex justify-content-left">

                <div class="mb-3 w-100">
                  <label for="exampleInputEmail1" class="form-label " style="font-size: 14px;">Select
                    Course</label>
                  <select class="form-select" aria-label="Default select example" id="course_select_1"
                    onchange="changeBatch1()">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                </div>

              </div>

              <div class="col-md-4 col-sm-4 col-12 d-flex justify-content-left">

                <div class="mb-3 w-100">
                  <label for="exampleInputEmail1" class="form-label " style="font-size: 14px;">Select
                    Batch</label>
                  <select class="form-select" aria-label="Default select example" id="batch_select_1">
                    <option value="">--Select Batch--</option>

                  </select>

                </div>

              </div>

              <div class="col-md-4 col-sm-4 col-12 d-flex align-items-end">

                <div class="mb-3 w-100 ">

                  <label for="exampleInputEmail1" class="form-label " style="font-size: 14px;"></label>

                  <button class="btn btn-primary" onclick="showBatch()">Show Batch</button>

                </div>

              </div>


            </div>

          </div>

        </div>

        <div class="card mt-0 ">

          <div class="card-body m-3" id="table-card">



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

      <script>

        onload = function () 
        {
            loadBaseValues();

            //loadBatchPending();

        }

        function loadBaseValues() 
        {
            console.log("Starting");

            //Loading Course Start.................................................................................
            //var selected_course = document.getElementById("course_select_2").value;
            //console.log(selected_course);

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //document.getElementById().innerHTML = this.responseText;
                    //$('#c_lsg').append(this.responseText);
                    document.getElementById("course_select_1").length = 0;
                    
                    $('#course_select_1').append(`<option value="">
                     --Select Course--
                </option>`);

                    $('#course_select_1').append(this.responseText);
                   
                    //console.log(this.responseText);
                    //alert(this.responseText);
                    //console.log(this.responseText);
                }
            };
            xmlhttp.open("GET", "getCData.php?parametre=course&U=" + "" + "&A=" + "", true);
            xmlhttp.send();
            //Loading Course End...................................................................................


        }

        function changeBatch1() {
          var selectedVal = document.getElementById("course_select_1").value;
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

              document.getElementById("batch_select_1").length = 0;
              //$('#course_select_1').append(this.responseText);

              $('#batch_select_1').append(this.responseText);

            }
          };
          xmlhttp.open("GET", "getCData.php?parametre=batch&U=" + "" + "&A=" + selectedVal, true);
          xmlhttp.send();
        }

        function showBatch() {
          var CselectedVal = document.getElementById("course_select_1").value;
          var BselectedVal = document.getElementById("batch_select_1").value;
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

              //document.getElementById("batch_select_1").length = 0;
              $('#table-card').html("");
              $('#table-card').append(this.responseText);
              //$('#batch_select_1').append(this.responseText);

              //alert(this.responseText);

            }
          };
          xmlhttp.open("GET", "getCData.php?parametre=batchView&U=" + CselectedVal + "&A=" + BselectedVal, true);
          xmlhttp.send();

        }

       function viewStudent(x)
       {
        window.open("view candidate.php?idpara=" + x, "_blank");
       }

    </script>

</body>

</html>