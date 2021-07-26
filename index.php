<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "hf/head.php";
    ?>

    <link rel="stylesheet" href="index.css">
</head>

<body >
    <header>
      <?php

      include "hf/header.php";

      ?>
        
    </header>

    <div class="mainpage">
      <div class="carousel">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button class="active btnin" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/Shopmart/image/bkash.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/galaxy-m-series-big-banner.jpg" class="d-block w-100" alt="...">
              </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/amazfit-smartwatch-post-web.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/avaiable-2-sq_1200_400.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/c25s-kv-web-post_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/computer-accessories_cmp_post-web_v2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/create-style-with-branded-watch-kv-post-web_1_.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/flash-sale-a4tech-headphones-kv-web.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/grooming-essentials-kv-web.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/lenovo-accessories_post-web.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/next-day-delivery-_post-web_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/Shopmart/image/samsung_mega_sale_regular-fb_m12_big-banner.jpg" class="d-block w-100" alt="...">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="banner">
        <a class="banner-imag" href="/Shopmart/product/smartphone.php">
          <img src="/Shopmart/image/SmartPhone.jpg" alt="" class="img-fluid">
        </a>
      </div>

      <div class="container">

        <div class="product_catagory">
          <div class="block-title">
            <strong class="text-uppercase">
              mobile
            </strong>
          </div>
          <div class="row row-cols-6">
            <?php
            $catagory = 'smartphone';
            $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

            $command = "SELECT * FROM smartphone WHERE catagory = '$catagory' ORDER BY id DESC limit 6";
            $result = $connection->query($command);
            
            while($row = mysqli_fetch_assoc($result)) {
        
               echo    '<div class="col">
                          <a href="/Shopmart/product/detail.php?id='.$row['id'].'&table='.'smartphone'.'">
                            <div class="card">
                                <div class="image text-center">
                                  <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'" >
                                </div>
                              <div class="card-body">
                                <div class="">
                                  <h6 class="card-title">'.$row['name'].'</h6>
                                </div>
                                <div class="">
                                    <strong><h5 class="card-text">৳'.$row['price'].'</h5></strong>
                                </div>
                              </div>
                            </div>
                          </a> 
                        </div>';
            }

            ?>
          </div>
        </div>
      </div>

      <div class="banner">
        <a class="banner-imag" href="/Shopmart/product/ena.php">
          <img src="/Shopmart/image/ena.jpg" alt="" class="img-fluid">
        </a>
      </div>

      <div class="container">

        <div class="product_catagory">
        <div class="block-title">
            <strong class="text-uppercase">
              electronics & application
            </strong>
          </div>
          <div class="row row-cols-6">
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

            $command = "SELECT * FROM ena ORDER BY id DESC limit 6";
            $result = $connection->query($command);
            
            while($row = mysqli_fetch_assoc($result)) {
        
               echo     '<div class="col">
                          <a href="/Shopmart/product/detail.php?id='.$row['id'].'&table='.'ena'.'">
                            <div class="card">
                              <div class="image text-center">
                                <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'"/>
                              </div>
                              <div class="card-body">
                                <div class="">
                                  <h6 class="card-title">'.$row['name'].'</h6>
                                </div>
                                <div class="">
                                    <strong><h5 class="card-text">৳'.$row['price'].'</h5></strong>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>';
            }

            ?>
          </div>
        </div>
      </div>
      
      <div class="banner">
        <a class="banner-imag" href="/Shopmart/product/computer.php">
          <img src="/Shopmart/image/computer.jpg" alt="" class="img-fluid">
        </a>
      </div>

      <div class="container">

        <div class="product_catagory">
        <div class="block-title">
            <strong class="text-uppercase">
              computer & accessory
            </strong>
          </div>
          <div class="row row-cols-6">
            <?php
            $catagory = 'computer';
            $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

            $command = "SELECT * FROM computer ORDER BY id ASC limit 6";
            $result = $connection->query($command);
            
            while($row = mysqli_fetch_assoc($result)) {
        
               echo     '<div class="col">
                          <a href="/Shopmart/product/detail.php?id='.$row['id'].'&table='.'computer'.'">
                              <div class="card">
                                <div class="image text-center">
                                  <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'"/>
                                </div>
                                <div class="card-body">
                                  <div class="">
                                    <h6 class="card-title">'.$row['name'].'</h6>
                                  </div>
                                  <div class="">
                                      <strong><h5 class="card-text">৳'.$row['price'].'</h5></strong>
                                  </div>
                                </div>
                              </div>
                            </a>
                        </div>';
            }

            ?>
          </div>
        </div>
      </div>
      
      <div class="banner">
        <a class="banner-imag" href="/Shopmart/product/home.php">
          <img src="/Shopmart/image/LIFESTYLE.jpg" alt="" class="img-fluid">
        </a>
      </div>

      <div class="container">

        <div class="product_catagory">
        <div class="block-title">
            <strong class="text-uppercase">
              home and beauty
            </strong>
          </div>
          <div class="row row-cols-6">
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

            $command = "SELECT * FROM home ORDER BY id DESC limit 6";
            $result = $connection->query($command);
            
            while($row = mysqli_fetch_assoc($result)) {
        
               echo     '<div class="col">
                          <a href="/Shopmart/product/detail.php?id='.$row['id'].'&table='.'home'.'">
                          <div class="card">
                              <div class="image text-center">
                                <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'"/>
                              </div>
                              <div class="card-body">
                                <div class="">
                                  <h6 class="card-title">'.$row['name'].'</h6>
                                </div>
                                <div class="">
                                    <strong><h5 class="card-text">৳'.$row['price'].'</h5></strong>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>';
            }

            ?>
          </div>
        </div>
      </div>
      
      <div class="banner">
        <a class="banner-imag" href="/Shopmart/product/computer.php">
          <img src="/Shopmart/image/Gaming-updated.jpg" alt="" class="img-fluid">
        </a>
      </div>

      <div class="container">

        <div class="product_catagory">
        <div class="block-title">
            <strong class="text-uppercase">
              gaming consol & accessories
            </strong>
          </div>
          <div class="row row-cols-6">
            <?php
            $catagory = 'gaming';
            $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

            $command = "SELECT * FROM computer WHERE catagory = '$catagory' ORDER BY id limit 6";
            $result = $connection->query($command);
            
            while($row = mysqli_fetch_assoc($result)) {
               echo     '<div class="col">
                          <a href="/Shopmart/product/detail.php?id='.$row['id'].'&table='.'computer'.'">
                          <div class="card">
                            <div class="image text-center">
                              <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'"/>
                            </div>
                            <div class="card-body">
                              <div class="">
                                <h6 class="card-title">'.$row['name'].'</h6>
                              </div>
                              <div class="">
                                  <strong><h5 class="card-text">৳'.$row['price'].'</h5></strong>
                              </div>
                            </div>
                          </div>
                          </a>
                        </div>';
            }

            ?>
          </div>
        </div>
      </div>


    </div>

    

    <footer class="footer text-center">
    <?php 
    
    include "hf/footer.php";

    ?>

    </footer>

</body>
</html>