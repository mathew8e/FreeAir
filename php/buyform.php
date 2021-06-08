<html>
    <head>
        <title>Buy free air</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styleheader.css">
        <link rel="icon" type="image/png" href="./img/airlogofavicon.png">
    </head>
    <body style="padding: 0px;">
        <nav class="navbar navbar-expand-lg navbar-light px-4">
            <div class="container-fluid">
                
                    <a class="navbar-brand col py-4" href="../index.php"><img src="../img/airlogo.png" alt="" width="200vh"></a>
                    
                    <h2 class="text-center col">FreeAir.com</h2>
                    <ul class="navbar-nav nav justify-content-end col">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../Buy.php">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../About.php" tabindex="-1" aria-disabled="true">About</a>
                        </li>
                    </ul>
            </div>
    </nav>
    </body>
</html>

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

    if(isset($_POST["koupit"])){
        $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];
        $email = $_POST["email"];
        $adresa = $_POST["adresa"];
        $mnozstvi = $_POST["mnozstvi"];

        $sql = "INSERT INTO `nakup` (`id`, `Jmeno`, `Prijmeni`, `Email`, `Adresa`, `Mnozstvi`) VALUES (NULL, '$jmeno', '$prijmeni', '$email', '$adresa', '$mnozstvi');";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='container py-4'>
                    <div class='row'>
                    <h1 class='col'>We are on our way</h1>
                    <img class='col' src='../img/truck.png' alt='truck'>
                    </div>
                </div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>