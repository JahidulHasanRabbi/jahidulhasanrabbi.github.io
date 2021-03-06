<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/48703dc932.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="forgot.css">

</head>
<body >
    <header>

    <?php

    include "../../hf/header.php";

    ?>

    </header>
    
    <div class="main_page">

        <div class="page-title">
            <div>
                <h4>
                   <span">Forgot Your Password</span>
                </h4>
            </div>
        </div>

        <div class="row mx-auto">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="box  my-5">
                    <div class="box-body">

                        <form action="#"  class="form-singin">
                            <div class="box-note">
                               <p>Please enter your email address below to receive a password reset link.</p>
                            </div>
                        
                           <div class="form-login-group">
                               <label for="email" class="lable">
                                   <span>Email</span>
                               </label>
                           </div>
                           <div class="control">
                               <input type="email" name="Email" id="inputemail" class="form-control" placeholder="Email Address" required autofocus>
                           </div>
                        
                           <div class="submite">
                               <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Reset My Password</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>