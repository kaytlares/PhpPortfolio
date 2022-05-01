<?php
 INCLUDE("tdatabase.php");
    ?>
<html>
  <head>
    <title>Career Information</title>
  </head>
  <body>
   <h2>Please Fill Out The Information About Your Career</h2>

   <form action="third.php" method="POST">

   <label for="career_id">DO NOT ENTER INFORMATION HERE</label>
   <input name="career_id" id="career_id" placeholder="LEAVE BLANK"> </br> </br>

   <label for="career">Insert Career Name: </label>
   <input name="career" id="career" type="text" placeholder="Insert Career Name"> </br> </br>

   <label for="degree">Select Degree Needed:</label>
   <select name="degree">
  <option value="">Select Degree</option>
  <option value="Associates">Associates</option>
  <option value="Bachelors">Bachelors</option>
  <option value="Masters">Masters</option>
  <option value="PHD">P.H.D</option>
  <option value="Certificate">Certificate</option>
  <option value="High">H.S. Diploma</option>
  </select></br></br>

  <label for="dollar">Input Your Yearly Salary:</label>
   <input name="dollar" id="dollar" type="text" placeholder="Salary for the Year"> </br> </br>

   <label for="points"> Interest Scale: (0 - Little Interest) to (10 - Major Interest) </label>
<input type="range" id="points" name="points" min="0" max="10"> </br> </br>

   <input type="submit"></input></br></br>
   </form>
    <?php

    $link_address1 = 'second.php';
    echo "<a href='$link_address1'> Input Class Information Here!</a></br></br>";
       connect();
       careerTable();
       caTable();
       close();
    ?>
  </body>
</html>