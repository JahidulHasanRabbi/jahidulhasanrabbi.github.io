<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Customer Account</title>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/48703dc932.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="create-style.css">
    <script src="myjs.js"></script>
</head>

<body >
    <header>

    <?php

    include "../../hf/header.php";

    ?>
        
    </header>

    <div class="main-breadcrump">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Registion</li>
        </ol>
      </div>
    </div>


    <div class="main_page">
        <div class="car">
            <div style="margin-left: 20px;" class="card-titl">
                <h4>
                    <span style="font-size: 17px;">Create New Customer Account</span>
                </h4>
            </div>
        </div>

        <div class="row mx-auto">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="box  my-5">
                    <div class="box-body">
                        <div class="box-title">
                            <span>Personal Information</span>
                        </div>
                        
                        <form action="/Shopmart/Database/crea.php" method="post">

                           <div class="form-login-group">
                               <label for="first Name" class="label">
                                   First Name 
                               </label>
                           </div>

                           <div class="control">
                               <input type="First Name" name="firstName" id="firstname" class="form-control" placeholder="First Name" required autofocus>
                           </div>

                           <div class="form-login-group">
                               <label for="last name" class="label">Last Name</label>
                           </div>

                           <div class="control">
                               <input type="username" name="lastName" id="lastname" class="form-control" placeholder="Last Name" required autofocus>
                           </div>

                           <div class="form-login-group">
                            <label for="email" class="label">
                                    Email
                            </label>
                            </div>

                            <div class="control">
                             <input type="email" name="email" id="Email" class="form-control" placeholder="Email" required autofocus>
                            </div>

                            <div class="form-login-group">
                                <label for="password" class="lable">
                                    <span>Password</span>
                                </label>
                            </div>
                         
                            <div class="control">
                                <input type="password" name="password" id="inputpassword" class="form-control" placeholder="Password" required autofocus>
                            </div>
                            
                            <div class="form-login-group">
                                <label for="Confirm Password" class="lable">
                                    <span>Confirm Password</span>
                                </label>
                            </div>
                         
                            <div class="control">
                                <input type="password" name="" id="inputpassword" class="form-control" placeholder="Confirm Password" required autofocus>
                            </div>

                            <div class="form-login-group create-account text-uppercase">
                                <a href="" class="registion">
                                    <button class="btn btn-primary btn-block text-uppercase" type="submit">Create an account
                                    </button>
                                </a>
                            </div>
                         
                        
                           <div class="detail">
                               <p>
                                   <span>Or, login With</span>
                               </p>
                           </div>
                        
                           <div class="col">
                            <div class="text-uppercase">

                                <a href="#" class="facebook btn"><i class="fa fa-facebook fa-fw">
                                </i> Login With Facebook
                                </a>
                            </div>

                            <div class="text-uppercase">
                                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                                </i> login with google
                                </a>
                            </div>

                            <div class="secanfody">
                                <p>Already have an account?<a href="./customer/login/login.php">Login in</a></p>
                            </div>
                          </div>
                          
                        </form>
                    </div>
              </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">

    <?php 

    include "../../hf/footer.php";

    ?>

    </footer>

</body>
</html>