<?php

require __DIR__ . '/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://hackicims.com/api/v1/companies/72/jobs', [
    'headers' => [
        'Authorization' => 'Bearer f2db6c4321cea9e3d1fa4aa3d68c0b4adf6c317cdaa852500f63c50657c78e30fd7bac056a9dff6cc7035377f7015220fbfd6c368f6eb4fa6833c677c32a3e08'
        
        ]
]);

$data = json_decode($res->getBody());


define('DB_SERVER', 'sopact-db.c0enhg7bdhdx.us-east-2.rds.amazonaws.com:3306');
define('DB_USERNAME', 'SOPACT_ADMIN');
define('DB_PASSWORD', 'SO_HACK102718');
define('DB_DATABASE', 'sopact-db');


$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$sql = "SELECT * from nonprofits


$result = mysqli_query($connection, $sql);

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<br>";
    echo "ID: " . $row["ID"]. "<br>";
	
}
     echo "Fetched data successfully\n";
     //$result = $conn->query($query);
?>