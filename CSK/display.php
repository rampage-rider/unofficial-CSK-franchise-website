<!DOCTYPE html>
<html>
<head>
  <title>MARVEL</title>
  <link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>
  <!--Container-->
  <div class="container" id="top">
    <!--Header-->
    <div class="header">
      <center><img src="homepage/logo.png" alt="MARVEL" id="logo"></center>
    </div>
    <!--Navigation-->
    <div class="nav">
      <div class="navig"><a href="mcu/mcu.html" target="_blank" class="navlink">Marvel Cinematic Universe</a></div>
      <div class="navig"><a href="superheroes/superheroes.html" target="_blank" class="navlink">Marvel Superheroes</a></div>
      <div class="navig"><a href="own/own.html" target="_blank" class="navlink">Create your own Avenger</a></div>
    </div>
    <!--Heading-->
      <div class="heading">
          <h1>AVENGERS ASSEMBLED</h1>
      </div>
    <!--Table Wrapper-->
    <div class="tablewrapper">
      <?php
        include('config.php');

        //Create Connection
        $conn = mysqli_connect($servername,$username,$password);

        //Check connection
        if(!$conn) {
          echo "Error Connecting";
        }

        //Selecting Database
        if(!mysqli_select_db($conn,'marvel')) {
          echo "Error selecting database";
        }

        //SQL Query
        $sql = "SELECT * FROM mcu";

        //Storing the SQL query in a variable
        $display = mysqli_query($conn,$sql);

        ?>

      <center>  <table class="displaytable">
          <tr>
            <th>Name</th>
            <th>Maduep Name</th>
            <th>Planet</th>
            <th>Physique</th>
            <th>Intelligence</th>
            <th>Bravery</th>
            <th>Unity</th>
            <th>Special Powers</th>
          </tr>

          <?php

            while($mcudisplay = mysqli_fetch_assoc($display)) {
              echo "<tr>";
              echo "<td>".$mcudisplay["Name"]."</td>" ;
              echo "<td>".$mcudisplay["MadeupName"]."</td>" ;
              echo "<td>".$mcudisplay["Planet"]."</td>" ;
              echo "<td>".$mcudisplay["Physique"]."</td>" ;
              echo "<td>".$mcudisplay["Intelligence"]."</td>" ;
              echo "<td>".$mcudisplay["Bravery"]."</td>" ;
              echo "<td>".$mcudisplay["Unity"]."</td>" ;
              echo "<td>".$mcudisplay["SpecialPowers"]."</td>" ;
              echo "</tr>";
            }
           ?>
        </table> </center>
      </div>
      <div class="footer">
        <div id="footercontent">
        <span style="text-decoration:underline;" >Follow us at:</span><br>
        <pre><a href="https://www.instagram.com/marvel/" target="_blank" class="followlink"><img src="../homepage/ig.png" alt="InstaGram" class="followimg">   <a href="https://www.youtube.com/user/MARVEL" target="_blank" class="followlink"><img src="../homepage/youtube.jpg" alt="YouTube" class="followimg">   <a href="https://www.facebook.com/MarvelIndia/" target="_blank" class="followlink"><img src="../homepage/fb.png" alt="Facebook" class="followimg">  </pre>
        </div>
        <div id="returntop">
            <a href="#top" style="text-decoration:none;"><span style="color:white;">Return to top of the page.</span></a>
        </div>
      </div>
      </div>
      </body>

    </div>
