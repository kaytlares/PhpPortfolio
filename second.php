<?php
 INCLUDE("sdatabase.php");
    ?>
<html>
  <head>
    <title>Class Information</title>
  </head>
  <body>
   <h2>Please Fill Out The Information About Your Class</h2>

   <form action="second.php" method="POST">

   <label for="school_id">DO NOT ENTER INFORMATION HERE</label>
   <input name="school_id" id="school_id" placeholder = "Leave Blank"></br> </br>

   <label for="courseName">Select Term: </label>
   <select name="courseName">
  <option value="">Select Term</option>
  <option value="Spring">Spring</option>
  <option value="Summer">Summer</option>
  <option value="Fall">Fall</option>
  <option value="A Session">A Session</option>
  <option value="B Session">B Session</option>
</select> </br></br>

<label for="class"> Enter Class Name: </label>
   <input name="class" id="class" type="text" placeholder="Your Class"> </br></br>

   <label for="code">Enter Class Number:</label> 
   <input name="code" id="code" type="text" placeholder="Insert Course Number"> </br></br>

   <label for="teacher"> Enter Professor Name:</label> 
   <input name="teacher" id="teacher" type="text" placeholder="Insert Teacher Name"> </br></br>

   <label for="radio"> Class Location:</label> </br>
    <input type="radio" name="uni" value="Main Campus" />  Main Campus </br>
    <input type="radio" name="uni" value="Downtown Campus" />  Downtown Campus </br>
    <input type="radio" name="uni" value="Rosen" /> Rosen </br></br>

    <label for="radio"> Class Schedule: </label> </br>
    <input type="radio" name="week" value="Monday"/> Monday </br>
    <input type="radio" name="week" value="Tuesday" />  Tuesday  </br>
    <input type="radio" name="week" value="Wednesday" />  Wednesday </br>
    <input type="radio" name="week" value="Thursday" />  Thursday  </br>
    <input type="radio" name="week" value="Friday" />  Friday  </br>
    <input type="radio" name="week" value="Saturday" />  Saturday </br>
    <input type="radio" name="week" value="MW" />  Monday and Wednesday </br>
    <input type="radio" name="week" value="TT" />  Tuesday and Thursday </br></br>
    


   <input type="submit"></input></br></br>
   </form>
    <?php
    $link_address1 = 'third.php';
    echo "<a href='$link_address1'> Input Career Information Here!</a>";
       connect();
       schoolTable();
       reTable();
       close();
    ?>
  </body>
</html>