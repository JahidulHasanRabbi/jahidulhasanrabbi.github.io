<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css">

</head>
<body>
    
    <section class="ftco-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-user"></i>

                            </div>

                            <h3 class="text-center mb-4">Admin Login</h3>

                            <form action="/Shopmart/Database/admin.php" method="post" class="login-form">
                                
                                <div class="form-group">
                                    <input type="username" name="username" class="form-control rounded-left" placeholder="username" require autofocus>
                                </div>

                                <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left" placeholder="password" require autofocus>
                                </div>

                                <div class="form-group d-flex">
                                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" >Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>