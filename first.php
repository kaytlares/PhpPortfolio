<?php
    INCLUDE("database.php");
    
?>

  <body>
   <h2>Please Fill Out the Form Below To Get Started</h2>
   <form action="first.php" method="POST">
  
   <label for="consumer_id">DO NOT ENTER INFORMATION HERE</label>
   <input name="consumer_id" id="consumer_id" placeholder="LEAVE BLANK"> </br>
   </br>

   <label for="first_name">Enter First Name:</label>
   <input name="first_name" id="first_name" type="text" placeholder="Insert First Name"> </br>
   </br>

   <label for="last_name">Enter Last Name:</label>
   <input name="last_name" id="last_name" type="text" placeholder="Insert Last Name"> </br>
   </br>

   <label for="email"> Enter Email:</label>
   <input name="email" id="email" type="text" placeholder="Insert Email"> </br>
   </br>

   <label for="phone">Enter Phone Number:</label>
   <input name="phone" id="phone" type="tel" placeholder="Insert Phone Number"> </br>
   </br>

   <input type="submit"></input></br></br>

   </form>
    <?php
    $link_address1 = 'second.php';
    echo "<a href='$link_address1'> Input Class Information Here!</a></br></br>";
    
    $link_address1 = 'third.php';
    echo "<a href='$link_address1'> Still Looking for Career Ideas? Input Career Information Here!</a></br></br>";
       connect();
       consumerTable();
       updateTable();
       close(); 
    
    ?>
  </body>
</html>