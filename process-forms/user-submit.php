<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DB_SERVER', 'sopact-db.c0enhg7bdhdx.us-east-2.rds.amazonaws.com:3306');
define('DB_USERNAME', 'SOPACT_ADMIN');
define('DB_PASSWORD', 'SO_HACK102718');
define('DB_DATABASE', 'SOPACT_ADMIN');
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_error());

$lastName = $_POST['last_name'];
$firstName = $_POST['first_name'];
$email = $_POST['email'];
$person_create = [$lastName, $firstName, $email];
$address = ["0","0","0","0","0"];
$education = ["0","0","0","0"];
$skills = ["0","0"];
$interests = $_POST['interests'];
$interest1 = $interests[0];
$interest2 = $interests[1];
$interest3 = $interests[2];

// $exists = mysqli_query($link, "SELECT * FROM `users` WHERE eMail = '$email'");

// if(mysqli_num_rows($exists) <= 0){

//     $sql =  "INSERT INTO users (LastName, FirstName, eMail, Interest1, Interest2, Interest3) VALUES ('$lastName', '$firstName', '$email', '$interest1', '$interest2', '$interest3')";

//     $add_user = mysqli_query($link, $sql);

//     if($add_user)
// {


// }
// else
// {
//     echo mysqli_error($link);

}

    // require '../vendor/autoload.php';
    // $client = new GuzzleHttp\Client();
    // $res = $client->request('GET', 'https://hackicims.com/api/v1/companies/72/jobs', [
    //     'headers' => [
    //         'Authorization' => 'Bearer f2db6c4321cea9e3d1fa4aa3d68c0b4adf6c317cdaa852500f63c50657c78e30fd7bac056a9dff6cc7035377f7015220fbfd6c368f6eb4fa6833c677c32a3e08'
            
    //         ]
    // ]);
    // $data = json_decode($res->getBody());

// }

setcookie("sopact_user", $email);

header('Location: ../pages/opportunities.php');

?>