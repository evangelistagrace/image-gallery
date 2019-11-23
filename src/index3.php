<?php
    require 'like-process.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>
    <div class="navbar">
        <div class="title">
            Image Gallery
        </div>
        <ul class="links">
            <li class="item"><a href="./my-favorites.php">My Favorites</a></li>
            <li class="item"><a href="#">Log out</a></li>
        </ul>
    </div>
    
    <div class="gallery">
        <div class="lightbox"></div>
        
            <div class="img-container">
                <img src="https://picsum.photos/200?mountain" alt="">
                <div class="overlay">
                    <!-- <a class="like-btn" href="like-process.php?like=true&img-url=imageURL"><i class="far fa-heart"></i></i></a> -->
                    <a class="like-btn" ><i class="far fa-heart"></i></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?valley" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?dog" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?sunset" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?beach" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?bear" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?plant" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?cat" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>

            <div class="img-container">
                <img src="https://picsum.photos/200?city" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
            </div>
        
    </div>

    <script>
        var imageURL;
        const likeBtns = Array.from(document.querySelectorAll('.like-btn'));
        likeBtns.forEach(btn => {
            btn.addEventListener('click', getImgUrl);
            btn.liked = 1; //true
        });

        function getImgUrl(){
            const btn = this;
            if(btn.liked == 1){
                imageURL = btn.parentElement.previousElementSibling.src;
                window.location.href = `like-process.php?like=true&img-url=${imageURL}`;
                console.log(btn.firstChild.className); //like button
            }
        }
    </script>

    <script src="https://kit.fontawesome.com/a256fe27cf.js" crossorigin="anonymous"></script>
</body>

</html>