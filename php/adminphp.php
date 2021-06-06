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
    
    //funkce která vytvari options v listu
    function nameList($conn, $sqlreq) {
        $result = $conn->query($sqlreq);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value=".$row["id"].">".$row["id"]."</option>";
            }
        }
    }
    
    vypis($conn, "SELECT * FROM nakup");

    if(isset($_POST["delsubmit"])){
        $sqlreq = "DELETE from `nakup` where `nakup`.`id`=".$_POST["vybratid"];
        $conn->query($sqlreq);
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>