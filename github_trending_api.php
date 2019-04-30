<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://github-trending-api.now.sh/repositories?language=&since=daily');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);




