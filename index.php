<?php
include('api_request.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top & Trending Articles - HackerNews</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <h1>Top Stories on Hacker News</h1>

<div class="row">

<?php
foreach ($topStoriesIds as $id){
    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
   
   $result = curl_exec($ch);
    
   echo '<div class="col-md-4 single_card">';

    if(curl_getinfo($ch)['http_code'] === 200) {
        
        $story = json_decode($result); ?>
      
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $story->title; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">by <?php echo $story->by; ?></h6>
                    <p class="card-text"><?php echo 'Category: ' . $story->type ?></p>
                    <a href=" <?php echo $story->url; ?> " class="card-link">Read More...</a>
                </div>
            
        </div> 
        <?php 
        echo '</div>';
        //echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    }
}
        ?>

    </div>

    <h1>Best Storie on Hacker News</h1>

<div class="row">

<?php
foreach ($best_stories_id as $id){
    curl_setopt($best_stories, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
   
   $result = curl_exec($best_stories);
    
   echo '<div class="col-md-4 single_card">';

    if(curl_getinfo($best_stories)['http_code'] === 200) {
        
        $story = json_decode($result); ?>
      
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $story->title; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">by <?php echo $story->by; ?></h6>
                    <p class="card-text"><?php echo 'Category: ' . $story->type ?></p> 
                    <a href=" <?php echo $story->url; ?> " class="card-link">Read More...</a>
                </div>
            
        </div> 
        <?php 
        echo '</div>';
        //echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    }
}
        ?>

    <h1>New Storie on Hacker News</h1>

<div class="row">

<?php
foreach ($new_stories_id as $id){
    curl_setopt($new_stories, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
   
   $result = curl_exec($new_stories);
    
   echo '<div class="col-md-4 single_card">';

    if(curl_getinfo($new_stories)['http_code'] === 200) {
        
        $story = json_decode($result); ?>
      
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $story->title; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">by <?php echo $story->by; ?></h6>
                    <p class="card-text"><?php echo 'Category: ' . $story->type ?></p>
                    <a href=" <?php echo $story->url; ?> " class="card-link">Read More...</a>
                </div>
            
        </div> 
        <?php 
        echo '</div>';
        //echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    }
}
        ?>

    </div>
</div>

<?php 
include('footer.php');
?>
</body>
</html>
