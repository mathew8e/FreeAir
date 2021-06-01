<html>
    <head>
        <title>admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            tr, td{
                border: solid black 2px;
                padding: 10px;
                text-align: center;
            }
            table{
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid py-5">
            <h1 class="text-center">Admin page</h1>
        </div>
    </body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "seznam";
    
    
    // Create connection
    $conn = new mysqli($servername,
    $username, $password, $dbname);
    
    // funkce pro vypis 
    function vypis($conn, $sqlreq){
        $result = $conn->query($sqlreq);

        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr> <td>id</td>  <td>jmeno</td>  <td>prijmeni</td>  <td>email</td>  <td>adresa</td> <td>mnozstvi</tr></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                foreach ($row as $var){
                    echo "<td>".$var."</td>";
                }
            echo "</tr>";
        }

        echo "</table>";
        } else {
        echo "0 results";
        };
    }

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "";


    vypis($conn, "SELECT * FROM nakup");
?>