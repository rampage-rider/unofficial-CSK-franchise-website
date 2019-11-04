<!DOCTYPE html>
<html>
<head>
<title>CSK</title>
<link rel="stylesheet" type="text/css" href="homepage.css" />
<link rel="stylesheet" type="text/css" href="test.css">
</head>

<body style="background-image: url('ADP/bluebg4.jpg');background-size: 1260px 1000px;">
<div class="center" id="top">				<!--header-->
<img src="ADP/30052140_1685890158162935_2729464362862323141_o.jpg" alt="" height="150px" width="750px">

 </div>


<div id="navbar">
  <a href="cskbgimg.html" target="_blank" style="font-family: shanky;font-size: 27px;">Home</a>
 <a href="den.html" target="_blank" style="font-family: shanky;font-size: 27px;">Our Den</a>
  <a href="squad.html" target="_blank" style="font-family: shanky;font-size: 27px;">Squad</a>
  <a href="create.html" target="_blank" style="font-family: shanky;font-size: 27px;">Create a Super King</a>
  <video style="float:right;" src="ADP/csk1.mp4" type="video/mp4"  width="60px" height="55px" autoplay loop muted ></video>
</div>


<div class="main" style="height: 1180px;">

<div class="topcenter">
<center>
<img src="ADP/stadium1.jpg" alt="" height="250px" width="250px">
</center>
</div>
		<div>
		</br>
		</br>
		</br>
		<?php
        include('config.php');

        //Create Connection
        $conn = mysqli_connect($servername,$username,$password);

        //Check connection
        if(!$conn) {
          echo "Error Connecting";
        }

        //Selecting Database
        if(!mysqli_select_db($conn,'csk')) {
          echo "Error selecting database";
        }

        //SQL Query
        $sql = "SELECT * FROM squad";

        //Storing the SQL query in a variable
        $display = mysqli_query($conn,$sql);

        ?>

      <center>  <table class="displaytable">
          <tr>
            <th>Name</th>
            <th>Nickname</th>
            <th>Country</th>
            <th>Role</th>
            <th>Batting</th>
            <th>Bowling</th>
            <th>Fielding</th>
            <th>Special Skill</th>
          </tr>

          <?php

            while($mcudisplay = mysqli_fetch_assoc($display)) {    //here the mysqli_fetch_assoc basically fetches the data in the row as array
              echo "<tr>";
              echo "<td>".$mcudisplay["Name"]."</td>" ;
              echo "<td>".$mcudisplay["Nickname"]."</td>" ;
              echo "<td>".$mcudisplay["Country"]."</td>" ;
              echo "<td>".$mcudisplay["Role"]."</td>" ;
              echo "<td>".$mcudisplay["Batting"]."</td>" ;
              echo "<td>".$mcudisplay["Bowling"]."</td>" ;
              echo "<td>".$mcudisplay["Fielding"]."</td>" ;
              echo "<td>".$mcudisplay["Skill"]."</td>" ;
              echo "</tr>";
            }
           ?>
        </table> </center>


		</div>


</div>


<div class="footer">
      <div id="footercontent">
      <span style="text-decoration:underline;" >Follow us at:</span><br>
      <pre><a href="https://www.instagram.com/chennaiipl/?hl=en" class="followlink"><img src="ADP/ig.png" alt="InstaGram" class="followimg">   <a href="https://www.youtube.com/channel/UC2J_VKrAzOEJuQvFFtj3KUw" class="followlink"><img src="ADP/youtube.jpg" alt="YouTube" class="followimg">   <a href="https://www.facebook.com/TheChennaiSuperKings/" class="followlink"><img src="ADP/fb.png" alt="Facebook" class="followimg">  </pre>

      <div id="returntop">
          <a href="#top" style="text-decoration:none; color: grey;"> <pre style="font-family: shanky;color: white;"> Return to top of the page. </pre></a>
      </div>
    </div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
