    
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/topstories.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$topStoriesIds = array_slice(json_decode($result), 0, 15);

$new_stories = curl_init();
curl_setopt($new_stories, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/newstories.json');
curl_setopt($new_stories, CURLOPT_RETURNTRANSFER, true);
$new_stories_exec = curl_exec($new_stories);
$new_stories_id = array_slice(json_decode($new_stories_exec), 0, 15);

$best_stories = curl_init();
curl_setopt($best_stories, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/beststories.json');
curl_setopt($best_stories, CURLOPT_RETURNTRANSFER, true);
$best_stories_exec = curl_exec($best_stories);
$best_stories_id = array_slice(json_decode($best_stories_exec), 0, 15);


/*
foreach ($topStoriesIds as $id){
    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
    $result = curl_exec($ch);

    if(curl_getinfo($ch)['http_code'] === 200) {
        
        $story = json_decode($result);

        echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    }


}
*/
?>
