<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.php";
    ?>
    <title>Product Details</title>
</head>
<body>
    <header>
      <?php
      include "../hf/header.php";
      ?>
    </header>

    <?php
    $id = $_GET['id'];
    $table = $_GET['table'];
    $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

    $command = "SELECT * FROM $table WHERE id ='$id' ";
    $result = $connection->query($command);
    $product = mysqli_fetch_assoc($result);
    
    ?>
    <div class="main_page">
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product-header allgn-items-center">
                            <div class="col-sm-8">
                                <h1 class="product-title"><?php echo $product['name']; ?></h1>

                                <ul class="metadata">
                                    <li class="brand">
                                        Brand : 
                                        <span class="brand-name-style text-uppercase">
                                        <?php echo $product['brand']; ?>
                                        </span>
                                    </li>

                                    <li class="model">
                                        Product Model : 
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="social-media-post">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-whatsapp-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="wrapper">
                            <div class="product-image">
                                <div class="main-image">
                                    <img src="/Shopmart/Database/<?php echo $product['image']; ?>" alt=""
                                    <?php
                                    if($table == 'woman' || $table == 'man') {
                                        echo 'width="300px" height="400"';
                                    }
                                    else {
                                        echo 'width= "280px" height= "280px"';
                                    }
                                    ?>>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-a col">
                        <div class="product-must-detail">
                            <div class="product-header">
                                <div class="product-main-name">
                                    <div class="page-title-aa">
                                        <h1>
                                            <span>
                                                <?php echo $product['name']; ?>
                                            </span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <a href="#">
                                    <p>Be first to review this product</p>
                                </a>
                            </div>
                            <div class="brand-name-a">
                                <h5>
                                    Brand: 
                                    <span class="text-uppercase">
                                        <?php echo $product['brand']; ?>
                                    </span>
                                </h5>
                            </div>

                            <div class="product-price">
                                <div class="price">
                                    <h1>
                                    <span>৳<?php echo $product['price']; ?></span>
                                    </h1>
                                </div>
                            </div>
                            
                            <div class="product-stock">
                                <div class="stock">
                                    <h5>
                                        Status : 
                                        <?php 
                                        if($product['stock'] == 'y') {
                                            echo '<span class="in-stock">
                                            In stock
                                            </span>';
                                        }
                                        else {
                                            if($product['stock'] == 'n') {
                                                echo 
                                                    '<span class="out-stock">
                                                    Out of Stock
                                                    </span>';
                                            }
                                            else {
                                                echo 
                                                    '<span class="coming">
                                                    Coming Soon
                                                    </span>';
                                            }
                                        }
                                        ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="warranty">
                                <p>Warranty: 12 Months Official Warranty (One Time Replacement in Whole Warranty Period)</p>
                            </div>

                            <div class="control-cart">
                                <span class="minus">
                                    <button class="btn btn-a" type="button" >-</button>
                                </span>

                                <input type="number" name="qty" id="qty" class="control" maxlength="12" value="1" title="Qty" min="1" max="10">
                                <span>
                                    <button class="btn btn-a" type="button">+</button>
                                </span>
                            </div>

                            <div class="button-add row">
                                <div class="col">
                                    <a href="#">
                                        <button type="submit" title="Add Product To Cart" class="btn btn-primary bg-dark">
                                            <span class="text-uppercase">Add To Cart</span>
                                        </button>
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#">
                                        <button type="submit" title="Buy Product" class="btn btn-danger">
                                            <span class="text-uppercase">buy now</span>
                                        </button>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="banner">
                            <a href="#">
                                <img src="/Shopmart/image/emi.jpg" alt="" width="200" height="200">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
            <ul id="pills-tab" class="nav nav-pills mb-3"  role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">More Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
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