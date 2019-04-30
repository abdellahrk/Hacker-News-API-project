<?php
include('github_trending_api.php');
include('header.php');
?>

<h1>Top 25 Trending Projects on GitHub</h1>
<div class="row">

<?php

$results = array_slice(json_decode(curl_exec($ch)), 0, 25);
foreach($results as  $result) {
    echo '<div class="col-md-4 single_card">';
?>

    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result->name; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">by: <?php echo $result->author; ?></h6>
            <p class="card-text"><?php echo 'Desc: ' . (substr($result->description, 0, 75)); ?></p>
            <a href="<?php echo $result->url; ?>" target="_blank" class="card-link">View Project</a>
            <span href="#" class="small">Forks: <?php echo $result->forks; ?></span>
        </div>
    </div>
    
<?php
    echo '</div>';
}

echo '</div>';
include('footer.php');
?>
