<?php
  
    require_once 'logi.php';
    echo $_Post['myTest'];

    $query = "SELECT * FROM animals";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
         echo "The Name is: " . $row['name'] . " and its color is: " . $row['color'] . " and its height is: " .$row['height'] . " and its weight is: " .$row['weight'] . "<br>";
    }
    
?>
