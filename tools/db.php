<?php
function getDatabaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "YourPasswordHere"; // Replace with your actual database password
    $database = "beststoredb";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    return $connection;
}
    

?>
