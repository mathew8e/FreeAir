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

    //pro odeslani dotazniku
    if (isset($_POST["submitdotaznik"])){
        $jmeno = $_POST["jmeno"];
        $email = $_POST["email"];
        $zprava = $_POST["zprava"];

        $sql = "INSERT INTO `dotaznik` (`id`, `jmeno`, `email`, `zprava`) VALUES (NULL, '$jmeno', '$email', '$zprava');";
        if ($conn->query($sql) === TRUE) {
            echo "dotaz byl odeslan";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    if (isset($_POST["hodnocenisubmit"])){
        $rate = $_POST["rate"];

        $sql = "INSERT INTO `rating` (`id`, `rating`) VALUES (NULL, '$rate');";

        if ($conn->query($sql) === TRUE) {
            echo "hodnocení bylo odesláno";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>