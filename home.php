<?php  

get_header(); 

?>


<?php $categories = get_categories();

$featured_posts = get_posts(array(
    'numberposts' => 1,
    'post_status' => 'publish',
    'tag' => 'Featured',
    "orderby" => "date",
    "order" => "DESC"));


echo '<div class="container mx-auto">';
echo '<div class="row">';

foreach($featured_posts as $fp){
    
    echo '<div class="col-6">';
    echo "<a href='".get_permalink($fp)."'>"."<img src='".get_the_post_thumbnail_url($fp)."' class='img-fluid'> </a> <br/>";
    echo '</div>';

    echo '<div class="col-6">';
    echo "<h1><a href='".get_permalink($fp)."'>".$fp->post_title."</a></h1> <br/>";    
    echo "<p>".get_the_excerpt($fp)."</p>";
    echo $fp->post_date."<br/>";
    echo '</div>';
}

echo '</div>';
echo '</div>';

?>

<div id="space"></div>

<?php

echo '<div class="container">';
echo '<div class="row">';
foreach($categories as $category){
    echo '<div class="col-3 mx-auto" id="sections">';

    if($category->name != "Uncategorized"){
        echo "<h2 id='category'><a href='".get_category_link($category)."'>".$category->name."</a></h2><ul>";

        $latest_posts = get_posts(array(
            "numberposts" => 3,
            "category" => $category->term_id,
            "orderby" => "date",
            "order" => "DESC"

        ));

        
        for($x = 0; $x < count($latest_posts); $x++){
            if($x == 0){
                echo "<a href='".get_permalink($latest_posts[$x])."'>"."<img src='".get_the_post_thumbnail_url($latest_posts[$x])."' class='img-fluid'> </a> <br/>";
                echo "<li><h4><a href='".get_permalink($latest_posts[$x])."'>".$latest_posts[$x]->post_title."</a></h4></li>";
            }
            else{
                echo "<li><a href='".get_permalink($latest_posts[$x])."'>".$latest_posts[$x]->post_title."</a></li>";
            }
        }
        
        echo "</ul>";
    }
    echo '</div>';

}
echo '</div>';
echo '</div>';



echo '<div class="container">';

echo "<h2 id='local'>Local</h2>";
echo '<div class="row">';

$local_posts = get_posts(array(
    'numberposts' => 4,
    'post_status' => 'publish',
    'tag' => 'Local',
    "orderby" => "date",
    "order" => "DESC"));

foreach($local_posts as $lp){
    echo '<div class="col-3">';
    echo "<a href='".get_permalink($lp)."'>"."<img src='".get_the_post_thumbnail_url($lp)."' class='img-fluid'> </a> <br/>";
    echo "<a href='".get_permalink($lp)."'>".$lp->post_title."</a> <br/>";    
    echo '</div>';
}

echo '</div>';
echo '</div>';



get_footer(); 

?> 