<?php

require 'config.php';


if(isset($_GET['like'])){
    $liked = $_GET['like'];
    // $img_url ='https://picsum.photos/id/973/200/200';
    $img_url = $_GET['img-url'];
    $query = pg_query("INSERT INTO likes(image_url, liked) VALUES ('$img_url','$liked')");

    header('location: index.php?');
}


?>