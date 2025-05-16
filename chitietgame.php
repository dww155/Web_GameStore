<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Of Games - Home</title>
<!-- Thay thế bằng dòng này -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />


    <link rel="icon" href="./assets/images/icon_miniLogoHome.png" />
    <link rel="stylesheet" href="./assets/css/HomeCSS.css" />
    <link rel="stylesheet" href="./styles/ScrollbarCSS.css" />
    <link rel="stylesheet" href="./assets/css/IntroCSS.css" />

    <link rel="stylesheet" href="./assets/css/HeaderCSS.css">
    <link rel="stylesheet" href="./assets/css/HeaderCSS_Responsive.css">

    <link rel="stylesheet" href="./assets/css/FooterCSS.css" />
    <link rel="stylesheet" href="./assets/css/FooterCSS_Responsive.css" />
    <link rel="stylesheet" href="./assets/css/games.css" />
    <link rel="stylesheet" href="./assets/css/chitietgame.css" />
<!-- Thêm jQuery từ CDN Google -->
    <script src="./js/jquery-3.7.1.min.js"></script>

<!-- 
    <?php 
        require_once "./php/echoHTML.php";
    ?> -->
  </head>

  <body>
    <div id="intro" class="intro">
      <img src="./assets/images/SectionLogo.png" alt="Logo" class="logo" />
    </div>
      <?php
        headerHTML();
      ?>
   
    <div class="game-detail-container">
        <div class="game-header">
            <img src="assets/images/GTA6_wallpaper.jpg" alt="Ảnh bìa game" class="game-cover" />
            <div class="game-info">
                <h1 class="game-title">Tên Game</h1>
                <p class="game-platform">Nền tảng: PC / Console</p>
                <p class="game-release">Ngày phát hành: 2023-10-01</p>
                <p class="game-price">Giá: 499.000đ</p>
                <p class="game-developer">Nhà phát triển: Studio XYZ</p>
                <button class="add-to-cart-btn">
                <i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng
                </button>                
            </div>
        </div>

        <div class="game-description">
            <h2>Mô tả</h2>
            <p>
            Đây là mô tả chi tiết về game. Game thuộc thể loại hành động nhập vai, với đồ họa đẹp mắt, lối chơi cuốn hút và cốt truyện sâu sắc.
            </p>
        </div>

        <div class="game-trailer">
            <h2>Trailer</h2>
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/sample_trailer_id" 
            title="Trailer" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>    
    <!-- <script defer src="./assets/js/HomeJS.js"></script> -->
    <script defer src="./assets/js/HeaderJS.js"></script>
    <script defer src="./scripts/ScrollbarJS.js"></script>
    <script src="./assets/js/IntroJS.js"></script>
    <script defer src="./js/games.js"></script>
    <script defer src="./js/chitietgame.js"></script>

  </body>
</html>
