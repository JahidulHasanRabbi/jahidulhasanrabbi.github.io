<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <section class="ftco-section">

    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <form action="/Shopmart/Database/addproduct.php" method="POST" enctype="multipart/form-data">
                        <div class="select">
                            <div class="form-group">
                                <label for="price" class="label">
                                        Select Product
                                </label>
                            </div>
                            <select name="product" class="form-select" aria-label="Default select example">
                                <option Selected value="none">Select Product</option>
                                <option value="smartphone">SmartPhone</option>
                                <option value="computer">Computer and Acessory</option>
                                <option value="ena">Electronic</option>
                                <option value="woman">Woman's Fasion</option>
                                <option value="man">Man's Fasion</option>
                                <option value="home">Home and Beauty</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Brand" class="label">
                                   Brand Name
                            </label>
                        </div>

                        <div class="control">
                            <input type="brand" name="brand" id="Brand" class="form-control" placeholder="Brand Name" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="Catagory" class="label">
                                   Catagory
                            </label>
                        </div>

                        <div class="control">
                            <input type="Catagory" name="catagory" id="catagory" class="form-control" placeholder="Catagory" required autofocus>
                        </div>



                        <div class="form-group">
                            <label for="Name" class="label">
                                Product Name
                            </label>
                        </div>

                        <div class="control">
                            <input type="Name" name="name" id="name" class="form-control" placeholder="Product Name" required autofocus>
                        </div>  

                        <div class="form-group">
                            <label for="price" class="label">
                                    Price
                            </label>
                        </div>

                        <div class="control">
                             <input type="Price" name="price" id="price" class="form-control" placeholder="Price" required autofocus>
                        </div>

                        <div class="select">
                            <div class="form-group">
                                <label for="stock" class="label">
                                    Is Product Stock Avilalbe?
                                </label>
                            </div>
                                
                            <select name="stock" class="form-select" aria-label="Default select example">
                                    <option value="y">Yes</option>
                                    <option value="n">No</option>
                                    <option value="a">Comeing Soon</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Upload Product Image</label>
                            <input name="fileToUpload" class="form-control" type="file" id="fileToUpload">
                        </div>
                            

                        <div class="form-group create-account text-uppercase">
                            <a href="" class="product-add">
                                <button class="btn btn-primary btn-block text-uppercase" name="submit" type="submit">Add Prodcut</button>
                            </a>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</section>

<div class="dash container">
   <div class="row max-auto">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="">
                <a href="/Shopmart/index.php">
                    <button class="btn btn-primary">Go back to Index</button>
                </a>
            </div>
            <div class="">
                <a href="/Shopmart/admin/dashboard.php">
                <button class="btn btn-primary">Go back to Dashboard</button>
                </a>
            </div>
        </div>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>