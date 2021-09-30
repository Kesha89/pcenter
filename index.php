<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="src/styles/css/main.css"></link>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div class="container">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper" id="content">
            <?php
            $slide_urls = mysqli_query($connect, "SELECT * FROM `slides`");
            $slide_urls = mysqli_fetch_all($slide_urls);
        
            foreach($slide_urls as $slide_url){
                ?>
                <div class="swiper-slide">
                    <img src="<?= $slide_url[2] ?>">
                </div>
                <?php
            }
            ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="src/js/index.js"></script>
  </body>
</html>