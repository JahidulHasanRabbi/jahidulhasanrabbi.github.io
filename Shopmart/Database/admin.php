<?php

  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn = mysqli_connect('localhost', 'root' , '' , 'Shopmart' );

  $command = "Select * FROM admin WHERE username = '$username'";
  $result = $conn->query($command);

  if($result->num_rows > 0){
      $command = "Select * FROM admin WHERE username = '$username' and password='$password'";
      $result = $conn->query($command);


     if($result->num_rows > 0){

        header('Location: /Shopmart/admin/dashboard.php');

     }
     else{
       header('Location: /Shopmart/admin.php');
     }
  }
  else{
     setcookie('error' , 'Wrong email' , time()+600000);
     header('Location: /Shopmart/admin.php');
  }

?>
