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
        <div class="container">

        </div>
    </div>

    <script>
        const numItemsToGenerate = 12;
        const numImagesAvailable = 280;
        const imgWidth = 200;
        const imgHeight = 200;
        const collectionID = 2489501;
        const $gallery = document.querySelector('.container');

        function renderGalleryItem(randomNumber){
            var src = `https://source.unsplash.com/collection/${collectionID}/${imgWidth}x${imgHeight}/?sig=${randomNumber}`;
            fetch(src)
            .then((response) => {
                let imgContainer = document.createElement('div');
                imgContainer.classList.add('img-container');
                let img = document.createElement('img');
                img.src = `${response.url}`;
                let overlay = document.createElement('div');
                overlay.classList.add('overlay');
                let link = document.createElement('a');
                link.classList.add('like-btn');
                link.onclick = function(e) {
                    const btn = e.target.parentElement;
                    btn.liked = 1;
                    if(btn.liked == 1){
                        imageURL = btn.parentElement.previousElementSibling.src;
                        window.location.href = `like-process.php?like=true&img-url=${imageURL}`;
                        // console.log(btn.firstChild.className); //like button
                    }
                };
                let likeBtn = document.createElement('i');
                likeBtn.classList.add('far');
                likeBtn.classList.add('fa-heart');
                link.appendChild(likeBtn);
                overlay.appendChild(link);
                imgContainer.appendChild(img);
                imgContainer.appendChild(overlay);
                $gallery.appendChild(imgContainer);

            })
        }

        for(let i=0;i<numItemsToGenerate;i++){
            let randomImageIndex = Math.floor(Math.random() * numImagesAvailable);
            renderGalleryItem(randomImageIndex);
        };

    </script>

    <script src="https://kit.fontawesome.com/a256fe27cf.js" crossorigin="anonymous"></script>
</body>

</html>