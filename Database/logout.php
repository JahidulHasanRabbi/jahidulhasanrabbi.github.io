<?php
setcookie("email" , "" , time() - 10, "/");
header("Location: /Shopmart/customer/login/login.php");
?>