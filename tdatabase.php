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
    <th>Career Name</th>
    <th>Degree</th>
    <th>Salary</th>
    <th>Score</th>
    </tr>
</head>






<?php
  // Server
    $server = "localhost";

    // Username
    $first = "root";

    // Password
    $password = "";


    // Database
    $database = "tinfo";

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

    function careerTable() {
        // Use global $connection locally.
        global $connection;

         // Is $connection null?
         // If so, do nothing (because a connection has not been made yet).
        if($connection != null) {
            // Get the results of a query using the connection
            // TODO: Write SQL SELECT statement to read first name, last name, city, and state.
            $result = mysqli_query($connection, "SELECT  career, degree, dollar, points FROM tinfo.career");
           

            // Start the HTML table.
            echo("<table><tbody>");

            // For every row, generate a new HTML row.
            while($row = mysqli_fetch_assoc($result)) {
                // Start the row.
                echo("<tr>");

                // TODO: for each key, add a column entry in HTML using echo().
                // Reminder: HTML tables use <td> (https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#examples).
                // End the row.
         
                echo "<td>" . $row['career'] . "</td>";
                echo "<td>" . $row['degree'] . "</td>";
                echo "<td>" . $row['dollar'] . "</td>";
                echo "<td>" . $row['points'] . "</td>";
                echo("</tr>");
            }

            // End the HTML table.
            echo("</tbody></table>");
        }


    }

    function caTable() {
        // Use the global $connection.
        global $connection;
        // Perform validation.
        // (1) Do the keys exist?
        if(isset($_POST["career_id"]) &&
           isset($_POST["career"]) &&
           isset($_POST["degree"]) &&
           isset($_POST["dollar"]) &&
           isset($_POST["points"])) {
        
        
            // (2) Confirm the values.
            // Convert string input (to prevent injection attacks).
            $job = htmlspecialchars($_POST["career"]);
            $paper = htmlspecialchars($_POST["degree"]);
            $price = htmlspecialchars($_POST["dollar"]);
            $like = ($_POST["points"]);

            // With type="number", this will probably be a number,
            //  but, just to be sure, use intval() to force a conversion.
            $careerid = intval($_POST["career_id"]);

           // foreach($_POST['colour'] as $value){
                //echo "Chosen colour : ".$value.'<br/>';} 
                  
            // Is $connection null?
            // If so, do nothing.
            if($connection != null) {
                // Using the $connection, insert data into the database.
                $result = mysqli_query($connection, "INSERT INTO career (career_id, career, degree, dollar, points) VALUES({$careerid}, '{$job}', '{$paper}', '{$price}', '{$like}')");
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