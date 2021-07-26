<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/48703dc932.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="login-style.css">

</head>
<body >
    <header>

    <?php

      include "../../hf/header.php";;

    ?>

    </header>

    <div class="main-breadcrump">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Shopmart/index.php">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Log in</li>
          </ol>
        </div>
    </div>

    <div class="main_page">
        <div class="page-title">
            <div class="-title" style="margin-left: 20px;">
                <h4>
                    <span style="font-size: 17px;">Customer Login</span>
                </h4>
            </div>
        </div>

        <div class="row mx-auto">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="box  my-5">
                    <div class="box-body">
                        <div class="box-title">
                            <span>Register Customer</span>
                        </div>

                        <form action="/Shopmart/Database/log.php" method="POST">
                            <div class="box-note">
                               <p>If you have an account, sign in with your email address.</p>
                            </div>
                        
                           <div class="form-login-group">
                               <label for="email" class="lable">
                                   <span>Email</span>
                               </label>
                           </div>
                           <div class="control">
                               <input type="email" name="email" id="inputemail" class="form-control" placeholder="Email Address" required autofocus>
                           </div>
                        
                           <div class="form-login-group">
                               <label for="password" class="lable">
                                   <span>Password</span>
                               </label>
                           </div>
                        
                           <div class="control">
                               <input type="password" name="password" id="inputpassword" class="form-control" placeholder="Password" required autofocus>
                           </div>
                        
                           <div class="submite">
                               <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                           </div>
                        
                           <div class="prinmary">
                               <div class="remind">
                                   <a href="/Shopmart/customer/forgot/forgot.php">
                                       <p><span>Forgot Your Password?</span></p>
                                   </a>
                               </div>
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
                          </div>

                          <div class="form-login-group create-account text-uppercase">
                              <a href="$" class="registion">
                                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Create an account
                                  </button>
                              </a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>