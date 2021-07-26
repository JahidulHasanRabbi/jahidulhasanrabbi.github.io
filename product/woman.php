<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.php";
    ?>
    <title>Woman's Fashion</title>
    <link rel="stylesheet" href="wm.css">
</head>
<body>
    <header>
      <?php
      include "../hf/header.php";
      ?>
    </header>

    <div class="main-page">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-3 leftSidebar " style="border-right: 1px solid black;">

                        <div class="theiaStickySidebar">
                            <div class="sidebar-widget">
                                <div class="slimScrollDiv">
                                    <div class="brand-filter">
                                        <h5 class="brand-name">By Catagory</h5>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand1" class="brand_class">
                                            <label for="brand1">
                                                <span>Hoddie</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand2" class="brand_class">
                                            <label for="brand2">
                                                <span>Scarf</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand3" class="brand_class">
                                            <label for="brand3">
                                                <span>Coat</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand4" class="brand_class">
                                            <label for="brand4">
                                                <span>T-Shirt</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand5" class="brand_class">
                                            <label for="brand5">
                                                <span>Shirt</span>
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-9  content">
                        <div class="theiaStickySidebar">

                            <div class="product-row row mr-0 ">
                                <?php
                                $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

                                $command = "SELECT * FROM woman";
                                $result = $connection->query($command);

                                while($row = mysqli_fetch_assoc($result)) {
                                    echo   '<div class="col-md-4">
                                                <a href="detail.php?id='.$row['id'].'&table='.'woman'.'">
                                                    <div class="product">
                                                        <div class="card text-center">
                                                            <div class="image-box text-center">
                                                                <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'" height="280" width="210">
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="product-name">
                                                                    <h5 class="card-title">'.$row['name'].'</h5>
                                                                </div>
                                                                <div class="prduct-price">
                                                                    <h5 class="card-text">
                                                                        ৳ '.$row['price'].'
                                                                    </h5>
                                                                </div>
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
            </div>
        </div>
    </div>

    <footer class="footer text-center">
    <?php 
    include "..//hf/footer.php";
    ?>
    </footer>


</body>
</html>