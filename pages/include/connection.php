<?php
$servername="localhost";
$username="root";
$password="";
$dbName="ignite_applicant";

// $servername = "us-cdbr-iron-east-02.cleardb.net";
// $username = "b8d16b8c0b7b66";
// $password = "aefcbeb4";
// $dbName = "heroku_be5771159a4ff36";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


