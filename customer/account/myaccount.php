<?php
$logged = $_COOKIE['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/48703dc932.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="myaccount.css">
</head>
<body>

    <header>
        <?php
        include "../../hf/header.php";;
        ?>
    </header>

    <div class="main-breadcrump">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Shopmart/index.php">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Account</li>
          </ol>
        </div>
    </div>

    <section class="main_page">

        <div class="page-title">
            <div class="-title" style="margin-left: 20px;">
                <h4>
                    <span style="font-size: 17px;">My Account</span>
                </h4>
            </div>
        </div>

        <div class="container main">
            <div>
                <div class="row">
                    <div class="col-md-auto account">
                        <div class="style"></div>
                        
                        <div  class=".list-account" id="">
                        <ul class=" list-unstyled ">
                            <li>My Account</li>
                            <li class="nav-item">
                                <a href="/Shopmart/customer/account/myorder.php">My Order</a>
                            </li>
                            <li class="nav-item">
                                <a href="/Shopmart/customer/account/myorder.php">Address Book</a>
                            </li>
                            <li class="nav-item">
                                <a href="/Shopmart/customer/account/myorder.php">Account Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="/Shopmart/customer/account/myorder.php">Support Ticketr</a>
                            </li>
                        </ul>
                        </div>
                    </div>

                    <div class="col snd">
                        
                            <div class="box-i">
                                <div class="box-title">
                                    <strong>Account Information</strong>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <div class="card-title">

                                            <h4>Contact Information</h4>
                                        </div>
                                        
                                        <div class="card-text">
                                            <h4>
                                            <?php
                                                $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

                                                $sql = "SELECT  Fname, Lname FROM login WHERE email='$logged'";
                                                $result = mysqli_query($connection, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo '<span class="Name">',$row['Fname'].' '.$row['Lname']."</span><br>";
                                                    echo '<span class="Name">'.$logged.'</span>';
                                                }

                                                }
                                                else {
                                                echo "0 results";
                                                }

                                                mysqli_close($connection);

                                            ?>
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <div class="table-d">
                        <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Order</th>
                                        <th scope="col">DAte</th>
                                        <th scope="col">Ship Tp</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>.....</td>
                                        <td>.....</td>
                                        <td>Jahdiul</td>
                                        <td>.....</td>
                                        <td>.....</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>.....</td>
                                        <td>.....</td>
                                        <td>Jahdiul</td>
                                        <td>.....</td>
                                        <td>.....</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>.....</td>
                                        <td>.....</td>
                                        <td>Jahdiul</td>
                                        <td>.....</td>
                                        <td>.....</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>.....</td>
                                        <td>.....</td>
                                        <td>Jahdiul</td>
                                        <td>.....</td>
                                        <td>.....</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>.....</td>
                                        <td>.....</td>
                                        <td>Jahdiul</td>
                                        <td>.....</td>
                                        <td>.....</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>.....</td>
                                        <td>.....</td>
                                        <td>Jahdiul</td>
                                        <td>.....</td>
                                        <td>.....</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div> 

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <?php
        include "../../hf/footer.php";;
        ?>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>