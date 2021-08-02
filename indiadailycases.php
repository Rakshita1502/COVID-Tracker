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
              <a class="nav-link" href="#aboutid">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactid">Contact</a>
            </li>
          </ul>
        </div>
      </nav>


      <section class="corona-update container-fluid">
        <div class="my-3">
          <h3 class="text-uppercase text-center">Covid-19 Daily Live Updates Of India</h3>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" >
            <tr>

              <th>State</th>
              <th>Confirmed</th>
              <th>Active</th>
              <th>Recovered</th>
              <th>Deaths</th>
              <th>Last Updated Time</th>


<?php
  $data=file_get_contents('https://api.covid19india.org/data.json');
  $coronadaily=json_decode($data,true);
  // echo "<pre>";
  // print_r($coronadaily);
  // echo "</pre>";

  $count=count($coronadaily['statewise']);
  $i=0;
  while($i<$count){
?>

  <tr>

    <td class="text-capitalize"><?php echo $coronadaily['cases_time_series'][$i]['date'] ?></td>
    <td class="text-capitalize"><?php echo $coronadaily['cases_time_series'][$i]['totalconfirmed'] ?></td>
    <td class="text-capitalize"><?php echo $coronadaily['cases_time_series'][$i]['dailyrecovered'] ?></td>
    <td class="text-capitalize"><?php echo $coronadaily['cases_time_series'][$i]['dailydeceased'] ?></td>
    <td class="text-capitalize"><?php echo $coronadaily['cases_time_series'][$i]['totalrecovered'] ?></td>
    <td class="text-capitalize"><?php echo $coronadaily['cases_time_series'][$i]['totaldeceased'] ?></td>
  </tr>

<?php
    $i++;
  }

 ?>
            </tr>
          </table>
        </div>
      </section>




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
