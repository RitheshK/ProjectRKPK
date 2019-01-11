<?php
    include_once 'Animals.html';
    require_once 'logi.php';
    echo $_Post['myTest'];

    $query = "SELECT * FROM animals";
    $result = mysqli_query($connection, $query);
    echo "<table><tr><th>Name</th><th>Color</th><th>Height</th><th>Weight</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>".$row["name"]."</td><td>".$row["color"]."</td><td>".$row["height"]."</td><td>".$row["weight"]."</td></tr>" ;
    }
    echo "</table>";
?>
