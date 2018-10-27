<?php

require __DIR__ . '/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://hackicims.com/api/v1/companies/72/jobs', [
    'headers' => [
        'Authorization' => 'Bearer f2db6c4321cea9e3d1fa4aa3d68c0b4adf6c317cdaa852500f63c50657c78e30fd7bac056a9dff6cc7035377f7015220fbfd6c368f6eb4fa6833c677c32a3e08'
        
        ]
]);

$data = json_decode($res->getBody());


"INSERT INTO opportunity(ID, Title"
