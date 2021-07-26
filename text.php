<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $connection = mysqli_connect('localhost', 'root', '', 'shopmart');

  $command = "SELECT * FROM  smartphone ORDER BY id DESC";
  $result = $connection->query($command);
  

  while($row = mysqli_fetch_assoc($result)) {
    echo $row['name']."<br>";
    echo $row['price']."<br>";
    echo $row['stock']."<br>";
    echo $row['catagory']."<br>";
    if($row['image']) {
      echo '<img src="/Shopmart/Database/'.$row['image'].'" height="200" width="200"/>';
    }
    echo "<br><br>";
  }

  echo '<div class="col">';
  echo '<div class="slide">';
  echo '<div class="card">';
        echo '<div class="image">';
        echo '<img src="/Shopmart/Database/'.$row['image'].'" alt="'.$row['name'].'" height="200" width="200">;';
        echo '</div>';

  echo '<div class="card-title">
        <span>'.$row['name'].'<span>
        </div>';

        
  echo '</div>';
  echo  '</div>';
  echo '</div>';

  ?>
</body>
</html>