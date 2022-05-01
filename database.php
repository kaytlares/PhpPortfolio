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
            padding: 15px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }

    </style>
<title>Consumer Information</title>
    <body>
    <table>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
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
    $database = "info";

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

    function consumerTable() {
        // Use global $connection locally.
        global $connection;

         // Is $connection null?
         // If so, do nothing (because a connection has not been made yet).
        if($connection != null) {
            // Get the results of a query using the connection
            // TODO: Write SQL SELECT statement to read first name, last name, city, and state.
            $results = mysqli_query($connection, "SELECT first_name, last_name, email, phone FROM info.consumer");
           

            // Start the HTML table.
            echo("<table><tbody>");

            // For every row, generate a new HTML row.
            while($row = mysqli_fetch_assoc($results)) {
                // Start the row.
                echo("<tr>");

                // TODO: for each key, add a column entry in HTML using echo().
                // Reminder: HTML tables use <td> (https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#examples).
                // End the row.
         
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";

                echo("</tr>");
            }

            // End the HTML table.
            echo("</tbody></table>");
        }
    }
    
    function updateTable() {
        // Use the global $connection.
        global $connection;
        // Perform validation.
        // (1) Do the keys exist?
        if(isset($_POST["consumer_id"]) &&
           isset($_POST["first_name"]) &&
           isset($_POST["last_name"]) &&
           isset($_POST["email"]) &&
           isset($_POST["phone"])) {

            // (2) Confirm the values.
            // Convert string input (to prevent injection attacks).
            $firstName = htmlspecialchars($_POST["first_name"]);
            $lastName = htmlspecialchars($_POST["last_name"]);
            $email = htmlspecialchars($_POST["email"]);
            $phone = htmlspecialchars($_POST["phone"]);
            // With type="number", this will probably be a number,
            //  but, just to be sure, use intval() to force a conversion.
            $customerId = intval($_POST["consumer_id"]);

            // Is $connection null?
            // If so, do nothing.
            if($connection != null) {
                // Using the $connection, insert data into the database.
                $results = mysqli_query($connection, "INSERT INTO consumer (consumer_id, first_name, last_name, email, phone) VALUES({$customerId}, '{$firstName}', '{$lastName}', '{$email}', '{$phone}')");
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