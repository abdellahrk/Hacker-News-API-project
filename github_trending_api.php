<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://github-trending-api.now.sh/repositories?language=&since=daily');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// Fetch languages

$languages = curl_init();

curl_setopt($languages, CURLOPT_URL, 'https://github-trending-api.now.sh/languages');
curl_setopt($languages, CURLOPT_RETURNTRANSFER, true);

$languages_results = json_decode(curl_exec($languages));
//var_dump(curl_getinfo($languages));
foreach($languages_results as $key => $language) {
    //var_dump($language[$language]->urlParam);
}
//var_dump($languages_results);
