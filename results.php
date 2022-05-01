<?php
    INCLUDE("database.php");


if(isset($_GET["first_name"]) and isset($_GET["last_name"])) {
   
   if($_GET["username"] == "DIG" && $_GET["password"] == "3134") {
       echo json_encode($array);

 } else {
   echo("Username Or Password is wrong.");
}
}

?>
