<?php

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /');
    die();
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$organization_name = $_POST['organization_name'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = "";
$lastName = "";
$firstName = "";
$email = "";
$person_create = [$lastName, $firstName, $email];
$address = ["0","0","0","0","0"];
$education = ["0","0","0","0"];
$skills = ["0","0"];
$interest1 = "";
$interest2 = "";
$interest3 = "";

$soPact_sql = "INSERT INTO Users (ID, LastName, FirstName, eMail, Interest1, Interest2, Interest3)
VALUES ($id, $lastName, $firstName, $email, $interest1, $interest2, $interest3)";

$result = $conn->query($soPact_sql);

?>

<h1>Done</h1>
