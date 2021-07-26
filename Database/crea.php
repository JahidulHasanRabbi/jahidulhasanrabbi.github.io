<?php
$Fname = $_POST['firstName'];
$Lname = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost', 'root' , '' , 'shopmart' );

$sql = "INSERT INTO login (Fname, Lname, email, password)
VALUES ('$Fname', '$Lname', '$email', '$password')";


if ($conn->query($sql) === TRUE) 
{
  header('Location: /Shopmart/customer/login/login.php');
}

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>