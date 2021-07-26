<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.php";
    ?>
    <title>Electronic & Application</title>
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
                                        <h5 class="brand-name">By Brand</h5>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand1" class="brand_class">
                                            <label for="brand1">
                                                <span>Samsung</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand2" class="brand_class">
                                            <label for="brand2">
                                                <span>LG</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand3" class="brand_class">
                                            <label for="brand3">
                                                <span>Hitach</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand4" class="brand_class">
                                            <label for="brand4">
                                                <span>Sharp</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="brand5" class="brand_class">
                                            <label for="brand5">
                                                <span>Sony</span>
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
                                
                                $table = $_GET['table'];
                                $connection = mysqli_connect('localhost', 'root', '', 'shopmart');
                                if($table == 'smartphone') {
                                    $brand = $_GET['brand'];
                                    $command = "SELECT * FROM $table WHERE brand = '$brand' ";
                                }
                                else {
                                    $catagory = $_GET['catagory'];
                                    $command = "SELECT * FROM $table WHERE catagory = '$catagory' ";
                                }

                                $result = $connection->query($command);

                                while($row = mysqli_fetch_assoc($result)) {
                                    echo   '<div class="col-xs-6 col-sm-4 col-md-3 pa-0">
                                                <a href="detail.php?id='.$row['id'].'&table='.$table.'">
                                                    <div class="product">
                                                        <div class="card text-center">
                                                            <div class="image-box text-center">
                                                                <img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'" height="180" width="190">
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
    include "../hf/footer.php";
    ?>
    </footer>


</body>
</html>