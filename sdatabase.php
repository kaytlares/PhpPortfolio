<html>
<head>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 2px solid black;
        }
        td {
            background-color: #FFC904;
            border: 1px solid black;
        }
        th,
        td {
            font-weight: bold;
            color: #00274C;
            border: 1px solid black;
            padding: 30px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }

    </style>
<title>School Information</title>
    <body>
    <table>
    <tr>
    <th>Class Name</th>
    <th>Class Number</th>
    <th>Professor</th>
    <th>Term</th>
    <th>Location</th>
    <th>Schedule</th>
    </tr>
</head>



<?php
/* I COULDN'T FIGURE OUT HOW TO COLLECT/DISPLAY MORE THAN ONE CHECKBOX CHOICE, IN PHP AND THE MYSQL.
THIS THE CODE I WAS TRYING TO INPUT. 

<input type="checkbox" name='colour[]' value="Red"> Red <br/>
    <input type="checkbox" name='colour[]' value="Green"> Green <br/>
    <input type="checkbox" name='colour[]' value="Blue"> Blue <br/>
    <input type="checkbox" name='colour[]' value="Black"> Black <br/>
	<br/>
 isset($_POST["colour"])) {
     $value = ($_POST["colour"]);
     foreach($_POST['colour'] as $value){
                //echo "Chosen colour : ".$value.'<br/>';
            } 
      $result = mysqli_query($connection, "INSERT INTO school (colour) VALUES({$value}')");
       

*/
    // Server
    $server = "localhost";

    // Username
    $first = "root";

    // Password
    $password = "";


    // Database
    $database = "sinfo";

    // Global connection
    $connection = null;

    function connect() {
        global $server;
        global $first;
        global $password;
        global $database;
        global $connection;

        // Is $connection null?
        // If so, connect to the database server.
        // If not, do nothing (because the connection already exists).
        if($connection == null) {
            $connection = mysqli_connect($server, $first, $password, $database);
        }
    }

    function schoolTable() {
        // Use global $connection locally.
        global $connection;

         // Is $connection null?
         // If so, do nothing (because a connection has not been made yet).
        if($connection != null) {
            // Get the results of a query using the connection
            // TODO: Write SQL SELECT statement to read first name, last name, city, and state.
            $result = mysqli_query($connection, "SELECT  class, code, teacher, courseName, uni, week FROM sinfo.school");
           

            // Start the HTML table.
            echo("<table><tbody>");

            // For every row, generate a new HTML row.
            while($row = mysqli_fetch_assoc($result)) {
                // Start the row.
                echo("<tr>");

                // TODO: for each key, add a column entry in HTML using echo().
                // Reminder: HTML tables use <td> (https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#examples).
                // End the row.
         
                echo "<td>" . $row['class'] . "</td>";
                echo "<td>" . $row['code'] . "</td>";
                echo "<td>" . $row['teacher'] . "</td>";
                echo "<td>" . $row['courseName'] . "</td>";
                echo "<td>" . $row['uni'] . "</td>";
                echo "<td>" . $row['week'] . "</td>";
                echo("</tr>");
            }

            // End the HTML table.
            echo("</tbody></table>");
        }


    }

    function reTable() {
        // Use the global $connection.
        global $connection;
        // Perform validation.
        // (1) Do the keys exist?
        if(isset($_POST["school_id"]) &&
           isset($_POST["class"]) &&
           isset($_POST["code"]) &&
           isset($_POST["teacher"]) &&
           isset($_POST["courseName"]) &&
           isset($_POST["uni"]) &&
           isset($_POST["week"])) {
           

            // (2) Confirm the values.
            // Convert string input (to prevent injection attacks).
            $class = htmlspecialchars($_POST["class"]);
            $coding = htmlspecialchars($_POST["code"]);
            $pro = htmlspecialchars($_POST["teacher"]);
            $courseName = ($_POST["courseName"]);
            $gender = ($_POST["uni"]);
            $week = ($_POST["week"]);
            // With type="number", this will probably be a number,
            //  but, just to be sure, use intval() to force a conversion.
            $someid = intval($_POST["school_id"]);

           // foreach($_POST['colour'] as $value){
                //echo "Chosen colour : ".$value.'<br/>';} 
                  
            // Is $connection null?
            // If so, do nothing.
            if($connection != null) {
                // Using the $connection, insert data into the database.
                $result = mysqli_query($connection, "INSERT INTO school (school_id, class, code, teacher, courseName, uni, week) VALUES({$someid}, '{$class}', '{$coding}', '{$pro}', '{$courseName}', '{$gender}','{$week}')");
            }
        } 
    }


    function close() {
        // Use the global $connection locally.
        global $connection;

        // Unlike connect(), we test for a value *not* equal to null.
        if($connection != null) {
            // Close the connection.
            mysqli_close($connection);
        }
    } 

  
?>