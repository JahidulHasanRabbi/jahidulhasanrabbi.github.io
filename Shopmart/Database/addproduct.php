<?php

    $table = $_POST['product'];
    $brand = $_POST['brand'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $catagory = $_POST['catagory'];

   $image = '';

   if($_FILES['fileToUpload']['name']){
       move_uploaded_file( $_FILES['fileToUpload']['tmp_name'] , 'upload/'.$_FILES['fileToUpload']['name']  );
       $image = 'upload/'.$_FILES['fileToUpload']['name'];
   }
  

    $conn = mysqli_connect('localhost', 'root' , '' , 'shopmart' );

    $sql = "INSERT INTO $table (name, brand, price, stock, image, catagory)
    VALUES ('$name', '$brand', '$price', '$stock', '$image', '$catagory')";


    if ($conn->query($sql) === TRUE) 
    {
      header ('Location: /Shopmart/product/add.php');
    }

    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>