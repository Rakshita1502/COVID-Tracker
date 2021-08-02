<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <title>COV-TRACKER</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
  </head>

  <body onload="fetch()">

    <header>
      <nav class="navbar navbar-expand-lg nav-style p-3">
        <a class="navbar-brand pl-5" href="#">COV-TRACKER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-5">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#updates">Updates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutid">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sympid">Symptoms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#preventid">Prevention</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactid">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="main-header">
        <div class="row w-100 h-100">
          <div class="col col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="images\coronavirus-doodle.jpg" width="300" height="300" alt="">
            </div>
          </div>

          <div class="col col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
              <h1>Let's Stay Safe & Fight Together Against Cor <span class="corona-rot"><img src="images/cor-dod.png" width="70" height="70"  alt=""> </span>na Virus</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- corona latest update -->
      <section class="corona-update container-fluid" id="updates">
        <div class="mb-3">
          <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
        </div>

        <center>

         
          <a href="indiacoronalive.php"><button type="submit" name="submit" class="btn btn-primary">India Cases</button></a><br><br>
          <a href="indiadailycases.php"><button type="submit" name="submit" class="btn btn-primary">India Daily Cases</button></a>

        </center>


      </section>

      <!-- about section -->
      <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
        <div class="section-header text-center mt-4 mb-5">
          <h1>About COVID-19</h1>
        </div>

        <div class="row pt-5">
          <div class="col col-lg-5 col-md-6 col-12 ml-5 abt-res">
            <img src="images/aboutcorona.jpeg" class="img-fluid " alt="">
          </div>

          <div class="col col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19(Corona Virus)</h2>
            <p>Coronavirus disease 2019 (COVID-19) is defined as illness caused by a novel coronavirus now called severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2; formerly called 2019-nCoV), which was first identified amid an outbreak of respiratory illness cases in Wuhan City, Hubei Province, China.</p>
            <p>COVID-19 is the disease caused by SARS-CoV-2.COVID-19 can be severe, and has caused millions of deaths around the world as well as lasting health problems in some who have survived the illness.The coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</p>
          </div>
        </div>
      </div>

      <!-- corona symptoms -->
      <div class="container-fluid  pt-5 pb-5" id="sympid">
        <div class="section-header text-center mt-4 mb-5">
          <h1>Symptoms</h1>
        </div>

        <div class="container">
          <div class="row">
            <div class="col col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/cough.png" class="img-fluid"alt="" width="120" height="120">
                <figcaption>cough</figcaption>
              </figure>
            </div>
            <div class="col col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/runnynose.png" class="img-fluid"alt="" width="120" height="120">
                <figcaption>runny nose</figcaption>
              </figure>
            </div>
            <div class="col col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/fever.jfif" class="img-fluid"alt="" width="120" height="120">
                <figcaption>fever</figcaption>
              </figure>
            </div>
            <div class="col col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/cold.png" class="img-fluid"alt="" width="120" height="120">
                <figcaption>cold</figcaption>
              </figure>
            </div>
            <div class="col col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/tired.jfif" class="img-fluid"alt="" width="120" height="120">
                <figcaption>tiredness</figcaption>
              </figure>
            </div>
            <div class="col col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/breath.jfif" class="img-fluid"alt="" width="120" height="120">
                <figcaption>difficulty breathing</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
<!-- prevention steps -->
      <div class="container-fluid  pt-5 pb-5 sub-section" id="preventid">
        <div class="section-header text-center mt-4 mb-5">
          <h1>6 Steps for Prevention Against Corona Virus</h1>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5 ">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                  <figure class="text-center">
                    <img src="images/washhands.png" class="img-fluid"alt="" width="90" height="90">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Wash your hands regularly for 20 seconds with soap and water or alcohol based hand rub.</p>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                <figure class="text-center">
                  <img src="images/mask.png" class="img-fluid"alt="" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12 ">
                <p>Wear mask.Cover your nose and mouth with disposable tissue when you cough/sneeze.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                <figure class="text-center">
                  <img src="images/distance.png" class="img-fluid "alt="" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12 ">
                <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5 ">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                  <figure class="text-center">
                    <img src="images/stayhome.jfif" class="img-fluid"alt="" width="90" height="90">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Stay home and self isolate from others in the household if you feel unwell.</p>
                </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                <figure class="text-center">
                  <img src="images/care.jfif" class="img-fluid "alt="" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12 ">
                <p>If you have fever cough and difficulty breathing seek the medical care early.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                <figure class="text-center">
                  <img src="images/informed.png" class="img-fluid"alt="" width="90" height="90">
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12 ">
                <p>Stay informed by watching the news and follow the recommended practices</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- contact -->

      <div class="container-fluid  pt-5 pb-5 " id="contactid">
        <div class="section-header text-center mt-4 mb-5">
          <h1>6 Steps for Prevention Against Corona Virus</h1>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12" >
              <form action="" method="POST">

                <div class="form-group">
                  <label >Name</label>
                  <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="name"autocomplete="off"  required >
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" name="email" class="form-control"  placeholder="name@example.com" autocomplete="off" required >
                </div>

                <div class="form-group">
                  <label >Mobile</label>
                  <input type="number" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="mobile"autocomplete="off"  required >
                </div>

                <div class="form-group">
                  <label>Select Symptoms</label><br>

                  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                    <label class="custom-control-label" for="customcheckbox1">Cold</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                    <label class="custom-control-label" for="customcheckbox2">Fever</label>
                  </div>

                  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                    <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                    <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Example textarea</label>
                  <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

<!-- top cursor -->

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>
</div>

    <footer class="mt-5">
      <div class="footer-style text-white text-center container-fluid">
        <p>Copyright by rakshitapatil</p>
      </div>
    </footer>


    <script type="text/javascript">
    mybutton=document.getElementById("myBtn");

    window.onscroll=function(){scrollFunction()};

    function scrollFunction(){
      if(document.body.scrollTop>100||document.documentElement.scrollTop>100){
        mybutton.style.display="block";
      }else {
        mybutton.style.display="none";
      }
    }

    function topfunction(){
      document.body.scrollTop=0;
      document.documentElement.scrollTop=0;
    }



    </script>

  </body>
</html>

<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

  $chk="";

  foreach($symp as $chk1){
    $chk.=$chk1.",";
  }

  $insertquery="insert into coronacase(username,email,mobile,symp,message)values('$username','$email','$mobile','$chk','$msg')";
  $query=mysqli_query($con,$insertquery);

  if($query){  ?>
    <script type="text/javascript">
      alert('insertion successful');
    </script>
    <?php
  }else{
    ?>
    <script type="text/javascript">
      alert('insertion failed');
    </script>
    <?php
  }
}
 ?>
