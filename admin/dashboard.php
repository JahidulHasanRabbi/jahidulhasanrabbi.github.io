<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopmart</title>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/48703dc932.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <header>

    </header>
    
    <div class="main_page">
        <div class="container">
            <div class="row">
               <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>
                                        <span>Total Registered Customer</span>
                                    </h5>
                                </div>

                                <div class="card-text">
                                    <?php
                                        $conn = mysqli_connect('localhost', 'root', '', 'shopmart');

                                        $command = mysqli_query($conn, "SELECT * FROM login");
                                        $nrows = mysqli_num_rows($command);
                                        echo "<span>".$nrows."<span>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>
                                        <span>Total Admin</span>
                                    </h5>
                                </div>

                                <div class="card-text">
                                    <?php
                                        $conn = mysqli_connect('localhost', 'root', '', 'shopmart');

                                        $command = mysqli_query($conn, "SELECT * FROM admin");
                                        $nrows = mysqli_num_rows($command);
                                        echo "<span>".$nrows."<span>";
                                    ?>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>  

                </div>

            </div>

            <div class="dash container">
                <div class="row max-auto">
                        <div class="col">
                            <div class="">
                                <a href="/Shopmart/product/add.php">
                                    <button class="btn btn-primary">Add Product</button>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>