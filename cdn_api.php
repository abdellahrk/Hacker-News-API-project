<?php
$ch = curl_init();
$url = 'https://api.cdnjs.com/libraries';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$results = array_slice(json_decode(curl_exec($ch), true), 0 , 5);


//var_dump(curl_getinfo($ch));

foreach($results as $key => $result) {
   var_dump($result[0]['latest']);
}
