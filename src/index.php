<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <!-- bootstrap -->
    
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
        <div class="col-4">
            <div class="img-container">
                <img src="https://picsum.photos/200?mountain" alt="">
                <div class="overlay">
                    <a href="#"><i class="fas fa-heart"></i></a>
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


        </div>
        <div class="col-4">
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

        </div>
        <div class="col-4">
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
    </div>

    <script src="https://kit.fontawesome.com/a256fe27cf.js" crossorigin="anonymous"></script>
</body>

</html>