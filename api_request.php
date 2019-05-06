<?php
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/topstories.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


function result($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($ch);
}

$topStoriesIds = array_slice(json_decode(result('https://hacker-news.firebaseio.com/v0/topstories.json')), 0, 15);
$new_stories_id = array_slice(json_decode(result('https://hacker-news.firebaseio.com/v0/newstories.json')), 0, 15);
$best_stories_id = array_slice(json_decode(result('https://hacker-news.firebaseio.com/v0/beststories.json')), 0, 15);

?>
