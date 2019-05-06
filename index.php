<?php
include('api_request.php');
include('header.php');

define('TOP_STORIES', 'https://hacker-news.firebaseio.com/v0/topstories.json');

//var_dump(json_decode(api_endpoint_call(TOP_STORIES)));

?>
<h1>Top Stories on Hacker News</h1>

<div class="row">

<?php
// Get top stories 

//$topStoriesIds = api_endpoint_call('https://hacker-news.firebaseio.com/v0/topstories.json');
/*foreach($test as $id){
    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
    $res = json_decode(curl_exec($ch));
    echo '<a href="'. $res->url .'">' . $res->by . '</a>' . '<br>';
}
*/
function init_resource($url, $id)
{
    $resource = curl_init();
    curl_setopt($resource, CURLOPT_URL, $url . $id . '.json');
    return $result = curl_exec($resource);
}

//$ch = curl_init();
foreach ($topStoriesIds as $id){
    
    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
   
   //$result = init_resource('https://hacker-news.firebaseio.com/v0/item/', $id);
    
   echo '<div class="col-md-4 single_card">';

        $result = curl_exec($ch);
        
        $story = json_decode($result); 
?>
      
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $story->title; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">by <?php echo $story->by; ?></h6>
                    <p class="card-text"><?php echo 'Category: ' . $story->type ?></p>
                    <a href=" <?php echo $story->url; ?> " target="_blank" class="card-link">Read More...</a>
                </div>
            
        </div> 
        <?php 
        echo '</div>';
        //echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    }

        ?>

    </div>

    <h1>Best Storie on Hacker News</h1>

<div class="row">

<?php
foreach ($best_stories_id as $id){
    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
   
   $result = curl_exec($ch);
    
   echo '<div class="col-md-4 single_card">';
        
        $story = json_decode($result); ?>
      
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $story->title; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">by <?php echo $story->by; ?></h6>
                    <p class="card-text"><?php echo 'Category: ' . $story->type ?></p> 
                    <a href=" <?php echo $story->url; ?> " target="_blank" class="card-link">Read More...</a>
                </div>
            
        </div> 
        <?php 
        echo '</div>';
        //echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    
    }
        ?>
    </div>
    <h1>New Storie on Hacker News</h1>

<div class="row">

<?php
foreach ($new_stories_id as $id){
    curl_setopt($ch, CURLOPT_URL, 'https://hacker-news.firebaseio.com/v0/item/' . $id . '.json');
   
   $result = curl_exec($ch);
    
   echo '<div class="col-md-4 single_card">';
        
        $story = json_decode($result); ?>
      
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $story->title; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">by <?php echo $story->by; ?></h6>
                    <p class="card-text"><?php echo 'Category: ' . $story->type ?></p>
                    <a href=" <?php echo $story->url; ?> " target="_blank" class="card-link">Read More...</a>
                </div>
            
            </div> 
        <?php 
        echo '</div>';
        //echo '<a href="' . $story->url . '" >' . $story->title . '</a> <br>'; 
    }
      ?>

    </div>


<?php 
include('footer.php');
?>
