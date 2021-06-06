<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "freeair";
    
    
    // Create connection
    $conn = new mysqli($servername,
    $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT avg(`rating`) from rating";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo $row["avg(`rating`)"];
    }
?>