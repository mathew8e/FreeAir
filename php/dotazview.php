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

    function vypis2($conn, $sqlreq){
        $result = $conn->query($sqlreq);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table><tr> <td>id</td>  <td>jmeno</td>  <td>email</td>  <td>zprava</td></tr>";
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
    };

    vypis2($conn, "SELECT * FROM dotaznik");
?>