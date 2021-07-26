<?php

  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $conn = mysqli_connect('localhost', 'root' , '' , 'shopmart' );

  $command = "Select * FROM login WHERE email = '$email' ";
  $result = $conn->query($command);

  if($result->num_rows > 0){
      $command = "Select * FROM login WHERE email = '$email' and password='$password'";
      $result = $conn->query($command);


     if($result->num_rows > 0){

        if(isset($_COOKIE["email"])){
           
            setcookie("email", $email , time()+36000, "/");
        }
        else{
            setcookie("email", $email , time()+3600, "/");
         }

        header('Location: /Shopmart/customer/account/myaccount.php');

     }
     else{
       setcookie('error' , 'Wrong Password' , time()+60000);
       header('Location: /Shopmart/customer/login/login.php');
     }
  }
  else{
     setcookie('error' , 'Wrong email' , time()+600000);
     header('Location: /Shopmart/customer/login/login.php');
  }

?>